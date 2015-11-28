<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
<h2><?=$settings['question']?></h2>
<p><?=$settings['init']?></p>

<form class="test-form">
	<input class="input-field" type="text" class="textbox" id="nombre" name="nombre" maxlength="15" placeholder="<?=_t("Tu nombre")?>" required="true">
	<div class="btnselect-group">
		<span style="font-size:20px;line-height: 100%;"><?=_t("Su fecha de nacimiento");?></span><br /><br />
		<select id="su-dia" name="su-dia">
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
		<select id="su-mes" name="su-mes">
			<option value="1"><?=_t("Enero")?></option>
			<option value="2"><?=_t("Febrero")?></option>
			<option value="3"><?=_t("Marzo")?></option>
			<option value="4"><?=_t("Abril")?></option>
			<option value="5"><?=_t("Mayo")?></option>
			<option value="6"><?=_t("Junio")?></option>
			<option value="7"><?=_t("Julio")?></option>
			<option value="8"><?=_t("Agosto")?></option>
			<option value="9"><?=_t("Septiembre")?></option>
			<option value="10"><?=_t("Octubre")?></option>
			<option value="11"><?=_t("Noviembre")?></option>
			<option value="12"><?=_t("Diciembre")?></option>
		</select>
		<select id="su-anio" name="su-anio">
		<? for($i=2015; $i>=1950; $i--){ ?>
		<option><?=$i?></option>
		<? } ?>
		</select><br /><br />
		<span style="font-size:20px;line-height: 100%;"><?=_t("Tu fecha de nacimiento");?></span><br />
		<select id="tu-dia" name="tu-dia">
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
		<select id="tu-mes" name="tu-mes">
			<option value="1"><?=_t("Enero")?></option>
			<option value="2"><?=_t("Febrero")?></option>
			<option value="3"><?=_t("Marzo")?></option>
			<option value="4"><?=_t("Abril")?></option>
			<option value="5"><?=_t("Mayo")?></option>
			<option value="6"><?=_t("Junio")?></option>
			<option value="7"><?=_t("Julio")?></option>
			<option value="8"><?=_t("Agosto")?></option>
			<option value="9"><?=_t("Septiembre")?></option>
			<option value="10"><?=_t("Octubre")?></option>
			<option value="11"><?=_t("Noviembre")?></option>
			<option value="12"><?=_t("Diciembre")?></option>
		</select>
		<select id="tu-anio" name="tu-anio">
		<? for($i=2015; $i>=1950; $i--){ ?>
		<option><?=$i?></option>
		<? } ?>
		</select>
	</div>
</form>
<br /><br />
<input class="submit-button botonlisto" type="button" onclick="twoDoc()" value="<?=$settings['boton_init']?>" onClick="$('.botonlisto').hide();$('#loader').show();" />
<div id="loader"><img src="http://i.imgur.com/g9RtBH2.gif" style="max-width:100%;" /></div>
<br />