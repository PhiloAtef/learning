<?php
//connecting to database
$conn = mysqli_connect('localhost','philo','test1234','philo_pizza');

if(!$conn){
    echo 'connection error: '.mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>

<?php include('templates/footer.php') ?>   

</html>