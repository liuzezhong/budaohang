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

    /**
     * 功能：根据标签名称查询标签是否存在
     * @param string $name
     * @return mixed
     */
    public function thereExistLabelName($name = '') {
        if(!$name) {
            throw_exception('根据名称查询是否存在标签待查名称为空！');
        }
        $selectData['label_name'] = $name;
        return $this->_db->where($selectData)->find();
    }

    /**
     * 功能：新增标签
     * @param array $data
     * @return mixed
     */
    public function addLabel($data = array()) {
        if(!$data) {
            throw_exception('新增标签数据不存在！');
        }
        return $this->_db->add($data);
    }

    /**
     * 功能：根据多个标签ID查询标签信息
     * @param array $labelIDs
     * @return mixed
     */
    public function selectLabelsByMoreLabelID($labelIDs = array()) {
        if(!$labelIDs) {
            throw_exception('批量根据标签ID查询标签信息selectLabelsByMoreLabelID：标签ID不存！');
        }
        $selectData['label_id'] = array('IN',$labelIDs);
        return $this->_db->where($selectData)->select();
    }
}