<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/11
 * Time: 1:04
 */
namespace app\lib\exception;

class BaseException
{
    /**
     * @var code HTTP状态码
     *     msg 错误具体信息
     *      errorCode 自定义的错误码
     */
    public $code;
    public $msg;
    public $errorCode;


}