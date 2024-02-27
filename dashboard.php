<?php
$page_title = "Login - Admin";
require "core.php";
require './shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /login');
if (isset($_SESSION['role']))
    header('Location: /admin/dashboard');
?>


<div class="flex bg-gray-950 min-h-screen">
    <!-- Sidebar -->
    <?php require './shared/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="flex-1 p-5 ml-60">
        <?php require './shared/topbar.php'; ?>
        <?php require './views/dashboard.view.php'; ?>
    </main>
</div>