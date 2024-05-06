<?php
$page_title = "Report";
$parent = [""];
require "core.php";
require './shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /login');
if (isset($_SESSION['role']))
    header('Location: /admin/dashboard');

$connect = connect($database);


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $content = $_POST['feedback'];
    if($content == ''){
        $_SESSION['flash_message'] = "Message is required";
        header("Location: ./dashboard");
        exit();
    }
    $statment = $connect->prepare(
        "INSERT INTO feedback (user_id,content) VALUES ( :user_id, :content)"
    );
    $statment->execute(array(
        ':user_id' => $_SESSION['id'],
        ':content' => $content,
    ));
    $_SESSION['flash_message'] = "Feedback submitted successfully!";
    header("Location: ./dashboard");
    exit();
}
?>
