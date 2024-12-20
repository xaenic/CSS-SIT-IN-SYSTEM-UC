<?php
$page_title = "Login - Admin";
require "core.php";

if (isset($_SESSION['email'])) {

    header('Location: ./dashboard');
}
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
    $statement = $connect->prepare("SELECT * FROM user WHERE email = :email AND password = :password AND active = 1 ");
    $statement->execute(array(
        ':email' => $email,
        ':password' => $password
    ));
    $result_login = $statement->fetch();

    if ($result_login !== false) {
        $_SESSION['role'] = $result_login['role'];
        $_SESSION['email'] = $email;
        $_SESSION['first_name'] = $result_login['first_name'];
        echo 'success';
        return;
    } else {

        echo 'Invalid Credentials';

        return;
    }
}

require '../shared/header.php';
?>

<div class="md:p-5 md:px-36    rounded-xl md:pt-14 p-2 ">
    <?php require './views/login.view.php'; ?>
</div>

<?php require '../shared/footer.php'; ?>