<?php 
//Permet de se connecte a la base de donnée???????????
$hostname='localhost';
$database='clubelit_bd';
$username='root';
$password='';
$connexion=mysql_pconnect($hostname,
$username,$password)or die(mysql_error());
mysql_select_db($database,$connexion);
?>