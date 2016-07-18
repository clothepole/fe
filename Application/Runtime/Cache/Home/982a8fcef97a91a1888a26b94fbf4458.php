<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>培训个人信息系统数据中心</title>

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
<script type="text/javascript">
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
</script>
</head>

  <table>
    <tr>
        <td class="td1" width="15%">
      听课证号：
        </td>
      <td class="td2" id="stl3" width="30%" align="left"><input type="text" class="form-control" id="zh1" tabindex="1" placeholder=""></td>
        <td class="td1" width="20%">
      姓名：
        </td>
      <td class="td2" id="stl4" width="35%"><input type="text" class="form-control" id="name" tabindex="2" placeholder=""></td>
    </tr>
    <tr>
        <td class="td1" >
      性别：
        </td>
      <td class="td2" id="stl5" ><input type="radio" tabindex="3">
        男&nbsp;&nbsp;<input type="radio">女</td>
      <td  class="td1">类别：</td>
      <td class="td2"><form name="form" id="form">
          <select name="jumpMenu" id="jumpMenu" style="width:100%; height:40px;">
            <option>经营单位1</option>
            <option>经营单位2</option>
          </select>
        </form></td>
    </tr>
    <tr>
      <td  class="td1" >培训证号：</td>
      <td  class="td2" id="stl7"><input type="text"   class="form-control" id="zh6" tabindex="4" placeholder=""></td>
      <td  class="td1">身份证号：</td>
      <td  class="td2" id="stl8"><input type="text"  class="form-control" id="zh2" tabindex="5" placeholder=""></td>
    </tr>
    <tr>
      <td  class="td1">联系电话：</td>
      <td class="td2" id="stl9"><input type="text" class="form-control" id="zh3" tabindex="6" placeholder=""></td>
      <td  class="td1">发证日期：</td>
      <td class="td2" id="stl10"><input type="text" class="form-control" id="zh4" tabindex="7" placeholder=""></td>
    </tr>
    <tr>
      <td  class="td1">发证单位：</td>
      <td class="td2" colspan="3"><input type="text" class="form-control" id="zh5"  tabindex="8"placeholder=""></td>
    </tr>
  </table>

<!--<div style="　height:45px; margin-right:40px; text-align:right "> &nbsp;&nbsp;<a class="btn btn-large btn-primary" href="#"  onClick="window.close();"><i class="icon-ok"></i>&nbsp;&nbsp;提交&nbsp;&nbsp; </a> &nbsp;<a class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();"><i class="icon-remove"></i>&nbsp;&nbsp;取消&nbsp;&nbsp;</a> </div>
--><script>
		function submitForm(){
			$('#ff').form('submit');
		}
		function clearForm(){
			$('#ff').form('clear');
		}
	</script>
</body></html>
<script type="text/javascript">
   $(function () { 
      $('#collapseFour').on('show.bs.collapse', function () {   // 执行一些动作...  在调用 show 方法后触发该事件。还有shown/hide/hidden.bs.collapse 等方法。
         alert('嘿，当您展开时会提示本警告');})
   });
</script>
</body>
</html>