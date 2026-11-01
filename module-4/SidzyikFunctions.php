<!---
Written by Samuel Sidzyik
CSD440
11/1/2026


--->
<?php
  function addRandomNumbers($num1, $num2) {
    return $num1 + $num2;
  }

  function isPalindrome($word) {
    //strrev is something I saw while googling, but for educational purposes I will use a loop
    $palinTest = "";
    $wordSplit = str_split($word);
    foreach($wordSplit as $letter){
      $palinTest = $letter . $palinTest;
    }
    return strtolower($word) == strtolower($palinTest);;
  }
?>