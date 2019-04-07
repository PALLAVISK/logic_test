<?php
/**
 * print pattern.  
*1
*12
*123
*1234
*/

class Pattern9{
    function test($n){
        for($i=1;$i<=$n;$i++)
        {
		for($j=1;$j<=$i;$j++)
			echo $j;			
		echo("\n");
        }
    }
}
$var= new Pattern9();
$var->test(4);
echo"<br>";
echo "\n"; 
$var->test(7);
echo"<br>";
echo "\n"; 
$var->test(5);