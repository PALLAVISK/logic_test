<?php

/**
 * find out area of square and cube.
 * Input: 18 Ouput: 324,5832
 * Input: 45, Output: 2025,91125
 * Input: 76, Output: 5776,438976
 *  
 */
class sqcu{
    function abc($x){
        return $x*$x;
    }
    function xyz($y){
        return $y*$y*$y;
    }
}
$squa=new sqcu();
echo "area of is=".$squa->abc(18);
echo "area of is=".$squa->xyz(18);
echo"<br>";
echo "area of is=".$squa->abc(45);
echo "area of is=".$squa->xyz(45);
echo"<br>";
echo "area of is=".$squa->abc(76);
echo "area of is=".$squa->xyz(45);
echo"<br>";
?>