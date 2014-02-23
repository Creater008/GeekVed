<?php
session_start();
if(1)
{
echo '
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

</head>

<body>
<center> ';
include_once('./css/top.php');
echo '
<div class="mainwrapper">
<center>
<div class="main"> ';
include_once('./css/lib/lib_menu.php');
echo '
<div class="content">
<div class="container">
</div>
 
<div class="mcon">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="./" class="button123">GAME PROGAMMING BOOKS</a></p>
<div class="menucontainer"> 
<a href="./" class="button123">Name of book:</a><a href="./" class="button123">Author</a><a href="./" class="button123">size</a><a href="./" class="button123">download</a>
</div>
<div class="mcon1">
<div class="book1">
<br/>
<br/>';
require_once('connection.php');

$result4 = mysql_query("SELECT * FROM book where username='Java Programming'");

			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Java Programming/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
echo'
</div>
</div>
</div>
</div>
</div>
</div>';
}
?>