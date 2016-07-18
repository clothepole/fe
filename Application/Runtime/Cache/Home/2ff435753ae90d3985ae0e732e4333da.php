<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>文件管理</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 
                                     initial-scale=1.0, 
                                     maximum-scale=1.0, 
                                     user-scalable=yes">

<!-- 引入 Bootstrap -->
<link href="../files/commcss/custom.css" rel="stylesheet">
<link href="../files/fileupload/css/default.css" rel="stylesheet">
<link href="../files/fileupload/css/fileinput.css" rel="stylesheet">
<link href="../files/bootstrap-table-1.7.0/bootstrap-table.min.css" rel="stylesheet">
<link href="../files/commcss/css/font-awesome.min.css" rel="stylesheet">
<style>
.logo {
  background-position: 10px 3px;
  background-image: url(../images/top-logo.png);
  background-repeat: no-repeat;
}
body {
  background-color: #eff0f2;
  text-align: center;
  vertical-align: middle;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  padding: 10px;
}
table {
  color: #666;
  margin: 0px auto;
  border-collapse: collapse;
  width: 100%;
  height: 100%;
  font-family: "微软雅黑";
  border-top-color: #999;
  border-left-color: #999;
  border-top-width: 1px;
  border-left-width: 1px;
}
td {
  border: solid #b7bcc0 1px;
}
</style>
<style>
.coolscrollbar {
	scrollbar-arrow-color: yellow;
	scrollbar-base-color: lightsalmon;
}
</style>
<!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
<!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
<!--[if lt IE 9]>
      	 <link href="files/icons/css/font-awesome-ie7.min.css" rel="stylesheet">
         <script src="files/bootstrap-3.3.4/html5shiv.js"></script>
         <script src="files/bootstrap-3.3.4/respond.min.js"></script>
      <![endif]-->

<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
<script  src="../files/commjs/jquery.js"></script>
<!-- 包括所有已编译的插件 -->
<script language="JavaScript" type="text/javascript" src="../files/fileupload/js/fileinput.js"></script>
<script language="JavaScript" type="text/javascript" src="../files/fileupload/js/fileinput_locale_zh.js"></script>
<script  src="../files/bootstrap-3.3.4/js/bootstrap.min.js"></script>
<script src="../files/bootstrap-table/bootstrap-table.min.js"></script>
<script src="../files/bootstrap-table/extensions/filter/bootstrap-table-filter.min.js"></script>
<script src="../files/bootstrap-table/extensions/export/bootstrap-table-export.js"></script>
<script language="JavaScript" type="text/javascript" src="../files/commjs/topLink.js"></script>
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
  <table width="100%">  
   <tr>
      <td  class="td1" width="15%" >收件人：</td>
      <td  class="td2"  ><input type="text"  class="form-control" id="zh"  tabindex="8" placeholder=""></td>    
    </tr> 
     <tr>
    <td  class="td1">主题：</td>
    <td class="td2"><input type="text"  class="form-control" id="zh"  tabindex="8" placeholder=""></td>
  </tr> 
     <tr>
    <td  class="td1">有效期：</td>
    <td class="td2"><select name="jumpMenu2" id="jumpMenu2" disabled style="width:100%; height:40px;">
            <option>2013-2014</option>
            <option>2014-2015</option>
            <option>2015-2016</option>
          </select></td>
  </tr>
  <tr>
    <td  class="td1">时间日期：</td>
    <td class="td2"><select name="jumpMenu2" id="jumpMenu2" disabled style="width:100%; height:40px;">
            <option>2013-2014</option>
            <option>2014-2015</option>
            <option>2015-2016</option>
          </select></td>
  </tr>
  <tr>
    <td  class="td1">附件：</td>
    <td class="td2" colspan="3"><div class="row">
   <div class="htmleaf-container">
   <form enctype="multipart/form-data">
   <div class="form-group">
      <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#" data-preview-file-icon="">
   </div>
   </form> 
   </div>
   </div></td>
    </tr>
    <tr>
      <td class="td2" colspan="2"><textarea style="height:50px;" name=""></textarea></td>
    </tr>
</table>
<div style="height:45px; margin-top:20px; margin-right:40px; text-align:right "> &nbsp;&nbsp;<a class="btn btn-large btn-primary" href="#"  onClick="window.close();"><i class="icon-ok"></i>&nbsp;&nbsp;提交&nbsp;&nbsp; </a> &nbsp;<a class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();"><i class="icon-remove"></i>&nbsp;&nbsp;取消&nbsp;&nbsp;</a> </div>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog"  >
      <div class="modal-content"   style="width:852px;">
         <div class="modal-header" style="width:850px; background-image:url(../images/title_di.jpg); height:43px; padding-top:4px;margin:0;">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel" >
              新增建筑类型               
            </h4>
         </div>
         <div style="padding:0; width:850px;height:280px;">
            <iframe src="dj-info2.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
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
              新增楼栋用户信息               
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
      </div>
</div>
</div>

<script type="text/javascript">
$('input[id=lefile]').change(function() {
$('#photoCover').val($(this).val());
});
</script>

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
            '<a class="modify" data-toggle="modal"  href="#" title="修改">',
            '<i class="icon-download-alt icon-large" style="font-size:14px;color:#669900;"></i>',
            '</a >&nbsp;&nbsp;&nbsp;&nbsp;',
            // '<a class="remove" href="javascript:;" title="删除">',
            // '<i class="icon-trash" style="font-size:14px;color:#F0706D;"></i>',
            // '</a >'
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