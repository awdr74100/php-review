<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="">username: </label>
    <input type="text" id="username" name="username">
    <label for="">password: </label>
    <input type="text" id="password" name="password">
    <input type="submit" name="login" value="Log in">
    <!-- <button type="submit" name="login">Log in</button> -->
  </form>
</body>

</html>

<?php

// isset(): bool (return true is a variable is declared and not null)
// empty(): bool (return true if a variable is not declared, false, null, "")

// $username = 'BroCode';

// echo isset($username);

// if (empty($username)) {
//   echo "This variable is empty";
// } else {
//   echo "This variable is NOT empty";
// }

foreach ($_POST as $key => $value) {
  echo "{$key} = {$value}<br>";
}

// if (isset($_POST["login"])) {
//   // echo "You tried to login";

//   $username = $_POST["username"];
//   $password = $_POST["password"];

//   if (empty($username)) {
//     echo "Username is missing";
//   } elseif (empty($password)) {
//     echo "Password is missing";
//   } else {
//     echo "Hello {$username}";
//   }
// }
