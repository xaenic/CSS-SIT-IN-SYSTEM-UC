<?php
$page_title = "Reservations";
$parent = [""];
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
     header('Location: /admin/login');
$connect = connect($database);
try {
    $connect;
} catch (PDOException $e) {

    echo "Error: ." . $e->getMessage();

    return;
}
$sentence = $connect->prepare("SELECT bookings.id as bid, bookings.*, students.* FROM bookings INNER JOIN students ON students.id = bookings.student_id ORDER BY date_created DESC");

$sentence->execute();
$books = $sentence->fetchAll(PDO::FETCH_ASSOC);

?>






<!-- implement a crud for student  yayawa last nalang ni wil ldo this later last na last najud ni-->
<div class="min-h-screen bg-gradient-to-t from-slate-900 to-gray-900  ">

    <!-- Sidebar -->
    <?php require '../shared/sidebar.php'; ?>
    <!-- Main Content -->

    <main class="flex-1 p-4 lg:ml-64  lg:pt-5">
        <?php require '../shared/topbar.php'; ?>
        <div class="text-white">
            <?php require './views/reservations.view.php'; ?>
        </div>
    </main>
</div>