<?php
/**
 * print pattern.  
*1
*11
*121
*1231
*12341
*123451
*/

class Pattern12{
    function test($n){
        for($i=0;$i<=$n;$i++)
        {
		for($j=1;$j<=$i;$j++)
		{
			echo$j;
		}
		echo("\n");
        }
    }
}
$patt= new Pattern12();
$patt->test(4);
echo"<br>";
echo "\n"; 
$patt->test(6);
echo"<br>";
echo "\n"; 
$patt->test(8);