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
    <link rel="stylesheet" href="/css/site.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/img/villaluz.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2a68bf40c.js" crossorigin="anonymous"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg bar-style px-3">
        <a class="navbar-brand my-2" href="#"><img src="/img/logo_villaluz_blanco.svg" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-icons text-light menu-ico">menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="d-flex align-items-center text-none" href="/app/"><span class="material-icons">home</span><span class="menu_paciente"> Inicio</span></a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="d-flex align-items-center text-none" href="/registros/"><span class="material-icons">assignment</span><span class="menu_paciente"> Registros</span></a></button>
                </li>
                <li class="nav-item dropdown d-flex align-items-center">
                    <button type="submit" class="btn btn-main text-none p-0 m-0">
                        <a class="nav-link dropdown-toggle d-flex align-items-center text-none" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="material-icons">medical_services</span><span class="menu_paciente"> Medicamentos</span>
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item purple_color" href="/medicamentos/base">Base</a>
                    <a class="dropdown-item purple_color" href="/medicamentos/eventual">Eventuales</a>
                    </div>
                    </button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="d-flex align-items-center text-none" href="/citas"><span class="material-icons">event_note</span><span class="menu_paciente"> Citas Medicas</span></a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="d-flex align-items-center text-none" href="/reportes"><span class="material-icons">text_snippet</span><span class="menu_paciente"> Reporte Semanal</span></a></button>
                </li>
                <?php if(isset(Yii::$app->session['nivel']) AND Yii::$app->session['nivel'] != 1) { ?>
                    <li class="nav-item mx-1 my-2">
                        <button type="submit" class="btn btn-main text-none"><a class="d-flex align-items-center text-none" href="/registros/view?id=<?= Yii::$app->session['idPaciente'] ?>"><span class="material-icons">av_timer</span><span class="menu_paciente"> Reloj Checador</span></a></button>
                    </li>
                <?php } ?>
                <?php if(isset(Yii::$app->session['nivel']) AND Yii::$app->session['nivel'] != 2) { ?>
                    <li class="nav-item mx-1 my-2">
                        <button type="submit" class="btn btn-main text-none"><a class="d-flex align-items-center text-none" href="/registros/tiempos"><span class="material-icons">update</span><span class="menu_paciente"> Tiempos</span></a></button>
                    </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active d-flex align-items-center mx-1">
                    Hola, <?= Yii::$app->user->identity->username ?>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="d-flex align-items-center text-none" href="/site/logout"><span class="material-icons">exit_to_app</span>Cerrar Sesión</a></button>
                </li>
            </ul>
        </div>
    </nav>
    <div>
    <ul class="nav justify-content-center nav-paciente">
        <li class="nav-item active d-flex align-items-center mx-1">
            Paciente: <?= Yii::$app->session['nombrePaciente'] ?>
        </li>
    </ul>
    </div>
</div>

    <?= Alert::widget() ?>
    <?= $content ?>

<?php $this->endBody() ?>

<script src="/js/bootstrap.min.js"></script>

</body>

</html>
<?php $this->endPage() ?>