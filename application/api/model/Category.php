<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/21
 * Time: 10:39
 */

namespace app\api\model;


class Category extends BaseModel
{

    protected $hidden = [
      'delete_time','update_time'
    ];
        public function Img()
        {
            return $this->belongsTo('Image','topic_img_id','id');
        }
}