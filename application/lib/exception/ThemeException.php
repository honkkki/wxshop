<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/20
 * Time: 15:52
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code= 404;
    public $msg = '请求的主题不存在';
    public $errorCode = 30000;
}