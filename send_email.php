<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $txt = $_POST["body"];
    $header = "From: " . $_POST["from"];

    if (mail($to, $subject, $txt, $header)) {
        echo "Email sent successfully.";
    } else {
        echo "Email could not be sent.";
    }
}
?>
