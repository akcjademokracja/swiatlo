<div class="container-fluid">
	<div class="row">
	 
		<div class="col-md-12">
			<form id="streamsform"> 	
	
	
	
	
</form>

 <div class="text-center margin-top-30">
<button class="btn btn-success" id="dodajkolejne"><i class="fa fa-plus"></i> Dodaj kolejne</button>	
	<button class="btn btn-primary btn-lg hide" onclick="javascript:zapiszStreamy()" data-html="true" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Trwa dodawanie'" data-complete-text="<i class='fa fa-check'></i> Dodane, przeładuję" id="zapiszdodane"><i class="fa fa-gavel"></i> Zapisz nowe eventy</button>	

<div class="hide" id="dododania">
	<div class="row form-group addstreamrow">
	<div class='col-md-7'><input placeholder="Link" class="form-control" data-name="linka" name="eventlinka[]" data-id="" ></div>
	<div class="col-md-4"><input placeholder="Id" class="form-control" name="eventid[]" data-name="id" data-id=""></div>
  <div class="col-md-1">
		 		<button class="removerow btn btn-danger" ><i class="fa fa-remove"></i></button></div>
 </div>
 

 </div></div>
 <br/><Br/>
	<div class="inputNameWrap"><h1 class="">Eventy dodane przez nas i ludzi (ludzi szare)</h1></div>
 
 	<div class="row" style="background-color:#333; height:30px; line-height:30px; color:#fff; margin-bottom:20px;">
 		<div class="col-md-3">
			<strong>Nazwa</strong>
		</div>
		<div class="col-md-3 text-center">
			<strong>Link</strong>
		</div>
<div class="col-md-2 text-center">
			<strong>Miejsce</strong>
		</div>
		 		 	<div class="col-md-2 text-center">
			<strong>Id</strong>
		</div>  
		 
		<div class="col-md-2 text-center">
			<strong>Publ/Usuń</strong>
		</div>  
	</div>
	
	<? foreach ($streams as $stream) { 
	?>
	<div class="row form-group streamrow <? if ($stream['owners']==2) { echo 'ciemniejsze'; };?> " id="streamRow<?=$stream['id']?>">
	<div class="col-md-4"><input placeholder="Nazwa" class="form-control toupdate" data-name="name" data-id="<?=$stream['id']?>" value="<?=$stream['name']?>"></div>
	<div class='col-md-5'><input placeholder="Adres" class="form-control toupdate" data-name="address" data-id="<?=$stream['id']?>" value="<?=$stream['address']?>"></div>
		<div class="col-md-1"><input placeholder="Kolejnosc" class="form-control toupdate"  data-name="kolejnosc" data-id="<?=$stream['id']?>" value="<?=$stream['kolejnosc']?>"></div>

 	 
        <div class="col-md-2 text-right"><? if ($stream['broken']==1) { ?>
		<span class="text-danger" style="font-weight: 700; font-size: 24px; display: inline-block; margin-right: 10px;">!</span>
		
		<? }; ?>
				<button class="btn btn-primary btn-sm" onclick="javascript:showVideo(<?=$stream['id']?>, '<?=$stream['name']?>')"><i class="fa fa-search-plus"></i></button>
		<a onclick="javascript:activateSlide(<?=$stream['id']?>)" id="activateSlideBtn<?=$stream['id']?>" class="btn   btn-<? if ($stream['active']==0) { echo 'default'; } else { echo 'success active'; }; ?> btn-sm" style="margin-right:10px"><i class="fa fa-bookmark"></i></a>
		
		<button class="removestream btn btn-danger" data-id="<?=$stream['id']?>"><i class="fa fa-remove"></i></button></div>
 </div>


	<?
		} ?>
		
		
		
		
		
		<style>
			.streamrow.ciemniejsze {
				background:#efefef;
			}
			.streamrow.ciemniejsze input {
				background:#efefef;
			}
 </style>
</div>
	
</div>
</div>







<div class="modal fade bd-example-modal-lg" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="oakcjiShow" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         </div>
	        <div class="modal-body">
		        <div id="video"></div>
	        </div>
	      
    </div>
	      
  </div>
</div>
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