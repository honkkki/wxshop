<?php
/**
 * Created by PhpStorm.
 * User: honkkki
 * Date: 2018/9/5
 * Time: 22:08
 */
namespace app\api\validate;
use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        ['name','require|max:10','用户名不能为空|用户名最大不可超过10位'],
        ['email','email']
    ];
}
