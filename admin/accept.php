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



$statement = $connect->prepare("SELECT * FROM bookings WHERE id = :id ");
$statement->execute(array(
        ':id' => $_GET['bid'],
    ));
$student = $statement->fetch();

$bid = $_GET['bid'];
$current_time = date("Y-m-d H:i:s");


try {

    $sql = "UPDATE bookings SET status = 'Accepted' WHERE id = :id ";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['bid'], PDO::PARAM_INT);
  
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    $statment = $connect->prepare(
        "INSERT INTO sessions (student_id,lab_name,purpose,time_in) VALUES ( :student_id, :lab_name, :purpose,null)"
    );
    $statment->execute(array(
        ':student_id' => $_GET['id'],
        ':lab_name' => $student['laboratory'],
        ':purpose' => $student['purpose'],
    ));
    // Example update statement
    header('Location: ./reservations');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

