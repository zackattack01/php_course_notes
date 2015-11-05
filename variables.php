<!DOCTYPE html>
<html>
<head>
  <title>Variables</title>
</head>
  <body>
  <?php 
    // vars, underscore style
    $first_name = 'John';
    $last_name = 'Smith';

    // period for concatentation
    echo $first_name . ' ' . $last_name;

    echo "<br>";
    // single quotes for literal $, double to be parsed for interpolation by php
    echo "$first_name $last_name";

  ?>
  </body>
</html>