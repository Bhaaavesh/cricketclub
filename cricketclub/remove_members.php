<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Member - Cricket Club</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Remove Member</h2>
        <form action="remove_member_process.php" method="POST">
            <label for="member_id">Enter Member ID to Remove:</label>
            <input type="text" id="member_id" name="member_id" required><br><br>
            <input type="submit" value="Remove">
        </form>
    </div>
</body>
</html>