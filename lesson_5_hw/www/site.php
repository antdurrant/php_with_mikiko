<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>strings and numbers</title>
  </head>
  <body>
    <?php
    $pi = pi();
    $r = 12;
    $sentence = "This is an example sentence. ";
    $longer = (strlen($sentence) > $r) ?   " longer ": " shorter ";
    


    echo "The formula for the circumference of a circle is &#960 r <sup>2</sup><br>";
    echo "For a circle with radius <i>$r</i>, the circumference is ", pow($pi*$r, 2), "<br>";
    echo  "<b><i>$sentence</b></i> is a sentence. It has ", strlen($sentence),
    " characters and it is $longer than the size of the radius.<br>";
    echo "but I want to put each word on a new line and repeat it 4<sup>3</sup> times.<br>";
    echo wordwrap(str_repeat($sentence, pow(4, 3)), 5, "<br>");

     ?>


  </body>
</html>
