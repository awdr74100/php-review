<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="counter">Enter a number down from:</label>
    <input type="text" id="counter" name="counter">
    <button type="submit">Start</button>
  </form>
</body>

</html>

<?php

// for ($i = 0; $i < 5; $i++) {
//   echo "{$i}<br>";
// }

$counter = $_POST["counter"];

for ($i = $counter; $i > 0; $i--) {
  echo "{$i}<br>";
}
