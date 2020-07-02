<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Medicamentos;
use app\models\MedicamentosEventual;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MedicamentosController implements the CRUD actions for Medicamentos model.
 */
class MedicamentosController extends Controller
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
                        'actions' => ['base','eventual',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['pdf','pdf-eventual',],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return !User::isUserEmpleado(Yii::$app->user->identity->id);
                        }
                    ],
                    [
                        'actions' => ['create','create-eventual',],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isUserEmpleado(Yii::$app->user->identity->id);
                        }
                    ],
                    [
                        'actions' => ['update','delete','update-eventual','delete-eventual','create','create-eventual',],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isUserAdmin(Yii::$app->user->identity->id);
                        }
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
    public function actions()
    {
        $this->layout='pacientes';
    }

    /**
     * Displays a single Medicamentos model.
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionBase()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Medicamentos::find()
                        ->innerJoin('pacientes','`medicamentos`.`pacientes_id` = `pacientes`.`id`')
                        ->andWhere(['medicamentos.pacientes_id' => Yii::$app->session['idPaciente']])
        ]);

        $dataProvider->setPagination(['pageSize' => 5]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Medicamentos model.
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionEventual()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MedicamentosEventual::find()
                        ->innerJoin('pacientes','`medicamentos_eventuales`.`pacientes_id` = `pacientes`.`id`')
                        ->andWhere(['medicamentos_eventuales.pacientes_id' => Yii::$app->session['idPaciente']])
        ]);

        $dataProvider->setPagination(['pageSize' => 5]);

        return $this->render('indexEventual', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Medicamentos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Medicamentos();

        if ($model->load(Yii::$app->request->post())) {
            $model->pacientes_id = Yii::$app->session['idPaciente'];
            $model->users_id = Yii::$app->user->identity->id;
            
            $model->save();
            
            return $this->redirect(['base']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Medicamentos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateEventual()
    {
        $model = new MedicamentosEventual();

        if ($model->load(Yii::$app->request->post())) {
            $model->pacientes_id = Yii::$app->session['idPaciente'];
            $model->users_id = Yii::$app->user->identity->id;
            
            $model->save();

            return $this->redirect(['eventual']);
        }

        return $this->render('createEventual', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Medicamentos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //\Yii::$app->session->setFlash('success', 'Medicamento actualizado correctamente');
            return $this->redirect(['base']);
        }

        //\Yii::$app->session->setFlash('error', 'Algo falló, intente nuevamente');
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Medicamentos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateEventual($id)
    {
        $model = $this->findModelEventual($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //\Yii::$app->session->setFlash('success', 'Medicamento actualizado correctamente');
            return $this->redirect(['eventual']);
        }

        //\Yii::$app->session->setFlash('error', 'Algo falló, intente nuevamente');
        return $this->render('updateEventual', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Medicamentos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        //\Yii::$app->session->setFlash('success', 'Medicamento eliminado correctamente');
        return $this->redirect(['base']);
    }

    /**
     * Deletes an existing Medicamentos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteEventual($id)
    {
        $this->findModelEventual($id)->delete();
        //\Yii::$app->session->setFlash('success', 'Medicamento eliminado correctamente');
        return $this->redirect(['eventual']);
    }

    public function actionPdf(){
        Yii::$app->response->format = 'pdf';
        
        $query = Medicamentos::find()
            ->innerJoin('pacientes','`medicamentos`.`pacientes_id` = `pacientes`.`id`');
        $medicamentos = $query->where(['tipo' => 'base'])
            ->andWhere(['medicamentos.pacientes_id' => Yii::$app->session['idPaciente']])
            ->andWhere(['medicamentos.tipo' => 'base'])
            ->all();

		// Rotate the page
		Yii::$container->set(Yii::$app->response->formatters['pdf']['class'], [
			'format' => [216, 356], // Legal page size in mm
			'orientation' => 'Landscape', // This value will be used when 'format' is an array only. Skipped when 'format' is empty or is a string
			'beforeRender' => function($mpdf, $data) {},
			]);
		
		$this->layout = 'pdflayout';
		return $this->render('pdf', [
            'medicamentos' => $medicamentos,
        ]);
    }

    public function actionPdfEventual(){
        Yii::$app->response->format = 'pdf';
        
        $query = MedicamentosEventual::find()
            ->innerJoin('pacientes','`medicamentos_eventuales`.`pacientes_id` = `pacientes`.`id`');
        $medicamentos = $query->where(['medicamentos_eventuales.pacientes_id' => Yii::$app->session['idPaciente']])->all();

		// Rotate the page
		Yii::$container->set(Yii::$app->response->formatters['pdf']['class'], [
			'format' => [216, 356], // Legal page size in mm
			'orientation' => 'Landscape', // This value will be used when 'format' is an array only. Skipped when 'format' is empty or is a string
			'beforeRender' => function($mpdf, $data) {},
			]);
		
		$this->layout = 'pdflayout';
		return $this->render('pdfEventual', [
            'medicamentos' => $medicamentos,
        ]);
    }

    /**
     * Finds the Medicamentos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Medicamentos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Medicamentos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Finds the Medicamentos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MedicamentosEventual the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelEventual($id)
    {
        if (($model = MedicamentosEventual::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
