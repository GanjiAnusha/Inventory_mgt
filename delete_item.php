<?php
session_start();
if ($_SESSION["role"] !== "admin") {
    header("Location: dashboard.php");
    exit;
}
include 'db.php';

$id = $_GET["id"];
$conn->query("DELETE FROM inventory WHERE id=$id");
header("Location: dashboard.php");
?>
