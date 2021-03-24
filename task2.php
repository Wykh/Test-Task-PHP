<?php
function findByPref($pref, $strs) {
  $lenPref = strlen($pref);
  foreach ($strs as $str) {
      $lenStr = strlen($str);
      if ($lenPref <= $lenStr  && substr($str, 0, $lenPref) == $pref) {
          $res[] = $str;
      }
  }
  return $res;
}

#test
$pref = "Lama";
$strs = array("Lamab", "La", "Ma", "Lamamama", "Lamalama", "", "123");

echo "Prefix: ".$pref."\n\n";
echo "Input array:\n";
for ($i = 0; $i < count($strs); $i++) {
  echo $i.") ".$strs[$i]."\n";
}

$res = findByPref($pref, $strs);
if ($res != null) {
  echo "\nResult:\n";
  for ($i = 0; $i < count($res); $i++) {
    echo $i.") ".$res[$i]."\n";
  }
}
else {
  echo "\nNo matches\n";
}
?>
