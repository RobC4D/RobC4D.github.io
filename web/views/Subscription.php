 <?php
 // subscribe.php
  require("phpMQTT.php");
  
  $host = "m20.cloudmqtt.com"; 
  $port = 14152;
  $username = "Database"; 
  $password = "Database"; 

  $mqtt = new phpMQTT($host, $port, "ClientID".rand()); 
 
  if(!$mqtt->connect(true,NULL,$username,$password)){
    exit(1);
  }

  //currently subscribed topics
  $topics['sensor/#'] = array("qos"=>0, "function"=>"procmsg");
  $mqtt->subscribe($topics,0);

  while($mqtt->proc()){        
  }

  $mqtt->close();
  function procmsg($topic,$msg){
	include('connection.php');
	
	$Tpos=strpos($msg, "T");
	$Hpos=strpos($msg, "H");
	$Mpos=strpos($msg, "M");
	$T=(int)substr($msg, 0, $Tpos);
	$H=(int)substr($msg, $Tpos+1, $Hpos-$Tpos-1);
	$M=(int)substr($msg, $Hpos+1, $Mpos-$Hpos-1);
	$S=(int)substr($msg, $Mpos+1);
	if ($topic=='sensor/kit1/T'){
		$vSql ="INSERT INTO `testkit`.`temperature` (`Value_T`, `kit_ID`, `ID_T`, `heure`, `minute`, `second`) VALUES ('$T', '1', NULL, '$H', '$M', '$S');";
		$vQuery=mysqli_query($vConn,$vSql);
	}
	

  }
  ?>