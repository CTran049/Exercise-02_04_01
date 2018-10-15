<!DOCTYPE html>

<!-- 
Exercise-02_04_01

Author: Charley Tran
Date: 10.3.18

processJumbleMaker.php
-->

<html>
<head>
    <meta charset="utf-8" />
    <title>Process Jumble Maker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h2>Process Jumble Maker</h2>
    <!-- PHP starts here -->
    <?php
        $errorCount = 0;
        $words = array();

        function displayError($fieldName, $errorMsg) {
            global $errorCount;
            echo "Error for \"$fieldName\":$errorMsg<br>\n";
            ++$errorCount;
        }

        function validateWord($data, $fieldName) {
            global $errorCount;
            $retval = "";

            // This checks to see if the input fields are empty or not.
            if(empty($data)) {
                displayError($fieldName, "The field is required");
                ++$errorCount;
                $retval = "";
            } else {
                $retval = trim($data);
                $retval = stripslashes($retval);
                if(strlen($retval) < 4 || strlen($retval) > 7) {
                    displayError($fieldName, "Words must be between 4 and 7 characters in length");
                }
                if(preg_match("/^[A-Za-z]+$/i", $retval) === 0) {
                    displayError($fieldName, "Words must consist only of letters");
                }
            }

            $retval = strtoupper($retval);
            $retval = str_shuffle($retval);
            return $retval;
        }

        $words[] = validateWord($_POST['word1'], "Word 1");
        $words[] = validateWord($_POST['word2'], "Word 2");
        $words[] = validateWord($_POST['word3'], "Word 3");
        $words[] = validateWord($_POST['word4'], "Word 4");
        if($errorCount > 0) {
            echo "Please use the \"Back\" button to re-enter nay missing data.<br>\n";
        } else {
            $wordNum = 0;
            foreach ($words as $word) {
                echo "Word " . ++$wordNum . ": $word<br>\n";
            }
        }
    ?>
</body>
</html>