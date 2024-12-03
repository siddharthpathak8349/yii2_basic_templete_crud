<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>

<div class="search mt-5">
    <?php
    $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]);
    ?>
    <div class="row w-100">

        <div class="col-xl-2 col-lg-4 col-md-6 mb-3 ">
            <div class="input_fields">
                <?= $form->field($model, 'title')->textInput(['placeholder' => 'Title', 'class' => 'form-control w-100'])->label(false) ?>
            </div>
        </div>


        <div class="col-xl-2 col-lg-4 col-md-6 mb-3 ">
            <div class="input_fields">
                <?= $form->field($model, 'author')->textInput(['placeholder' => 'Author', 'class' => 'form-control w-100'])->label(false) ?>
            </div>
        </div>


        <div class="col-xl-2 col-lg-4 col-md-6 mb-3">
            <div class="input_fields">
                <?= $form->field($model, 'published_date')->input('Publish Date', ['placeholder' => 'Search By Date', 'class' => 'form-control w-100'])->label(false) ?>
            </div>
        </div>


        <div class="col-md-6 col-lg-3 md-mb-0 mb-3">
            <?= Html::submitButton('Search <i class="fas fa-search ms-1" style="font-size: 12px; background-color:red !important ;"></i>', ['class' => 'btn btn-pink text-white']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<style>
    .select2-container--default .select2-selection--single {
        height: 41px !important;
        min-width: 238px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        width: 100% !important;
    }

    .input_fields .select2-container {
        width: 100% !important;
    }

    .form-control {
        width: 100% !important;
    }

    .select2-selection.select2-selection--single {
        height: 41px !important;
        min-width: 238px;
    }

    @media (max-width: 1804px) {
        .select2-container--default .select2-selection--single {
            min-width: 0;
            width: auto;
        }

        .select2-selection.select2-selection--single {
            min-width: 0;
            width: auto;
            overflow-wrap: break-word;
        }
    }

    .btn-pink {
        background-color: pink !important;
        border-color: pink !important;
    }

    .btn-pink:hover {
        background-color: darkpink;
        border-color: darkpink;
    }
</style>