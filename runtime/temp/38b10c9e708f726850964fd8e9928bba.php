<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\xampp\htdocs\lgyc\public/../application/index\view\index\change_passwd.html";i:1489226070;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>密码修改</title>
<!-- Custom Theme files -->
<link href="PUBLIC_INDEX/css/change_passwd_style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="text/javascript" src="PUBLIC_INDEX/js/jquery-1.8.3.min.js"></script>
<!--Google Fonts-->
<!--Google Fonts-->
    <script>
        function check(form) {
            var p1 = form.password;
            var p2 = form.check_passwd;
            console.log(p1.value);
            console.log(p2.value);
            if (p1.value != p2.value) {
                p2.oninvalid();
                return false;
            }
            return true;
        }
        function load() {
            var p2 = document.forms["myform"].check_passwd;
            p2.oninvalid = function() {
                this.setCustomValidity("两次密码不一致，请重新输入");
            }
            p2.oninput = function() {
                this.setCustomValidity("");
            }
        }
    </script>
</head>
<body onload="load()">
<!--header start here-->
	<div class="login">
		 <div class="login-main">
		 		<div class="login-top">
		 		<form name="myform" action="INDEX/change_passwd_action" method="post" onsubmit="return check(this);">
		 			<img src="PUBLIC_INDEX/images/head-img.png" alt=""/>
		 			<h1>密码修改</h1>
		 			<input type="text" class="smalt_change" name="username" placeholder="用户名" required="true" style="background: url(PUBLIC_INDEX/images/email.png)no-repeat 7px 17px;">
		 			<input type="text" name="old_passwd" placeholder="原密码" required="true">
		 			<input type="password" name="password" placeholder="新密码" required="true">
		 			<input type="password" id="check_passwd" placeholder="确认密码" required="true">
		 			<div class="login-bottom">
			 			<div class="clear"> </div>
		 			</div>
		 			<input type="submit" value="确认" />
		 		</form>
		 		</div>
		 	</div>
  </div>
<!--header end here-->
<div style="text-align:center;">
<p>来源:<a href="#">少数民族学生信息系统</a></p>
</div>
</body>
</html>