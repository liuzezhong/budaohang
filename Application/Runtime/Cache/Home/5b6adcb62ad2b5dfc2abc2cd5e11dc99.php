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

    <script src="Public/js/holder/holder.js"></script>





</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 userlogin-logo">
          <!--<i class="fa fa-simplybuilt fa-4x"></i>-->
          <i class="fa fa-get-pocket fa-4x"></i>
    	</div>
    	<div class="col-md-12 userlogin-title">
          <p>登录不导航</p>
    	</div>
    	<div class="col-md-12 ">
    	  <div class="panel panel-default userlogin-panel-width center-block">
		    <div class="panel-body userlogin-panel-body">
		      <form role="form">
			    <div class="form-group userlogin-form-group">
			      <label for="username" class="userlogin-form-lable">用户名或邮箱地址</label>
			      <input type="username" class="form-control" name="username" id="username" placeholder="Username or email address">
			    </div>
			    <div class="form-group userlogin-form-group">
			      <label for="password" class="userlogin-form-lable">密码</label>
			      <a href="#" class="pull-right userlogin-form-forgot-a">忘记密码？</a>
			      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			    </div>
			    <div class="userlogin-btn-padding">
			      <button type="button" class="btn userlogin-btn btn-block" onclick="login.check()">登&nbsp;录</button>
			     </div>
			  </form>	
		    </div>
		  </div>
		</div>

		<div class="col-md-12 userlogin-panel-newcount-margin">
    	  <div class="panel panel-default userlogin-panel-newcount-width center-block">
		    <div class="panel-body userlogin-panel-newcount-body">
		      没有帐号？<a href="index.php?m=home&c=register" class="userlogin-form-forgot-a">创建一个用户</a>
		    </div>
		  </div>
		</div>

		<div class="col-md-12 userlogin-panel-newcount-margin">
    	  <div class=" userlogin-other-width center-block">
		    
		      <p class="userlogin-other-title userlogin-other-ul">通过其它方式登录</p>
		      <ul class="list-unstyled list-inline userlogin-other-ul">
		      	<li><a href="" class="userlogin-other-i-weixin"><i class="fa fa-weixin fa-fw fa-lg"></i></a></li>
		      	<li><a href="" class="userlogin-other-i-weibo"><i class="fa fa-weibo fa-fw fa-lg"></i></a></li>
		      	<li><a href="" class="userlogin-other-i-qq"><i class="fa fa-qq fa-fw fa-lg"></i></a></li>
		      </ul>
		    </div>
		  
		</div>

		<div class="col-md-12 userlogin-font-margin">
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