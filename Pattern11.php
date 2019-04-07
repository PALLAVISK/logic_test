<?php
/**
 * print pattern.  
*    A
*   BBB
*  CCCCC
* DDDDDDD
*/

class Pattern11{
    function test($n){
        for($i=1;$i<=$n;$i++)
        {
		for($k=1;$k<=($n-$i);$k++)
			{
			 echo(" ");
			}
		for($j=1;$j<=$i;$j++)
			{
			 echo(64+$i);
			}
		for($j=2;$j<=$i;$j++)
			{
			 echo(64+$i);
			}
 
		echo("\n");
        }
    }
}
$patt= new Pattern11();
$patt->test(a);
echo"<br>";
echo "\n"; 
$patt->test(t);
echo"<br>";
echo "\n"; 
$patt->test(u);
