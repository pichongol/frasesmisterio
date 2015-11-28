<? 
require_once("config.php");
require_once("header.php");
require_once("header_html.php"); 
?>

<div class="container main-tests">
	<h2><?=_t("Ups!, lo sentimos. Esta p&aacute;gina no existe.")?></h2>
	<h2 style="font-size:20px;"><?=_t("Es posible que el enlace que seguiste esta roto, o fue removido del sitio.")?></h2>
	<div style="color:#000;margin:40px;">
		<img src="/images/emoticon.png" />
	</div>
	<h2 style="font-size:20px;">
		<a href="/" style="text-decoration:none;color:#445ca0;font-weight:bold;"><?=_t("Ir a la P&aacute;gina de inicio de ");?><img src="/images/arrow.png" /> <?=ucfirst($domain)?></a>
	</h2>

</div>

<? include("footer.php"); ?>