<?php

    include_once('../system/connection.php');




    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];

        $stmt = ("
                    INSERT INTO crud(name, email, phone_number, password) 
                    VALUES ('$name', '$email', '$phone_number', '$password')
                ");
        $result = mysqli_query($conn, $stmt);
            
        if($result) {
            header('LOCATION: ../index.php');
        }
        else{
            die (mysqli_error($conn));
        }
    }

?>

<?php
    include_once "partials/header.php";
?>
    <h1 class="title">Create New User</h1>
    
    <?php
        include_once "partials/form.php";
    ?>
            <button type="submit" name="submit" class="btn edit-btn">Add User</button>
<?php
    include_once "partials/footer.php"
?>