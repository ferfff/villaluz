<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php $this->registerCsrfMetaTags() ?>
    <title>Villaluz PDF</title>
    <style>

    </style>
</head>
<body>

<body>  
    <header>
    </header>

    <?= $content ?>

    <footer>
    </footer>
  
</body>
</html>
