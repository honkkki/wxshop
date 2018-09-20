<?php
/**
 * Created by PhpStorm.
 * User: honkkki
 * Date: 2018/9/8
 * Time: 21:24
 */
namespace app\api\validate;

class IDMustBePostiveInt extends BaseValidate {
        protected $rule=[
            'id' =>'require|isPositiveInt',
        ];

        protected $message = [
            'ids' =>'ID必须为正整数'
        ];

}