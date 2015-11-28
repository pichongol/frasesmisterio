<?
function _t($text){
	global $translations;

	if(isset($translations[$text])){
		echo $translations[$text];
	}
	else {
		echo $text;
	}
}

function _tb($text){
	global $translations;

	if(isset($translations[$text])){
		return $translations[$text];
	}
	else {
		return $text;
	}
}
?>