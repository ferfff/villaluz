<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
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
    <link rel="shortcut icon" href="/img/villaluz.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli: 400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2a68bf40c.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Owl Carousel Assets -->
    <!-- <link href="css/bootstrapTheme.css" rel="stylesheet"> -->
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <link href="/css/owl.theme.css" rel="stylesheet">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg bar-style px-3">
        <a class="navbar-brand my-2" href="/app/"><img src="/img/logo_villaluz_blanco.svg" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-icons text-light menu-ico">menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(Yii::$app->session['nivel'] == 3) { ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/app"><span class="material-icons">home</span> Inicio</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/pacientes"><span class="material-icons">assignment</span> Pacientes</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/referencias"><span class="material-icons">description</span>Referencias</a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/app/show"><span class="material-icons">assignment_ind</span>Empleados</a></button>
                </li>
            </ul>
            <?php } ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active d-flex align-items-center mx-1">
                    Hola, <?= Yii::$app->user->identity->id ?>
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
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
<?php $this->endPage() ?>
