<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User_Input</title>
  </head>
  <body>
  My name is <?php echo$_GET["my_name"]; ?>
  My Age is <?php echo$_GET["my_age"]; ?>
  Friend's name is <?php echo$_GET["friend_name"]; ?>
  Friend's age is <?php echo$_GET["friend_age"]; ?>

<form action ="0419_01hw.php" method="get">
  My Name is <input type="text" name ="my_name"><br>
  My Age is <input type="number" name="my_age"><br>
  Friend's Name is <input type="text" name="friend_name"><br>
  Friend's Age is is <input type="range"  name="friend_age" min="20" max="100">
  submit <input type="submit">
</form>

  </body>
</html>
