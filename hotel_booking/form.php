<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
  <style>
    body { font-family: Arial; margin: 40px; }
    .error { color: red; }
    .success { color: green; }
  </style>
</head>
<body>

<?php
// Define variables and set to empty values
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Name validation
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = htmlspecialchars($_POST["name"]);
  }

  // Email validation
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  } else {
    $email = htmlspecialchars($_POST["email"]);
  }

  // Message validation
  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = htmlspecialchars($_POST["message"]);
  }

  // If no errors, show success message (or process the data)
  if ($name && $email && $message && !$nameErr && !$emailErr && !$messageErr) {
    $successMsg = "Thank you, $name! Your message has been received.";
    // You can also mail the data using mail() here
    // mail($to, $subject, $message);
    // Clear form
    $name = $email = $message = "";
  }
}
?>

<h2>Contact Us</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  Name: <br>
  <input type="text" name="name" value="<?php echo $name; ?>">
  <span class="error">* <?php echo $nameErr; ?></span>
  <br><br>

  Email: <br>
  <input type="text" name="email" value="<?php echo $email; ?>">
  <span class="error">* <?php echo $emailErr; ?></span>
  <br><br>

  Message: <br>
  <textarea name="message" rows="5" cols="40"><?php echo $message; ?></textarea>
  <span class="error">* <?php echo $messageErr; ?></span>
  <br><br>

  <input type="submit" value="Submit">
</form>

<?php
if ($successMsg) {
  echo "<p class='success'>$successMsg</p>";
}
?>

</body>
</html>
