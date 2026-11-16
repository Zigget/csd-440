<!---
Written by Samuel Sidzyik
CSD440
11/15/2026

--->
<?php
  // 10-31-2026
  function addRandomNumbers($num1, $num2) {
    return $num1 + $num2;
  }

  // 10-31-2026
  function isPalindrome($word) {
    //strrev is something I saw while googling, but for educational purposes I will use a loop
    $palinTest = "";
    $wordSplit = str_split($word);
    foreach($wordSplit as $letter){
      $palinTest = $letter . $palinTest;
    }
    return strtolower($word) == strtolower($palinTest);;
  }

  //11-15-2026: Table Searches
  //display whole table
  function displayCustomers($customers){
    echo "<table>";
    echo "<tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Phone Number</th>
          </tr>";

    foreach ($customers as $customer)
    {
        echo "<tr>";
        echo "<td>{$customer['firstName']}</td>";
        echo "<td>{$customer['lastName']}</td>";
        echo "<td>{$customer['age']}</td>";
        echo "<td>{$customer['phone']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }

  //Display older customers
  function findCustomersOverAge($customers, $age){
    $results = [];
    foreach ($customers as $customer){
      if ($customer['age'] > $age){
        $results[] = $customer;
      }
    }
    return $results;
  }

  //Finds customers by first name.
  function findCustomerByFirstName($customers, $name)
  {
    $results = [];
    foreach ($customers as $customer){
      if ($customer['firstName'] == $name){
        $results[] = $customer;
      }
    }
    return $results;
  }

  //Finds customers whose last name starts with a letter.
  function findCustomerByLastInitial($customers, $letter){
    $results = [];
    foreach ($customers as $customer){
      if (substr($customer['lastName'], 0, 1) == $letter){
        $results[] = $customer;
      }
    }
    return $results;
  }
?>
