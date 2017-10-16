<?php $newPalindromeClass = require 'palindromeClass.php'; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<html>
<center>
<br>
<br>
<br>
    <h2>Palindrome Test</h2>
    <form action=''>
        <input type='text' name='palindromeForm' value=''/>
        <input type='submit' value='submit' />
    </form>
    <?php
    $original = $newPalindromeClass->getOriginalString();
    if(!empty($original)) :
    ?>
        <h2>IS <?= $newPalindromeClass->evaluate() ? '' : 'NOT '; ?>A PALINDROME</h2>
        <h2>ORIGINAL STRING: <?= $original ?></h2>
    <?php endif; ?>
</center>
</html>
