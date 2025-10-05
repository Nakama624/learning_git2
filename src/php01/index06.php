<?php

for ($i =1; $i <= 5; $i++){
    for ($j =1; $j <= 5; $j++){
        echo "●";
    }
    echo "<br />";
}


echo "<br/>";
echo "<br/>";
echo "<br/>";
for ($i =1; $i <= 50; $i++){
    if($i%3 === 0 && $i%5 === 0){
        echo "FizzBuzz". "<br />";
    }elseif($i%3 === 0){
        echo "Buzz". "<br />";
    }elseif($i%5 === 0){
        echo "Fizz". "<br />";
    }else{
        echo $i. "<br />";
    }
    
}




echo "<br/>";
echo "<br/>";
echo "<br/>";

for ($i = 1; $i <= 5; $i++) {
  echo $i*2 . "<br />";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

$count=0;
while ($count<20){
    $count += 1;
    echo $count ."<br/>";
    
}

echo "<br/>";
echo "<br/>";
echo "<br/>";


$count=0;
while ($count<=100){

    if ($count%3===0){
        $count++;
        continue;
    }
    echo $count . "</br>";
    $count++;
}


$num = 0;

do {
  echo 'num = ' . $num . '<br />';
  $num += 1;
} while ($num < 3);
