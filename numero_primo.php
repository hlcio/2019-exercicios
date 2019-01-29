<?php

echo "Hello World".PHP_EOL;
function ehPrimo($numero){
    for ($i=2;$i < $numero; $i++)
    echo $i.PHP_EOL;
    $resto = $numero % $i;
    if ($resto==0){
         return false;
     }
  }
return true;
}
$num=10
?>
