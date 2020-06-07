<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Medicamentos;
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
                        ->andWhere(['medicamentos.tipo' => 'base'])
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
            'query' => Medicamentos::find()
                        ->innerJoin('pacientes','`medicamentos`.`pacientes_id` = `pacientes`.`id`')
                        ->andWhere(['medicamentos.pacientes_id' => Yii::$app->session['idPaciente']])
                        ->andWhere(['medicamentos.tipo' => 'eventual'])
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
            $model->tipo = 'base';
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
        $model = new Medicamentos();

        if ($model->load(Yii::$app->request->post())) {
            $model->pacientes_id = Yii::$app->session['idPaciente'];
            $model->users_id = Yii::$app->user->identity->id;
            $model->tipo = 'eventual';
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
            return $this->redirect(['base']);
        }

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
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['eventual']);
        }

        return $this->render('update', [
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

        return $this->redirect(['index']);
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
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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
}
