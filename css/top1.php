<div class="top">
<div class="menuwrapp">
<div class="toprr" style="<?php
if (isset($_GET['id'])) echo 'display:inline-block;'?>" >

<h3>Registration Sucessfull</h3>

</div>
	<a href="http://geekved.com" class="top-content"><img src="./images/gv.png"></a>
   <a href="index.php"><img src="images/music.png" alt="music" height="60" width="60"></a> 
   <a href="esol.php"><img src="images/online.png" alt="music" height="60" width="60"></a> 
  <a  href="lib.php"><img src="images/video.png" alt="video" height="60" width="60" /></a> 
  <a  href="robotics.php"><img src="images/history.png" alt="history" height="60" width="60"/></a> 
  <a  href="contact.php"><img src="images/calendar.png" alt="calendar" height="60" width="60" /></a> 
  <a href="https://www.facebook.com/geekvedpage"><img src="images/rss.png" alt="rss" height="60" width="60" /></a> 
<div class="mrap">
<?php
	@session_start();
   if(!isset($_SESSION['SESS_U_ID']))
   {
   echo'<div class="mrap">
<ul id="menulog">
	<li><a href="login.php" class="drop"><font color="#18dcf3">Login </font><img src="./images/1.png"></a> 
    
        <div class="dropdown_2columns">
            <div class="col_2">
                <h2>Welcome !</h2>
            </div>
    
            <div class="col_2">
                <p>Hi and welcome to Geek Login!</p>                       
            </div>
			<div class="col_2">
			<form id="loginForm" name="loginForm" method="post" action="login-exec.php" class="form1">
    <input type="text" class="form1" name="login" value="Username" id="login" onfocus="if(this.value==\'Username\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'Username\';">
	<input type="Password" class="form1" name="password" value="abcdef" id="password" onfocus="if(this.value==\'abcdef\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'abcdef\'; else password();">
 <br /> <input type="submit" name="Submit" value="Login" class="button"/>
  
</form>   
                
            </div> 
        </div><!-- End 2 columns container -->
    
    </li><!-- End Home Item -->
</ul>

<ul id="menulog">

	<li><a href="register.php" class="drop"><font color="#18dcf3">Register<img src="./images/1.png"></font></a>
    
        <div class="dropdown_2columns"><!-- Begin 2 columns container -->
    
            <div class="col_2">
                <h2>Welcome !</h2>
            </div>
    
            <div class="col_2">
                <p>Give details for registration</p>                       
            </div>
			<div class="col_2">

	

			<form method="post" name="loginForm" method="post" action="register-exec.php" class="form1">
			<input name="fname" class="form1" type="text" value="First Name" id="fname" onfocus="if(this.value==\'First Name\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'First Name\';">
			<input type="text" class="form1" name="lname" value="Last name" id="lname" onfocus="if(this.value==\'Last name\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'Last name\';">
			<input type="text" class="form1" name="login" value="Username" id="uname" onfocus="if(this.value==\'Username\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'Username\';">
			<input type="text" class="form1" value="Email Address" id="u" onfocus="if(this.value==\'Email Address\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'Email Address\'; "></td>
			<br />Desired password<br />
			<input type="Password" class="form1" name="password" value="password" id="password" onfocus="if(this.value==\'password\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'password\'; else password();">
				<br />Repeat password<br />
				<input type="Password" class="form1" name="cpassword" value="Password" id="c" onfocus="if(this.value==\'Password\')this.value=\'\';" onblur="if(this.value==\'\')this.value=\'Password\'; else password();">
				<br />
			<input type="submit" class="button" value="Sign Up">
				</form>

<div>
	</div>
    </li>
</ul>

</div>

' ;
}
else
{echo' <a href="logout.php" class="button12"> logout</a>';
echo '<a href="home.php"><div class="button12">'.$_SESSION['SESS_FIRST_NAME'].  '</div></a>';
echo'<a href="home.php" class="button12">Welcome</a> ';
}
?>
</div>
</div>
</div>
<div class="menubar">
<a href="http://geekved.com" class="menu2">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; </a> 
</div>