<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>系统总后台（充值订单）</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  </head>
  <link href="<?php echo (ROOT); ?>/css/lyz.calendar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo (ROOT); ?>/js/jquery-1.5.1.js"></script>
<script src="<?php echo (ROOT); ?>/js/lyz.calendar.min.js" type="text/javascript"></script>
  <script>
    $(function () {
        $("#txtBeginDate").calendar({
            controlId: "divDate",                                 // 弹出的日期控件ID，默认: $(this).attr("id") + "Calendar"
            speed: 200,                                           // 三种预定速度之一的字符串("slow", "normal", or "fast")或表示动画时长的毫秒数值(如：1000),默认：200
            complement: true,                                     // 是否显示日期或年空白处的前后月的补充,默认：true
            readonly: true,                                       // 目标对象是否设为只读，默认：true
            upperLimit: new Date(),                               // 日期上限，默认：NaN(不限制)
            lowerLimit: new Date("2011/01/01"),                   // 日期下限，默认：NaN(不限制)
            callback: function () {                               // 点击选择日期后的回调函数
                alert("您选择的日期是：" + $("#txtBeginDate").val());
            }
        });
        $("#txtEndDate").calendar();
    });
    function output(){  
    	if(confirm("您确定要导出吗？？？")){
    		window.open("<?php echo U('Order/tip');?>");	
    	}   	 
    }
     function orderbytime(){
    	window.location="/cz/index.php/Home/Order/agent/start/"+$("#txtBeginDate").val()+"/close/"+$("#txtEndDate").val();
   		alert();
     } 
</script>
  <body>
  	<center><h2>代理商订单</h2></center>
	<div align='center'>
		<div><input type='button' value="订单导出" onclick='output()'/></div>
	<span >
	手机查询：<input type='text' name='cellphone' value='' placeholder='请输入充值的手机号'>
	<input type='button' value='查询'/>
	||
	订单查询：<input type='text' name='order' value='' placeholder='请输入订单号'>
	<input type='button' value='查询'/>
	||
	用户查询：<input type='text' name='cellphone' value='' placeholder='请输入用户的手机号'>
	<input type='button' value='查询'/>
	||
	筛选日期:
  <input id="txtBeginDate" style="width:170px;padding:7px 10px;border:1px solid #ccc;margin-right:10px;"/>
  --
  <input id="txtEndDate" style="width:170px;padding:7px 10px;border:1px solid #ccc;" />  
<input type='button' value='查询' onclick='orderbytime()'/>
	</span>
		<table border='1' width="80%"  align="center">
			<tr align="center" style="background-color:#ccc">
				<td>创建时间</td>
				<td>订单号</td>
				<td>用户ID</td>
				<td>手机号</td>
				<td>到账时间</td>
				<td>运营商</td>
				<td>是否导出</td>
				<td>公司(门店)名称</td>
				<td>充值金额</td>
				<td>支付金额</td>
				<td>类型</td>
				<td>支付方式</td>
				<td>返利</td>
				<td>状态</td>
				<td>操作</td>
			</tr>
			<tr align="center" style='background-color:#abc'>
				<td>2016-10-17</td>
				<td>201610171637</td>
				<td>15818518979</td>
				<td>18271632203</td>
				<td>24小时内</td>
				<td>移动</td>
				<td>未导出</td>
				<td>杭州玛讯技术有限公司</td>
				<td>50</td>
				<td>48.5</td>
				<td>话费</td>
				<td>支付宝</td>
				<td>0.2</td>
				<td>待受理</td>
				<td>已充值&nbsp;充值失败</td>
			</tr>
			<tr align="center">
				<td>2016-10-17</td>
				<td>201610171637</td>
				<td>15818518979</td>
				<td>18271632203</td>
				<td>24小时内</td>
				<td>移动</td>
				<td>未导出</td>
				<td>衢州宝讯技术有限公司</td>
				<td>50</td>
				<td>48.5</td>
				<td>流量</td>
				<td>支付宝</td>
				<td>0.3</td>
				<td>待受理</td>
				<td>已充值&nbsp;充值失败</td>
			</tr>
		</table>
		<div align='center'>[1]&nbsp;[2]&nbsp;[3]&nbsp;[4]&nbsp;[5]</div>
	</div>
</body>
</html>