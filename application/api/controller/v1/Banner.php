<?php
namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveInt;
use app\api\validate\TestValidate;
use think\Validate;

class Banner
{
    public function getBanner($id){
        /**
         * @$id banner id
         */
        (new IDMustBePostiveInt())->goCheck();
        


    }
}
