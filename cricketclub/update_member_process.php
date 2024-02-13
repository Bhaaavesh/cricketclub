<?php
include "connection.php";
// Form data
$member_id = $_POST['member_id'];
$new_name = $_POST['name'];
$new_dob = $_POST['dob'];
$new_address = $_POST['address'];
$new_phone = $_POST['phone'];

// Update data in database
$sql = "UPDATE members SET name='$new_name', dob='$new_dob', address='$new_address', phone='$new_phone' WHERE id='$member_id'";

if ($conn->query($sql) === TRUE) {
    echo "Member information updated successfully";
    header("Location: view_members.php");
    exit(); // Ensure no more output is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
