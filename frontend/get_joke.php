<?php
include 'connect.php';

$sql = "SELECT * FROM jokes ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Joke: " . $row["joke_text"];
    }
} else {
    echo "No jokes found.";
}

$conn->close();
?>
