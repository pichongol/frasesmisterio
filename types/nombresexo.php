<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
<h2><?=$settings['question']?></h2>
<p><?=$settings['init']?></p>

<form class="test-form">
	<input class="input-field" type="text" class="textbox" id="nombre" name="nombre" maxlength="15" placeholder="<?=_t("Tu nombre")?>" required="true">
	<div class="btnselect-group">
		<span><?=_t('Selecciona tu sexo');?>:</span>
		<select id="sexo" name="sexo" style="font-size:20px; height:30px;">
			<option value="h"><?=_t('Hombre')?></option>
			<option value="mu"><?=_t('Mujer')?></option>
		</select>
		<div class="clearfix"></div>
	</div>
	<input class="submit-button botonlisto" type="button" onclick="twoDoc()" value="<?_t("Iniciar")?>">
</form>

<center>
	<div id="loader"><img src="http://i.imgur.com/g9RtBH2.gif" style="max-width:100%;" /></div>
</center>
