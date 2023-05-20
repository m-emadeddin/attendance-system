<?php
include "../db/connect.php";

// Execute the query
$query = $conn->query('SELECT * FROM student');
$query->setFetchMode(PDO::FETCH_ASSOC);
$rows = $query->fetchAll();

// Create a file handle
$file = fopen('export.csv', 'w');

// Write the CSV headers
$headers = ['ID', 'Name',  'Attendance No.', 'Avatar'];
fputcsv($file, $headers);

// Write the data rows
foreach ($rows as $row) {
    fputcsv($file, $row);
}

// Close the file handle
fclose($file);

// Set the appropriate headers for file download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="export.csv"');

// Send the file content to the browser
readfile('export.csv');
unlink("export.csv");
exit();
?>
