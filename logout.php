<?php
session_start();
$_SESSION["pass"] ="no";
header("Location: ../login_page.php");
?>