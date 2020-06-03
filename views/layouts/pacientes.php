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
</head>
<body>

<nav class="navbar navbar-expand-lg bar-style px-3">
        <a class="navbar-brand my-2" href="#"><img src="/img/logo_villaluz_blanco.svg" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-icons text-light menu-ico">menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-active text-none"><a class="text-light d-flex align-items-center text-none" href="#"><span class="material-icons">search</span><span class="menu_paciente"> Inicio</span></a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/pacientes"><span class="material-icons">assignment</span><span class="menu_paciente"> Registros</span></a></button>
                </li>
                <li class="nav-item dropdown">
                    <button type="submit" class="btn btn-main text-none">
                        <a class="nav-link dropdown-toggle text-light d-flex align-items-center text-none" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="material-icons">assignment_ind</span><span class="menu_paciente"> Medicamentos</span>
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item purple_color text-dark" href="#">Base</a>
                    <a class="dropdown-item purple_color text-dark" href="#">Eventuales</a>
                    </div>
                    </button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/app/show"><span class="material-icons">assignment_ind</span><span class="menu_paciente"> Citas Medicas</span></a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/app/show"><span class="material-icons">assignment_ind</span><span class="menu_paciente"> Reporte Semanal</span></a></button>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/app/show"><span class="material-icons">assignment_ind</span><span class="menu_paciente"> Reloj Checador</span></a></button>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active d-flex align-items-center mx-1">
                    Paciente: <?= Yii::$app->user->identity->username ?>
                </li>
                <li class="nav-item mx-1 my-2">
                    <button type="submit" class="btn btn-main text-none"><a class="text-light d-flex align-items-center text-none" href="/site/logout"><span class="material-icons">exit_to_app</span>Cerrar Sesión</a></button>
                </li>
            </ul>
        </div>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>