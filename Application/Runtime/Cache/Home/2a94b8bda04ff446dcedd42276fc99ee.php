<?php if (!defined('THINK_PATH')) exit();?>

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
<script src="Public/js/bdh/common.js"></script>
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
                <li class="active"><a href="<?php echo U('home/index/index');?>">首页</a></li>
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
 if($_SESSION['adminUser']['user_id']) { $status = 1; }else { $status = 0; } ?>
            <?php if($status == 1): ?><form class="navbar-form navbar-right " role="search">
                    <button type="button" class="btn btn-default navbar-button btn-sm" id="add-new-proudct"><span style="color:#999999">分享新产品</span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

<!-- Modal -->
<div id="modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="title">发现新产品</h4>

    <div class="shareproduct-custombox-maxwidth">

        <form class="form-horizontal" role="form" id="add-product-form">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label form-group-label">产品名称</label>
                <div class="col-sm-7">
                    <input type="text" name="product_name" class="form-control" placeholder="如：不导航">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label form-group-label">产品官网</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="website" placeholder="以http://开头的有效网址">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label form-group-label">产品描述</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="describes" placeholder="用一句话来描述该产品的亮点">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label form-group-label">产品图片</label>
                <div class="col-sm-7">
                    <div class="z_photo">
                        <div class="z_file">
                        <input type="file" name="file" id="file" value="" accept="image/*" multiple onchange="imgChange('z_photo','z_file');" />
                    </div>
                </div>
            </div>
    </div>
            <?php
 $product_types = D('Product_type')->get_all_product_type(); $labels = D('Label')->get_all_label(); ?>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">产品类别</label>
        <div class="col-sm-7">
            <select class="form-control" name="kind">
                <option value="-1">请选择</option>
                <?php if(is_array($product_types)): $i = 0; $__LIST__ = $product_types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["type_id"]); ?>"><?php echo ($type["type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label" name="support">支持平台</label>
        <div class="col-sm-7">
            <label class="checkbox-inline">
                <input type="checkbox" name="windows"> Windows
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="linux"> Linux
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="ios"> IOS
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="android"> Android
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">开发公司</label>
        <div class="col-sm-7">
            <input type="text" class="form-control  " name="company" placeholder="如：无锡闲时科技有限公司">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">上线时间</label>
        <div class="col-sm-7">
            <input type="text" class="form-control " name="uptime" placeholder="如：2017年1月">

        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label" name="type">项目类型</label>
        <div class="col-sm-7">
            <label class="radio-inline">
                <input type="radio" name="kaiyuan" value="kaiyuan"> 开源项目
            </label>
            <label class="radio-inline">
                <input type="radio" name="chuangye" value="chuangye"> 创业项目
            </label>

            <label class="radio-inline">
                <input type="radio" name="other" value="other"> 其它
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">最新版本</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="version" placeholder="如：1.3">
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">产品标签</label>
        <div class="col-sm-7">
            <div class="demo">
                <div class="plus-tag tagbtn clearfix" id="myTags"></div>
                <div class="plus-tag-add">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
							        <button class="btn btn-default" type="button"><i class="fa fa-plus shareproduct-add-lable"></i></button>
							      </span>
                    </div><!-- /input-group -->
                    <span class="help-block shareproduct-toggle-lable-span"><a class="shareproduct-toggle-lable" href="javascript:void(0);">查看已有标签</a></span><br><br>
                </div>
                <div id="mycard-plus" style="display:none;">
                    <div class="default-tag tagbtn">
                        <div class="clearfix">
                            <?php if(is_array($labels)): $i = 0; $__LIST__ = $labels;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$label): $mod = ($i % 2 );++$i;?><a value="-1" title="<?php echo ($label["label_name"]); ?>" href="javascript:void(0);" attr-id="<?php echo ($label["label_id"]); ?>"><span><?php echo ($label["label_name"]); ?></span><em></em></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div><!--mycard-plus end-->
                </div>
            </div>
        </div>
    </div>


    <div class="form-group shareproduct-form-group-details-margin">
        <label for="inputEmail3" class="col-sm-3 control-label">详细介绍</label>
        <div class="col-sm-7">
            <textarea class="form-control" name="introduction" id="inputEmail3" placeholder=""></textarea>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="button" class="btn btn-default " id="add-products">提交产品</button>
        </div>
    </div>


    </form>
</div>
<br><br><br>
</div>
<script type="text/javascript">
    $('#add-products').click(function () {
        alert('1');
    });


</script>
<script>

    $(function() {

        $('#add-new-proudct').on('click', function( e ) {
            Custombox.open({
                target: '#modal',
                effect: 'swell'
            });
            e.preventDefault();
        });



        $('#sandbox-container').datepicker({
            language: "zh-CN",
            orientation: "bottom auto",
            todayHighlight: true
        });


    });




    (function(doc, win) {
        var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function() {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if (clientWidth >= 640) {
                        docEl.style.fontSize = '100px';
                    } else {
                        docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                    }
                };

        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);

    function imgChange(obj1, obj2) {
        //获取点击的文本框
        var file = document.getElementById("file");

        //存放图片的父级元素
        var imgContainer = document.getElementsByClassName(obj1)[0];
        //获取的图片文件
        var fileList = file.files;
        //文本框的父级元素
        var input = document.getElementsByClassName(obj2)[0];
        var imgArr = [];
        //遍历获取到得图片文件
        for (var i = 0; i < fileList.length; i++) {
            var imgUrl = window.URL.createObjectURL(file.files[i]);
            imgArr.push(imgUrl);
            var img = document.createElement("img");
            img.setAttribute("src", imgArr[i]);
            var imgAdd = document.createElement("div");
            imgAdd.setAttribute("class", "z_addImg");
            imgAdd.appendChild(img);
            imgContainer.appendChild(imgAdd);
        };
        imgRemove();
    };

    function imgRemove() {
        var imgList = document.getElementsByClassName("z_addImg");
        var mask = document.getElementsByClassName("z_mask")[0];
        var cancel = document.getElementsByClassName("z_cancel")[0];
        var sure = document.getElementsByClassName("z_sure")[0];

        for (var j = 0; j < imgList.length; j++) {
            imgList[j].index = j;
            imgList[j].onclick = function() {
                var t = this;

                t.style.display = "none";

                /*
                 mask.style.display = "block";
                 cancel.onclick = function() {
                 mask.style.display = "none";
                 };
                 sure.onclick = function() {
                 mask.style.display = "none";
                 t.style.display = "none";
                 };
                 */

            }
        };
    };






</script>

<script type="text/javascript">

    var FancyForm=function(){
        return{
            inputs:".FancyForm input, .FancyForm textarea",
            setup:function(){
                var a=this;
                this.inputs=$(this.inputs);
                a.inputs.each(function(){
                    var c=$(this);
                    a.checkVal(c)
                });
                a.inputs.on("keyup blur",function(){
                    var c=$(this);
                    a.checkVal(c);
                });
            },checkVal:function(a){
                a.val().length>0?a.parent("li").addClass("val"):a.parent("li").removeClass("val")
            }
        }
    }();


    $(document).ready(function() {
        FancyForm.setup();

    });




    var searchAjax=function(){};
    var G_tocard_maxTips=30;

    $(function(){(


            function(){


                var a=$(".plus-tag");


                $(".plus-tag").on("click",'a',function(){


                    var b=$(this).attr("title");
                    var d=$(this).attr("value");

                    delTips(b,d)
                });

                hasTips=function(b){
                    var d=$("a",a),c=false;
                    d.each(function(){
                        if($(this).attr("title")==b){
                            c=true;
                            return false
                        }
                    });
                    return c
                };

                isMaxTips=function(){
                    return
                    $("a",a).length>=G_tocard_maxTips
                };

                setTips=function(c,d){
                    if(hasTips(c)){
                        return false
                    }if(isMaxTips()){
                        alert("最多添加"+G_tocard_maxTips+"个标签！");
                        return false
                    }
                    var b=d?'value="'+d+'"':"";
                    a.append($("<a class='close-a'"+b+' title="'+c+'" href="javascript:void(0);" ><span>'+c+"</span><em class='close-em'></em></a>"));
                    searchAjax(c,d,true);
                    return true
                };

                delTips=function(b,c){
                    if(!hasTips(b)){
                        return false
                    }
                    $("a",a).each(function(){
                        var d=$(this);
                        if(d.attr("title")==b){
                            d.remove();
                            return false
                        }
                    });
                    searchAjax(b,c,false);
                    return true
                };

                getTips=function(){
                    var b=[];
                    $("a",a).each(function(){
                        b.push($(this).attr("title"))
                    });
                    return b
                };

                getTipsId=function(){
                    var b=[];
                    $("a",a).each(function(){
                        b.push($(this).attr("value"))
                    });
                    return b
                };

                getTipsIdAndTag=function(){
                    var b=[];
                    $("a",a).each(function(){
                        b.push($(this).attr("value")+"##"+$(this).attr("title"))
                    });
                    return b
                }
            }

    )()});







    // 更新选中标签标签
    $(function(){
        setSelectTips();
        $('.plus-tag').append($('.plus-tag a'));
    });
    var searchAjax = function(name, id, isAdd){
        setSelectTips();
    };
    // 搜索
    (function(){
        var $b = $('.plus-tag-add button'),$i = $('.plus-tag-add input');
        $i.keyup(function(e){
            if(e.keyCode == 13){
                $b.click();
            }
        });
        $b.click(function(){
            var name = $i.val().toLowerCase();
            if(name != '') setTips(name,-1);
            $i.val('');
            $i.select();
        });
    })();
    // 推荐标签
    (function(){
        var str = ['查看已有标签', '关闭已有标签']
        $('.plus-tag-add a').click(function(){
            var $this = $(this),
                    $con = $('#mycard-plus');

            if($this.hasClass('plus')){
                $this.removeClass('plus').text(str[0]);
                $con.hide();
            }else{
                $this.addClass('plus').text(str[1]);
                $con.show();
            }
        });
        $('.default-tag a').on('click', function(){
            var $this = $(this),
                    name = $this.attr('title'),
                    id = $this.attr('value');
            setTips(name, id);
        });
        // 更新高亮显示
        setSelectTips = function(){
            var arrName = getTips();
            if(arrName.length){
                $('#myTags').show();
            }else{
                $('#myTags').hide();
            }
            $('.default-tag a').removeClass('selected');
            $.each(arrName, function(index,name){
                $('.default-tag a').each(function(){
                    var $this = $(this);
                    if($this.attr('title') == name){
                        $this.addClass('selected');
                        return false;
                    }
                })
            });
        }

    })();
    // 更换链接
    (function(){
        var $b = $('#change-tips'),
                $d = $('.default-tag div'),
                len = $d.length,
                t = 'nowtips';
        $b.click(function(){
            var i = $d.index($('.default-tag .nowtips'));
            i = (i+1 < len) ? (i+1) : 0;
            $d.hide().removeClass(t);
            $d.eq(i).show().addClass(t);
        });
        $d.eq(0).addClass(t);
    })();



</script>

<script type="text/javascript">

</script>


  <div class="container">
    <div class="row">
      <!-- 搜索模态框
      =========================================================== -->
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info alert-dismissible clearfix " role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>              
            <div class="row">
              <div class="col-md-12 text-right">
                <ul class="list-unstyled list-inline">
                    <li><img src="Public/img/emoji.png"  style="width:20px;heigth:20px;"></li>
                    <li><strong><span class="budaohangfont"> 欢迎访问不导航</span></strong> &nbsp;&nbsp;不错过任何一个好产品 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><input type="text" class="form-control input-sm" placeholder="发现好产品" /></li>
                    <li><button type="button" class="btn btn-info btn-sm">发现产品</button></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                  </ul>

              </div>
            </div>
                 
                 
                  
                                               
                                
          </div>
        </div>
      </div> <!-- 搜索模态框END
      ========================================================== -->

      <div class="row">
        <div class="col-md-9">
        <!-- start   可关闭的热门推荐
        ================================================-->
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-panle-info alert-dismissible-panle alert-panle" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;热门产品 </p>
                <hr class="">
                <div class="panel-body ">   <!-- 面板内容start -->
                  <div class="row div-pointer" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'" id="div-point" >    <!-- 面板内容整列第1行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list1.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10 hot-content-marg">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>Alarmy：能够叫醒你的闹钟</h4></li>
                                    <li><p class="dis-p-color"><small>三招让你起床服服帖帖。拍照模式：下床活动，到事先拍好的照片地（如客厅）拍照解锁；防抖模式：要关闭闹钟，请摇动手机；数学题模式：要关闭闹铃，先解道数学问题。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline">
                                    <li><a class="btn btn-defaults btn-sm-list zanclass" id="zan1001" rel="nozan"><i class="fa fa-heart fa-fw"></i>&nbsp;<span class="zannumber" id="zannumber1001" >2536</span></a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list" id="pinglun1001"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list" id="shoucang1001"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list" href="http://www.sina.com" id="fenxiang1001"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop22"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>                                          
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第1行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第2行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2">   <!--第一列图片 start -->
                              <img src="Public/img/list2.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10 hot-content-marg">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>天启学堂：早幼教机构移动办公平台</h4></li>
                                    <li><p class="dis-p-color"><small>早教机构教务管理系统，3 秒排课，一键签到，孩子的作品家长一目了然。早教机构教务管理系统，3 秒排课，一键签到，孩子的作品家长一目了然。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults  btn-defaults-red btn-sm-list zanclass" id="zan1002" rel="zan"><i class="fa fa-heart fa-fw"></i>&nbsp;<span class="zannumber" id="zannumber1002" >536</span></a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop1"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第一行row end -->
                   
                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第2行row start -->
                    <div class="col-md-12" >   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list3.png" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10 hot-content-marg">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>Knotes：高效、优雅的 Kindle 标注管理器</h4></li>
                                    <li><p class="dis-p-color"><small>Mac平台高效、优雅的Kindle标注管理器，连接即可同步，按作者管理书籍，快速搜索书名，无干扰阅读标注。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                     <li><a class="btn btn-defaults  btn-defaults-red btn-sm-list zanclass" id="zan1003" rel="zan"><i class="fa fa-heart fa-fw"></i>&nbsp;<span class="zannumber" id="zannumber1003" >36</span></a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop2"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第一行row end -->
                    
                  <div class="row " onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第3行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list4.png" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10 hot-content-marg">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>undunion：移动出行技术服务</h4></li>
                                    <li><p class="dis-p-color"><small>以技术创新满足个人或出行企业需求为主线，基于自身开发的一套企业版后台管理系统，为企业提供了完整规范的出行管理解决方案。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                     <li><a class="btn btn-defaults btn-sm-list zanclass" id="zan1004" rel="nozan"><i class="fa fa-heart fa-fw"></i>&nbsp;<span class="zannumber" id="zannumber1004" >136</span></a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop3"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第3行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第4行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list5.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10 hot-content-marg">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>捷税宝：免费税务筹划咨询和落地执行 </h4></li>
                                    <li><p class="dis-p-color"><small>通过大数据以及智能匹配等技术，帮助企业主精准对接财务专家的互联网项目，目前主要为中小微企业提供服务。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                     <li><a class="btn btn-defaults btn-sm-list zanclass" id="zan1005" rel="nozan"><i class="fa fa-heart fa-fw"></i>&nbsp;<span class="zannumber" id="zannumber1005" >26</span></a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop4"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第4行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第5行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list6.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10 hot-content-marg">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>颜面：独家定制创意风格画像</h4></li>
                                    <li><p class="dis-p-color"><small>国内垂直的画像定制服务平台，让用户可以寻找各种风格类型的画师，独家定制自己创意画像的平台。国内垂直的画像定制服务平台，让用户可以寻找各种风格类型的画师，独家定制自己创意画像的平台。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                     <li><a class="btn btn-defaults  btn-defaults-red btn-sm-list zanclass" id="zan1006" rel="zan"><i class="fa fa-heart fa-fw"></i>&nbsp;<span class="zannumber" id="zannumber1006" >6</span></a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop5"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第5 row end -->
                  
                  <div class="row seemoreabout">
                    <div class="col-md-12">
                      <ul class="list-unstyled list-inline text-center">
                        <li><a class="a-more" href="#"><strong><i class="fa fa-angle-down"></i></strong></a>&nbsp;&nbsp;<a class="a-more" href="#"><small><strong>查看更多(101)</strong></small></a></li>
                      </ul>
                    </div>
                  </div>  
               </div>  <!-- 面板内容end -->
              </div>
            </div>
          </div>

          <!--  end
          =========================================-->

          <!--- start   不可关闭的按日期推荐 今日
          ==========================================-->
          <div class="row">  <!-- 内容区row start-->
            <div class="col-md-12">  <!-- 内容区col start -->
              <div class="panel panel-default">  <!-- 面板列 start -->
                <div class="panel-heading ">
                  <div class="row ">
                    <div class="col-md-10">
                      <h3 class="panel-title">今天</h3>
                    </div>
                    <div class="col-md-2">
                      <ul class="list-unstyled list-inline text-right hotornew ">
                        <li><a class="a-hotornew" href="#"><small>热门</small></a></li>
                        <li><a class="shuxian"></a></li>
                        <li><a class="a-hotornew-focus" href="#"><small>最新</small></a></li>
                      </ul>
                    </div>
                  </div>
                  
                </div>
                <div class="panel-body ">   <!-- 面板内容start -->
                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第1行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list1.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>Alarmy：能够叫醒你的闹钟</h4></li>
                                    <li><p class="dis-p-color"><small>三招让你起床服服帖帖。拍照模式：下床活动，到事先拍好的照片地（如客厅）拍照解锁；防抖模式：要关闭闹钟，请摇动手机；数学题模式：要关闭闹铃，先解道数学问题。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop22"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>                                          
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第1行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第2行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2">   <!--第一列图片 start -->
                              <img src="Public/img/list2.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>天启学堂：早幼教机构移动办公平台</h4></li>
                                    <li><p class="dis-p-color"><small>早教机构教务管理系统，3 秒排课，一键签到，孩子的作品家长一目了然。早教机构教务管理系统，3 秒排课，一键签到，孩子的作品家长一目了然。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop1"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第一行row end -->
                   
                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第2行row start -->
                    <div class="col-md-12" >   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list3.png" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>Knotes：高效、优雅的 Kindle 标注管理器</h4></li>
                                    <li><p class="dis-p-color"><small>Mac平台高效、优雅的Kindle标注管理器，连接即可同步，按作者管理书籍，快速搜索书名，无干扰阅读标注。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop2"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第一行row end -->
                    
                  <div class="row " onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第3行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list4.png" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>undunion：移动出行技术服务</h4></li>
                                    <li><p class="dis-p-color"><small>以技术创新满足个人或出行企业需求为主线，基于自身开发的一套企业版后台管理系统，为企业提供了完整规范的出行管理解决方案。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop3"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第3行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第4行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list5.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>捷税宝：免费税务筹划咨询和落地执行 </h4></li>
                                    <li><p class="dis-p-color"><small>通过大数据以及智能匹配等技术，帮助企业主精准对接财务专家的互联网项目，目前主要为中小微企业提供服务。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop4"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第4行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第5行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list6.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>颜面：独家定制创意风格画像</h4></li>
                                    <li><p class="dis-p-color"><small>国内垂直的画像定制服务平台，让用户可以寻找各种风格类型的画师，独家定制自己创意画像的平台。国内垂直的画像定制服务平台，让用户可以寻找各种风格类型的画师，独家定制自己创意画像的平台。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop5"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第5 row end -->
                  <div class="row seemoreabout">
                    <div class="col-md-12">
                      <ul class="list-unstyled list-inline text-center">
                        <li><a class="a-more" href="#"><strong><i class="fa fa-angle-down"></i></strong></a>&nbsp;&nbsp;<a class="a-more" href="#"><small><strong>查看更多(101)</strong></small></a></li>
                      </ul>
                    </div>
                  </div>
               </div>  <!-- 面板内容end -->
              </div>  <!-- 面板列 end -->
            </div>  <!-- 主内容区col end-->
          </div><!-- 主内容区row end-->

          <!--  end
          =========================================-->



           <!--- start   不可关闭的按日期推荐 今日
          ==========================================-->
          <div class="row">  <!-- 内容区row start-->
            <div class="col-md-12">  <!-- 内容区col start -->
              <div class="panel panel-default">  <!-- 面板列 start -->
                <div class="panel-heading ">
                  <div class="row ">
                    <div class="col-md-10">
                      <h3 class="panel-title">12月20日&nbsp;&nbsp;<small>星期二</small></h3>
                    </div>
                    <div class="col-md-2">
                      <ul class="list-unstyled list-inline text-right hotornew ">
                        <li><a class="a-hotornew" href="#"><small>热门</small></a></li>
                        <li><a class="shuxian"></a></li>
                        <li><a class="a-hotornew-focus" href="#"><small>最新</small></a></li>
                      </ul>
                    </div>
                  </div>
                  
                </div>
                <div class="panel-body ">   <!-- 面板内容start -->
                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第1行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list1.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>Alarmy：能够叫醒你的闹钟</h4></li>
                                    <li><p class="dis-p-color"><small>三招让你起床服服帖帖。拍照模式：下床活动，到事先拍好的照片地（如客厅）拍照解锁；防抖模式：要关闭闹钟，请摇动手机；数学题模式：要关闭闹铃，先解道数学问题。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop22"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>                                          
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第1行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第2行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2">   <!--第一列图片 start -->
                              <img src="Public/img/list2.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>天启学堂：早幼教机构移动办公平台</h4></li>
                                    <li><p class="dis-p-color"><small>早教机构教务管理系统，3 秒排课，一键签到，孩子的作品家长一目了然。早教机构教务管理系统，3 秒排课，一键签到，孩子的作品家长一目了然。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop1"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第一行row end -->
                   
                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第2行row start -->
                    <div class="col-md-12" >   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list3.png" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>Knotes：高效、优雅的 Kindle 标注管理器</h4></li>
                                    <li><p class="dis-p-color"><small>Mac平台高效、优雅的Kindle标注管理器，连接即可同步，按作者管理书籍，快速搜索书名，无干扰阅读标注。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop2"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第一行row end -->
                    
                  <div class="row " onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第3行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list4.png" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>undunion：移动出行技术服务</h4></li>
                                    <li><p class="dis-p-color"><small>以技术创新满足个人或出行企业需求为主线，基于自身开发的一套企业版后台管理系统，为企业提供了完整规范的出行管理解决方案。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop3"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第3行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第4行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list5.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>捷税宝：免费税务筹划咨询和落地执行 </h4></li>
                                    <li><p class="dis-p-color"><small>通过大数据以及智能匹配等技术，帮助企业主精准对接财务专家的互联网项目，目前主要为中小微企业提供服务。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop4"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      <hr class="hr-list-content">
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第4行row end -->

                  <div class="row" onmouseover="this.style.backgroundColor='#F9F9F9'"  onmouseout="this.style.backgroundColor='white'">    <!-- 面板内容整列第5行row start -->
                    <div class="col-md-12">   <!-- 整列第一行col start-->
                      <div class="row">
                        <div class="col-md-12 list-content-mar">                      
                          <div class="row">
                            <div class="col-md-2 ">   <!--第一列图片 start -->
                              <img src="Public/img/list6.jpg" class="img-responsive img-padd" alt="Responsive image" style="width:100px;heigth:100px;">
                            </div>       <!--第一列图片 end -->
                            <div class="col-md-10">   <!-- 第二列列表信息 start-->
                              <div class="row"> <!-- 第二列第一行基本信息 start-->
                                <div class="col-md-10">  <!-- 标题、描述信息start-->
                                  <ul class="list-unstyled">
                                    <li><h4>颜面：独家定制创意风格画像</h4></li>
                                    <li><p class="dis-p-color"><small>国内垂直的画像定制服务平台，让用户可以寻找各种风格类型的画师，独家定制自己创意画像的平台。国内垂直的画像定制服务平台，让用户可以寻找各种风格类型的画师，独家定制自己创意画像的平台。</small></p></li>
                                  </ul>
                                </div> <!-- 标题、描述信息end-->
                                <div class="col-md-2">    <!-- 上传者头像信息 ，预留未开发 start -->
                                  &nbsp;
                                </div>  <!-- 上传者头像信息end -->
                              </div>  <!-- 第二列第一行基本信息 end-->
                              <div class="row">   <!-- 第二列第二行 点赞分享等按钮 start -->
                                <div class="col-md-8">     <!-- 点赞、评论数、收藏、分享 start-->
                                  <ul class="list-unstyled list-inline ">
                                    <li><a class="btn btn-defaults-red btn-sm-list"><i class="fa fa-heart fa-fw"></i>&nbsp;536</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-comment fa-fw"></i>&nbsp;109</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-plus fa-fw"></i>&nbsp;收藏</a></li>
                                    <li><a class="btn btn-defaults-chat btn-sm-list"><i class="fa fa-send-o fa-fw"></i>&nbsp;分享</a></li>
                                  </ul>
                                </div>   <!-- 点赞、评论数、收藏、分享 end-->
                                <div class="col-md-4" id="spans">    <!-- 标签列表 start -->
                                  <ul class="list-unstyled list-inline text-right">
                                    <li>
                                      <a class="" href="#"><span class="label label-default">前端框架</span></a>&nbsp;<a  href="javascript:;" id="pop5"  class="a-font" rel="popover" 
                                        data-content="
                                          <ul class='list-unstyled'>
                                            <li '><a class='' href='#'><span class='label label-default label-defaults-popover'>前端框架ssssssssssssssssssss</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>Bootstrap</span></a></li>
                                            <li class='label-default-popover'><a class='' href='#'><span class='label label-default label-defaults-popover'>开源代码</span></a></li>
                                          </ul>
                                        " data-html="true" ><small>+7</small>
                                      </a>
                                    </li>                                  
                                  </ul>
                                </div>  <!-- 标签列表 end -->
                              </div>   <!-- 第二列第二行 点赞分享等按钮 end -->
                            </div>  <!-- 第二列列表信息 end-->                                        
                          </div>
                        </div>
                      </div> 
                      
                    </div>  <!-- 整列第一行col end-->
                  </div> <!-- 面板内容整列第5 row end -->
                  <!--
                  <div class="row seemoreabout">
                    <div class="col-md-12">
                      <ul class="list-unstyled list-inline text-center">
                        <li><a class="a-more" href="#"><strong><i class="fa fa-angle-down"></i></strong></a>&nbsp;&nbsp;<a class="a-more" href="#"><small><strong>查看更多(101)</strong></small></a></li>
                      </ul>
                    </div>
                  </div>  -->
               </div>  <!-- 面板内容end -->
              </div>  <!-- 面板列 end -->
            </div>  <!-- 主内容区col end-->
          </div><!-- 主内容区row end-->

          <!--  end
          =========================================-->




          <!--- start   不可关闭的按日期推荐 昨日
          ==========================================
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">12月20日&nbsp;&nbsp;<small>星期二</small></h3>
                </div>
                <div class="panel-body">
                  Panel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>
                  Panel content<br>              
                </div>
              </div>
            </div>
          </div>

            end
          =========================================-->
        </div>

        <div class="col-md-3">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <p class="">登录帐号获得完整体验</p>
                <hr>
                <div class="panel-body">
                  <button type="button" class="btn btn-warning   btn-block"><i class="fa fa-get-pocket fa-fw"></i>&nbsp;&nbsp;用不导航登录</button>
                  <button type="button" class="btn btn-success  btn-block"><i class="fa fa-wechat fa-fw"></i>&nbsp;&nbsp;通过微信登录</button>
                  <button type="button" class="btn btn-danger  btn-block"><i class="fa fa-weibo fa-fw"></i>&nbsp;&nbsp;通过微博登录</button>
                  <button type="button" class="btn btn-info  btn-block"><i class="fa fa-qq fa-fw"></i>&nbsp;&nbsp;通过QQ登录 </button>
                                                   
                </div>
              </div>
            </div>
          </div>   

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-titile-tuijian">优秀贡献者</h3>
                </div>
                <div class="panel-body panel-body-gongxian">
                  <div class="row ">
                    <div class="col-md-12">
                      <div class="row ">
                        <div class="col-md-3 gongxianimg">
                          <a  href="javascript:;" id="imgpop1"  class="a-font" rel="popover" 
                                        data-content="
                                          <div class='text-center popover-userimg'>
                                           <div class='row'>
                                              <div class='col-md-4'>
                                              </div>
                                              <div class='col-md-4 userimg-padd'>
                                                <img class='img-responsive img-circle' src='Public/img/1.jpg' alt='用户头像' style='width: 40px; height: 40px;'>
                                              </div>
                                              <div class='col-md-4'>
                                              </div>
                                            </div>
                                            <div class='row '>
                                              <div class='col-md-12'>
                                                <ul class='list-unstyled'>
                                                  <li class='popover-userimg-high'><h5>刘泽中</h5></li>
                                                  <li><p class='dis-p-color popover-userp-high'><small>闲时科技&nbsp;|&nbsp;CEO</small></p></li>
                                                  <li class='dis-p-color'><small>走过最长的路就是你的套路  </small></li>
                                                  
                                                </ul>
                                              </div>
                                            </div>
                                            <hr class='hr-user-img'>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right'>
                                                332
                                              </div>
                                              <div class='col-md-4'>
                                                25
                                              </div>
                                              <div class='col-md-4 jihe-pand-left'>
                                                33
                                              </div>
                                              
                                            </div>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right dianzan-high'>
                                                <small>点赞</small>
                                              </div>
                                              <div class='col-md-4 dianzan-high'>
                                                <small>分享</small>
                                              </div>
                                              <div class='col-md-4 jihe-pand-left dianzan-high '>
                                                <small>产品集</small>
                                              </div>
                                              
                                            </div>
                                          </div> " data-html="true" ><img class="img-responsive img-circle" src="Public/img/1.jpg" alt="用户头像" style="width: 38px; height: 38px;"></a>
                        </div>
                        <div class="col-md-8 gongxiangcontent">
                          <ul class="list-unstyled">
                            <li class="gongxianzhename"><h5>刘泽中</h5></li>
                            <li>                           
                                <p class="dis-p-color"><small>闲时科技&nbsp;|&nbsp;CEO</small></p>
                              
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-12">
                      <div class="row ">
                        <div class="col-md-3 gongxianimg">
                          <a  href="javascript:;" id="imgpop1"  class="a-font" rel="popover" 
                                        data-content="
                                          <div class='text-center popover-userimg'>
                                           <div class='row'>
                                              <div class='col-md-4'>
                                              </div>
                                              <div class='col-md-4 userimg-padd'>
                                                <img class='img-responsive img-circle' src='Public/img/ljj.jpg' alt='用户头像' style='width: 40px; height: 40px;'>
                                              </div>
                                              <div class='col-md-4'>
                                              </div>
                                            </div>
                                            <div class='row '>
                                              <div class='col-md-12'>
                                                <ul class='list-unstyled'>
                                                  <li class='popover-userimg-high'><h5>李俊杰</h5></li>
                                                  <li><p class='dis-p-color popover-userp-high'><small>苏州NIIT&nbsp;|&nbsp;高级项目总监</small></p></li>
                                                  <li class='dis-p-color'><small>弟弟，舔她！舔她！哈萨克</small></li>
                                                  
                                                </ul>
                                              </div>
                                            </div>
                                            <hr class='hr-user-img'>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right'>
                                                33
                                              </div>
                                              <div class='col-md-4'>
                                                15
                                              </div>
                                              <div class='col-md-4 jihe-pand-left'>
                                                10
                                              </div>
                                              
                                            </div>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right dianzan-high'>
                                                <small>点赞</small>
                                              </div>
                                              <div class='col-md-4 dianzan-high'>
                                                <small>分享</small>
                                              </div>
                                              <div class='col-md-4 jihe-pand-left dianzan-high '>
                                                <small>产品集</small>
                                              </div>
                                              
                                            </div>
                                          </div> " data-html="true" ><img class="img-responsive img-circle" src="Public/img/ljj.jpg" alt="用户头像" style="width: 38px; height: 38px;"></a>
                        </div>
                        <div class="col-md-8 gongxiangcontent">
                          <ul class="list-unstyled">
                            <li class="gongxianzhename"><h5>李俊杰</h5></li>
                            <li>                           
                                <p class="dis-p-color"><small>苏州NIIT&nbsp;|&nbsp;高级项目经理</small></p>
                              
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-12">
                      <div class="row ">
                        <div class="col-md-3 gongxianimg">
                          <a  href="javascript:;" id="imgpop1"  class="a-font" rel="popover" 
                                        data-content="
                                          <div class='text-center popover-userimg'>
                                           <div class='row'>
                                              <div class='col-md-4'>
                                              </div>
                                              <div class='col-md-4 userimg-padd'>
                                                <img class='img-responsive img-circle' src='Public/img/lb.jpg' alt='用户头像' style='width: 40px; height: 40px;'>
                                              </div>
                                              <div class='col-md-4'>
                                              </div>
                                            </div>
                                            <div class='row '>
                                              <div class='col-md-12'>
                                                <ul class='list-unstyled'>
                                                  <li class='popover-userimg-high'><h5>李斌</h5></li>
                                                  <li><p class='dis-p-color popover-userp-high'><small>南京豚鼠科技&nbsp;|&nbsp;前端架构师</small></p></li>
                                                  <li class='dis-p-color'><small>我非常讨厌那个白色的老鼠  </small></li>
                                                  
                                                </ul>
                                              </div>
                                            </div>
                                            <hr class='hr-user-img'>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right'>
                                                12
                                              </div>
                                              <div class='col-md-4'>
                                                0
                                              </div>
                                              <div class='col-md-4 jihe-pand-left'>
                                                2
                                              </div>
                                              
                                            </div>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right dianzan-high'>
                                                <small>点赞</small>
                                              </div>
                                              <div class='col-md-4 dianzan-high'>
                                                <small>分享</small>
                                              </div>
                                              <div class='col-md-4 jihe-pand-left dianzan-high '>
                                                <small>产品集</small>
                                              </div>
                                              
                                            </div>
                                          </div> " data-html="true" ><img class="img-responsive img-circle" src="Public/img/lb.jpg" alt="用户头像" style="width: 38px; height: 38px;"></a>
                        </div>
                        <div class="col-md-8 gongxiangcontent">
                          <ul class="list-unstyled">
                            <li class="gongxianzhename"><h5>李斌</h5></li>
                            <li>                           
                                <p class="dis-p-color"><small>南京豚鼠科技&nbsp;|&nbsp;前端架构师</small></p>
                              
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-12">
                      <div class="row ">
                        <div class="col-md-3 gongxianimg">
                          <a  href="javascript:;" id="imgpop1"  class="a-font" rel="popover" 
                                        data-content="
                                          <div class='text-center popover-userimg'>
                                           <div class='row'>
                                              <div class='col-md-4'>
                                              </div>
                                              <div class='col-md-4 userimg-padd'>
                                                <img class='img-responsive img-circle' src='Public/img/my.jpg' alt='用户头像' style='width: 40px; height: 40px;'>
                                              </div>
                                              <div class='col-md-4'>
                                              </div>
                                            </div>
                                            <div class='row '>
                                              <div class='col-md-12'>
                                                <ul class='list-unstyled'>
                                                  <li class='popover-userimg-high'><h5>马云</h5></li>
                                                  <li><p class='dis-p-color popover-userp-high'><small>阿里巴巴集团&nbsp;|&nbsp;董事长</small></p></li>
                                                  <li class='dis-p-color'><small>让天下没有难做的生意</small></li>
                                                  
                                                </ul>
                                              </div>
                                            </div>
                                            <hr class='hr-user-img'>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right'>
                                                32
                                              </div>
                                              <div class='col-md-4'>
                                                2
                                              </div>
                                              <div class='col-md-4 jihe-pand-left'>
                                                0
                                              </div>
                                              
                                            </div>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right dianzan-high'>
                                                <small>点赞</small>
                                              </div>
                                              <div class='col-md-4 dianzan-high'>
                                                <small>分享</small>
                                              </div>
                                              <div class='col-md-4 jihe-pand-left dianzan-high '>
                                                <small>产品集</small>
                                              </div>
                                              
                                            </div>
                                          </div> " data-html="true" ><img class="img-responsive img-circle" src="Public/img/my.jpg" alt="用户头像" style="width: 38px; height: 38px;"></a>
                        </div>
                        <div class="col-md-8 gongxiangcontent">
                          <ul class="list-unstyled">
                            <li class="gongxianzhename"><h5>马云</h5></li>
                            <li>                           
                                <p class="dis-p-color"><small>阿里巴巴集团&nbsp;|&nbsp;董事长</small></p>
                              
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-12">
                      <div class="row ">
                        <div class="col-md-3 gongxianimg">
                          <a  href="javascript:;" id="imgpop1"  class="a-font" rel="popover" 
                                        data-content="
                                          <div class='text-center popover-userimg'>
                                           <div class='row'>
                                              <div class='col-md-4'>
                                              </div>
                                              <div class='col-md-4 userimg-padd'>
                                                <img class='img-responsive img-circle' src='Public/img/zjl.jpg' alt='用户头像' style='width: 40px; height: 40px;'>
                                              </div>
                                              <div class='col-md-4'>
                                              </div>
                                            </div>
                                            <div class='row '>
                                              <div class='col-md-12'>
                                                <ul class='list-unstyled'>
                                                  <li class='popover-userimg-high'><h5>周杰伦</h5></li>
                                                  <li><p class='dis-p-color popover-userp-high'><small>吐词不清乐队&nbsp;|&nbsp;队长</small></p></li>
                                                  <li class='dis-p-color'><small>哎呀我的地盘这就得听我的  </small></li>
                                                  
                                                </ul>
                                              </div>
                                            </div>
                                            <hr class='hr-user-img'>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right'>
                                                222
                                              </div>
                                              <div class='col-md-4'>
                                                12
                                              </div>
                                              <div class='col-md-4 jihe-pand-left'>
                                                30
                                              </div>
                                              
                                            </div>
                                            <div class='row'>
                                              
                                              <div class='col-md-4 jihe-pand-right dianzan-high'>
                                                <small>点赞</small>
                                              </div>
                                              <div class='col-md-4 dianzan-high'>
                                                <small>分享</small>
                                              </div>
                                              <div class='col-md-4 jihe-pand-left dianzan-high '>
                                                <small>产品集</small>
                                              </div>
                                              
                                            </div>
                                          </div> " data-html="true" ><img class="img-responsive img-circle" src="Public/img/zjl.jpg" alt="用户头像" style="width: 38px; height: 38px;"></a>
                        </div>
                        <div class="col-md-8 gongxiangcontent">
                          <ul class="list-unstyled">
                            <li class="gongxianzhename"><h5>周杰伦</h5></li>
                            <li>                           
                                <p class="dis-p-color"><small>吐词不清乐队&nbsp;|&nbsp;名誉队长</small></p>
                              
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row seemoreabout">
                    <div class="col-md-12">
                      <ul class="list-unstyled list-inline text-center">
                        <li><a class="a-more" href="#"><strong><i class="fa fa-angle-down"></i></strong></a>&nbsp;&nbsp;<a class="a-more" href="#"><small>查看更多(21)</small></a></li>
                      </ul>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </div>
           

          <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-titile-tuijian">热门产品集</h3>
                  </div>
                <div class="panel-body panel-body-gongxian">
                  <div class="row">
                    <div class="col-md-12">
                      <a href="Public/img/tuijian1.jpg" class="portfolio-box">
                        <img src="Public/img/tuijian1.jpg" class="img-responsive" alt="" >
                        <div class="portfolio-box-caption">
                          <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                      最佳HTML5制作工具
                            </div>
                            <div class="project-name">
                                      
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <a href="Public/img/tuijian2.jpg" class="portfolio-box">
                        <img src="Public/img/tuijian2.jpg" class="img-responsive" alt="" >
                        <div class="portfolio-box-caption">
                          <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                      最佳团队协作工具
                            </div>
                            <div class="project-name">
                                      
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-12">
                      <a href="Public/img/tuijian3.jpg" class="portfolio-box">
                        <img src="Public/img/tuijian3.jpg" class="img-responsive" alt="" >
                        <div class="portfolio-box-caption">
                          <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                      NFC近场支付工具
                            </div>
                            <div class="project-name">
                                      
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <a href="Public/img/tuijian4.jpg" class="portfolio-box">
                        <img src="Public/img/tuijian4.jpg" class="img-responsive" alt="" >
                        <div class="portfolio-box-caption">
                          <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                      最佳经验技能共享产品
                            </div>
                            <div class="project-name">
                                     
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <a href="Public/img/tuijian5.jpg" class="portfolio-box">
                        <img src="Public/img/tuijian5.jpg" class="img-responsive" alt="" >
                        <div class="portfolio-box-caption">
                          <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                      最佳垂直B2B平台
                            </div>
                            <div class="project-name">
                                      
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  
                  <div class="row seemoreabout-hot">
                    <div class="col-md-12">
                      <ul class="list-unstyled list-inline text-center">
                        <li><a class="a-more" href="#"><strong><i class="fa fa-angle-down"></i></strong></a>&nbsp;&nbsp;<a class="a-more" href="#"><small>查看更多(11)</small></a></li>
                      </ul>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- 底部信息栏
    ============================================-->

  </div>



  <script src="Public/js/bdh/index.js"></script>


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