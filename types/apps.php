<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
<h2><?=$settings['question']?></h2>
<p><?=$settings['init']?></p>

<a href="<?=$loginUrl?>" style="text-decoration:none;">
	<input class="submit-button botonlisto" type="button" value="<?=$settings['boton_init']?>" onClick="$('.botonlisto').hide();$('#loader').show();" />
</a>
<div id="loader"><img src="http://i.imgur.com/g9RtBH2.gif" style="max-width:100%;" /></div>