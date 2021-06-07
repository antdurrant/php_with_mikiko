<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    Hello <br>


    <?php

    $names = array("Kevin", "Karen", "Kim", "Kat");

    $names[10] = "left";
    echo "$names <br>";

    echo "$names[1] <br>";
    echo "$names[8] <br>";

    echo count($names)
     ?>
  </body>
</html>
