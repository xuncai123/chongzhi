<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<link href="<?php echo (ROOT); ?>/css/lyz.calendar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo (ROOT); ?>/js/jquery-1.5.1.js"></script>
<script src="<?php echo (ROOT); ?>/js/lyz.calendar.min.js" type="text/javascript"></script>
 <script>
    $(function () {
        $("#txtBeginDate").calendar();
        $("#txtEndDate").calendar();
    });
</script>  
<body>
请选择导出日期:
<br/>
<form action="<?php echo U('Order/output');?>" method='post'>
<input id="txtBeginDate" name='start' style="width:170px;padding:7px 10px;border:1px solid #ccc;margin-right:10px;"/>
--
<input id="txtEndDate" name='close' style="width:170px;padding:7px 10px;border:1px solid #ccc;" />
<input type="submit" value='导出'/>
</form>
</body>
</html>