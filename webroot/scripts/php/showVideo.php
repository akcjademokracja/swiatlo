<?php
 

	include('db.php');
 

$stream=mysqli_fetch_array(mysqli_query($b2za, "SELECT * FROM  streams   where id='".$_POST['id']."'"));
 			 
 		
		?>
 
<script>   
		  var my_video_player;
(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/pl_PL/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
     window.fbAsyncInit = function() {

     FB.init({
      appId      : '104628140213092',
      xfbml      : true,
      version    : 'v2.10'
    });
 FB.Event.subscribe('xfbml.ready', function(msg) {
	 
	 });}
	 </script>
	 	<div class="fb-video" data-href="<?php echo $stream['address']; ?>" data-show-text="false" data-autoplay="false"></div>
