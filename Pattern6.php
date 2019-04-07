<?php
/**
 * print pattern.  
        *
      * * *
    * * * * *
  * * * * * * *
* * * * * * * * *
 */

 class Pattern6{
    function test($n){
        for($i=1;$i<=$n;$i++){
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
$var= new Pattern6();
$var->test(4);
echo"<br>";
echo "\n"; 
$var->test(7);
echo"<br>";
echo "\n"; 
$var->test(5);