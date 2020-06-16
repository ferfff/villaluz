<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Reportes;
use app\models\User;
use DateTime;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReportesController implements the CRUD actions for Reportes model.
 */
class ReportesController extends Controller
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
                        'actions' => ['index',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['pdf',],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return !User::isUserEmpleado(Yii::$app->user->identity->username);
                        }
                    ],
                    [
                        'actions' => ['create',],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isUserEmpleado(Yii::$app->user->identity->username);
                        }
                    ],
                    [
                        'actions' => ['update','delete','create',],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isUserAdmin(Yii::$app->user->identity->username);
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
     * Lists all Reportes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Reportes::find()
                        ->innerJoin('pacientes','`reportes`.`pacientes_id` = `pacientes`.`id`')
                        ->andWhere(['reportes.pacientes_id' => Yii::$app->session['idPaciente']])
        ]);

        $dataProvider->setPagination(['pageSize' => 5]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Reportes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reportes();

        if ($model->load(Yii::$app->request->post())) {
            $model->pacientes_id = Yii::$app->session['idPaciente'];
            $model->users_id = Yii::$app->user->identity->id;
            $datetime = new \DateTime('now');
            $model->fecha = $datetime->format('Y-m-d H:i:s');
            if($model->save()) {
                //\Yii::$app->session->setFlash('success', 'Reporte creado correctamente');
            }else {
                //\Yii::$app->session->setFlash('error', 'Algo falló, intente nuevamente');
            }

            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Reportes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //\Yii::$app->session->setFlash('success', 'Reporte actualizado correctamente');
            return $this->redirect(['index',]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Reportes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        //\Yii::$app->session->setFlash('success', 'Reporte eliminado correctamente');
        return $this->redirect(['index']);
    }

    public function actionPdf(){
        Yii::$app->response->format = 'pdf';
        
        $query = Reportes::find()
        ->innerJoin('pacientes','`reportes`.`pacientes_id` = `pacientes`.`id`')
        ->andWhere(['reportes.pacientes_id' => Yii::$app->session['idPaciente']]);
        $reportes = $query->all();

		// Rotate the page
		Yii::$container->set(Yii::$app->response->formatters['pdf']['class'], [
			'format' => [216, 356], // Legal page size in mm
			'orientation' => 'Landscape', // This value will be used when 'format' is an array only. Skipped when 'format' is empty or is a string
			'beforeRender' => function($mpdf, $data) {},
			]);
		
		$this->layout = 'pdflayout';
		return $this->render('pdf', [
            'reportes' => $reportes,
        ]);
    }

    /**
     * Finds the Reportes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reportes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reportes::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
