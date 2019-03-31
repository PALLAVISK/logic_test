<?php
/**
 * print table of a number.
 * Input: 3 Ouput: 3 6 9 12 15 18 21 24 27 30
 * Input: 5 Output: 5 10 15 20 25 30 35 40 45 50
 * Input: 9 Output:9 18 27 36 45 54 63 72 81 90
 *  
 */

 class table{
    function test($a){
        for($i=1;$i<=10;$i++){
            echo$i*$a;
            echo '<br>'; 
        }
    }
}
$var= new table();
$var->test(3);
echo '<br>'; 
$var->test(5);
$var->test(9);
?>
