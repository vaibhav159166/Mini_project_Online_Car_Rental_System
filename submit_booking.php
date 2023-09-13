<?php
// Database configuration
$dbHost = 'localhost';      // Replace with your database host
$dbName = 'mpl';  // Replace with your database name
$dbUser = 'root';  // Replace with your database username
$dbPass = '';  // Replace with your database password

// Connect to the database
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Collect form data
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Prepare and execute the SQL query to insert the booking details
  $stmt = $conn->prepare("INSERT INTO booking (name, email) VALUES (:name, :email)");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->execute();

  // Send confirmation email to user
  $to = $email;
  $subject = 'Car Booking Confirmation';
  $message = "Dear $name,\n\nThank you for booking a car. Your booking has been confirmed.";

  // Set headers
  $headers = "From: vaibhavbhorkade159166@gmail.com\r\n";
  $headers .= "Reply-To: vaibhavbhorkade159166@gmail.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Send email to user
  if (mail($to, $subject, $message, $headers)) {
    echo 'Confirmation email sent successfully.';
  } else {
    echo 'Error sending email.';
  }
}
?>
