 
<?php
#include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{

$_SESSION['degree']=$degree; 
$_SESSION['dept']=$dept; 
$_SESSION['year']=$year; 
$_SESSION['semester']=$semester; 
$_SESSION['subjectcode']=$subjectcode; 
$_SESSION['subjectname']=$subjectname; 
$_SESSION['unit']=$unit; 
$_SESSION['select']=$select; 
if($select=="0.5")
{
header("Location:staff_add_question_05.php");

}
else if($select=="2")
{
header("Location:staff_add_question_2.php");


}
else if($select=="5")
{
header("Location:staff_add_question_5.php");

}
else if($select=="10")
{
header("Location:staff_add_question_10.php");

}


}


?>

<html lang="en">
<head>
<title>Course - Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Question</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="staff_home.php">home</a></li>
						<li class="main_nav_item"><a href="staff_add_question.php">Add Question</a></li>
 						<li class="main_nav_item"><a href="staff_generate.php">Generate</a></li>
						<li class="main_nav_item"><a href="index.php">Logout</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+43 4566 7788 2457</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="#">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
 
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Staff</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Add Question </h1>
						<form name="form1" method="post" action="">
						<table width="100%" border="0" align="center">
                            <tr>
                              <td width="31%">&nbsp;</td>
                              <td width="69%"><table width="393" height="336" border="0" align="center">
                                <tr>
                                  <td width="171" height="39"><div align="left">Degree</div></td>
                                  <td width="171"><label>
                                    <input name="degree" type="text" id="degree" required="">
                                  </label></td>
                                </tr>
                                <tr>
                                  <td height="39"><div align="left">Department</div></td>
                                  <td><label>
                                    <input name="dept" type="text" id="dept" required="">
                                  </label></td>
                                </tr>
                                <tr>
                                  <td height="38"><div align="left">Year</div></td>
                                  <td><label>
                                    <input name="year" type="text" id="year" required="">
                                  </label></td>
                                </tr>
                                <tr>
                                  <td height="40"><div align="left">Semester </div></td>
                                  <td><label>
                                    <input name="semester" type="text" id="semester" required="">
                                  </label></td>
                                </tr>
                                <tr>
                                  <td height="40"><div align="left">Subject Code </div></td>
                                  <td><label>
                                    <input name="subjectcode" type="text" id="subjectcode" required="">
                                  </label></td>
                                </tr>
                                <tr>
                                  <td height="41"><div align="left">Subject Name </div></td>
                                  <td><input name="subjectname" type="text" id="subjectname" required=""></td>
                                </tr>
                                <tr>
                                  <td height="42"><div align="left">Unit</div></td>
                                  <td><input name="unit" type="text" id="unit" required=""></td>
                                </tr>
                                <tr>
                                  <td height="45"><div align="left">Question Type (Mark) </div></td>
                                  <td><label>
                                    <select name="select">
                                      <option value="0.5">0.5</option>
                                      <option value="2">2</option>
                                      <option value="5">5</option>
                                      <option value="10">10</option>
                                    </select>
                                  </label></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;	</td>
                                  <td><label>
                                    <input name="btn" type="submit" id="btn" value="Submit">
                                  </label></td>
                                </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </table>
                      </form>
						<p>&nbsp;</p>
					</div>
				</div>
			</div>

			 
		</div>		
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

		 

			<!-- Footer Content -->

		 

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by Admin
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>