<? 
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

require_once("config.php");
require_once("header.php");
require_once("test_apps.php");
require_once("header_html.php");

$imgs = scandir($img_path);
?>

<script>
var loginUrl = '<?=$loginUrl?>';
</script>

<div class="container main-tests">
	<h2 style="padding-bottom:10px;"><?=_t("Frases inspiradoras, inteligentes, revolucionarias.")?> </h2>
	<h2><span><?=_t("En tu Facebook cada dia")?></span></h2>
	<ul>
	<? foreach ($imgs as $img) { 
		if(strpos($img, ".jpg")!== false){
	?>
	<li>
	  <article>
	    <figure><a class="image-index" href="#"><img style="border:8px solid #f3f3f3; max-width: 100%; margin-bottom:10px;" src="/images/es/<?=$img?>"></a></figure>
	  </article>
	</li>
	<? }} ?>
	</ul>
</div>

<input class="submit-button botonlisto" type="button" value="<?_t("Ingresar")?>">

<? include("footer.php"); ?>
