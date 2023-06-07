<?php
include('conn.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];
    if (!preg_match('/^[a-zA-Z0-9_-]{4,16}$/', $username)) {
        echo '<script>alert("用户名格式:4到16位字母,数字,下划线,减号");</script>';
    } elseif (!preg_match('/^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/', $password)) {
        echo '<script>alert("密码格式:最少6位,包括至少1个大写字母,1个小写字母,1个数字,1个特殊字符");</script>';
    } elseif ($password != $ConfirmPassword) {
        echo '<script>alert("两次输入的密码不一致!");</script>';
    } else {
        $sql = "INSERT INTO users(username,password,email,qq,idcard,phone) VALUES('$username','$password','','','','');";
        mysqli_query($conn, $sql);
        echo '<script>alert("恭喜你注册成功!");</script>';
        header('Location: index.php');
    }
}
