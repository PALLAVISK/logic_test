<?php
/**
 * print pattern.  
 *  * * * *
 *    * * *
 *      * *
 *        *  
 */

 class pattern4{
    function test($n){
        for($i=1;$i<=$n;$i++){
            for($k=1;$k<$i;$k++)
			{
			 echo(" ");
			}
            for($j=$i;$j<=$n;$j++){
                echo"*";
            }
            echo "\n"; 
        }
    }
}
$var= new pattern4();
$var->test(4);
echo"<br>";
echo "\n"; 
$var->test(2);
echo"<br>";
echo "\n"; 
$var->test(5);