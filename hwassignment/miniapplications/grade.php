<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <form action="" method="post">
                <label for="sub1">Enter your marks for English:</label>
                <input type="number" name="sub1" id="sub1">
                <label for="sub2">Enter your marks for Maths:</label>
                <input type="number" name="sub2" id="sub2">
                <label for="sub3">Enter your marks for Science:</label>
                <input type="number" name="sub3" id="sub3">
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

    <?php

    if (isset($_REQUEST['submit'])) {
        $sub1 = $_REQUEST['sub1'];
        $sub2 = $_REQUEST['sub2'];
        $sub3 = $_REQUEST['sub3'];

        $total = $sub1 + $sub2 + $sub3;
        echo "Your total marks is: " . $total . "<br>";

        $percentage = ($total / 300) * 100;
        echo "Your percentage is: " . $percentage . "<br>";

        if ($percentage >= 90) {
            echo "Your grade is A+";
        } elseif ($percentage >= 80) {
            echo "Your grade is A";
        } elseif ($percentage >= 70) {
            echo "Your grade is B";
        } elseif ($percentage >= 60) {
            echo "Your grade is C";
        } elseif ($percentage >= 50) {
            echo "Your grade is D";
        } else {
            echo "You are fail";
        }
    }

    ?>

</body>

</html>