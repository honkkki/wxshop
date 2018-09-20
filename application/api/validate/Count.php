<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 23:07
 */

namespace app\api\validate;


class Count extends BaseValidate
{
      protected $rule = [
        'count' => 'isPositiveInt|between:1,15'
      ];

      protected $message = [
        'count.isPositiveInt' => 'count必须是正整数',
        'count.between' => 'count范围在1-15之间'
      ];

}