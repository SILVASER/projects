<?php
$conn = new mysqli("localhost", "root", "123456", "bdregistro");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>