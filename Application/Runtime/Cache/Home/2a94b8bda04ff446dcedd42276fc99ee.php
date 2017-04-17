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
                    <li><button type="submit" class="btn btn-info btn-sm">发现产品</button></li>
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