
<?php
if (isset($_POST['submit'])) {
    $to = "vibrotech.seo@gmail.com";
    $subject = $_POST['subject'];
    $message = "Name: " . $_POST['name'] . "\r\n" .
               "Email: " . $_POST['email'] . "\r\n" .
               "Phone Number: " . $_POST['phone'] . "\r\n" .
               "Subject: " . $_POST['subject'] . "\r\n" .
               "Message: " . $_POST['message'];
               
    $headers = "From: vibrotech.seo@gmail.com" . "\r\n" .
               "Reply-To: vibrotech.seo@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    if (mail($to, $subject, $message, $headers)) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
?>