<?php 
 $url='esol.php';
//Start session
	@session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_U_ID']) || (trim($_SESSION['SESS_U_ID']) == '')) {
		header("location: esolsee.php");
		exit();
	}
$errors = '';
if(isset($_GET['del']))
{	require_once('connection.php');
	mysql_query("delete from comment where commentid=".$_GET['del']." or comsubid=".$_GET['del']);
}

if(isset($_POST['content']))
{
	
	
	if(empty($errors))
	{
		require_once('connection.php');
		$content=$_POST['content'];
		$commentid=$_POST['commentid'];
		$offset=strtotime("+30 minutes , +3 hours");
		$time=date('H:i a', $offset);
		$date=date("D M Y",$offset);
mysql_query("INSERT INTO comment(name, content, time, date, comsubid,stud_id)VALUES('".$_SESSION['SESS_FIRST_NAME']."', '$content','$time','$date', '$commentid',".$_SESSION['SESS_U_ID'].")");
	}
}

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
<table width="332" border="0" align="center">
  <tr>
    <td width="265">
		<ul>
		<?php
		if(!empty($errors)){
		echo "<li class='err'>".($errors)."</li>";
		}
		?>
		</ul>	</td>
    <td width="57">&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2">
		
		<input name="commentid" type="hidden" value="<?php echo $_GET['id'] ?>">
		<h3>Post Your Querry Here to discuss:</h3>
		<textarea name="content" style="width: 316px;height:auto;" ></textarea>
	</td>
   </tr>
  <tr>
  
  <tr>
    <td colspan="2"><input type="submit" value="POST" name='submit' class="button"></td>
    </tr>
</table>
</form>
</a>
<?php
require_once('connection.php');
$result123=mysql_query("select * from members where uid=".$_SESSION['SESS_U_ID']);
$value123=mysql_fetch_array($result123);
$yoyo=$value123['profile_image'];
$r123 = mysql_query("UPDATE comment SET images='$yoyo' WHERE stud_id=".$_SESSION['SESS_U_ID']);//update image by profile image//
$result3 = mysql_query("SELECT * FROM comment where comsubid=0 order by commentid desc");
while($row3 = mysql_fetch_array($result3))
{ 
	$id=$row3['commentid'];
	$query="select count(commentid) 'com' from comment where comsubid=".$id;
	$result_com=mysql_query($query);
	$row_com=mysql_fetch_array($result_com);
	echo '<div id="maincomm">';
	echo '<img src="uploads/'.$row3['images'].'" height="60" width="60">';
	if($row3['stud_id']==$_SESSION['SESS_U_ID']){
	echo '<a href="esol.php?del='.$id.'" class="close">X</a>';
	}
    echo '<p id="name">'.$row3['name'].'</p>';
	echo '<p>'.$row3['content'].'</p>';
	echo '<p class="t">'.$row3['time'];
	echo '<p class="t">'.$row3['date'];
	echo '<p id="comm">'.'<a href="esol.php?com_id='.$id.'">'.$row_com['com'].' comments</a>'.'</p>';
	if(isset($_REQUEST['com_id'])){
	if($_REQUEST['com_id']==$row3['commentid']){
		$result4 = mysql_query("SELECT * FROM comment where comsubid='$id' order by commentid");
			while($row4 = mysql_fetch_array($result4))
			{
				echo '<div id="subcomm">';
				echo '<img src="uploads/'.$row4['images'].'" class="subcommpropic">';
				
				if($row4['stud_id']==$_SESSION['SESS_U_ID']){
				echo '<a href="esol.php?del='.$row4['commentid'].'&com_id='.$row3['commentid'].'" class="close">x</a>';
	}
				echo '<p id="name">'.$row4['name'].'</p>';
				echo '<p class="t">'.$row4['time'];
				echo '<p class="t">'.$row4['date'];
				echo '<p>'.$row4['content'].'</p>';
				echo '<div class="clearfix"></div>';
				echo '</div>';
			}
		}}	
	echo '<div class="clearfix"></div>';
	?>
		<a id="link1">
<form method="POST" name="" action="esol.php" onsubmit="return clearScroll(this);"> 
<table width="332" border="0" align="center">
  <tr>
    <td width="265">
		<ul>
		<?php
		if(!empty($errors)){
		echo "<li class='err'>".($errors)."</li>";
		}
		?>
		</ul>	</td>
    <td width="57">&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2">
		
		<input name="commentid" type="hidden" value="<?php echo $row3['commentid'] ?>" >
		<input name="com_id" type="hidden" value="<?php echo $row3['commentid'] ?>" >
		<input name="content" style="width: 316px;" value="comment" onfocus="if(this.value=='comment')this.value='';" onblur="if(this.value=='')this.value='comment';"/>
			
	</td>
   </tr>
</table>
</form>
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