<?php
require "core.php";
$page_title = "Login";
if (isset($_SESSION['verified'])) {
    header('Location: ./dashboard');
}

$message=  "";
$connect = connect($database);

    $id = $_GET['id'];
    try {
        $connect;
    } catch (PDOException $e) {

        echo "Error: ." . $e->getMessage();

        return;
    }
    $statement = $connect->prepare("SELECT * FROM students WHERE id = :id ");
    $statement->execute(array(
        ':id' => $id,
    ));
    $result_login = $statement->fetch();
   
    if ($result_login == false || $result_login['active'] == 1) {
          header("Location: ./register");
          exit();
    }
    $id = $result_login['id'];
    $email = $result_login['email'];
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if($id != null) {


           if(isset($_POST['token']) && ($_POST['token'] !== '')) {
                $token = $_POST['token'];

                $statement = $connect->prepare("SELECT * FROM verify_token WHERE student_id = :id  AND token = :token");
                $statement->execute(array(
                    ':id' => $id,
                    ':token' => $token,
                ));
                $verify = $statement->fetch();
                if ($verify != false) {


                    $sql = "UPDATE students SET active = 1 WHERE id = :id ";
                    $stmt = $connect->prepare($sql);
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                    $sql = "DELETE FROM verify_token WHERE student_id = :id";
                    $stmt = $connect->prepare($sql);
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                    $message = "Email verified successfully!";



                }else {
                      $message = "You entered an invalid code";
                }
               
                
            }else {
                $message = "Enter the  code we sent to your email";
            }
            
            
        }   
    }

$page_title = "Verify Email Address";
require './shared/header.php';
?>
<div class="md:p-5 md:px-36    rounded-xl md:pt-14 p-2 ">
    <?php require './views/verify.view.php'; ?>
</div>

<?php require './shared/footer.php'; ?>