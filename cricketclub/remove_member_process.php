<?php
include "connection.php";
// Form data
// Form data
$member_id = $_POST['member_id'];

// Delete data from database
$sql = "DELETE FROM members WHERE id='$member_id'";

if ($conn->query($sql) === TRUE) {
    // Redirect to view all members page
    header("Location: view_members.php");
    exit(); // Ensure no more output is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>