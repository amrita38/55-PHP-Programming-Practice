<?php

require "db.php";

$name = $_POST['name'];
$email = $_POST['reg_no'];
$password = $_POST['father_name'];
$father_name = $_POST['date-of-birth'];
$mother_name = $_POST['mobileno'];
$reg_no = $_POST['email'];
$age = $_POST['password'];
$dob = $_POST['gender'];
$branch = $_POST['department'];
$branch = $_POST['address'];


$sql = "INSERT INTO student (name, reg_no, , father_name, date-of-birth ,mobileno ,email, password,gender,department,address)
        VALUES (?,?, ?,?,?,?,?,?,?,?)";

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
