<?php
  // Single line comment
  # Single line comment
  /*
    Multiline
    comment
  */

  #VARIABLES
  /*
    - Prefix with $
    - Start with a letter or an underscore
    - Only letters, numbers and underscores
    - Case sensitve
  */


  #DATA tidy_parse_string
  /*
    String
    Integers
    floats
    Booleans
    Arrays
    Objects
    NULL
    Resource
  */

  $output = 'Hello World';
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $string1 = 'Hello';
  $string2 = 'World';
  $greeting = $string1 .' '. $string2.'!';
  $greeting2 = "$string1 $string2";

  $string3 = "They're Here";

  $float1 = 4.4;
  $bool1 = true;

  define('GREETING', 'Hello Everyone', true);
;
  echo GREETING;
?>
