<?php
$page_title = "Login - Admin";
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');


?>


<div class="flex ">
    <div class="h-96 bg-gradient-to-r from-gray-900 to-slate-800 w-full  absolute -z-20">

    </div>
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