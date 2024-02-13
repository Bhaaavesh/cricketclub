<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Club Admission Form</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
<style>

*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}
.container {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea,
input[type="date"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #3D85C6;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
.container h2{
    text-align: center;
}
</style>
</head>
<body>
    <div>
    <?php
        include "navbar.php";
    ?>
    </div>
    <div class="container">
        <h2>R'45 Cricket Club Admission Form</h2>
        <form action="submit_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>