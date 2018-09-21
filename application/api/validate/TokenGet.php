<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/21
 * Time: 12:17
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
        protected $rule = [
          'code' => 'require|isNotEmpty'
        ];

        protected $message = [
          'code' => '没有code无法获取token'
        ];
}