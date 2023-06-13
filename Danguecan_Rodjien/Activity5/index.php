<?php

$item1 = 100;
$item2 = 200;
$item3 = 300;

echo getRemainingStocks("item1", $item1, 3);
echo "\n";
echo getRemainingStocks("item1", $item1, 5);
echo "\n";
echo getRemainingStocks("item2", $item2, 5);
echo "\n";
echo getRemainingStocks("item1", $item1, 50);
echo "\n";
echo getRemainingStocks("item3", $item3, 5);



function getRemainingStocks($itemName, $item, $qty) {
  $remainingStocks = $item - $qty;
  return "$itemName - ($qty) qty | Remaining Stocks = $remainingStocks";
}

?>