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

$newsession = $student[0]['no_sessions'] -1;
try {

    $sql = "UPDATE sessions SET time_out = :new_time WHERE student_id = :id AND session_id = :session_id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->bindParam(':new_time', $current_time,PDO::PARAM_STR);
    $stmt->bindParam(':session_id', $_GET['session_id'], PDO::PARAM_INT); 
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    if ($rowCount > 0) {
        $sql = "UPDATE students SET no_sessions = :new_sessions WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $stmt->bindParam(':new_sessions', $newsession, PDO::PARAM_INT); 
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        if ($rowCount > 0) {
            header("Location: ./records.php");
            exit(); 
        } else {
            echo "No student record updated.";
        }
    } else {
        echo "No student record updated.";
    }


    // Example update statement
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


