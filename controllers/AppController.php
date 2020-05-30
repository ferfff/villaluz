<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\User;
use app\models\ChangePasswordForm;
use Exception;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * AppController implements the CRUD actions for Users model.
 */
class AppController extends Controller
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
        $this->layout='app';
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find()->where(['activo' => 0]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $user = $this->findModel(\Yii::$app->user->identity->id);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'nivel' => $user->nivel,
            //'pagination' => $pagination,
        ]);
    }

    /**
     * Displays a single Users model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())){
            $str=rand(); 
            $password = md5($str);
            //$password = 12345;
            $model->authKey = $str.trim($model->username);
            $model->activo = 1;
            $model->password = $password; 
            //Yii::$app->security->generatePasswordHash($password);
            if ($model->save()) {
                Yii::$app->mailer->compose('@app/mail/newuser', ['password' => $password])
                    ->setFrom('ferfff@yahoo.com.mx')
                    ->setTo('ferchofff@gmail.com')
                    ->setSubject('Email avanzado desde Villaluz prueba')
                    ->send();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }  

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())){
            $model->nacimiento=Yii::$app->formatter->asDate($model->nacimiento, "yyyy-MM-dd");
            if(!$model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Users model.
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

    public function actionChangepassword(){
        $id = \Yii::$app->user->identity->id;

        try {
            $model = new ChangePasswordForm($id);
        } catch (Exception $e) {
            throw new \yii\web\BadRequestHttpException($e->getMessage());
        }
     
        if ($model->load(\Yii::$app->request->post()) && $model->validate() && $model->changePassword()) {
            \Yii::$app->session->setFlash('success', 'Password Changed!');
        }
            
        return $this->render('changepassword', [
            'model' => $model,
        ]);
    }

    public function actionPdf(){
        Yii::$app->response->format = 'pdf';
        
        $query = User::find();
        $users = $query->orderBy('username')->all();

		// Rotate the page
		Yii::$container->set(Yii::$app->response->formatters['pdf']['class'], [
			'format' => [216, 356], // Legal page size in mm
			'orientation' => 'Landscape', // This value will be used when 'format' is an array only. Skipped when 'format' is empty or is a string
			'beforeRender' => function($mpdf, $data) {},
			]);
		
		$this->layout = 'pdflayout';
		return $this->render('pdf', [
            'users' => $users,
        ]);
	}

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
