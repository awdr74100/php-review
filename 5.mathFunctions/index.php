<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <form action="index.php" method="post">
    <div>
      <label for="x">X: </label>
      <input type="text" name="x" id="x">
    </div>
    <div>
      <label for="y">Y: </label>
      <input type="text" name="y" id="y">
    </div>
    <div>
      <label for="z">Z: </label>
      <input type="text" name="z" id="z">
    </div>
    <button type="submit">Total</button>
  </form> -->
  <form action="index.php" method="post">
    <label for="radius">Radius: </label>
    <input type="text" name="radius">
    <button type="submit">Calculate</button>
  </form>
</body>

</html>

<?php
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x, $y);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand();
// $total = rand(1, 6);

// echo $total;

$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4 / 3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference = {$circumference}cm <br>";
echo "Area = {$area}cm^2 <br>";
echo "Volume = {$volume}cm^3 <br>";