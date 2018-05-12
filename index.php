<?php


$new = dirname(__DIR__) . '/' . 'Exercise11/library/maths/';
set_include_path(
get_include_path() . PATH_SEPARATOR . $new
        );

include 'mathsB.php';
//include 'library/maths/mathsB.php';

echo "Choose first number";
echo"\n";
$first = stream_get_line(STDIN, 10,"\n");
echo "Choose second number";
echo"\n";
$second = stream_get_line(STDIN, 10,"\n");
echo "Choose an operator";
echo"\n";
$operator = stream_get_line(STDIN, 10,"\n");

//we called the function doMathsB inside the namespace fff 
echo \fff\doMathsB($first, $second, $operator);

//function MathsA
//include 'library/maths/mathsA.php';
//echo doMathsA($first, $second, $operator);

//$new = dirname(__maths__) . '/' . 'library';
//set_include_path(
//get_include_path().PATH_SEPARATOR . $new
//        );
//iclude for templates:
//<?php 
//include 'mathsA.php';