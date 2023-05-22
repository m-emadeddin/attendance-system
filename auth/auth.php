<?php
session_start();

// لو حد حاول يشوف صفحة من  غير ما يعمل لوج ان
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

?>
