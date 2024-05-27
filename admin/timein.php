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

    $sql = "UPDATE sessions SET time_in = :new_time WHERE student_id = :id AND session_id = :session_id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->bindParam(':new_time', $current_time,PDO::PARAM_STR);
    $stmt->bindParam(':session_id', $_GET['session_id'], PDO::PARAM_INT); 
    $stmt->execute();
    $rowCount = $stmt->rowCount();
  
    header("Location: ./records");
    // Example update statement
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


