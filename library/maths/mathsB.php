<?php
namespace fff {
    function doMathsB($first, $second, $operator){
    if ($operator == '+') {
        ($result=$first + $second);
    }elseif ($operator == '-'){
        $result=$first - $second;
    }elseif ($operator == '*'){
        $result=$first * $second;
    }elseif ($operator == '/'){
        $result = $first / $second;
    }
    return $result;
 }   

}
