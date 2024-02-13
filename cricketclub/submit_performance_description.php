<?php
// Database connection
include "connection.php";

// Form data
$member_id = $_POST['member_id'];
$description = $_POST['description'];

// Insert data into database
$sql = "INSERT INTO performance_descriptions (member_id, description) VALUES ('$member_id', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Performance description added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
