<?php 
    // require_once 'db.php';
    namespace Tranquynh\Handsome\models;
    use Tranquynh\Handsome\models\DB;

    class Product extends DB{
        // function getAllProduct(){
        //     $sql = "select * from product";
        //     return $this->getData($sql);
        // }

        // Category
        function addCategory($name){
            $sql="INSERT INTO category(category_name) VALUES('$name')";
            return $this->getData($sql);
        }

        function listCategory(){
            $sql = "SELECT * FROM category";
            return $this->getData($sql);
        }

        function loadone_category($id){
            $sql="SELECT * FROM category WHERE id='$id' ";
            return $this -> getData($sql,false);
        }

        function updateCategory($id, $name){
            $sql ="UPDATE category SET category_name='{$name}' WHERE id='$id'";
            return $this -> getData($sql,false);
        }

        function deleteCategory($id){
            $sql = "DELETE FROM category WHERE id='$id'";
            return $this->getData($sql,false);
        }

        // Product
        function addProduct($name, $price, $image, $id_category){
            $sql = "INSERT INTO product(id, name, price, image, id_category) VALUES('null', '$name','$price','$image','$id_category'); ";
            return $this->getData($sql);
        }

        function listProduct(){
            $sql = "SELECT pr.id, pr.name, pr.price, pr.image, ct.category_name FROM product AS pr INNER JOIN category AS ct ON ct.id = pr.id_category;";
            return $this->getData($sql);
        }

        function loadone_product($idPd){
            $sql = "SELECT pr.id, pr.name, pr.price, pr.image, ct.category_name FROM product AS pr INNER JOIN category AS ct ON ct.id = pr.id_category WHERE pr.id = '{$idPd}';";
            return $this->getData($sql,false);
        }

        function updateProduct($idPd, $name, $price, $image, $id_category) {
            $sql = "UPDATE product SET name='{$name}', price='{$price}', image='{$image}', id_category='{$id_category}' WHERE id='{$idPd}'";
            return $this-> getData($sql, false);
        }

        function deleteProduct($idPd){
            $sql ="DELETE FROM product WHERE id='{$idPd}'";
            return $this ->getData($sql,false);
        }

        // Client

        function loadallProduct_home(){
            $sql = "SELECT * FROM product WHERE 1 ORDER BY id DESC LIMIT 0,9";
            return $this->getData($sql);
        }

        // Login
        function getAllLogin() {
            $sql = "SELECT * FROM login";
            return $this->getData($sql);
        }
        function getById($id) {
            $sql = "SELECT * FROM login WHERE id = '$id'";
            return $this->getData($sql, false);
        }
    
        function insertLogin($name, $email, $password) {
            $sql = "INSERT INTO login(id, name, email, password) VALUES (null, '$name', '$email', '$password')";
            return $this->getData($sql);
        }
    
        function checkLogin($email, $password) {
            $sql = "SELECT * FROM login WHERE email = '$email' and password = '$password'";
            return $this->getData($sql);
        }
    
        function update($id, $name, $email, $password) {
            $sql = "UPDATE login SET name = '$name', email = '$email', password = '$password' WHERE id = '$id' ";
            // echo var_dump($sql);
            return $this->getData($sql,false);
        }
        
        function delete($id){
            $sql = "DELETE FROM login WHERE id = '$id' ";
            return $this->getData($sql);
        }
        // Login Admin



        function checkLoginAdmin($email, $password){
            $sql = "SELECT * FROM loginAdmin WHERE email = '$email' and password = '$password'";
            return $this->getData($sql);
        }

        function getAllLoginAdmin(){
            $sql = "SELECT * FROM loginAdmin";
            return $this->getData($sql);
        }


    }
    

?>