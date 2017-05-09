<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2016/11/2
 * Time: 17:06
 */

namespace Common\Model;


use Think\Model;

class ProductModel extends Model {
    private $_db;

    public function __construct() {   //构造函数
        $this->_db = M('product');
    }

    /**
     * 功能：新增产品信息
     * @return mixed
     */
    public function addProduct($data = array()) {     //获取前台菜单 type=0
        if(!$data){
            throw_exception('新增产品信息的数据为空！');
        }
        return $this->_db->add($data);
    }

    /**
     * 功能：根据名称查询产品是否存在
     * @param string $name
     * @return mixed
     */
    public function thereExistProductName($name = '') {
        if(!$name) {
            throw_exception('根据名称查询是否存在擦炮待查名称为空！');
        }
        $selectData['name'] = $name;
        return $this->_db->where($selectData)->find();
    }

    public function getAllProducts() {
        return $this->_db->select();
    }
}