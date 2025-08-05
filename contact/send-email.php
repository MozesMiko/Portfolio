<?php

  if ($_SERVER["REQUEST_METHOD"] === "POST") {

      // Sanitize input
      $name = strip_tags(trim($_POST["name"] ?? ''));
      $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
      $message = trim($_POST["message"] ?? '');

      // Validate input
      if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Please fill in all fields correctly.";
          exit;
      }

      $to = "mozesmiko@gmail.com";
      $subject = "New Contact Form Message from your website";
      
      $email_content = "Name: $name\n";
      $email_content .= "Email: $email\n\n";
      $email_content .= "Message:\n$message\n";

      $headers = "From: noreply@mozesmiko.dk\r\n";
      $headers .= "Reply-To: $email\r\n";

      if (mail($to, $subject, $email_content, $headers)) {
          echo "Thank you! Your message has been sent.";
      } else {
          echo "Oops! Something went wrong, please try again.";
      }
  } else {
      echo "Invalid request.";
  }
?>
