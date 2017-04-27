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
<!--<form id= "uploadForm" action="index.php?m=home&c=index&a=upload_check" enctype="multipart/form-data" method="post" >-->
<form id= "uploadForm" >
    <input type="text" name="name" />
    <input type="file" name="photo" />
    <button type="button" value="提交" id="abc">提交</button>
</form>
</body>
<script>
    /*$('#abc').click(function () {
        alert('asdfasd');
        var file = $('input[type = "file"]').val();
        console.log(file);
    });*/
    $('#abc').click(function () {
        var formData = new FormData($( "#uploadForm" )[0]);
        console.log($( "#uploadForm" )[0]);
        console.log($( "#uploadForm" )[1]);
        console.log($( "#uploadForm" ));
        console.log($( "#formData" ));
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

</script>
</html>