<?php 
    // require_once 'models/product.php';
    namespace Tranquynh\Handsome\controllers;
    use Tranquynh\Handsome\models\Product;

    class ProductController{
        // function listProduct(){
        //     $pro = new Product();
        //     $product = $pro->getAllProduct();
        //     //var_dump($product);
        //     require_once 'app/views/product/list.php';
        // }

        // Category

        function addView(){
            require_once 'app/views/category/add.php';
        }

        function addCategory(){
            $add = new Product();
            $name = $_POST['categoryname'];
            $addCategory = $add->addCategory($name);
            require_once 'app/views/category/add.php';
        }

        function listCategory(){
            $list = new Product();
            $listCategory = $list->listCategory();
            require_once 'app/views/category/list.php';
        }

        function getOne(){
            $id = $_GET['id'];
            $update = new Product();
            $getOne = $update -> loadone_category($id);
            require_once 'app/views/category/update.php';
        }

        function updateCategory(){
            $id = isset($_GET['id']) ? $_GET['id']:NULL;
            $update = new Product();
            $getOne = $update -> loadone_category($id);
            $name = $_POST['categoryname'];
            $upOne = new Product();
            $check =$updateCategory = $upOne -> updateCategory($id, $name);
            $list = new Product();
            $listCategory = $list->listCategory();
            require_once 'app/views/category/list.php';
        }

        function deleteCategory(){
            $id = isset($_GET['id']) ? $_GET['id']:NULL;
            $delete = new Product();
            $deleteCategory = $delete -> deleteCategory($id);
            $list = new Product();
            $listCategory = $list->listCategory();
            require_once 'app/views/category/list.php';
        }

        // Product

        function addviews(){
            $list = new Product();
            $listCategory = $list->listCategory();
            require_once 'app/views/product/add.php';
        }

        function addProduct()
        {
            // Xác định Rules
            // $name(tên sản phẩm): không bỏ trống, lớn hơn 5 ký tự
            // $price(giá tiền): bắt buộc phải là số, phải nhập, là số nguyên dương
            // $image(ảnh sản phẩm): phải là ảnh định dạng (jpg, png,...), không nặng hơn 5mb.
            // $id_category(danh mục sản phẩm): buộc nhập

            // Khai báo mảng $error chứa lỗi trả về 
            $error = [];
            $name = $_POST['name'];
            // Validate sản phẩm $name 
            if (empty(trim($name))) {
                $error['name']['required'] = 'Không được bỏ trống tên sản phẩm';
            } else {
                if (strlen(trim($name)) < 5) {
                    $error['name']['length'] = 'Tên sản phẩm phải có ít nhất 5 ký tự';
                }
            }
            $price = $_POST['price'];
            // Validate giá tiền $price
            if (empty($price)) {
                $error['price']['required'] = 'Không được bỏ trống giá tiền';
            } else {
                if (!is_numeric($price) || $price <= 0 || floor($price) != $price) {
                    $error['price']['invalid'] = 'Giá tiền phải là số nguyên dương';
                }
            }
            $image = $_FILES['image'];
            // Validate ảnh sản phẩm $image
            if (empty($image['name'])) {
                $error['image']['required'] = 'Không được bỏ trống ảnh sản phẩm';
            } else {
                $allowedFormats = ['jpg', 'jpeg', 'png']; // Thêm các định dạng ảnh hỗ trợ
                $maxFileSize = 5 * 1024 * 1024; // 5MB

                $imageInfo = getimagesize($image['tmp_name']);

                if (!$imageInfo || !in_array(strtolower(pathinfo($image['name'], PATHINFO_EXTENSION)), $allowedFormats)) {
                    $error['image']['format'] = 'Ảnh sản phẩm phải là định dạng (jpg, jpeg, png)';
                } elseif ($image['size'] > $maxFileSize) {
                    $error['image']['size'] = 'Ảnh sản phẩm không được nặng hơn 5MB';
                }
            }
            $id_category = $_POST['id_category'];
            // Validate danh mục sản phẩm $id_category
            if (empty($id_category)) {
                $error['id_category']['required'] = 'Không được bỏ trống danh mục sản phẩm';
            }

            // Kiểm tra nếu có lỗi
            if (!empty($error)) {
                // Xử lý lỗi theo ý bạn, có thể trả về mảng $error để hiển thị thông báo lỗi cho người dùng
                $_SESSION['error_messages'] = $error;
                
            } else {
                // Nếu không có lỗi, tiến hành upload ảnh và thêm sản phẩm
                $targetDir = "app/public/image/";
                $targetFile = $targetDir . $image['name'];

                if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                    $image_url = $targetFile;

                    // Gọi hàm insertProduct để thêm sản phẩm vào cơ sở dữ liệu
                    $addPd = new Product();
                    $addProduct = $addPd -> addProduct($name, $price, $image_url, $id_category);

                    if (!$addProduct) {
                        echo '<script>alert("Thêm sản phẩm thành công");</script>';
                    } else {
                        echo '<script>alert("Lỗi khi thêm sản phẩm vào cơ sở dữ liệu");</script>';
                    }
                } else {
                    echo '<script>alert("Lỗi khi upload ảnh sản phẩm");</script>';
                }
            }
            require_once 'app/views/product/add.php';
        }

        function listProduct(){
            $listPd = new Product();
            $listProduct = $listPd -> listProduct();
            $list = new Product();
            $listCategory = $list->listCategory();
            require_once 'app/views/product/list.php';
        }

        function getOnePd(){
            $idPd = $_GET['id'];
            $list = new Product();
            $listCategory = $list->listCategory();
            $updatePd = new Product();
            $getOnePd = $updatePd -> loadone_product($idPd);
            require_once 'app/views/product/update.php';
        }

        function updateProduct(){
            $idPd = isset($_GET['id']) ? $_GET['id']:NULL;
            $updatePd = new Product();
            $getOnePd = $updatePd -> loadone_product($idPd);
            $name = $_POST['name'];
            $price = $_POST['price'];
            // nếu cập nhật ảnh mới thì chạy phần này
            $image=$_FILES['image'];
            if ($image['size'] != 0) {
                // thư mục sẽ được lưu ảnh vào thư mục image
                $targetDir = "app/public/image/";
                //Đường dẫn đến file được lưu
                $targetFile = $targetDir . $image['name'];
                // Tiến hành upload file ảnh
                if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                    $image_url = $targetFile;
                }
            } else {
                $image_url = $getOnePd['image'];
            }
            $id_category=$_POST['id_category'];

            $upOnePd = new Product();
            $updateProduct =$upOnePd ->updateProduct($idPd, $name, $price, $image_url, $id_category);

            if (!$updateProduct) {
                echo '<script>alert("Cap nhat sản phẩm thành công")</script>';
                // echo '<script>window.location.href = "index.php";</script>';
            } else {
                echo '<script>alert("Cap nhat sản phẩm that bai")</script>';
                // echo '<script>window.location.href = "index.php";</script>';
            }
            $listPd = new Product();
            $listProduct = $listPd -> listProduct();
            require_once 'app/views/product/list.php';
        }

        function deleteProduct(){
            $idPd = isset($_GET['id']) ? $_GET['id']:NULL;
            $deletePd = new Product();
            $deleteProduct = $deletePd->deleteProduct($idPd);
            $listPd = new Product();
            $listProduct = $listPd -> listProduct();
            require_once 'app/views/product/list.php';
        }




    
    }

   
?>