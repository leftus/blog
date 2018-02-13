<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WechatController extends Controller{
  function index(Request $request){
    $code = $request->code;
    if($code){
      $token_url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".config('wechat.mp.appid')."&secret=".config('wechat.mp.appsecret')."&code=".$code."&grant_type=authorization_code";
      $res = file_get_contents($token_url);
      var_dump($res);
    }else{
      session(['state' => 'nnLGhnYJxkf4H3uMMf4h5O4v3l2NGnU4wGlUrcxiwSg']);
      $code_url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".config('wechat.mp.appid')."&redirect_uri=".urlencode('http://shop.xunibaike.com/wechat')."&response_type=code&scope=snsapi_userinfo&state=".session('state')."#wechat_redirect";
      return redirect($code_url);
    }
  }
}
