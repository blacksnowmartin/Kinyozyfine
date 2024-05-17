<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $stylist = $_POST["stylist"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Insert data into the database
    $sql = "INSERT INTO bookings (stylist, date, time) VALUES ('$stylist', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
