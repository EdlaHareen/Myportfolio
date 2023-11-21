<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["Email"];
    $name = $_POST["Name"];
    $message = $_POST["Message"];

    // Compose the data string
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Specify the file path
    $file_path = "form_data.txt";

    // Open the file in append mode
    $file = fopen($file_path, "a");

    // Check if the file is successfully opened
    if ($file) {
        // Write the data to the file
        fwrite($file, $data);

        // Close the file
        fclose($file);

        // Echo a success message
        echo "<script>alert('Thank you, $name, You message , $message has reached us , we will get back to you');</script>";
    } else {
        // Echo an error message
        echo "<script>alert('Error submitting the form. Please try again later.');</script>";
    }
}
?>
