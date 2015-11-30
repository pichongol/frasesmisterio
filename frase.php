<? 
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
include("config.php");
include("header.php");
include("test_apps.php");

$imgs = scandir($img_path);
rsort($imgs);

foreach ($imgs as $img) { 
	if(strpos($img, ".jpg")!==false){
		$img_aux = explode("-", $img);

		unset($img_aux[3]);
		$today = implode("-", $img_aux);
		break;
	}
}

if(isset($_GET['name'])){
	$name_aux = explode("-", $_GET['name']);

	if(isset($name_aux[3])){
		$idImage = $name_aux[3];
	}

	unset($name_aux[3]);
	$_GET['dia'] = implode("-", $name_aux);
}

$date = isset($_GET['dia']) ? $_GET['dia'] : $today;

if($today != $date){
	$date_aux = implode("/",array_reverse(explode("-", $date)));
	$title = "Frases Del {$date_aux}";
}
else {
	$title = "Frases Del Dia";	
}

if(isset($idImage)){
	$shareImage = "http://www.{$domain}/images/es/{$date}-{$idImage}.jpg";
}

include("header_html.php");
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

<div class="container result">
	<div class="section-left">
		<article class="content">
			<div class="border">
				<div id="ikinci">
					<h2><?=_t($title)?></h2>

					<? 
					for($i=1;$i<4;$i++){ 
						$shareURL = "http://www.{$domain}/frase/{$date}-{$i}";

					?>
					<figure><img src="/images/es/<?=$date."-".$i?>.jpg"></figure>
					<a class="shared-fb-btn" href="#" onClick="window.open('http://www.facebook.com/sharer.php?u=<?=$shareURL?>','_blank', 'width=600, height=400'); _gaq.push(['_trackEvent', 'results', 'share']); return false;"><?=_t("Compartir en Facebook")?></a>
					<? } ?>
					<div class="content-buttons">
						<div style="margin-top:20px;margin-bottom:20px;">
							<script type="text/javascript">
							    google_ad_client = "<?=$adSenseAccount?>";
							    google_ad_slot = "<?=$adSense336x280?>";
							    google_ad_width = 336;
							    google_ad_height = 280;
							</script>
							<!-- 336x280, minijueguitos -->
							<script type="text/javascript"
							src="//pagead2.googlesyndication.com/pagead/show_ads.js">
							</script>
						</div>

						<div class="container-like-fb">
							<span class="shared-fb-title"><?=_t("Te gustan estas frases?")?>?</span>
							<iframe src="//www.facebook.com/plugins/like.php?href=https://www.facebook.com/Frases-Misterio-166750767013287&amp;width=76&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:76px; height:21px; " allowTransparency="true"></iframe>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="fb-comments" data-href="http://www.<?=$domain?>/<?=$testName?>/" data-width="100%" data-numposts="3" data-colorscheme="light" data-order-by="reverse_time"></div>
				<div class="clearfix"></div>
			</div>
		</article>
	</div>
	<div class="section-right">
		<aside class="sidebar">
			<div class="sidebar-ad-top">
				<script type="text/javascript">
				    google_ad_client = "<?=$adSenseAccount?>";
				    google_ad_slot = "<?=$adSense336x280?>";
				    google_ad_width = 336;
				    google_ad_height = 280;
				</script>
				<!-- 336x280, superjueguitos compartir -->
				<script type="text/javascript"
				src="//pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
			</div>
			<h2><?=_t("Mas Frases")?></h2>
			<ul>
				<?
				$imgs = scandir($img_path);

				foreach ($imgs as $img) { 
					if((strpos($img, ".jpg")!==false) && (strpos($img, $date)===false)){
						$img_aux = explode("-", $img);
						unset($img_aux[3]);
						$dia = implode("-", $img_aux);
				?>
				<li>
				  <article>
				    <figure><a href="/frase/<?=$dia?>"><img style="border:8px solid #f3f3f3; max-width: 100%; margin-bottom:10px;" src="/images/es/<?=$img?>"></a></figure>
				  </article>
				</li>
				<? }} ?>
			</ul>
		</aside>
	</div>
	<div class="clearfix"></div>  
</div>

<? include("footer.php"); ?>
