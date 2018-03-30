<?php


namespace app\lib\exception;

// 用户的操作异常
class BaseException
{
    // HTTP 状态码
    public $code = 400;
    // 错误具体信息
    public $msg = '参数错误';
    // 自定义错误码
    public $errorCode = 10000;
}