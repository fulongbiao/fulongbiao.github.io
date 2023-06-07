<?php
include('conn.php');
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
	if (mysqli_num_rows($result) == 1) {
		header('Location: content.php');
	} else {
		echo '<script>alert("用户名或密码错误")</script>';
		header('Location: index.php');
	}
	mysqli_close($conn);
}
