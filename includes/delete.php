<?php
    include_once '../system/connection.php';

    if(isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
        $stmt = "DELETE FROM crud WHERE id = $id";
        $result = mysqli_query($conn, $stmt);

        if($result) {
            header('LOCATION: ../index.php');
        }
        else
        {
            die (mysqli_error($conn));
        }
    }