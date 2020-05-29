<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="web/favicon.ico" type="image/x-icon">
    
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
    <?php
    /*--
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    --*/
    ?>

<nav class="navbar navbar-expand-lg bar-style px-3">
        <a class="navbar-brand my-2" href="#"><img src="img/logo_villaluz_blanco.svg" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-icons text-light menu-ico">menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-active text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">search</span>  Filtrar Nombre</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/pacientes/"><span class="material-icons">assignment</span> Pacientes</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">description</span>Referencias</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">assignment_ind</span>Empleados</a></button>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active d-flex align-items-center mx-1">
                    Hola, Oscar Pérez
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/site/logout"><span class="material-icons">exit_to_app</span>Cerrar Sesión</a></button>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
<?php $this->endPage() ?>
