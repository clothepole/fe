<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>项目运行情况</title>

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
  <div class=" col-md-6 ui-sortable " style="padding-left:30px;">
    <div class="row">      
      <table id="table" 
      data-striped="true"  
      data-click-to-select="true"
      data-toggle="table" 
      data-height="420"        
      data-url="dd-data-basic.json" 
      >
        <thead  class="thead" >
          <tr>
           <th></th>
        <!--    <th data-align="center" data-footer-formatter="totalTextFormatter" data-formatter="operateFormatter" data-events="operateEvents">  操作</th> -->
           <th data-field="jcsj" data-align="center"  data-sortable="true">监测数据</th>
           <th data-field="zr" >今日</th>
           <th data-field="jr" >昨日</th> 
          </tr>
        </thead>
      </table>
    </div>
  </div>
  <div class="col-md-6 ui-sortable" style="padding-left:45px;">
   <div class="row container-fluid"> 
    <iframe  name="main"  marginheight="0" height="200px" frameborder="0" marginheight="" src="/public/examples/pie-donut/projectDonutPie0.htm" width="100%"></iframe>
    </div>
    <div class="row container-fluid" style="padding:15px;"> 
     <iframe  name="main" marginheight="0" height="200px" frameborder="0" src="/public/examples/line-basic/workQk0.htm" width="100%"></iframe>
    </div>   
  </div>
</div>
<div class="row">
  <div class=" col-md-12 ui-sortable " >
      <table id="table" 
      data-striped="true"  
      
      data-toggle="table" 
      data-height="250"  
      data-show-footer="true"
      data-url="/public/json/dd-data-basic.json"  
      data-pagination="true"
      data-page-size="15"
     >
        <thead  class="thead" >
          <tr>
           <th data-field="state"></th>
           <th data-field="glmc" >锅炉房名称</th>
           <th data-field="gsyl" >总供水压力</th> 
           <th data-field="hsyl" >总回水压力</th> 
           <th data-field="gswd" >总供水温度</th> 
           <th data-field="hswd" >总回水温度</th> 
           <th data-field="gsll" >总供水瞬时流量</th> 
           <th data-field="grl" >总供瞬时热量</th> 
           <th data-field="grlj" >总供热量累计</th>            
           <th data-field="hql" >瞬时耗气量</th> 
          </tr>
        </thead>
      </table>
  </div>
</div>
<div>
  <div class=" col-md-12 ui-sortable " srtyle="background:#cccc" align="center"><h1 style="color:#94baf9;">调度大屏显示模式</h1></div>
</div>
<script type="text/javascript">
function totalTextFormatter(data) {
        return 'Total';
    }
    function totalFormatter(data) {
        
        return data.length;
    }
    function sumFormatter(data) {
        field = this.field;
        var total_sum = data.reduce(function(sum, row) {
            return (sum) + (row[field] || 0);
        }, 0);
        return total_sum;
    }
        // 图表
        function detailFormatter(index, row, $detail) {
            var pID = row.id;
            buildTable($detail.html('<table></table>').find('table'), pID);
        }
        function buildTable($ext, id) {
            $ext.bootstrapTable({
                url: 'data-tree-table-son-'+id+'.json',
                showHeader: false,
                clickToSelect:true,
                columns: [
                    {
                        field: 'state',
                        checkbox: true

                    },{
                        field: 'name',
                    }
                ]
            });
        }           
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
            '<a class="modify" data-toggle="modal" data-target="#myModal7 href="#" title="修改">',
            '<i class="icon-edit icon-large" style="font-size:14px;color:#71C971;"></i>',
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