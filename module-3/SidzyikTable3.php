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
    <table>
        <?php
        // Simple for loop. iterates from row 1 to 5 increasing by 1 each time.
        for ($row = 1; $row <= 5; $row++) {
        ?>
            <!--- Getting information for each row" --->
            <tr>
                <?php
                // Filling in the column information for each for loop
                for ($col = 1; $col <= 5; $col++) {
                ?>
                    <!--- random number--->
                    <td>
                      <?php
                          $num1 = rand(1, 5);
                          $num2 = rand(1, 5);
                          echo addRandomNumbers($num1, $num2);
                      ?>
                    </td>
                <?php
                };
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
  </body>
</html>