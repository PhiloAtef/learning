<?php
//connecting to database
$conn = mysqli_connect('localhost','philo','test1234','philo_pizza');

if(!$conn){
    echo 'connection error: '.mysqli_connect_error();
}

//write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas';

//make query and get results
$results = mysqli_query($conn,$sql);

//fetch the resulting rows as an array 
$pizzas = mysqli_fetch_all($results, MYSQLI_ASSOC);

print_r($pizzas);

mysqli_free_result($results);

//close connection 
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>

<?php include('templates/footer.php') ?>   

</html>