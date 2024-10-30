<?php
    $servername = 'localhost';
    $username = 'root'; 
    $password = ''; 
    $db = 'qlfilm';
    
    // Tạo kết nối đến MySQL
    $conn = new mysqli($servername, $username, $password, $db);

    // Thiết lập charset sau khi kết nối thành công
    if ($conn->connect_error) {
        die('Kết nối đến MySQL thất bại: ' . $conn->connect_error);
    }
    
    mysqli_set_charset($conn, 'UTF8'); // Thiết lập charset UTF-8
    
    // Tiếp tục viết mã PHP của bạn sau đây
?>
