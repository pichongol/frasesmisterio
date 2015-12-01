<?php
define('FACEBOOK_SDK_V4_SRC_DIR', 'lib/fb-php-sdk/src/Facebook/');
require __DIR__ . '/lib/fb-php-sdk/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

if( !isset($_SESSION['access_token']) && !isset($_GET['code']) ){
	die(header("Location: /"));
}

// mysql
$dbConn = @mysql_connect($host, $user, $password);
mysql_select_db($database,$dbConn);
mysql_set_charset("utf8",$dbConn);

FacebookSession::setDefaultApplication($app_id, $app_secret);
$helper = new FacebookRedirectLoginHelper($callback_url);

$auxUri = explode("?", $_SERVER['REQUEST_URI']);

if(isset($auxUri[1])){
    $auxUri = explode("&", $auxUri[1]);

    $auxParams = array();
    foreach ($auxUri as $value) {
        $auxValue = explode("=", $value);
        $auxParams[$auxValue[0]] = $auxValue[1];
    }
    $_GET['code'] = $auxParams['code'];
    $_GET['state'] = $auxParams['state'];
}

if(isset($_GET['code'])){
	try {
	    if(isset($_SESSION['access_token'])){
	        $session = new FacebookSession($_SESSION['access_token']);
	        $accessToken = $_SESSION['access_token'];
	    }
	    else {
	        $session = $helper->getSessionFromRedirect();

	        if(!$session){
	            die(header("Location: /"));
	        }

			$longLivedSession = $session->getLongLivedSession($app_id, $app_secret);
        	$accessToken = $longLivedSession->getAccessToken();
        	$_SESSION['access_token'] = $accessToken->__toString();

			//$userId = $session->getSessionInfo()->asArray()['user_id'];

			$request = new FacebookRequest(
			    $session,
			    'GET',
			    '/me',
			    array (
			       'redirect' => false,
			       //'type'     => 'large'
			       'height' => 300,
			       'width' => 300
			    )
			);
			$response = $request->execute();
			$graphObject = $response->getGraphObject();
			$userData = $graphObject->asArray();

			$uid = $userData['id'];
			$name = $userData['name'];
			$email = isset($userData['email']) ? $userData['email'] : '';

			$sql = "SELECT * FROM users WHERE uid = '$uid'";
        	$r_count = mysql_query($sql, $dbConn) or die(mysql_error($dbConn));
			$count = mysql_num_rows($r_count);

			if(!$count){
	        	$sql = "INSERT INTO users (uid,email,name,access_token,registered_date,last_post_date)
	        			VALUES('$uid', '$email', '$name', '$accessToken', NOW(), null)";
	        	mysql_query($sql, $dbConn) or die(mysql_error($dbConn));
			}
			else {
	        	$sql = "UPDATE users SET access_token = '$accessToken', updated_date = NOW() WHERE uid = '$uid'";
	        	mysql_query($sql, $dbConn) or die(mysql_error($dbConn));	
			}

	        //$accessToken = $session->getAccessToken();
	        //$_SESSION['access_token'] = $accessToken->__toString();
	    }

	} catch(FacebookRequestException $ex) {
	    //echo $ex->getMessage();
	    die(header("Location: /"));
	} catch(\Exception $ex) {
	    //echo $ex->getMessage();
	    die(header("Location: /"));
	}
}



$scope = array('publish_actions');
$loginUrl = $helper->getLoginUrl($scope);
?>