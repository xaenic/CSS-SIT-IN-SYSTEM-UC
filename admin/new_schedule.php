<?php
$page_title = "New Schedule";
$parent = ['schedules', 'Schedules'];
require "core.php";
require '../shared/header.php';
if (!isset($_SESSION['email']))
    header('Location: /admin/login');
if (!isset($_SESSION['role']))
    header('Location: /');

$error = '';
$day = '';
$start_time = '';
$end_time = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['start_time'] == '')
        $error .= "Start time is Required<br>";
    if ($_POST['end_time'] == '')
        $error .= "End time is Required<br>";
    if ($_POST['days'] == '')
        $error .= "Day is Required<br>";
    $connect = connect($database);

    try {
        $connect;
    } catch (PDOException $e) {

        $error .= $e->getMessage();
    }
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $day = $_POST['days'];
    if ($error == '') {
        foreach ($_POST['days'] as $day) {
            $statement = $connect->prepare("SELECT * FROM schedules WHERE day = :day AND start_time = :start_time AND end_time = :end_time");
            $statement->execute(array(
                ':day' => $day,
                ':start_time' => $start_time,
                ':end_time' => $end_time
            ));
            $result_login = $statement->fetch();
            if ($result_login !== false) {
                $error = 'Schedule ' . $day . ' ' . $start_time . ' - ' . $end_time . 'Exists<br>';
            } else {
                $statment = $connect->prepare(
                    "INSERT INTO schedules (id,day,start_time,end_time) VALUES (null, :day, :start_time, :end_time)"
                );
                $statment->execute(array(
                    ':day' => $day,
                    ':start_time' => $start_time,
                    ':end_time' => $end_time,
                ));
                $_SESSION['message'] = 'Schedule ' . $start_time . ' has been added.';
            }
        }
        header('Location: ./schedules');
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
            <?php require './views/new_schedule.view.php'; ?>
        </div>
    </main>
</div>

<?php require '../shared/footer.php'; ?>