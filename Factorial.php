<?php
/**
* factorial of a given number.
 * Input: 5, Ouput: 120
 * Input: 6 Output: 720
 * Input: 9 Output: 362880
 *  
*/

class Factorial{
    function test($n){
        $fact=1;
        for($i=1;$i<=$n;$i++){
        $fact=$fact*$i;
        }
         echo $fact;
     }
}
$facto= new Factorial();
$facto->test(5);
echo"<br>";
echo "\n"; 
$facto->test(6);
echo"<br>";
echo "\n"; 
$facto->test(9);
