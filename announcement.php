<?php
$page_title = "Announcements";
$parent = ["",""];
require "core.php";
require './shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /login');
if (isset($_SESSION['role']))
    header('Location: /admin/dashboard');

$connect = connect($database);
$id = $_SESSION['id'];
$sentence = $connect->prepare("SELECT * FROM announcement");
$sentence->execute();
$announcements = $sentence->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="flex min-h-screen bg-gradient-to-t from-slate-900 to-gray-900 min-h-screen ">
    <!-- Sidebar -->
    <?php require './shared/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="flex-1 p-4 lg:ml-64  lg:pt-5">
        <?php require './shared/topbar.php'; ?>
        <?php require './views/announcement.view.php'; ?>
    </main>
</div>