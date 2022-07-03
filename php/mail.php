<?php
//TODO: Resolve error with the mail SMTP and smtp_port...
if (isset($_POST['name']) && $_POST['name'] != "" && isset($_POST['email']) && $_POST['name'] != "" && isset($_POST['subject']) && $_POST['subject'] != "" && isset($_POST['message']) && $_POST['message'] != "") {
    $to = "Axel.delille31@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'];
    mail($to, $subject, $message, $headers);
    echo "success";
} else {
    echo "error";
}
?>