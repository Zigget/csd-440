<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
  'http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd'>

<html>

  <head>

    <title>

      PHP

    </title>

  </head>

  <body>

    <script language="PHP">

      print("Hello World line 1<br />");

    </script>

    <table>
      This was just testing my table. Purposefully left in
    <?php
    // Simple for loop. iterates from row 1 to 5 increasing by 1 each time.
    for ($row = 1; $row <= 5; $row++) {
    ?>
        <!--- Filling in information for each row" --->
        <tr>
            <?php
            // Filling in the column information for each for
            for ($col = 1; $col <= 5; $col++) {
            ?>
                <!--- Giving the coordinate The PHP needs a break to add the td--->
                <td><?php echo "$row,$col ";
                if ($col < 5) {echo "|";} ?></td>
            <?php
            };
            ?>
        </tr>
    <?php
    }
    ?>
</table>
<br>

<table>
  This is the actual assignment.
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
                <td><?php echo rand(1, 5); ?></td>
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