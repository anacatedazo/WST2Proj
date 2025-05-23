<?php
$conn = new mysqli("localhost", "root", "", "user_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = 'SELECT * FROM users WHERE email = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows === 0) {
    echo "Invalid User not found.";
} else {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Optionally create an XML here
        header("Content-Type: application/xml");
        echo "<?xml version='1.0' encoding='UTF-8'?>\n";
        echo "<user>\n";
        echo "<fullname>" . htmlspecialchars($user['fullname']) . "</fullname>\n";
        echo "<email>" . htmlspecialchars($user['email']) . "</email>\n";
        echo "</user>\n";
        
        // below ng password_verify block
        $xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
        $xml .= "<user>\n";
        $xml .= "<fullname>" . htmlspecialchars($user['fullname']) . "</fullname>\n";
        $xml .= "<email>" . htmlspecialchars($user['email']) . "</email>\n";
        $xml .= "</user>\n";

        file_put_contents("userdata.xml", $xml); // creates or overwrites the file

        // then show XML as response
        header("Content-Type: application/xml");
        echo $xml;
    } else {
        echo "Invalid: Wrong password.";
    }
}

$stmt->close();
$conn->close();
?>
