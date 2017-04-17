<?php if (!defined('THINK_PATH')) exit();?>

  <body style="background-color:#FFFFFF;">
    <!DOCTYPE html>
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
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="Public/img/1.jpg" style="width: 25px; height: 25px;">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="category.html">产品分类</a></li>
                <li><a href="#">产品集</a></li>
                <li><a href="#">产品推荐</a></li>
                <li><a href="#">经典工具集</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-navicon"></i> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">官方博客</a></li>
                        <li><a href="#">关于我们</a></li>
                        <li class="divider"></li>
                        <li><a href="#">常见问题</a></li>
                    </ul>
                </li>
            </ul>
            <?php
 if(getLoginHeaderImg()) { $status = 1; }else { $status = 0; } ?>
            <?php if($status == 1): ?><form class="navbar-form navbar-right " role="search">
                    <button type="button" class="btn btn-default navbar-button btn-sm"><span style="color:#999999">分享新产品</span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><img class="img-circle" src="<?php echo getLoginHeaderImg() ?>" alt="用户头像" style="width: 34px; height: 34px;"></a>
                    <ul class="dropdown-menu " role="menu">
                        <li ><a href="#" style="color : #999999">我的主页</a></li>
                        <li><a href="index.php?m=home&c=user&a=userset" style="color : #999999">个人设置</a></li>
                        <li class="divider"></li>
                        <li><a href="index.php?m=home&c=login&a=loginOut" style="color : #999999">退出登录</a></li>
                    </ul>
                </form>
            <?php else: ?>
                <form class="navbar-form navbar-right ">
                    <a href="index.php?m=home&c=register" class="a-nactive"><button type="button" class="btn btn-default btn-sm "><span style="color:#999999">注册账户</span></button>&nbsp;</a>
                    <a href="index.php?m=home&c=login" class="a-nactive"><button type="button" class="btn btn-default btn-sm"><span style="color:#999999">用户登录</span></button>&nbsp;</a>

                </form><?php endif; ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<hr class="hr-gradient-e2">
<hr class="hr-gradient-f0">
<hr class="hr-gradient-f4">
<hr class="hr-gradient-f7">
<hr class="hr-gradient-f8">

  <div class="container">
  	<div class="row">
  		<div class="col-md-12 homepage-header">
  			<div class="row">
          <div class="col-md-12 homepage-img">
            <form>
              <!--<div id="queue"></div>
              <input id="file_upload" name="file_upload" type="file" multiple="true">-->
              <img class="img-circle" style="width: 90px; height: 90px;" id="upload_org_code_img" src="<?php echo ($userinfo["headerimg"]); ?>" width="150" height="150">   <!--显示缩略图-->
              <!--<input id="file_upload_image" name="thumb" type="hidden" multiple="true" value="">-->
            </form>
                      <!--<img class="img-circle" src="<?php echo ($userinfo["headerimg"]); ?>" alt="用户头像" style="width: 80px; height: 80px;">-->

            
          </div>
        </div>
        <!--<div class="row">
          <div class="col-md-12 homepage-name">
            <h4><?php echo ($userinfo["username"]); ?></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 homepage-position">
            <small class="homepage-font-color"><?php echo (getCompany($userinfo["company"])); ?>/<?php echo (getCompany($userinfo["job"])); ?></small>
          </div>
        </div>-->
          <div class="row">
            <div class="col-md-12 homepage-name ">
              <div class="container">
                <div class="row">
                  <div class="col-md-5">

                  </div>
                  <div class="col-md-2">
                    <div class="userset-button">
                      <input id="file_upload" name="file_upload" type="file" multiple="true">
                      <input id="file_upload_image" name="thumb" type="hidden" multiple="true" value="">
                    </div>
                  </div>
                  <div class="col-md-5">

                  </div>
                </div>
              </div>

            </div>
          </div>
  		</div>
  	</div>
  </div>
  <hr class="personset-hr">

  <div class="container">

    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <form class="form-horizontal personset-form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">昵&nbsp;称</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username"  placeholder="<?php echo ($userinfo["username"]); ?>" style="max-width:300px;" value="<?php echo ($userinfo["username"]); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">号&nbsp;码</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="mobile" placeholder="<?php echo ($userinfo["mobile"]); ?>" style="max-width:300px;" value="<?php echo ($userinfo["mobile"]); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">微&nbsp;信</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="wechat" id="inputPassword3" placeholder="<?php echo ($userinfo["wechat"]); ?>" style="max-width:300px;" value="<?php echo ($userinfo["wechat"]); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">邮&nbsp;箱</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email" id="inputPassword3" placeholder="<?php echo ($userinfo["email"]); ?>" style="max-width:300px;" value="<?php echo ($userinfo["email"]); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">组&nbsp;织</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="company" id="inputEmail3" placeholder="<?php echo ($userinfo["company"]); ?>" style="max-width:300px;" value="<?php echo ($userinfo["company"]); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">职&nbsp;位</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="job" id="inputEmail3" placeholder="<?php echo ($userinfo["job"]); ?>" style="max-width:300px;" value="<?php echo ($userinfo["job"]); ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">个性签名</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="2" name="describes" style="max-width:300px;"><?php echo ($userinfo["describes"]); ?></textarea>
            </div>
          </div>
          <br>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input class="sy-only" type="hidden" name="userid" value="<?php echo ($userinfo["user_id"]); ?>">
              <button type="button" class="btn btn-default btn-block userlogin-btn" style="max-width:300px;" onclick="user.check()">更新资料</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-3">
      </div>
    </div>
  </div>
 

  
</div>






  <br> <br> 
 
<footer class="footer ">
    <small>
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <h5>网站相关</h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <hr>
                                </div>
                            </div>

                            <ul class="list-unstyled">
                                <li class="footer-font-li"><a href="/about/" class="footer-font-a-color">关于我们</a></li>
                                <li class="footer-font-li"><a href="/ad/" class="footer-font-a-color">服务条款</a></li>
                                <li class="footer-font-li"><a href="/links/" class="footer-font-a-color">帮助中心</a></li>
                                <li class="footer-font-li"><a href="/hr/" class="footer-font-a-color">每周精选</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h5>联系合作</h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <hr>
                                </div>
                            </div>

                            <ul class="list-unstyled">
                                <li class="footer-font-li"><a href="http://weibo.com/bootcss" title="Bootstrap中文网官方微博" target="_blank" class="footer-font-a-color">联系我们</a></li>
                                <li class="footer-font-li"><a href="mailto:admin@bootcss.com" class="footer-font-a-color">加入我们</a></li>
                                <li class="footer-font-li"><a href="mailto:admin@bootcss.com" class="footer-font-a-color">合作伙伴</a></li>
                                <li class="footer-font-li"><a href="mailto:admin@bootcss.com" class="footer-font-a-color">媒体报道</a></li>
                                <li class="footer-font-li"><a href="mailto:admin@bootcss.com" class="footer-font-a-color">建议反馈</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h5>获得帮助</h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <hr>
                                </div>
                            </div>

                            <ul class="list-unstyled">
                                <li class="footer-font-li"><a href="http://www.golaravel.com/" target="_blank" class="footer-font-a-color">支持中心</a></li>
                                <li class="footer-font-li"><a href="http://www.ghostchina.com/" target="_blank" class="footer-font-a-color">常见问题</a></li>
                                <li class="footer-font-li"><a href="http://www.ghostchina.com/" target="_blank" class="footer-font-a-color">联系我们</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h5>关注我们</h5>
                            <div class="row">
                                <div class="col-md-10">
                                    <hr>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li class="footer-font-li"><a href="https://www.upyun.com" target="_blank" class="footer-font-a-color">团队日志</a></li>
                                <li class="footer-font-li"><a href="https://www.upyun.com" target="_blank" class="footer-font-a-color">产品技术日志</a></li>
                                <li class="footer-font-li"><a href="https://www.upyun.com" target="_blank" class="footer-font-a-color">社区运营日志</a></li>
                                <li class="footer-font-li"><a href="https://www.upyun.com" target="_blank" class="footer-font-a-color">市场运营日志</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h5>社交媒体</h5>
                            <div class="row">
                                <div class="col-md-11">
                                    <hr>
                                </div>
                            </div>
                            <ul class="list-unstyled list-inline">
                                <li ><a href="https://www.upyun.com" target="_blank"><i class="fa fa-twitter-square fa-fw fa-2x"></i></a></li>
                                <li ><a href="https://www.upyun.com" target="_blank"><i class="fa fa-facebook-square fa-fw fa-2x"></i></a></li>
                                <li ><a href="https://www.upyun.com" target="_blank"><i class="fa fa-github-square fa-fw fa-2x"></i></a></li>
                                <li ><a href="https://www.upyun.com" target="_blank"><i class="fa fa-google-plus-square fa-fw fa-2x"></i></a></li>



                                <li ><a href="https://www.upyun.com" target="_blank"><i class="fa fa-linkedin-square fa-fw fa-2x"></i></a></li>

                                <li ><a href="https://www.upyun.com" target="_blank"><i class="fa fa-weibo fa-fw fa-2x"></i></a></li>

                            </ul>
                        </div>


                    </div>

                </div>
            </div>


        </div>




</footer>
<footer class="bg-footers-beian">
    <div>
        <div class="container footer-bottom-ba bg-footers-beian">
            <ul class="list-unstyled list-inline text-center">
                <li >&copy; 2016-2017 <a href="http://www.xianshikeji.com">XSKJ</a> Ltd.</li>&nbsp;|
                <li ><a href="/blog/">Blog <i class="fa fa-rss"></i></a></li>&nbsp;|
                <li ><a href="/newsletter/subscribe/">Newsletter <i class="fa fa-envelope-o"></i></a></li>&nbsp;|
                <li><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></li>&nbsp;|<li>京公网安备11010802014853</li>
            </ul>


        </div><!-- end .container --></small>
    </div>
</footer>

</body>
</html>