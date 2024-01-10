<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {
  // 1. Add in two post data variables from the form
  $subject = $_POST['subject'];
  $content = $_POST['content'];

  // I have written the SQL statement
  $sql = $dbh->prepare("SELECT email FROM contactform");
  $sql->execute();

  // Use a while loop to iterate thru email contacts
  while ($row = $sql->fetch()) {
    $email = $row['email'];

    // 2. Complete the mail() function with 'to', 'subject', 'message', and 'headers'
    $to      = $email;
    $message = $content;
    $headers = "From: emmaabbui@gmail.com";

    $diditsend = mail($to, $subject, $message, $headers);
  }

  if ($diditsend) {
    echo "The email was successfully sent!";
  }
}
?>

<form action="newsletter.php" method="post">
  Subject: <input type="text" name="subject">
  <br>Content:
  <textarea name="content" rows="20" cols="50"></textarea>
  <input type="submit" name="submit" value="Send News">
</form>