<?php
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


if(isset($_GET['id'])){
    $sql = "DELETE FROM sessions WHERE student_id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    if($rowCount  > 0){
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        $rowCount = $stmt->rowCount();

        if($rowCount >0 )
            header("Location: ./students");
    }
}

?>