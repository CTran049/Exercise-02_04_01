<!-- 
Exercise-02_04_01

Author: Charley Tran
Date: 9.26.18

ProcessScholarship.php 
-->

<!DOCTYPE html>

<html>

<head>
    <title>Process Scholarship</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Scholarship</h2>

    <!-- PHP Starts Here -->
    <?php
        $firstName = stripslashes($_POST['fName']);
        $lastName = stripslashes($_POST['lName']);
        echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
    ?>

</body>

</html>