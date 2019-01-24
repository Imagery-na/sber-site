<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="structure.css">
    <link rel="stylesheet" type="text/css" href="site.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header">
 <img src="1.png" class="icon">
 <h2>Ш К и Т </h2>
 <h5>Школа Кода и Технологий</h5>
    <div class="account">
            <h5>Личный кабинет</h5>
            <input type="button" name="login" value="Войти" class="login">
            <input type="button" name="logout" value="Выйти" class="logout">
    </div>
</div>
<div class="wrap">
    <div class="nav">
        <div>
            <a href="/course/"> Курсы</a>
        </div>
        <div>
            <a href="/group/"> Группы</a>
        </div>
        <div>
            <a href="/lecture/"> Лекции</a>
        </div>
        <div>
            <a href="/task/"> Задания</a>
        </div>
        <div>
            <a href="/timetable/">Расписание</a>
        </div>
    </div>
    <div class="container">
    <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
