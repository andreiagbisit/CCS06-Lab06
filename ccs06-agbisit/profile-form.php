<?php
if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>My Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>

<!doctype html>
<html>
<head>
  <title>Profile Form</title>
</head>
<body style="font-family:Arial;">
  <h1>Please enter the following personal data.</h1>
  <form method="POST" action="profile-form.php">
    Name: <input type="text" name="complete_name"><br>
    Birthdate: <input type="date" name="birthdate"><br>
    Email Address: <input type="email" name="email"><br>
    Program:

    <select name="program">
      <option value="BSCS">BS in Computer Science</option>
      <option value="BSIT">BS in Information Technology</option>
    </select>
    <br>

    Favorite Color: <input type="color" name="favorite_color"><br>
    Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000"><br>
    <button>Submit</button>
  </form>
</body>
</html>

<?php
endif;
?>