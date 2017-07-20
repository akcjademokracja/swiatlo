<?php 

define('ADRES',''.$_SERVER['MYSQL_HOST'].'');
define('UZYTKOWNIK','scianaswiatla');
define('HASLO_DO_BAZY',''.$_SERVER['MYSQL_PASS'].'');
define('BAZA','scianaswiatla'); 

$b2za=mysqli_connect(ADRES,UZYTKOWNIK,HASLO_DO_BAZY,BAZA);
mysqli_query($b2za,"SET NAMES utf8;");
mysqli_query($b2za, "SET lc_time_names = 'pl_PL'")?>