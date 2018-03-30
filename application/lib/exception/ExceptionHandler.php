<?php

namespace app\lib\exception;


use think\exception\Handle;
use Exception;
use think\Request;

class ExceptionHandler extends Handle
{
    /**
     *  所有的异常都会进入
     * 1.不记录日志，向用户返回信息
     * 2.记录，不返回
     */
    private $code;
    private $msg;
    private $errorCode;
    public function render(Exception $e){
        if($e instanceof BaseException){ // 如果是来自(自定义的异常)
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        } else { //系统内部错误
            $this ->code = 500;
            $this -> msg = '服务器错误';
            $this ->errorCode = 999;
        }
        $request = Request::instance();
        $result = [
            'msg'=> $this -> msg,
            'error_code' => $this -> errorCode,
            'request_url' =>  $request->url()
        ];

        return json($result, $this->code);
    }
}