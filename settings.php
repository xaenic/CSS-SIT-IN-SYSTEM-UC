<?php
$page_title = "Profile Settings";
$parent = [""];
require "core.php";
require './shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /login');
if (isset($_SESSION['role']))
    header('Location: /admin/dashboard');

$connect = connect($database);
$id = $_SESSION['id'];
$statement = $connect->prepare("SELECT * FROM students WHERE email = :email AND active = 1 ");
$statement->execute(array(
    ':email' => $_SESSION['email'],
));
$user = $statement->fetch();

$message = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $password = hash('sha512', $_POST['password']);
    if($password == $user['password']) {
        $sql = "UPDATE students SET last_name = :last_name, first_name = :first_name, course = :course, year = :year,  email = :email  WHERE id = :id ";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':course', $course);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $rowCount = $stmt->rowCount();
        
        if($rowCount > 0){
            $user['last_name'] = $last_name;
            $user['first_name'] = $first_name;
            $user['course'] = $course;
            $user['year'] = $year;
            $user['email'] = $email;
            $message = '<span class="text-green-500">Profile Updated Successfully!</span>';
        }else{
            $message = '<span class="text-red-500">No Changes Made!</span>';
        }
    }else {
        $message = '<span class="text-red-500">Incorrect Password</span>';
    }
    
}
?>


<div class="flex min-h-screen bg-gradient-to-t from-slate-900 to-gray-900 min-h-screen ">
    <!-- Sidebar -->
    <?php require './shared/sidebar.php'; ?>
    <!-- Main Content -->
    <main class="flex-1 p-4 lg:ml-64  lg:pt-5">
        <?php require './shared/topbar.php'; ?>
        <?php require './views/settings.view.php'; ?>
    </main>
</div>