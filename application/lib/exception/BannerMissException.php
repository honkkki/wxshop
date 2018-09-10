<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/11
 * Time: 1:09
 */
namespace app\lib\exception;

class BannerMissException extends BaseException
{
        public $code= 404;
        public $msg = '请求的Banner不存在';
        public $errorCode = 40000;

}