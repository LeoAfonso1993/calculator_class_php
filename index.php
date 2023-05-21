<?php
require('calculator.php');

$calc = new Calculator;
$calc->add(2);
$calc->sub(1);
$calc->multiply(5);
$calc->divide(2);
$calc->clear();

echo "TOTAL: ".$calc->total;

?>