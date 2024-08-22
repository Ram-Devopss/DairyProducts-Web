<?php

$conn = mysqli_connect("localhost", "root", "", "dairy") or die(mysqli_error($con));

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare data for insertion
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// SQL query to insert data into the dishes table
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    // Record inserted successfully
    echo "Registeration Sucessfully";

    // Redirect to navigation.php after 2 seconds
    header("refresh:2; url=index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>