<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/18
 * Time: 21:24
 */

namespace app\api\model;
use think\Model;

class BannerItem extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];

    public function img()
    {
        return $this->belongsTo('Image','img_id','id');

    }

}