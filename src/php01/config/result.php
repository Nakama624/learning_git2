<?php
$name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$number = htmlspecialchars($_POST['quantity'], ENT_QUOTES);

print "私の名前は、" . $name . "<br>";
print "ご希望の商品は、" . $item . "<br>";
print "注文数は、" . $number . "<br>";


