<?php
require "core.php";
require './shared/header.php';

if(!isset($_SESSION['email']))
    header('Location: login');
?>

<div class="grid grid-cols-12 gap-3 min-h-screen">
    <div class="col-span-2 hidden md:block">
           <?php require './shared/sidebar.php'; ?>
    </div>
    <div class="col-span-10">
        <?php require './shared/topbar.php'; ?>
        <?php require './views/dashboard.view.php'; ?>
    </div>
</div>