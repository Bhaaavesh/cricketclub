<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Member - Cricket Club</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Update Member</h2>
        <form action="update_member_process.php" method="POST">
            <label for="member_id">Enter Member ID to Update:</label>
            <input type="text" id="member_id" name="member_id" required><br><br>
            <label for="name">New name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="dob">New DOB:</label>
            <input type="date" id="dob" name="dob" required><br><br>
            <label for="address">New Address:</label>
            <input type="text" id="address" name="address" required><br><br>
            <label for="phone">New Phone.No:</label>
            <input type="tel" id="phone" name="phone" required><br><br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>