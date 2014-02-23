<?php

require_once('auth.php');
require_once('connection.php');
$result=mysql_query("select * from members where uid=".$_SESSION['SESS_U_ID']);
$value=mysql_fetch_array($result);
$proalt=$value['firstname'];
$proalt1=$value['lastname'];
$email=$value['email'];
$username=$value['login'];
$yoyo=$value['profile_image'];
$password=$value['passwd'];
?>
<form action="edit-info.php" method="POST">
First Name:<input type="text" name="fname" Value="<?php echo "$proalt"; ?>" onfocus="if(this.value=='<?php echo "$proalt"; ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo "$proalt"; ?>';"/><br/>
Last Name:<input type="text" name="lname" Value="<?php echo "$proalt1"; ?>" onfocus="if(this.value=='<?php echo "$proalt1"; ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo "$proalt1"; ?>';"/>
<br/>
Email:<input type="text" name="email" Value="<?php echo "$email"; ?>" onfocus="if(this.value=='<?php echo "$email"; ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo "$email"; ?>';"/><br />
Current Password:<input type="password" name="password" />
<br />
New Password:<input type="password" name="newpassword" /><br />
<input type="submit" name="submit" value="Update">
</form>
