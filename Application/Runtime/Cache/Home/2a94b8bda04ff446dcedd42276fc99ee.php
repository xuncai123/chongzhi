<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN">
<HTML>
<head>
<TITLE>管理中心 V1.0</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf8">
<META http-equiv=Pragma content=no-cache>
<META http-equiv=Cache-Control content=no-cache>
<META http-equiv=Expires content=-1000>
<LINK href="<?php echo (ROOT); ?>/css/admin.css" type="text/css" rel="stylesheet" >
</head>
<frameset bordercolor="red" rows="60, *"  border="5">
	<frame name="header" src="http://localhost/cz/index.php/Home/Index/header" >
	<frameset cols="170, *" border="5">
		<frame name="menu" src="http://localhost/cz/index.php/Home/Index/menu" target="main"/>
		<frame name="main" src="http://localhost/cz/index.php/Home/Index/main" />
	</frameset>
</frameset>

</HTML>