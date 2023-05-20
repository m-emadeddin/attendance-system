<?php
include "../db/connect.php";

// Execute the query
$query = $conn->query('SELECT * FROM student');
$query->setFetchMode(PDO::FETCH_ASSOC);
$rows = $query->fetchAll();

// Create a file handle
$file = fopen('export.csv', "w");

// Write the CSV headers if the file is newly created
$headers = ['ID', 'Name', 'Avatar', 'Attendance No.'];
fputcsv($file, $headers);


// Write the data rows
foreach ($rows as $row) {
    fputcsv($file, $row);
}

// Close the file handle
fclose($file);

?>
