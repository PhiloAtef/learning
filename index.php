<?php

//string comparisons are determined by what first letter comes first in the alphabet
//uppercase letters are seen as less than lower case letters
//loose equality and strict equality
//loose is == where it doesnt look at the type of data
//strict is === where it takes into account the type of data

//5 == '5' is 1 
//5 === '5' is ""

//functions
//==========

function sayHello($name = 'anonymous'){
    echo "helloooooo everyyyyoneeee. especially $name! <br />";
}

sayHello('philo');

function formatProduct($product){
    echo "{$product['name']} costs {$product['price']} to buy <br />";
}

formatProduct(['name'=>'gold star','price'=> 20]);

function formatProductWithReturn($product){
    return "{$product['name']} costs {$product['price']} to buy but formatted <br />";
}

$formatted = formatProductWithReturn(['name'=>'gold star','price'=> 20]);

echo $formatted;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>