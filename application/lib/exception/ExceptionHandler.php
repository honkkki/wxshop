<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/11
 * Time: 1:00
 */
namespace app\lib\exception;
use think\Exception;
use think\exception\Handle;

class ExceptionHandler extends Handle
{
    public function render(Exception $ex)
    {
        return json('------');
    }

}