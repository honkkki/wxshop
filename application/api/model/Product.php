<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 13:40
 */

namespace app\api\model;

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

    //获取最新商品 $count为显示数量
    public function getMostRecent($count)
    {
            $order = [
              'create_time' =>'desc'
            ];
            return $this->limit($count)->order($order)->select();

    }

}