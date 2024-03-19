<!DOCTYPE html>
<!-- Emma Bui, Assignment 5 Strings -->


<?php
// Form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Gets form values & organizes string
  $first_name      = htmlspecialchars(trim($_POST["first_name"]));
  $last_name       = htmlspecialchars(trim($_POST["last_name"]));
  $email           = htmlspecialchars(trim($_POST["email"]));
  $donation_amount = $_POST["donation_amount"];

  // Variable declarations
  $last_name_length             = strlen($last_name); // Gets length of last name
  $first_letter_last_name       = substr($last_name, 0, 1); // Gets first letter of last name
  $first_letter_last_name_upper = strtoupper($first_letter_last_name); // Uppercase first letter of last name
  $confirmation_number          = $last_name_length . $first_letter_last_name_upper . mt_rand(1000, 9999); // Creates a confirmation number

  // Inserts dollar sign and two decimal places to donation
  $formatted_donation_amount = '$' . number_format($donation_amount, 2);
}
?>


<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Confirmation</title>
  </head>

  <body>
    <h1>Your Contribution:</h1>
    <!-- Displays donor's name & amount of money to donation -->
    <p>Thank you <?php echo $first_name . ' ' . $last_name; ?> for your donation of
      <?php echo $formatted_donation_amount; ?></p>
    <!-- Displays confirmation number & a message to receive receipt -->
    <p>Your confirmation number is: <?php echo $confirmation_number; ?>. We will email your receipt to
      <?php echo $email; ?> </p>
  </body>

</html>