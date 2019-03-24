<?php
/**
 * find out intrest.
 * Input: 2,34,12, Ouput: 8.16
 * Input: 8,34,12 Output: 12.24
 * Input: 3,66,54 Output: 106.92
 *  
 */

 
 class intrest{
    function intre($p,$n,$r){
        return $p*$n*$r/100;

    }
}
$intrii=new intrest();
echo "intrest of is=".$intrii->intre(2,34,12);
echo"<br>";
echo "intrest of is=".$intrii->intre(8,17,9);
echo"<br>";
echo "intrest of is=".$intrii->intre(3,66,54);
echo"<br>";
?>