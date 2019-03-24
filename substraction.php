<?php

/**
 * find out substraction of two numbers.
 * Input: 10,5, Ouput: 5
 * Input: 6,6, Output: 0
 * Input: 6,3 Output: 3
 *  
 */

class substraction{
    function sub($a,$b){
        return $a-$b;

    }
}
$subi=new substraction();
echo "substraction of is=".$subi->sub(10,5);
echo"<br>";
echo "substraction of is=".$subi->sub(6,6);
echo"<br>";
echo "substraction of is=".$subi->sub(6,3);
echo"<br>";
?>