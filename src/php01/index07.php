<?php
function text($number1, $number2){
    $value = $number1 + $number2;
    return $value;
}
$total=text(2, 3);
echo $total;

echo "<br/>";
echo "<br/>";
echo "<br/>";

function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total;

echo "<br/>";
echo "<br/>";
echo "<br/>";


function total($score1, $score2, $score3){
    $total_score = $score1 + $score2 + $score3;
    if ($total_score>210){
        echo "合計点は.'$total_score'.なので合格です";    
    }else{
        echo "合計点は'$total_score'なので不合格です";
    }
}
echo (total(80, 60, 90));

echo "<br/>";
echo "<br/>";
echo "<br/>";

function getsquere($vertical,$horizontal){
    return $vertical*$horizontal;  
}
function gettriangle($vertical,$horizontal){
    return $vertical*$horizontal / 2;  
}
function getdaikei($upper, $lower, $horizontal){
    return ($upper+$lower) *$horizontal /2;  
}

echo getsquere(5, 5) . "<br/>";
echo gettriangle(7, 8) . "<br/>";
echo getdaikei(4, 5, 4);
    