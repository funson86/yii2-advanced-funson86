<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use vova07\fileapi\Widget;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', 'Profile');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'surname') ?>
                <?= $form->field($model, 'avatar_url')->widget(
                    Widget::className(),
                    [
                        'settings' => [
                            'url' => ['fileapi-upload']
                        ],
                        'crop' => true,
                        'cropResizeWidth' => 100,
                        'cropResizeHeight' => 100
                    ]
                )->label(false) ?>
                <div class="form-group">
                    <?= Html::submitButton( Yii::t('app', 'Update'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
