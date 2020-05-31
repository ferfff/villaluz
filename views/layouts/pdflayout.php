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
		font-family: 'Roboto', sans-serif;
		color: #3C4858;
		margin-left:auto;
		margin-right:auto;
		max-width:297mm;
		max-height:210mm;
		font-size: 16px;
		height: 100vh;
		padding: 25px 0;
        }
        
        .pdf-header{text-align:center; margin-bottom:5em; padding-bottom: 10px; }

        .footer-bottom{
            background-color: #5EAAA9;
            height: 50px;
            width: 100%;
            border-top:5px solid #80007E;
        }
    </style>
</head>
<body>

<body>  
    <header class="pdf-header">
        <img alt="logo villaluz" src="logo_villaluz_color.svg" width="200px">
    </header>

    <?= $content ?>

    <footer class="footer-bottom">
    </footer>
  
</body>
</html>
