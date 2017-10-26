<!-- PROJECT EULER - PROBLEM 4 -->
<?php 

function largestProdPal(){
  $res = 0;
  for($i = 999; $i >= 100; $i--){
     for($j = $i; $j >= 100; $j--){
       if((string)($j * $i) === strrev((string)($j * $i))){
         $curr = $j * $i;
         if($curr > $res){
           $res = $curr;
         }
       }
     }
  }
  return $res;
}

echo largestProdPal() . "<br>";
?>