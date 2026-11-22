<!---
Written by Samuel Sidzyik
CSD440
11/20/2026

 Validate user input and display results.
--->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Results</title>
</head>
<body>

<?php

$errors = [];

// Retrieve and clean data
$firstName = trim($_POST['firstName'] ?? '');
$lastName = trim($_POST['lastName'] ?? '');
$age = $_POST['age'] ?? '';
$email = trim($_POST['email'] ?? '');
$birthDate = $_POST['birthDate'] ?? '';
$favoriteColor = $_POST['favoriteColor'] ?? '';
$conspiracy = isset($_POST['conspiracy']) ? "Denier" : "Believer";

// Validation
if (empty($firstName)) {
    $errors[] = "First Name is required.";
}

if (empty($lastName)) {
    $errors[] = "Last Name is required.";
}

// Minimum age requirement because why not?
if (!is_numeric($age) || $age <= 18) {
    $errors[] = "Age must be 18 or older.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "A valid email address is required.";
}

if (empty($birthDate)) {
    $errors[] = "Birth Date is required.";
}

if (empty($favoriteColor)) {
    $errors[] = "Favorite Color is required.";
}

// Display list of all errors or results
if (!empty($errors)) {

    echo "<h2>Input Errors</h2>";
    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }

    echo "</ul>";

} else {

    echo "<h2>Submitted Information</h2>";

    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>First Name</td><td>$firstName</td></tr>";
    echo "<tr><td>Last Name</td><td>$lastName</td></tr>";
    echo "<tr><td>Age</td><td>$age</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Birth Date</td><td>$birthDate</td></tr>";
    echo "<tr><td>Favorite Color</td><td>$favoriteColor</td></tr>";
    echo "<tr><td>Bird Conspiracy</td><td>$conspiracy</td></tr>";
    echo "</table>";
}
?>

</body>
</html>