<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/11
 * Time: 1:00
 */
namespace app\lib\exception;
use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {
        if ($e instanceof BaseException)
        {
            //如果是非服务器或代码的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }
        else
        {
            //返回详细错误页面给服务器端开发人员
            if (config('app_debug'))
            {
                //返回页面 还原TP默认错误页面
                return parent::render($e);
            }
            else {
                //返回给客户端json格式
                $this->code = 500;
                $this->msg = '服务器内部错误';
                $this->errorCode = 999;
                $this->recordErrorLog($e);
            }
        }
        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request->url()
        ];
        return json($result,$this->code);
    }
        private function recordErrorLog(Exception $e)
        {
            Log::init(
              [
                  'type' => 'File',
                  'path' => LOG_PATH,
                  'level' => ['error']
              ]
            );
            Log::record($e->getMessage(),'error');
        }


}