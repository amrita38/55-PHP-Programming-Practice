<?php

include "db.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Student not found.";
    exit();
}

$student = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

<div class="container">

    <h1>Edit Student</h1>

    <form action="update.php" method="POST">

        <input type="hidden"
               name="id"
               value="<?php echo $student['id']; ?>">

        <label>Name</label>

        <input type="text"
               name="name"
               value="<?php echo htmlspecialchars($student['name']); ?>"
               required>


        <label>Email</label>

        <input type="email"
               name="email"
               value="<?php echo htmlspecialchars($student['email']); ?>"
               required>


        <label>Phone</label>

        <input type="text"
               name="phone"
               value="<?php echo htmlspecialchars($student['phone']); ?>"
               required>


        <button type="submit" class="btn edit-btn">
            Update Student
        </button>

        <a href="index.php" class="btn cancel-btn">
            Cancel
        </a>

    </form>

</div>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>