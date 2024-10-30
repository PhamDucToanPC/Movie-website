<?php
    // Include file kết nối đến cơ sở dữ liệu
    require_once('conn.php');

    // Kiểm tra xem có tồn tại id được gửi qua GET không
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Sử dụng prepared statement để xóa bình luận
        $sql = "DELETE FROM binhluan WHERE IDCOMMENT=?";
        $stmt = mysqli_prepare($conn, $sql);

        // Kiểm tra và thực thi câu lệnh prepared statement
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $id); // sử dụng "i" cho integer
            mysqli_stmt_execute($stmt);
            
            // Đóng prepared statement
            mysqli_stmt_close($stmt);
        } else {
            die('Câu lệnh SQL không hợp lệ: ' . mysqli_error($conn));
        }

        // Đóng kết nối đến cơ sở dữ liệu
        mysqli_close($conn);

        // Sau khi xóa, chuyển hướng về trang quản lí comment
        header("Location: quanlicomment.php");
        exit();
    } else {
        die('Không có ID bình luận được cung cấp.');
    }
?>
