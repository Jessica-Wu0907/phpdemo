<?php 
//connect to db
require_once "_includes/db_connect.php";

// Fetch all student records from the database
$sql = "SELECT * FROM students";
$result = mysqli_query($link, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Name</th><th>Age</th><th>Address</th><th>Contact</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['age'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['contact'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No student records found.';
    }
} else {
    echo 'Error: ' . mysqli_error($link);
}

// Close the database connection
mysqli_close($link);
?>