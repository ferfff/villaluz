<?php

namespace app\controllers;

use app\models\Checador;
use app\models\Pacientes;
use Yii;
use yii\filters\AccessControl;
use app\models\Registros;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegistrosController implements the CRUD actions for Registros model.
 */
class RegistrosController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
                
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function beforeAction($action)
    {
        //Aplicar layout
        $this->layout='pacientes';
        $session = Yii::$app->session;

        if ($action->id !== 'view') {
            if (!isset($session['idPaciente'])) {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }
        return parent::beforeAction($action);
    }

    /**
     * Lists all Registros models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Registros::find()
                        ->innerJoin('pacientes','`registros`.`pacientes_id` = `pacientes`.`id`')
                        ->andWhere(['registros.pacientes_id' => Yii::$app->session['idPaciente']])
        ]);

        $dataProvider->setPagination(['pageSize' => 5]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays Reloj checador.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        // Obtenemos el nombre del paciente para mostrarlo en el layout
        $pacienteObj = Pacientes::findOne($id);
        if($pacienteObj){
            $this->setSession($pacienteObj);
            return $this->render('view', [
                'idPaciente' => $id,
            ]);
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Reloj checador
     * @return mixed
     */
    public function actionChecador()
    {
        $request = Yii::$app->request;
        $message = '';
        
        if (Yii::$app->request->isAjax && Yii::$app->request->post()) {
            $idUser = Yii::$app->user->identity->id;
            $datetime = new \DateTime('now');
            $now = $datetime->format('Y-m-d H:i:s');

            $checador = Checador::findOne([
                'users_id' => $idUser,
                'pacientes_id' => $request->post('idPaciente'),
                'salida' => null,
            ]);

            switch ($request->post('type')) {
                case 'checkin':
                    if (!$checador){
                        $checador = new Checador();
                        $checador->entrada = $now;
                        $checador->users_id = $idUser;
                        $checador->pacientes_id = $request->post('idPaciente');
                        if($checador->save()) {
                            \Yii::$app->session->setFlash('success', 'Entrada Agregada: '.$now);
                        }else {
                            
                        }
                        $message = 'Entrada Agregada: '.$now;
                    } else {
                        \Yii::$app->session->setFlash('error', 'Algo falló, intente nuevamente');
                        $message = 'Entrada ya registrada, registre la salida';
                    }
                    break;
                case 'checkout':
                        if ($checador){
                            $checador->salida = $now;
                            $checador->save();
                            $message = 'Salida Agregada: '.$now;
                        } else {
                            $message = 'Salida registrada, registre una nueva entrada.';
                        }
                        
                    break;
            }
        }

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return ['message' => $message];
    }

    /**
     * Creates a new Referencias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Registros();

        if ($model->load(Yii::$app->request->post())) {
            $datetime = new \DateTime('now');
            $now = $datetime->format('Y-m-d H:i:s');
            $model->pacientes_id = Yii::$app->session['idPaciente'];
            $model->users_id = Yii::$app->user->identity->id;
            $model->fecha = $now;
            if($model->save()) {
                \Yii::$app->session->setFlash('success', 'Registro creado correctamente');
            }else {
                \Yii::$app->session->setFlash('error', 'Algo falló, intente nuevamente');
            }

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Referencias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            \Yii::$app->session->setFlash('success', 'Registro actualizado correctamente');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pacientes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        \Yii::$app->session->setFlash('success', 'Registro eliminado correctamente');
        return $this->redirect(['index']);
    }

    public function actionPdf(){
        Yii::$app->response->format = 'pdf';
        
        $query = Registros::find();
        $registros = $query->all();

		// Rotate the page
		Yii::$container->set(Yii::$app->response->formatters['pdf']['class'], [
			'format' => [216, 356], // Legal page size in mm
			'orientation' => 'Landscape', // This value will be used when 'format' is an array only. Skipped when 'format' is empty or is a string
			'beforeRender' => function($mpdf, $data) {},
			]);
		
		$this->layout = 'pdflayout';
		return $this->render('pdf', [
            'registros' => $registros,
        ]);
    }

    /**
     * Reloj checador
     * @return mixed
     */
    public function actionTiempos()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Checador::find()
                        ->innerJoin('users','`checador`.`users_id` = `users`.`id`')
                        ->innerJoin('pacientes','`checador`.`pacientes_id` = `pacientes`.`id`')
                        ->andWhere(['checador.pacientes_id' => Yii::$app->session['idPaciente']])
        ]);

        $dataProvider->setPagination(['pageSize' => 10]);

        return $this->render('tiempos', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPdfTiempos(){
        Yii::$app->response->format = 'pdf';
        
        $query = Checador::find();
        $tiempos = $query->innerJoin('users','`checador`.`users_id` = `users`.`id`')
                    ->innerJoin('pacientes','`checador`.`pacientes_id` = `pacientes`.`id`')
                    ->andWhere(['checador.pacientes_id' => Yii::$app->session['idPaciente']])
                    ->all();

		// Rotate the page
		Yii::$container->set(Yii::$app->response->formatters['pdf']['class'], [
			'format' => [216, 356], // Legal page size in mm
			'orientation' => 'Landscape', // This value will be used when 'format' is an array only. Skipped when 'format' is empty or is a string
			'beforeRender' => function($mpdf, $data) {},
			]);
		
		$this->layout = 'pdflayout';
		return $this->render('pdfTiempos', [
            'tiempos' => $tiempos,
        ]);
    }
    
    /**
     * Finds the Registros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Registros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Registros::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findUserModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function setSession(Pacientes $pacienteObj)
    {
        $session = Yii::$app->session;
        $session['nombrePaciente'] = $pacienteObj->getNombreCompleto();
        $session['idPaciente'] = $pacienteObj->id;
    }
}
