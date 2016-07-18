<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>报警</title>

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
<div class="row">
  <div class="col-md-12" >
    <ul class="nav nav-tabs">
      <li class="active"><a href="#nav-tab-1" data-toggle="tab">报警记录</a></li>
      <li class=""><a href="#nav-tab-2" data-toggle="tab">预警记录</a></li>
      <li class=""><a href="#nav-tab-3" data-toggle="tab">预警设置</a></li>
    </ul> 
    <div class="tab-content" style="padding-top:30px; background:rgba(247,247,247,1); border-left:1px solid rgba(221,221,221,1);">
      <div class="tab-pane fade active in" id="nav-tab-1">
        <div class="right-padding col-md-12 ui-sortable ">   
          <div class="row"> 
            <div class="right-padding ui-sortable">         
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">快速查询：              
                <input type="text" class="form-control" id="name" tabindex="2" placeholder="">
                </span>
                <span class="input-group-addon">
                  <a class="btn btn-large btn-primary" href="#"  data-toggle="modal" data-target="#myModa"><i class="icon-plus"></i>&nbsp;&nbsp;查询&nbsp;&nbsp; </a>
                </span>
              </div>
            </div>
              <br>
            <table  id="table2" class="table-striped"   data-toggle="table" data-height="450"  data-url="/public/json/dd-data-basic.json"  data-page-size="13" data-page-list="[10,13,25,35,all]"  width="100%">
            <thead  class="thead" >
            <tr>        
             <th data-field="time" data-align="center"  data-sortable="true">时间</th>
              <th data-field="sb" data-align="center"  data-sortable="true">站点</th>
              <th data-field="sbbh" data-align="center"  data-sortable="true">参数</th>        
              <th data-field="gzyy" data-align="center"  data-sortable="true">报警原因</th>
            </tr>
            </thead>
            </table>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-tab-2">
        <div class="tab-pane fade active in" id="add">
          <div class="right-padding col-md-12 ui-sortable ">   
            <div class="row"> 
              <div class="right-padding ui-sortable">         
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">快速查询：              
                  <input type="text" class="form-control" id="name" tabindex="2" placeholder="">
                  </span>
                  <span class="input-group-addon">
                    <a class="btn btn-large btn-primary" href="#"  data-toggle="modal" data-target="#myModa"><i class="icon-plus"></i>&nbsp;&nbsp;查询&nbsp;&nbsp; </a>
                  </span>
                </div>
              </div>
                <br>
             <table  id="table2" class="table-striped" data-toggle="table" data-height="550"  data-url="/public/json/data-basic-bg-list.json" data-page-size="13" data-page-list="[10,13,25,35,all]"  width="100%">
              <thead  class="thead" >
              <tr>        
               <th data-field="time" data-align="center"  data-sortable="true">时间</th>
                <th data-field="sb" data-align="center"  data-sortable="true">站点</th>
                <th data-field="sbbh" data-align="center"  data-sortable="true">参数</th>        
                <th data-field="gzyy" data-align="center"  data-sortable="true">预警原因</th>
              </tr>
              </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-tab-3">
        <div class="tab-pane fade active in" id="add">
          <div class="right-padding col-md-12 ui-sortable ">   
            <div class="row"> 
              <div class="right-padding ui-sortable">         
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">快速查询：              
                  <input type="text" class="form-control" id="name" tabindex="2" placeholder="">
                  </span>
                  <span class="input-group-addon">
                    <a class="btn btn-large btn-primary" href="#"  data-toggle="modal" data-target="#myModa"><i class="icon-plus"></i>&nbsp;&nbsp;查询&nbsp;&nbsp; </a>
                  </span>
                </div>
              </div>
                <br>
                 <table id="table2"
                        class="table-striped"
                        data-height="450"                        
                        data-page-size="13" 
                        data-page-list="[10,13,25,35,all]"  
                        width="100%"
                        data-toggle="table"
                        data-pagination="true"
                        data-url="../files/assets/json/data1.json">
                      <thead>
                      <tr>
                        <th data-field="name" data-editable="true">时间</th>
                        <th data-field="price" data-editable="true">站点</th>
                        <th data-field="name" data-editable="true">参数</th>
                        <th data-field="price" data-editable="true">预警原因</th>
                      </tr>
                      </thead>
                  </table>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col-md-6" >
    <ul class="nav nav-tabs">
      <li class="active"><a href="#nav-tab-3" data-toggle="tab">基础变更</a></li>
      <li class=""><a href="#nav-tab-4" data-toggle="tab">高级变更</a></li>
    </ul>
    <div class="tab-content"  style="background:rgba(247,247,247,1); border-left:1px solid rgba(221,221,221,1);">
      <div class="tab-pane fade active in" id="nav-tab-3">
        <div class="right-padding col-md-12 ui-sortable">
          <div class="row"> 
            <div  class="col-md-12 modal-dialog">
              <div class="modal-content"   style="width:552px;">
                <div class="modal-header" style="width:550px; background-image:url(../images/title_di.jpg); height:43px; padding-top:4px;margin:0;">
                  <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">
                        &times;
                  </button>
                  <h4 class="modal-title" id="myModalLabel" >
                   变更前信息               
                  </h4>  
                </div>
                <div style="padding:0; width:550px;height:280px;">
                      <iframe src="bg-info.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
                </div> -->
               <!--  <div class="modal-footer" style="width:550px; height:43px;  background-image:url(../images/title2_di.jpg);">
                      <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
                         data-dismiss="modal">提交
                      </button>
                      <button type="button" class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();" >
                         变更
                      </button>
                </div> -->
             <!--  </div>
            </div>
            <div  class="col-md-12 modal-dialog"  style="margin-top:-30px;">
              <div class="modal-content"   style="width:552px;">
                <div style="padding:0; width:550px;height:280px;">
                  <iframe src="bg-info2.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
                </div>
                <div class="modal-footer" style="width:550px; height:43px;  background-image:url(../images/title2_di.jpg);">
                  <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
                     data-dismiss="modal">提交变更
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-tab-4">
        <div class="tab-pane fade active in" id="nav-tab-3">
         <div class="right-padding col-md-12 ui-sortable">
          <div class="row"> 
            <div  class="col-md-12 modal-dialog">
              <div class="modal-content"   style="width:552px;">
                <div class="modal-header" style="width:550px; background-image:url(../images/title_di.jpg); height:43px; padding-top:4px;margin:0;">
                  <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">
                        &times;
                  </button>
                  <h4 class="modal-title" id="myModalLabel" >
                   变更前信息               
                  </h4>  
                </div>
                <div style="padding:0; width:550px;height:280px;">
                      <iframe src="bg2-info.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
                </div> -->
               <!--  <div class="modal-footer" style="width:550px; height:43px;  background-image:url(../images/title2_di.jpg);">
                      <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
                         data-dismiss="modal">提交
                      </button>
                      <button type="button" class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();" >
                         变更
                      </button>
                </div> -->
            <!--   </div>
            </div>
            <div  class="col-md-12 modal-dialog"  style="margin-top:-30px;">
              <div class="modal-content"   style="width:552px;">
                <div style="padding:0; width:550px;height:280px;">
                  <iframe src="bg2-info2.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
                </div>
                <div class="modal-footer" style="width:550px; height:43px;  background-image:url(../images/title2_di.jpg);">
                  <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
                     data-dismiss="modal">提交变更
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div> 
  </div>-->
</div>

<!-- 
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog"  >
      <div class="modal-content"   style="width:852px;">
         <div class="modal-header" style="width:850px; background-image:url(../images/title_di.jpg); height:43px; padding-top:4px;margin:0;">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel" >
             用户基本信息               
            </h4>
         </div>
         <div style="padding:0; width:850px;height:280px;">
            <iframe src="dy-Info-List-info.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
     </div>
    <div class="modal-footer" style="width:850px; height:43px;  background-image:url(../images/title2_di.jpg);">
            <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
               data-dismiss="modal">提交
            </button>
            <button type="button" class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();" >
               变更
            </button>
    </div>
</div>
</div>
</div> -->
<!-- <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div>
      <div class="modal-content"   style="width:852px;">
         <div class="modal-header" style="width:850px; background-image:url(../images/title_di.jpg); height:43px; padding-top:4px;margin:0;">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel" >
              新增用户信息               
            </h4>
         </div>
         <div style="padding:0; width:850px;height:280px;">
            <iframe src="yh-Info-List-info.html" style="width:100%;height:100%;border:0; margin-top:0;"></iframe>
         </div>
 <div class="modal-footer" style="width:850px; height:43px;  background-image:url(../images/title2_di.jpg);">
  <button type="button"  class="btn btn-large btn-primary"  onClick="window.close();" 
  data-dismiss="modal">提交
  </button>
  <button type="button" class="btn btn-large btn-primary btn-warning" href="#" onClick="window.close();" >
  取消
  </button>
  </div>
      </div>
</div>
</div> -->
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
            '<a class="modify" data-toggle="modal" data-target="#myModal7 href="#" title="修改">',
            '<i class="icon-edit" style="font-size:14px;color:#71C971;"></i>',
            '</a >&nbsp;&nbsp;&nbsp;&nbsp;',
            '<a class="remove" href="javascript:;" title="删除">',
            '<i class="icon-trash" style="font-size:14px;color:#F0706D;"></i>',
            '</a >'
        ].join('');
    }
window.operateEvents = {
       /* 'click .modify': function (e, value, row, index) {
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
   window.showModalDialog("companyInfo.html","","dialogWidth:1000px; dialogHeight:350px;dialogLeft:400px; dialogTop:300px;  scroll:no;status:no") 
   } 
   
   $(function () { 
      $('#collapseFour').on('show.bs.collapse', function () {   // 执行一些动作...  在调用 show 方法后触发该事件。还有shown/hide/hidden.bs.collapse 等方法。
         alert('嘿，当您展开时会提示本警告');})
   });
</script>
</body>
</html>