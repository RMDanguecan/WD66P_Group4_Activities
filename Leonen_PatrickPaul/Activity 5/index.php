<?php
$item1 = 100;
$item2 = 200;
$item3 = 300;

function getRemainingStocksOfItem1 ($item, $qtybought, $item1) {
$item1 -= $qtybought;
return "$item - ($qtybought) qty | Remaining Stock = $item1";
$item1 -= $qtybought;
}

function getRemainingStocksOfItem2 ($item, $qtybought, $item2) {
$remainingstock = $item2 - $qtybought;
return "$item - ($qtybought) qty | Remaining Stock = $remainingstock";
}

echo getRemainingStocksOfItem1 ("Item 1", 3, $item1);
echo "\n";
echo getRemainingStocksOfItem1 ("Item 1", 5, $item1);



?>