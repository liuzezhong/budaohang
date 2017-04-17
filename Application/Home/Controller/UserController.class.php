<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/2/4
 * Time: 15:30
 */

namespace Home\Controller;


use Think\Exception;

class UserController extends CommonController {
    public function index() {
        $this->display();
    }

    public function userset() {
        $user_id = $_SESSION['adminUser']['user_id'];

        if(!$user_id)
            return show(0,'用户ID信息不存在！');
        try {
            $userinfo = D('Admin')->getAdminByID($user_id);
            if(!$userinfo)
                return show(0,'用户信息不存在！');
            $this->assign('userinfo',$userinfo);
        } catch (Exception $e) {
            return show(0,$e->getMessage());
        }
        $this->display();
    }

    public function update() {
        if($_POST) {
            $data = $_POST;
        }
        if(!$data['user_id'])
            return show(0,'用户ID获取失败！');
        if(!$data['username'])
            return show(0,'请填写昵称！');
        if(!$data['mobile'] && !$data['email'])
            return show(0,'手机号码和电子邮件不能同时为空！');

        $user_id = $data['user_id'];
        unset($data['user_id']);

        try {
            $res = D('Admin')->getAdminByID($user_id);
            if(!$res)
                return show(0,'用户数据不存在！');

            $dobule_username = D('Admin')->whetherExistUsername($data['username']);
            if($dobule_username && $dobule_username['user_id'] != $user_id)
                return show(0,'该用户名已被占用！');

            if($data['email']) {
                $dobule_email = D('Admin')->whetherExistEmail($data['email']);
                if($dobule_email && $dobule_email['user_id'] != $user_id)
                    return show(0,'该邮箱已被占用！');
            }

            if($data['mobile']) {
                $dobule_mobile = D('Admin')->whetherExistMobile($data['mobile']);
                if($dobule_mobile && $dobule_mobile['user_id'] != $user_id)
                    return show(0,'该手机号码已被占用！');
            }



        } catch (Exception $e) {
            return show(0,$e->getMessage());
        }

        if($data['username'] == $res['username'])
            unset($data['username']);
        if($data['mobile'] == $res['mobile'])
            unset($data['mobile']);
        if($data['email'] == $res['email'])
            unset($data['email']);
        if($data['wechat'] == $res['wechat'])
            unset($data['wechat']);
        if($data['company'] == $res['company'])
            unset($data['company']);
        if($data['job'] == $res['job'])
            unset($data['job']);
        if($data['describes'] == $res['describes'])
            unset($data['describes']);
        if($data['headerimg'] == $res['headerimg'])
            unset($data['headerimg']);
        if(!$data['headerimg'])
            unset($data['headerimg']);

        if(!$data['username'] && !$data['mobile'] && !$data['email'] && !$data['wechat'] && !$data['company'] && !$data['job'] && !$data['describes'] && !$data['headerimg'])
            return show(0,'未有任何修改！');

        try {
            $update = D('Admin')->updateAdminByID($user_id,$data);
            if($update)
                return show(1,'信息更新成功！');
            if(!$update)
                return show(0,'信息更新失败！');
        } catch (Exception $e) {
            return show(0,$e->getMessage());
        }



    }
}