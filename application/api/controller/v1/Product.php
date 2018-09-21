<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 16:58
 */

namespace app\api\controller\v1;
use app\api\validate\Count;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\ProductException;

class Product
{
    public function getRecent($count=15)
    {
        (new Count())->goCheck();
        $res = model('Product')->getMostRecent($count);
        if (!$res)
        {
            throw new ProductException();
        }
        $col = collection($res);
        $col->hidden(['summary']);
        return $res;
    }

    //通过categoryid获取菜单下的所有商品
    public function getAllInCategory($id)
    {
        (new IDMustBePostiveInt())->goCheck();
        $res = model('Product')->getProductsByCateID($id);
        if (!$res)
        {
            throw new ProductException();
        }
        $col = collection($res);
        $col->hidden(['summary']);
        return $res;
    }

}