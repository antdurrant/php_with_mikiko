<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>calcualtor v1</title>
  </head>
  <body>

    <h1>Add some numbers</h1>
    <form action="site.php" method="get">
      <input type="number" name="value_1">
      <input type="number" name="value_2">
      <br>
      <input type="password" name="val1" value="">
      <input type="password" name="val2" value="">

      <br>
      <!-- nope, this doesn't work - how to do operator selection?  -->
      <!--
      <input type="radio" id="+" name="op" value=+><label for "+">"+"</label><br>
      <input type="radio" id="-" name="op" value=-><label for "-">"-"</label><br>
      <input type="radio" id="*" name="op" value=*><label for "*">"*"</label><br>
      <input type="radio" id="/" name="op" value=/><label for "/">"/"</label><br>
      ! -->

      <input type="submit">
    </form>

    <?php
    echo $_GET["value_1"] + $_GET["value_2"];
    echo "<br>";
    echo $_GET["val1"] + $_GET["val2"]
     ?>
  </body>
</html>
