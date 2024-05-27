<?php
require "core.php";
if (!isset($_SESSION['email']))
    header('Location: /login');
if (isset($_SESSION['role']))
    header('Location: /admin/dashboard');

$connect = connect($database);
$sql = "UPDATE bookings SET status = 'Cancelled' WHERE id = :id ";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();

header("Location: ./reserve");
?>
