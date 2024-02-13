<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Members</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Member Details</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        <?php
        // Database connection
        include "connection.php";
        // Retrieve all members
        $sql = "SELECT * FROM members";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["dob"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>