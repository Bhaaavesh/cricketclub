<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member - Cricket Club</title>
</head>
<body>
<style>
    .container {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
}

h2 {
    text-align: center;
}
.actions {
    margin-top: 20px;
    text-align: center;
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>
    <div class="container">
        <h2>Add Member</h2>
        <form action="submit_member.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br><br>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>