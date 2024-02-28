<?php
$page_title = "Login - Admin";
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
    header('Location: /');


?>


<div class="flex min-h-screen bg-gray-950 min-h-screen ">

    <!-- Sidebar -->
    <?php require '../shared/sidebar.php'; ?>
    <!-- Main Content -->

    <main class="flex-1 p-5 ml-64">
        <?php require '../shared/topbar.php'; ?>
        <div class="text-white">
            <?php require './views/dashboard.view.php'; ?>
        </div>
    </main>
</div>