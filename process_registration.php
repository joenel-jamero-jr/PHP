<?php
// Database connection settings
$host = 'localhost';
$dbname = 'registration_db';
$username = 'username';  // replace with your MySQL username
$password = 'password';  // replace with your MySQL password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

// Insert data into the database
$sql = "INSERT INTO users (firstname, middlename, lastname, age, birthdate, email, password)
        VALUES ('$firstname', '$middlename', '$lastname', $age, '$birthdate', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    $message = "Registration successful!";
    $alert_type = "success";
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
    $alert_type = "error";
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Response</title>
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.js"></script>
</head>
<body>

    <script>
        // Display SweetAlert based on PHP message and alert type
        Swal.fire({
            icon: '<?php echo $alert_type; ?>',  // Set alert type (success or error)
            title: '<?php echo $message; ?>',  // Display the message
            showConfirmButton: false,          // Optional: remove the confirm button
            timer: 3000,                       // Alert will disappear after 3 seconds
            willClose: () => {
                window.location.href = 'index.php';  // Redirect after closing the alert (optional)
            }
        });
    </script>

</body>
</html>
