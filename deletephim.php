<?php
// Include file kết nối đến cơ sở dữ liệu
require_once('conn.php');

// Kiểm tra xem có tồn tại id được gửi qua GET không và là một số nguyên dương
if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
    $id = $_GET['id'];

    // Sử dụng prepared statement để xóa bộ phim
    $sql = "DELETE FROM film WHERE IDFILM=?";
    $stmt = mysqli_prepare($conn, $sql);

    // Kiểm tra và thực thi câu lệnh prepared statement
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id); // sử dụng "i" cho integer
        mysqli_stmt_execute($stmt);
        
        // Kiểm tra số hàng ảnh hưởng để xác nhận xóa thành công
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // Đóng prepared statement
            mysqli_stmt_close($stmt);
            
            // Đóng kết nối đến cơ sở dữ liệu
            mysqli_close($conn);

            // Sau khi xóa, chuyển hướng về trang quản lí phim
            header("Location: quanliphim.php");
            exit();
        } else {
            die('Không tìm thấy bộ phim để xóa.');
        }
    } else {
        die('Câu lệnh SQL không hợp lệ: ' . mysqli_error($conn));
    }
} else {
    die('ID phim không hợp lệ.');
}
?>
