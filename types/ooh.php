<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
<h2><?=$settings['question']?></h2>
<p><?=$settings['init']?></p>

<form class="test-form">
	<input class="input-field" type="text" class="textbox" id="nombre" name="nombre" maxlength="12" placeholder="<?=_t("El nombre de tu mejor amig@")?>" required="true">
	<input class="submit-button botonlisto" type="button" onclick="twoDoc()" value="<?_t("Iniciar")?>">
</form>

<center>
	<div id="loader"><img src="http://i.imgur.com/g9RtBH2.gif" style="max-width:100%;" /></div>
</center>