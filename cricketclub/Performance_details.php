<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Member ID</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Enter Member ID</h2>
        <form action="show_performance_description.php" method="GET">
            <label for="member_id">Member ID:</label>
            <input type="text" id="member_id" name="member_id" required><br><br>
            <input type="submit" value="View Performance Description">
        </form>
    </div>
</body>
</html>
