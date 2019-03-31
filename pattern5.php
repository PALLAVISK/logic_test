<?php
/**
 * print pattern.  
        *
      * *
    * * *
  * * * *
* * * * *
 */

 class pattern4{
    function test($n){
        for($i=$n;$i>=1;$i--){
            for($k=1;$k<=($n-$i);$k++)
			{
			 echo(" ");
			}
            for($j=1;$j<=$i;$j++){
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