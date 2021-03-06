<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/tether.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="/css/bootstrap-select.min.css">
<script src="/js/bootstrap-select.min.js"></script>


<style>
	@font-face {
  font-family: 'din';
  src: url('DINProCondensedBold.ttf'); /* IE9 Compat Modes */
  src:
         url('DINProCondensedBold.ttf')  format('truetype'), /* Safari, Android, iOS */
 }
	/*
  	Flaticon icon font: Flaticon
  	Creation date: 20/07/2017 15:30
  	*/

@font-face {
  font-family: "Flaticon";
  src: url("/img/font/Flaticon.eot");
  src: url("/img/font/Flaticon.eot?#iefix") format("embedded-opentype"),
       url("/img/font/Flaticon.woff") format("woff"),
       url("/img/font/Flaticon.ttf") format("truetype"),
       url("/img/font/Flaticon.svg#Flaticon") format("svg");
  font-weight: normal;
  font-style: normal;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
  @font-face {
    font-family: "Flaticon";
    src: url("/img/font/Flaticon.svg#Flaticon") format("svg");
  }
}

[class^="flaticon-"]:before, [class*=" flaticon-"]:before,
[class^="flaticon-"]:after, [class*=" flaticon-"]:after {
  font-family: Flaticon;
        font-size: 20px;
font-style: normal;
margin-left: 0px;
}

.flaticon-tick:before { content: "\f100"; }


h1.navbar-brand {
	font-family: din;
	font-size: 40px;
	padding: 0px;
}
#top {
	margin-top: 70px;
}
.switches, .switcheswrap {
	white-space: nowrap;
}

 .pagination  {
	 margin-top: 50px;
	 text-align: center;
 }
 .pagination li {
	 display: inline-block;
	 list-style: none;
 }
.pagination  li a {
	display: inline-block;
	width:50px;
	height: 50px;
	border-radius: 3px;
	border:0px solid #000;
	color:#000;
	background: #efefef;
	font-size: 20px;
	text-align: center;
	line-height: 50px;
	margin: 5px 5px;

}
.pagination li.disabled {
	display: none;
}
.pagination li.active a {
	background: #333;
 	color:#fff;
}
.pagination li.first a,.pagination li.last a {
	width: auto;
	padding: 0px 10px;
}
.pagination  li a:hover {
	text-decoration: none;
	color:#fff;
	background: #ccc;
}


@media (max-width:996px) {
	.pagination {
		max-width: 100%;
		display: block;
		text-align: center;
	}
	h1.navbar-brand {
		font-size: 20px;
	}
	.navbar-toggler-right {
		top:10px;right:10px !important;

	}
	.float-right {
		float: none !important;
 	}
 	#navbarSupportedContent, .navbar-nav, .btntopwrap {
	 	text-align: center !important;
	 	margin: 0px !important;
	 	float: none !important;
 	}
 	#navbarSupportedContent {
	 	padding-bottom: 20px;
 	}
 	#top {
	 	margin-top:120px;
 	}
 	.switcheswrap {
	 	position: absolute;
	 	top:70px;
	 	left:0px;
	 	right:0px;
	 	height: 30px;
	 	background: #fff;
	 	white-space: nowrap;
 	}
 	.switches {
float:left; 	}
 	.losowo {
	 	float: right;
 	}
}

.losowo {
	display: inline-block;
	white-space: nowrap;
	margin-left: 20px;
	color:#000;
	font-size: 12px;
}
.losowo:hover {
	text-decoration: none;
	color:#00880d;
}
.losowo.active, .losowo.active i, .losowo:hover, .losowo:hover i {
	color:#00880d;	text-decoration: none;

}
.losowo i {
	color: #ccc;
font-size:10px;
}
#kontaktModalShow {
	cursor: pointer;
}
#selectPieces {
	background:transparent;
	border:1px solid #000;
	height:30px;
	width:170px;
	font-size:12px;
}
.grid-item {
	display:block; padding-left:0px; padding-right: 0px
}
.grid-item .videoWrap {
	display: block;
}
.grid-item.inactive .videoWrap {
	display: none;
}
.broken-link {
	position: absolute;
	right:0px;
	z-index: 999999999;
	top:0px;
	height: 34px;
	line-height: 34px;
	padding: 0px 10px;
	font-size: 18px;
	background: #cc0000;
	color:#fff;
}
.broken-link.active {
	background:green;
}
.broken-link:hover {
	cursor: pointer;
	opacity: 0.8;
}

</style>

</head>

<nav class="navbar navbar-toggleable-md fixed-top navbar-light bg-faded" style="padding: 0px 15px; background:#fff;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <h1 class="navbar-brand mb-0"><a href="http://akcjademokracja.pl"><img src="/img/logoAkcja.png" style="height: 70px"></a></h1>
    <div calss="switcheswrap"><div class="switches">
	 <select class="form-control" id="selectPieces">
   <option value="2" <? if ($limit==2) { echo 'selected'; }; ?>>2 transmisje</option>
  <option value="6" <? if ($limit==6) { echo 'selected'; }; ?>>6 transmisji</option>

 <option value="10" <? if ($limit==10 or !$limit) { echo 'selected'; }; ?>>10 transmisji</option>
  <option value="16" <? if ($limit==16) { echo 'selected'; }; ?>>16 transmisji</option>
  <option value="24" <? if ($limit==24) { echo 'selected'; }; ?>>24 transmisje</option>
  <option value="30" <? if ($limit==30) { echo 'selected'; }; ?>>30 transmisji</option>
  <option value="all" <? if ($limit=='all') { echo 'selected'; }; ?>>Wszystkie (<?=$ilestreams?>)</option>
<!--
  <? for ($i=1; $i<=count($ilestreams); $i++) { ?>
   <option <?php if ($_GET['streams']==$i) { echo 'selected'; }; ?> value="<?=$i?>"><?=$i?></option><? }; ?>
-->
</select>




	 </div>
<!--


<? if ($_GET['streams']) { $streamsLink='&streams='.$_GET['streams'].''; }; if ($_GET['random']==1) { $klasa='active';  $randomLink='/?random=0'; } else { $randomLink='/?random=1'; }  ?>
	<input type="hidden" value="<?=$_GET['random']?>" id="random"> <a class="losowo <?=$klasa?>" href="<?=$randomLink?><?=$streamsLink?>"><i class="flaticon-tick"></i> Losowo</a>
--> </div>
  <div class="collapse navbar-collapse float-right ml-auto" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto mr-1 float-right">
	<li class="nav-item">
		<div class="fb-share-button" data-href="https://3xw.eu" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/events/2069200656644256/">Udostępnij</a></div>
	</li>
	  <li class="nav-item">
        <a class="nav-link" id="kontaktModalShow"  data-toggle="modal" data-target="#kontaktModal"   style="font-size: 12px">KONTAKT</a>
      </li>

      <li class="nav-item">
                                                                                                                                                                      <a class="nav-link" href="http://www.akcjademokracja.pl/lancuch-swiatla-wraca-w-czwartek-znow-demonstracje-w-calej-polsce-i-pod-palacem-prezydenckim/"  style="font-size: 12px">Komunikat prasowy</a>
      </li>
      <li class="nav-item">
                                                                                                                                                                      <a class="nav-link" href="https://www.facebook.com/events/2069200656644256/" target="_blank"  style="font-size: 12px">O AKCJI</a>
      </li>
	</ul><!--
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
-->
<div class=" float-right my-1 ml-1 btntopwrap">

	<button class="btn btn-secondary btn-sm" id="dodajModalShow"  data-toggle="modal" data-target="#dodajModal" >DODAJ TRANSMISJĘ</button>

</div>
  </div>
</nav>

<div id="fb-root"></div>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.lancuchswiatla.pl","*.www.lancuchswiatla.pl","*.lancuchswiatla.pl","*.www.lancuchswiatla.pl"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.akcjademokracja.pl/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '5']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.akcjademokracja.pl/piwik.php?idsite=5" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->



<script>    var my_video_player;

     window.fbAsyncInit = function() {

     FB.init({
      appId      : '104628140213092',
      xfbml      : true,
      version    : 'v2.10'
    });
 FB.Event.subscribe('xfbml.ready', function(msg) {
  if (msg.type === 'video') {

	  $(document).ready(function() {
/*
		  $(".grid").find('.grid-item:not(.inactive)').each(function() {
			  $(this).css({'height':$(this).height()});
		  })
*/
$('.grid').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item',
  // use element for option
   percentPosition: true
});

 });

    }
});
   };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/pl_PL/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


 </script>
 <div class="container-fluid" style="" id="top">

<div class="row justify-content-center grid">

<?php  foreach ($streams as $index=>$stream) { $lg=4; if ($streamsow<9) { $lg=6; } else { $lg=4; } if ($_GET['small']==1) { $lg=4; }  ?>
<div class="col-lg-<?php echo $lg; ?> col-md-6 col-12 grid-item" style="">
	<div class="videoWrap"><div class="videoTitle"><?php echo $stream['name']; ?></div><? if ($user) { ?> <div class="broken-link <? if ($stream['broken']==1) { echo 'active'; } ?>" data-id="<?=$stream['id']?>">ZŁY</div><? }; ?>
	<div class="fb-video" data-href="<?php echo $stream['address']; ?>" data-show-text="false" data-autoplay="false">
 </div>
</div></div>
<?php }; ?></div>

<ul class="pagination justify-content-center">
    <?php
    echo $this->Paginator->first(__('Początek', true), array('tag' => 'li', 'escape' => false), array('type' => "button", 'class' => "btn btn-default"));
    echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled btn btn-default', 'tag' => 'li', 'escape' => false));
    echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
    echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
    echo $this->Paginator->last(__('Koniec', true), array('tag' => 'li', 'escape' => false), array('type' => "button", 'class' => "btn btn-default"));
    ?>
</ul>



 </div>



<div class="modal fade bd-example-modal-lg" id="oakcjiModal" tabindex="-1" role="dialog" aria-labelledby="oakcjiShow" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">O AKCJI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         </div>
	        <div class="modal-body">
		        TUTAJ INFORMACJE O AKCJI<br/>
		        TUTAJ INFORMACJE O AKCJI<br/>

	        </div>

    </div>

  </div>
</div>



<div class="modal fade bd-example-modal-lg" id="dodajModal" tabindex="-1" role="dialog" aria-labelledby="dodajModalShow" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DODAJ TRANSMISJĘ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         </div>
	        <div class="modal-body" id="dodajModalBody">
		       <h5 style="font-weight: 300">Wklej poniżej adres transmisji LIVE na facebooku (pełny adres np. https://www.facebook.com/AkcjaDemokracja/videos/529232293867019 ) oraz miasto/lokalizację Łańcucha i kliknij DODAJ</h5><br/><strong>
		       Jeśli możesz, dodaj do transmisji hashtag #ŁańcuchŚwiatłaPL
		       </strong>
		       <br/>
		       <form id="dodajForm" action="javascript:sendForm()">
			       <label for="address">Adres <small>(z https://)</small></label>
			       <input class="form-control" name="adres"/>
			       <br/>
			       <label for="address">Nazwa/lokalizacja <small>Np. Warszawa Pałac prezydencki</small></label>
			       <input class="form-control" name="name"/>
			       			       <br/>
			       			       <button type="submit" class="btn btn-lg btn-success">DODAJ</button>

		       </form>
	        </div>

    </div>

  </div>
</div>




<div class="modal fade bd-example-modal" id="kontaktModal" tabindex="-1" role="dialog" aria-labelledby="kontaktModalShow" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">KONTAKT DLA MEDIÓW</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         </div>
	        <div class="modal-body text-center" id="">

		      <h5> 737 504 708</h5>

	        </div>

    </div>

  </div>
</div>





<style>
	.videoWrap {
		position: relative;
	}
	.videoTitle {
		position: absolute;
		z-index: 9;
		background: #fff;
		font-family: din;
		color:#000;
		padding: 5px 10px;
		font-size: 30px;
		opacity: 1;
		transition:all .3s ease;
	}
	.videoWrap:hover .videoTitle {
		opacity: 0;
	}
	</style>
<script>
	setTimeout(function() {     if(typeof window.FB == 'undefined'){
       alert('Nasza strona oparta jest o facebookowe transmisje live. Jeżeli masz zablokowanego facebooka - odblokuj go.');
   } },10000);
	/*!
 * Masonry PACKAGED v4.2.0
 * Cascading grid layout library
 * http://masonry.desandro.com
 * MIT License
 * by David DeSandro
 */

!function(t,e){"function"==typeof define&&define.amd?define("jquery-bridget/jquery-bridget",["jquery"],function(i){return e(t,i)}):"object"==typeof module&&module.exports?module.exports=e(t,require("jquery")):t.jQueryBridget=e(t,t.jQuery)}(window,function(t,e){"use strict";function i(i,r,a){function h(t,e,n){var o,r="$()."+i+'("'+e+'")';return t.each(function(t,h){var u=a.data(h,i);if(!u)return void s(i+" not initialized. Cannot call methods, i.e. "+r);var d=u[e];if(!d||"_"==e.charAt(0))return void s(r+" is not a valid method");var l=d.apply(u,n);o=void 0===o?l:o}),void 0!==o?o:t}function u(t,e){t.each(function(t,n){var o=a.data(n,i);o?(o.option(e),o._init()):(o=new r(n,e),a.data(n,i,o))})}a=a||e||t.jQuery,a&&(r.prototype.option||(r.prototype.option=function(t){a.isPlainObject(t)&&(this.options=a.extend(!0,this.options,t))}),a.fn[i]=function(t){if("string"==typeof t){var e=o.call(arguments,1);return h(this,t,e)}return u(this,t),this},n(a))}function n(t){!t||t&&t.bridget||(t.bridget=i)}var o=Array.prototype.slice,r=t.console,s="undefined"==typeof r?function(){}:function(t){r.error(t)};return n(e||t.jQuery),i}),function(t,e){"function"==typeof define&&define.amd?define("ev-emitter/ev-emitter",e):"object"==typeof module&&module.exports?module.exports=e():t.EvEmitter=e()}("undefined"!=typeof window?window:this,function(){function t(){}var e=t.prototype;return e.on=function(t,e){if(t&&e){var i=this._events=this._events||{},n=i[t]=i[t]||[];return-1==n.indexOf(e)&&n.push(e),this}},e.once=function(t,e){if(t&&e){this.on(t,e);var i=this._onceEvents=this._onceEvents||{},n=i[t]=i[t]||{};return n[e]=!0,this}},e.off=function(t,e){var i=this._events&&this._events[t];if(i&&i.length){var n=i.indexOf(e);return-1!=n&&i.splice(n,1),this}},e.emitEvent=function(t,e){var i=this._events&&this._events[t];if(i&&i.length){var n=0,o=i[n];e=e||[];for(var r=this._onceEvents&&this._onceEvents[t];o;){var s=r&&r[o];s&&(this.off(t,o),delete r[o]),o.apply(this,e),n+=s?0:1,o=i[n]}return this}},t}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("get-size/get-size",[],function(){return e()}):"object"==typeof module&&module.exports?module.exports=e():t.getSize=e()}(window,function(){"use strict";function t(t){var e=parseFloat(t),i=-1==t.indexOf("%")&&!isNaN(e);return i&&e}function e(){}function i(){for(var t={width:0,height:0,innerWidth:0,innerHeight:0,outerWidth:0,outerHeight:0},e=0;u>e;e++){var i=h[e];t[i]=0}return t}function n(t){var e=getComputedStyle(t);return e||a("Style returned "+e+". Are you running this code in a hidden iframe on Firefox? See http://bit.ly/getsizebug1"),e}function o(){if(!d){d=!0;var e=document.createElement("div");e.style.width="200px",e.style.padding="1px 2px 3px 4px",e.style.borderStyle="solid",e.style.borderWidth="1px 2px 3px 4px",e.style.boxSizing="border-box";var i=document.body||document.documentElement;i.appendChild(e);var o=n(e);r.isBoxSizeOuter=s=200==t(o.width),i.removeChild(e)}}function r(e){if(o(),"string"==typeof e&&(e=document.querySelector(e)),e&&"object"==typeof e&&e.nodeType){var r=n(e);if("none"==r.display)return i();var a={};a.width=e.offsetWidth,a.height=e.offsetHeight;for(var d=a.isBorderBox="border-box"==r.boxSizing,l=0;u>l;l++){var c=h[l],f=r[c],m=parseFloat(f);a[c]=isNaN(m)?0:m}var p=a.paddingLeft+a.paddingRight,g=a.paddingTop+a.paddingBottom,y=a.marginLeft+a.marginRight,v=a.marginTop+a.marginBottom,_=a.borderLeftWidth+a.borderRightWidth,z=a.borderTopWidth+a.borderBottomWidth,E=d&&s,b=t(r.width);b!==!1&&(a.width=b+(E?0:p+_));var x=t(r.height);return x!==!1&&(a.height=x+(E?0:g+z)),a.innerWidth=a.width-(p+_),a.innerHeight=a.height-(g+z),a.outerWidth=a.width+y,a.outerHeight=a.height+v,a}}var s,a="undefined"==typeof console?e:function(t){console.error(t)},h=["paddingLeft","paddingRight","paddingTop","paddingBottom","marginLeft","marginRight","marginTop","marginBottom","borderLeftWidth","borderRightWidth","borderTopWidth","borderBottomWidth"],u=h.length,d=!1;return r}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("desandro-matches-selector/matches-selector",e):"object"==typeof module&&module.exports?module.exports=e():t.matchesSelector=e()}(window,function(){"use strict";var t=function(){var t=window.Element.prototype;if(t.matches)return"matches";if(t.matchesSelector)return"matchesSelector";for(var e=["webkit","moz","ms","o"],i=0;i<e.length;i++){var n=e[i],o=n+"MatchesSelector";if(t[o])return o}}();return function(e,i){return e[t](i)}}),function(t,e){"function"==typeof define&&define.amd?define("fizzy-ui-utils/utils",["desandro-matches-selector/matches-selector"],function(i){return e(t,i)}):"object"==typeof module&&module.exports?module.exports=e(t,require("desandro-matches-selector")):t.fizzyUIUtils=e(t,t.matchesSelector)}(window,function(t,e){var i={};i.extend=function(t,e){for(var i in e)t[i]=e[i];return t},i.modulo=function(t,e){return(t%e+e)%e},i.makeArray=function(t){var e=[];if(Array.isArray(t))e=t;else if(t&&"object"==typeof t&&"number"==typeof t.length)for(var i=0;i<t.length;i++)e.push(t[i]);else e.push(t);return e},i.removeFrom=function(t,e){var i=t.indexOf(e);-1!=i&&t.splice(i,1)},i.getParent=function(t,i){for(;t!=document.body;)if(t=t.parentNode,e(t,i))return t},i.getQueryElement=function(t){return"string"==typeof t?document.querySelector(t):t},i.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},i.filterFindElements=function(t,n){t=i.makeArray(t);var o=[];return t.forEach(function(t){if(t instanceof HTMLElement){if(!n)return void o.push(t);e(t,n)&&o.push(t);for(var i=t.querySelectorAll(n),r=0;r<i.length;r++)o.push(i[r])}}),o},i.debounceMethod=function(t,e,i){var n=t.prototype[e],o=e+"Timeout";t.prototype[e]=function(){var t=this[o];t&&clearTimeout(t);var e=arguments,r=this;this[o]=setTimeout(function(){n.apply(r,e),delete r[o]},i||100)}},i.docReady=function(t){var e=document.readyState;"complete"==e||"interactive"==e?setTimeout(t):document.addEventListener("DOMContentLoaded",t)},i.toDashed=function(t){return t.replace(/(.)([A-Z])/g,function(t,e,i){return e+"-"+i}).toLowerCase()};var n=t.console;return i.htmlInit=function(e,o){i.docReady(function(){var r=i.toDashed(o),s="data-"+r,a=document.querySelectorAll("["+s+"]"),h=document.querySelectorAll(".js-"+r),u=i.makeArray(a).concat(i.makeArray(h)),d=s+"-options",l=t.jQuery;u.forEach(function(t){var i,r=t.getAttribute(s)||t.getAttribute(d);try{i=r&&JSON.parse(r)}catch(a){return void(n&&n.error("Error parsing "+s+" on "+t.className+": "+a))}var h=new e(t,i);l&&l.data(t,o,h)})})},i}),function(t,e){"function"==typeof define&&define.amd?define("outlayer/item",["ev-emitter/ev-emitter","get-size/get-size"],e):"object"==typeof module&&module.exports?module.exports=e(require("ev-emitter"),require("get-size")):(t.Outlayer={},t.Outlayer.Item=e(t.EvEmitter,t.getSize))}(window,function(t,e){"use strict";function i(t){for(var e in t)return!1;return e=null,!0}function n(t,e){t&&(this.element=t,this.layout=e,this.position={x:0,y:0},this._create())}function o(t){return t.replace(/([A-Z])/g,function(t){return"-"+t.toLowerCase()})}var r=document.documentElement.style,s="string"==typeof r.transition?"transition":"WebkitTransition",a="string"==typeof r.transform?"transform":"WebkitTransform",h={WebkitTransition:"webkitTransitionEnd",transition:"transitionend"}[s],u={transform:a,transition:s,transitionDuration:s+"Duration",transitionProperty:s+"Property",transitionDelay:s+"Delay"},d=n.prototype=Object.create(t.prototype);d.constructor=n,d._create=function(){this._transn={ingProperties:{},clean:{},onEnd:{}},this.css({position:"absolute"})},d.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},d.getSize=function(){this.size=e(this.element)},d.css=function(t){var e=this.element.style;for(var i in t){var n=u[i]||i;e[n]=t[i]}},d.getPosition=function(){var t=getComputedStyle(this.element),e=this.layout._getOption("originLeft"),i=this.layout._getOption("originTop"),n=t[e?"left":"right"],o=t[i?"top":"bottom"],r=this.layout.size,s=-1!=n.indexOf("%")?parseFloat(n)/100*r.width:parseInt(n,10),a=-1!=o.indexOf("%")?parseFloat(o)/100*r.height:parseInt(o,10);s=isNaN(s)?0:s,a=isNaN(a)?0:a,s-=e?r.paddingLeft:r.paddingRight,a-=i?r.paddingTop:r.paddingBottom,this.position.x=s,this.position.y=a},d.layoutPosition=function(){var t=this.layout.size,e={},i=this.layout._getOption("originLeft"),n=this.layout._getOption("originTop"),o=i?"paddingLeft":"paddingRight",r=i?"left":"right",s=i?"right":"left",a=this.position.x+t[o];e[r]=this.getXValue(a),e[s]="";var h=n?"paddingTop":"paddingBottom",u=n?"top":"bottom",d=n?"bottom":"top",l=this.position.y+t[h];e[u]=this.getYValue(l),e[d]="",this.css(e),this.emitEvent("layout",[this])},d.getXValue=function(t){var e=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&!e?t/this.layout.size.width*100+"%":t+"px"},d.getYValue=function(t){var e=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&e?t/this.layout.size.height*100+"%":t+"px"},d._transitionTo=function(t,e){this.getPosition();var i=this.position.x,n=this.position.y,o=parseInt(t,10),r=parseInt(e,10),s=o===this.position.x&&r===this.position.y;if(this.setPosition(t,e),s&&!this.isTransitioning)return void this.layoutPosition();var a=t-i,h=e-n,u={};u.transform=this.getTranslate(a,h),this.transition({to:u,onTransitionEnd:{transform:this.layoutPosition},isCleaning:!0})},d.getTranslate=function(t,e){var i=this.layout._getOption("originLeft"),n=this.layout._getOption("originTop");return t=i?t:-t,e=n?e:-e,"translate3d("+t+"px, "+e+"px, 0)"},d.goTo=function(t,e){this.setPosition(t,e),this.layoutPosition()},d.moveTo=d._transitionTo,d.setPosition=function(t,e){this.position.x=parseInt(t,10),this.position.y=parseInt(e,10)},d._nonTransition=function(t){this.css(t.to),t.isCleaning&&this._removeStyles(t.to);for(var e in t.onTransitionEnd)t.onTransitionEnd[e].call(this)},d.transition=function(t){if(!parseFloat(this.layout.options.transitionDuration))return void this._nonTransition(t);var e=this._transn;for(var i in t.onTransitionEnd)e.onEnd[i]=t.onTransitionEnd[i];for(i in t.to)e.ingProperties[i]=!0,t.isCleaning&&(e.clean[i]=!0);if(t.from){this.css(t.from);var n=this.element.offsetHeight;n=null}this.enableTransition(t.to),this.css(t.to),this.isTransitioning=!0};var l="opacity,"+o(a);d.enableTransition=function(){if(!this.isTransitioning){var t=this.layout.options.transitionDuration;t="number"==typeof t?t+"ms":t,this.css({transitionProperty:l,transitionDuration:t,transitionDelay:this.staggerDelay||0}),this.element.addEventListener(h,this,!1)}},d.onwebkitTransitionEnd=function(t){this.ontransitionend(t)},d.onotransitionend=function(t){this.ontransitionend(t)};var c={"-webkit-transform":"transform"};d.ontransitionend=function(t){if(t.target===this.element){var e=this._transn,n=c[t.propertyName]||t.propertyName;if(delete e.ingProperties[n],i(e.ingProperties)&&this.disableTransition(),n in e.clean&&(this.element.style[t.propertyName]="",delete e.clean[n]),n in e.onEnd){var o=e.onEnd[n];o.call(this),delete e.onEnd[n]}this.emitEvent("transitionEnd",[this])}},d.disableTransition=function(){this.removeTransitionStyles(),this.element.removeEventListener(h,this,!1),this.isTransitioning=!1},d._removeStyles=function(t){var e={};for(var i in t)e[i]="";this.css(e)};var f={transitionProperty:"",transitionDuration:"",transitionDelay:""};return d.removeTransitionStyles=function(){this.css(f)},d.stagger=function(t){t=isNaN(t)?0:t,this.staggerDelay=t+"ms"},d.removeElem=function(){this.element.parentNode.removeChild(this.element),this.css({display:""}),this.emitEvent("remove",[this])},d.remove=function(){return s&&parseFloat(this.layout.options.transitionDuration)?(this.once("transitionEnd",function(){this.removeElem()}),void this.hide()):void this.removeElem()},d.reveal=function(){delete this.isHidden,this.css({display:""});var t=this.layout.options,e={},i=this.getHideRevealTransitionEndProperty("visibleStyle");e[i]=this.onRevealTransitionEnd,this.transition({from:t.hiddenStyle,to:t.visibleStyle,isCleaning:!0,onTransitionEnd:e})},d.onRevealTransitionEnd=function(){this.isHidden||this.emitEvent("reveal")},d.getHideRevealTransitionEndProperty=function(t){var e=this.layout.options[t];if(e.opacity)return"opacity";for(var i in e)return i},d.hide=function(){this.isHidden=!0,this.css({display:""});var t=this.layout.options,e={},i=this.getHideRevealTransitionEndProperty("hiddenStyle");e[i]=this.onHideTransitionEnd,this.transition({from:t.visibleStyle,to:t.hiddenStyle,isCleaning:!0,onTransitionEnd:e})},d.onHideTransitionEnd=function(){this.isHidden&&(this.css({display:"none"}),this.emitEvent("hide"))},d.destroy=function(){this.css({position:"",left:"",right:"",top:"",bottom:"",transition:"",transform:""})},n}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("outlayer/outlayer",["ev-emitter/ev-emitter","get-size/get-size","fizzy-ui-utils/utils","./item"],function(i,n,o,r){return e(t,i,n,o,r)}):"object"==typeof module&&module.exports?module.exports=e(t,require("ev-emitter"),require("get-size"),require("fizzy-ui-utils"),require("./item")):t.Outlayer=e(t,t.EvEmitter,t.getSize,t.fizzyUIUtils,t.Outlayer.Item)}(window,function(t,e,i,n,o){"use strict";function r(t,e){var i=n.getQueryElement(t);if(!i)return void(h&&h.error("Bad element for "+this.constructor.namespace+": "+(i||t)));this.element=i,u&&(this.$element=u(this.element)),this.options=n.extend({},this.constructor.defaults),this.option(e);var o=++l;this.element.outlayerGUID=o,c[o]=this,this._create();var r=this._getOption("initLayout");r&&this.layout()}function s(t){function e(){t.apply(this,arguments)}return e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e}function a(t){if("number"==typeof t)return t;var e=t.match(/(^\d*\.?\d*)(\w*)/),i=e&&e[1],n=e&&e[2];if(!i.length)return 0;i=parseFloat(i);var o=m[n]||1;return i*o}var h=t.console,u=t.jQuery,d=function(){},l=0,c={};r.namespace="outlayer",r.Item=o,r.defaults={containerStyle:{position:"relative"},initLayout:!0,originLeft:!0,originTop:!0,resize:!0,resizeContainer:!0,transitionDuration:"0.4s",hiddenStyle:{opacity:0,transform:"scale(0.001)"},visibleStyle:{opacity:1,transform:"scale(1)"}};var f=r.prototype;n.extend(f,e.prototype),f.option=function(t){n.extend(this.options,t)},f._getOption=function(t){var e=this.constructor.compatOptions[t];return e&&void 0!==this.options[e]?this.options[e]:this.options[t]},r.compatOptions={initLayout:"isInitLayout",horizontal:"isHorizontal",layoutInstant:"isLayoutInstant",originLeft:"isOriginLeft",originTop:"isOriginTop",resize:"isResizeBound",resizeContainer:"isResizingContainer"},f._create=function(){this.reloadItems(),this.stamps=[],this.stamp(this.options.stamp),n.extend(this.element.style,this.options.containerStyle);var t=this._getOption("resize");t&&this.bindResize()},f.reloadItems=function(){this.items=this._itemize(this.element.children)},f._itemize=function(t){for(var e=this._filterFindItemElements(t),i=this.constructor.Item,n=[],o=0;o<e.length;o++){var r=e[o],s=new i(r,this);n.push(s)}return n},f._filterFindItemElements=function(t){return n.filterFindElements(t,this.options.itemSelector)},f.getItemElements=function(){return this.items.map(function(t){return t.element})},f.layout=function(){this._resetLayout(),this._manageStamps();var t=this._getOption("layoutInstant"),e=void 0!==t?t:!this._isLayoutInited;this.layoutItems(this.items,e),this._isLayoutInited=!0},f._init=f.layout,f._resetLayout=function(){this.getSize()},f.getSize=function(){this.size=i(this.element)},f._getMeasurement=function(t,e){var n,o=this.options[t];o?("string"==typeof o?n=this.element.querySelector(o):o instanceof HTMLElement&&(n=o),this[t]=n?i(n)[e]:o):this[t]=0},f.layoutItems=function(t,e){t=this._getItemsForLayout(t),this._layoutItems(t,e),this._postLayout()},f._getItemsForLayout=function(t){return t.filter(function(t){return!t.isIgnored})},f._layoutItems=function(t,e){if(this._emitCompleteOnItems("layout",t),t&&t.length){var i=[];t.forEach(function(t){var n=this._getItemLayoutPosition(t);n.item=t,n.isInstant=e||t.isLayoutInstant,i.push(n)},this),this._processLayoutQueue(i)}},f._getItemLayoutPosition=function(){return{x:0,y:0}},f._processLayoutQueue=function(t){this.updateStagger(),t.forEach(function(t,e){this._positionItem(t.item,t.x,t.y,t.isInstant,e)},this)},f.updateStagger=function(){var t=this.options.stagger;return null===t||void 0===t?void(this.stagger=0):(this.stagger=a(t),this.stagger)},f._positionItem=function(t,e,i,n,o){n?t.goTo(e,i):(t.stagger(o*this.stagger),t.moveTo(e,i))},f._postLayout=function(){this.resizeContainer()},f.resizeContainer=function(){var t=this._getOption("resizeContainer");if(t){var e=this._getContainerSize();e&&(this._setContainerMeasure(e.width,!0),this._setContainerMeasure(e.height,!1))}},f._getContainerSize=d,f._setContainerMeasure=function(t,e){if(void 0!==t){var i=this.size;i.isBorderBox&&(t+=e?i.paddingLeft+i.paddingRight+i.borderLeftWidth+i.borderRightWidth:i.paddingBottom+i.paddingTop+i.borderTopWidth+i.borderBottomWidth),t=Math.max(t,0),this.element.style[e?"width":"height"]=t+"px"}},f._emitCompleteOnItems=function(t,e){function i(){o.dispatchEvent(t+"Complete",null,[e])}function n(){s++,s==r&&i()}var o=this,r=e.length;if(!e||!r)return void i();var s=0;e.forEach(function(e){e.once(t,n)})},f.dispatchEvent=function(t,e,i){var n=e?[e].concat(i):i;if(this.emitEvent(t,n),u)if(this.$element=this.$element||u(this.element),e){var o=u.Event(e);o.type=t,this.$element.trigger(o,i)}else this.$element.trigger(t,i)},f.ignore=function(t){var e=this.getItem(t);e&&(e.isIgnored=!0)},f.unignore=function(t){var e=this.getItem(t);e&&delete e.isIgnored},f.stamp=function(t){t=this._find(t),t&&(this.stamps=this.stamps.concat(t),t.forEach(this.ignore,this))},f.unstamp=function(t){t=this._find(t),t&&t.forEach(function(t){n.removeFrom(this.stamps,t),this.unignore(t)},this)},f._find=function(t){return t?("string"==typeof t&&(t=this.element.querySelectorAll(t)),t=n.makeArray(t)):void 0},f._manageStamps=function(){this.stamps&&this.stamps.length&&(this._getBoundingRect(),this.stamps.forEach(this._manageStamp,this))},f._getBoundingRect=function(){var t=this.element.getBoundingClientRect(),e=this.size;this._boundingRect={left:t.left+e.paddingLeft+e.borderLeftWidth,top:t.top+e.paddingTop+e.borderTopWidth,right:t.right-(e.paddingRight+e.borderRightWidth),bottom:t.bottom-(e.paddingBottom+e.borderBottomWidth)}},f._manageStamp=d,f._getElementOffset=function(t){var e=t.getBoundingClientRect(),n=this._boundingRect,o=i(t),r={left:e.left-n.left-o.marginLeft,top:e.top-n.top-o.marginTop,right:n.right-e.right-o.marginRight,bottom:n.bottom-e.bottom-o.marginBottom};return r},f.handleEvent=n.handleEvent,f.bindResize=function(){t.addEventListener("resize",this),this.isResizeBound=!0},f.unbindResize=function(){t.removeEventListener("resize",this),this.isResizeBound=!1},f.onresize=function(){this.resize()},n.debounceMethod(r,"onresize",100),f.resize=function(){this.isResizeBound&&this.needsResizeLayout()&&this.layout()},f.needsResizeLayout=function(){var t=i(this.element),e=this.size&&t;return e&&t.innerWidth!==this.size.innerWidth},f.addItems=function(t){var e=this._itemize(t);return e.length&&(this.items=this.items.concat(e)),e},f.appended=function(t){var e=this.addItems(t);e.length&&(this.layoutItems(e,!0),this.reveal(e))},f.prepended=function(t){var e=this._itemize(t);if(e.length){var i=this.items.slice(0);this.items=e.concat(i),this._resetLayout(),this._manageStamps(),this.layoutItems(e,!0),this.reveal(e),this.layoutItems(i)}},f.reveal=function(t){if(this._emitCompleteOnItems("reveal",t),t&&t.length){var e=this.updateStagger();t.forEach(function(t,i){t.stagger(i*e),t.reveal()})}},f.hide=function(t){if(this._emitCompleteOnItems("hide",t),t&&t.length){var e=this.updateStagger();t.forEach(function(t,i){t.stagger(i*e),t.hide()})}},f.revealItemElements=function(t){var e=this.getItems(t);this.reveal(e)},f.hideItemElements=function(t){var e=this.getItems(t);this.hide(e)},f.getItem=function(t){for(var e=0;e<this.items.length;e++){var i=this.items[e];if(i.element==t)return i}},f.getItems=function(t){t=n.makeArray(t);var e=[];return t.forEach(function(t){var i=this.getItem(t);i&&e.push(i)},this),e},f.remove=function(t){var e=this.getItems(t);this._emitCompleteOnItems("remove",e),e&&e.length&&e.forEach(function(t){t.remove(),n.removeFrom(this.items,t)},this)},f.destroy=function(){var t=this.element.style;t.height="",t.position="",t.width="",this.items.forEach(function(t){t.destroy()}),this.unbindResize();var e=this.element.outlayerGUID;delete c[e],delete this.element.outlayerGUID,u&&u.removeData(this.element,this.constructor.namespace)},r.data=function(t){t=n.getQueryElement(t);var e=t&&t.outlayerGUID;return e&&c[e]},r.create=function(t,e){var i=s(r);return i.defaults=n.extend({},r.defaults),n.extend(i.defaults,e),i.compatOptions=n.extend({},r.compatOptions),i.namespace=t,i.data=r.data,i.Item=s(o),n.htmlInit(i,t),u&&u.bridget&&u.bridget(t,i),i};var m={ms:1,s:1e3};return r.Item=o,r}),function(t,e){"function"==typeof define&&define.amd?define(["outlayer/outlayer","get-size/get-size"],e):"object"==typeof module&&module.exports?module.exports=e(require("outlayer"),require("get-size")):t.Masonry=e(t.Outlayer,t.getSize)}(window,function(t,e){var i=t.create("masonry");i.compatOptions.fitWidth="isFitWidth";var n=i.prototype;return n._resetLayout=function(){this.getSize(),this._getMeasurement("columnWidth","outerWidth"),this._getMeasurement("gutter","outerWidth"),this.measureColumns(),this.colYs=[];for(var t=0;t<this.cols;t++)this.colYs.push(0);this.maxY=0,this.horizontalColIndex=0},n.measureColumns=function(){if(this.getContainerWidth(),!this.columnWidth){var t=this.items[0],i=t&&t.element;this.columnWidth=i&&e(i).outerWidth||this.containerWidth}var n=this.columnWidth+=this.gutter,o=this.containerWidth+this.gutter,r=o/n,s=n-o%n,a=s&&1>s?"round":"floor";r=Math[a](r),this.cols=Math.max(r,1)},n.getContainerWidth=function(){var t=this._getOption("fitWidth"),i=t?this.element.parentNode:this.element,n=e(i);this.containerWidth=n&&n.innerWidth},n._getItemLayoutPosition=function(t){t.getSize();var e=t.size.outerWidth%this.columnWidth,i=e&&1>e?"round":"ceil",n=Math[i](t.size.outerWidth/this.columnWidth);n=Math.min(n,this.cols);for(var o=this.options.horizontalOrder?"_getHorizontalColPosition":"_getTopColPosition",r=this[o](n,t),s={x:this.columnWidth*r.col,y:r.y},a=r.y+t.size.outerHeight,h=n+r.col,u=r.col;h>u;u++)this.colYs[u]=a;return s},n._getTopColPosition=function(t){var e=this._getTopColGroup(t),i=Math.min.apply(Math,e);return{col:e.indexOf(i),y:i}},n._getTopColGroup=function(t){if(2>t)return this.colYs;for(var e=[],i=this.cols+1-t,n=0;i>n;n++)e[n]=this._getColGroupY(n,t);return e},n._getColGroupY=function(t,e){if(2>e)return this.colYs[t];var i=this.colYs.slice(t,t+e);return Math.max.apply(Math,i)},n._getHorizontalColPosition=function(t,e){var i=this.horizontalColIndex%this.cols,n=t>1&&i+t>this.cols;i=n?0:i;var o=e.size.outerWidth&&e.size.outerHeight;return this.horizontalColIndex=o?i+t:this.horizontalColIndex,{col:i,y:this._getColGroupY(i,t)}},n._manageStamp=function(t){var i=e(t),n=this._getElementOffset(t),o=this._getOption("originLeft"),r=o?n.left:n.right,s=r+i.outerWidth,a=Math.floor(r/this.columnWidth);a=Math.max(0,a);var h=Math.floor(s/this.columnWidth);h-=s%this.columnWidth?0:1,h=Math.min(this.cols-1,h);for(var u=this._getOption("originTop"),d=(u?n.top:n.bottom)+i.outerHeight,l=a;h>=l;l++)this.colYs[l]=Math.max(d,this.colYs[l])},n._getContainerSize=function(){this.maxY=Math.max.apply(Math,this.colYs);var t={height:this.maxY};return this._getOption("fitWidth")&&(t.width=this._getContainerFitWidth()),t},n._getContainerFitWidth=function(){for(var t=0,e=this.cols;--e&&0===this.colYs[e];)t++;return(this.cols-t)*this.columnWidth-this.gutter},n.needsResizeLayout=function(){var t=this.containerWidth;return this.getContainerWidth(),t!=this.containerWidth},i});
$(document).ready(function() {
$('.selectpicker').selectpicker({
 style:'btn-secondary btn-sm'
});
$('.selectpicker').selectpicker('refresh');


$("#selectPieces").on('change', function() {
	streams=$(this).val();
	random=$("#random").val();
	window.location.href="/?elements="+streams;
})
$(".broken-link").on('click', function() {
	id=$(this).attr('data-id');
	co=$(this);
	 $.ajax({
 				type: "post",
 				url: "/scripts/php/brokenLink.php",
				data: {id:id, sid:'<?=$sid?>',xdbf:'<?=$xdbf?>'},
				dataType: 'json',
				beforeSend: function() {
					co.remove();
 				},
				success: function(dane1){
 }} );


})
})
function sendForm() {

	 var dane=$("#dodajForm").serialize()+'&funkcja=useradd&sid=<?php echo $sid; ?>&xdbf=<?php echo $xdbf; ?>';

 $.ajax({
 				type: "post",
 				url: "/scripts/php/userAdd.php",
				data: dane,
				dataType: 'json',
				beforeSend: function() {
					  					$("#dodajModalBody").addClass('bg-success text-white').html('Twoja transmisja została wysłana. <br/>Opublikujemy ją po akceptacji moderatora<br/>Dziękujemy, że jesteś z nami.').css({'padding':'20px', 'text-align':'center'});

 				},
				success: function(dane1){
  					$("#dodajModalBody").addClass('bg-success text-white').html('Twoja transmisja została wysłana. <br/>Opublikujemy ją po akceptacji moderatora<br/>Dziękujemy, że jesteś z nami.').css({'padding':'20px', 'text-align':'center'});

 }} );





}

</script>