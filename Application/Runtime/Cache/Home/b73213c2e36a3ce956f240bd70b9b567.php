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
            <button type="button" class="btn btn-default " id="add-product">提交产品</button>
        </div>
    </div>


    </form>
</div>
<br><br><br>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        // Generate a simple captcha
        function randomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        };
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

        $('#defaultForm').formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'fa fa-check',
                invalid: 'fa fa-remove',
                validating: 'fa  fa-refresh'
            },
            fields: {
                firstName: {
                    row: '.col-sm-4',
                    validators: {
                        notEmpty: {
                            message: 'The first name is required'
                        }
                    }
                },
                lastName: {
                    row: '.col-sm-4',
                    validators: {
                        notEmpty: {
                            message: 'The last name is required'
                        }
                    }
                },

                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: '用户名必须设置'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '用户名必须在6-30个字符之间'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: '电子邮件不能为空'
                        },
                        emailAddress: {
                            message: '请输入有效的电子邮件地址'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        different: {
                            field: 'username',
                            message: '密码不能和用户名相同'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: '必须选择一个性别'
                        }
                    }
                },
                captcha: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function(value, validator, $field) {
                                var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
                agree: {
                    validators: {
                        notEmpty: {
                            message: 'You must agree with the terms and conditions'
                        }
                    }
                }
            }
        });
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
    $(document).ready(function() {
        // Generate a simple captcha
        function randomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        };
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

        $('#add-product-form').formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'fa fa-check',
                invalid: 'fa fa-remove',
                validating: 'fa  fa-refresh'
            },
            fields: {

                product_name: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: '用户名必须设置'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '用户名必须在6-30个字符之间'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: '电子邮件不能为空'
                        },
                        emailAddress: {
                            message: '请输入有效的电子邮件地址'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        different: {
                            field: 'username',
                            message: '密码不能和用户名相同'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: '必须选择一个性别'
                        }
                    }
                },
                captcha: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function(value, validator, $field) {
                                var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
                agree: {
                    validators: {
                        notEmpty: {
                            message: 'You must agree with the terms and conditions'
                        }
                    }
                }
            }
        });
    });
</script>


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