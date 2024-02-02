<?php
include("dbconnect.php");
session_start();
extract($_POST);

$degree=$_SESSION['degree']; 
$dept=$_SESSION['dept']; 
$year=$_SESSION['year']; 
$semester=$_SESSION['semester']; 
$subjectcode=$_SESSION['subjectcode']; 
$subjectname=$_SESSION['subjectname']; 


?>


<table width="100%" border="0">
  <tr>
    <td width="16%">&nbsp;</td>
    <td colspan="6"><h1 align="center">PSN College of engineering And Technology (Autonomous) </h1></td>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr>
    <td height="49">&nbsp;</td>
    <td colspan="6"><div align="center">CONTINIOUS ASSESSMENT TEST-II </div></td>
   
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">Department : <?php echo $dept;?></td>
    <td colspan="2">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">Subject : <?php echo $subjectname;?></td>
    <td colspan="2">&nbsp;</td>
    <td>subject code : <?php echo $subjectcode;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">Max Marks : 50 </td>
    <td colspan="2">&nbsp;</td>
    <td>Duration : 2 Hrs</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <!-- <tr>
    <td>&nbsp;</td>
    <td colspan="5"><div align="center">
      <h4><strong>Section - A : Answer all the questions. </strong></h4>
    </div></td>
    <td>20*0.5=10</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5"><h3>Choose the correct answer </h3></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="6">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
  $a=1;
  	$qt=mysqli_query($connect,"select * from question_02 where subjectcode='$subjectcode' and unit='4' ORDER BY RAND() LIMIT 10");
		while($r=mysqli_fetch_array($qt))																									
	{
  ?>
  <tr>
    <td>&nbsp;</td>
    <td colspan="6"><?php echo $a;?>) <?php echo $r['qstn'];?></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td height="30"></td>
    <td width="2%">&nbsp;</td>
    <td width="16%">A . <?php echo $r['a1'];?></td>
    <td width="13%">B . <?php echo $r['a2'];?></td>
    <td width="15%">C . <?php echo $r['a3'];?></td>
    <td width="13%">D . <?php echo $r['a4'];?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php 
  $a++;
  }
  
  ?>
   <?php
  
  	$qt=mysqli_query($connect,"select * from question_02 where subjectcode='$subjectcode' and unit='5' ORDER BY RAND() LIMIT 10");
		while($r=mysqli_fetch_array($qt))																									
	{
  ?>
  <tr>
    <td>&nbsp;</td>
    <td colspan="6"><?php echo $a;?>) <?php echo $r['qstn'];?></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td height="27"></td>
    <td>&nbsp;</td>
    <td>A . <?php echo $r['a1'];?></td>
    <td width="13%">B . <?php echo $r['a2'];?></td>
    <td width="15%">C . <?php echo $r['a3'];?></td>
    <td width="13%">D . <?php echo $r['a4'];?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php 
  $a++;
  }
  
  ?>

   <tr>
     <td></td>
     <td colspan="2">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr> -->
   <tr>
     <td></td>
     <td colspan="5"><div align="center"><strong>Section - A : Answer All 5 Questions. </strong></div></td>
     <td>5*2=10</td>
     <td>&nbsp;</td>
   </tr>
    <?php
 
  	$qt=mysqli_query($connect,"select * from question_2 where subjectcode='$subjectcode' and unit='4' ORDER BY RAND() LIMIT 3");
		while($r=mysqli_fetch_array($qt))																									
	{
  ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5"><?php echo $a;?> ) <?php echo $r['qstn'];?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <?php
    $a++;
   }
   ?>
    <?php
 
  	$qt=mysqli_query($connect,"select * from question_2 where subjectcode='$subjectcode' and unit='5' ORDER BY RAND() LIMIT 2");
		while($r=mysqli_fetch_array($qt))																									
	{
  ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5"><?php echo $a;?> ) <?php echo $r['qstn'];?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <?php
    $a++;
   }
   ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5"><div align="center"><strong>Section - B : Answer any one Questions. </strong></div></td>
     <td>8*1=8</td>
     <td>&nbsp;</td>
   </tr>
    <?php
 
  	$qt=mysqli_query($connect,"select * from question_10 where subjectcode='$subjectcode' and unit='4' ORDER BY RAND() LIMIT 2");
		while($r=mysqli_fetch_array($qt))																									
	{
  ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5"><?php echo $a;?> ) <?php echo $r['qstn'];?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <?php
    $a++;
   }
   ?>
    <!-- <?php
 
  	$qt=mysqli_query($connect,"select * from question_10 where subjectcode='$subjectcode' and unit='5' ORDER BY RAND() LIMIT 1");
		while($r=mysqli_fetch_array($qt))																									
	{
  ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5"><?php echo $a;?> ) <?php echo $r['qstn'];?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <?php
    $a++;
   }
   ?> -->
    
   <tr>
     <td></td>
     <td colspan="5">&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td></td>
     <td colspan="5"><div align="center"><strong>Section - B : Answer any one Questions. </strong></div></td>
     <td>2*16=32</td>
     <td>&nbsp;</td>
   </tr>
    <?php
 $arj=1;
  	$qt=mysqli_query($connect,"select * from question_5 where subjectcode='$subjectcode' and unit='4' ORDER BY RAND() LIMIT 4");
		while($r=mysqli_fetch_array($qt))																									
	{
  ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5"><?php echo $a;?> ) <?php echo $r['qstn'];?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <?php
   if($arj==1)
   {
   ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="4"> <div align="center">OR</div></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <?php 
   
   }
   else{
   $arj=0;
   }
   
   ?>
   
   <!-- <?php
    $a++;
	$arj++;
   }
   ?>
    <?php
 
  	$qt=mysqli_query($connect,"select * from question_5 where subjectcode='$subjectcode' and unit='5' ORDER BY RAND() LIMIT 4");
		while($r=mysqli_fetch_array($qt))																									
	{
  ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5"><?php echo $a;?> ) <?php echo $r['qstn'];?></td>
     <td>&nbsp;</td>
     <td></td>
   </tr>
    <?php
   if($arj==1)
   {
   ?>
   <tr>
     <td>&nbsp;</td>
     <td colspan="4"> <div align="center">OR</div></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <?php 
   
   }
   else{
   $arj=0;
   }
   
   ?> -->
   <?php
    $a++;
	$arj++;
   }
   ?>
    
   
</table>
