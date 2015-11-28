<?php
define('FACEBOOK_SDK_V4_SRC_DIR', 'lib/fb-php-sdk/src/Facebook/');
require __DIR__ . '/lib/fb-php-sdk/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

FacebookSession::setDefaultApplication($settings['app_id'], $settings['app_secret']);
$helper = new FacebookRedirectLoginHelper($settings['callback_url']);

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

try {
    if(isset($_SESSION['access_token'])){
        $session = new FacebookSession($_SESSION['access_token']);
        $accessToken = $_SESSION['access_token'];
    }
    else {
        $session = $helper->getSessionFromRedirect();

        if(!$session){
            die(header("Location: /{$testName}/"));
        }

        $accessToken = $session->getAccessToken();
        $_SESSION['access_token'] = $accessToken->__toString();
    }

} catch(FacebookRequestException $ex) {
    //echo $ex->getMessage();
    die(header("Location: /{$testName}/"));
} catch(\Exception $ex) {
    //echo $ex->getMessage();
    die(header("Location: /{$testName}/"));
}

if ($session) {
    try {
        $facebookUserId = $session->getSessionInfo()->asArray()['user_id'];

        $testSrc = str_replace("%%facebookUserId%%", $facebookUserId, $testSrc);
        $shareURL = str_replace("%%facebookUserId%%", $facebookUserId, $shareURL);

        $ip = '';
        $country = '';
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != '') {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER["REMOTE_ADDR"])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($ip)) {
          $country = @geoip_country_code_by_name($ip);
        }

        if (empty($country)) {
          $country = 'CL';
        }

        $data = array();
        $data['uid'] = $facebookUserId;
        $data['access_token'] = $accessToken;
        $data['app_id'] = $settings['app_id'];
        $data['country'] = $country;

        if($videoSite){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "{$videoSite}/ajax/poster.php");
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
        }

    } catch (FacebookRequestException $e) {
        echo $e->getMessage();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}
?>
