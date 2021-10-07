<?php
$arr=array("0","0","0");
$n=10;
$n1=$n+$n;
echo "[";
foreach ($arr as $arr)
{
    if ($arr % 2 == 0){
        $even=$arr-($n1);
        echo "$even";
    }
    else {
        $odd=$arr+$n1;
        echo "$odd";
    }
    echo ",";
}
echo "]";