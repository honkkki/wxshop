<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/18
 * Time: 22:41
 */

namespace app\api\model;
use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['id','from','delete_time','update_time'];
    public function getUrlAttr($value,$data)
    {
        return $this->prefixImgUrl($value,$data);

    }

}