<?php
/**
 * Created by PhpStorm.
 * User: honkkki
 * Date: 2018/9/8
 * Time: 21:24
 */
namespace app\api\validate;
use think\Validate;

class IDMustBePostiveInt extends BaseValidate {
        protected $rule=[
            'id' =>'require|isPositiveInt'
        ];

    /**
     * 验证传进来的ID是否合法
     * @param $value  传进来的ID
     * @param string $rule
     * @param string $data
     * @param string $field 字段
     * @return string
     */
        protected function isPositiveInt($value,$rule='',$data='',$field='')
        {
            if(is_int($value+0) && ($value+0)>0){
                return true;
            }
            else{
                return $field.'必须是正整数';
            }
        }

}