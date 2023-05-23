<?php
include "connect.php";

$personal = $conn->prepare('SELECT * FROM personal_info WHERE id = :id;');
$personal->bindParam(':id', $_SESSION['id']);
$personal->execute();
$personal = $personal->fetch(PDO::FETCH_ASSOC);

$dept = $conn->prepare('SELECT * FROM dept_info WHERE id = :id;');
$dept->bindParam(':id', $_SESSION['id']);
$dept->execute();
$dept = $dept->fetch(PDO::FETCH_ASSOC);