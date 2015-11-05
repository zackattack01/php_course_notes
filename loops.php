<!DOCTYPE html>
<html>
<head>
  <title>LOOPS</title>
</head>
<body>
<?php 
  //for loop, 3 java-esque args
  for ($i=0; $i < 10; $i++) { 
    echo $i . "<br />";
  }

  // for array iteration
  $data = [
    'thing',
    'obj',
    'mhmm'
  ];

  //with plain for use count(array) for length
  for ($i=0; $i < count($data); $i++) { 
    echo $data[$i] . '<br />';
  }
  
  //or with a foreach 
  foreach ($data as $key => $value) {
    echo $key . ': ';
    echo $value;
    echo '<br />';
  }

  $nested_data = [
    'lv1' => [
      'lv1obj1',
      'lv1obj2'  
    ],

    'lv2' => [
      'lv2obj1',
      'lv2obj2'
    ]

  ];
  // or for a nested array
  foreach ($nested_data as $_key => $_value) {
    echo $_key . ': ';

    foreach ($_value as $__key => $__value) {
      echo $__value;
    }
    echo "<br />";
  }

  //and whiles
  $condition = true;
  $i = 0;
  while ($condition) {
    if ($i === 10) {
      $condition = false;
    }
    $i += 1;
    echo $i;
    echo "<br />";
    //coerces boolean true to 1
    echo (string) $condition;
    echo "<br />";
  }
 ?>
</body>
</html>