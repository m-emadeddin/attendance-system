<?php

// Establish database connection
$host = "localhost"; // Replace with your database host
$user = "root"; // Replace with your database username
$pass = ""; // Replace with your database password
$db = "college"; // Replace with your database name

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Retrieve search query from form submission
$search = $_GET['search'];

// Build SQL query to search for student by name or ID
$sql = "SELECT * FROM student WHERE name LIKE ? OR id LIKE ?";

// Prepare SQL statement
$stmt = $pdo->prepare($sql);

// Execute SQL statement with search query parameter
$stmt->execute(["$search%", "$search"]);
