<?php

//connecting to database
$conn = mysqli_connect('localhost','philo','test1234','philo_pizza');

if(!$conn){
    echo 'connection error: '.mysqli_connect_error();
}

?>