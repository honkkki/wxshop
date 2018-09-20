<?php
/**
 * Created by PhpStorm.
 * User: honkkki
 * Date: 2018/9/8
 * Time: 22:00
 */
namespace app\api\validate;
use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate{
        public function goCheck(){
            //获取到所有HTTP传入的参数
            //校验参数
            $resquest=Request::instance();
            $params=$resquest->param();
            //自定义ID验证规则
            $res=$this->batch()->check($params);
            if (!$res){
                //面向对象通过构造函数初始化
                $e = new ParameterException([
                    'msg' => $this->error,
//                    'code' => 400,     //可选参数
//                    'errorCode' => 10002
                ]);
//                $e = new ParameterException();
//                $e->msg = $this->error;
                throw $e;
//                $error= $this->error;
//                throw new Exception($error);
            }
            else{
                return true;
            }
        }

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
            return false;
        }
    }




}