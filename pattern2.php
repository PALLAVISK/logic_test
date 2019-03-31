<?php
/**
 * print pattern.
 *   * 
 *   * * 
 *   * * * 
 *   * * * *
 *  
 */

 class pattern2{
    function test($n){
        for($i=1;$i<=$n;$i++){
            for($j=1;$j<=$i;$j++){
                echo"*";
            }
            echo "\n"; 
        }
    }
}
$var= new pattern2();
$var->test(4);
echo"<br>";
echo "\n"; 
$var->test(2);
echo"<br>";
echo "\n"; 
$var->test(5);