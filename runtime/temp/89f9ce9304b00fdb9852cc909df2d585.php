<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\WebRoot\PersonalCommunity\public/../application/chat\view\index\login.html";i:1493997614;}*/ ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>聊天室登录页</title>
<link href="/static/chat/css/login.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="wrap">
<!-- strat-contact-form -->	
<div class="contact-form">
<!-- start-form -->
	<form class="contact_form" action="/verifyUserInfo.html" method="post" name="contact_form">
		<h1>Login Into Your Account</h1>
	    <ul>
	        <li>
	            <input type="text" class="textbox1" name="username" placeholder="xxxxx@xxx.com" required />
	            <span class="form_hint">输入你的账号</span>
	             <p><img src="/static/chat/img/contact.png" alt=""></p>
	        </li>
	        <li>
	            <input type="password" name="password" class="textbox2" placeholder="password">
	            <p><img src="/static/chat/img/lock.png" alt=""></p>
	        </li>
         </ul>
       	 	<input type="submit" name="Sign In" value="登录"/>
			<div class="clear"></div>	
			<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>记住密码</label>
		<div class="clear"></div>	
	</form>
<!-- end-form -->
<!-- start-account -->
<div class="account">
	<h2><a href="/register.html">还没有账号? 立即注册!</a></h2>
    <div class="span"><a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=101399466&redirect_uri=http://www.joker1996.com/tencent_login.html" target="_blank"><img src="/static/chat/img/qq.png" alt=""/><i>QQ登录</i><div class="clear"></div></a></div>	
    <div class="span1"><a href="http://openapi.baidu.com/oauth/2.0/authorize?response_type=code&client_id=XnBrU4vhuxi9K6MWwcQBw6Uq&redirect_uri=http://www.joker1996.com/baidu_login.html" target="_blank"><img src="/static/chat/img/baidu.png" alt=""/><i>百度登录</i><div class="clear"></div></a></div>
    <div class="span2"><a href="https://api.weibo.com/oauth2/authorize?client_id=2975043359&response_type=code&redirect_uri=http://www.joker1996.com/sina_login.html" target="_blank"><img src="/static/chat/img/weibo.png" alt=""/><i>微博登录</i><div class="clear"></div></a></div>
</div>	
<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
<div class="footer">
	<!-- <p>Template by <a href="http://w3layouts.com">w3layouts</a></p> -->
	<p>Copyright © 2014-2017 <a href='http://www.joker1996.com'>http://www.joker1996.com</a>. All rights reserved.</p>
</div>
</div>
</body>
</html>