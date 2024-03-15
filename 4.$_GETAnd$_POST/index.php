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
      <label for="username">Username: </label>
      <input type="text" id="username" name="username" autocomplete="off">
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" autocomplete="off">
    </div>
    <button type="submit">Submit</button>
  </form> -->
  <form action="index.php" method="post">
    <div>
      <label for="quantity">Quantity: </label>
      <input type="text" id="quantity" name="quantity">
    </div>
    <button type="submit">Submit</button>
  </form>
</body>

</html>

<?php

// $_GET  = Data is appended to the url
//          NOT SECURE
//          Char limit
//          Bookmark is possible w/ values
//          GET requests can be cached
//          Better for a search page
// 
// $_POST = Data is packaged inside the body of the HTTP
//          MORE SECURE
//          No data limit
//          Cannot bookmark
//          requests are not cached
//          Better for submitting credentials


// echo "{$_POST['username']} <br>";
// echo "{$_POST['password']} <br>";

$item = "pizza";
$price = 5.99;
$quantity = $_POST['quantity'];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}(s)<br>";
echo "Your total is \${$total}";
