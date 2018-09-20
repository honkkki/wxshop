<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/10
 * Time: 23:39
 */

namespace app\api\model;

use think\Db;
use think\Exception;
use think\Model;

class Banner extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];

        public function items()
        {
            return $this->hasMany('BannerItem','banner_id','id');
        }



        public static function getBannerByID($id)
        {

            $banner = self::with(['items','items.img'])->find($id);
            return $banner;

            //原生SQL
//                $res=Db::query('select * from banner_item where banner_id=?',[$id]);
//                return $res;
//                $res = Db::table('banner_item')->where('banner_id','=',$id)->select();
//                return $res;

        }

}