<?php
// Basic input validation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = htmlspecialchars(trim($_POST['firstname'] ?? ''));
    $lastname  = htmlspecialchars(trim($_POST['lastname'] ?? ''));
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);

    if ($firstname && $lastname && $email) {
        echo "First Name: " . $firstname . "<br>";
        echo "Last Name: " . $lastname . "<br>";
        echo "Email: " . $email . "<br>";
        echo "category: ". $category . "<br>";
    } else {
        echo "Invalid input. Please go back and try again.";
    }
} else {
    echo "Invalid request method.";
}
?>