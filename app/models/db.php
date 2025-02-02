<?php 

    namespace Tranquynh\Handsome\models;
    use PDO;
    require_once 'env.php';

    class DB{
// hàm kết nối
function getConnect(){
    $connect = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME.
    ";charset=".DBCHARSET,DBUSER,DBPASS);
    return $connect;
}

// hàm lấy dữ liệu
function getData($query, $getAll = true){
    $conn = $this->getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}
    }
    
?>