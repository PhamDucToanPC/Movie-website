<?php
	header('Content-Type: text/html; charset=utf-8');
	
	$servername = 'localhost';
	$username_db = 'root'; // Thay thế bằng username của bạn
	$password_db = '0'; // Thay thế bằng password của bạn
	$db = 'qlfilm';
	
	// Kết nối đến cơ sở dữ liệu
	$conn = new mysqli($servername, $username_db, $password_db, $db);
	mysqli_set_charset($conn, 'UTF8');
	
	if ($conn->connect_error) {
		die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
	}
	
	if (isset($_POST["register"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$password2 = $_POST["confirm_password"]; // Đã sửa lại thành "confirm_password"
		
		// Kiểm tra xem tên người dùng hoặc email đã tồn tại trong cơ sở dữ liệu
		$sql_check = "SELECT * FROM user WHERE TENUSER = ? OR USERNAME = ?";
		$stmt_check = $conn->prepare($sql_check);
		$stmt_check->bind_param("ss", $name, $email);
		$stmt_check->execute();
		$result_check = $stmt_check->get_result();
		
		if ($result_check->num_rows > 0) {
			echo '<script>alert("Tên người dùng hoặc Email đã tồn tại trong hệ thống."); window.location="index.php";</script>';
			exit();
		}
		
		// Kiểm tra xác nhận mật khẩu
		if ($password != $password2) {
			echo '<script>alert("Xác nhận mật khẩu không khớp."); window.location="index.php";</script>';
			exit();
		}
		
		// Băm mật khẩu trước khi lưu vào cơ sở dữ liệu
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		
		// Thực hiện thêm người dùng vào cơ sở dữ liệu
		$sql_insert = "INSERT INTO user(TENUSER, USERNAME, PASSWORD) VALUES (?, ?, ?)";
		$stmt_insert = $conn->prepare($sql_insert);
		$stmt_insert->bind_param("sss", $name, $email, $hashed_password);
		
		if ($stmt_insert->execute()) {
			echo '<script>alert("Đăng ký thành công."); window.location="index.php";</script>';
		} else {
			echo '<script>alert("Đã xảy ra lỗi. Vui lòng thử lại sau."); window.location="index.php";</script>';
		}
		
		// Đóng các statement và kết nối
		$stmt_check->close();
		$stmt_insert->close();
		$conn->close();
	}
?>
