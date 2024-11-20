<?php
//connecting to database
$conn = mysqli_connect('localhost','philo','test1234','philo_pizza');

if(!$conn){
    echo 'connection error: '.mysqli_connect_error();
}

//write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make query and get results
$results = mysqli_query($conn,$sql);

//fetch the resulting rows as an array 
$pizzas = mysqli_fetch_all($results, MYSQLI_ASSOC);

mysqli_free_result($results);

//close connection 
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
    <div class="row">
        <?php foreach($pizzas as $pizza){ ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title'])?></h6>
                        <div><?php echo htmlspecialchars($pizza['ingredients'])?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">More Info</a>
                    </div>
                </div>
            </div>
        
        <?php }?>
    </div>
</div>
<?php include('templates/footer.php') ?>   

</html>