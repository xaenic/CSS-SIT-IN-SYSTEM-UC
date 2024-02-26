<?php
$page_title = "Login - Admin";
require "core.php";
require './shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /login');
if (isset($_SESSION['role']))
    header('Location: /admin/dashboard');
?>


<div class="flex">
    <!-- Sidebar -->
    <?php require './shared/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="flex-1 p-5 ml-64">
        <?php require './views/dashboard.view.php'; ?>
    </main>
</div>