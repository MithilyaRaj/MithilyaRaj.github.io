<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "mithilyaraj@gmail.com";
  $subject = "New message from your portfolio website";
  $body = "Name: $name\nEmail: $email\n\n$message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message.";
  }
}
?>
