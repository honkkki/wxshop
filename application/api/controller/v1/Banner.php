<?php
namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;

class Banner
{
    public function getBanner($id){
        /**
         * @ $id banner id
         */
        (new IDMustBePostiveInt())->goCheck();

          $banner=BannerModel::getBannerByID($id);
          //将不需要的数据字段隐藏

            if (!$banner)
            {
                throw new BannerMissException();
            }
           return json($banner);
    }
}
