<?php

namespace api\components;

/**
 * QueryParamAuth for iOS and Android variable
 */

class QueryParamAuth extends \yii\filters\auth\QueryParamAuth
{
    public $tokenParam = 'access_token';
}