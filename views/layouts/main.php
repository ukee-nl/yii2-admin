<?php

use yii\bootstrap5\NavBar;
use yii\bootstrap5\Nav;
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */

list(,$url) = Yii::$app->assetManager->publish('@mdm/admin/assets');
$this->registerCssFile($url.'/main.css');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php
        NavBar::begin([
            'options' => ['class' => ' navbar navbar-expand-lg navbar-dark bg-dark   fixed-top'],
        ]);

        if (!empty($this->params['top-menu']) && isset($this->params['nav-items'])) {
            echo Nav::widget([
                'options' => ['class' => 'nav navbar-nav'],
                'items' => $this->params['nav-items'],
            ]);
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ms-auto'],
            'items' => $this->context->module->navbar,
         ]);
        NavBar::end();
        ?>

        <div class="container">
            <?= $content ?>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="float-end"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
