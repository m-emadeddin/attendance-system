<?php
if($_SESSION['admin'] != 1){
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}

?>
