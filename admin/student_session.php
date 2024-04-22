<?php
$page_title = "Student Information";
$parent = ['Students', 'Students'];
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
    header('Location: /admin/login');

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
}
$id =   isset($_GET['id']) ? $_GET['id'] : null ;

if(!$id)
    header('Location: ./students');

$connect = connect($database);
$students = get_records_by_id($connect,$id); 
$student = get_student($connect,$id);

if(!$student)
    header('Location: ./students');
?>
<div class="min-h-screen bg-gradient-to-t from-slate-900 to-gray-900  ">
    <!-- Sidebar -->
    <?php require '../shared/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="flex-1 p-4 lg:ml-64  lg:pt-5">
        <?php require '../shared/topbar.php'; ?>
        <div class="text-white">
            <?php require './views/student_session.view.php'; ?>
        </div>
    </main>
</div>