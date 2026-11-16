<!---
Written by Samuel Sidzyik
CSD440
11/15/2026

--->
<!DOCTYPE HTML>
<html>
  <head>
    <title>
      PHP Module 5.2 _ Sidzyik
      <?php require 'Sidzyikfunctions.php'; ?>
    </title>
  </head>

<body>

<?php
  // Create an array of customers
  $customers = [
    ["firstName" => "Spider", "lastName" => "Mann", "age" => 25, "phone" => "402-555-1001"],
    ["firstName" => "Mister", "lastName" => "Chief", "age" => 34, "phone" => "402-555-1002"],
    ["firstName" => "Wares", "lastName" => "Waldo", "age" => 42, "phone" => "402-555-1003"],
    ["firstName" => "Carmen", "lastName" => "SanAntonio", "age" => 29, "phone" => "402-555-1004"],
    ["firstName" => "Michael", "lastName" => "Tots", "age" => 51, "phone" => "402-555-1005"],
    ["firstName" => "Ash", "lastName" => "Ketchup", "age" => 10, "phone" => "402-555-1006"],
    ["firstName" => "Father", "lastName" => "Goku", "age" => 45, "phone" => "402-555-1007"],
    ["firstName" => "Bowser", "lastName" => "Cooper", "age" => 31, "phone" => "402-555-1008"],
    ["firstName" => "Link", "lastName" => "Young", "age" => 22, "phone" => "402-555-1009"],
    ["firstName" => "David", "lastName" => "Jones", "age" => 407, "phone" => "402-555-1010"]
  ];

  // Functions to display searches of table
  echo "<h1>All Customers</h1>";
  displayCustomers($customers);

  echo "<h2>Customers Older Than 40</h2>";
  displayCustomers(findCustomersOverAge($customers, 40));

  echo "<h2>Customer Named Link</h2>";
  displayCustomers(findCustomerByFirstName($customers, "Link"));

  echo "<h2>Last Names Starting With C</h2>";
  displayCustomers(findCustomerByLastInitial($customers, "C"));

?>
</body>
</html>