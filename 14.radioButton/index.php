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
      <input type="radio" name="credit_card" id="visa" value="Visa">
      <label for="visa">Visa: </label>
    </div>
    <div>
      <input type="radio" name="credit_card" id="mastercard" value="Mastercard">
      <label for="mastercard">Mastercard: </label>
    </div>
    <div>
      <input type="radio" name="credit_card" id="american-express" value="American Express">
      <label for="american-express">American Express: </label>
    </div>
    <input type="submit" name="confirm" value="confirm">
  </form>
</body>

</html>

<?php

// if (isset($_POST["confirm"])) {
//   if (isset($_POST["credit_card"])) {
//     $creditCard = $_POST["credit_card"];
//     echo $creditCard;
//   } else {
//     echo "Please make a selection";
//   }
// }

if (isset($_POST["confirm"])) {
  $creditCard = null;

  if (isset($_POST["credit_card"])) {
    $creditCard = $_POST["credit_card"];
  }

  // if ($creditCard == "Visa") {
  //   echo "You selected Visa";
  // } elseif ($creditCard == "Mastercard") {
  //   echo "You selected Mastercard";
  // } elseif ($creditCard == "American Express") {
  //   echo "You selected American Express";
  // } else {
  //   echo "Please make a selection";
  // }

  switch ($creditCard) {
    case 'Visa':
      echo "You selected Visa";
      break;
    case 'Mastercard':
      echo "You selected Mastercard";
      break;
    case 'American Express':
      echo "You selected American Express";
      break;
    default:
      echo "Please make a selection";
      break;
  }
}
