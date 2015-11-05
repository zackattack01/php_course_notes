<!DOCTYPE html>
<html>
<head>
  <title>OPERATORS</title>
</head>
<body>
<?php 
  //Math operators + - * /
  // supports +=
  $num1 = 5;
  $num2 = 2;
  echo $num1 / $num2;
  echo "<br />";

  // string operators
  // . for concat, .= works the same way as +=
  $name = "Firsty";
  $last = "lasty";
  $full = $name . ' ' . $last;
  echo $full;
  echo "<br />";

  // comparison operators
  $x = 5;
  $y = 2100;

  echo $x == $y; // prints nothing even when casted to a string or int
  $z = 2100;
  echo (((int) $z == $y) == ((string) $z == $y)) == 1; // dubs equals probably coerces


 ?>
</body>
</html>