<?php
define('FACEBOOK_SDK_V4_SRC_DIR', 'lib/fb-php-sdk/src/Facebook/');
require __DIR__ . '/lib/fb-php-sdk/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;

FacebookSession::setDefaultApplication($settings['app_id'], $settings['app_secret']);
$helper = new FacebookRedirectLoginHelper($settings['callback_url']);
$scope = array('publish_actions');
$loginUrl = $helper->getLoginUrl($scope);

?>