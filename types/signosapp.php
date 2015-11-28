<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
<h2><?=$settings['question']?></h2>
<p><?=$settings['init']?></p>

<? if($fbTrue){ ?>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/1'">
Acuario</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/2'">
Aries</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/3'">
Cancer</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/4'">
Capricornio</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/5'">
Escorpio</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/6'">
Geminis</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/7'">
Leo</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/8'">
Libra</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/9'">
Piscis</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/10'">
Sagitario</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/11'">
Tauro</button><br>
<button class="submit-button answer answ" id="botonestilo" onclick="window.location.href='http://www.<?=$domain?>/horoscopo/resultado/12'">
Virgo</button><br>
<div id="loader"><img src="http://i.imgur.com/g9RtBH2.gif" style="max-width:100%;" /></div>
<? } else { ?>
<a href="<?=$loginUrl?>" style="text-decoration:none;">
	<input class="submit-button botonlisto" type="button" value="<?=$settings['boton_init']?>" onClick="$('.botonlisto').hide();$('#loader').show();" />
</a>
<? } ?>
<center>
<? if($compartir){ ?>
<script type="text/javascript">
    google_ad_client = "ca-pub-4336279972675129";
    google_ad_slot = "4402796052";
    google_ad_width = 336;
    google_ad_height = 280;
</script>
<!-- 336x280, superjueguitos compartir -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<? } ?>
</center>
