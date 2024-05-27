<?php

date_default_timezone_set("Asia/Manila");
$page_title = "Students";
$parent = [""];
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
     header('Location: /admin/login');
$connect = connect($database);
try {
    $connect;
} catch (PDOException $e) {

    echo "Error: ." . $e->getMessage();

    return;
}

$student = get_student($connect,$_GET['id']);
$current_time = date("Y-m-d H:i:s");
try {

    $sql = "UPDATE students SET no_sessions = 30 WHERE id = :id ";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    // Example update statement
    $_SESSION['msg'] = "Sessions has been reset";
    header("Location: ./student_session?id=".$_GET['id']);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


