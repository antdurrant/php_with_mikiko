<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lesson 3: variables</title>
  </head>
  <body>
    <h1> Lesson 3: variables </h1>

    <?php

      $character_name = "Jeff";
      $character_age = 88;

      echo "There once was a man named $character_name <br>";
      echo "He was $character_age years old <br>";
      echo "One day, $character_name realised he was a woman <br>";

      $character_name = "Sally";
      $character_age = round($character_age/3);

      echo "He really liked the name $character_name <br>";
      echo "So that's what she decided to rename herself";
      echo "But he didn't like being $character_age <br>";
      echo "He wished he was still $character_age <br>";

    ?>

  </body>
</html>
