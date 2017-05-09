<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2016/11/2
 * Time: 17:06
 */

namespace Common\Model;


use Think\Model;

class Product_imgModel extends Model {
    private $_db;

    public function __construct() {   //构造函数
        $this->_db = M('product_img');
    }

    /**
     * 功能：新增产品关联标签
     * @param array $data
     * @return mixed
     */
    public function addPrdouctImage($data = array()) {
        if(!$data) {
            throw_exception('新增图片addPrdouctImage：新增信息不存在！');
        }
        return $this->_db->add($data);
    }

    /**
     * 功能：根据产品ID获取ID对应的第一张图片
     * @param int $productID
     * @return mixed
     */
    public function findFirstImageByProductId($productID = 0) {
        if($productID == 0) {
            throw_exception('根据产品ID获取第一张图片findFirstImageByProductId：ID号不存在！');
        }
        return $this->_db->where('product_id = ' . $productID)->find();
    }

}