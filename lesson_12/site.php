<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>associative array</title>
  </head>
  <body>


<form action="site.php" method="post">
  <input type="text" name="student" value="Jim">
  <input type="submit">
</form>

<?php
  $grades = array("Jim" => "A+", "Pam" => "B", "Oscar" => "C");

  $test["hey"] = 1;
  $test["you"] = 2;

  echo $_POST["student"], " got ", $grades[$_POST["student"]], " in the test. <br>";

  echo $test, "<br>", $test[1], "<br>", $test["hey"];




  echo "test1: ", array("value")[0], "<br>";
  echo "test2: ", array("key" =>"value")[0];
 ?>

  </body>
</html>
