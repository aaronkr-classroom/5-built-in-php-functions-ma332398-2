<?php
$text = 'homE swEEt homE';
?>

<p>
  <b>Lowercase: 소문자로 변경하기</b>
  <?= strtolower($text) ?> <br>
  <b>Uppercase:</b>
  <?= strtolower($text) ?>  <br>

  <b>Uppercase first letter</b>
  <?= ucwords($text) ?>  <br>

  <b>Character count:</b>
  <?= strlen($text) ?>  <br>

  <b>Word count: 단어의 개수...</b>
  <?= str_word_count($text) ?>
</p>
