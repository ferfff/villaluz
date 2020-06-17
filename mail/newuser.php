<?php
use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <title><?= Html::encode('Mail') ?></title>
    <?php $this->head() ?>
</head>

    <style>
        #header{
            text-align: center;
            margin-bottom: 250px;
        }

        .footer-bottom{
            background-color: #80007e;
            border-top: 5px solid #5EAAA9;
            height: 80px;
            margin-top: 250px;
        }

        .password{
            background-color: #5EAAA9;
            font-size: 22px;
            text-align: center;
            width: 320px;
            height: 300px
            color: #ffffff;
            margin: 0 auto;
            padding: 20px;
        }
    </style>

<body>
    <div id="header">
		<div class="logo"><img alt="logo villaluz" src="img/logo_villaluz_color.jpg" width="200px"></div>
	</div>
    
    <div class="password">
        <?php $this->beginBody() ?>
            Hola <b>¡<?= $id ?>!</b><br><br> 
            Tu password es <b><?= $password ?></b>
        <?php $this->endBody() ?>
    </div>

    <div class="footer-bottom"></div>
</body>
</html>
<?php $this->endPage() ?>




    

    

    