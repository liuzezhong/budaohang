<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/2/4
 * Time: 13:25
 */

namespace Home\Controller;


use Think\Controller;

class LoginController extends Controller  {

    public function index() {
        $this->display();
    }

    public function login() {
        if($_POST)
            $data = $_POST;

        if(!$data['email'] && !$data['mobile'] && !$data['username'])
            return show(0,'请输入用户名或邮箱地址！');
        if(!$data['password'])
            return show(0,'请输入您的登录密码！');

        if($data['email']) {
            //比对email是否存在，如果存在，比对密码
            $res_email = D('Admin')->whetherExistEmail($data['email']);

            if(!$res_email || $res_email['status'] != 1)
                return show(0,'您输入的邮箱不存在！');

            if($res_email['password'] != getMD5Password($data['password']))
                return show(0,'密码错误！');

            //更新登录时间
            D('Admin')->updateAdminByID($res_email['user_id'],array(
                'lastlogintime' => time(),
                'lastloginip' => getIP(),
            ));

            session('adminUser',$res_email);
            return show(1,'登陆成功!');
        }

        if($data['mobile']) {
            //比对email是否存在，如果存在，比对密码
            $res_mobile = D('Admin')->whetherExistMobile($data['mobile']);

            if(!$res_mobile || $res_mobile['status'] != 1)
                return show(0,'您输入的手机号码不存在！');

            if($res_mobile['password'] != getMD5Password($data['password']))
                return show(0,'密码错误！');

            //更新登录时间
            D('Admin')->updateAdminByID($res_mobile['user_id'],array(
                'lastlogintime' => time(),
                'lastloginip' => getIP(),
            ));

            session('adminUser',$res_mobile);
            return show(1,'登陆成功!');
        }

        if($data['username']) {
            //比对email是否存在，如果存在，比对密码
            $res_username = D('Admin')->whetherExistUsername($data['username']);
            if(!$res_username || $res_username['status'] != 1)
                return show(0,'您输入的用户名不存在！');

            if($res_username['password'] != getMD5Password($data['password']))
                return show(0,'密码错误！');

            //更新登录时间
            D('Admin')->updateAdminByID($res_username['user_id'],array(
                'lastlogintime' => time(),
                'lastloginip' => getIP(),
            ));
            session('adminUser',$res_username);
            return show(1,'登陆成功!');
        }
    }

    public function loginOut() {
        session('adminUser',null);
        redirect('index.php?m=home&c=login');
    }
}