<div id="preg1">
	<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
	<h2><?=$settings['question']?></h2>
	<p><?=$settings['init']?></p>

	<input class="submit-button botonlisto answ answFirst" type="button" value="<?_t("Iniciar")?>">
</div>
<? $i=0; 
   foreach ($settings['questions'] as $q) { 
   		$i++;
   		$class = ($i==(count($settings['questions']))) ? 'answend' : 'answ';
?>
<article class="content nonepreg" id="preg<?=$i+1?>">
	<h2><?=$q['title']?></h2>
	<p>Pregunta <?=$i?> de <?=count($settings['questions'])?></p>
	<form class="test-form">
		<? foreach ($q['options'] as $opt) { ?>
		<button class="submit-button answer <?=$class?>" type="button" value="<?= (isset($opt['value'])) ? $opt['value'] : "" ?>" <?= (!isset($opt['value']) && $class=='answend') ? 'onclick="twoDoc()"' : '' ?>><?=$opt['desc']?></button>
		<? } ?>
	</form>
</article>
<? } ?>
<div id="cargando"></div>