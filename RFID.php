<?php
//Connect to database
require 'db/connect.php';
date_default_timezone_set('Asia/Riyadh');
$d = date("Y-m-d");
$t = date("H:i:sa");

if (!isset($_GET['cardID'])) {
    echo 'Invalid Response';
} else {
    $cardID = $_GET['cardID'];
    $dataQuery = $conn->prepare("SELECT * FROM student WHERE id = :cardID");
    $dataQuery->bindParam(':cardID', $cardID);
    $dataQuery->execute();

    // Fetch the data from db
    $dataQuery = $dataQuery->fetchAll(PDO::FETCH_ASSOC);


    if (!sizeof($dataQuery)) {
        $dumpuser = "user" . (int) rand(1, 100);
        $dataQuery = $conn->prepare("INSERT INTO `student`(`id`, `name`, `score`, `avatar`) VALUES (:cardID,'$dumpuser',1,'any.jpg')");
        $dataQuery->bindParam(':cardID', $cardID);
        $dataQuery->execute();
    } else {
        $stdScore = $dataQuery[0]['score'];
        $stdScore++;
        var_dump($stdScore);
        $updateQuery = $conn->prepare("UPDATE `student` SET `score`='$stdScore' WHERE id = :cardID");
        $updateQuery->bindParam(':cardID', $cardID);
        $updateQuery->execute();

        echo "data updated";
    }
}

sleep(1);
?>