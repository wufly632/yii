<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PostStatus */

$this->title = 'Create Post Status';
$this->params['breadcrumbs'][] = ['label' => 'Post Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
