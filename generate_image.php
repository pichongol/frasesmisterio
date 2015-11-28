<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

if(!isset($_SESSION)) { 
      session_start(); 
}

//print_r($_GET); exit;

$testName = isset($_GET['testname']) ? $_GET['testname'] : null;
$id = isset($_GET['id']) ? $_GET['id'] : null;
$name = isset($_GET['name']) ? $_GET['name'] : null;
$gender = isset($_GET['gender']) ? $_GET['gender'] : null;
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

require_once("lib/functions.php");
include("config.php");
$settings = $$testName;

require __DIR__ . '/lib/aws/aws-autoloader.php';
define('FACEBOOK_SDK_V4_SRC_DIR', 'lib/fb-php-sdk/src/Facebook/');
require __DIR__ . '/lib/fb-php-sdk/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

FacebookSession::setDefaultApplication($settings['app_id'], $settings['app_secret']);

if(isset($_SESSION['access_token'])){
      try {
        $session = new FacebookSession($_SESSION['access_token']);
        $accessToken = $_SESSION['access_token'];
      } catch(FacebookRequestException $ex) {
        echo $ex->getMessage();
      } catch(\Exception $ex) {
        echo $ex->getMessage();
      }
}

if(isset($session)) {
    try {
      $facebookUserId = $session->getSessionInfo()->asArray()['user_id'];
    } catch (FacebookRequestException $e) {
        echo $e->getMessage();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

$imgServerIdx = rand(1, $imgServers);
$imgServer = ($imgServerIdx == 1) ? "www" : "www".$imgServerIdx;
$imgServer = "http://".$imgServer.".".$domain;

$share = _tb('compartir');

if( ($settings['type'] == "nombrefecha") || ($settings['type'] == "nombrehorario") || ($settings['type'] == "multiplechoisenombrefecha") || ($settings['type'] == "nombretexto") || ($settings['type'] == "ooh") ){
  $testSrc = $imgServer."/images/{$lang}/{$testName}/{$name}/{$id}.png";
  $shareURL = "http://www.{$domain}/$testName/$share/$name/$id";
}
elseif( ($settings['type'] == "nombresexo") ){
  $testSrc = $imgServer."/images/{$lang}/{$testName}/{$name}/{$id}/{$gender}.png";
  $shareURL = "http://www.{$domain}/$testName/$share/$name/$id/$gender";
}
elseif(($settings['type'] == "apps") || ($settings['type'] == "appsfechaambos")){
  $auxUri = explode("?", $_SERVER['REQUEST_URI']);
  //$testSrc = "/images/{$lang}/{$testName}/{$facebookUserId}.png";
  //$shareURL = "http://www.{$domain}/$testName/compartir/{$facebookUserId}";

  $testSrc = $imgServer."/images/{$lang}/{$testName}/%%facebookUserId%%.png";
  $shareURL = "http://www.{$domain}/$testName/$share/%%facebookUserId%%";
}
else {
  $testSrc = $imgServer."/images/{$lang}/{$testName}/r{$id}.png";
  $shareURL = "http://www.{$domain}/$testName/$share/$id";
}

//Set the Content Type
header('Content-type: image/jpeg');

// Create Image From Existing File
if($settings['type'] == "nombresexo"){
      $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$id}{$gender}.png");
}
elseif($settings['type'] == "nombretexto"){
      $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r.png");
}
else {
      $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$id}.png");
}

// Set Text to Be Printed On Image
$name = str_replace("-", " ", $name);
$text = ucwords($name);

if($testName == "lapida"){
      $x = 400 - (strlen($name) * 16);
      $black = imagecolorallocate($png_image, 73, 68, 64);
      $font_path = 'fonts/palar.ttf';
      imagettftext($png_image, 50, 0, $x, 100, $black, $font_path, $text);
}
elseif($testName == "significado"){
      $x = 400 - (strlen($name) * 16);
      $white = imagecolorallocate($png_image, 255, 255, 255);
      $font_path = 'fonts/harlowsi.ttf';
      imagettftext($png_image, 32, 0, $x, 80, $white, $font_path, $text);     
}
elseif($testName == "nacimiento"){
      $x = 450 - (strlen($name) * 16);
      $white = imagecolorallocate($png_image, 255, 255, 255);
      $font_path = 'fonts/bgothm.ttf';
      imagettftext($png_image, 32, 0, $x, 180, $white, $font_path, $text);     
}
elseif(($testName == "opinan") || ($testName == "falam") || ($testName == "amigos")){
      switch($testName){
            case "opinan": 
                  $x = 480;
                  break;
            case "falam":
                  $x = 470;
                  break;
            case "amigos":
                  $x = 520;
                  break;
      }
      $black = imagecolorallocate($png_image, 73, 68, 64);
      $font_path = 'fonts/gautamib.ttf';
      imagettftext($png_image, 32, 0, $x, 130, $black, $font_path, $text);     
}
elseif($testName == "whatsapp"){
      $x = 365;
      $green = imagecolorallocate($png_image, 14, 144, 130);
      $font_path = 'fonts/gautamib.ttf';
      imagettftext($png_image, 30, 0, $x, 150, $green, $font_path, $text);     
}
elseif($testName == "emoticon"){
      $x = 42;
      $green = imagecolorallocate($png_image, 14, 144, 130);
      $font_path = 'fonts/gautamib.ttf';
      imagettftext($png_image, 30, 0, $x, 150, $green, $font_path, $text);     
}
elseif($testName == "emoticon"){
      $x = 42;
      $green = imagecolorallocate($png_image, 14, 144, 130);
      $font_path = 'fonts/gautamib.ttf';
      imagettftext($png_image, 30, 0, $x, 150, $green, $font_path, $text);     
}
elseif($testName == "emocion"){
      $x = 480;
      $white = imagecolorallocate($png_image, 255, 255, 255);
      $font_path = 'fonts/flyerfonts-insideout.ttf';
      imagettftext($png_image, 30, 0, $x, 47, $white, $font_path, $text);     
}
elseif($testName == "avengers"){
      $x = 120;
      $white = imagecolorallocate($png_image, 255, 220, 0);
      $font_path = 'fonts/futura-italic.ttf';
      imagettftext($png_image, 30, 0, $x, 105, $white, $font_path, $text);
}
elseif($testName == "google"){
      $black = imagecolorallocate($png_image, 73, 68, 64);
      $font_1 = 'fonts/gautami.ttf';
      $font_2 = 'fonts/gautamib.ttf';

      $texts = explode("|", $settings['results'][$id]['desc']);

      $y = 155;
      $name = $text;
      $x = 30;
      imagettftext($png_image, 25, 0, $x, $y, $black, $font_1, $name);
      foreach ($texts as $text) {
            $y+=40;
            $x = 30;
            imagettftext($png_image, 25, 0, $x, $y, $black, $font_2, $name." ".$text);
      }
}
elseif($testName == "aura"){
      $x = 350 - (strlen($name) * 4);
      $black = imagecolorallocate($png_image, 73, 68, 64);
      $font_path = 'fonts/lfax.ttf';
      imagettftext($png_image, 30, 0, $x, 58, $black, $font_path, $text);     
}
elseif($testName == "sientes"){
      $x = 330 - (strlen($name) * 10);
      $black = imagecolorallocate($png_image, 73, 68, 64);
      $font_path = 'fonts/gautamib.ttf';
      imagettftext($png_image, 40, 0, $x, 130, $black, $font_path, $text);     
}
elseif($testName == "poema"){
      $x = 70;
      $black = imagecolorallocate($png_image, 203, 2, 1);
      $font_path = 'fonts/itckrist.ttf';
      imagettftext($png_image, 26, 0, $x, 130, $black, $font_path, $text);     
}
elseif($testName == "amor"){
      $x = 400 - (strlen($name) * 11);
      $black = imagecolorallocate($png_image, 203, 2, 1);
      $font_path = 'fonts/segoepr.ttf';
      imagettftext($png_image, 26, 0, $x, 150, $black, $font_path, $text);     
}
elseif($testName == "espejito"){
      $x = 400 - (strlen($name) * 11);
      $black = imagecolorallocate($png_image, 255, 245, 0);
      $font_path = 'fonts/hobostd.otf';
      imagettftext($png_image, 26, 0, $x, 150, $black, $font_path, $text);
}
elseif($testName == "angel"){
      $x = 220;
      $color = imagecolorclosest($png_image, 16, 16, 15);
      $font_path = 'fonts/rage.ttf';
      imagettftext($png_image, 40, 0, $x, 110, $color, $font_path, $text);
}
elseif($testName == "bola"){
      $x = 250 - (strlen($name) * 6);
      $color = imagecolorclosest($png_image, 16, 16, 15);
      $font_path = 'fonts/charlemagnestd-bold.otf';
      imagettftext($png_image, 14, 0, $x, 250, $color, $font_path, $text);
}
elseif($testName == "sabios"){
      $x = 450 - (strlen($name) * 6);
      $color = imagecolorclosest($png_image, 255, 242, 0);
      $font_path = 'fonts/acaslonprobold.otf';
      imagettftext($png_image, 38, 0, $x, 145, $color, $font_path, $text);
}
elseif($testName == "biblico"){
      $x = 350 - (strlen($name) * 10);
      $color = imagecolorclosest($png_image, 16, 16, 15);
      $font_path = 'fonts/greatday.ttf';
      imagettftext($png_image, 60, 0, $x, 180, $color, $font_path, $text);
}
elseif($testName == "mentales"){
      $x = 144;
      $color = imagecolorallocate($png_image, 203, 2, 1);
      $font_path = 'fonts/acaslonprobold.otf';
      imagettftext($png_image, 40, 0, $x, 130, $color, $font_path, $text);
}
elseif($testName == "destinos"){
      $x = 350 - (strlen($name) * 14);
      $color = imagecolorallocate($png_image, 0, 0, 0);
      $font_path = 'fonts/bgothm.ttf';
      imagettftext($png_image, 40, 0, $x, 44, $color, $font_path, $text);
}
elseif($testName == "nombrenumero"){
      $x = 380 - (strlen($name) * 14);
      $color = imagecolorallocate($png_image, 255, 255, 255);
      $font_path = 'fonts/arialroundedmtbold.ttf';
      imagettftext($png_image, 40, 0, $x, 56, $color, $font_path, $text);
}
elseif($testName == "secretos"){
      $x = 20;
      $color = imagecolorallocate($png_image, 0, 0, 0);
      $font_path = 'fonts/Montserrat-Bold.ttf';
      $text = "¿Qué secreto oculta {$text}?";
      imagettftext($png_image, 30, 0, $x, 50, $color, $font_path, $text);
}

// Send Image to Browser
imagepng($png_image);

// Clear Memory
imagedestroy($png_image);

// post test
if(isset($accessToken)){
      $description = str_replace("#nombre", $name, $settings['share_msg']);

      // country
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
        $country = geoip_country_code_by_name($ip);
      }

      $randShare = rand(0, 100);
      $randShare = 0;

      if($randShare > 60){
        // post test
        if($country == "US"){
          $post = array (
              "access_token" => $accessToken,
              "message" => "",
              "name" => utf8_encode("Which Game Of Thrones Character are you?"),
              "link" => "http://www.minitests.net/got/",
              "picture" => "http://www.minitests.net/images/en/got/s.png",
              "description" => utf8_encode("Which Game Of Thrones Character are you?"),
              "caption" => "MINITESTS.COM",
          );
        }
        else {
          $post = array (
              "access_token" => $accessToken,
              "message" => "",
              "name" => utf8_encode($settings['title']),
              "link" => $shareURL,
              "picture" => $testSrc,
              "description" => utf8_encode($description),
              "caption" => ucfirst($domain),
          );
        }

        /*
        $post = array (
            "access_token" => $accessToken,
            "message" => "",
            "name" => utf8_encode($settings['title']),
            "link" => $shareURL,
            "picture" => $testSrc,
            "description" => utf8_encode($description),
            "caption" => ucfirst($domain),
        );
        */

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v2.2/{$facebookUserId}/feed");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);
        unset($ch);

        $res = json_decode($result);
        $fb_id = $res->id;
        $post = array (
          "access_token" => $accessToken,
          "timeline_visibility" => "hidden"
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v2.2/{$fb_id}");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $res = curl_exec($ch);
        curl_close($ch);
        unset($ch);
      }
}
?> 
