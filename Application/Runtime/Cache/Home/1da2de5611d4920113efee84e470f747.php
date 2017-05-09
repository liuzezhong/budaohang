<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" ">
    <title>不导航|发现好产品</title>

    <!-- Bootstrap -->
    <link href="Public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="Public/css/bdh/main.css" rel="stylesheet">

    <link rel="stylesheet" href="Public/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="Public/js/custombox/demo.css">

    <link rel="stylesheet" href="Public/js/custombox/custombox.min.css">

    <link rel="stylesheet" href="Public/plugin/jquery-span/jq22.css">

    <link rel="stylesheet" href="Public/plugin/bootstrap-datepicker/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="Public/plugin/bootstrap-from-validation/css/formValidation.css"/>


    <link href="Public/plugin/userImg/cropper/cropper.min.css" rel="stylesheet">
    <link href="Public/plugin/userImg/sitelogo/sitelogo.css" rel="stylesheet">

    <link href="Public/plugin/uploadify/uploadify.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="Public/js/jquery/jquery-1.11.1.js"></script>
    <script src="Public/js/custombox/custombox.min.js"></script>

    <script src="Public/plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="Public/plugin/bootstrap-datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>

    <script type="text/javascript" src="Public/plugin/bootstrap-from-validation/js/formValidation.js"></script>
    <script type="text/javascript" src="Public/plugin/bootstrap-from-validation/js/framework/bootstrap.js"></script>
    <script type="text/javascript" src="Public/plugin/bootstrap-from-validation/js/language/zh_CN.js"></script>

    <script src="Public/plugin/userImg/cropper/cropper.min.js"></script>
    <script src="Public/plugin/userImg/sitelogo/sitelogo.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Public/js/bootstrap/bootstrap.js"></script>
    <script src="/Public/plugin/uploadify/jquery.uploadify.js"></script>

    <script src="Public/js/drag/drag.js"></script>

    <script src="Public/js/dialog/layer/layer.js"></script>
    <script src="Public/js/dialog/dialog.js"></script>
    <script src="Public/js/bdh/register.js"></script>
    <script src="Public/js/bdh/login.js"></script>
    <script src="Public/js/bdh/user.js"></script>
    <script src="Public/js/bdh/image.js"></script>
    <script src="Public/js/bdh/common.js"></script>

    <script src="Public/js/holder/holder.js"></script>





</head>
<body>
<style>



    .z_photo {
        width: 300px;
        overflow: auto;
        clear: both;
        padding-top: 5px;
        padding-bottom: 5px;


    }

    .z_photo img {
        width: 100px;
        height: 100px;
    }

    .z_addImg {
        float: left;
        padding-right: 10px;
        padding-bottom: 10px;
    }

    .z_file {
        width: 100px;
        height: 100px;
        background: url(Public/img/z_add.png) no-repeat;
        background-size: 100% 100%;
        float: left;
        margin-right: 10px;
    }

    .z_file input::-webkit-file-upload-button {
        width: 100px;
        height: 100px;
        position: absolute;
        outline: 0;
        opacity: 0;
    }

    .z_file input#file {
        display: block;
        width: auto;
        border: 0;
        vertical-align: middle;
    }
    /*遮罩层*/

    .z_mask {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
        display: none;
    }

    .z_alert {
        width: 3rem;
        height: 2rem;
        border-radius: .2rem;
        background: #fff;
        font-size: .24rem;
        text-align: center;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -1.5rem;
        margin-top: -2rem;
    }

    .z_alert p:nth-child(1) {
        line-height: 1.5rem;
    }

    .z_alert p:nth-child(2) span {
        display: inline-block;
        width: 49%;
        height: .5rem;
        line-height: .5rem;
        float: left;
        border-top: 1px solid #ddd;
    }

    .z_cancel {
        border-right: 1px solid #ddd;
    }




</style>
<!--<form id= "uploadForm" action="index.php?m=home&c=index&a=upload_check" enctype="multipart/form-data" method="post" >-->
<form id= "uploadForm" >
    <input type="text" name="name" />
    <input type="file" name="photo[]" />
    <input type="file" name="photo[]" />
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label form-group-label">产品图片</label>
        <div class="col-sm-7">
            <div class="z_photo">
                <div class="z_file">
                    <input type="file" name="file[]" id="file" value="" accept="image/*" multiple onchange="imgChange('z_photo','z_file');" />
                </div>
            </div>
        </div>
    <button type="button" value="提交" id="abc">提交</button>
</form>

<script>

    var fileList = new Array();
    $('#abc').click(function () {
        //var formData = new FormData($( "#uploadForm" )[0]);
        var formData = new FormData();
        formData.append('name','liuzezhong');
        formData.append('password','abcdefg');
        for (var i = 0; i < fileList.length; i++) {
            formData.append('file[]',fileList[i][0]);
        }

        $.ajax({
            url: 'http://budaohang.com/index.php?m=home&c=index&a=upload_check' ,
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (returndata) {
                alert('成功');
            },
            error: function (returndata) {
                alert('失败');
            }
        });
    })

    function imgChange(obj1, obj2) {

        //获取点击的文本框
        var file = document.getElementById("file");
        //存放图片的父级元素
        var imgContainer = document.getElementsByClassName(obj1)[0];
        //获取的图片文件
        fileList.push(file.files);
        var imgArr = [];
        console.log(file.files[0]);
        var imgUrl = window.URL.createObjectURL(file.files[0]);
        imgArr.push(imgUrl);
        var img = document.createElement("img");
        img.setAttribute("src", imgArr[0]);
        var imgAdd = document.createElement("div");
        imgAdd.setAttribute("class", "z_addImg");
        imgAdd.appendChild(img);
        imgContainer.appendChild(imgAdd);

        //遍历获取到得图片文件
        /*for (var i = 0; i < fileList.length; i++) {
         console.log(file.files[i]);
         var imgUrl = window.URL.createObjectURL(file.files[i]);

         console.log(imgUrl);
         console.log('***************************遍历获取到得图片文件*************************');
         imgArr.push(imgUrl);
         console.log(imgArr);
         var img = document.createElement("img");
         img.setAttribute("src", imgArr[i]);
         var imgAdd = document.createElement("div");
         imgAdd.setAttribute("class", "z_addImg");
         imgAdd.appendChild(img);
         imgContainer.appendChild(imgAdd);
         };
         console.log(fileList[0][0]);
         console.log('***************************fileList[0]*************************');
         console.log(fileList[1][0]);
         console.log('***************************fileList[1]*************************');*/
        /*for (var i = 0; i < fileList.length; i++) {
         console.log(fileList[i][0]);
         }*/

    };


</script>
</html>