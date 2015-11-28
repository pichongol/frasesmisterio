<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
<h2><?=$settings['question']?></h2>
<p><?=$settings['init']?></p>

<form class="test-form">
	<input class="input-field" type="text" class="textbox" id="nombre" name="nombre" maxlength="15" placeholder="<?=_t("Tu nombre")?>" required="true">
	<div class="btnselect-group">
		<span><?=_t("Selecciona el horario en que naciste");?></span>
		<select id="horario" name="horario">
			<option value="1">Entre las 23:30 y la 1:30</option>
			<option value="2">Entre las 1:30 y la 3:30</option>
			<option value="3">Entre las 3:30 y la 5:30</option>
			<option value="4">Entre las 5:30 y la 7:30</option>
			<option value="5">Entre las 7:30 y la 9:30</option>
			<option value="6">Entre las 9:30 y la 11:30</option>
			<option value="7">Entre las 11:30 y la 13:30</option>
			<option value="8">Entre las 13:30 y la 15:30</option>
			<option value="9">Entre las 15:30 y la 17:30</option>
			<option value="10">Entre las 17:30 y la 19:30</option>
			<option value="11">Entre las 19:30 y la 21:30</option>
			<option value="12">Entre las 21:30 y la 23:30</option>
		</select>
		<div class="clearfix"></div>
	</div>
	<input class="submit-button botonlisto" type="button" onclick="twoDoc()" value="<?_t("Iniciar")?>">
</form>

<center>
	<div id="loader"><img src="http://i.imgur.com/g9RtBH2.gif" style="max-width:100%;" /></div>
</center>