<!-- PROJECT EULER - PROBLEM 3 -->

<?php 
function largestPrime($x) {
  $product = 1;
  $res;
  for ($c = 2; $c <= INF; $c++) {
    for ($i = $c - 1; $i >= 1; $i--) {
      if ($i === 1) {
        if ($x % $c === 0) {
          $product *= $c;
          if ($product === $x) {
            $res = $c;
            break 2;
          }
        }
      }
      if ($c % $i === 0) {
        break;
      }
    }
  }
  return $res;
}

echo largestPrime(600851475143) . "<br>";
 ?>

