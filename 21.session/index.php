<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- This is the login page<br>
  <a href="home.php">This goes to the home page</a><br> -->
  <form action="index.php" method="post">
    <div>
      <label for="username">Username: </label>
      <input type="text" name="username">
    </div>
    <div>
      <label for="password">Password: </label>
      <input type="password" name="password">
    </div>
    <input type="submit" name="login" value="login">
  </form>
</body>

</html>

<?php

// $_SESSION["username"] = "Yi-Ru Lan";
// $_SESSION["password"] = "pizza123";

// echo $_SESSION["username"] . "<br>";
// echo $_SESSION["password"] . "<br>";

if (isset($_POST["login"])) {
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    // echo $_SESSION["username"] . "<br>";
    // echo $_SESSION["password"] . "<br>";

    header("Location: home.php");
  } else {
    echo "Missing username/password <br>";
  }
}
