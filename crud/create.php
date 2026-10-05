<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

<div class="container">

    <h1>Add Student</h1>

    <form action="insert.php" method="POST">

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone</label>
        <input type="text" name="phone" required>

        <button type="submit" class="btn add-btn">
            Add Student
        </button>

        <a href="index.php" class="btn cancel-btn">
            Cancel
        </a>

    </form>

</div>

</body>
</html>