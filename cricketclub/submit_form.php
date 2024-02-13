
<?php
include "connection.php";
// Form data
$name = $_POST['name'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// Insert data into database
$sql = "INSERT INTO members (name, dob, address, phone) VALUES ('$name', '$dob', '$address', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Form Filled Succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>