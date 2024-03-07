<?php
$page_title = "Students";
$parent = [""];
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
    header('Location: /');
$connect = connect($database);
try {
    $connect;
} catch (PDOException $e) {

    echo "Error: ." . $e->getMessage();

    return;
}

$students = get_students($connect);


?>


<div class="min-h-screen bg-gradient-to-t from-slate-900 to-gray-900  ">

    <!-- Sidebar -->
    <?php require '../shared/sidebar.php'; ?>
    <!-- Main Content -->

    <main class="flex-1 p-4 lg:ml-64  lg:pt-5">
        <?php require '../shared/topbar.php'; ?>
        <div class="text-white">
            <?php require './views/students.view.php'; ?>
        </div>
    </main>
</div>