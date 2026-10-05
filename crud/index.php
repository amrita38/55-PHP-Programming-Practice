<?php
include "db.php";

$sql = "SELECT * FROM students ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student CRUD</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

<div class="container">

    <h1>Student Management System</h1>

    <a href="create.php" class="btn add-btn">Add Student</a>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>

        <tr>

            <td>
                <?php echo $row['id']; ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row['name']); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row['email']); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row['phone']); ?>
            </td>

            <td>

                <a href="edit.php?id=<?php echo $row['id']; ?>"
                   class="btn edit-btn">
                    Edit
                </a>

                <a href="delete.php?id=<?php echo $row['id']; ?>"
                   class="btn delete-btn"
                   onclick="return confirm('Are you sure you want to delete this student?');">
                    Delete
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>

<?php
$conn->close();
?>