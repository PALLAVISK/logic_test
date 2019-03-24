<?php

/**
 * addition of two numbers
 * Input: 5,10, Ouput: 15
 * Input: 6,6, Output: 12
 * Input: 9,2, Output: 11
 *  
 */

class addition{
    function add($a,$b){
        return $a+$b;

    }
}
$addi=new addition();
echo "addition of is=".$addi->add(5,10);
echo"<br>";
echo "addition of is=".$addi->add(6,6);
echo"<br>";
echo "addition of is=".$addi->add(9,2);
echo"<br>";

?>