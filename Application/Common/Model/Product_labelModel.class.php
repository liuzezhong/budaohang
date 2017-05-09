<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2016/11/2
 * Time: 17:06
 */

namespace Common\Model;


use Think\Model;

class Product_labelModel extends Model {
    private $_db;

    public function __construct() {   //构造函数
        $this->_db = M('product_label');
    }

    /**
     * 功能：新增产品关联标签
     * @param array $data
     * @return mixed
     */
    public function addPrdouctLabel($data = array()) {
        if(!$data) {
            throw_exception('新增产品关联标签数据不存在');
        }
        return $this->_db->add($data);
    }

    /**
     * 功能：根据产品ID搜索关联标签
     * @param int $productID
     * @return mixed
     */
    public function selectProductLabelsByProductId($productID = 0) {
        if($productID == 0) {
            throw_exception('根据产品ID搜索产品关联标签selectProductLabelsByProductId：产品ID不存在！');
        }
        return $this->_db->where('product_id = ' . $productID)->order('product_label_id asc')->select();
    }
}