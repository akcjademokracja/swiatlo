<?php
 

	include('db.php');
	include('dx.php'); 


$update=mysqli_query($b2za, "UPDATE  streams set broken=1 where id='".$_POST['id']."'");
  echo json_encode(array('ok'=>'ok'));
			 
		
		
		?>