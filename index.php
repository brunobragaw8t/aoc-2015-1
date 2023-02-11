<?php

$input = str_split(file_get_contents('./input.txt'));

$floor = 0;

foreach ($input as $step) {
  if ('(' === $step) {
    $floor++;
  } else {
    $floor--;
  }
}

echo $floor;
