<!-- 
Exercise-02_04_01

Author: Charley Tran
Date: 9.27.18

NumberForm.php 
-->

<!DOCTYPE html>

<html>

<head>
    <title>Number Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Number Form</h2>

    <!-- PHP Starts Here -->
    <?php
        $displayForm = true;
        $number = "";
        // Tells user if they already submitted
        if(isset($_POST['submit'])) {
            $number = $_POST['number'];
            if(is_numeric($number)) {
                $displayForm = false;
            } else {
                echo "<p>You need to enter a numeric value.</p>\n";
                $displayForm = true;
            }
        }
        if($displayForm) {
            ?>

            <form name="numberForm" action="NumberForm.php" method="post">
                <p>
                    Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
                </p>
                <p>
                    <input type="reset" value="Clear Form">&nbsp;&nbsp;
                    <input type="submit" name="submit" value="Send Form";>
                </p>
            </form>

            <?php
        } else {
            echo "<p>Thank you for entering a number.</p>\n";
            echo "<p>Your number, $number, squared is " . ($number * $number) . ".</p>\n";
            echo "<p><a href= \"NumberForm.php\">Try again?</a></p>\n";
        }
    ?>

</body>

</html>