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

    <div class="container">
      <div class="row">
        <div class="col-md-12 userregister-logo">
          <!--<i class="fa fa-simplybuilt fa-4x"></i>-->
          <i class="fa fa-get-pocket fa-4x"></i>
      </div>
      <div class="col-md-12 userregister-title">
          <p>注册新帐号</p>
      </div>
      <div class="col-md-12">
        <form role="form">
          <div class="form-group userregister-form center-block">
            <label for="emailOrMobil" class="userlogin-form-lable sr-only">你的邮箱或手机号</label>
            <input type="email" class="form-control userregister-form-width" id="emailOrMobil" name="emailOrMobil" placeholder="sorry,you make a error !" disabled>
          </div>

          <div class="form-group userregister-form center-block userregister-btn-padding">
            <label for="username" class="userlogin-form-lable sr-only">用户名</label>
            <input type="text" class="form-control userregister-form-width" id="username" name="username"placeholder="您的昵称">
          </div>

          <div class="form-group userregister-form center-block userregister-btn-padding">
            <label for="password" class="userlogin-form-lable sr-only">密码</label>
            <input type="password" class="form-control userregister-form-width" id="password" name="password" placeholder="密码（字母，数字，至少6位）">
          </div>

          <div class="form-group userregister-form center-block userregister-btn-padding">
            <div id="drag"></div>
          </div> 
          <div class="form-group userregister-form center-block userregister-font-xieyi-padding ">
            <div class="checkbox">
              <label >
                <input type="checkbox" value="checked" checked="checked" name="checkbox">
                  我已经阅读并同意<a href="" class="userlogin-form-forgot-a"  data-toggle="modal" data-target="#myModal">《不导航服务条款》</a> 
              </label>
            </div>
          </div>        

          <div class="userregister-form center-block">
          <button type="button" class="btn userlogin-btn btn-block userregister-btn" onclick="register.secondCheck()">立即注册</button>
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



  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">隐私条款</h4>
      </div>
      <div class="modal-body">
      <div class="privacy-content"><section><h4 class="privacy-title">一、合约定义</h4><P>1. 本网站（本合约中指包括但不限于 budaohang.com 等网站和相关应用）由无锡闲时科技有限公司（以下简称“闲时科技”）所有和运作。</P><P>2. 本合约是网站用户(包括个人、企业及其他组织)与网站运营企业闲时科技之间的法律契约。用户访问、浏览和注册本网站即代表接受本合约条款的约束，用户对本网站的访问和使用应以接受并遵守本合约所载明的条款和条件为前提。</P></section><section><h4 class="privacy-title">二、知识产权申明</h4><P>1. 本网站的包括但不限于应用程序、源代码、商标、标示图案(LOGO)、界面设计、应用程序编程接口(API)等所关联的所有知识产权均属闲时科技所有。用户不得复制、修改、传播或在非本网站所属的服务器上做镜像或者以其它方式进行非法使用。</P><P>2. 用户在本网站平台所创建的独创性数据归属该用户所有，该用户有权对前述数据进行任何形式的处置，包括从平台中复制，导出和删除。</P><p>3. 用户应当确保其公开或存储（方式包括但不限于：上传、保存、公布、发布等）于本网站及相关服务器的内容不存在任何侵犯其他第三方知识产权的情形。若存在本条所述情形，闲时科技有权根据具体情节针对上述内容，采取包括但不限于限制、屏蔽、删除、修改等手段，由此给网站用户造成的损失由网站用户自行承担；若闲时科技因网站用户存在本条所述行为而向其他第三方承担法律责任的，闲时科技有权向网站用户追偿全部损失。</p></section><section><h4 class="privacy-title">三、网站使用规则</h4><p>1. 用户在使用本网站服务过程中，必须遵循以下规则：</p><ul class="privacy-list"><li>遵守中国有关的法律法规；</li><li>不得对本网站服务进行任何形式的对其他第三方的再授权使用、销售或转让；</li><li>不得为设计开发竞争产品对本网站进行任何形式的反向工程、反向编译、反汇编，或在竞争产品抄袭模仿本网站的设计；</li><li>不得滥用本网站的通信功能发送垃圾邮件和短信；</li><li>不得对本网站的连续服务和商誉构成损害的其他行为，包括对网站服务器的攻击；</li><li>遵守本协议中的全部约定。</li></ul><p>2. 如用户在使用本网站服务时违反任何上述规定，闲时科技有权要求用户改正或直接采取一切必要的措施（包括但不限于暂停或终止用户使用本网站服务的权利并追讨因此带来的损失）以减轻用户不当行为造成的影响。</p><p>3. 用户所拥有的互联网域名所对应的电子邮件地址作为用户权证的唯一识别信息。当用户不再拥有或完全控制在本网站登记的域名时，闲时科技有权随时删除所有的用户数据。在高级模式下，系统支持多个域名电子邮件地址，当最早登记的主域名权属发生改变时，闲时科技有权随时删除主域名及其关联域名所有的用户数据。</p><p>4. 用户须对在 不导航 的注册信息的真实性、合法性、有效性承担全部责任，用户不得冒充他人；不得利用他人的名义发布任何信息；不得恶意使用注册帐户导致其他用户误认；否则 不导航 有权立即停止提供服务，收回其帐号并由用户独自承担由此而产生的一切法律责任。</p><p>5. 用户直接或通过各类方式（如 RSS 源和站外 API 引用等）间接使用 不导航 服务和数据的行为，都将被视作已无条件接受本协议全部内容；若用户对本协议的任何条款存在异议，请停止使用 不导航 所提供的全部服务。</p><p>6. 用户承诺不得以任何方式利用 不导航 直接或间接从事违反中国法律、以及社会公德的行为， 不导航 有权对违反上述承诺的内容予以删除。</p><p>7. 用户不得利用 不导航 服务制作、上载、复制、发布、传播或者转载如下内容：</p><ul class="privacy-list"><li>危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；</li><li>损害国家荣誉和利益的；</li><li>煽动民族仇恨、民族歧视，破坏民族团结的；</li><li>破坏国家宗教政策，宣扬邪教和封建迷信的；</li><li>散布谣言，扰乱社会秩序，破坏社会稳定的；</li><li>散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；</li><li>侮辱或者诽谤他人，侵害他人合法权益的；</li><li>含有法律、行政法规禁止的其他内容的信息。</li></ul><p>8. 不导航 有权对用户使用 不导航 的情况进行审查和监督，如用户在使用 不导航 时违反任何上述规定， 不导航 或其授权的人有权要求用户改正或直接采取一切必要的措施（包括但不限于更改或删除用户张贴的内容、暂停或终止用户使用 不导航 的权利）以减轻用户不当行为造成的影响。</p><p>9. 不导航 有权但无义务对用户发布的内容进行审核，有权根据相关证据结合《侵权责任法》、《信息网络传播权保护条例》等法律法规及 不导航 社区指导原则对侵权信息进行处理。</p></section><section><h4 class="privacy-title">四、用户信息保护</h4><p>1. 本网站将尽可能采取一切措施保护用户数据及个人信息资料安全，只根据用户在网站上的行为指示来分发用户的信息，不会向任何第三方公开或共享用户的具体数据。</p><p>2. 本网站保留使用汇总统计性信息的权利，在不透露单个用户隐私资料的前提下，本网站有权对整个用户数据库进行分析并对用户数据库进行商业上的利用。</p></section><section><h4 class="privacy-title">五、免责申明</h4><p>1. 本网站将尽最大努力保障软件平台的连续可靠运行，但鉴于网络服务的特殊性，本网站对可能发生的网络服务的中断或终止所可能导致的一切损失，不承担任何法律责任及经济赔偿。</p><p>2. 本网站将尽最大努力保障客户数据的安全备份，但无法承诺100%的数据恢复，对因数据丢失带来的任何直接或间接损失不承担任何责任。</p><p>3. 在发生需要从备份文件中恢复数据的情形时，本网站通常需要4小时，最长48小时完成，在此时间范围内的数据恢复视作服务是连续的。</p><p>4. 对于因不可抗力或本网站不能控制的原因造成的网络服务中断和长时间终止，本网站不承担任何责任，但将尽力减少因此而给用户造成的损失和影响。</p></section><section><h4 class="privacy-title">六、合约变更</h4><p>1. 本网站有权随时对本合约的条款进行修订，一旦本合约的内容发生变更，本网站将会在修订生效日前一个工作日更新。</p><p>2. 如用户继续使用网络服务，则视为用户接受本网站对合约相关条款所做的修订。</p></section><section><h4 class="privacy-title">七、法律适用</h4><p>1. 本合约的订立、执行和解释以及争议的解决均应适用中华人民共和国法律并受中国法院管辖。</p><p>2. 协议双方就本合约内容或其执行发生任何争议，应首先力争友好协商解决；协商不成时，任何一方均可向闲时科技注册地所在的人民法院提起诉讼。</p></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">同意并继续</button>
      </div>
    </div>
  </div>
</div>
  </body>
</html>

  <script>
    $('#drag').drag();
    $(function () {
      if(!sessionStorage.firstCheckVaule)
        window.location.href = 'index.php?m=home&c=register&a=index';
      $('#emailOrMobil').attr('placeholder',sessionStorage.firstCheckVaule);
    });

  </script>