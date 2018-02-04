<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = 'Create Customer';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($model==null):?>
     <h2>Ups! Anda melewati batas customer</h2>

    <?php
    else:
        echo $this->render('_form', [
        'model' => $model,
    ]);
    endif;
    ?>

</div>
