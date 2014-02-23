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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>

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
 
 <div class="flash">


<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>


<div class="welrobo"><h3>Select Image to set as your Profile image</h3> <input type="file" name="photoimg" id="photoimg" />
</form>
</div	>
<div id='preview'>
</div>
 </div>
<div class="pwrapper1">

<br />


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


