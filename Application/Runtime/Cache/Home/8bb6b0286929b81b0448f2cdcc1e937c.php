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

    <script src="Public/plugin/userImg/cropper/cropper.min.js"></script>
    <script src="Public/plugin/userImg/sitelogo/sitelogo.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Public/js/bootstrap/bootstrap.js"></script>
    <script src="Public/plugin/uploadify/jquery.uploadify.min.js"></script>

    <script src="Public/js/drag/drag.js"></script>

    <script src="Public/js/dialog/layer/layer.js"></script>
    <script src="Public/js/dialog/dialog.js"></script>
    <script src="Public/js/bdh/register.js"></script>
    <script src="Public/js/bdh/login.js"></script>
    <script src="Public/js/bdh/user.js"></script>
    <script src="Public/js/bdh/image.js"></script>

    <script src="Public/js/holder/holder.js"></script>





</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 userregister-logo">
          <!--<i class="fa fa-simplybuilt fa-4x"></i>-->
          <i class="fa fa-get-pocket fa-4x"></i>
    	</div>
    	<div class="col-md-12 userregister-title">
          <p>收集、发现好产品</p>
    	</div>
    	<div class="col-md-12">
    	  <form role="form">
    	    <div class="form-group userregister-form center-block">
    	      <label for="exampleInputEmail1" class="userlogin-form-lable sr-only">你的邮箱或手机号</label>
			  <input type="text" class="form-control userregister-form-width" name="emailOrMobil" id="emailOrMobil" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;你的邮箱或手机号">
    	    </div>

    	    <div class="userregister-btn-padding userregister-form center-block">
			   <button type="button" class="btn userlogin-btn btn-block userregister-btn" onclick="register.firstCheck()">即刻开始</button>
			</div>
    	  </form>
    	</div>

    	<div class="col-md-12 userlogin-font-margin">
    	  <div class=" userlogin-other-width center-block">	
    	  	<p class="pull-right userregister-already">已有帐号？<a href="index.php?m=home&c=login" class="userlogin-form-forgot-a">直接登录</a></p>
    	  	
		    </div>
		  
		</div>

		<div class="col-md-12 userregister-font-margin">
    	  <div class=" userlogin-other-width center-block">	
    	  	<ul class="list-unstyled list-inline userlogin-other-ul">
		      	<li><a href="" class="userlogin-font"><p>条款</p></a></li>
		      	<li><a href="" class="userlogin-font"><p>隐私</p></i></a></li>
		      	<li><a href="" class="userlogin-font"><p>安全</p></i></a></li>
		      	<li><a href="" class="userlogin-font"><p>联系不导航</p></i></a></li>
		      </ul>
		    </div>
		  
		</div>




      </div>
	</div>
  </body>
</html>