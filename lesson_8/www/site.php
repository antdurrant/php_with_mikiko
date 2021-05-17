<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>madlibs</title>
  </head>
  <body>

    <form action="site.php" method="get">
      Color: <input type="text" name="colour"><br>
      Plural noun: <input type="text" name="plnoun"> <br>
      Celeb: <input type="text" name="celeb"><br>
      <input type="submit">
      <p>

    <?php

    $colour = $_GET["colour"];
    $plural_noun = $_GET["plnoun"];
    $celebrity = $_GET["celeb"];
    echo "Roses are $colour, <br>";
    echo "$plural_noun are blue, <br>";
    echo "I love $celebrity <br>";
     ?>
  </body>
</html>
