<?php
/**
 * print pattern.
 * * * * *
 * * * * *
 * * * * *
 *  
 */

 class pattern1{
    function test($n){
        for($i=1;$i<=$n;$i++){
            for($j=1;$j<=$n;$j++){
                echo"*";
            }
            echo "\n"; 
        }
    }
}
$var= new pattern1();
$var->test(4);
echo"<br>";
echo "\n"; 
$var->test(6);
echo"<br>";
echo "\n"; 
$var->test(8);