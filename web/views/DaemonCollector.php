<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TestKit import</title>
	
<script>
var myWindow1;
var myWindow2;
var count = 0;
function openWin() {
	if (count==0){
    myWindow1 = window.open("Subscription.php", "", "width=800, height=200");
	setTimeout(closeWin, 1) 		
		
	}
	else{
    myWindow2 = window.open("Subscription.php", "", "width=200, height=800");
	setTimeout(closeWin, 1)
	  
	}

}

function closeWin() {
	if (count==0){
    myWindow1.close();	
count = 1;
	}
	else{
   myWindow2.close();		
	count = 0;
	}
    
}
</script>
<script src='https://api.cloudmqtt.com/sso/js/mqttws31.js' type='text/javascript'></script>	
 </head>
 
 
 <body>
 <!--What this page is doing :
  ==================================================

 -->
 
 
    <!-- Page Content
	It is necessary to use localhost to provide an access to the net and access to the MQTT Broker
    ================================================== -->
	
	
	<a>First of all clic <a href="http://localhost:8080/">here</a></a>
	
  	<h1>The Daemon will send data to the database since you click the button below</h1>
		<input type="button" value="Start Receiving Data" onclick="openWin();myVar = setInterval(openWin, 29000)" />
		
 </body>
</html>