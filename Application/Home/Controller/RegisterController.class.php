<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/1/31
 * Time: 21:35
 */

namespace Home\Controller;


use Think\Controller;
use Think\Exception;

class RegisterController extends Controller  {
    public function index() {
        $this->display();
    }

    public function register() {
        $this->display();
    }

    public function userRegister() {
        //post中获取数据
        $data = $_POST;

        //验证数据有效性
        if($data) {

            if(!$data['username'] || !isset($data['username']))
                return show(0,'请填写你的昵称！');
            if(!$data['password'] || !isset($data['password']))
                return show(0,'请输入密码！');
        }

        //比对数据库验证数据是否重复
        try {
            //如果用户输入的是email,则判断该email是否已存在
            if($data['email']) {
                $res_email = D('Admin')->whetherExistEmail($data['email']);
                if($res_email || $res_email['status'] == 1)
                    return show(0,'该邮箱已被注册！');
            }

            //如果用户输入的是mobile,则判断该mobile是否已存在
            if($data['mobile']) {
                $res_mobile = D('Admin')->whetherExistMobile($data['mobile']);
                if($res_mobile || $res_mobile['status'] == 1)
                    return show(0,'该手机号码已被注册！');
            }

            //比对昵称
            $res_username = D('Admin')->whetherExistUsername($data['username']);
            if($res_username || $res_username['status'] == 1)
                return show(0,'该用户名已存在！');

        } catch (Exception $e) {
            return show(0,$e->getMessage());
        }

        //对密码进行MD5加密
        $data['password'] = getMD5Password($data['password']);
        $data['headerimg'] = 'Public/img/moren.jpg';
        //写入数据库
        try {
            $res = D('Admin')->addUser($data);
        } catch (Exception $e) {
            return show(0,$e->getMessage());
        }

        //返回注册结果
        if(!$res) {
            return show(0,'注册失败！');
        }

        return show(1,'恭喜您，注册成功！');
    }


    /**
     * 检测邮箱或手机号码是否已存在
     */
    public function firstCheck() {

        //获取POST中的数据
        if($_POST) {
            $data = $_POST;
        }

        //对数据进行校验
        if(!$data['email'] && !$data['mobile']) {
            return show(0,'请输入你的邮箱或手机号码！');
        }

        //如果用户输入的是email,则判断该email是否已存在
        if($data['email']) {
            $res_email = D('Admin')->whetherExistEmail($data['email']);
            if($res_email || $res_email['status'] == 1)
                return show(0,'该邮箱已被注册！');
        }

        //如果用户输入的是mobile,则判断该mobile是否已存在
        if($data['mobile']) {
            $res_mobile = D('Admin')->whetherExistMobile($data['mobile']);
            if($res_mobile || $res_mobile['status'] == 1)
                return show(0,'该手机号码已被注册！');
        }

        //如若均不存在，则返回可注册状态
        return show(1,'改邮箱或手机号可以注册!');
    }
}