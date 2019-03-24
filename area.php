<?php
/**
 * area of circle
 * Input: 2 Ouput: 12.568
 * Input: 9, Output: 254.50
 * Input: 5, Output: 78.55
 *  
 */

 
class area{
    function are($r,$pi){
        return 3.142*$r*$r;

    }
}
$aree=new area();
echo "area of is=".$aree->are(2,$pi);
echo"<br>";
echo "area of is=".$aree->are(9,$pi);
echo"<br>";
echo "area of is=".$aree->are(5,$pi);
echo"<br>";
?>