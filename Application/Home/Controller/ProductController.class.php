<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/4/30
 * Time: 16:51
 */

namespace Home\Controller;


use Think\Exception;

class ProductController extends CommonController {
    public function index() {

    }

    public function addProduct() {
        //获取post数据
        $product_name = I('post.product_name','','trim,string');
        $website = I('post.website','','trim,string');
        $describes = I('post.describes','','trim,string');
        $company = I('post.company','','trim,string');
        $uptime = I('post.uptime','','trim,string');
        $version = I('post.version','','trim,string');
        $introduction = I('post.introduction','','trim,string');
        $support = I('post.support','');
        $type = I('post.type',0,'intval');
        $kind = I('post.kind',0,'intval');
        $label = I('post.label','');

        //数据校验
        if(!$product_name) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '产品名不能为空！',
            ));

        }
        if(!$website) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '产品官网不能为空！',
            ));
        }
        if(!$describes) {
            $this->ajaxReturn(array(
                'status' => 0,
                'message' => '产品描述不能为空！',
            ));
        }

        //转换支持平台格式
        $supports = '';
        $uptimes = '';
        if($support) {
            $supports = D('Common')->convertSupportFormat($support,1);
        }
        if($uptime) {
            $uptimes = D('Common')->convertDateFormat($uptime,1);
        }


        //封装数据
        $productData = array (
            'name' => $product_name,
            'website' => $website,
            'describes' => $describes,
            'company' => $company,
            'uptime' => strtotime($uptimes),
            'version' => $version,
            'introduction' => $introduction,
            'type' => $type,
            'kind' => $kind,
            'support' => $supports,
            'upload_time' => time(),
            'user_id' => session('adminUser')['user_id'],
        );

        try {
            //判断是否存在
            $existProduct = D('Product')->thereExistProductName($product_name);
            if($existProduct) {
                $this->ajaxReturn(array(
                    'status' => 0,
                    'message' => '该产品已存在！',
                ));
            }
            //插入数据并返回主键ID
            $newProduct = D('Product')->addProduct($productData);
            if(!$newProduct) {
                $this->error('新增产品信息数据库插入失败！');
            }
            //如果存在标签信息
            if($label) {
                foreach ($label as $k => $item) {
                    //查是否有这个标签名称
                    $existLabel = D('Label')->thereExistLabelName($item);
                    if(!$existLabel) {
                        //不存在此标签则新增标签
                        $labelData = array(
                            'label_name' => $item,
                            'user_id' => session('adminUser')['user_id'],
                            'create_time' => time(),
                        );
                        $newLabel = D('Label')->addLabel($labelData);
                        //将标签信息对应到产品ID写入产品标签数据表中
                        $productLabelData = array(
                            'label_id' => $newLabel,
                            'product_id' => $newProduct,
                        );
                        $newProductLabel = D('Product_label')->addPrdouctLabel($productLabelData);
                        if(!$newProductLabel) {
                            throw_exception('关联产品标签失败！');
                        }
                    }else if($existLabel) {
                        //存在标签
                        $productLabelData = array(
                            'label_id' => $existLabel['label_id'],
                            'product_id' => $newProduct,
                        );
                        $newProductLabel = D('Product_label')->addPrdouctLabel($productLabelData);
                        if(!$newProductLabel) {
                            throw_exception('关联产品标签失败！');
                        }
                    }
                }
            }

            //图片上传
            $res = D("UploadImage")->imagesUpload();
            if(!$res) {
                $this->ajaxReturn(array(
                    'status' => 0,
                    'message' => '请至少上传一张产品图片！',
                ));
            }
            foreach ($res as $k => $item) {
                //得到图片地址
                $imagesUrl = '/' . C('UPLOADS_FILE_NAME') . '/' . $item['savepath'] . $item['savename'];
                $productImage = array(
                    'product_id' => $newProduct,
                    'img_url' => $imagesUrl,
                );
                $newProductImage = D('Product_img')->addPrdouctImage($productImage);
                if(!$newProductImage) {
                    throw_exception('图片上传失败！');
                }
            }
            $this->ajaxReturn(array(
                'status' => 1,
                'message' => '提交产品成功，等待审核中！',
            ));
        } catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }
}