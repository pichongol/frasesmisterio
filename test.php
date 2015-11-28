<?
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
require_once("config.php");
require_once("header.php"); 
require_once("test_apps.php");
require_once("header_html.php");
?>
<script>
var loginUrl = '<?=$loginUrl?>';
</script>

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
