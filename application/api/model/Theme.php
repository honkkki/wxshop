<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 13:40
 */

namespace app\api\model;
use think\Model;

class Theme extends BaseModel
{
    protected $hidden = [
        'delete_time','update_time','topic_img_id','head_img_id'
    ];
        public function topicImg()
        {
            //表中有外键定义为belongsTo，否则使用hasone
            return $this->belongsTo('Image','topic_img_id','id');
        }

        public function headImg()
        {
            return $this->belongsTo('Image','head_img_id','id');
        }

        public function products()
        {
            return $this->belongsToMany('Product','theme_product','product_id','theme_id');
        }


}