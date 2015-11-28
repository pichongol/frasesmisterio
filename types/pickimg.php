<img class="test-img" src="/images/<?=$language?>/<?=$testName?>/i.png"><br />
<h2><?=$settings['question']?></h2>
<p><?=$settings['init']?></p>

<? if($fbTrue){ ?>
<a href="/<?=$testName?>/resultado/1"><img src="/images/<?=$language?>/<?=$testName?>/o1.png" /></a>
<a href="/<?=$testName?>/resultado/2"><img src="/images/<?=$language?>/<?=$testName?>/o2.png" /></a>
<a href="/<?=$testName?>/resultado/3"><img src="/images/<?=$language?>/<?=$testName?>/o3.png" /></a>
<br />
<a href="/<?=$testName?>/resultado/4"><img src="/images/<?=$language?>/<?=$testName?>/o4.png" /></a>
<a href="/<?=$testName?>/resultado/5"><img src="/images/<?=$language?>/<?=$testName?>/o5.png" /></a>
<a href="/<?=$testName?>/resultado/6"><img src="/images/<?=$language?>/<?=$testName?>/o6.png" /></a>
<br />
<a href="/<?=$testName?>/resultado/7"><img src="/images/<?=$language?>/<?=$testName?>/o7.png" /></a>
<a href="/<?=$testName?>/resultado/8"><img src="/images/<?=$language?>/<?=$testName?>/o8.png" /></a>
<a href="/<?=$testName?>/resultado/9"><img src="/images/<?=$language?>/<?=$testName?>/o9.png" /></a>
<? } else { ?>
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o1.png" /></a>
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o2.png" /></a>
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o3.png" /></a>
<br />
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o4.png" /></a>
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o5.png" /></a>
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o6.png" /></a>
<br />
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o7.png" /></a>
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o8.png" /></a>
<a href="<?=$loginUrl?>"><img src="/images/<?=$language?>/<?=$testName?>/o9.png" /></a>
<? } ?>
<center>
<? if(!$fbTrue){ ?>
<a href="<?=$loginUrl?>" style="text-decoration:none;"><input class="submit-button botonlisto" type="button" value="<?_t("Iniciar")?>"></a><br />
<? } ?>
</center>