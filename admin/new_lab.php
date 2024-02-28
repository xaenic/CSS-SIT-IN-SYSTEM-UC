<?php
$page_title = "New Laboratory";
$parent = ['labs', 'Laboratories'];
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
    header('Location: /');

$error = '';
$room_name = '';
$room_number = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['room_name'] == '')
        $error .= "Name is Required<br>";
    if ($_POST['room_number'] == '')
        $error .= "Number is Required<br>";
    $connect = connect($database);

    try {
        $connect;
    } catch (PDOException $e) {

        $error .= $e->getMessage();
    }
    $room_name = $_POST['room_name'];
    $room_number = $_POST['room_number'];
    if ($error == '') {

        $active = $_POST['active'];

        $statement = $connect->prepare("SELECT * FROM labs WHERE room_name = :room_name AND room_number = :room_number");
        $statement->execute(array(
            ':room_name' => $room_name,
            ':room_number' => $room_number
        ));
        $result_login = $statement->fetch();


        if ($result_login !== false) {
            $error = 'Laboratory Already Exists';
        } else {
            $statment = $connect->prepare(
                "INSERT INTO labs (id,room_name,room_number,active) VALUES (null, :room_name, :room_number, :active)"
            );
            $statment->execute(array(
                ':room_name' => $room_name,
                ':room_number' => $room_number,
                ':active' => $active,
            ));
            $_SESSION['message'] = 'Laboratory ' . $room_name . ' has been added.';

            header('Location: ./labs');
        }
    }
}
?>
<div class="min-h-screen bg-gradient-to-t from-slate-900 to-gray-900  ">
    <!-- Sidebar -->
    <?php require '../shared/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="flex-1 p-4 lg:ml-64  lg:pt-5">
        <?php require '../shared/topbar.php'; ?>
        <div class="text-white">
            <?php require './views/new_lab.view.php'; ?>
        </div>
    </main>
</div>