<?php
/**
 * find out area of triangle.
 * Input: 7,3 Ouput: 10.5
 * Input: 33,12, Output: 198
 * Input: 2,8, Output: 8
 *  
 */

class triangle{
    function tri($a,$b,$x){
        return 0.5*$a*$b;

    }
}
$trii=new triangle();
echo "area of tri is=".$trii->tri(7,3,$x);
echo"<br>";
echo "area of tri is=".$trii->tri(33,12,$x);
echo"<br>";
echo "area of tri is=".$trii->tri(2,8,$x);
echo"<br>";
?>