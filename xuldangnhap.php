<?php
		
	session_start();
											
		if (isset($_POST['email']) && isset($_POST['password'])) {
		require_once("conn.php");
															
		$username = $_POST['email'];
															
		$sql = "SELECT * FROM user WHERE USERNAME = '$username'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
															
		if ($_POST['password'] == $row['PASSWORD']) {
		$_SESSION['isLoggedIn'] = true;
		echo '<script language="javascript">alert("Đăng nhập thành công"); window.location="index.php";</script>';
		} else {
		echo '<script language="javascript">alert("Sai tên đăng nhập hoặc mật khẩu"); window.location="index.php";</script>';
		}
		}
?>