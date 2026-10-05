<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Eligibility Checker</title>
</head>

<body>

    <h2>Check Odd and Even</h2>

    <form method="post">
        Enter a number:
        <input type="number" name="num" required>
        <input type="submit" name="check" value="Check">
    </form>

    <?php

    if (isset($_POST['check'])) {

        $num = $_POST['num'];

        if ($num % 2 == 0) {
            echo "<h3>Number is Even</h3>";
        } 
        else {
            echo "<h3>Number is Odd</h3>";
        }

    }

    ?>

</body>

</html>