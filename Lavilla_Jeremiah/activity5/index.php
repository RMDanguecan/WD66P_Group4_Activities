<?php

echo computethetotalstocksperitem("Item", 3, 5, 50);


function computethetotalstocksperitem($item, $qty1, $qty2, $qty3){
  
$Item1 = 100;
$Item2 = 200;
$Item3 = 300;

$Remaining1 = $Item1 - $qty1;
$Remaining2 = $Item2 - $qty2;
$Remaining3 = $Item3 - $qty2;
$Remaining4 = $Remaining1 - $qty2;
$Remaining5 = $Remaining4 - $qty3;

if($item == "Item"){
echo "$item 1 - ($qty1) | Remaining Stocks = $Remaining1";
echo "\n"; 
echo "$item 1 - ($qty2) | Remaining Stocks = $Remaining4";
echo "\n";
echo "$item 2 - ($qty2) | Remaining Stocks = $Remaining2";
echo "\n";
echo "$item 1 - ($qty3) | Remaining Stocks = $Remaining5";
echo "\n";
echo "$item 3 - ($qty2) | Remaining Stocks = $Remaining3";
}

}


?>