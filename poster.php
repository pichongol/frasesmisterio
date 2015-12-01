<?
include("config.php");

// mysql
$dbConn = @mysql_connect($host, $user, $password);
mysql_select_db($database,$dbConn);
mysql_set_charset("utf8",$dbConn);

$sql = "SELECT * FROM users WHERE ((last_post_date IS NULL) || last_post_date != DATE(NOW()))";
$r_select = mysql_query($sql, $dbConn) or die(mysql_error($dbConn));

while( $user = mysql_fetch_array($r_select) ){
	$imgs = scandir($img_path);
	sort($imgs);

	$img = $imgs[rand(3,count($imgs)-1)];
	$img = str_replace(".jpg", "", $img);

	$post = array (
		"access_token" => $user['access_token'],
		"message" => "",
		"name" => "La Frase del Dia",
		"link" => "http://www.frasesmisterio.com/frase/{$img}",
		"picture" => "http://www.frasesmisterio.com/images/es/{$img}.jpg",
		"description" => "Frases que Inspiran...",
		"caption" => "",
	);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v2.2/{$user['uid']}/feed");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $result = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);
    unset($ch);

    $res = json_decode($result);

	if( isset($res->error->message) ){
		echo "ERROR IN {$user['uid']}\n";
	}
	else {
		echo "OK {$user['uid']}\n";

		$sql = "UPDATE users SET last_post_date = NOW() WHERE uid = {$user['uid']}";
	    mysql_query($sql, $dbConn) or die(mysql_error($dbConn));
	}

}
?>