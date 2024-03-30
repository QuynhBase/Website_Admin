<?php
    namespace Tranquynh\Handsome\controllers;
    use Tranquynh\Handsome\models\Product;
    // session_start();
    class LoginProductController{
        function listLogin(){
            $login = new Product();
            $listLogin = $login -> getAllLogin();
            require_once "app/views/login/userLogin.php";
        }

        function validate($name, $email, $password) {
            $error = [];
    
            // validate name
            if(empty(trim($name))) {
                $error['name']['required'] = "Tên tài khoản không được để trống";
            } else {
                if(strlen(trim($name)) < 3 ) {
                    $error['name']['lenght'] = "Tên tài khoản phải từ 3 ký tự";
                }
            }
    
            // validate password
            if(empty(trim($password))) {
                $error['password']['required'] = "Password không được để trống";
            } else {
                if(strlen(trim($password)) < 3 ) {
                    $error['password']['lenght'] = "Password phải từ 3 ký tự";
                }
            }
    
            // validate email
            if (empty(trim($email))) {
                $error['email']['required'] = "Email không được để trống";
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error['email']['invalid'] = "Email không hợp lệ";
                }
            }
    
            return $error;
    
        }

        function addView() {
            require_once "app/views/login/userRegistration.php";
        }

        function addUser()
        {
            $add = new Product();
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $check = $add->insertLogin($name, $email, $password);
            if (!$check) {
                echo "<script>Thêm tài khoản thành công</script>";
            }
            require_once "app/views/login/userLogin.php";
        }

        function Login(){
            if (isset($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
    
                $user = new Product();
                $users = $user->checkLogin($email, $password);
    
                if ($users !== false && is_array($users) && count($users) > 0) {
                    $_SESSION['s_user'] = $users;
                    header("Location: loadHome");
                    exit();
                } else {
                    // echo "<p style='color:red'>Tài khoản không tồn tại</p>";
                }
                
            }
            require_once "app/views/login/userLogin.php";
        }






    }


?>