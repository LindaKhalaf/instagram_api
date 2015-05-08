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
define('clientID','e08ce2df8ef543ff9225ec4a797dd8b9');
define('client_Secret','e08ce2df8ef543ff9225ec4a797dd8b9');
define('redirectURI', 'http://localhost:8888/appacademyapi/index.php?code=CODE');
define('ImageDirectory', 'pics/');

if (isset($_GET['code'])){
	$code = ($_GET['code']);
	$url = 'https://api.instagram.com/oauth/access_token';
	$access_token_settings = array('client_id' => clientID,
									'client_secret' => clientSecret,
									'grant_type' => 'authorization_code',
									'redirect_uri' => redirectURI,
									'code' => $code);
}
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
<a href="https:api.instagram.com/oauth/authorize/?client_id=<?php echo clientID;?>&redirect_uri=<?php echo redirectURI;?>&response_type=code">Login!</a>

<script type="js/main.js"></script>
</body>
</html>