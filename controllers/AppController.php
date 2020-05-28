<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\User;
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
        /*$dataProvider = new ActiveDataProvider([
            'query' => Users::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);*/

        $query = User::find();

        /*$pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);*/

        $users = $query->orderBy('username')
            ///->offset($pagination->offset)
            //->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'users' => $users,
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
            $model->password = $password; //Yii::$app->security->generatePasswordHash($password);
            if ($model->save()) {
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

    public function actionChangepassword($id){
        $model = $this->findModel($id);

        /*$model = User::model()->findByAttributes(array('id'=>$id));
        $model->setScenario('changePwd');
    
    
         if(isset($_POST['User'])){
                
            $model->attributes = $_POST['User'];
            $valid = $model->validate();
                    
            if($valid){
                    
              $model->password = md5($model->new_password);
                    
              if($model->save())
                 $this->redirect(array('changepassword','msg'=>'successfully changed password'));
              else
                 $this->redirect(array('changepassword','msg'=>'password not changed'));
                }
            }*/
    
        return $this->render('changepassword', [
            'model' => $model,
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
