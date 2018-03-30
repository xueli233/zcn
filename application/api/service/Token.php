<?php

namespace app\api\service;

use app\lib\enum\ScopeEnum;
use app\lib\exception\ForbiddenException;
use app\lib\exception\ParameterException;
use app\lib\exception\TokenException;
use think\Cache;
use think\Exception;
use think\Request;

class Token
{
  /**
   * 生成token
   */
  public static function generrateToken(){
    $randChar = getRandChar(32);
  }
}