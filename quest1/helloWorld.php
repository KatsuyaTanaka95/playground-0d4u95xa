<?php

//出力値
//7
//2
//6

function helloWorld()
{
  $output = "";
  $inputList = [7, 2, 6];
  foreach ($inputList as $input) {
    $output .= $input . "\n";
  }
  return $output;
}
echo helloWorld();
