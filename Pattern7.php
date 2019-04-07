<?php
/**
 * print pattern.  
* * * * * * * * *
  * * * * * * *
    * * * * *
      * * *   
        *
 */

 class Pattern7{
    function test($n){
        for($i=$n;$i>=1;$i--){
            for($k=1;$k<=($n-$i);$k++)
			{
			 echo(" ");
			}
            for($j=1;$j<=$i;$j++){
                echo"*";
            }
            for($j=2;$j<=$i;$j++)
			{
			 echo"*";
			}
 
            echo "\n"; 
        }
    }
}
$var= new Pattern7();
$var->test(4);
echo"<br>";
echo "\n"; 
$var->test(7);
echo"<br>";
echo "\n"; 
$var->test(5);