<!-- PROJECT EULER - PROBLEM 5 -->
<?php 
function smallestMultiple($max) {
    var res;
    for ($i = 1; $i < INF; $i++) {
		$count = 0;
        for ($j = $max; $j >= 1; $j--) {
            if($i % $j === 0){
              $count++
            }
        }
        if($count === $max){ 
          $res = $i; 
          break 2;
        }
    }
   return $res;
}

echo smallestMultiple() . "<br>";

?>
