<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href = "style.css">
    <title>APRIL FOOL'S DAY</title>
  </head>
  <body>
    <?php
    $name = "Mikiko";
    $colour = "green";
    echo "<h2> April Fool's Day</h2>";
    echo "On April Fool's day, we trick each other. <br>
    $name painted her husband's face <span style = 'color: $colour';>$colour</span> while he was still sleeping.<br>
    When he woke up, he thought he was a monster.";
    $colour = "blue";
    echo "$name found it so funny that she tried it on her son. <br>
    This time, she painted his face <span style = 'color: $colour';>$colour</span>, but he wasn't fooled. <br>
    He just took a shower and cleaned his face.";

    ?>
  </body>
</html>
