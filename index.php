<?php

//define sets a constant variable with first parameter being the name of the variable and the second parameter the value
define('NAME', 'Yoshi');
// $name = 'Yoshi';
// you concatenate strings together by using dot (.)

//to traverse strings u can do $name[0]

//strlen() finds string length
//strtoupper($string) and strtolower() converts string to upper case
//str_replace() replaces string. first parameter is what i want to replace and second parameter is what i want to replace it with and third parameter is the string itself

//arrays are written like this 
//$peopleOne = ['shaun', 'crystal', 'ryu']
//or
//$peopleTwo = array('ken','chun-li')

//print_r($array) prints arrays

//array_push(array, value) pushes to array and array_pop(array) pops last element

//count(array) works

//to merge array:
//thirdarray = array_merge(firstarray,secondarray)

//associative arrays (key & value pairs) 
//$assocArray = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown']
//to print it out, echo $assocArray['mario']

//you can also do
//$assocArray = array('bowser'=>'green')

//to add a new value $assocArray['toad'] = 'pink'

//u can create arrays inside arrays for multidimensional arrays
//all array operations work on them

//to embed php and html tags together what we do is 
//see code below
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <h1>User Profile Page</h1>

    <ul>
        <?php foreach ($variable as $key => $value) { ?>
            <h3><?php echo $variable; ?></h3>
       <?php } ?>
    </ul>
    
</body>
</html>