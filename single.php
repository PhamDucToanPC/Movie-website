<!DOCTYPE html>
<html>
<head>
<title> NETFLIX</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pop-up -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<script src="cookies.js"></script>
</style>
</head>
<body>
<!--/main-header-->
  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile part2">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span>P</span>him<span>H</span>ay<span>C</span>ực</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể Loại<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="theloai.php">Phim hài</a></li>	
											<li><a href="theloai.php">Phim tình cảm</a></li>											
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="theloai.php">Phim kinh dị</a></li>
											<li><a href="theloai.php">Phim hài</a></li>					
											
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="theloai.php">Phim hành động</a></li>
										</ul>
									</div>
									
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quốc gia <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="theloai.php">Việt Nam</a></li>										
												<li><a href="theloai.php">Mỹ</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="theloai.php">Trung Quốc</a></li>
												<li><a href="theloai.php">Nhật Bản</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="theloai.php">Hàn Quốc</a></li>
												<li><a href="theloai.php">Hồng Kông</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="listlove.php"  >Phim yêu thích <span class="badge badge-light" id="count">0</span></a></li> 
						</ul>

					</div>
					<div class="clearfix"> </div>	
				</nav>
					<div class="w3ls_search">
									<div class="cd-main-header">
										<ul class="cd-header-buttons">
											<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
										</ul> <!-- cd-header-buttons -->
									</div>
									<div id="cd-search" class="cd-search">
										<form action="list.php" method="get">
											<input name="search" type="search" placeholder="Nhập để tìm phim...">
										</form>
									</div>
								</div>
	
			</div> 

			   </div>
		<!--//header-w3l-->
		</div>
    </div>
<?php
	require_once('conn.php');
	$id = $_GET['id'];	
	$sql = "SELECT film.`IDFILM`,film.`TENFILM`,film.`HINH`,film.`DIENVIEN`,film.`THONGTIN`,film.`THOILUONG`,film.`NAMSX`,film.`SORATING`,film.`DAODIEN`,film.`LINKFILM`,film.`LINKTRAILER`,theloai.IDTHELOAI,theloai.TENTHELOAI,quocgia.IDQUOCGIA,quocgia.TENQUOCGIA
		FROM film 
		INNER JOIN theloai ON film.THELOAI = theloai.IDTHELOAI
		INNER JOIN quocgia ON film.QUOCGIA = quocgia.IDQUOCGIA
		WHERE IDFILM=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
?>	
  <!--/banner-section-->
 <!--//main-header-->
	         <!--/banner-bottom-->
			  <div class="w3_agilits_banner_bootm">
			     <div class="w3_agilits_inner_bottom">
			            <div class="col-md-6 wthree_agile_login">
						     <ul>
									<li><i class="fa fa-phone" aria-hidden="true"></i> (+84) 93081299</li>
									<li><a href="#" class="login"  data-toggle="modal" data-target="#myModal4">Đăng nhập</a></li>
									<li><a href="#" class="login reg"  data-toggle="modal" data-target="#myModal5">Đăng ký</a></li>						 
								</ul>
						</div>
						 
				</div>
			</div>
			<!--//banner-bottom-->
		     <!-- Modal1 -->
					<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Login</h4>
										<div class="login-form">
											<form action="#" method="post">
												<input type="email" name="email" placeholder="E-mail" required="">
												<input type="password" name="password" placeholder="Password" required="">
												<div class="tp">
													<input type="submit" value="LOGIN NOW">
												</div>
												
												
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- //Modal1 -->
				  <!-- Modal1 -->
					<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >

							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Register</h4>
										<div class="login-form">
											<form action="#" method="post">
											    <input type="text" name="name" placeholder="Name" required="">
												<input type="email" name="email" placeholder="E-mail" required="">
												<input type="password" name="password" placeholder="Password" required="">
												<input type="password" name="conform password" placeholder="Confirm Password" required="">										
												<div class="tp">
													<input type="submit" value="REGISTER NOW">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				<!-- //Modal1 -->
						<!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php">Trang Chủ</a><i>//</i></li>
				
				<li><?= $row['TENFILM'] ?></li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->

				<div class="w3_content_agilleinfo_inner">
						<div class="agile_featured_movies">
				            		
									<div class="inner-agile-w3l-part-head">
										<h3 class="w3l-inner-h-title"><?= $row['TENFILM'] ?></h3>
										<br>
										<input title = "Yêu Thích Phim" id="<?= $row['IDFILM'] ?>" class= "add-to-cart" type="image" src="love.png" alt="Submit" width="48" height="48">		
									</div>
									
							   <div class="latest-news-agile-info">
								   <div class="col-md-8 latest-news-agile-left-content">
											<div class="single video_agile_player">
										            <div class="video-grid-single-page-agileits">
													<video width="900" height= "400" class="img-responsive" controls>
														  <source src="<?= $row['LINKFILM'] ?>" type="video/mp4">
														</video>
	
													</div>
													 <h4><?= $row['TENFILM'] ?></h4>
													 
										    </div>
											
								
										
											<div class="single-agile-shar-buttons">
											    <h5 >Share:</h5>
													<ul>
														<li>
															<div class="fb-like" data-href="https://www.facebook.com" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
															<script>(function(d, s, id) {
															  var js, fjs = d.getElementsByTagName(s)[0];
															  if (d.getElementById(id)) return;
															  js = d.createElement(s); js.id = id;
															  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
															  fjs.parentNode.insertBefore(js, fjs);
															}(document, 'script', 'facebook-jssdk'));</script>
														</li>
														<li>
															<div class="fb-share-button" data-href="https://www.facebook.com" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
														</li>
														
														<li>
															<!-- Place this tag where you want the +1 button to render. -->
															<div class="g-plusone" data-size="medium"></div>

															<!-- Place this tag after the last +1 button tag. -->
															<script type="text/javascript">
															  (function() {
																var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
																po.src = 'https://apis.google.com/js/platform.js';
																var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
															  })();
															</script>
														</li>
													</ul>
											</div>
										<div class="admin-text">
												<h5>NỘI DUNG PHIM</h5>
												<div class="admin-text-right">
													<p><?= $row['THONGTIN'] ?></p>	
												</div>
												<div class="clearfix"> </div>
										</div>
										<div class="response">
										<?php }
								}?>	
							<h4>Bình luận</h4>
									<?php
										require_once('conn.php');	
										$sql = "SELECT user.TENUSER, film.TENFILM, binhluan.NOIDUNG,binhluan.TIME, user.IDUSER
											FROM user
											INNER JOIN binhluan ON user.IDUSER= binhluan.NAME
											INNER JOIN film ON film.IDFILM= binhluan.PHIMCOMMENT
											WHERE IDFILM=$id";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
									?>					
										<div class="media response-info">
											<div class="media-left response-text-left">
												<div>
													<img class="media-object" src="images/admin.jpg" alt="">
												</div>
												<h5><?= $row['TENUSER'] ?></h5>
											</div>
											<div class="media-body response-text-right">
												<p><?= $row['NOIDUNG'] ?></p>
												<ul>
													<li><?= $row['TIME'] ?></li>	
												</ul>		
											</div>
											<div class="clearfix"> </div>
										</div>
										
										<?php }
											}?>		
							
							
									</div>
											<div class="all-comments-info">
												 <h5>Bình Luận</h5>
												 <p>Vui lòng đăng nhập tài khoản để có thể bình luận...</p>
												<div class="agile-info-wthree-box">
											
													<form action = "comment.php?id= " method = "post">
													   <div class="col-md-6 form-info">
														<input type="text" name="name" placeholder="Tên của bạn" required="">			           					   
														<input type="email" name="email" placeholder="Email của bạn" required="">
														<input type="password" name="password" placeholder="  Mật khẩu của bạn" required="">	
													  </div>
													   <div class="col-md-6 form-info">
														
														<textarea placeholder="Viết bình luận..." name = "comment" required=""></textarea>
														<input type="submit" value="Gửi">
													 </div>
													 <div class="clearfix"> </div>
												
														
													</form>
												</div>
											</div>
								   </div>
								   
									<?php
									require_once('conn.php');
									$id = $_GET['id'];	
									$sql = "SELECT film.`IDFILM`,film.`TENFILM`,film.`HINH`,film.`DIENVIEN`,film.`THONGTIN`,film.`THOILUONG`,film.`NAMSX`,film.`SORATING`,film.`DAODIEN`,film.`LINKFILM`,film.`LINKTRAILER`,theloai.IDTHELOAI,theloai.TENTHELOAI,quocgia.IDQUOCGIA,quocgia.TENQUOCGIA
										FROM film 
										INNER JOIN theloai ON film.THELOAI = theloai.IDTHELOAI
										INNER JOIN quocgia ON film.QUOCGIA = quocgia.IDQUOCGIA
										WHERE IDFILM=$id";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
								?>	
								   <div class="col-md-4 latest-news-agile-right-content">	      
										<h4 class="side-t-w3l-agile"><span>Trailer</span></h3>
										<div class="video_agile_player sidebar-player">
										            <div  class="video-grid-single-page-agileits">
														<iframe width="500" height="315" src="<?= $row['LINKTRAILER'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													</div>


										        <div class="player-text side-bar-info">
												<p class="fexi_header"><?= $row['TENFILM'] ?></p>

												<p class="fexi_header_para"><span>Đạo diễn<label>:</label></span><?= $row['DAODIEN'] ?></p>
												<p class="fexi_header_para"><span>Diễn viên<label>:</label></span><?= $row['DIENVIEN'] ?></p>
												<p class="fexi_header_para"><span>Quốc gia<label>:</label></span><?= $row['TENQUOCGIA'] ?></p>
												<p class="fexi_header_para"><span>Thời lượng<label>:</label></span><?= $row['THOILUONG'] ?></p>
												<p class="fexi_header_para"><span>Năm sản xuất<label>:</label></span><?= $row['NAMSX'] ?></p>
												<p class="fexi_header_para">
													<span>Thể loại <label>:</label> </span>
													<a href="theloai.php"><?= $row['TENTHELOAI'] ?></a>
																		
												</p>
												<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span> <?= $row['SORATING'] ?>
													<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
													
												</p>
											</div>

										    </div>
										
										
											<div class="clearfix"> </div>
											<div class="agile-info-recent">
											
										</div>
										
							       </div>
								   <div class="clearfix"></div>
								   
								   	
								   <h4 class="side-t-w3l-agile">Phim<span> Cùng thể loại</span></h3>
									    <ul class="side-bar-agile">
										<?php
												require_once('conn.php');
												$id2 = $_GET['id2'];
												
												$sql = "SELECT film.TENFILM , theloai.TENTHELOAI,theloai.IDTHELOAI, film.NAMSX, film.IDFILM
														FROM theloai
														INNER JOIN film ON theloai.IDTHELOAI = film.THELOAI
														WHERE IDTHELOAI = $id2
														ORDER BY rand() 
														LIMIT 5";
												$result = $conn->query($sql);
												if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
											?>
										   <li>
														<a href="single.php?id=<?= $row['IDFILM']?> & id2= <?= $row['IDTHELOAI']?>"><?= $row['TENFILM'] ?>
														<p><?= $row['NAMSX'] ?></p> </a>
											</li>
										   <?php }
											}?>
										</ul>
									
							   </div>
					
						</div>
				</div>
			<!--//content-inner-section-->


	<!--/footer-bottom-->
		<div class="contact-w3ls" id="contact">
			<div class="footer-w3lagile-inner">
					<div class="footer-grids w3-agileits">
						<div class="col-md-2 footer-grid">
						<h4>Phim lẻ</h4>
							<ul> 
								<li><a href="quocgia.php" title="Release 2016">Phim Việt Nam</a></li> 
								<li><a href="quocgia.php" title="Release 2015">Phim Trung Quốc</a></li>
								<li><a href="quocgia.php" title="Release 2014">Phim Hàn Quốc</a></li> 
								<li><a href="quocgia.php" title="Release 2013">Phim Nhật Bản</a></li> 
								<li><a href="quocgia.php" title="Release 2012">Phim Hồng Kông</a></li>
								<li><a href="quocgia.php" title="Release 2011">Phim Mỹ</a></li> 
							</ul>
						</div>
							<div class="col-md-2 footer-grid">
						<h4>Phim mới</h4>
							<ul>
								
								<li><a href="theloai.php">Phim hành động</a></li>
								<li><a href="theloai.php">Phim hài</a></li>
								<li><a href="theloai.php">Phim tình cảm</a></li>
								<li><a href="theloai.php">Phim kinh dị</a></li>
								<li><a href="theloai.php">Phim hoạt hình</a></li>
								
								
							</ul>
						</div>
				

							<div class="col-md-2 footer-grid">
								<h4>Từ khóa nổi bật</h4>
									<ul class="w3-tag2">
									<li><a href="theloai.php">Hài</a></li>
									<li><a href="theloai.php">Kinh dị</a></li>
									<li><a href="theloai.php">Hành động</a></li>
									<li><a href="theloai.php">Ghê rợn</a></li>
									<li><a href="theloai.php">Tình yêu</a></li>
									<li><a href="theloai.phpl">Hài hước</a></li>
									<li><a href="theloai.php">sợ hãi</a></li>
									<li><a href="theloai.php">lịch sử</a></li>
									<li><a href="theloai.php">kịch tính</a></li>
									<li><a href="theloai.php">lãng mạng</a></li>
									<li><a href="theloai.php">dễ thương</a></li>
									<li><a href="theloai.php">trẻ con</a></li>
									<li><a href="theloai.php">hoạt hình</a></li>
									<li><a href="theloai.php">máu me</a></li>
								</ul>


						</div>
								<div class="col-md-2 footer-grid">
						<h4>Top phim</h4>
							<div class="footer-grid1">
								<div class="footer-grid1-left">
									<a href="single.php?id=1 & id2= 1"><img src="images/infinitywar.jpg" alt=" " class="img-responsive"></a>
								</div>
								<div class="footer-grid1-right">
									<a href="single.php?id=1 & id2= 1">Avenger Infinity war</a>
									
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="footer-grid1">
								<div class="footer-grid1-left">
									<a href="single.php?id=2 & id2= 1"><img src="images/aquaman.jpg" alt=" " class="img-responsive"></a>
								</div>
								<div class="footer-grid1-right">
									<a href="single.php?id=2 & id2= 1">Aquaman: Đế vương Atlantis</a>
									
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="footer-grid1">
							
								<div class="footer-grid1-left">
									<a href="single.php?id=6 & id2= 1"><img src="images/6.jpg" alt=" " class="img-responsive"></a>
								</div>
								<div class="footer-grid1-right">
									<a href="single.php?id=6 & id2= 1 ">Captain Marvel</a>
									
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="footer-grid1">
								<div class="footer-grid1-left">
									<a href="single.php?id=14 & id2= 5"><img src="images/7.jpg" alt=" " class="img-responsive"></a>
								</div>
								<div class="footer-grid1-right">
									<a href="single.php?id=14 & id2= 5">How to train your dragon 3</a>
									
								</div>
								<div class="clearfix"> </div>
							</div>


						</div>
						<div class="col-md-2 footer-grid">
						   <h4 class="b-log"><a href="index.php"><span>P</span>him<span>H</span>ay<span>C</span>ực</a></h4>
							<div class="footer-grid-instagram">
							<a href="index.php"><img src="images/m1.jpg" alt=" " class="img-responsive"></a>
							</div>
							<div class="footer-grid-instagram">
							<a href="index.php"><img src="images/m2.jpg" alt=" " class="img-responsive"></a>
							</div>
							<div class="footer-grid-instagram">
								<a href="index.php"><img src="images/m3.jpg" alt=" " class="img-responsive"></a>
							</div>
							<div class="footer-grid-instagram">
							<a href="index.php"><img src="images/m4.jpg" alt=" " class="img-responsive"></a>
							</div>
							<div class="footer-grid-instagram">
								<a href="index.php"><img src="images/m5.jpg" alt=" " class="img-responsive"></a>
							</div>
							<div class="footer-grid-instagram">
							 <img src="images/m6.jpg" alt=" " class="img-responsive"></a>
							</div>
								
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<h3 class="text-center follow">Connect <span>Us</span></h3>
						<ul class="social-icons1 agileinfo">
							<li><a href="https://www.facebook.com/thientrung.vo.5"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.youtube.com"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/thientrung.vo.5"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.facebook.com/thientrung.vo.5"><i class="fa fa-google-plus"></i></a></li>
						</ul>	
					
			 </div>
						
			</div>
			<div class="w3agile_footer_copy">
				  <p>  <a href="quanliphim.php">Quản lí phim</a></p>
			</div>
	<?php }
											}?>			
		<a href="index.php" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->
		<!-- search-jQuery -->
				<script src="js/main.js"></script>
			
			<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video1").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video2").simplePlayer();
				});
			</script>
				<script>
				$("document").ready(function() {
					$("#video3").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video4").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video5").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video6").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video6").simplePlayer();
				});
			</script>

			<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->

			<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		 autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 

<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
	<script src="js/bootstrap.js"></script>
<!--phim yeu thich-->
<script>
  love = getCookie("love");
  count = love.split(',').length;
  $('#count').text(count);
  
  $(".add-to-cart").on("click", function() {
	  love = getCookie("love");
 
	  if (love != "") {
		  love = love + "," + $(this).attr('id');
	  } else {
		  love = $(this).attr('id');
	  }
 
	  count = love.split(',').length;
	  $('#count').text(count);

	  setCookie("love", love, 7);
  });
</script>
	
<!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
 

</body>
</html>