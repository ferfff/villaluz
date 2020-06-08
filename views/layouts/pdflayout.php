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
		font-size: 8px !important;
		height: 100vh;
		padding: 0 0;
        }
        
        .head{margin-bottom:0; padding-bottom: 0;}

        .footer-bottom{
            position:absolute; 
            bottom:25;
            background-color: #5EAAA9;
            height: 30px;
            width: 90%;
            border-top:5px solid #80007E;
            text-align: center;
        }

        .logo{
            margin: 0;
            padding: 0
        }
    </style>
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
