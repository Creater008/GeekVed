<?php
require_once('connection.php');
require_once('auth.php');
require_once('auth.php');
require_once('connection.php');
$result=mysql_query("select * from members where uid=".$_SESSION['SESS_U_ID']);
$value=mysql_fetch_array($result);
$proalt=$value['firstname'];
$proalt1=$value['lastname'];
$email=$value['email'];
$username=$value['login'];
$yoyo=$value['profile_image'];
$pass=$value['passwd'];
//get data from form//

	$newfname= addslashes($_POST['fname']);
	$newlname = addslashes($_POST['lname']);
	$email = addslashes($_POST['email']);
	$newfname=strip_tags($_POST['fname']);
	$newlname=strip_tags($_POST['lname']);
	$email=strip_tags($_POST['email']);
	//update database//
	mysql_query("UPDATE members SET firstname='$newfname' WHERE uid=".$_SESSION['SESS_U_ID']);
	mysql_query("UPDATE members SET lastname='$newlname' WHERE uid=".$_SESSION['SESS_U_ID']);
	mysql_query("UPDATE members SET email='$email' WHERE uid=".$_SESSION['SESS_U_ID']);
	if($pass==md5($_POST['password'])){
	mysql_query("UPDATE members SET passwd='".md5($_POST['newpassword'])."' WHERE login='$proalt' AND passwd='".md5($_POST['password'])."'");
	header("location:home.php?informationupdated");
	}
	else{
	header("location:edit.php?error");}

?>
<?php
/*
if(!empty($_POST)){
$to_process=array();
$error=array();
if(!empty($_POST["email"])&&filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){array_push($to_process,'email='.$_POST["email"]);$email=$_POST["email"];}else{array_push($error,'That email is not valid');}
if(!empty($_POST["fname"])){array_push($to_process,'fname='.$_POST["fname"]);$fname=$_POST["fname"];}else{array_push($error,'The First Name is not valid');}
if(!empty($_POST["lname"])){array_push($to_process,'lname='.$_POST["lname"]);$lname=$_POST["lname"];}else{array_push($error,'The Last Name is not valid');}
if(!empty($_POST["newpassword"])){
if(!empty($_POST["password"])&&!empty($_POST["newpassword"])){array_push($to_process,'password='.$_POST["password"]);$password=$_POST["password"];
array_push($to_process,'passwd='.$_POST["newpassword"]);$newpassword=$_POST["newpassword"];
}else{array_push($error,'The Last Name is not valid');}

}
foreach($to_proccess as $t){$q.=','.$t;}
Update test.members SET $q;
}
else{
header('Location:edit.php');
exit();
}

*/
?>