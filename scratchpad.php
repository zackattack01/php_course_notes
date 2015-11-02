<?php 
  $odd_numbers = [1,3,5,7,9];
  $even_numbers = [2,4,6,8,10];
  print_r(array_slice($even_numbers, 3, 1));
  print_r($even_numbers);
  print_r(array_splice($even_numbers, 3));
  print_r($even_numbers);
?>