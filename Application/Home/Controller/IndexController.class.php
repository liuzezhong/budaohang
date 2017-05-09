<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;

class IndexController extends Controller {
    public function index(){
        // 获取产品信息
        $products = D('Product')->getAllProducts();
        foreach ($products as $k => $item) {
            //获取第一张图片地址
            $image = D('Product_img')->findFirstImageByProductId($item['product_id']);
            $products[$k]['image'] = $image['img_url'];
            //获取产品对应标签信息
            $productLabels = D('Product_label')->selectProductLabelsByProductId($item['product_id']);
            //获取产品对应标签ID
            $productLabelsID = array_column($productLabels,'label_id');
            //根据标签ID批量查询得出标签信息（标签名）
            $labels = D('Label')->selectLabelsByMoreLabelID($productLabelsID);
            $products[$k]['labels'] = $labels;
            //第一个标签名
            $products[$k]['firstlabel'] = $labels[0]['label_name'];
            $products[$k]['labelsum'] = count($labels);
        }
        print_r($products);
        $this->assign(array(
            'products' => $products,
        ));
        $this->display();
    }

    /*public function upload() {

        $this->display();
    }

    public function upload_check() {

        $res = D("UploadImage")->imagesUpload();
        foreach ($res as $k => $item) {
            $imagesUrl = '/' . C('UPLOADS_FILE_NAME') . '/' . $item['savepath'] . $item['savename'];

        }


        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        $infoup =  $upload->getUploadFileInfo();
        print_r($infoup);*/
        /*if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $info =  $upload->getUploadFileInfo();
            print_r($info);
            //$this->success('上传成功！');
        }

    }*/
}