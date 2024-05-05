<?php
require "core.php";
$page_title = "Login";
if (isset($_SESSION['verified'])) {
    header('Location: ./dashboard');
}
$id = "";
$connect = connect($database);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        if ($_POST['email'] == '' or $_POST['password'] == '') {
            echo 'Fill all fields';
            return;
        }
    }

    $email = filter_var(strtolower($_POST['email']));
    $password = hash('sha512', $_POST['password']);

    try {
        $connect;
    } catch (PDOException $e) {

        echo "Error: ." . $e->getMessage();

        return;
    }
    $statement = $connect->prepare("SELECT * FROM students WHERE email = :email AND password = :password");
    $statement->execute(array(
        ':email' => $email,
        ':password' => $password
    ));

    $result_login = $statement->fetch();

    if ($result_login !== false) {
        $id = $result_login['id'];
        if($result_login['active'] == 1) {
             $_SESSION['isLoggedIn'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['id'] =$result_login['id'];
            $_SESSION['verified'] = true;
            $_SESSION['first_name'] = $result_login['first_name'];
            echo 'success';
        }else {
            echo 'Email not verified yet.'. $id;;
        }
       
        return;
    } else {

        echo 'Invalid Credentials';

        return;
    }
}
$page_title = "Login";
require './shared/header.php';
?>
<div class="md:p-5 md:px-36    rounded-xl md:pt-14 p-2 ">
    <?php require './views/login.view.php'; ?>
</div>

<?php require './shared/footer.php'; ?>