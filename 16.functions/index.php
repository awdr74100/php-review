<?php

// function happyBirthday($firstName, $age)
// {
//   echo "Happy Birthday dear {$firstName}! <br>";
//   echo "Happy Birthday to you! <br>";
//   echo "Happy Birthday dear {$firstName}! <br>";
//   echo "You are {$age} years old! <br><br>";
// }

// happyBirthday("Eric", 24);
// happyBirthday("Owen", 25);
// happyBirthday("Sharon", 31);

// function isEven($number)
// {
//   return $number % 2;
// }

// echo isEven(10);

// function reverseString($str) {
//   return join(array_reverse(str_split($str)));
// }

// echo reverseString("HelloWorld");

function hypotenuse(float $a, float $b)
{
  $c = sqrt($a ** 2 + $b ** 2);

  return $c;
}

echo hypotenuse(3, 4) . "<br>";
echo hypotenuse(4, 5) . "<br>";
