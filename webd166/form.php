<!DOCTYPE html>
<!-- Emma Bui, Assignment 3 Form -->

<?php 
// Access form submission page
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
// Variable Declarations 
$name = $_POST['name']; // Variable to store name
$email = $_POST['email']; // Variable to store email
$phone = $_POST['phone']; // Variable to store phone number
$heard = $_POST['heard']; // Variable to store how user heard about form
$comments = $_POST['comments']; // Variable to store comments
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Information</title>
</head>

<body>
<!-- Displays "Thank You" message with name -->
<h1> Thank you <?php echo $_POST['name'];?> </h1>
<!-- Displays email -->
<p>
  Email: <?php echo $_POST['email']; ?> 
</p>
<!-- Displays phone number -->
<p>
  Phone: <?php echo $_POST['phone']; ?> 
</p>
<!-- Displays where user heard form from -->
<p>
  Heard from: <?php echo $_POST['heard']; ?> 
</p>
<!-- Displays comments -->
<p>
  Comments: <?php echo $_POST['comments']; ?> 
</p>
</body>

</html>