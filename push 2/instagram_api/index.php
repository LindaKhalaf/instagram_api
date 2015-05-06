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
define('client_id','e08ce2df8ef543ff9225ec4a797dd8b9');
define('client_secret','e08ce2df8ef543ff9225ec4a797dd8b9');
define('redirectURI', 'http://localhost:8888/appacademyapi/index.php');
define('ImageDirectory', 'pics/');

?>