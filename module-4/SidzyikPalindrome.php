<!---
Written by Samuel Sidzyik
CSD440
10/31/2026

--->
<!DOCTYPE HTML>
<html>
  
  <head>
    <title>
      PHP Module 3.2 _ Sidzyik
    </title>
    <?php require 'Sidzyikfunctions.php'; ?>
  </head>

  <body>
      <?php
      // Creating an array of word options for Palindromes
      $palindromeOptions = ['Racecar', 'HotWheels','Civic','Hyundai','Rotor','Suspension'];
      foreach($palindromeOptions as $palinTest) {
        if (isPalindrome($palinTest)) {
          echo "$palinTest is a palindrome!<br>";
        }
        else{
          echo "$palinTest is not a palindrome.<br>";
        }
      }
      ?>
  </body>
</html>