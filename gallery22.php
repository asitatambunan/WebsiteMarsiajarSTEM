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
						<div class="blog_title">Cara Pembuatan Laci Dari Kardus</div>
						
						<div class="blog_image"><img src="images/laci.png" alt=""></div>
						<div class="blog_post_text">
							<h2 class="justify">Bahan-bahan</h2>
						<ol><p>
							<li><p>Kardus</p></li>
							<li><p>Carter</p></li>
							<li><p>Lem</p></li>
						</ol></p>

						<h2 class="justify">Cara Pembuatan</h2>
						<ol><p>
							<li><p>Langkah pertama siapkan tiga kardus dengan ukuran 27cm x 20cm dengan ketebalan yang cukup tebal agar cara membuat laci dari kardus dengan mudah mudah di buat. Pastikan juga kamu memotong dengan tepay sesuai dengan ukuran agar saat proses perakitan kamu tidak kesusahan.</p></li>
							<li><p>Jika semuanya sudah siap hal berikutnya yaitu membuat sebuah lingkaran pada setiap sudut dalam kardus ini menjadu sebuah lingkaran seperti di atas untuk cara membuat laci dari kardus dengan mudah pada tahap ini kamu dapat gunakan jangka untuk proses pembuatan lingkaran atau kamu dapat gunakan media lainya</p></li>
							<li><p>Langkah berikutnya pada cara membuat laci dari kardus dengan mudah yaitu merapikan bagian bagian atau sudut sudut bekas potongan yang tidak rata agar menjadi lebih rapi dan tentunya lebih menarik</p></li>
							<li><p>Langkah berikutnya yaitu kamu dapat membuat sebuah kardus dengan bentuk seperti di atas dengan ukuran 20cm x 19cm dengan jumlah 3 keping </p></li>
                            <li><p>Lekatkan dengan cara merangkai semua kardus tadi menjadi satu dengan hati hati, kita mengunakan lem fox untuk media pelekat dalam cara membuat laci dari kardus dengan mudah ini jika kamu tidak punya kamu dapat gunakan lem tembak</p></li>
                            <li><p>Setelah bagian pingir di pasang dan bagian tengah kamu pasang sekarang bagian paling ujung nih, kita gunakan lem tembak untuk media pelekatnya jika kamu tidak punya kamu dapat gunakan lem tembak, untuk cara membuat laci dari kardus dengan mudah kali ini kita mengunakan lem fox atau lem kayu</p></li>
                            <li><p>Untuk langkah berikut ini siapkan semua hal yang kamu butuhkan tadi mulai dari alat sampai dengan bahanya, untuk cara membuat laci dari kardus dengan mudah tahap ini kita melekatkan bagian terakhir untuk badanya untuk itu kamu dapat melekatkan dengan hati hati</p></li>
                            <li><p>Dengan ini kamu dapat membuat sebuah laci dari kardus, di sini kita mulai untuk membuat sebuah laci dengan mempersiapkan kardus dengan ukuran seperti di atas. Untuk cara membuat laci dari kardus dengan mudah kamu dapat membuat dengan mengunakan sebuah kardus dengan tebal</p></li>
                            <li><p>Langkah berikutnya kita buat lagi untuk bagian kanan dan kiri dengan kardus, kita buat dua lembar.Potong dengan hati hati dan pastikan kamu memotong sesuai dengan ukuran yang tersedia agar cara membuat laci dari kardus bekas dapat kamu kerjakan dengan mudah dan cepat. Berbagai hal harus kamu perhatikan terutama ukuran karena sangat penting dan sangat berpengaruh pada desain laci dari kardus</p></li>
                            <li><p>Langkah ini kita akan merakit sebuah laci dengan bentuk yang sudah kita sediakan, gunakan lem yang ada di sekitar jika ada lem fox atau lem kayu kamu dapat gunakan itu. Berikan lem secukupnya dan jangan berlebihan karena jika berlebihan takutnya nanti saat proses perakitan lem keluar dan itu akan merusak desain dan nanti akan mengakibatkan tampilan kurang menarik, maka dari itu cara membuat laci dari kardus bekas lakukan dengan hati hati dan teliti agar desain tidak rusak dan sesuai ukuran yang tersedia</p></li>
                            <li><p>Untuk menambahkan sebuah lingkaran untk menarik laci kamu dapat gunakan beberapa kardus yang kamu tumpuk hal ini dapat mempermudah kamu dalam membuka sebuah laci</p></li>
                            <li><p>Kita buat dua bentuk laci seperti di atas sesuai dengan lubang yang sudah kita buat</p></li>
                            <li><p>hasil jadinya dari cara membuat laci dari kardus dengan mudah pastikan semua sudah tersusun dengan benar dan tepat agar hasil yang kamu dapatkan lebih maksimal. Pada tahap ini kamu dapat melakukan finising dengan cek ulang apakah ada masalah atau tidak</p></li>
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