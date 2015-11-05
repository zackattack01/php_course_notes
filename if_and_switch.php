<!DOCTYPE html>
<html>
<head>
  <title>IF AND SWITCH</title>
</head>
<body>
<?php 
  $foo = 25;
  $bar = 30;

  // js style
  if ($foo == $bar) {
    echo "Samesies";
  } else if ($foo < $bar) {
    echo "LESS";  
  } else {
    echo "it is more";
  }

  echo "<br />";
  // supports ternaries
  echo ($foo == $bar) ? 'True' : 'I love ternaries';
  echo "<br />";

  //switch
  $age = 23;
  switch ($age) {
    case 0:
      echo "you are fetal";
      // if you dont break after any met criteria, all of the following met 
      //criteria cases will also be evaluated
      break;
    case 23:
      echo "nice";
      break;
    //you can also double up cases
    case 40:
    case 50:
      echo "same for either case";
      break;
    default:
      echo "default stuff";
      break;
  }
 ?>
</body>
</html>