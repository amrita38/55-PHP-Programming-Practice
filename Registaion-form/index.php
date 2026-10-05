<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Registration</h2>

<form action="process.php" method="POST">

    <label>Name:</label>
    <input type="text" name="name" required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <label>Father's name:</label>
    <input type="text" name="father_name" required>
    <br><br>

    <label>Mother's name:</label>
    <input type="text" name="mother_name" required>
    <br><br>

    <label>Reg.no:</label>
    <input type="text" name="reg_no" required>
    <br><br>

    <label>Age:</label>
    <input type="number" name="age" required>
    <br><br>

    <label>DOB:</label>
    <input type="date" name="dob" required>
    <br><br>

    <label>Branch:</label>
    <input type="text" name="branch" required>
    <br><br>

    <button type="submit">Register</button>

</form>

</body>
</html>