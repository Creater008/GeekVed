<?php
require_once('connection.php');
require_once('auth.php');
?>
<!DOCTYPE HTML> 
<html lang="en">
<head>
	<title>GEEKVED:online solution</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<meta http-equiv="Conten-Type" content="text/html;charset=UTF-8" />	
	<meta http-equiv="Conten-Language" content="en-us" />
<style>

</style>
<style type="text/css">
<!--
@import url("css/demo.css");
-->
</style>
<script type="text/javascript" src="jquery.js"></script>
 <script type="text/javascript">
$(function() {

$(".submit").click(function() {

var name = $("#name").val();
var email = $("#email").val();
	var comment = $("#comment").val();
    var dataString = 'name='+ name + '&email=' + email + '&comment=' + comment;
	
	if(name=='' || email=='' || comment=='')
     {
    alert('Please Give Valide Details');
     }
	else
	{
	$("#flash").show();
	$("#flash").fadeIn(400).html('<img src="ajax-loader.gif" align="absmiddle">&nbsp;<span class="loading">Loading Comment...</span>');
$.ajax({
		type: "POST",
  url: "commentajax.php",
   data: dataString,
  cache: false,
  success: function(html){
 
  $("ol#update").append(html);
  $("ol#update li:last").fadeIn("slow");
  document.getElementById('email').value='';
   document.getElementById('name').value='';
    document.getElementById('comment').value='';
	$("#name").focus();
 
  $("#flash").hide();
	
  }
 });
}
return false;
	});



});


</script>
<style type="text/css">
.comment_box
{
background-color:#D3E7F5; border-bottom:#ffffff solid 1px; padding-top:3px
}
a
	{
	text-decoration:none;
	color:#d02b55;
	}
	a:hover
	{
	text-decoration:underline;
	color:#d02b55;
	}
	*{margin:0;padding:0;}
	
	
	ol.timeline
	{list-style:none;font-size:1.2em;}
	ol.timeline li{ display:none;position:relative;padding:.7em 0 .6em 0;}ol.timeline li:first-child{}
	
	#main
	{
	width:500px; margin-top:20px; margin-left:100px;
	font-family:"Trebuchet MS";
	}
	#flash
	{
	margin-left:100px;
	
	}
	.box
	{
	height:85px;
	border-bottom:#dedede dashed 1px;
	margin-bottom:20px;
	}
		input
	{
	color:#000000;
	font-size:14px;
	border:#666666 solid 2px;
	height:24px;
	margin-bottom:10px;
	width:200px;
	
	
	}
	textarea
	{
	color:#000000;
	font-size:14px;
	border:#666666 solid 2px;
	height:124px;
	margin-bottom:10px;
		width:200px;
	
	}
	.titles{
	font-size:13px;
	padding-left:10px;
	
	
	}
	.star
	{
	color:#FF0000; font-size:16px; font-weight:bold;
	padding-left:5px;
	}
</style>
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="loader.gif" alt="Uploading you pic...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
						
		}).submit();
		
			});
        }); 
</script>
</head>


<body>

<center>
<?php
include_once('./css/top1.php')
?>

<div class="mainwrapper">
<center>
<div class="main">


<div class="content">
<div class="container">
</div>
 
<div class="mcon">
<div class="mcon1"> 
<div class="pwrapper1">
<a href="member-profile.php"><div class="profile_pic_wrapper">
<a href="member-profile.php" class="cwrap">
<?php
// Here 23 (post_id) article id
$result=mysql_query("select * from members where uid=".$_SESSION['SESS_U_ID']);
$value=mysql_fetch_array($result);
$proalt=$value['firstname'];
$proalt1=$value['lastname'];
$email=$value['email'];
$username=$value['login'];
$yoyo=$value['profile_image'];
echo '<img src="./uploads/'.$yoyo.'" class="proimg" title="'.$proalt.' '.$proalt1.'">';
?>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click to change
</a>
</div></a>

<div class="memcon">
 <p><h1>Account Info </h1><a href="edit.php">Click to edit</a> </p>
<hr> 
<table>
<tr>
<td width="200px">
<h3>Username:</td>
<td>
<?php
 echo "$username";
?>
</h3>
</td>
</tr>
<tr>
<td>
<h3>
<h3>First Name:</td>
<td>
<?php
 echo "$proalt";
?>
</h3>
</td>
</tr>
<tr>
<td>
<h3>
<h3>Last Name:</td>
<td>
<?php
 echo "$proalt1";
?>
</h3></td></tr>
<tr>
<td>
<h3>Email:</td>
<td>
<?php
 echo "$email";
?>
</h3/td>
</tr>
<tr>
<td>
<h3>Password:</h3><h6>(hidden for security reasons)</h6></td>
<td>
<?php
 echo "*******";
?>
</h3/td>
</tr>
</table>
</div>
 
 </div>

 
</div>
</div>
</div>
</center>
</div>

<?php
include_once('./css/bottom.php')
?>

