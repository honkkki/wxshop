<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/11
 * Time: 1:04
 */
namespace app\lib\exception;

use think\Exception;

class BaseException extends Exception
{
    /**
     * @var code HTTP状态码
     *     msg 错误具体信息
     *      errorCode 自定义的错误码
     */
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;

    public function __construct($params = [])
    {
        if (!is_array($params))
        {
            return ;
        }
    }

}