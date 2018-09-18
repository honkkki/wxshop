<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/18
 * Time: 21:24
 */

namespace app\api\model;
use think\Model;

class BannerItem extends Model
{
    public function img()
    {
        return $this->belongsTo('Image','img_id','id');

    }

}