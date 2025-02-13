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
    <nav class="navbar navbar-dark bg-dark text-white">
        <div class="container">
            <span class="h1 text-center">Practice Examples</span>
        </div>
    </nav>
    <div class="container text-center">
        <div class="row m-5 p-5">
            <form action="" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <label for="sub1">Enter your marks for English:</label>
                        </td>
                        <td>
                            <input class="form-control" type="number" name="sub1" id="sub1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sub2">Enter your marks for Maths:</label>
                        </td>
                        <td>
                            <input class="form-control" type="number" name="sub2" id="sub2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sub3">Enter your marks for Science:</label>
                        </td>
                        <td>
                            <input class="form-control" type="number" name="sub3" id="sub3">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        </td>
                        <td></td>
                    </tr>
                </table>
            </form>


            <?php

            if (isset($_REQUEST['submit'])) {
                $sub1 = $_REQUEST['sub1'];
                $sub2 = $_REQUEST['sub2'];
                $sub3 = $_REQUEST['sub3'];

                $total = $sub1 + $sub2 + $sub3;
                // echo "Your total marks is: " . $total . "<br>";

                $percentage = ($total / 300) * 100;
                // echo "Your percentage is: " . $percentage . "<br>";

                if ($sub1 > 35 && $sub2 > 35 && $sub3 > 35) {
                    if ($percentage > 90) {
                        $grade = "A+";
                    } elseif ($percentage > 80) {
                        $grade = "A";
                    } elseif ($percentage > 70) {
                        $grade = "B+";
                    } elseif ($percentage > 60) {
                        $grade = "B";
                    } elseif ($percentage > 50) {
                        $grade = "C+";
                    } else {
                        $grade = "C";
                    }
                } else {
                    $grade = "FAIL";
                }


            ?>
                <table class="table table-bordered text-center" width="100%">
                    <tr>
                        <th> English </th>
                        <th> Maths </th>
                        <th> Science </th>
                        <th> Total </th>
                        <th> Percentage </th>
                        <th> Grade </th>
                    </tr>
                    <tr>
                        <td><?php echo $sub1 ?></td>
                        <td><?php echo $sub2 ?></td>
                        <td><?php echo $sub3 ?></td>
                        <td><?php echo $total ?></td>
                        <td><?php echo $percentage ?></td>
                        <td><?php echo $grade ?></td>
                    </tr>
                </table>

            <?php
            }
            ?>
        </div>
    </div>
    <div class="fixed-bottom">
        <nav class="navbar navbar-dark bg-dark text-white">
            <div class="container">
                <span class="h1 text-center">Practice Examples</span>
            </div>
        </nav>
    </div>
</body>

</html>