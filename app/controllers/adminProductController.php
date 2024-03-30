<?php
    namespace Tranquynh\Handsome\controllers;
    use Tranquynh\Handsome\models\Product;

    class AdminProductController{
        function listLoginAdmin(){
            $loginAdmin = new Product();
            $listLoginAdmin = $loginAdmin -> getAllLoginAdmin();
            require_once 'app/views/loginAdmin/userLoginAdmin.php';
        }


        function loginAdminView(){
            
            require_once "app/views/loginAdmin/userLoginAdmin.php";
        }

        function loginAdmin()
        {
            if (isset($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = new Product();
                $users = $user->checkLoginAdmin($email, $password);

                if ($users !== false && is_array($users) && count($users) > 0) {
                    $_SESSION['s_user'] = $users;
                    header("Location: addCategory");
                    exit();
                } else {
                    // echo "<p style='color:red'>Tài khoản không tồn tại</p>";
                }
            }
            include_once "app/views/loginAdmin/userLoginAdmin.php";
        }

    }
?>