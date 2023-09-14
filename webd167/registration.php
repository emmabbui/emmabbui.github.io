<!DOCTYPE html> <!-- Emma Bui | Sept. 6, 2023 | Ch. 2 Assignment -->
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Student Registration Form</title>
  </head>

  <body>
    <form action="registration.php" method="post">
      <fieldset>
        <legend>Enter your information in the form below:</legend>

        <p>
          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" id="first_name" size="20" maxlength="40" />
        </p>

        <p>
          <label for="last_name">Last Name:</label>
          <input type="text" name="last_name" id="last_name" size="20" maxlength="40" />
        </p>

        <p>
          <label for="email">Email Address:</label>
          <input type="email" name="email" id="email" size="40" maxlength="50" />
        </p>

        <p>
          <label for="student_id_number">Student ID Number:</label>
          <input type="text" name="student_id_number" id="student_id_number" size="20" maxlength="10" />
        </p>

        <p>
          <label>Gender:</label>
          <input type="radio" id="gender_M" name="gender" value="M" />Male
          <input type="radio" id="gender_F" name="gender" value="F" />Female
          <input type="radio" id="gender_N" name="gender" value="N" />NonBinary
          <input type="radio" id="gender_P" name="gender" value="P" />Prefer Not to Answer
        </p>

        <p>
          <label for="age">Age:</label>
          <select name="age" id="age">
            <option value="0-17">Under 18</option>
            <option value="18-35">Between 18 and 35</option>
            <option value="35+">Over 35</option>
          </select>
        </p>

        <p>
          <label for="questions_concerns">Questions/Concerns:</label>
          <textarea name="questions_concerns" id="questions_concerns" rows="4" cols="40"></textarea>
        </p>
      </fieldset>
      <p align="center">
        <input type="submit" name="submit" value="Submit Information" />
      </p>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $firstname = $_POST['first_name'];
      $lastname  = $_POST['last_name'];
      $email     = $_POST['email'];
      $questions = $_POST['questions_concerns'];

      // Check if fields fields are empty and display a message if so.
      if (empty($firstname) || empty($lastname) || empty($email) || empty($_POST['student_id_number']) || empty($_POST['gender']) || empty($_POST['age'])) {
        echo "<p style='color: red;'>All fields are required. Please fill in all required fields.</p>";
      } else {
        // Display a thank you message with the submitted first name.
        echo "<p>Thank you, <strong>$firstname</strong></p>";
        echo "<p>We will get back to you soon!</p>";
      }
    }
    ?>
  </body>

</html>
