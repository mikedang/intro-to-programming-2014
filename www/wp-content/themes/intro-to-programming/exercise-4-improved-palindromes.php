<?php

$words = array("newjersey", "abba", "aoxomoxoa", "racecars");

foreach ($words as $word) {

  $reverse=strrev($word);

  if ($word == $reverse) {
    echo "$word : yes";
  }
    else {
    echo "$word : no";
  }

  echo '<br />';
  }



?>
