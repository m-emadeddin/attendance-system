<?php
include "../db/connect.php";

// Execute the query
$query = $conn->query('SELECT * FROM student');
$query->setFetchMode(PDO::FETCH_ASSOC);
$rows = $query->fetchAll();

// Determine the file mode based on whether the file already exists
$fileMode = file_exists('export.csv') ? 'a' : 'w';

// Create a file handle
$file = fopen('export.csv', $fileMode);

// Write the CSV headers if the file is newly created
if ($fileMode === 'w') {
    $headers = ['ID', 'Name', 'Avatar', 'Attendance No.'];
    fputcsv($file, $headers);
}

// Write the data rows
foreach ($rows as $row) {
    fputcsv($file, $row);
}

// Close the file handle
fclose($file);

// Output a message or redirect to a success page
echo 'Data Exported Successfully'; 
?>
