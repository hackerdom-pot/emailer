<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $from = $_POST["from"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set additional headers (you can customize these)
    $headers = "From: $name <$from>\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email. Please check your configuration.";
    }
}
?>
