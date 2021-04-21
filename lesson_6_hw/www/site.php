<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strings Homework</title>
  </head>
  <body>

    <br>
    <?php
    $friend_name = $_GET["friend_name"];
    $friend_age = $_GET["friend_age"];
    $my_name = $_GET["name"];
    $my_age = $_GET["age"];
    $for_split = $_GET["split"];
     ?>


    <h1> A story about my best friend </h1>
    
        <form action="site.php" method="get">
          Friend's name: <input type="text" name="friend_name"> <br>
          Friend's age: <input type="text" name="friend_age"> <br>
          Your name: <input type="text" name="name"> <br>
          Your age: <input type="text" name="age"> <br>
          Text to split: <input type="text" name="split"> <br>
          <input type="submit" >
        </form>

    Once upon a time, there was a lady named <?php echo $friend_name ?> . <br>
    <?php echo $friend_name ?>'s name is <?php echo strlen($friend_name) ?>
    characters, which is shorter than my name, <?php echo $my_name ?>. <br>
    My name is <?php echo strlen($my_name) ?> characters long.   <br>
    That means my name is <?php echo strlen($my_name)-strlen($friend_name) ?>
    characters longer than    <?php echo $friend_name ?>'s.<br>
    Our names share <?php echo similar_text($friend_name, $my_name) ?> characters. <br>
    My handwriting is bad, so whenever I write my name with a pen, I write it <br>
    <?php echo strtoupper($my_name) ?>.  <?php echo $friend_name ?> has beautiful
    handwriting, but she always writes her name <?php echo strtolower($friend_name) ?>
    for some reason. <br>
    When I was a kid, I used to write my name over and over, like this: <br>
    <?php echo str_repeat($my_name, 10) ?> <br>
    <?php echo $friend_name ?> says that when she was at school, she practiced writing
    her name backwards, like this: <br>
    <?php echo str_repeat(strrev($friend_name), 10) ?>
    <br><br><br><br>

    <?php echo wordwrap($for_split, 15, "<br>") ?>

    <br><br>

    <!-- str_pad(string, length, filler_string) -->
    <?php echo str_pad($my_name, (strlen($my_name)+1), " ") ?>


    <?php $repeated = str_repeat(str_pad($my_name, (strlen($my_name)+1), " "), 10) ?>
      <br><br>
      <?php echo $repeated ?>

      <!-- wordwrap(string, times, what to split with ) ** uses whitespace as the definition of the word -->
      <?php echo wordwrap($repeated, strlen($my_name), "<br>") ?>

<?php
$var = "abc";
$var_length = strlen($var);
$var_length_plus = $var_length + 1;
$var_padded = str_pad($var, $var_length_plus, " " );
$var_repeated = str_repeat($var_padded, 10);
$var_with_breaks = wordwrap($var_repeated, $var_length, "!<br>");

$var_with_breaks_evaluation = wordwrap(str_repeat(str_pad($var, (strlen($var) + 1), " " ), 10), strlen($var), "!<br>");
$var_with_breaks_evaluation = wordwrap(str_repeat(str_pad($var, (strlen($var) + 1), " " ), 10), strlen($var), "!<br>");
$var_evaluated = wordwrap("abc abc ", 4, "!<br>");

echo "variable: $var <br>";
echo "variable length: $var_length <br>";
echo "variable padded with a space: $var_padded<br>";
echo "variable padded and repeated 10 times: $var_repeated<br>";
echo "variable repeated and surrounded by wordrap: $var_with_breaks <br><br><br>";
echo "fully typed evaluation: $var_with_breaks_evaluation";
echo $var_evaluated;

 ?>


<?php echo str_pad("green", 8, "!") ?>

  </body>
</html>
