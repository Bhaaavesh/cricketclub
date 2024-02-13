<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Performance Description</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add Performance Description</h2>
        <form action="submit_performance_description.php" method="POST">
            <label for="member_id">Member ID:</label>
            <input type="text" id="member_id" name="member_id" required><br><br>
            <label for="description">Performance Description:</label>
            <textarea id="description" name="description" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
