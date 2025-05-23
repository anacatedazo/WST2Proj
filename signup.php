<?php
$conn = new mysqli("localhost", "root", "", "user_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure hashing

$sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $fullname, $email, $password);

if ($stmt->execute()) {
    echo "Account created successfully.";
    // Optionally redirect to login
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
