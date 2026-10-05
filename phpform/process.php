<?php

require "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO student_details(name, email, password)
        VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $name, $email, $password);

if ($stmt->execute()) {

    echo "<h2>Data Inserted Successfully!</h2>";
    echo "<a href='index.php'>Go Back</a>";

} else {

    echo "Error: " . $stmt->error;

}

$stmt->close();
$conn->close();

?>