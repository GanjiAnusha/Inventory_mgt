<?php
session_start();
if ($_SESSION["role"] !== "admin") {
    header("Location: dashboard.php");
    exit;
}
include 'db.php';

$name = $_POST["name"];
$qty = $_POST["qty"];

$conn->query("INSERT INTO inventory (name, quantity) VALUES ('$name', $qty)");
header("Location: dashboard.php");
?>
