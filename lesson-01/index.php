<?php

define('USERNAME', 'admin');

$a = 10; //integer
// echo 'Hello, world!\n' . $a;
$b = 20;

// $string = "My value is $a + $b";
// echo $string."\n";

// "{10 + 20}" // not ok
// "{sum(10, 20)}" // ok

var_dump($b + 0.5198273918273918273);
// $pow = 10 / 2;

$number = 0x2A;

$bool = 10 > 3;
echo $bool;
var_dump($bool);
var_dump(null);

// USERNAME = 'test'; -> error

echo USERNAME;

$integer_number = intval(10.5);
$integer_number = (int)10.5;
var_dump($integer_number);

// $a++
// $a == $b
// $a === $b !!!

echo "<h1> Hey HTML ! </h1>";
?>

<html>
    <h2><?php echo $integer_number ?></h2>
</html>
