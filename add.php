<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Phim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style>
    body {
        padding-top: 50px;
    }
    table {
        text-align: center;
    }
    tr.item {
        border-top: 1px solid #5e5e5e;
        border-bottom: 1px solid #5e5e5e;
    }
    tr.item:hover {
        background-color: #d9edf7;
    }
    tr.item td {
        min-width: 150px;
    }
    tr.header {
        font-weight: bold;
    }
    a {
        text-decoration: none;
    }
    a:hover {
        color: deeppink;
        font-weight: bold;
    }
</style>

<div class="container" style="width: 600px">
    <h2>Thêm Phim</h2>
    <form action="addphim.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Tên phim:</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên phim" name="name" required>
        </div>
        <div class="form-group">
            <label for="type">Thể loại: </label>
            <select class="form-control" id="type" name="type" required>
                <option value=""></option>
                <option value="1">Phim hành động</option>
                <option value="2">Phim hài</option>
                <option value="3">Phim kinh dị</option>
                <option value="4">Phim tình cảm</option>
                <option value="5">Phim hoạt hình</option>
            </select>
        </div>
        <div class="form-group">
            <label for="country">Quốc gia: </label>
            <select class="form-control" id="country" name="country" required>
                <option value=""></option>
                <option value="1">Việt Nam</option>
                <option value="2">Mỹ</option>
                <option value="3">Trung Quốc</option>
                <option value="4">Nhật Bản</option>
                <option value="5">Hàn Quốc</option>
                <option value="6">Hồng Kông</option>
            </select>
        </div>
        <div class="form-group">
            <label for="directors">Đạo diễn:</label>
            <input type="text" class="form-control" id="directors" placeholder="Nhập tên đạo diễn" name="directors" required>
        </div>
        <div class="form-group">
            <label for="actor">Diễn viên:</label>
            <input type="text" class="form-control" id="actor" placeholder="Nhập tên diễn viên" name="actor" required>
        </div>
        <div class="form-group">
            <label for="time">Thời lượng:</label>
            <input type="text" class="form-control" maxlength="6" id="time" placeholder="Nhập thời lượng (vd 2h30p = 23000)" name="time" required>
        </div>
        <div class="form-group">
            <label for="rate">Số rating:</label>
            <input type="text" class="form-control" maxlength="1" id="rate" placeholder="Nhập số rating tối đa là 5" name="rate" required>
        </div>
        <div class="form-group">
            <label for="year">Năm sản xuất:</label>
            <input type="text" class="form-control" maxlength="4" id="year" placeholder="Nhập năm" name="year" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea class="form-control" id="description" placeholder="Nhập mô tả" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="link">Link phim:</label>
            <input type="text" class="form-control" id="link" placeholder="Nhập link phim" name="link" required>
        </div>
        <div class="form-group">
            <label for="trailer">ID link trailer:</label>
            <input type="text" class="form-control" id="trailer" value="https://www.youtube.com/embed/" name="trailer" required>
        </div>
        <div class="form-group">
            <label for="fileUpload">Hình:</label>
            <input type="file" class="form-control" id="fileUpload" name="fileUpload" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Thêm</button>
    </form>
    <br>
    <a href="logout.php"><button type="button" class="btn btn-primary btn-lg btn-block">Đăng xuất</button></a>
</div>
</body>
</html>
