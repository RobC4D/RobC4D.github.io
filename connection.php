<?php
$vHost="localhost:3307";
// NOM DE LA BASE DE DONNEES A MODIFIER AVEC LE VOTRE
$vDbname="testkit";
$vUser="root";
$vPassword="root";
$vConn = mysqli_connect($vHost,$vUser,$vPassword,$vDbname);
mysqli_query($vConn, "SET NAMES UTF8");
?>