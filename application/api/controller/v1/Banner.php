<?php
namespace app\api\controller\v1;
use app\api\validate\TestValidate;
use think\Validate;

class Banner
{
    public function getBanner($id){
        /**
         * @$id banner id
         */
        //独立验证
        $data=[
            'name' =>'',
            'email' =>'vendorqq.com'
        ];
       $vali=new TestValidate();
       $vali->batch()->check($data);

        print_r($vali->getError());
    }
}
