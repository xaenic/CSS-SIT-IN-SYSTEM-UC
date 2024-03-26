<?php
$page_title = "Student Sit-In";
$parent = ["Students","Student Information"];
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
     header('Location: /admin/login');
$id =   isset($_GET['id']) ? $_GET['id'] : null ;
if(!$id)
    header('Location: ./students');   
$connect = connect($database);
try {
    $connect;
} catch (PDOException $e) {

    echo "Error: ." . $e->getMessage();

    return;
}


$exist = false;
$get = $connect->prepare("SELECT * FROM sessions WHERE student_id = :student_id AND time_out IS NULL");
$get->execute(array(
        ':student_id' =>$id,
    ));

$result = $get->fetch();
if ($result !== false) {
    $exist = true;
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && !$exist){

    $statment = $connect->prepare(
        "INSERT INTO sessions (student_id,lab_name,purpose) VALUES ( :student_id, :lab_name, :purpose)"
    );
    $statment->execute(array(
        ':student_id' => $id,
        ':lab_name' => $_POST['laboratory'],
        ':purpose' => $_POST['purpose'],
    ));

    header("Location: ./sitin?id=". $id);
}



$connect = connect($database);
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
            <?php require './views/sitin.view.php'; ?>
        </div>
    </main>
</div>