<!DOCTYPE html>
<html>
<head>
  <title>ARRAYS</title>
</head>
<body>
<?php 
  // arrays
  // uses dynamic array
  $pets = [];
  $pets[] = 'Dog';
  $pets[] = 'Cat';
  $pets[] = 'Piglet';
  // this is the same as $pets = ['Dog', 'Cat', 'Piglet'];

  //or strings as keys rather than indices
  $animals = [
    'apex_predators' => ['Zack']
  ];

  // push pop are array_push(array_name, thing_to_be_pushed) and array_pop(array_name)
  // unshift and shift are array_unshift and array_shift, arguments are the same as above

  //arrays can be nested arbitrarily deep
  $more_animals = ['close_seconds' => ['sharks', 'crocodiles', 'lions', 'honey badgers']];
  //and indices named as strings can be keyed into
  array_push($animals, $more_animals['close_seconds']);
  // and set as a value in a hash table would
  array_pop($animals);
  $animals['close_seconds'] = $more_animals['close_seconds'];

  echo '<pre>';
  print_r($animals);
 ?>
</body>
</html>