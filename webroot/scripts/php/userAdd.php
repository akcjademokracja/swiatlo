<?
	include('db.php');
	include('dx.php'); 


$update=mysqli_query($b2za, "INSERT INTO streams set name='".addslashes($_POST['name'])."', address='".addslashes($_POST['adres'])."', owners=2");
echo mysqli_error($b2za);
 echo json_decode(array('ok'=>'ok'));
			 
		
		
		?>