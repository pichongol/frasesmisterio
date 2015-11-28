<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

if(!isset($_SESSION)) { 
      session_start(); 
}

$testName = isset($_GET['testname']) ? $_GET['testname'] : null;
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

include("config.php");
$settings = $$testName;

$imgServerIdx = rand(1, $imgServers);
$imgServer = ($imgServerIdx == 1) ? "www" : "www".$imgServerIdx;
$imgServer = "http://".$imgServer.".".$domain;

if( ($settings['type'] == "nombrefecha") || ($settings['type'] == "nombrehorario") || ($settings['type'] == "multiplechoisenombrefecha") || ($settings['type'] == "nombretexto") ){
  $testSrc = $imgServer."/images/{$language}/{$testName}/{$name}/{$id}.png";
  $shareURL = "http://www.{$domain}/$testName/compartir/$name/$id";
}
elseif( ($settings['type'] == "nombresexo") ){
  $testSrc = $imgServer."/images/{$language}/{$testName}/{$name}/{$id}/{$gender}.png";
  $shareURL = "http://www.{$domain}/$testName/compartir/$name/$id/$gender";
}
elseif(($settings['type'] == "apps") || ($settings['type'] == "appsfechaambos") || ($settings['type'] == "signosapp")){
  $auxUri = explode("?", $_SERVER['REQUEST_URI']);
  //$testSrc = "/images/{$language}/{$testName}/{$facebookUserId}.png";
  //$shareURL = "http://www.{$domain}/$testName/compartir/{$facebookUserId}";

  $testSrc = $imgServer."/images/{$language}/{$testName}/%%facebookUserId%%.png";
  $shareURL = "http://www.{$domain}/$testName/compartir/%%facebookUserId%%";
}
else {
  $testSrc = $imgServer."/images/{$language}/{$testName}/r{$id}.png";
  $shareURL = "http://www.{$domain}/$testName/compartir/$id";
}

$passCache = false;
$auxUrl = explode("/", $_SERVER['SCRIPT_URL']);
if(strpos($auxUrl[4], "-pc") !== FALSE){
  $passCache = true;
  $auxUrl[4] = str_replace("-pc", "", $auxUrl[4]);
}

require __DIR__ . '/lib/aws/aws-autoloader.php';
define('FACEBOOK_SDK_V4_SRC_DIR', 'lib/fb-php-sdk/src/Facebook/');
require __DIR__ . '/lib/fb-php-sdk/autoload.php';

define('AWS_KEY', 'AKIAJDTC4J4MDAZBRLIA');
define('AWS_SECRET', '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');

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

$sharedConfig = [
    'region'  => 'us-west-2',
    'version' => 'latest',
    'credentials' => array(
      'key' => AWS_KEY,
      'secret'  => AWS_SECRET,
    )
];
$sdk = new Aws\Sdk($sharedConfig);
$s3Client = $sdk->createS3();

if(!$passCache){
  try {
    $result = $s3Client->getObject([
        'Bucket' => $bucketName,
        'Key'    => "images/es/{$testName}/results/{$auxUrl[4]}"
    ]);

    $file = $result['Body'];
    header('Content-type: image/jpeg');
    die($file);

  } catch (Aws\S3\Exception\S3Exception $e) {
      //echo $e->getMessage();
  } catch (AwsException $e) {
      //echo $e->getAwsRequestId() . "\n";
      //echo $e->getAwsErrorType() . "\n";
      //echo $e->getAwsErrorCode() . "\n";
  }
}

FacebookSession::setDefaultApplication($settings['app_id'], $settings['app_secret']);

try {
  $session = new FacebookSession($_SESSION['access_token']);
  $accessToken = $_SESSION['access_token'];
} catch(FacebookRequestException $ex) {
  echo $ex->getMessage();
} catch(\Exception $ex) {
  echo $ex->getMessage();
}

if ($session) {
    try {
      $facebookUserId = $session->getSessionInfo()->asArray()['user_id'];

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

      $gender = isset($userData['gender']) ? $userData['gender'] : '';
      $firstName = isset($userData['first_name']) ? $userData['first_name'] : '';
      $name = $userData['name'];
      $id = $userData['id'];

      if($testName == "wikipedia"){
        $imageWidth = 300;
        $imageHeigth = 300;
      }
      elseif($testName == "diosito") {
        $imageWidth = 135;
        $imageHeigth = 135;
      }
      elseif($testName == "persona"){
        $imageWidth = 100;
        $imageHeigth = 100;
      }
      elseif($testName == "busca"){
        $imageWidth = 122;
        $imageHeigth = 122;
      }
      elseif($testName == "sexy"){
        $imageWidth = 200;
        $imageHeigth = 200;
      }
      elseif($testName == "numerologia"){
        $imageWidth = 170;
        $imageHeigth = 170;
      }
      elseif($testName == "depara"){
        $imageWidth = 180;
        $imageHeigth = 180;
      }
      elseif($testName == "horoscopo"){
        $imageWidth = 125;
        $imageHeigth = 125;
      }
      elseif($testName == "dios"){
        $imageWidth = 125;
        $imageHeigth = 125;
      }
      elseif($testName == "navidad"){
        $imageWidth = 130;
        $imageHeigth = 130;
      }

      $request = new FacebookRequest(
            $session,
            'GET',
            '/me/picture',
            array (
               'redirect' => false,
               //'type'     => 'large'
               'height' => $imageHeigth,
               'width' => $imageWidth
            )
      );
      $response = $request->execute();
      $graphObject = $response->getGraphObject();
      $data = $graphObject->asArray();
      $fb_image = imagecreatefromjpeg($data['url']);

      //Set the Content Type
      header('Content-type: image/jpeg');

      // Create Image From Existing File
      if($testName == "wikipedia"){
        if($gender == "female"){
              $sufix = "m";
        }
        else {
              $sufix = "h";     
        }

        $rand = rand(1,count($settings['results']));
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}{$sufix}.png");

        // superpose images
        imagecopymerge($png_image, $fb_image, 738, 150, 0, 0, 258, 260, 100);

        // Set Text to Be Printed On Image
        $x = 900 - (strlen($firstName) * 14);
        $black = imagecolorallocate($png_image, 0, 0, 0);
        $font_path = 'fonts/arialbd.ttf';
        imagettftext($png_image, 14, 0, $x, 140, $black, $font_path, $firstName);

        $x = 195;
        $black = imagecolorallocate($png_image, 0, 0, 0);
        $font_path = 'fonts/georgia.ttf';
        imagettftext($png_image, 22, 0, $x, 130, $black, $font_path, $name);

        $x = 195;
        $black = imagecolorallocate($png_image, 0, 0, 0);
        $font_path = 'fonts/georgia.ttf';
        imagettftext($png_image, 20, 0, $x, 368, $black, $font_path, "Logros");
        $bg = $png_image;
      }
      elseif($testName == "diosito") {
        $rand = rand(1,count($settings['results']));
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 614, 238, 0, 0, 135, 135, 100);
      }
      elseif($testName == "persona") {
        $rand = rand(1,count($settings['results']));
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 237, 120, 0, 0, 100, 100, 100);
      }
      elseif($testName == "busca") {
        $rand = rand(1,count($settings['results']));
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 112, 97, 0, 0, 122, 122, 100);

        $x = 250;
        $white = imagecolorallocate($bg, 255, 255, 255);
        $font_path = 'fonts/rocc.ttf';
        imagettftext($bg, 32, 0, $x, 140, $white, $font_path, $name);
      }
      elseif($testName == "sexy") {
        $rand = rand(1,count($settings['results']));
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 47, 47, 0, 0, 202, 202, 100);

        $x = 140 - (strlen($firstName) * 6);
        $white = imagecolorallocate($bg, 187, 0, 0);
        $font_path = 'fonts/arialroundedmtbold.ttf';
        imagettftext($bg, 20, 0, $x, 280, $white, $font_path, $firstName);
      }
      elseif($testName == "numerologia") {
        $data = $_COOKIE['data'];
        $data = (array)json_decode($data);
        $sum = (String)array_sum($data);

        $sumAux = 0;
        for ($i=0; $i < strlen($sum); $i++) {
          $sumAux += $sum[$i];
        }

        $sum = (String)$sumAux;
        $sumAux = 0;
        for ($i=0; $i < strlen($sum); $i++) {
          $sumAux += $sum[$i];
        }

        $rand = $sumAux+1;
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 29, 164, 0, 0, 170, 170, 100);
      }
      elseif($testName == "depara") {
        $rand = rand(1,count($settings['results']));
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 310, 110, 0, 0, 180, 180, 100);

        $x = 60;
        $white = imagecolorallocate($bg, 187, 0, 0);
        $font_path = 'fonts/calibrib.ttf';
        imagettftext($bg, 20, 0, $x, 42, $white, $font_path, $name);
      }
      elseif($testName == "horoscopo") {
        $auxRes = explode("-",$auxUrl[4]);
        $res = str_replace(".png", "", $auxRes[1]);

        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$res}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 335, 225, 0, 0, 125, 125, 100);
      }
      elseif($testName == "dios") {
        $rand = rand(1,count($settings['results']));
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 338, 80, 0, 0, 125, 125, 100);
      }
      elseif($testName == "navidad") {
        $rand = rand(1,count($settings['results']));
        $png_image = imagecreatefrompng("images/{$lang}/{$testName}/r{$rand}.png");
        $bg = imagecreatetruecolor(800, 420);
        imagecopy($bg, $png_image, 0, 0, 0, 0, 800, 420);

        // superpose images
        imagecopymerge($bg, $fb_image, 170, 100, 0, 0, 130, 130, 100);

        $x = 240  - (strlen($name) * 8);
        $white = imagecolorallocate($bg, 255, 255, 255);
        $font_path = 'fonts/lobster.otf';
        imagettftext($bg, 30, 0, $x, 320, $white, $font_path, $name);
      }

      drawBorder($bg, $black);

      // Send Image to S3
      ob_start();
      imagepng($bg);
      $imageFileContents = ob_get_contents();
      ob_end_clean();

      $result = $s3Client->putObject([
          'Bucket' => $bucketName,
          'Key'    => "images/es/{$testName}/results/{$id}.png",
          'Body' => $imageFileContents,
          'ACL' => 'public-read',
          'ContentType' => 'image/png'
      ]);

      // Send Image to Browser
      imagepng($bg);

      // Clear Memory
      imagedestroy($bg);

      // Hit the fb cache
      $curl = curl_init();
      curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_URL => "http://www.facebook.com/sharer.php?u=http://www.{$domain}/{$testName}/compartir/{$id}",
          CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0'
      ));
      $resp = curl_exec($curl);
      curl_close($curl);

      $testSrc = str_replace("%%facebookUserId%%", $facebookUserId, $testSrc);
      $shareURL = str_replace("%%facebookUserId%%", $facebookUserId, $shareURL);
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

    } catch (FacebookRequestException $e) {
        echo $e->getMessage();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function drawBorder(&$img, &$color, $thickness = 1){
    $x1 = 0; 
    $y1 = 0; 
    $x2 = ImageSX($img) - 1; 
    $y2 = ImageSY($img) - 1; 

    for($i = 0; $i < $thickness; $i++) 
    { 
        ImageRectangle($img, $x1++, $y1++, $x2--, $y2--, $color); 
    } 
}
?>
