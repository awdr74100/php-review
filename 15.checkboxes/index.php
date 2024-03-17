<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <div>
      <input type="checkbox" name="foods[]" id="pizza" value="Pizza">
      <label for="pizza">Pizza</label>
    </div>
    <div>
      <input type="checkbox" name="foods[]" id="hamburger" value="Hamburger">
      <label for="hamburger">Hamburger</label>
    </div>
    <div>
      <input type="checkbox" name="foods[]" id="hotdog" value="Hotdog">
      <label for="hotdog">Hotdog</label>
    </div>
    <div>
      <input type="checkbox" name="foods[]" id="taco" value="Taco">
      <label for="taco">Taco</label>
    </div>
    <input type="submit" name="submit">
  </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
  $foods = $_POST["foods"];

  // echo $foods[3];

  // foreach ($foods as $key => $value) {
  //   echo "{$key} = {$value}<br>";
  // }

  foreach ($foods as $food) {
    echo "{$food} <br>";
  }

  // if (isset($_POST["pizza"])) {
  //   echo "You like pizza! <br>";
  // }
  // if (isset($_POST["hamburger"])) {
  //   echo "You like hamburger! <br>";
  // }
  // if (isset($_POST["hotdog"])) {
  //   echo "You like hotdog! <br>";
  // }
  // if (isset($_POST["taco"])) {
  //   echo "You like taco! <br>";
  // }
  // if (empty($_POST["pizza"])) {
  //   echo "You DON'T like pizza! <br>";
  // }
  // if (empty($_POST["hamburger"])) {
  //   echo "You DON'T like hamburger! <br>";
  // }
  // if (empty($_POST["hotdog"])) {
  //   echo "You DON'T like hotdog! <br>";
  // }
  // if (empty($_POST["taco"])) {
  //   echo "You DON'T like taco! <br>";
  // }
}
