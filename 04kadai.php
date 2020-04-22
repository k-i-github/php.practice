<?php

function sum($double) {
    return $double * 2;
    
}

echo sum(5);

function kasan($a, $b) {
    return $a + $b;
}

echo kasan(7,3);





function hairetu($arr) {
  $value= 1;
  foreach($arr as $a) {
   $value *= $a;
  }
  return $value;
}


hairetu(array(1, 3, 5 ,7, 9));
 
echo hairetu(array(1, 3, 5 ,7, 9));




 function max_array($arr){

 $max_number = $arr[0];
 foreach($arr as $a){
         if($max_number < $a){
            $max_number = $a;
         }
     
 }

 return $max_number;
 }
 
echo max_array(array(0, 6, 3,200, 11));
?>