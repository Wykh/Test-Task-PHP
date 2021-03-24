<?php
$q = $_REQUEST["q"];

$res = "";

if (ctype_digit($q)) {
    $q = (int)$q;
    if (($q % 4 == 0 and $q % 100 != 0) or $q % 400 == 0) {
	    $res = "ДА"; 
    }
    else {
	    $res = "НЕТ";
    }
}

echo $res === "" ? "ОШИБКА ВО ВХОДНЫХ ДАННЫХ" : $res;
?> 
