<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{


if(($uname=="admin")&&($pass=="admin"))
{
?>
<script language="javascript">
alert("Login Successfully");
window.location.href="admin_home.php";
</script>
<?php

}
else
{
?>
<script language="javascript">
alert("Failed");
</script>
<?php
}

}?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<title>Question Paper Generation System</title>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bettering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript">
addEventListener("load", function () {
setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
window.scrollTo(0, 1);
}
</script>
<!-- // Meta Tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
<!--//fonts-->

<style type="text/css">
<!--
.style2 {color: #2E6290; font-weight: bold; }
.style3 {color: #FA8B37;
font-weight: bold;
}
-->
</style>
</head>

<body>
<!--Header-->
<div class="header">
<div class="top">
<div class="container">

<div class="col-md-9 top-left">

</div>
<div class="col-md-3 top-middle">

</div>

<div class="clearfix"></div>

</div>
</div>
<!--top-bar-w3layouts-->
<div class="top-bar-w3layouts">
<div class="container">
<nav class="navbar navbar-default">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<h1><a href="#">Question Paper Generation</a></h1>
</div>
<!-- navbar-header -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav navbar-right">
<li><a href="index.php">Home</a></li>
<li><a href="admin.php"  class="active">Admin</a></li>
<li><a href="staff_login.php">Staff</a></li>
<li><a href="student_login.php">Student</a></li>
</ul>

</div>



<div class="clearfix"> </div>
</nav>
</div>

</div>
<!--//top-bar-w3layouts-->
<!--Slider-->
<div class="banner">

</div>

<!-- //Modal1 -->
<!--//Slider-->
</div>
<!--//Header-->
<!-- gallery -->
<div class="gallery">
<div class="container">
<h3 class="title-txt"><span>a</span>dmin Login</h3>
<form name="form1" method="post" action="">
<table width="37%" height="115" border="0" align="center">
<tr>
<td width="47%" class="tdsh"><div align="center" class="style2">
<div align="right">User name </div>
</div></td>
<td width="6%" class="tdsh"><div align="center" class="style2">:</div></td>
<td width="47%" class="tdsh"><label>
<input name="uname" type="text" id="uname">
</label></td>
</tr>
<tr>
<td class="tdsh"><div align="center" class="style2">
<div align="right">Password</div>
</div></td>
<td class="tdsh"><div align="center" class="style2">:</div></td>
<td class="tdsh"><label>
<input name="pass" type="password" id="pass">
</label></td>
</tr>
<tr>
<td class="tdsh">&nbsp;</td>
<td colspan="2" class="tdsh"><label>
<input name="btn" type="submit" class="btnclr" id="btn" value="Submit">
<span class="style3"> </span></label></td>
</tr>
</table>
</form>
<p class="title-txt">&nbsp;</p>
</div>
</div>
<!-- //gallery -->

<!-- footer -->
<p class="copyright">   All Rights Reserved | Design by Admin</p>
<!-- //footer -->
<!-- Required Scripts -->
<!-- Common Js -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<!--// Common Js -->
<!--search-bar-agileits-->
<script src="js/main.js"></script>
<!--//search-bar-agileits-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
$(".scroll").click(function (event) {
event.preventDefault();
$('html,body').animate({
scrollTop: $(this.hash).offset().top
}, 1000);
});
});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
<script type="text/javascript">
$(document).ready(function () {
/*
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear'
};
*/
$().UItoTop({
easingType: 'easeOutQuart'
});
});
</script>
<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- swipe box js -->
<script src="js/jquery.adipoli.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
$('.row2').adipoli({
'startEffect': 'overlay',
'hoverEffect': 'sliceDown'
});
});
</script>
<script src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
jQuery(function ($) {
$(".swipebox").swipebox();
});
</script>
<!-- //swipe box js -->

<!-- Bootstrap Js -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--// Bootstrap Js -->

<!--// Required Scripts -->
</body>

</html>
