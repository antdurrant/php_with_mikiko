<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" site="site.php" href="style.css">
    <title>get/post</title>
  </head>
  <body>




    <form action="site.php" method="post">
      Password: <input type="password" name="password"><br>
      Name: <input type="text" name="name">
      <input type="submit">
      <br><br>

      <?php
      echo $_POST["password"];
      echo $_POST["name"];
      ?>
    </form>
  </body>
</html>
