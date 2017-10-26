<!-- PROJECT EULER - PROBLEM 1 -->
<?php 
function multipleSum($x){
  $sum=0;
  for ($i = 1; $i < $x; $i++){
    if($i%3===0 || $i%5===0){
      $sum+=$i;
    }
  }
  return $sum;
}

echo multipleSum(10) . "<br>";
?>
