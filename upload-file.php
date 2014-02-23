<?php  
require_once('auth.php');
$id=''.$_SESSION['SESS_FIRST_NAME'].'' ;

if(!is_dir("uploads/".$id)){   //this checks to make sure the directory does not already exist
mkdir("uploads/".$id, 0777, true); //if the directory doesn't exist then make it
chmod("uploads/".$id, 0777);  //chmod to 777 lets us write to the directory
}
$uploaddir='uploads/' . $id .'/';   //lets put the directory into a variable notice added slash on end 

foreach($_FILES["uploads"]["name"] as $bla=> $boo){      //we have to do a loop to get all the filenames
$file=$uploaddir.$boo;  //we will check the filename in the upload directory, see if it exists
	
if (file_exists($file)) {   //if it exists then ......
die("Filename already exists, please rename this file");   //if filename exists in the directory then we die!!! :P
}
}
foreach ($_FILES["uploads"]["error"] as $key => $error) {

if ($error == UPLOAD_ERR_OK) {
move_uploaded_file(      //php function to move the file
$_FILES["uploads"]["tmp_name"][$key],     //from the temporary directory 
$uploaddir. $_FILES["uploads"]["name"][$key]   //to the directory you chose
) or die("Problems with upload");
}

   }
   
   foreach($_FILES["uploads"]["name"] as $bla=> $boo){
$file=$uploaddir.$boo;

echo"<a href=".$file.">Click here to see".$file."<br>";
}

$allowedExtensions = array("jpg","jpeg","gif","png","zip");
  foreach ($_FILES as $file) {
    
  }
  
	foreach ($_FILES as $file) {
    
  }
  $i=0;
	foreach($_FILES["uploads"]["name"] as $bla=> $boo)
	{		$size=$_FILES["uploads"]["size"]["$i"];
			$i++;
  	require_once('connection.php');
		$offset=strtotime("+30 minutes , +12 hours");
		$time=date('H:i a', $offset);
		$date=date("D M Y",$offset);
	$qry = "INSERT INTO book(book,username,time,date,size) VALUES('$boo','$id','$time','$date','$size')";
	$result = @mysql_query($qry);}
   
   