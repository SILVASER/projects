<?php
$conn = new mysqli("localhost", "root", "", "bdweb");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>