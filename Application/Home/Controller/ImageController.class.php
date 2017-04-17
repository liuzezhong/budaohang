<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2017/2/6
 * Time: 12:10
 */

namespace Home\Controller;


class ImageController extends CommonController {
    public function ajaxUploadImage() {
        $res = D("UploadImage")->imageUpload();

        if($res===false) {
            return show(0,'上传失败','');
        }else{

            return show(1,'上传成功',$res);
        }



    }
}