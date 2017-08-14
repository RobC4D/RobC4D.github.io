<?php
$vHost="ec2-54-247-81-76.eu-west-1.compute.amazonaws.com";
// NOM DE LA BASE DE DONNEES A MODIFIER AVEC LE VOTRE
$vDbname="dfde3ivcigo084";
$vUser="bqbcuowqpsqqei";
$vPassword="774600e181c3e0e50347e37fcbc18001cd60483fd0a70ba04de3b1ca660e5c3c";
$vConn = mysqli_connect($vHost,$vUser,$vPassword,$vDbname);
mysqli_query($vConn, "SET NAMES UTF8");
?>