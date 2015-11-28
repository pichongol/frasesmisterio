  <ul>
    <? foreach ($testList as $name) { ?>
    <li>
      <article>
        <figure><a href="http://<?=$domain?>/<?=$name?>/"><img style="border:8px solid #f3f3f3; max-width: 100%; margin-bottom:10px;" src="/images/<?=$language?>/<?=$name?>/m.png"></a></figure>
      </article>
    </li>
    <? } ?>
  </ul>
