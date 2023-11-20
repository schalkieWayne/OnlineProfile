<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Save form data to a text file (you may want to secure this in a real-world scenario)
    $data = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n\n";
    file_put_contents("form_data.txt", $data, FILE_APPEND);

    // Send email (you may need to configure your server for this to work)
    $to = "schalkie1221@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // You can customize the success message or redirect the user to a thank you page
    echo "<script>alert('Thank you for your message! You will be contacted shortly.');</script>";
}
?>
