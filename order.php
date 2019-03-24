<?php
/**
 * find out given  numbers is in asscending or descending order.
 * Input: 2,34,5 Ouput: 2,5,34 / 34,5,2
 * Input: 91,18,56 Output: 18,56,91 / 91,56,18
 * Input: 10,1,35 Output:1,10,35 / 35,10,1
 *  
 */

 
 class order{
    function ordi($a,$b,$c){
        if($a>=$b &&$a>=$c ){
            if($b>=$c){
                echo"Descending order".$a,$b,$c;
                echo"ascending order".$c,$b,$a;
            }
            else{
                echo"Descending order".$a,$c,$b;
                echo"ascending order".$b,$c,$a;   
            }
        }
        elseif($b>=$a &&$b>=$c ){
            if($a>=$c){
                echo"Descending order".$b,$a,$c;
                echo"ascending order".$c,$a,$b;
            }
            else{
                echo"Descending order".$b,$c,$a;
                echo"ascending order".$a,$c,$b;   
            }
        }
        elseif($c>=$a &&$c>=$b ){
            if($a>=$b){
                echo"Descending order".$c,$a,$b;
                echo"ascending order".$b,$a,$c;
            }
            else{
                echo"Descending order".$c,$b,$a;
                echo"ascending order".$a,$b,$c;   
            }
        }

    }
 }               
$ordu=new order();
$ordu->ordi(2,34,5); 
$ordu->ordi(91,18,56);
$ordu->ordi(10,1,35);
   

?>