<?php
// Emma Bui, Assignment 6, Control Structures / Validation

// Variables to hold values from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gets form values & organizes string
    $first_name      = htmlspecialchars(trim($_POST["fname"]));
    $last_name       = htmlspecialchars(trim($_POST["lname"]));
    $email           = htmlspecialchars(trim($_POST["email"]));
    $donation_amount = $_POST["amount"];

    // Initialize error message variable
    $error_message = "";

    // Check if form types are empty
    if (empty ($first_name)) {
        $error_message .= "<li>First Name must be filled in.</li>";
    }
    if (empty ($last_name)) {
        $error_message .= "<li>Last Name must be filled in.</li>";
    }
    if (empty ($email)) {
        $error_message .= "<li>Email Address must be filled in.</li>";
    }
    if (empty ($donation_amount)) {
        $error_message .= "<li>Donation Amount must be filled in.</li>";
    }

    // If there are no errors, display success message
    if (empty ($error_message)) {
        // Inserts dollar sign and two decimal places to donation
        $formatted_donation_amount = '$' . number_format($donation_amount, 2);

        // Checks if subscription checkbox is checked
        $subscription = (isset ($_POST['subscription']) && $_POST['subscription'] == 'no_subscription') ? 'No' : 'Yes';

        // Display success message in body
        echo "<h1>Your Contribution</h1>
              <p>Thank you $first_name $last_name for your donation of $formatted_donation_amount.</p>
              <p>We will email your receipt to $email.</p>";
        if ($subscription === 'No') {
            // Displays message if user clicks no to subscription
            echo "<p>You have chosen to not receive a free year subscription to our e-magazine.</p>";
        } else {
            // Displays message if user clicks yes to subscription
            echo "<p>You will receive a free year subscription to our e-magazine.</p>";
        }
    } else {
        // Display error message in body
        echo "<h1>Error</h1>
              <p>Please <a href='javascript:history.back()'>go back</a> and fill in the following errors:</p>
              <ul>$error_message</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donation Confirmation</title>
    </head>

    <body>
        <!-- Body content goes here -->
    </body>

</html>