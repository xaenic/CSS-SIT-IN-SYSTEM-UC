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
    $pass = hash('sha512', '1234');
    $sql = "UPDATE students SET password = :pass WHERE id = :id ";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':pass', $pass,PDO::PARAM_STR);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    // Example update statement
    $_SESSION['msg'] = "Password has been reset to 1234";
    header("Location: ./student_session?id=".$_GET['id']);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


