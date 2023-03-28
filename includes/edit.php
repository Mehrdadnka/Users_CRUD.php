<?php

    include_once('../system/connection.php');



    $id = $_GET['editid'];
    $sql = "SELECT * FROM crud WHERE id = $id";
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);
    $name = $row['name'];
    $email = $row['email'];
    $phone_number = $row['phone_number'];
    $password = $row['password'];

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];

        $stmt = ("
                    UPDATE crud SET id = $id, name = '$name', email = '$email', phone_number = '$phone_number', password = '$password'
                    WHERE id = $id
                ");
        $result = mysqli_query($conn, $stmt);
            
        if($result) {
            echo "Edited successfully";
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
    <h1 class="title">Edit User</h1>
    
    <div class="container">
        <form class="product-form" action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input value="<?= $name; ?>" type="text" name="name" class="input" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input value="<?= $email; ?>" type="email" name="email" class="input" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input value="<?= $phone_number; ?>" type="number" name="phone_number" class="input" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input value="<?= $password; ?>" type="text" name="password" class="input" autocomplete="off">
            </div>
            <button type="submit" name="submit" class="btn edit-btn">Edit User</button>
<?php
    include_once "partials/footer.php"
?>