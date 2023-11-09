<?php

$arr = Array('puts', 'caracoles', 'eita');

/**
 for ($i = 0 ; $i < count($arr) + 5; $i++) {
   if($i >= count($arr)){
    echo "vish cabo" . "\n";
  } else {
    echo $arr[$i] . " irmao esse é o index ", $i, "\n";
  }
echo (($i >= count($arr))) ?  "vish cabo \n" :  $arr[$i] . " irmao esse é o index " . $i . "\n";
}   
*/
$i = 0;
while ($i < count($arr) + 5) {
  echo (($i >= count($arr))) ?  "vish cabo \n" :  $arr[$i] . " irmao esse é o index " . $i . "\n";
  $i++;
  }