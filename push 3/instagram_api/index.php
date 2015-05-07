<!-- CLIENT ID	e08ce2df8ef543ff9225ec4a797dd8b9
CLIENT SECRET	95aefc70205c446ab28d5623342313f1
WEBSITE URL	http://localhost:8888/appacademyapi/index.php
REDIRECT URI	http://localhost:8888/appacademyapi/index.php
 -->

<?php  
//Configuraton for our php Server
set_time_limit(0);
ini_set('default_socket_time', 300);
session_start();

//Make constants using define
define('client_ID','e08ce2df8ef543ff9225ec4a797dd8b9');
define('client_Secret','e08ce2df8ef543ff9225ec4a797dd8b9');
define('redirectURI', 'http://localhost:8888/appacademyapi/index.php');
define('ImageDirectory', 'pics/');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- Creating a login for people to go and give approval for our web app to access their Instagram account 
	After getting approval we are now going to have the information so that we can play with it
-->
<a href="https:api.instagam/oauth/authorize/?client_id=<?php echo client_ID;?>&redirect_uri=<?php echo redirect_URI;?>&response_type=code">Login!</a>

<script type="js/main.js"></script>
</body>
</html>