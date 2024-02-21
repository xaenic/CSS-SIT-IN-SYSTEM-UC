<?php
require "core.php";
$page_title = 'Dashboard';
require './shared/header.php';

if (!isset($_SESSION['email']))
    header('Location: login');
?>

<div class="grid grid-cols-12  min-h-screen ">
    <div class="col-span-2 hidden md:block">
        <?php require './shared/sidebar.php'; ?>
    </div>
    <div class="col-span-12 md:col-span-10 pt-5 bg-gradient-to-r from-cyan-500 to-blue-500 p-5">
        <?php require './shared/topbar.php'; ?>
        <?php require './views/dashboard.view.php'; ?>
    </div>
</div>