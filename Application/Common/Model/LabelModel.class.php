<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2016/11/2
 * Time: 17:06
 */

namespace Common\Model;


use Think\Model;

class LabelModel extends Model {
    private $_db;

    public function __construct() {   //构造函数
        $this->_db = M('label');
    }

    /**
     * 功能：获取所有的产品类别
     * @return mixed
     */
    public function get_all_label() {     //获取前台菜单 type=0
        return $this->_db->order('create_time desc')->select();
    }
}