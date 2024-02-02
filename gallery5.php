<?php


include "server.php";
if(!isset($_SESSION['username']))
       header("location: index.php?Message=Login To Continue");


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_single.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>marsiajarstem@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">MARSIAJAR<span>STEM</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="home.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="courses.php">Courses</a></li>
									<li class="active"><a href="gallery.php">Gallery</a></li>
									<li><a href="education.php">Education</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
								
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="home.php">Home</a></li>
				<li class="menu_mm"><a href="about.php">About</a></li>
				<li class="menu_mm"><a href="courses.php">Courses</a></li>
				<li class="menu_mm"><a href="gallery.php">Gallery</a></li>
				<li class="menu_mm"><a href="education.php">Education</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="home.php">Home</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li>Langkah-Langkah Pembuatan</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title">Cara Pembuatan Bel Listrik</div>
						
						<div class="blog_image"><img src="images/bel listrik.jpeg" alt=""></div>
						<div class="blog_post_text">
							<h2 class="justify">Bahan-bahan</h2>
						<ol><p>
							<li><p>Kawat</p></li>
							<li><p>Palu</p></li>
							<li><p>Gergaji</p></li>
							<li><p>Tali karet</p></li>
							<li><p>Tang</p></li>
                            <li><p>Gunting seng</p></li>
                            <li><p>Pelat bekas</p></li>
                            <li><p>Kaleng bekas</p></li>
                            <li><p>Pensil</p></li>
                            <li><p>Meteran</p></li>
                            <li><p>Saklar</p></li>
						</ol></p>
						<h2 class="justify">Cara Pembuatan</h2>
						<ol><p>
							<li><p>Ukurlah papan kayu yang akan digunakan sebagai rangka bel dengan memakai meteran dan kemudian potong kayu yang telah diukur tersebut dengan memakai gergaji;</p></li>
							<li><p>Gunakan palu dan paku untuk menggabungkan papan kayu yang telah dipotong sehingga menjadi rangka sesuai dengan model yang diinginkan dan atau direncanakan sebelumnya;</p></li>
							<li><p>Pasang kaleng bekas serta tempat baterai pada rangka dengan cara ditali atau dipaku;</p></li>
							<li><p>Guntinglah pelat bekas dengan ukuran 6 x 3 cm atau dengan ukuran yang sesuai dengan motor listrik yang dipakai;</p></li>
							<li><p>Pasang motor listrik pada rangka. Caranya yaitu dengan dijepit memakai pelat yang telah dipersiapkan sebelumnya dan kemudian paku pelat tersebut untuk mengencangkannya;</p></li>
                            <li><p>Potonglah kawat secukupnya dengan menggunakan tang dan kemudian ikatkan kawat tersebut pada ujung motor listrik yang telah terpasang sebelumnya;</p></li>
                            <li><p>Bengkokkan satu buah paku dengan memakai tang serta palu dan kemudian ikatkan pada kawat yang telah terpasang pada motor listrik dengan memakai tali karet. Paku yang diikat pada kawat tersebut nantinya akan berfungsi sebagai pemukul kaleng apabila motor telah dialiri arus listrik dan kemudian berputar;</p></li>
                            <li><p>Pasanglah kabel untuk menghubungkan baterai dengan motor listrik dan kemudian pasangkan pula baterai pada tempatnya sehingga akhirnya bel listrik sederhana dengan memakai arus listrik DC pun dapat berfungsi</p></li>
						</ol> </p>
						</div>
							</div>
						</div>

						
					

	
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Marsiajar<span>STEM</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Science, Technology, Engineering and Mathematics.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="https://www.facebook.com/profile.php?id=100081341329928"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="mailto:marsiajarstem@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="https://www.instagram.com/stemlaboratory/?hl=id"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: marsiajarstem@gmail.com</li>
											<li>Toba,Sumatera Utara,Indonesia</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Menu</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="home.php">Home</a></li>
											<li><a href="about.php">About</a></li>
											<li><a href="courses.php">Courses</a></li>
											<li><a href="gallery.php">Gallery</a></li>
											<li><a href="education.php">Education</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> NOTANES  <i class="fa fa-heart-o" aria-hidden="true"></i></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>