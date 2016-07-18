<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>设备台账</title>
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
	background-color: #fff;	
	margin-top: 5px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
	padding: 20px;
}
</style>
</head>
<body>
<div >
&nbsp;<a class="btn btn-large btn-primary" href="#"  data-toggle="modal"    data-target="#myModal31"><i class="icon-plus"></i>&nbsp;&nbsp;新增&nbsp;&nbsp; </a>
&nbsp;<a class="btn btn-large  btn-info active"   href="#" onClick="leadingwin()"><i class=" icon-upload-alt"></i>&nbsp;&nbsp;导入&nbsp;&nbsp;</a>
</div> 
  <table id="table" class="table-striped"   data-toggle="table" data-height="700"  data-url="/public/json/dd-data-basic.json"  data-page-size="15" data-show-columns="true"  data-jumpMenu="true" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-export="true" data-pagination="true" width="100%">
    <thead  class="thead" >
      <tr>
      <th data-checkbox="true"  data-field="state"></th>
        <th data-align="center" data-formatter="operateFormatter" data-events="operateEvents">  操作</th>
        <th data-field="dw" data-align="center"  data-sortable="true">管理单位</th>
        <th data-field="xm" data-align="center"  data-sortable="true">负责人</th>
        <th data-field="sbbh" data-align="center"  data-sortable="true">设备编号</th> 
        <th data-field="sbmc" data-align="center"  data-sortable="true">设备名称</th> 
        <th data-field="ggxh" data-align="center"  data-sortable="true">规格型号</th> 
        <th data-field="zycs" data-align="center"  data-sortable="true">主要参数</th> 
        <th data-field="gys" data-align="center"  data-sortable="true">供应商</th> 
        <th data-field="time" data-align="center"  data-sortable="true">购买日期</th> 
        <th data-field="time" data-align="center"  data-sortable="true">安装日期</th> 
        <th data-field="time" data-align="center"  data-sortable="true">验收日期</th> 

      </tr>
    </thead>
  </table>
  
<div class="modal fade" id="myModal31" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog"  >
      <div class="modal-content"   style="width:852px;">
         <div class="modal-header" style="width:850px; background-image:url(../images/title_di.jpg); height:43px; padding-top:4px;margin:0;">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              新增工人员基础信息               
            </h4>
         </div>
         <div style="padding:0; width:850px;height:280px;">
            <iframe src="gzry-info.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
         </div>
    <div class="modal-footer" style="width:850px; height:43px;  background-image:url(../images/title2_di.jpg);">
            <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
               data-dismiss="modal">提交
            </button>
            <button type="button" class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();" >
               取消
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog"  >
      <div class="modal-content"   style="width:852px;">
         <div class="modal-header" style="width:850px; background-image:url(../images/title_di.jpg); height:43px; padding-top:4px;margin:0;">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel" >
              新增               
            </h4>
         </div>
         <div style="padding:0; width:850px;height:280px;">
            <iframe src="dj-info.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
         </div>
 <div class="modal-footer" style="width:850px; height:43px;  background-image:url(../images/title2_di.jpg);">
            <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
               data-dismiss="modal">提交
            </button>
            <button type="button" class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();" >
               取消
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>

<div class="modal fade" id="myModal22" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog"  >
      <div class="modal-content"   style="width:852px;">
         <div class="modal-header" style="width:850px; background-image:url(../images/title_di.jpg); height:43px; padding-top:4px;margin:0;">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel" >
              查看楼栋用户信息列表               
            </h4>
         </div>
         <div style="padding:0; width:850px;height:280px;">
            <iframe src="dj-info2.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
         </div>
 <!--<div class="modal-footer" style="width:850px; height:43px;  background-image:url(../images/title2_di.jpg);">
            <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
               data-dismiss="modal">提交
            </button>
            <button type="button" class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();" >
               取消
            </button>
         </div>-->
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
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
<script>
    function operateFormatter(value, row, index) {
        return [
           /* '<a class="like" href="javascript:void(0)" title="Like">',
                '<i class="glyphicon glyphicon-heart"></i>',
            '</a>',
            '<a class="edit ml10" href="javascript:void(0)" title="Edit">',
                '<i class="glyphicon glyphicon-edit"></i>',
            '</a>',*/
            '<a class="remove ml10" href="javascript:void(0)" title="Remove">',
                '<i class=" icon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.operateEvents = {
      /*  'click .like': function (e, value, row, index) {
            alert('You click like icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },
        'click .edit': function (e, value, row, index) {
            alert('You click edit icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },*/
        'click .remove': function (e, value, row, index) {
            alert('你确定要删除此条信息吗？');
        }
    };
</script>
<script>
var $table = $('#table');
function operateFormatter(value, row, index) {
        return [
            '<a class="modify" data-toggle="modal" data-target="#myModal5" href="#" title="修改">',
            '<i class="icon-edit icon-large" style="font-size:14px;color:#71C971;"></i>',
            '</a >&nbsp;&nbsp;&nbsp;&nbsp;',
             '<a class="reset" data-toggle="modal" data-target="#myModal5" href="#" title="初始化密码">',
            '<i class="icon-key icon-large" style="font-size:14px;color:#0099ff;"></i>',
            '</a >&nbsp;&nbsp;&nbsp;&nbsp;',
            '<a class="remove" href="javascript:;" title="删除">',
            '<i class="icon-trash" style="font-size:14px;color:#F0706D;"></i>',
            '</a >'           
        ].join('');
    }
window.operateEvents = {
        /*'click .modify': function (e, value, row, index) {
            alert('You click like action, row: ' + JSON.stringify(row));
        },*/
        'click .remove': function (e, value, row, index) {
            $table.bootstrapTable('remove', {
                field: 'itemid',
                values: [row.itemid]
            });
        }
    };   
</script>
<script type="text/javascript">
    function FullInfo(){ 
   window.showModalDialog("dj-Info-List.html","","dialogWidth:1200px; dialogHeight:750px;dialogLeft:400px; dialogTop:200px;  scroll:no;status:no") 
   } 
   
   $(function () { 
      $('#collapseFour').on('show.bs.collapse', function () {   // 执行一些动作...  在调用 show 方法后触发该事件。还有shown/hide/hidden.bs.collapse 等方法。
         alert('嘿，当您展开时会提示本警告');})
   });
</script>
</body>
</html>