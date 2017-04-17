<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/2/1
 * Time: 20:16
 */

/**
 * Ajax返回的json格式的方法
 * @param $status
 * @param $message
 * @param array $data
 */
function show($status,$message,$data = array() ) {
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );
    exit(json_encode($result));
}

/**
 * 对密码进行MD5加密
 * @param $password
 * @return string
 */
function getMD5Password($password) {
    return md5($password .C('MD5_PRE'));
}

/**
 * 获取客户端IP地址
 * @return string
 */
function getIP(){
    $realip = '';
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }
    return $realip;
}

function getCompany($data){
    $str = '';
    if(!$data)
        $str = '未知';
    if($data)
        $str = $data;
    return $str;
}

//获取当前登录用户头像
function getLoginHeaderImg() {
    if(!$_SESSION['adminUser']['user_id'])
        return '';
    $user_id = $_SESSION['adminUser']['user_id'];

    $res = D('Admin')->getAdminByID($user_id);
    return $res['headerimg'];
    /*if(!$user_id)
        return show(0,'用户未登录，用户ID不存在！');*/

    /*try {
        $res = D('Admin')->getAdminByID($user_id);
        if(!$res)
            return show(0,'用户信息不存在！');
        return $res['headerimg'];
    } catch (Exception $e){
    return show(0,$e->getMessage());
}*/
}