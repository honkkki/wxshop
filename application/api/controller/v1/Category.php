<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/21
 * Time: 10:38
 */

namespace app\api\controller\v1;
use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
        public function getAllCategory()
        {

            $cate = CategoryModel::with('Img')->select();
            if (!$cate)
            {
                throw new CategoryException();
            }
            return $cate;
        }
}