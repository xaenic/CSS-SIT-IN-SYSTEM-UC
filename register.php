<?php
require "core.php";


if (isset($_SESSION['email'])) {

    header('Location: ./dashboard');
}


$connect = connect($database);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        if ($_POST['email'] == '' or $_POST['password'] == '' or $_POST['c_password'] == '' or $_POST['year'] == '' or $_POST['course'] == '' or $_POST['id_no'] == '' or $_POST['last_name'] == '' or $_POST['first_name'] == '') {
            echo 'Fill all fields';
            return;
        }
    }
    if (isset($_POST['password'])) {
        if ($_POST['password'] != $_POST['c_password']) {
            echo 'Password must match';
            return;
        }
    }
    $email = filter_var(strtolower($_POST['email']));
    $password = hash('sha512', $_POST['password']);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $id_no = $_POST['id_no'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    try {
        $connect;
    } catch (PDOException $e) {

        echo "Error: ." . $e->getMessage();

        return;
    }
    $get = $connect->prepare("SELECT * FROM students WHERE email = :email");
    $get->execute(array(
        ':email' => $email,
    ));

    $result_login = $get->fetch();
    if ($result_login !== false) {
        echo 'Email address already exists.';
        return;
    }
    $statment = $connect->prepare(
        "INSERT INTO students (id,email,password,first_name,last_name,id_no,course,year) VALUES (null, :email, :password, :first_name, :last_name,:id_no,:course,:year)"
    );

    $statment->execute(array(
        ':email' => $email,
        ':password' => $password,
        ':first_name' => $first_name,
        ':last_name' => $last_name,
        ':id_no' => $id_no,
        ':course' => $course,
        ':year' => $year,
    ));
    echo 'success';
    return;
}



require './shared/header.php';


?>


<div class="md:p-5 md:px-36    rounded-xl md:pt-10 p-2 min-h-[96vh] ">
    <?php require './views/register.view.php'; ?>
</div>