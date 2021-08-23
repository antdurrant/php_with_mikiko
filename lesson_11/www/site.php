<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>checkboxes</title>
  </head>
  <body>
    <form action="site.php" method="post">

      Apples<input type="checkbox" name="fruits[]" value = "apples"><br>
      Oranges<input type="checkbox" name="fruits[]" value = "oranges"><br>
      Lemons<input type="checkbox" name="fruits[]" value = "lemons"><br>
      Bananas<input type="checkbox" name="fruits[]" value = "bananas"><br>

      <input type="submit">

    </form>

    <?php

      $fruits = $_POST["fruits"];
      echo $fruits[0]

      ?>
  </body>
</html>
