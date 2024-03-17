<?php
$username = "Ian Lan";
$phone = "123-456-7890";
$message = array("Hello", "World");

// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);
// $username = str_pad($username, 20, "0");
// $phone = str_replace("-", "", $phone);
// $username = strrev($username);
// $username = str_shuffle($username);
// $equals = strcmp($username, "Bro Code");
// $count = strlen($username);
// $index = strpos($username, "L");
// $firstName = substr($username,0, 3);
// $lastName = substr($username, 4);
// $fullName = explode(" ", $username);
$message = implode("-", $message);

echo $username . "<br>";
echo $phone . "<br>";
echo $message . "<br>";

// foreach ($fullName as $name) {
//   echo "{$name} <br>";
// }
