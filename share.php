<?
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
require_once("config.php");
require_once("header.php"); 
require_once("header_html.php");

if(($settings['type']=="apps") || ($settings['type'] == "appsfechaambos") || ($settings['type'] == "signosapp")){
	$auxUrl = explode("/", $_SERVER['SCRIPT_URL']);
	$facebookUserId = $auxUrl[3];
} 

require_once("share_apps.php");

$imgServerIdx = rand(1, $imgServers);
$imgServer = ($imgServerIdx == 1) ? "www" : "www".$imgServerIdx;
$imgServer = "http://".$imgServer.".".$domain;
?>

<script>
var loginUrl = '<?=$loginUrl?>';
</script>

<?
if( ($settings['type'] == "nombrefecha") || ($settings['type'] == "nombrehorario") || ($settings['type'] == "nombretexto") || ($settings['type'] == "multiplechoisenombrefecha") || ($settings['type'] == "ooh") ){
	$testSrc = $imgServer."/images/{$language}/{$testName}/{$name}/{$id}.png";
}
elseif($settings['type'] == "nombresexo"){
	$testSrc = $imgServer."/images/{$language}/{$testName}/{$name}/{$id}/{$gender}.png";
}
elseif(($settings['type'] == "apps") || ($settings['type'] == "appsfechaambos") || ($settings['type'] == "signosapp")){
	$testSrc = $imgServer."/images/{$language}/{$testName}/{$facebookUserId}.png";
}
else {
	$testSrc = $imgServer."/images/{$language}/{$testName}/r{$id}.png";
}
?>

<div style="margin:10px;">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script type="text/javascript">
	var td_screen_width = document.body.clientWidth;

	if ( td_screen_width >= 1140 ) {
	    /* large monitors */
	    document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="<?=$adSenseAccount?>" data-ad-slot="<?=$adsenseAdaptable?>"></ins>');
	    (adsbygoogle = window.adsbygoogle || []).push({});
	}

	    if ( td_screen_width >= 1019  && td_screen_width < 1140 ) {
	        /* landscape tablets */
	    document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="<?=$adSenseAccount?>" data-ad-slot="<?=$adsenseAdaptable?>"></ins>');
	        (adsbygoogle = window.adsbygoogle || []).push({});
	    }

	if ( td_screen_width >= 768  && td_screen_width < 1019 ) {
	    /* portrait tablets */
	    document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="<?=$adSenseAccount?>" data-ad-slot="<?=$adsenseAdaptable?>"></ins>');
	    (adsbygoogle = window.adsbygoogle || []).push({});
	}

	if ( td_screen_width < 768 ) {
	    /* Phones */
	    document.write('<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="<?=$adSenseAccount?>" data-ad-slot="<?=$adsenseAdaptable?>"></ins>');
	    (adsbygoogle = window.adsbygoogle || []).push({});
	}
	</script>
</div>

<div class="container test" style="margin-bottom:20px;">
	<div class="section-center">
		<article class="content">
			<h2><?=_t("Tu amigo en Facebook obtuvo este resultado")?></h2>
			<img style="margin:10px 0px;max-width: 100%;" src="<?=$testSrc?>" />
		</article>
	</div>
</div>

<div style="margin:10px;">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script type="text/javascript">
	var td_screen_width = document.body.clientWidth;

	if ( td_screen_width >= 1140 ) {
	    /* large monitors */
	    document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="<?=$adSenseAccount?>" data-ad-slot="<?=$adsenseAdaptable?>"></ins>');
	    (adsbygoogle = window.adsbygoogle || []).push({});
	}

	    if ( td_screen_width >= 1019  && td_screen_width < 1140 ) {
	        /* landscape tablets */
	    document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="<?=$adSenseAccount?>" data-ad-slot="<?=$adsenseAdaptable?>"></ins>');
	        (adsbygoogle = window.adsbygoogle || []).push({});
	    }

	if ( td_screen_width >= 768  && td_screen_width < 1019 ) {
	    /* portrait tablets */
	    document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="<?=$adSenseAccount?>" data-ad-slot="<?=$adsenseAdaptable?>"></ins>');
	    (adsbygoogle = window.adsbygoogle || []).push({});
	}

	if ( td_screen_width < 768 ) {
	    /* Phones */
	    document.write('<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="<?=$adSenseAccount?>" data-ad-slot="<?=$adsenseAdaptable?>"></ins>');
	    (adsbygoogle = window.adsbygoogle || []).push({});
	}
	</script>
</div>

<div class="container test">
	<div class="section-center">
		<article class="content">
			<div id="preguntas">
				<? include("types/".$settings['type'].'.php'); ?>
			</div>
		</article>
	</div>
</div>



<? include("footer.php"); ?>
