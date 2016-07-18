<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>北燃供热调度信息系统</title>

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
	background-color: #FFFFFF;
}
</style>
</head>
<body >
<div  class="panel-group" id="accordion" style="height:45px; width:99%; padding:15px;margin-top:-50px; background-color:#FFF;">
  <div class="panel panel-default">
    <div align="center" style="height:130px; margin-top:5px;"> <a data-toggle="collapse" target="main1" data-parent="#accordion" 
          href="index.html"> <img src="/images/admin.PNG" width="106" height="121"> </a> </div>
  </div>
  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion"  href="#collapseOne">
      <div class="thead panel-heading">
        <h4 class="panel-title"> <i class="icon-briefcase icon-x"></i>&nbsp;&nbsp; <strong> 运行监控</strong></h4>
      </div>
      </a>
      <div id="collapseOne" class="panel-collapse collapse">
        <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=dt-zt" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;大区运行情况</a></div>
        <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=dt-xm" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;项目运行情况</a></div>
        <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=dtdp-list" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;锅炉房运行情况</a></div>
        <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=ztgl" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;组态图管理</a></div>
        <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=bj" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;报警/预警</a></div>
      </div>
  </div>
  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion"  href="#collapseTwo">
    <div class="thead panel-heading">
      <h4 class="panel-title"> <i class="icon-briefcase icon-x"></i>&nbsp;&nbsp; <strong> 项目管理</strong></h4>
    </div>
    </a>    
    <div id="collapseTwo" class="panel-collapse collapse ">
    <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=jg-List" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;区域项目部/分公司</a></div>
    <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=jg3-List" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;各项目管理</a></div>
    <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=jg2-List" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;工作站管理</a></div>
    <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=DTU-list" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;DTU管理</a></div>
    </div>
  </div>
  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion"  href="#collapseThree">
     <div class="thead panel-heading">
        <h4 class="panel-title"> <i class="icon-briefcase icon-x"></i>&nbsp;&nbsp; <strong> 设备管理</strong></h4>
      </div>
      </a>
      <div id="collapseThree" class="panel-collapse collapse ">
       <!--  <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=wj" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;设备台账</a></div>   -->
        <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=sbtz-list" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;设备台账</a></div>
        <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=bjgl-list" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;备品备件</a></div>
        <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=jxjl-List" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;检修记录</a></div>
      </div>
  </div>
  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion"  href="#collapseTour">
      <div class="thead panel-heading">
        <h4 class="panel-title"> <i class="icon-briefcase icon-x"></i>&nbsp;&nbsp; <strong> 人员管理</strong></h4>
      </div>
      </a>
      <div id="collapseTour" class="panel-collapse collapse ">
       <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=gzry-List" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;基础信息</a></div>
       <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=js2-List" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;角色权限分配</a></div>
       <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=sfqy-List" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;值班表</a></div>
       <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=wxtx-List" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;外协通讯表</a></div>
      </div>   
  </div>
  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion"  href="#collapseFive">
    <div class="thead panel-heading">
        <h4 class="panel-title"> <i class="icon-briefcase icon-x"></i>&nbsp;&nbsp; <strong> 运行分析</strong></h4>
    </div>
      </a>
    <div id="collapseFive" class="panel-collapse collapse in">
      <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=tjfx" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;统计分析（图表）</a></div>
     <!--  <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=dd-jd" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;焦点</a></div>  -->
      <!--  <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;效率</a></div>    -->
     </div>
  </div>
  <div class="panel panel-default"><a data-toggle="collapse" data-parent="#accordion"  href="#collapseSix">
    <div class="thead panel-heading">
        <h4 class="panel-title"> <i class="icon-briefcase icon-x"></i>&nbsp;&nbsp; <strong> 调度</strong></h4>
    </div>
      </a>
    <div id="collapseSix" class="panel-collapse collapse ">
      <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a  href="/?a=fq" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;发起</a></div>
      <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=dd-db" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;待办</a></div>
       <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=dd-ls" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;历史</a></div>
       <div class="panel-body"> &nbsp;&nbsp;&nbsp;<a href="/?a=dd-bf" target="main1"><i class="icon-user-md icon-larger"></i>&nbsp;&nbsp;已报废</a></div>
     </div>
  </div>
</div>
<!--
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
 function topwin(){ 
   window.showModalDialog("TrainInfo.html","","dialogWidth:800px; dialogHeight:350px;dialogLeft:400px; dialogTop:300px;  scroll:no;status:no") 
   } 
   
   
   function leadingwin(){ 
   window.showModalDialog("leading-in.html","","dialogWidth:800px; dialogHeight:250px;dialogLeft:400px; dialogTop:300px;  scroll:no;status:no") 
   }
   function FullInfo(){ 
   window.showModalDialog("FullInfo.html","","dialogWidth:800px; dialogHeight:350px;dialogLeft:400px; dialogTop:300px;  scroll:no;status:no") 
   }
   
   // $(function () { 
   //    $('#collapseFour').on('show.bs.collapse', function () {   // 执行一些动作...  在调用 show 方法后触发该事件。还有shown/hide/hidden.bs.collapse 等方法。
   //       alert('嘿，当您展开时会提示本警告');})
   // });
   
<!--function Info(row, field,value){
	//if(field=="sbname"){		 	
	//	window.open( 'addZyKInfo.html','','toolbar=no,  menubar=no, location=no, directories=no, status=no, scrollbars=yes, resizable=yes, width=900, height=500, left=0, top=0')
		
		//alert("22222222");
//	}
	
//}-->    
  
</script>
</body>
</html>