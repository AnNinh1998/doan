<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Chăm sóc y tế</title>
	<base href="{{asset('')}}">
	<link href="source/css/bootstrap.min.css" rel="stylesheet">
	<link href="source/css/font-awesome.min.css" rel="stylesheet">
	<link href="source/css/prettyPhoto.css" rel="stylesheet">
	<link href="source/css/price-range.css" rel="stylesheet">
	<link href="source/css/animate.css" rel="stylesheet">
	<link href="source/css/main.css" rel="stylesheet">
	<link href="source/css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>0383629144</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>truonganninh@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="logo pull-left">
							<h2>Phòng khám đa khoa Vinh Tâm 2</h2>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="/"><i class="fa fa-home"></i>Trang chủ</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i>Về chúng tôi</a></li>
								<li><a href="#"><i class="fa fa-phone-square"></i>Liên hệ</a></li>
								<li><a href="admin/cilent/Singup"><i class="fa fa-ambulance"></i>Đăng ký khám bệnh</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->


	</header>
	<!--/header-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Khoa khám bệnh</h2>
						<div class="panel-group category-products" id="accordian">
							<!--category-productsr-->
							@foreach($khoa as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">{{$cate->faculty_name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div>
						<!--/category-products-->

						<div class="brands_products">
							<!--brands_products-->
							<h2>Một số bác sỹ</h2>
							<div class="brands-name">
								@foreach($bacsy as $key => $brand)
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right"></span>{{$brand->doctor_name}}</a></li>
								</ul>
								@endforeach
							</div>
						</div>
						<!--/brands_products-->
					</div>
				</div>

				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>

	<footer id="footer">
		<!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Trang chủ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="admin/cilent/Singup">Tư vấn trực tuyến</a></li>
								<li><a href="admin/cilent/Singup">Liên hệ với chúng tôi</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Bạn tìm kiếm</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Phòng khám</a></li>
								<li><a href="#">Bác sỹ</a></li>
								<li><a href="#">Chuyên khoa</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Bảo vệ danh tính của khách hàng</a></li>
								<li><a href="#">Không tuồn dữ liệu khách hàng</a></li>
								<li><a href="#">Chăm sóc tận tình</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Về chúng tôi</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin phòng khám</a></li>
								<li><a href="#">Chăm sóc sức khỏe</a></li>
								<li><a href="#">Dịch vụ nổi bật</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Liên hệ nhanh</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i
										class="fa fa-arrow-circle-o-right"></i></button>
								<p>Chăm sóc sức khỏe của bạn<br />là trách nhiệm và niềm hạnh phúc của chúng tôi</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Phòng khám đa khoa Vinh Tâm</p>
					<p class="pull-right">29 Trần Phú, Thành phố Vinh, Nghệ An</p>
				</div>
			</div>
		</div>

	</footer>
	<!--/Footer-->



	<script src="source/js/jquery.js"></script>
	<script src="source/js/bootstrap.min.js"></script>
	<script src="source/js/jquery.scrollUp.min.js"></script>
	<script src="source/js/price-range.js"></script>
	<script src="source/js/jquery.prettyPhoto.js"></script>
	<script src="source/js/main.js"></script>
</body>

</html>