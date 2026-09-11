<!-- Q3. php program to demonstrate relational and logical operations -->

<?php
$a = 10;
$b = 20;

echo "<h3>Relational Operators</h3>";

echo "a == b : ";
var_dump($a == $b);
echo "<br>";

echo "a != b : ";
var_dump($a != $b);
echo "<br>";

echo "a > b : ";
var_dump($a > $b);
echo "<br>";

echo "a < b : ";
var_dump($a < $b);
echo "<br>";

echo "a >= b : ";
var_dump($a >= $b);
echo "<br>";

echo "a <= b : ";
var_dump($a <= $b);
echo "<br>";


echo "<h3>Logical Operators</h3>";

$x = true;
$y = false;

echo "x AND y : ";
var_dump($x && $y);
echo "<br>";

echo "x OR y : ";
var_dump($x || $y);
echo "<br>";

echo "NOT x : ";
var_dump(!$x);

?>
 
