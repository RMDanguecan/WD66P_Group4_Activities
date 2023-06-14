<?php
$item1 = 100;
$item2 = 200;
$item3 = 300;

function getRemainingStocksOfItem1 ($item, $qtybought, $item1) {
$item1 -= $qtybought;
return "$item - ($qtybought) qty | Remaining Stocks = $item1";
}

function getRemainingStocksOfItem2 ($item, $qtybought, $item2) {
$item2 -= $qtybought;
return "$item - ($qtybought) qty | Remaining Stocks = $item2";
}

function getRemainingStocksOfItem3 ($item, $qtybought, $item3) {
$item3 -= $qtybought;
return "$item - ($qtybought) qty | Remaining Stocks = $item3";
}


echo getRemainingStocksOfItem1 ("Item 1", 3, 100);
echo "\n";
echo getRemainingStocksOfItem1 ("Item 1", 5, 97);
echo "\n";
echo getRemainingStocksOfItem2 ("Item 2", 5, 200);
echo "\n";
echo getRemainingStocksOfItem1 ("Item 1", 50, 92);
echo "\n";
echo getRemainingStocksOfItem3 ("Item 3", 5, 300);



?>