<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>calculator?</title>
  </head>
  <body>

    <h1>Hello, calculator</h1>

    I TAKE IT BACK, YOU TOTALLY WORK

    <form action="site.php" method="get">
      <!-- <input type="text" name="operator" value=""> -->

      <input type="radio" id="plus" name="operator" value="plus">
      <label for="plus">plus</label><br>
      <input type="radio" id="minus" name="operator" value="minus">
      <label for="minus">minus</label><br>
      <input type="radio" id="divide" name="operator" value="divide">
      <label for="divide">divide</label><br>
      <input type="radio" id="times" name="operator" value="times">
      <label for="times">times</label><br>

      <input type="number" name="num1" value="num1">
      <input type="number" name="num2" value="num2">
      <input type="submit">
    </form>

    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    switch($_GET["operator"]){
      case "plus":
      echo $num1+$num2;
      break;
      case "minus":
      echo $num1-$num2;
      break;
      case "divide":
      echo $num1/$num2;
      break;
      case "times":
      echo $num1*$num2;
      break;
    }
     ?>

  </body>
</html>
