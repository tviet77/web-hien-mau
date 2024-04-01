<!doctype html>
<html>
<head>
<title>Official Signup Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/official_signup_form%20(1)/giaodien/stylevip.css">
		<!-- <link rel="stylesheet" href="/css/timethongke.css"> -->
		<!-- Boxiocns CDN Link -->
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<link rel="stylesheet" href="css/stylevip.css">
<!-- /css -->
</head>
<body>
<?php
	session_start();
    $servername ="localhost";
    $database = "webtonvinh";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername,$username,$password,$database)
    or die ("loi ket noi");
	$query = mysqli_query($conn,"SELECT * FROM `taikhoan` ");
	$row = mysqli_fetch_array($query);
	if(isset($_POST['password']) && isset($_POST['passwordnew']))
	{
		$password = $_POST['password'];
		$passwordnew = $_POST['passwordnew'];
		if ($password = $row['mk'])
		{
			$doipass = mysqli_query($conn,"UPDATE `taikhoan` SET `mk`='$passwordnew'");
			echo "<script type='text/javascript'> alert('Đã Đổi Mật Khẩu Thành Công');</script>";
		}
	}
?>
	<h1 style="margin-left:50%;font-size:1.5rem;">Tên tài khoản: <?php echo $_SESSION['username']; ?></h1>
<div class="sidebar close">
		<div class="logo-details">
		  <i class='bx bxl-c-plus-plus'></i>
		  <span class="logo_name">CodingLab</span>
		</div>
		<ul class="nav-links">
		  <li>
			<a href="#">
			  <i class='bx bx-grid-alt' ></i>
			  <span class="link_name">Dashboard</span>
			</a>
			<ul class="sub-menu blank">
			  <li><a class="link_name" href="#">Dashboard</a></li>
			</ul>
		  </li>
		  <li>
			<div class="iocn-link">
			  <a href="#">
				<i class='bx bx-collection' ></i>
				<span class="link_name">Category</span>
			  </a>
			  <i class='bx bxs-chevron-down arrow' ></i>
			</div>
			<ul class="sub-menu">
			  <li><a class="link_name" href="#">Category</a></li>
			  <li><a href="#">HTML & CSS</a></li>
			  <li><a href="#">JavaScript</a></li>
			  <li><a href="#">PHP & MySQL</a></li>
			</ul>
		  </li>
		  <li>
			<div class="iocn-link">
			  <a href="#">
				<i class='bx bx-book-alt' ></i>
				<span class="link_name">Posts</span>
			  </a>
			  <i class='bx bxs-chevron-down arrow' ></i>
			</div>
			<ul class="sub-menu">
			  <li><a class="link_name" href="#">Posts</a></li>
			  <li><a href="#">Web Design</a></li>
			  <li><a href="#">Login Form</a></li>
			  <li><a href="#">Card Design</a></li>
			</ul>
		  </li>
		  <li>
			<a href="#">
			  <i class='bx bx-pie-chart-alt-2' ></i>
			  <span class="link_name">Analytics</span>
			</a>
			<ul class="sub-menu blank">
			  <li><a class="link_name" href="#">Analytics</a></li>
			</ul>
		  </li>
		  <li>
			<a href="#">
			  <i class='bx bx-line-chart' ></i>
			  <span class="link_name">Chart</span>
			</a>
			<ul class="sub-menu blank">
			  <li><a class="link_name" href="#">Chart</a></li>
			</ul>
		  </li>
		  <li>
			<div class="iocn-link">
			  <a href="#">
				<i class='bx bx-plug' ></i>
				<span class="link_name">Plugins</span>
			  </a>
			  <i class='bx bxs-chevron-down arrow' ></i>
			</div>
			<ul class="sub-menu">
			  <li><a class="link_name" href="#">Plugins</a></li>
			  <li><a href="#">UI Face</a></li>
			  <li><a href="#">Pigments</a></li>
			  <li><a href="#">Box Icons</a></li>
			</ul>
		  </li>
		  <li>
			<a href="#">
			  <i class='bx bx-compass' ></i>
			  <span class="link_name">Explore</span>
			</a>
			<ul class="sub-menu blank">
			  <li><a class="link_name" href="#">Explore</a></li>
			</ul>
		  </li>
		  <li>
			<a href="#">
			  <i class='bx bx-history'></i>
			  <span class="link_name">History</span>
			</a>
			<ul class="sub-menu blank">
			  <li><a class="link_name" href="#">History</a></li>
			</ul>
		  </li>
		  <li>
			<a href="#">
			  <i class='bx bx-cog' ></i>
			  <span class="link_name">Setting</span>
			</a>
			<ul class="sub-menu blank">
			  <li><a class="link_name" href="#">Setting</a></li>
			</ul>
		  </li>
		  <li>
		<div class="profile-details">
		  <div class="profile-content">
			<img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t1.6435-9/161706964_443825850063273_6712123254061177664_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=btuSBNJ56rkAX92-hcX&_nc_ht=scontent.fdad3-2.fna&oh=591cf22863a24b6f94c260a8dc80e645&oe=61821F41" alt="avarta">
		  </div>
		  <div class="name-job">
			<div class="profile_name">Prem Shahi</div>
			<div class="job">Web Desginer</div>
		  </div>
		  <i class='bx bx-log-out' ></i>
		</div>
	  </li>
	</ul>
	  </div>
	  <section class="home-section">
		<div class="home-content">
		  <i class='bx bx-menu' ></i>
		  <span class="text"></span>
		</div>
		<!-- đăng nhập -->

				<div class="content-w3ls">
					<div class="content-agile1">
						<h2 class="agileits1">Official</h2>
						<p class="agileits2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="content-agile2">
						<form action="#" method="post">
							<div class="form-control w3layouts">
								<input type="text" id="firstname" name="password" placeholder="Mật Khẩu Cũ" title="Please enter your First Name" required="">
							</div>

							<div class="form-control agileinfo">
								<input type="password" class="lock" name="passwordnew" placeholder="Mật khẩu mới" id="password1" required="">
							</div>

							<input type="submit" class="register" value="Đổi Mật Khẩu">
						</form>
						<p class="wthree w3l">Fast Signup With Your Favourite Social Profile</p>
						<ul class="social-agileinfo wthree2">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
		<div class="container">
		  <div class="icons">
			<i class="fas fa-moon"></i>
			<i class="fas fa-sun"></i>
		  </div>

	  </section>


	  <script>
	  let arrow = document.querySelectorAll(".arrow");
	  for (var i = 0; i < arrow.length; i++) {
		arrow[i].addEventListener("click", (e)=>{
	   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
	   arrowParent.classList.toggle("showMenu");
		});
	  }
	  let sidebar = document.querySelector(".sidebar");
	  let sidebarBtn = document.querySelector(".bx-menu");
	  console.log(sidebarBtn);
	  sidebarBtn.addEventListener("click", ()=>{
		sidebar.classList.toggle("close");
	  });
	  </script>

</body>
</html>
