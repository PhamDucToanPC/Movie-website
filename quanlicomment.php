<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true)
{
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>

<style>
    body{
        padding-top: 50px;
    }
    table{

        text-align: center;
    }
    td{
        padding: 10px;
    }
    tr.item{
        border-top: 1px solid #5e5e5e;
        border-bottom: 1px solid #5e5e5e;
    }

    tr.item:hover{
        background-color: #d9edf7;
    }

    tr.item td{
        min-width: 150px;
    }

    tr.header{
        font-weight: bold;
    }

    a{
        text-decoration: none;
    }
    a:hover{
        color: deeppink;
        font-weight: bold;
    }
</style>


<script>
    $(document).ready(function () {


        $(".delete").click(function () {
			id = $(this).attr("id");
			$("#delete").attr("href", "delete.php?id="+id);
            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false
            });

        });


    });
</script>

		<center><h1><a href="#">Bình Luận</a></h1></center>
<table cellpadding="10" cellspacing="10" border="0" style="border-collapse: collapse; margin: auto">
		
		<ul class="nav nav-pills">
		  <li class="nav-item">
			<a class="nav-link active" href="add.php">Thêm phim</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="index.php">Trang chủ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="quanliphim.php">Tất cả</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Thể loại</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="quanliquocgia.php">Quốc gia</a>
		  </li>
		   <li class="nav-item">
			<a class="nav-link" href="quanliuser.php">User</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="quanlicomment.php">Bình Luận</a>
		  </li>
		</ul>
    <tr class="header">
        <td>Tên user comment</td>
        <td>Tên Phim</td>
		<td>Nội Dung</td>
		<td>Thời Gian</td>
		
		
    </tr>
	<?php 
	require_once('conn.php');
	$sql = "SELECT user.TENUSER, film.TENFILM, binhluan.NOIDUNG,binhluan.TIME, user.IDUSER, binhluan.IDCOMMENT
			FROM user
			INNER JOIN binhluan ON user.IDUSER= binhluan.NAME
			INNER JOIN film ON film.IDFILM= binhluan.PHIMCOMMENT";
			
		  
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
	?>
    <tr class="item">
        <td><?= $row['TENUSER'] ?></td>
		<td><?= $row['TENFILM'] ?></td>
		<td><?= $row['NOIDUNG'] ?></td>
		<td><?= $row['TIME'] ?></td>
		
		
        <td> <a href="deletecomment.php?id=<?= $row['IDCOMMENT']?>" class="delete">Delete</a></td>
    </tr>
	<?php }
	}?>
    
	
</table>
<br>
	<a href="logout.php"<button  type="button" class="btn btn-primary btn-lg btn-block">Đăng xuất </a></button>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>