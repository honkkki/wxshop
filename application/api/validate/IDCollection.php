<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 14:15
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule=[
        'ids' =>'require|checkIDs'
    ];

    protected $message = [
        'ids' =>'ID必须以逗号隔开的多个正整数'
    ];

    protected function checkIDs($value)
    {
        $value = explode(',',$value);
        if (empty($value))
        {
            return false;
        }
        foreach ($value as $id)
        {
            if (!$this->isPositiveInt($id))
            {
                return false;
            }
        }
        return true;
    }

}