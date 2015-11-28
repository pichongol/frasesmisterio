<div id="preg1">
	<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
	<h2><?=$settings['question']?></h2>
	<p><?=$settings['init']?></p>

	<form class="test-form" id="preg1">
		<input class="input-field" type="text" class="textbox" id="nombre" name="nombre" maxlength="15" placeholder="<?=_t("Tu nombre")?>" required="true">
		<div class="btnselect-group">
			<span><?=_t("Tu fecha de nacimiento");?></span>
			<select name="mes">
				<option value="Enero"><?=_t("Enero")?></option>
				<option value="Febrero"><?=_t("Febrero")?></option>
				<option value="marz"><?=_t("Marzo")?></option>
				<option value="abr"><?=_t("Abril")?></option>
				<option value="mayo"><?=_t("Mayo")?></option>
				<option value="juni"><?=_t("Junio")?></option>
				<option value="jul"><?=_t("Julio")?></option>
				<option value="Agos"><?=_t("Agosto")?></option>
				<option value="Sept"><?=_t("Septiembre")?></option>
				<option value="Octubre"><?=_t("Octubre")?></option>
				<option value="Noviembre"><?=_t("Noviembre")?></option>
				<option value="Diciembre"><?=_t("Diciembre")?></option>
			</select>
			<select name="dia">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
			</select>
			<div class="clearfix"></div>
		</div>
		<input class="submit-button botonlisto answ answFirst" type="button" value="<?_t("Iniciar")?>">
	</form>
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