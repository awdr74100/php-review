<?php
$firstName = "Yi-RU";
$lastName = "Lan";
$fullName = "{$firstName} {$lastName}";
$food = "pizza";

$age = 24;
$quantity = 4;

$gpa = 3.45;
$price = 4.99;
$taxRate = 5.1;

$employed = true; // some js (false=0, true=1, false not show in output)
$online = false;
$forSale = true;

$total = null;

echo "Hello {$fullName}<br>";
echo "You are {$age} years old<br>";
echo "Your gpa is {$gpa}<br>";
echo "Your pizza is \${$price}<br>";
echo "The sales tax rate is {$taxRate}%<br>";
echo "Online status {$online}<br>";


echo "You have ordered {$quantity} x {$food}s<br>";
$total = $quantity * $price;
echo "Your total is \${$total}";
