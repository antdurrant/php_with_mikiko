<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "style.css" >
    <title>A story about Mikiko</title>
  </head>
  <body>
    <h2> All about Mikiko</h2>

    <?php
    $name = "Mikiko";
    $pet_name = "Mila";
    $styled_name = "<span> $pet_name </span>";

    $h2_colour = "red";

    echo("<h2 style = 'color: $h2_colour'> H2 test </h2>" );

    echo "There once was a lady named $name,<br>";
    echo "Who had a dog that was tame, <br>";
    echo "She named that dog $styled_name <br>";
    echo "But it was a shame, <br>";
    echo "$name realised $pet_name did not suit the doggy. <br> <hr> <br>";

    echo "$name thought for a while, and then she decided to give $pet_name ";

    $pet_name = "Manchego";
    echo "the new name $pet_name, because she loved cheese so much. <br>";
    echo "And so they lived happily ever after.";
    echo "<h2> THE END</h2>";

    $h2_colour = "blue";
    echo "<h2 style = 'color: $h2_colour'> NO REALLY THIS TIME </h2>";
     ?>
  </body>
</html>
