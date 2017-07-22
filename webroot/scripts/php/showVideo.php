<?php
 

	include('db.php');
 

$stream=mysqli_fetch_array(mysqli_query($b2za, "SELECT * FROM  streams   where id='".$_POST['id']."'"));
 			 
 		
		?>
 
<script>   
		 
	 </script>
	 	<div class="fb-video" data-href="<?php echo $stream['address']; ?>" data-show-text="false" data-autoplay="false"></div>
