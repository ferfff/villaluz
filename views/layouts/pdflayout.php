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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        
        body{
		font-family: 'Roboto', sans-serif !important;
		color: #3C4858;
		margin-left:auto;
		margin-right:auto;
		max-width:297mm;
		max-height:210mm;
		font-size: 14px;
		height: 100vh;
		padding: 0 0;
        }
        
        .pdf-header{margin-bottom:5em; padding-bottom: 15px; border-bottom: 1px solid #80007E;}

        .footer-bottom{
            background-color: #5EAAA9;
            height: 30px;
            width: 100%;
            border-top:5px solid #80007E;
        }
    </style>
</head>
<body>

<body>  
    <header class="pdf-header">
        <img alt="logo villaluz" src="/img/logo_villaluz_color.jpg" width="130px">
    </header>

    <?= $content ?>

    <footer class="footer-bottom">
    </footer>
  
</body>
</html>
