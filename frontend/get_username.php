<?php
// Include the database connection file
include 'connect.php';

// Assuming you have a session variable containing the user ID of the logged-in user
// You need to replace $_SESSION['user_id'] with your actual session variable
$user_id = $_SESSION['user_id'];

// Query to fetch the username for the logged-in user
$sql = "SELECT username FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the username from the result set
    $row = $result->fetch_assoc();
    $username = $row['username'];
} else {
    // If no user found, set a default username or handle the case accordingly
    $username = "Guest";
}

// Close the database connection
$conn->close();
?>
