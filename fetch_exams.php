<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "exam_schedule";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT date, matiere, enseignant, salle FROM exams";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["matiere"]. "</td><td>" . $row["enseignant"]. "</td><td>" . $row["salle"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
