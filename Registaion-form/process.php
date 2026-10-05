<?php

require "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$reg_no = $_POST['reg_no'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$branch = $_POST['branch'];


$sql = "INSERT INTO student (name, email, password, father_name, mother_name,reg_no, age,dob,branch)
        VALUES (?, ?, ?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssssiss", $name, $email, $password,$father_name,$mother_name,$reg_no,$age,$dob,$branch);

if ($stmt->execute()) {

    echo "<h2>Data Inserted Successfully!</h2>";
    echo "<a href='index.php'>Go Back</a>";

} else {

    echo "Error: " . $stmt->error;

}

$stmt->close();
$conn->close();

?>