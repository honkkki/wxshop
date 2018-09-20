<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 13:40
 */

namespace app\api\controller\v1;
use app\api\validate\IDCollection;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\ThemeException;
use think\Controller;
use app\api\model\Theme as ThemeModel;


class Theme extends Controller
{
    //主题种类列表
    public function getSimList($ids='')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',',$ids);
        $res = ThemeModel::with('topicImg,headImg')->select($ids);
        if (!$res)
        {
            throw new ThemeException();
        }
        return json($res);
    }

    /**
     * @url /theme/:id
     *主题详情页
     */
    public function getComplexOne($id)
    {
        (new IDMustBePostiveInt())->goCheck();
        $res = ThemeModel::with('products,topicImg,headImg')->find($id);
        if (!$res)
        {
            throw new ThemeException();
        }
        return $res;

    }

}