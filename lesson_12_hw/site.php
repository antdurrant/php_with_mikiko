<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>associative arrays2</title>
  </head>
  <body>

<h2> Dalmatian problem </h2>

  Mikiko has 6 dalmatians.<br>
  Jodi has 93 dalmatians.<br>
  Anthony has 12 dalmatians.<br>
  Peeter only has 2 dalmatians. Poor Peeter!<br>

  <p><b> How can you combine the people to get 101 dalmatians?</b></p>

              <form action="site.php" method="post">

      <input type="checkbox" name="names[]" value = "Mikiko">Mikiko<br>
      <input type="checkbox" name="names[]" value = "Jodi">Jodi<br>
      <input type="checkbox" name="names[]" value = "Anthony">Anthony<br>
      <input type="checkbox" name="names[]" value = "Peeter">Peeter<br>
<br>
      <input type="submit">

    </form>

<?php

$dalmatians = array("Mikiko" => 6, "Jodi" => 93, "Anthony" => 12, "Peeter" => 2);
// nope, no idea how this works

// want to take the input from the html, use that to filter the array
// then take the sum
$out = array_intersect_key($dalmatians, $_POST["names"]);

 ?>
 <br> <br><br>

Your answer results in: <?php $dalmatians["Mikiko"] ?>



  </body>
</html>
