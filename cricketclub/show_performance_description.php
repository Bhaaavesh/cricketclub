<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Performance Description</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Performance Description</h2>
        <?php
        // Database connection
        include "connection.php";
        // Form data
        $member_id = $_GET['member_id'];

        // Retrieve performance description from database
        $sql = "SELECT description FROM performance_descriptions WHERE member_id='$member_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output performance description
            while($row = $result->fetch_assoc()) {
                echo "<p>" . $row["description"] . "</p>";
            }
        } else {
            echo "No performance description found for this member.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
