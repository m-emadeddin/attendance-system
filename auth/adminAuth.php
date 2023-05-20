<?php
if($_SESSION['admin'] != 1){
    header("Location: ../std");
    exit();
}

?>
