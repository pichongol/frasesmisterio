<?
require_once("lib/functions.php");

if(!isset($_SESSION)) { 
	session_start(); 
} 

$data = (isset($_COOKIE['data'])) ? json_decode($_COOKIE['data']) : null;
$testName = isset($_GET['testname']) ? $_GET['testname'] : null;
$id = isset($_GET['id']) ? $_GET['id'] : (isset($data->res) ? $data->res : null);
$name = isset($_GET['name']) ? $_GET['name'] : (isset($data->nombre) ? $data->nombre : null);
$gender = isset($_GET['gender']) ? $_GET['gender'] : (isset($data->sexo) ? $data->sexo : null);

if($testName){
	$settings = $$testName;

	if(isset($settings['results'])){
		$optionsCount = count($settings['results']);
	}
}

$compartir = (strpos($_SERVER['REQUEST_URI'], 'compartir')!==false);
$resultado = (strpos($_SERVER['REQUEST_URI'], 'resultado')!==false);
$fbTrue = (strpos($_SERVER['REQUEST_URI'], 'fbTrue')!==false);
$index = ($_SERVER['REQUEST_URI']=='/');

if($compartir){
	$css = "style";

	if(isset($settings['results'][$id]['title']) && $settings['results'][$id]['title']){
		$title = $settings['results'][$id]['title'].' - '.$settings['title'];
	}
	else {
		$title = $settings['title'];
	}

	if(($settings['type']=="apps") || ($settings['type'] == "appsfechaambos")){
		$auxUrl = explode("/", $_SERVER['SCRIPT_URL']);
		$facebookUserId = $auxUrl[3];

		$img = "http://www.{$domain}/images/{$language}/{$testName}/{$facebookUserId}.png?v=".rand();
		$url = "http://www.{$domain}/{$testName}/compartir/{$facebookUserId}";
	}
	elseif($name && $gender){
		$img = "http://www.{$domain}/images/{$language}/{$testName}/$name/{$id}/{$gender}.png?v=".rand();
		$url = "http://www.{$domain}/{$testName}/compartir/$name/$id/$gender";
	}
	elseif($name){
		$img = "http://www.{$domain}/images/{$language}/{$testName}/$name/{$id}.png?v=".rand();
		$url = "http://www.{$domain}/{$testName}/compartir/$name/$id";
	}
	else {
		$img = "http://www.{$domain}/images/{$language}/{$testName}/r{$id}.png?v=".rand();
		$url = "http://www.{$domain}/{$testName}/compartir/$id";
	}

	$description = $settings['share_msg'];
	if($name){
		$description = str_replace("#nombre", ucfirst($name), $description);
	}
}
elseif($resultado){
	$css = "style";
	$title = $settings['title'];
	$img = "http://www.{$domain}/images/{$language}/{$testName}/s.png?v=".rand();
	$description = $settings['meta_desc'];	

	if($name){
		$url = "http://www.{$domain}/{$testName}/resultado/$name/$id";
		$img = "http://www.{$domain}/images/{$language}/{$testName}/$name/{$id}.png?v=".rand();
	}
	else {
		$img = "http://www.{$domain}/images/{$language}/{$testName}/r{$id}.png?v=".rand();
		$url = "http://www.{$domain}/{$testName}/resultados/$id";
	}
}
elseif(isset($testName)) {
	$css = "style";
	$title = $settings['title'];
	$url = "http://www.{$domain}/{$testName}/";
	$img = "http://www.{$domain}/images/{$language}/{$testName}/s.png?v=".rand();
	$description = $settings['meta_desc'];
}
else {
	$css = "styleindex";
	$title = _tb("Las Mejores Frases Estan En ").ucfirst($domain)."!";
	$url = "http://www.{$domain}/";
	$description = _tb("La Mejor Seleccion de Frases");
}

?>
