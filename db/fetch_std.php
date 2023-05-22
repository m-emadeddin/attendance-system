<?php
include "connect.php";
$query = $conn->query('SELECT * FROM student;');
$query->setFetchMode(PDO::FETCH_ASSOC);
$query = $query->fetchAll(PDO::FETCH_ASSOC);
