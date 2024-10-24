<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect and sanitize form data
    $region = htmlspecialchars($_POST['region']);
    $voter_number = htmlspecialchars($_POST['voter_number']);
    $surname = htmlspecialchars($_POST['surname']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $address = htmlspecialchars($_POST['address']);
    $signature = htmlspecialchars($_POST['signature']);

    // You can process the data here, like storing it in a database or sending an email

    // Example: Sending data via email
    $to = "heino.appdev@gmail.com";  // Replace with your email
    $subject = "New Association Registration";
    $message = "
    Name of Region: $region\n
    Voter's Number: $voter_number\n
    Surname: $surname\n
    First Name: $first_name\n
    Address: $address\n
    Signature: $signature
    ";
    $headers = "From: no-reply@yourwebsite.com";  // Replace with your domain

    if (mail($to, $subject, $message, $headers)) {
        echo "Registration successful. Thank you!";
    } else {
        echo "There was an issue with sending the registration. Please try again.";
    }

} else {
    echo "Invalid request method.";
}
?>
