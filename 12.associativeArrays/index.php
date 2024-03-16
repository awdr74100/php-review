<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="country">Enter a country: </label>
    <input type="text" name="country" id="country">
    <button type="submit">Submit</button>
  </form>
</body>

</html>

<?php

$capitals = array(
  "USA" => "Washington D.C.",
  "Japan" => "Kyoto",
  "South Korea" => "Seoul",
  "India" => "New Delhi"
);

// echo $capitals["USA"];

// $capitals["USA"] = "Las Vegas";
// $capitals["China"] = "Beijing";
// array_pop($capitals);
// array_shift($capitals);
// foreach ($capitals as $key => $value) {
//   echo "{$key} = {$value}<br>";
// }

// $keys = array_keys($capitals);
// foreach ($keys as $key) {
//   echo "{$key} <br>";
// }

// $values = array_values($capitals);
// foreach ($values as $value) {
//   echo "{$value} <br>";
// }

// $capitals = array_flip($capitals);
// foreach ($capitals as $key => $value) {
//   echo "{$key} = {$value} <br>";
// }

// $capitals = array_reverse($capitals);
// foreach ($capitals as $key => $value) {
//   echo "{$key} = {$value} <br>";
// }

// echo count($capitals);

// $capital = $_POST["country"];
$capital = $capitals[$_POST["country"]];

echo "The capital is {$capital}";