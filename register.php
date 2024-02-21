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


<div class=" relative  rounded-xl   min-h-screen relative grid grid-cols-1 lg:grid-cols-12 w-full p-2 md:p-10 overflow-hidden">
    <div class="bg-gradient-to-tl top-32 from-[#FFDEC1] to-[#FBD7FF] absolute -z-10 w-32 rounded-full blur h-32"></div>
    <div class="bg-gradient-to-tl right-32 top-32 from-[#FFDEC1] to-[#FBD7FF] absolute -z-10 w-32 rounded-full blur h-32"></div>
    <div class="bg-gradient-to-tl bottom-32 left-36 from-[#FFDEC1] to-[#FBD7FF] absolute -z-10 w-32 rounded-full blur h-32"></div>
    <div class="bg-gradient-to-tl bottom-20 left-[50%] from-[#FFDEC1] to-[#FBD7FF] absolute -z-10 w-32 rounded-full blur h-32"></div>
    <div class="bg-gradient-to-tl top-[10%] right-[35%] from-[#FFDEC1] to-[#FBD7FF] absolute -z-10 w-32 rounded-full blur h-32"></div>
    <div class="bg-gradient-to-tl left-[25%] top-[-60px] from-[#FFDEC1] to-[#FBD7FF] absolute -z-10 w-32 rounded-full blur h-32"></div>
    <div class="bg-gradient-to-tl right-[-10px] bottom-[0] from-[#FFDEC1] to-[#FBD7FF] absolute -z-10 w-32 rounded-full blur h-32"></div>
    <?php require './views/register.view.php'; ?>

</div>

<?php require './shared/footer.php'; ?>