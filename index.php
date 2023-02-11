<?php

$input = str_split(file_get_contents('./input.txt'));

$start = 0;

foreach ($input as $step) {
  if ('(' === $step) {
    $start++;
  } else {
    $start--;
  }
}

echo $start;
