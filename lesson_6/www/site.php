<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user input</title>
  </head>
  <body>

     <form action="site.php" method="get">
       Name: <input type="text" name="name">
       <br>
       <br>
       Feeling: <input type="text" name="feeling">
       <input type="submit" >
     </form>
     <br>
     <?php
      $name = $_GET["name"];
      $feeling = $_GET["feeling"];

      echo "Hello, $name. How are you today?<br>";
      echo "I see you are feeling $feeling. Well I hope you feel better soon."
      ?>


  </body>
</html>
