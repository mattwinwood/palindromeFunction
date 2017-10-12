

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<html>
<center>
    <br>
    <br>
    <br>
<h2>Palindrome Test</h2>
<?php
    Class palindrome {
        var $sanitizedString;
        var $originalString;

        public function getOriginalString() {
            if(isset($_GET["palindromeForm"])) {
                $this->originalString = $_GET["palindromeForm"];
                return $_GET["palindromeForm"];
            } else {
                $this->originalString = "";
                return  "";
            }
        }

        public function evaluate($sanitizedString, $reversedString, $originalString) {
            if($sanitizedString === $reversedString) {
                return "<h2>" . $originalString . " IS A PALINDROME.</h2>";
            } else {
                return "<h2>" . $originalString . " IS NOT A PALINDROME.</h2>";
            }
        }

        //  SANITIZE ORIGINAL STRING
        public function getSanitizeString() {
            $originalString = $this->getOriginalString();
            // ASSIGN VARIABLES
            $sanitizedString = $originalString;
            // REMOVE WHITESPACE
            $sanitizedString = str_replace(" ", "", $sanitizedString);
            // REMOVE PERIODS
            $sanitizedString = str_replace(".", "", $sanitizedString);
            // MAKE ALL LOWERCASE
            $sanitizedString = strtolower($sanitizedString);

            $this->sanitizedString = $sanitizedString;
            return $sanitizedString;
        }

        //  CREATE A FUNCTION THAT GETS THE FORM
        public function getForm() {
            $formOutput =
                "<form action=''>" .
                "<input type='text' name='palindromeForm' value=''/>" .
                "<input type='submit' value='submit' />" .
                "</form>";
            return $formOutput;
        }

        //  MASTER FUNCTION
        public function isStringPalindrome() {
            // REVERSE THE STRING
            $reversedString = strrev($this->sanitizedString);
            // EVALUATE
            $output = $this->evaluate($reversedString, $this->sanitizedString, $this->originalString);
            echo "<h2>Original: " . $originalString . "</h2>";
            echo "<h2>Reversed: " . $reversedString . "</h2>";
            echo $output;
        }



    }

    $newPalindromeClass = new palindrome();
    $form = $newPalindromeClass->getForm();
    echo $form;

    $sanitizedStringOutsideOfMethod = $newPalindromeClass->getSanitizeString();
    echo $output;
    //  RUN MASTER FUNCTION
    $newPalindromeClass->isStringPalindrome();


?>
</center>
</html>
