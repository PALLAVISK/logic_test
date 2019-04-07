<?php
/**
 * print pattern.  
*1
*22
*333
*4444
*/

class Pattern10{
    function test($n){
        for($i=1;$i<=$n;$i++)
        {
		for($j=1;$j<=$i;$j++)
			echo $i;
		echo("\n");
        }
    }
}
$patt= new Pattern10();
$patt->test(5);
echo"<br>";
echo "\n"; 
$patt->test(6);
echo"<br>";
echo "\n"; 
$patt->test(4);