<?php

$a = 7;
if ($a===5) {
    echo "\$aは5です";
}elseif ($a===8){
    echo "\$aは8です";
}else{
    echo "\$aは5または8以外です";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$people = "Saburo";


switch ($people) {
    case "Taro":
        echo "Taroです";
        break;
    case "Jiro":
        echo "Jiroです";
        break;
    case "Saburo":
        echo "Saburoです";
        break;
    default:
        echo "誰にもあてはまりません";
        break;
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


$a = 7;
$b = ($a === 1) ? "ほんと" : "うそ";
echo $b;