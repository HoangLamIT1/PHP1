<?php
    require_once 'config.php';
    $_SERVER['SERVER_NAME'];
    $autoload['helper'] = array('url');
    if(isset($_POST['submit']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $age = $_POST['age'];
        $numid = $_POST['numid'];
    }
    $sql = "INSERT INTO `user`(`id`, `user`, `pass`, `age`, `idcard`) VALUES (NULL  ,'$user',md5('$pass'),'$age','$numid')";
    $add = mysqli_query($ketnoi, $sql);
    if($add){
        echo "Lưu dữ liệu vừa đăng ký vào DataBase thành công\n";
    }
    else
    {
        echo "Không thể tạo tài khoản, vui lòng liên hệ bộ phận kĩ thuật !\n";
    }
?>
<a href = "index.php"><br>Quay lại trang đăng nhập</a>