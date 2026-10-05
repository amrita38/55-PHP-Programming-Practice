<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (name, email, phone)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "sss",
        $name,
        $email,
        $phone
    );

    if ($stmt->execute()) {

        header("Location: index.php");
        exit();

    } else {

        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>