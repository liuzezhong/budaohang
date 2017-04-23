<?php

/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/2/1
 * Time: 21:32
 */
namespace Common\Model;

use Think\Model;

class AdminModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('admin');
    }

    /**
     * 新增用户
     * @param array $data
     * @return mixed
     */
    public function addUser($data = array()) {
        if(!$data || !is_array($data)) {
            throw_exception('新增用户数据不存在！');
        }
        $data['registertime'] = time(); //获取注册时间
        $res = $this->_db->add($data);
        return $res;
    }

    /**
     * 查询数据库邮箱是否已存在
     * @param string $email
     * @return mixed
     */
    public function whetherExistEmail($email = '') {
        if(!$email || !isset($email)) {
            throw_exception('需比对邮箱不存在！');
        }

        $data = array(
          'status' => array('neq',-1),
            'email' => $email,
        );

        $res = $this->_db->where($data)->find();
        return $res;

    }

    /**
     * 查询数据库手机号码是否已存在
     * @param string $mobile
     * @return mixed
     */
    public function whetherExistMobile($mobile = '') {
        if(!$mobile || !isset($mobile)) {
            throw_exception('需比对手机号不存在！');
        }

        $data = array(
          'status' => array('neq',-1),
            'mobile' => $mobile,
        );

        $res = $this->_db->where($data)->find();
        return $res;
    }

    /**
     * 查询数据库用户昵称是否已存在
     * @param string $mobile
     * @return mixed
     */
    public function whetherExistUsername($username = '') {
        if(!$username || !isset($username)) {
            throw_exception('需比对手机号不存在！');
        }

        $data = array(
            'status' => array('neq',-1),
            'username' => $username,
        );

        $res = $this->_db->where($data)->find();
        return $res;
    }

    /**
     * 根据用户ID更新用户信息
     * @param $id
     * @param $data
     * @return bool
     */
    public function updateAdminByID($id,$data) {
        if(!$id || !is_numeric($id))
            throw_exception('用户ID有误！');
        if(!$data || !is_array($data))
            throw_exception('待更新数据有误！');

        $res = $this->_db->where('user_id = ' . $id)->save($data);
        return $res;
    }

    public function getAdminByID($id = 0) {
        if(!id || !is_numeric($id))
            throw_exception('用户ID有误！');

        $res = $this->_db->where('user_id = ' . $id)->find();
        return $res;
    }

    public function getAllUsers() {
        return $this->_db->order('registertime desc')->select();
    }
}