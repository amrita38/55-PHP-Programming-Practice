<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Grade Checker</title>
</head>
<body>
    <h2 style="color: red;">Grade Marks Calculator</h2>

    <form method="post" style="color: blue;">

        Enter Your Number:

        <input type="number" name="percentage" required>

        <input type="submit" name="check" value="check">

    </form>

    <?php

    if (isset($_POST['check'])) {

        $percentage = $_POST['percentage'];

        if ($percentage >= 90) {

            echo "<h3>Grade: A+</h3>";

        } elseif ($percentage >= 75) {

            echo "<h3>Grade: A</h3>";

        } elseif ($percentage >= 60) {

            echo "<h3>Grade: B</h3>";

        } elseif ($percentage >= 40) {

            echo "<h3>Grade: C</h3>";

        } else {

            echo "<h3>Grade: Fail</h3>";

        }

    }

    ?>

</body>

</html>