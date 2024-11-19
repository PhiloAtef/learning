<?php

$errors = array('email'=>'','title'=>'','ingredients'=>'');

if(isset($_POST['submit'])){

    //form validation 
    //check email 
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be a valid email address';
        }

    }
    //check title 
    if(empty($_POST['title'])){
        echo 'A title is required <br />';
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }
    //check ingredients 
    if(empty($_POST['ingredients'])){
        echo 'at least one ingredient is required <br />';
    }else{
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
            $errors['ingredients']= 'ingredients must be in a comma seperated list' ;
        }
    }
    //end of post check
}


?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" method="POST" class="white">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma seperated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php') ?>   

</html>