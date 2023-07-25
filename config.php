<?php
$hostname = 'localhost'; // Your database hostname
$username = 'root'; // Your database username
$password = ''; // Your database password
$database = 'labfinalportfolio'; // Your database name

// Create a connection
$con = new mysqli($hostname, $username, $password, $database);

// Check for connection errors
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

// Perform a SELECT query to retrieve the values
$query = "SELECT * FROM aboutme"; // Replace 'aboutme' with the actual table name
$result = $con->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the data and assign it to variables using a loop
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $dob = $row['dob'];
        $birthOrigin = $row['birthOrigin'];

        // You can use the retrieved values here or store them in an array for further processing
        // For example:
        // $values[] = $row;
    }
} else {
    echo 'Error executing query: ' . $con->error;
}

// Close the connection
$con->close();
