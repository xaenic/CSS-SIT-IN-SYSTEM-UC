<?php
$page_title = "History";
$parent = [""];
require "core.php";
require './shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /login');
if (isset($_SESSION['role']))
    header('Location: /admin/dashboard');

$connect = connect($database);
$id = $_SESSION['id'];
$sentence = $connect->prepare("SELECT * FROM sessions INNER JOIN students ON students.id = sessions.student_id  WHERE time_out IS NOT NULL AND id = '$id' ORDER BY time_out ");
$sentence->execute();
$students = $sentence->fetchAll(PDO::FETCH_ASSOC);

$statement = $connect->prepare("SELECT * FROM students WHERE email = :email AND active = 1 ");
$statement->execute(array(
    ':email' => $_SESSION['email'],
));

$user = $statement->fetch();
?>


<div class="flex min-h-screen bg-gradient-to-t from-slate-900 to-gray-900 min-h-screen ">
    <!-- Sidebar -->
    <?php require './shared/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="flex-1 p-4 lg:ml-64  lg:pt-5">
        <?php require './shared/topbar.php'; ?>
        <?php require './views/history.view.php'; ?>
    </main>
</div>