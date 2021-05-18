<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>madlib</title>

  </head>
  <body>

    <h1> Fill in some information here </h1>
    <form>
      Adjective: <input type="text" name="adj" placeholder="yellow"> <br>
      Weapon: <input type="text" name="weapon" value="baseball bat"> <br>
      Your name:<input type="text" name="you" value="Mikiko"> <br>
      Coworker: <input type="text" name="coworker" value="Anthony"> <br>
      <input type="submit" <br><br>


    </form>

    <h1> A lovely story about coworkers</h1>
    <details><summary> Click here to read the story!</summary>
  <p>
    <?php
    $adj = $_GET["adj"];
    $weapon = $_GET["weapon"];
    $you = $_GET["you"];
    $coworker = $_GET["coworker"];

    echo "Once upon a time there was a person called $you who worked at J PREP. <br>";
    echo "They loved working with their best friends every day. <br>";
    echo "But one day they got fed up with $coworker and beat them over the head <br>";
    echo "with a $adj $weapon.<br>";
    echo "And that made them feel so much better."

     ?>
</details>

  </body>
</html>
