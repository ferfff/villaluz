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

    <link rel="stylesheet" type="text/css" href="/css/pdf.css">
</head>
<body>

<body> 
    <div id="head">
		<div class="logo"><img alt="logo villaluz" src="/img/logo_villaluz_color.jpg" width="180px"></div>
	</div>

    <?= $content ?>

    <footer class="footer-bottom">
    </footer>
  
</body>
</html>
