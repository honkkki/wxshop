<?php
/**
 * Created by PhpStorm.
 * User: honki
 * Date: 2018/9/21
 * Time: 12:17
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    public function getToken($code = '')
    {
        (new TokenGet())->goCheck();
        $ut = new UserToken();
        $token = $ut->get($code);
        return $token;
    }
}