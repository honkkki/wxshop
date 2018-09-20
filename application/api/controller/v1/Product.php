<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 16:58
 */

namespace app\api\controller\v1;
use app\api\validate\Count;
use app\lib\exception\ProductException;
use think\Controller;

class Product extends Controller
{
    public function getRecent($count=15)
    {
        (new Count())->goCheck();
        $res = model('Product')->getMostRecent($count);
        if (!$res)
        {
            throw new ProductException();
        }
        return $res;
    }

}