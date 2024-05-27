<?php
$page_title = "Reserve";
$parent = [""];
require "core.php";
require './shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /login');
if (isset($_SESSION['role']))
    header('Location: /admin/dashboard');

$connect = connect($database);
$id = $_SESSION['id'];

$exist = false;
$get = $connect->prepare("SELECT * FROM bookings WHERE student_id = :student_id AND status = 'Pending' ");
$get->execute(array(
        ':student_id' =>$id,
    ));

$result = $get->fetchAll();
if (count($result) > 0) {
    $exist = true;
}
$get = $connect->prepare("SELECT * FROM bookings WHERE student_id = :student_id  ORDER BY date_created desc ");
$get->execute(array(
        ':student_id' =>$id,
    ));

$result = $get->fetchAll();

if($_SERVER['REQUEST_METHOD'] == 'POST' && !$exist){
    $purpose = $_POST['purpose'];
    $laboratory = $_POST['laboratory'];
    $date = $_POST['date'];

    $dateObject = DateTime::createFromFormat('F j, Y', $date);
    $date  = $dateObject->format('Y-m-d');
    $statment = $connect->prepare(
        "INSERT INTO bookings (student_id,laboratory,purpose,reservation_date) VALUES ( :student_id, :lab_name, :purpose,:date)"
    );
    $statment->execute(array(
        ':student_id' => $id,
        ':lab_name' => $_POST['laboratory'],
        ':purpose' => $_POST['purpose'],
        ':date' => $date,
    ));
    header("Location: ./reserve");
}

?>


<div class="flex min-h-screen bg-gradient-to-t from-slate-900 to-gray-900 min-h-screen ">
    <!-- Sidebar -->
    <?php require './shared/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="flex-1 p-4 lg:ml-64  lg:pt-5">
        <?php require './shared/topbar.php'; ?>
        <?php require './views/reserve.view.php'; ?>
    </main>
</div>