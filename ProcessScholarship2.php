<!-- 
Exercise-02_04_01

Author: Charley Tran
Date: 9.26.18

ProcessScholarship2.php 
-->

<!DOCTYPE html>

<html>

<head>
    <title>Process Scholarship 2</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Scholarship 2</h2>

    <!-- PHP Starts Here -->
    <?php
        // Global Variable
        $errorCount = 0;

        // Function for validation
        function displayRequired($fieldName) {
            echo "The field \"$fieldName\" is required!<br>\n";
        }

        function validateInput($data, $fieldName) {
            global $errorCount;
            if(empty($data)) {
                displayRequired($fieldName);
                ++$errorCount;
                $retval = "";
            } else {
                $retval = trim($data);
                $retval = stripslashes($retval);
            }
            return $retval;
        }

        // Creates a function with html inside
        function redisplayForm($firstName, $lastName) {
    ?>
        <h2 style="text-align: center">Scholarship Form</h2>
        <form name="scholarship" action="ProcessScholarship2.php" method="POST">
            <p>First name: <input type="text" name="fName" value="<?php echo $firstName; ?>"</p>
            <p>Last name: <input type="text" name="lName" value="<?php echo $lastName; ?>"</p>
        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" value="Send Form">
        </p>
    </form>
    <?php
        }
        $firstName = validateInput($_POST['fName'], "First Name");
        $lastName = validateInput($_POST['lName'], "Last Name");
        // Checks for validation
        if($errorCount > 0) {
            echo "$errorCount error(s): Please re-enter the information below.<br>\n";
            redisplayForm($firstName, $lastName);
        } else {
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        }
    ?>

</body>

</html>