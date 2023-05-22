<?php
include "connect.php";

// Retrieve search query from submission
$search = $_GET['search'];

// Build SQL query to search for student by name or ID
$sql = "SELECT * FROM student WHERE name LIKE ? OR id LIKE ?";

// Prepare SQL statement
$stmt = $conn->prepare($sql);

// Execute SQL statement with search query parameter
$stmt->execute(["%$search%", "$search"]);