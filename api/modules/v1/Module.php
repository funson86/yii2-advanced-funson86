<?php
namespace api\modules\v1;

use yii\filters\auth\HttpBasicAuth;
use api\components\QueryParamAuth;

/**
 * iKargo API V1 Module
 * 
 * @author Budi Irawan <budi@ebizu.com>
 * @since 1.0
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'api\modules\v1\controllers';

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            //'class' => HttpBasicAuth::className(),
            'class' => QueryParamAuth::className(),
        ];
        return $behaviors;
    }
}
