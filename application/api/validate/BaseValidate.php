<?php
/**
 * Created by PhpStorm.
 * User: honkkki
 * Date: 2018/9/8
 * Time: 22:00
 */
namespace app\api\validate;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate{
        public function goCheck(){
            //获取到所有HTTP传入的参数
            //校验参数
            $resquest=Request::instance();
            $params=$resquest->param();
            $res=$this->check($params);
            if (!$res){
                $error= $this->error;
                throw new Exception($error);
            }
            else{
                return true;
            }
        }
}