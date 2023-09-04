<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Numbers</title>
  </head>

  <body>
    <?php // Chick-Fil-A Receipt 
    $subtotal = 14.54;
    $taxRate = 0.05;

    $taxAmount = $subtotal * $taxRate;
    $total = $subtotal + $taxAmount;

    // Kind message
    echo 'It was a pleasure serving you! Have a wonderful day. <br>'; 
    // Subtotal
    echo 'Subtotal: $' . $subtotal . ' <br>'; 
    // Tax Rate
    echo 'Tax Rate: $' . ($taxRate * 100). '% <br>'; 
    // Total
    echo 'Total: $' . $total . ' <br>';
    ?>
  </body>
</html>






