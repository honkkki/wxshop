<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 12:20
 */

namespace app\api\model;
use think\Model;

class BaseModel extends Model
{
    protected function prefixImgUrl($value,$data)
    {
        $finalUrl = $value;
        if ($data['from'] == 1)
        {
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }

}