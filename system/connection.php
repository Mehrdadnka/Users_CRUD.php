<?php
    $conn = new mysqli('localhost', 'root', '', 'crud_operation');

    if(!$conn) {
        die (mysqli_error($conn));
    }