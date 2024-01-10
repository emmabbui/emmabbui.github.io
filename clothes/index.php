<!DOCTYPE html>
<html>
  <head>
      <title>Clothes and More</title>

  </head>
  <body>
      <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
      <p>
        <a href="logout.php">Logout</a>
      </p>
  </body>

</html>


<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location: login.php");
}
?>