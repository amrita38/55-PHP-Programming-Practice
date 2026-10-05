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

    <label>reg_no:</label>
    <input type="text" name="reg_no" required>
    <br><br>

    <label>father_name:</label>
    <input type="text" name="father_name" required>
    <br><br>

    <label>date-of-birth:</label>
    <input type="date" name="date-of-birth" required>
    <br><br>

    <label>mobileno:</label>
    <input type="text" name="mobile_no" required>
    <br><br>

    <label>email:</label>
    <input type="text" name="mobile_no" required>
    <br><br>

    <label>password:</label>
    <input type="number" name="password" required>
    <br><br>

    <label>gender: </label>
    <input type="radio" name="gender" value="male" ><label>male</label>
    <input type="radio" name="gender" value="female"><label>female</label>
    <br><br>


    <label>department:</label>
    <input type="text" name="department" required>
    <br><br>

    <label>address:</label>
    <input type="text" name="address" required>
    <br><br>

    <button type="submit">Register</button>

</form>

</body>
</html>