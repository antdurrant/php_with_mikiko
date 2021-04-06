<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Types</title>
  </head>
  <body>
    <h1>Go away</h1>

    <?php

    $string = "don't forget the quotes and the semi-colon";
    $int = 55;
    $float = 3.14159;
    $boolean = false;

    echo "Strings go boom<br>";

    echo $string[5];
    echo str_replace("quotes", "quotations", $string), "<br>";
    echo substr($string, 2, 5);
    echo $string[2]


     ?>


     <p> This is regular text in html<br>
       and then you open the php bit <br>
       I want to know how long my "string" variable is <br>
        <?php echo strlen($string) ?> <br>
      then after closing the php bit, this is regular text in html again
    </p>

  </body>
</html>
