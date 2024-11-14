<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubuntu-Server-PHP-Deployment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <p style="font-weight: bold; text-align: center;">My First Ubunto Server PHP Deployment Joenel Jamero Jr.</p>
        <h1>Registration Form</h1>
        <form action="process_registration.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="middlename">Middle Name:</label>
            <input type="text" id="middlename" name="middlename">

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" required>

            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
