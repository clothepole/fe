<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>北燃供热调度管理系统</title>

    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

<!-- 引入 Bootstrap -->
<link href="/Public/css/commcss/custom.css" rel="stylesheet">
<link href="/Public/bootstrap-table-1.7.0/bootstrap-table.min.css" rel="stylesheet">
<link href="/Public/css/commcss/css/font-awesome.min.css" rel="stylesheet">
<link href="/Public/css/buttons.css" rel="stylesheet">
<style>
    .coolscrollbar {
        scrollbar-arrow-color: yellow;
        scrollbar-base-color: lightsalmon;
    }
    .logo {
        background-position: 10px 3px;
        background-image: url(/images/top-logo.png);
        background-repeat: no-repeat;
    }
</style>
<!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
<!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
<!--[if lt IE 9]>
<script src="/Public/bootstrap-3.3.4/html5shiv.js"></script>
<script src="/Public/bootstrap-3.3.4/respond.min.js"></script>
<![endif]-->

<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
<script  src="/Public/js/commjs/jquery.js"></script>
<!-- 包括所有已编译的插件 -->
<script src="/Public/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<script src="/Public/bootstrap-table-1.7.0/bootstrap-table.min.js"></script>
<script src="/Public/bootstrap-table-1.7.0/bootstrap-table-filter.min.js"></script>
<script src="/Public/bootstrap-table-export/bootstrap-table-export.js"></script>
<script src="/Public/js/commjs/topLink.js"></script>

    <style>
        body {
            background-color: #e5e5e5;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top docs-nav" style="background-image: url(/images/top_di.jpg);height:85px;">
    <div class="container logo" style="width:100%">
        <div class="navbar-header">     
          <!-- 自适应隐藏导航展开按钮 -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
          </button>
        </div>
      	  
    	   <div class="collapse navbar-collapse" id="navbar-collapse" >
          <ul class="nav navbar-nav navbar-right" style="margin-top:15px; margin-right:20px;">
            <a href="../login.html" >
            <li  class=" icon-home icon-2x"></li>
            首页</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">
            <li  class=" icon-exclamation-sign icon-2x"></li>
            系统报警</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" >
            <li  class=" icon-key icon-2x"></li>
            修改密码</a> &nbsp;&nbsp; <a href="#" >
            <li  class=" icon-remove-sign icon-2x"></li>
            退出系统</a>
          </ul>
        </div>
        <div style="margin-top:20px;  margin-left:20px; color:#7a7a7a; font-size:13px;" >
            当前用户：Admin
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            角色：总调度经理</div>
    </div>
</nav>
<div class="container" style="width:100%; margin-top:50px;" >
  <div class="row"><!---LeftStard-->
    <div class="col-sm-2 col-md-2 col-lg-2 col-lg-push-0 table-responsive" style="background:#e5e5e5;" >
        <iframe seamless  name="left" src="/?a=left" style="width:100%; height:800px; border: #FFF;  border-color:#fff" ></iframe>
    </div>
    <!--LeftEnd-->
    <div class="col-sm-10 col-md-10 col-lg-10 col-lg-pull-0" style="margin-top:0px;  overflow: scroll;  background-color:#e5e5e5; border-left:1px solid #CCC;">
      <iframe seamless  name="main1" src="/?a=dt-zt" style="width:100%; height:800px; border:#FFF; border:thin; border-color:#CCC"></iframe>
    </div>
  </div>
</div>
<div class="footer navbar-fixed-bottom"  style="height:50px;" >
  <div style="width:500px; float:left;  text-align:center;  padding:2px; margin-left:10px">copyright@北京远东仪表有限公司  （<a href="main1.html" target="main">总经理</a>　
      <a href="main2.html" target="main">部门经理</a>　<a href="main3.html" target="main">项目经理</a>）
  </div>
  <div style="width:300px; float:right; text-align:right;  padding:2px; margin-right:40px">
    <button onClick="changeSkin(2)" style="width: 18px; height: 18px; border: 1px solid #ffffff; background-color: #27affb; margin: 4px;"></button>
    <button onClick="changeSkin(3)" style="width: 18px; height: 18px; border: 1px solid #ffffff; background-color: #404040; margin: 4px;"></button>
    <button onClick="changeSkin(4)" style="width: 18px; height: 18px; border: 1px solid #ffffff; background-color: #fecb99; margin: 4px;"></button>
    <button onClick="changeSkin(1)" style="width: 18px; height: 18px; border: 1px solid #ffffff; background-color: #AAAAAA; margin: 4px;"></button>
  </div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ccc">
        <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h4 class="modal-title" id="myModalLabel" > 模态框（Modal）标题 </h4>
      </div>
      <div class="modal-body" style="padding:0;">
        <iframe src="/?a=TrainInfo" style="width:100%;height:100%;border:0;"></iframe>
      </div>
      <div class="modal-footer" style="background-color:#ccc; height:42px; padding-top:4px;margin:0;">
        <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭 </button>
        <button type="button" class="btn btn-primary"> 提交更改 </button>
      </div>
    </div>
  </div>
</div>
<!--s
<script type="text/javascript">     //以下JS是左侧菜单切换显示/隐藏可折叠
   $(function () { $('#collapseFour').collapse({
      toggle: false       //激活内容为可折叠元素。接受一个可选的 options 对象
   })});
   $(function () { $('#collapseTwo').collapse('show')});   //显示可折叠元素。
   $(function () { $('#collapseThree').collapse('toggle')});  //切换显示/隐藏可折叠
   $(function () { $('#collapseOne').collapse('hide')});    //隐藏可折叠元素
</script>  
--> 

<script type="text/javascript">
   $(function () { 
      $('#collapseFour').on('show.bs.collapse', function () {   // 执行一些动作...  在调用 show 方法后触发该事件。还有shown/hide/hidden.bs.collapse 等方法。
         alert('嘿，当您展开时会提示本警告');})
   });
</script>
</body>
</html>