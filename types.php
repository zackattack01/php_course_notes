<!DOCTYPE html>
<html>
<head>
  <title>TYPES</title>
</head>
  <body>

    <?php 
    // Integers
    $int = 5;
    $bigger_int = 5000;

    //decimals
    $dec = 5.25;
    $negative_decimal = -5.25;

    // string
    $str = "Hello";

    // arrays
    // old way was 
    $arr = array();
    //but new to php 5.4 is
    $arr = [];
    $arr[1] = "Monday";
    $arr[2] = "Tuesday";
    //but you cant use echo for a whole array (no array to string conversion)
    //use var_dump($arr); or
    print_r($arr);
    
    //objects
    //for an object without defining a class just use a standard object (stdClass)
    $obj = new stdClass();
    $obj->name = "Ted";
    
    ?>
  </body>
</html>