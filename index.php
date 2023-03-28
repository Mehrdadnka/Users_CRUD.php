<?php
    include_once "system/connection.php";

    $stmt = 'SELECT * FROM crud';
    $result = mysqli_query($conn, $stmt);
?>

<?php
    include_once "partials/header.php";
?>
    <h1 class="title">Users CRUD</h1>
    <p>
        <a href="includes/add_user.php" class="btn btn-success">Add User</a>
    </p>
   <div class="container">

    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($result) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone_number = $row['phone_number'];
                        $password = $row['password'];
                        echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$phone_number.'</td>
                                <td>'.$password.'</td>
                                <td>
                                    <a class="btn edit-btn" href="includes/edit.php?editid='.$id.'">Edit</a>
                                    <a class="btn delete-btn" href="includes/delete.php?deleteid='.$id.'">Delete</a>
                                </td>
                             </tr>';
                    }
                }
            ?>
            
<?php
    include_once "partials/footer.php"
?>