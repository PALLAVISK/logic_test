<?php

/**
 * divison of two numbers
 * Input: 18,8, Ouput: 2.5
 * Input: 30,6, Output: 5
 * Input: 84,12 Output: 7
 *  
 */

class division{
    function div($a,$b){
        return $a/$b;

    }
}
$divi=new division();
echo "division of is=".$divi->div(18,8);
echo"<br>";
echo "division of is=".$divi->div(30,6);
echo"<br>";
echo "division of is=".$divi->div(84,12);
echo"<br>";

?>