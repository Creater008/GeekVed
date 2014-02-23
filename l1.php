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
<p><a href="./" class="button123">ALL PROGRAMMING BOOKS</a></p>
<div class="menucontainer"> 
<a href="./" class="button123">Name of book:</a><a href="./" class="button123">Author</a><a href="./" class="button123">size</a><a href="./" class="button123">download</a>
</div>
<div class="mcon1">
<div class="book1">
<br/>
<br/>';
require_once('connection.php');

$result4 = mysql_query("SELECT * FROM book where username='Assembly'");
echo '<p><a href="./" class="button123">ASSEMBLY LANGUAGE BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Assembly/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='c#'");
echo '<p><a href="./" class="button123">C# BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Assembly/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='c#c++'");
echo '<p><a href="./" class="button123">C# &C++ BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/c#c++/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='Computer Programming for Teens'");
echo '<p><a href="./" class="button123">Computer Programming for Teens BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Computer Programming for Teens/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='Game Programing'");
echo '<p><a href="./" class="button123">Game Programing BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Game Programing/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='Microcontrollers Programming'");
echo '<p><a href="./" class="button123">Microcontrollers Programming BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Microcontrollers Programming/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='Mat lab'");
echo '<p><a href="./" class="button123">Mat lab BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Mat lab/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='C++'");
echo '<p><a href="./" class="button123">Mat lab BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Mat lab/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='Web Developement'");
echo '<p><a href="./" class="button123">Web Developement BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/Web Developement/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
			echo '<br />';
			}
$result4 = mysql_query("SELECT * FROM book where username='c'");
echo '<p><a href="./" class="button123">C Programming BOOKS</a></p>';
			while($row4 = mysql_fetch_array($result4))
			{
				$size=round($row4['size']/1048576,2);
				echo '<p><div class="bookcontainerwrapp"><a href="#" class="book123">'.$row4['book'].'</a>';
				echo '<a href="#" class="book123">'.$row4['author'].'</a>';
				echo '<a href="#" class="book1234">'.$size. ' MB</a>';
				echo '<a href="./uploads/c/'.$row4['book'].'" class="bookdownload"> Download</a></div></p>';
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
include_once('./css/bottom.php');
?>