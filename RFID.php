<?php  
//Connect to database
require 'db/connect.php';
date_default_timezone_set('Asia/Riyadh');
$d = date("Y-m-d");
$t = date("H:i:sa");

if (!isset($_GET['cardID'])) {
    echo "Invalid request.";        
}
else{
    $cardID = $_GET['cardID'];
    $dataQuery = $conn->query("SELECT * FROM student WHERE ID=$cardID;");
    $dataQuery->setFetchMode(PDO::FETCH_ASSOC);
    $dataQuery = $dataQuery->fetchAll(PDO::FETCH_ASSOC);
    var_dump($dataQuery);


    if (!sizeof($dataQuery)) {
        echo "SQL_Error_Select_device";
        exit();
    }
    else{
        $stdScore = $dataQuery[0]['score'];
        $stdScore++;
        var_dump($stdScore);
        $updateQuery = $conn->query("UPDATE `student` SET `score`='$stdScore' WHERE id = $cardID");
        echo "data updated";
    }  
}
?>