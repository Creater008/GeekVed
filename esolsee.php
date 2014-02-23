
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
<script>
window.onload=function(){a=<?php echo !empty($_REQUEST["curr_pos"])?$_REQUEST["curr_pos"]:0; ?>;
window.scrollTo(0,a);
var links=window.document.links;
for(b=0;b<links.length;b++)
{
if(window.addEventListener){
links[b].addEventListener('click',function(event){var a=event.srcElement.href.toString(event.srcElement.href);if(a.indexOf('?')!=-1){event.target.href=event.target.href+'&curr_pos='+getpos();}},false);
}else{
links[b].attachEvent('onclick',function(event){if(event.srcElement.href.indexOf('?')!=-1){event.srcElement.href=event.srcElement.href+'&curr_pos='+getpos();}},false);
}

}
};
function getpos(){if(window.pageYOffset){return window.pageYOffset;}else{return document.documentElement.scrollTop;}}
function clearScroll(a){var b=document.createElement('input');b.type='hidden';b.name="curr_pos";b.autocomplete='off';b.value=getpos();a.appendChild(b);
a.submit();
}

</script>	
</head>

<body>
<center>
<?php
include_once('./css/top.php');
?>



<div class="mainwrapper">
<center>
<div class="main">


<div class="content">
<div class="container">
</div>
 
<div class="mcon">
<div class="mcon1">
<br /><br />
<div id="commentcontainer">
<a id="link1">
<form method="POST" name="" 
action="#"> 
<table width="332" border="2" align="center">
<tr>
    <td colspan="2">
		<h3>You need to be Logged in to Post Your Querry Here to discuss:</h3>
	</td>
   </tr>
</table>
</form>
</a>
<?php
require_once('connection.php');
$result3 = mysql_query("SELECT * FROM comment where comsubid=0 order by commentid desc");
while($row3 = mysql_fetch_array($result3))
{ 
	$id=$row3['commentid'];
	$query="select count(commentid) 'com' from comment where comsubid=".$id;
	$result_com=mysql_query($query);
	$row_com=mysql_fetch_array($result_com);
	echo '<div id="maincomm">';
	echo '<img src="uploads/'.$row3['images'].'" height="60" width="60">';
	
    echo '<p id="name">'.$row3['name'].'</p>';
	echo '<p>'.$row3['content'].'</p>';
	echo '<p class="t">'.$row3['time'];
	echo '<p class="t">'.$row3['date'];
	echo '<p id="comm">'.'<a href="esol.php?com_id='.$id.'">'.$row_com['com'].' comments</a>'.'</p>';
	
		$result4 = mysql_query("SELECT * FROM comment where comsubid='$id' order by commentid");
			while($row4 = mysql_fetch_array($result4))
			{
				echo '<div id="subcomm">';
				echo '<img src="uploads/'.$row4['images'].'" class="subcommpropic">';
				echo '<p id="name">'.$row4['name'].'</p>';
				echo '<p class="t">'.$row4['time'];
				echo '<p class="t">'.$row4['date'];
				echo '<p>'.$row4['content'].'</p>';
				echo '<div class="clearfix"></div>';
				echo '</div>';
			}
			
	echo '<div class="clearfix"></div>';
	?>
		<a id="link1">

</a><?php
	echo '</div>';
}
?>
<div class="clearfix"></div>
</div>
</div>


</div> 
</div>
</div>
</div>


</center>
<?php
include_once('./css/bottom.php');
?>
</body>
</html>