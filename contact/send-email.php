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

      if (!empty($_POST['website'])) {
        exit("Spam detected");
      }

      session_start();

      if (isset($_SESSION['last_submit']) && time() - $_SESSION['last_submit'] < 30) {
          exit("Please wait before sending again.");
      }

      $_SESSION['last_submit'] = time();

      $to = "mozesmiko@gmail.com";
      $subject = "New Contact Form Message from $name";
      
      $email_content = "Name: $name\n";
      $email_content .= "Email: $email\n\n";
      $email_content .= "Message:\n$message\n";

      $headers = "From: no-reply@mozesmiko.dk\r\n";
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
