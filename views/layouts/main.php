<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div>
              <img src="<?=  Yii::getAlias('@web')?>/img/header.png" class="img-responsive" alt="header" >
            </div>
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-leaf"></span>  เว็บไซต์แรก',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-defalse',
        ],
    
    ]);
    

           $setting=[
               ['label' => 'สถานะคอมพิวเตอร์', 'url' => ['/comstatus']], 
            ];
      
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"></span> หน้าแรกจร้า', 'url' => ['/site/index']],
            ['label' => '<span class="glyphicon glyphicon-user"></span> เกี่ยวกับเราจร้า', 'url' => ['/site/about']],
            ['label' => '<span class="glyphicon glyphicon-envelope"></span> ติดต่อเรา', 'url' => ['/site/contact']],
            ['label' => '<span class="glyphicon glyphicon-envelope"></span> ตั้งค่าระบบ', 'items' => $setting],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
