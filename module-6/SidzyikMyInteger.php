<!---
Written by Samuel Sidzyik
CSD440
11/15/2026

I kept the functions in one file. This assignment is almost all functions.
--->
<!DOCTYPE HTML>
<html>
  <head>
    <title>
      PHP Module 6.2 _ Sidzyik
      <?php require 'Sidzyikfunctions.php'; ?>
    </title>
  </head>

<body>

<?php
  class SamMyInteger
{
    // Property
    private $value;

    //Initializes the integer value.
    public function __construct($value){
        $this->value = $value;
    }

    //Getter grabs value
    public function getValue(){
        return $this->value;
    }

    //Setter sets value
    public function setValue($value){
        $this->value = $value;
    }

    //Checks if even
    public function isEven($number){
        return $number % 2 == 0;
    }

    //Checks if odd
    public function isOdd($number){
        return $number % 2 != 0;
    }

    /**
     * Returns true if the stored value is prime.
     */
    public function isPrime(){
        if ($this->value <= 1){
            return false;
        }

        for ($i = 2; $i < $this->value; $i++){
            if ($this->value % $i == 0){
                return false;
            }
        }
        return true;
    }
}

//Run Tests
$number1 = new SamMyInteger(17);
$number2 = new SamMyInteger(20);

echo "<h1>MyInteger Class Test Results</h1>";

echo "<h2>Object 1</h2>";
echo "Value: " . $number1->getValue() . "<br>";
echo "Is Even: " . ($number1->isEven($number1->getValue()) ? "Yes" : "No") . "<br>";
//Both odds work. I left both in. Why not.
echo "Is Odd: " . ($number1->isEven(!$number1->getValue()) ? "Yes" : "No") . "<br>";
echo "Is Odd: " . ($number1->isOdd($number1->getValue()) ? "Yes" : "No") . "<br>";
echo "Is Prime: " . ($number1->isPrime() ? "Yes" : "No") . "<br><br>";

echo "<h2>Object 2</h2>";
echo "Value: " . $number2->getValue() . "<br>";
echo "Is Even: " . ($number2->isEven($number2->getValue()) ? "Yes" : "No") . "<br>";
echo "Is Odd: " . ($number2->isOdd($number2->getValue()) ? "Yes" : "No") . "<br>";
echo "Is Prime: " . ($number2->isPrime() ? "Yes" : "No") . "<br><br>";

echo "<h2>Testing Setter Method</h2>";

echo "Old Value: " . $number2->getValue() . "<br>";
echo "Setting Value to 23<br>";
$number2->setValue(23);
echo "New Value: " . $number2->getValue() . "<br>";
echo "Is Prime: " . ($number2->isPrime() ? "Yes" : "No") . "<br>";

?>
</body>
</html>