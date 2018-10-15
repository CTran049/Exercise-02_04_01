<!DOCTYPE html>
<!-- 
Project-02_04_02

Author: Charley Tran
Date: 10.10.18

Paycheck.html 
-->
<html>
<head>
    <meta charset="utf-8" />
    <title>Pay Check</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <!-- These are CSS Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
        }

        html {
            background-color: lightblue;
        }

        body {
            display: block;
            width: 50%;
            padding: 2%;
            margin: 10%;
            background-color: cornsilk;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
        }

        input.input {
            width: 75%;
            padding: 10px;
            font-size: 2em;
            border-style: solid;
            border-color: goldenrod;
            border-radius: 5px;
            border-width: 2px;
            margin-bottom: 5%;
        }

        input.buttons {
            border-style: solid;
            border-color: gray;
            border-radius: 5px;
            border-width: 2px;
            width: 100px;
            padding: 2%;
            
        }

        .flex-container {
            display: flex;
        }

        #main {
            display: block;
            width: 50%;
        }

        #picture {
            display: block;
            width: 50%;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }

    </style>
</head>
<body>
    <?php 
    // Global Variables
    $hoursWorked = $_POST['hoursWorked'];
    $hourlyWage = $_POST['hourlyWage'];

    $payment = $hourlyWage * $hoursWorked;
    $overtimePay = ($hoursWorked - 40) * ($hourlyWage * .5);

    $totalPay = $payment + $overtimePay;

    // This checks for errors. It will check if there are letters
    if (preg_match("/[a-z]/i", $hoursWorked) || preg_match("/[a-z]/i", $hourlyWage)) {
        echo "<h2>Please use numeric characters.</h2><br>";
        ?>
            <div class="flex-container">
            <div id="main">
                <h1>Pay Check Calculator</h1><br>
                <form name="salary" action="Paycheck.php" method="post">
                    <h4>Hours Worked</strong>
                    </h4>
                    <input type="text" name="hoursWorked" value="" class="input">
                    <h4>Hourly Wage</h4>
                    <input type="text" name="hourlyWage" value="" class="input">
                    <br>
                    <br>
                    <input type="reset" value="Reset" class="buttons">
                    <input type="submit" value="Calculate" class="buttons">
                </form>
            </div>
            <div id="picture">
                <img src="palmtree.png" alt="">
            </div>
        </div>
        <?php
    // This checks for empty input fields. It will display a message if it's empty.
    } else if ($hoursWorked === "" || $hourlyWage === "") {
        echo "<h2>Please fill in all the boxes.</h2><br>";
        ?>
        <div class="flex-container">
            <div id="main">
                <h1>Pay Check Calculator</h1><br>
                <form name="salary" action="Paycheck.php" method="post">
                    <h4>Hours Worked</strong>
                    </h4>
                    <input type="text" name="hoursWorked" value="" class="input">
                    <h4>Hourly Wage</h4>
                    <input type="text" name="hourlyWage" value="" class="input">
                    <br>
                    <br>
                    <input type="reset" value="Reset" class="buttons">
                    <input type="submit" value="Calculate" class="buttons">
                </form>
            </div>
            <div id="picture">
                <img src="palmtree.png" alt="">
            </div>
        </div>
        <?php

    // Checks to see you worked over 40 hours or not. If you have, then your pay will be multiplied by 1.5
    } else {
        if ($hoursWorked > 40) {
            echo "<h2>You made: $" . number_format($totalPay, 2) . "</h2><br>";
            ?>
            <div class="flex-container">
            <div id="main">
                <h1>Pay Check Calculator</h1><br>
                <form name="salary" action="Paycheck.php" method="post">
                    <h4>Hours Worked</strong>
                    </h4>
                    <input type="text" name="hoursWorked" value="" class="input">
                    <h4>Hourly Wage</h4>
                    <input type="text" name="hourlyWage" value="" class="input">
                    <br>
                    <br>
                    <input type="reset" value="Reset" class="buttons">
                    <input type="submit" value="Calculate" class="buttons">
                </form>
            </div>
            <div id="picture">
                <img src="palmtree.png" alt="">
            </div>
        </div>
        <?php
        } else {
            echo "<h2>You made: $" . number_format($payment, 2) . "</h2><br>";
            ?>
            <div class="flex-container">
            <div id="main">
                <h1>Pay Check Calculator</h1><br>
                <form name="salary" action="Paycheck.php" method="post">
                    <h4>Hours Worked</strong>
                    </h4>
                    <input type="text" name="hoursWorked" value="" class="input">
                    <h4>Hourly Wage</h4>
                    <input type="text" name="hourlyWage" value="" class="input">
                    <br>
                    <br>
                    <input type="reset" value="Reset" class="buttons">
                    <input type="submit" value="Calculate" class="buttons">
                </form>
            </div>
            <div id="picture">
                <img src="palmtree.png" alt="">
            </div>
        </div>
        <?php
        }
    }

    ?>
</body>
</html>