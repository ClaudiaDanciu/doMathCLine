
<?php
//Write the logic to perform basic maths and return 
//the answer using the supplied parameters.
function doMathsA($first, $second, $operator){
    if ($operator == '+') {
        $result=$first + $second;
    }elseif ($operator == '-'){
        $result=$first - $second;
    }elseif ($operator == '*'){
        $result=$first * $second;
    }elseif ($operator == '/'){
        $result = $first / $second;
    }
    return $result;
 
 }   
   
//extract ($first, $second, $operator);   
//echo "The result is";    

   