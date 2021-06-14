<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Subset arrays</title>
  </head>
  <body>
    <h2>Select your favorite person</h2>
    <form class="radio" method="get">
      <input type="radio" id="Anthony" name="person" value="Anthony">
      <label for="Anthony">Anthony</label><br>
      <input type="radio" id="Nelson" name="person" value="Nelson">
      <label for="Nelson">Nelson</label><br>
      <input type="radio" id="neither" name="person" value="neither">
      <label for="neither">neither</label><br>
      <input type="submit">
    </form>
    <br>
    <br>
    <?php
    $names = array("neither","Anthony", "Nelson");
    $ages = array("NOT A PERSON", 34, 38);
    $hobbies = array("NOPE", "skateboarding", "computer games");
    $selected = array_search($_GET["person"], $names);
    echo "<h4> $names[$selected] </h4>";
    echo "<p> This person is $ages[$selected] years old. <br>";
    echo "Their hobbies include $hobbies[$selected]."
    ?>

  </body>
</html>
