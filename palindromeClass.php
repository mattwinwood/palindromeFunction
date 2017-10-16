<?php
    class Palindrome {
        private $sanitizedString;
        private $originalString;

        public function __construct($originalString = '')
        {
            $this->originalString = $originalString;
            $this->sanitizedString = $this->sanitize($originalString);
        }

        public function getOriginalString() {
            return $this->originalString;
        }

        //  MASTER FUNCTION
        public function evaluate() {
            return $this->sanitizedString === strrev($this->sanitizedString);
        }

        //  SANITIZE ORIGINAL STRING
        private function sanitize($originalString) {
            // ASSIGN VARIABLES
            $sanitizedString = $originalString;
            // REMOVE WHITESPACE
            $sanitizedString = str_replace(" ", "", $sanitizedString);
            // REMOVE PERIODS
            $sanitizedString = str_replace(".", "", $sanitizedString);
            // MAKE ALL LOWERCASE
            $sanitizedString = strtolower($sanitizedString);

            return $sanitizedString;
        }
    }

if(isset($_GET["palindromeForm"])){
    $newPalindromeClass = new Palindrome($_GET["palindromeForm"]);
}
else{
    $newPalindromeClass = new Palindrome();
}
return $newPalindromeClass;