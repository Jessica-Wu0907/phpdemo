<?php
require_once "_includes/db_connect.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the form
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $age = mysqli_real_escape_string($link, $_POST['age']);
    $address = mysqli_real_escape_string($link, $_POST['address']);
    $contact = mysqli_real_escape_string($link, $_POST['contact']);

    // Insert data into the database
    $sql = "INSERT INTO students (name, age, address, contact) VALUES ('$name', '$age', '$address', '$contact')";

    if (mysqli_query($link, $sql)) {
        echo "Student record added successfully.";
    } else {
        echo "Error: " . mysqli_error($link);
    }
}

// Close the database connection
mysqli_close($link);
?>
