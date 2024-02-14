<!DOCTYPE html>
<!-- Emma Bui, Ch. 2 -->

<?php
    // Variable declarations
    $heading = "Googleplex"; // Variable to store heading
    $street = "1600 Amphitheatre Parkway"; // Variable to store street address
    $city = "Mountain View"; // Variable to store city
    $state = "CA"; // Variable to store state
    $country = "United States"; // Variable to store country
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables: Address</title>
</head>

<body>
    <div class="address">
        <!-- Displays company heading -->
        <h1 class="heading"><?php echo $heading; ?></h1>
        <!-- Displays company description -->
        <p>The <?php echo $heading; ?> is the corporate headquarters complex of Google and its parent company Alphabet Inc.</p>
        <!-- Displays street address -->
        <p>It is located at:</p>
        <p><?php echo $street; ?></p>
        <!-- Displays city, state, and country -->
        <p><?php echo $city . ", " . $state . ", " . $country; ?></p>
    </div>
</body>
</html>

