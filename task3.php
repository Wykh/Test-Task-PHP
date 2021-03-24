<?php
function countDrinks($n, $m) {
  if ($n > $m || $n == 0)
    return 0;
  return intdiv($m, $n);
}

# test
if ($argc >= 3) {
  $n = $argv[1]; # mans
  $m = $argv[2]; # drinks
}
else {
  $n = 5;
  $m = 5;
}

echo countDrinks($n, $m)."\n";
 ?>
