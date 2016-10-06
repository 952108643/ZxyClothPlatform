<?php /* Smarty version Smarty-3.1.6, created on 2016-08-01 20:04:31
         compiled from "E:/demo/ugctest/Home/View\Common\header.html" */ ?>
<?php /*%%SmartyHeaderCode:14611579f0c6503f6f5-27993329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca23934a8187f16e84b10f4187c7cc1bece9cda1' => 
    array (
      0 => 'E:/demo/ugctest/Home/View\\Common\\header.html',
      1 => 1470053064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14611579f0c6503f6f5-27993329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_579f0c6509cfa',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579f0c6509cfa')) {function content_579f0c6509cfa($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class=" ieundefined">
    <head>
    
    <meta property="qc:admins" content="2234641217663500763757" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
    <meta http-equiv="Content-Language" content="zh-cn"></meta>
    <meta name="keywords" content=""></meta>
    <meta name="description" content=""></meta>
    <meta name="viewport" content="width=1260"></meta>
   
    <title>V客</title>
    <link rel="shortcut icon" href="" type="image/x-icon"></link>
    <link rel="icon" href="<?php echo @__ROOT__;?>
/Public/images/favicon.ico" type="image/x-icon"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/m1.css"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/bundle.css"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/add.css"></link>
    <script language="javascript" type="text/javascript" async="" src="<?php echo @__ROOT__;?>
/Public/js/dc.js"></script>
	<script language="javascript" type="text/javascript"> if (top.location != location) top.location.href = location.href;</script>
    <script language="javascript" type="text/javascript" src="<?php echo @__ROOT__;?>
/Public/LativJS.js"></script>

    <!--[if !IE]>
    <!--><script>if (/*@cc_on!@*/false) { document.documentElement.className += ' ie10'; } if (/*@cc_on!@*/true) { document.documentElement.className += ' ie' + document.documentMode; }</script>
    <!--<![endif]-->
    <!--[if lte IE 9]>
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/ie9.css" />
    <![endif]-->
    <!--[if lte IE 8]>
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/ie8.css" />
    <![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/ie7.css" />
    <![endif]-->
    <!--[if IE 6]>
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/ie6.css" />
    <script type="text/javascript" src="<?php echo @__ROOT__;?>
/Public/js/ie6.js"></script>
    <![endif]-->
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/StaticPage.css"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo @__ROOT__;?>
/Public/css/jquery.bxslider.css"></link>
    <script src="<?php echo @__ROOT__;?>
/Public/js/jquery.processshow.js" type="text/javascript"></script>
    <script src="<?php echo @__ROOT__;?>
/Public/js/jquery.animateNumber.js" type="text/javascript"></script>
    <script src="<?php echo @__ROOT__;?>
/Public/js/jquery.bxslider.js" type="text/javascript"></script>
    <script src="<?php echo @__ROOT__;?>
/Public/js/jquery.lazyload.js" type="text/javascript"></script>
	<script type="text/javascript">
	var timeout         = 500;
	var closetimer		= 0;
	var ddmenuitem      = 0;
	
	// open hidden layer
	function mopen(id)
	{	
		// cancel close timer
		mcancelclosetime();
	
		// close old layer
		if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
	
		// get new layer and show it
		ddmenuitem = document.getElementById(id);
		ddmenuitem.style.visibility = 'visible';	
	}
	
	// close showed layer
	function mclose()
	{
		if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
	}
	
	// go close timer
	function mclosetime()
	{
		closetimer = window.setTimeout(mclose, timeout);
	}
	
	// cancel close timer
	function mcancelclosetime()
	{
	 document.getElementById("m1").style.display="block";
		if(closetimer)
		{
			window.clearTimeout(closetimer);
			closetimer = null;
		}
	}
	
	// close layer when click-out
	//document.onclick = mclose; 	

</script>
<!-- <<?php ?>?php }?<?php ?>> -->

<!-- </head> -->
<body>

<div id="wrap" class="container_48"> 
<!-- begin header -->
    <div id="wrapper" class="wrapperTW">
    <div id="navWrapper">
    <a href="/" id="logoUrl"> <img width="80" height="80" src="<?php echo @__ROOT__;?>
/Public/images/logo-2011.png" alt="vke" id="navLogo"/></a>
        <div id="navUtilities">
        <!-- 
        <div id="navShai">
            <a href="<<?php ?>?php echo U('user/permission')?<?php ?>>"  onclick="checkpermiss()" target="_blank"><img src="<?php echo @__ROOT__;?>
/Public/images/shai.png"  style="width:72px; height:24px; border:none;"/></a>
        </div>
        <div id="navSearch">
            <span id="search" class="grid_9 alpha">
              <form action="#" method="post" autocomplete="off">
                <input id="keyWord" maxlength="50" name="keyWord" size="13" type="text" value="搜索" class="inputborder" onfocus="$(this).val('')" onBlur="$(this).val('搜索')"/>
                <input type="submit" class="search_btn" value=""/>
              </form>
            </span>
        </div>
        -->
      </div>
      <ul id="nav">
        <li><a rel="新设计" href="<?php echo @__MODULE__;?>
/presell/">新设计</a></li>
        <li class="navDot"></li>
        
		<!--
        <li><a rel="限量预售" href="<<?php ?>?php echo __ROOT__?<?php ?>>/limited/" <<?php ?>?php if($current_module=='limited'){ echo 'class="navSel"';}?<?php ?>>>限量预售</a></li>
        <li class="navDot"></li>
		
		<li><a rel="会员选款" href="<<?php ?>?php echo __ROOT__?<?php ?>>/newest/" <<?php ?>?php if($current_module=='newest'){ echo 'class="navSel"';}?<?php ?>>>会员选款</a></li>
        <li class="navDot"></li>
       -->
		<li><a rel="看搭配" href="<?php echo @__MODULE__;?>
/pair/pairrank/en/1">看搭配</a></li>
         <li class="navDot"></li> 		
		<li><a rel="V客活动" href="<?php echo @__MODULE__;?>
/activities/">选模特</a></li>
		<li class="navDot"></li>
		<li><a rel="V客活动" href="<?php echo @__MODULE__;?>
/activities/">抢玩意</a></li>
		<li class="navDot"></li>
        <li><a rel="V客活动" href="<?php echo @__MODULE__;?>
/activities/">知衣圈</a></li>
		<li class="navDot"></li>
		
        <li><a href="<?php echo @__MODULE__;?>
/hot/index/h/1"> </a></li>
		<li><a href="<?php echo @__MODULE__;?>
/hot/index/h/2"> </a></li>
        <li class="navDot"></li>
		<li><a href="<?php echo @__MODULE__;?>
/hot/index/h/3"> </a></li>
		<!--
		<li class="navDot"></li>
		<li><a rel="时尚论坛" href="<<?php ?>?php echo __ROOT__?<?php ?>>/bbs/" <<?php ?>?php if($current_module=='bbs'){ echo 'class="navSel"';}?<?php ?>>>时尚论坛</a></li>
		-->
	  </ul>
      <script type="text/javascript">
			//最后三个菜单项要从后台获取
			$.post(
				"<<?php ?>?php echo U('hot/init_menu')?<?php ?>>", 
		   		function(data){
			   		$("#nav li:eq(6) a").attr("rel",data['hot1']).html(data['hot1']);
			   		$("#nav li:eq(8) a").attr("rel",data['hot2']).html(data['hot2']);
			   		$("#nav li:eq(10) a").attr("rel",data['hot3']).html(data['hot3']);
			    }, 
				"json");
      </script>
      <div id="head">
        <ul class="topnav omega sddm">
              <li class="epaper">
               <a id="login_link" class="fancyLogin" href="">会员登入</a>
               <a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()"></a><span style="color:#999999"> ∨客</span>
				<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
				  <a href="">个人中心</a>
				  <a href="">退出</a>
				</div>
			  <<?php ?>?php }?<?php ?>>	  
			  </li>
              <li class="member"><span id="stateByLogin" class="login"><a class="fancyEpaper" href="">免费注册</a> </span> </li>
              <li id="cart">
             <a class="fancyLogin" href=""><span id="tradeCount1">
             </span>个商品</a>
              <a class="" href=""><span id="tradeCount1"></span>个商品</a>
              </li>
			  <script type="text/javascript">
				    $(function() {
				        registerLoginFancy();
				        registerEpaperFancy();
				    });
			  </script>
        </ul>
        <div class="clear"> </div>
     </div>
  </div>
<div id="content" class="container_48 sty12"/>

<?php }} ?>