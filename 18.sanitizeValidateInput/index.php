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
      <label for="username">Username: </label>
      <input type="text" id="username" name="username">
    </div>
    <div>
      <label for="age">Age: </label>
      <input type="text" id="age" name="age">
    </div>
    <div>
      <label for="email">Email: </label>
      <input type="text" id="email" name="email">
    </div>
    <input type="submit" name="login" value="login">
  </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {
  // $username = $_POST["username"];

  /* avoid <script>alert("Hello World")</script> */
  // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

  /* just get number */
  // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

  /* just get email */
  // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

  // echo "Hello {$username}";
  // echo "You are {$age} years old";
  // echo "Your email is {$email}";

  $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

  if (empty($email)) {
    echo "That email wasn't valid";
  } else {
    echo "Your email is $email";
  }
}
