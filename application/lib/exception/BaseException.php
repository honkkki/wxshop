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
    //自定义异常 属于非服务器或代码异常
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
            throw new Exception('参数必须是数组');
        }
        if (array_key_exists('code',$params))
        {
            $this->code = $params['code'];
        }
        if (array_key_exists('msg',$params))
        {
            $this->msg = $params['msg'];
        }
        if (array_key_exists('errorCode',$params))
        {
            $this->errorCode = $params['errorCode'];
        }
    }

}