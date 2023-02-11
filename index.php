<?php

$input = str_split(file_get_contents('./input.txt'));

$floor = 0;
$firstTimeInBasement = 0;

for ($i=0; $i < count($input); $i++) {
  if ('(' === $input[$i]) {
    $floor++;
  } else {
    $floor--;
  }

  if (-1 === $floor && 0 === $firstTimeInBasement) {
    $firstTimeInBasement = $i + 1;
  }
}

echo $floor . PHP_EOL;
echo $firstTimeInBasement;
