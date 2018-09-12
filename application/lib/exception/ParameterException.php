<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/11
 * Time: 18:06
 */
namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;


}