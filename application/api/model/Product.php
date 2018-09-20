<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 13:40
 */

namespace app\api\model;
use think\Model;

class Product extends BaseModel
{
    protected $hidden = [
       'delete_time','update_time','create_time','main_img_id','pivot','from','category_id'
    ];
    public function getMainImgUrlAttr($value,$data)
    {
        return $this->prefixImgUrl($value,$data);
    }

    public function imgs()
    {

    }

}