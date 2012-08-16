<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo L('phpcms_logon')?></title>
<link href="<?=BS_PATH?>/css/bootstrap.css" rel="stylesheet">
<link href="<?=BS_PATH?>/css/docs.css" rel="stylesheet">
<link href="<?=BS_PATH?>/css/bootstrap-responsive.css" rel="stylesheet">


<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>

<body onload="javascript:document.myform.username.focus();">

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
          <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a href="#" class="brand">Project name</a>
          <div class="btn-group pull-right">
            <a href="#" data-toggle="dropdown" class="btn dropdown-toggle">
              <i class="icon-user"></i> Username
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li class="divider"></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div id="login_bg" class="container" style="padding:90px;">
    <div class="login_iptbox">
    <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
        <label><?php echo L('username')?>：      <input name="username" type="text" class="ipt" value="" /> </label>
        <label>　<?php echo L('password')?>：    <input name="password" type="password" class="ipt" value="" /></label>      
        <label><?php echo L('security_code')?>： <input name="code" type="text" class="ipt ipt_reg" onfocus="document.getElementById('yzm').style.display='block'" /></label> 
        <div id="yzm" class="yzm"><?php echo form::checkcode('code_img')?>
        <a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);"><?php echo L('click_change_validate')?></a></div>
        <input name="dosubmit" value="登 录" type="submit" class="btn btn-primary" />
     </form>
    </div>
    <div class="cr"><?php echo L("copyright")?></div>
</div>
</body>
</html>