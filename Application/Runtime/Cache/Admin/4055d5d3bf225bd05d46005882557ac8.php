<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单首页</title>
    <link rel="stylesheet" href="/10.22/Public/admin/css/main.css">
    <style>
    	.navtop .logobox .logo {
		  width: 65px;
		  height: 65px;
		  background: url("/10.22/Public/admin/img/logo.png");
		  background-size: cover;
}
	a{
		color:#ccc;
		font-family:微软雅黑;
		text-decoration:none;
	}
	a:hover{
		color:#993300;
		text-decoration:underline;
	}
    </style>
    <script src="/10.22/Public/admin/js/jquery-1.8.3.min.js"></script>
</head>
<body>

<!--导航-->
    <header>
<!-- 公共头文件 -->
    <div class="w-1204">
        <div class="navtop clear">
            <div class="logobox fl">
                <div class="logo fl"></div>
                <div class="name fl">9158充值</div>
            </div>
            <div class="adminbox fl">
                <span>欢迎您，杭州天缘网络技术有限公司</span>
                <a href="<?php echo U('Login/logout');?>">退出</a>
            </div>
        </div>
        <div class="nav clear">
            <a href="<?php echo U('Order/user_order');?>" class="active fl">普通用户订单</a>
            <a href="<?php echo U('Order/agent_order');?>" class="fl">代理商订单</a>
            <a href="user-management.html" class=" fl">用户管理</a>
            <a href="setup.html" class=" fl">充值设置</a>
            <a href="account-management.html" class="fl">账户管理</a>
            <a href="statistics.html" class=" fl">统计报表</a>
        </div>
    </div>
 </header>
    <!--弹窗-->
    <div class="alert-box">
    <div class="alert-header">请选择导出日期<span class="close-btn">×</span></div>
    <div class="alert-body">
    <form action="<?php echo U('Order/user_output');?>" method='get'>
        <input type="date" name='start' value="请选择起始日期"><span>—</span><input type="date" name='close' value="请选择结束日期">
        <div class="yes-btn" ><input type="submit"  value="确定"/></div>
    </form>
    </div>
</div>
    <div class="w-1204 mainbox">       
        <div class="sortbox">
        <form action="<?php echo U('Order/user_order');?>" method='get'>
            <label>手机查询: </label><input type='text' name='tel'  value='<?php echo ($get["tel"]); ?>' placeholder='请输入充值的手机号'>
            <label>订单查询: </label><input type='text' name='orderid'  value='<?php echo ($get["orderid"]); ?>' placeholder='请输入订单号'>
            <label>用户查询: </label><input type='text' name='uid'  value='<?php echo ($get["uid"]); ?>' placeholder='请输入用户的手机号'>
            <lable>筛选日期 :</lable>
            <input type="date" name='start' value="<?php echo ($get["start"]); ?>"><span>—</span><input type="date" name='close' value="<?php echo ($get["close"]); ?>">
            <input type="submit" style="background:#c63636" value="查询"/>
         </form>
        </div>
        <hr>
        <div class="output-btn fr">导出订单</div>
        <table class="order-table">
            <tr >
                <th>创建时间</th><th>订单号</th>
                <th>用户ID</th><th>手机号码</th>
                <th>到帐时间</th><th>运营商</th>
                <th>是否导出</th><th>充值金额</th>
                <th>类型</th><th>支付金额</th>
                <th>支付方式</th><th>状态</th>
                <th class="orange">操作</th>
            </tr>
            <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr >
                <td><?php echo (date('Y-m-d H:s:i',$v["create_time"])); ?></td><td><?php echo ($v["orderid"]); ?></td>
                <td><?php echo ($v["uid"]); ?></td><td><?php echo ($v["tel"]); ?></td>
                <td><?php echo ($v["arrival"]); ?></td><td><?php echo ($v["operator"]); ?></td>
                <td><?php echo ($v["export"]); ?></td><td><?php echo ($v["recharge"]); ?>元</td>
                <td><?php echo ($v["genre"]); ?></td><td><?php echo ($v["state"]); ?>元</td>
                <td><?php echo ($v["mode"]); ?></td><td>待受理</td>
                <td class="orange">已充值/充值失败</td>
            </tr><?php endforeach; endif; ?>
           
        </table>
        <div class="pages"><?php echo ($pagestr); ?></div>
       <h1><?php echo W('Common/test');?></h1>
    </div>
    <script src="/10.22/Public/admin/js/main.js"></script>
	<style>
		.pages{
			width:100%;
			text-align:right;
			padding:10px 0;
			clear:both;
		}
		.page a,.pages .current{
			font-size:12px;
			font-family:Arial;
			margin:0 2px;
		}
		.pages a,.pages .current{
			border:1px solid #5FA623;
			background:#fff;
			padding:2px 6px;
			text-decoration:none
		}
		.pages .current,.pages a:hover{
			background:#7AB63F;
			color:#fff;
		}
	</style>
</body>
</html>