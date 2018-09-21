<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/21
 * Time: 10:47
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code= 404;
    public $msg = '分类栏目不存在';
    public $errorCode = 30000;
}