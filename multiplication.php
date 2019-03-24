<?php

/**
 * find out multiplication of two no.
 * Input: 4,6, Ouput: 24
 * Input: 8,9, Output: 72
 * Input: 3,12, Output: 36
 *  
 */

class multiplication{
    function multi($a,$b){
        return $a*$b;

    }
}
$multii=new multiplication();
echo "multiplication of is=".$multii->multi(4,6);
echo"<br>";
echo "multiplication of is=".$multii->multi(8,9);
echo"<br>";
echo "multiplication of is=".$multii->multi(3,12);
echo"<br>";
