<?php
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	include('db.php');
	include('dx.php'); 


$update=mysqli_query($b2za, "UPDATE  streams set broken=1 where id='".$_POST['id']."'");
echo mysqli_error($b2za);
 echo json_decode(array('ok'=>'ok'));
			 
		
		
		?>