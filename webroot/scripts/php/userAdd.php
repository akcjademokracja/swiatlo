<?php
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	include('db.php');
	include('dx.php'); 


$update=mysqli_query($b2za, "INSERT INTO streams set name='".addslashes($_POST['name'])."', address='".addslashes($_POST['adres'])."', owners=2, stream_id=1");
echo mysqli_error($b2za);
 echo json_decode(array('ok'=>'ok'));
			 
		
		
		?>