<?php ini_set('session.cookie_domain', ".lancuchswiatla.pl"); 

session_id($_POST['sid']);
session_start();
  $xdbf=$_POST['xdbf']; 
  
if ((isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
          $_SERVER['HTTP_X_REQUESTED_WITH']  == 'XMLHttpRequest') && (isset($_SESSION['Config']['userAgent']) && ($_SESSION['Config']['userAgent'])==$xdbf)) {
           
          } else { echo 'nie';
 
	          return;
          }
          ?>