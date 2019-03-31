<?php
/**
 * print sum of given numbers.
 * Input: 3,6 Ouput: 18
 * Input: 5,8 Output: 26
 * Input: 9,14 Output:69
 *  
 */

 class sumnew{
    function test($begin,$end){
        for($i=$begin;$i<=$end;$i++){
            $sum =$sum + $i;

        }
        echo$sum;
    }
}
$var= new sumnew();
$var->test(3,6);
$var->test(5,8);
$var->test(9,14);