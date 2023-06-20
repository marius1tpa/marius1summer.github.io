<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $childName = $_POST["child-name"];
  $childAge = $_POST["child-age"];
  $parentName = $_POST["parent-name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  // Email address to receive the form data
  $to="marius.auesnik@gmail.com";

  // Subject of the email
  $subject = "Summer Camp Registration";

  // Email content
  $message = "Child's Name: $childName\n";
  $message .= "Child's Age: $childAge\n";
  $message .= "Parent's Name: $parentName\n";
  $message .= "Email: $email\n";
  $message .= "Phone: $phone\n";

  // Additional headers
  $headers = "From: $email";

  // Send the email
  $success = mail($to, $subject, $message, $headers);

  // Check if the email was sent successfully
  if ($success) {
    echo "Thank you for registering! We will be in touch shortly.";
  } else {
    echo "Sorry, there was a problem sending your registration. Please try again later.";
  }
}
?>
