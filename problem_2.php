<!-- PROJECT EULER - PROBLEM 2 -->
<?php 

function evenFib($limit){
  $res = 0;
  
  $phi = (1 + sqrt(5))/2;
  for($i = 0; $i <= INF; $i+=3){
    $fib = (pow($phi,$i) - pow((1 - $phi),$i))/sqrt(5);
    if($fib >= $limit){
    break;
    } else {
    $res += $fib;
    }
  }
  return $res;
}

echo evenFib(4000000) . "<br>";
?>