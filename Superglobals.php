<!-- 
Exercise-02_04_01

Author: Charley Tran
Date: 9.26.18

Superglobals.php 
-->

<!DOCTYPE html>

<html>

<head>
    <title>Superglobals</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Superglobals</h2>

    <!-- PHP Starts Here -->
    <?php
    // Displays superglobals
        echo "<h3>Superglobal Array \$_SERVER[]</h3>";
        echo "<p>The name of the current script is: ", $_SERVER["SCRIPT_NAME"], "<br>";
        echo "<p>This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br>";
        echo "<p>This script was requested with the following server protocol: ", $_SERVER["SERVER_PROTOCOL"], "<br>";
        echo "<p>This script is running on the following server name: ", $_SERVER["SERVER_NAME"], "<br>";
        echo "<p>This script is running on the following server address: ", $_SERVER["SERVER_ADDR"], "<br>";
        echo "<p>This script is running with the following gateway interface: ", $_SERVER["GATEWAY_INTERFACE"], "<br>";
        echo "<p>This script is running with the following request method: ", $_SERVER["REQUEST_METHOD"], "<br>";
    ?>

</body>

</html>