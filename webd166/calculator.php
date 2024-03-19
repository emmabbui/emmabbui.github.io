<!DOCTYPE html>
<!-- Emma Bui, Assignment 4 Numbers -->

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Variable declarations
$miles_driven = $_POST['miles_driven'] ?? 0; // Miles Driven
$gallons_used = $_POST['gallons_used'] ?? 0; // Gallons of Gas Used
$price_gallon = $_POST['price_gallon'] ?? 0; // Price per gallon

$miles_per_gallon = round($miles_driven / $gallons_used, 2); // Miles per gallon
$cost_of_trip     = round($gallons_used * $price_gallon, 2); // Cost of the trip
?>


<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculations</title>
  </head>

  <body>
    <header>
      <h1> Trip calculations </h1>
    </header>

    <main>
      <section>
        <h2>Values Entered:</h2>
        <!-- Displays how many miles driven  -->
        <p> Miles Driven: <?php echo number_format($miles_driven); ?>
        </p>
        <!-- Displays how many gallons used -->
        <p> Gallons Used: <?php echo number_format($gallons_used, 2); ?>
        </p>
        <!-- Displays price per gallon. Concatenate to display dollar sign. -->
        <p> Price per Gallon: <?php echo '$' . number_format($price_gallon, 2); ?>
        </p>

        <h2>Your Results:</h2>
        <!-- Displays how many miles per gallon  -->
        <p> Miles per Gallon: <?php echo number_format($miles_per_gallon, 2); ?>
        </p>
        <!-- Displays cost of the trip. Concatenate to display dollar sign -->
        <p> Cost of Trip: <?php echo '$' . number_format($cost_of_trip, 2); ?>

      </section>
    </main>

  </body>

</html>