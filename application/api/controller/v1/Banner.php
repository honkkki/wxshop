<?php
namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    public function getBanner($id){
        /**
         * @ $id banner id
         */
        (new IDMustBePostiveInt())->goCheck();

            $banner = BannerModel::get($id);
//            $banner=BannerModel::getBannerByID($id);
            if (!$banner)
            {
                throw new BannerMissException();
            }
           return json($banner);
    }
}
