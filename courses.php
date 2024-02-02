<?php


include "server.php";
if(!isset($_SESSION['username']))
       header("location: index.php?Message=Login To Continue");


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
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
									<li class="active"><a href="courses.php">Courses</a></li>
									<li><a href="gallery.php">Gallery</a></li>
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
				<li class="menu_mm"><a href="logout.php">Logout</a></li>
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
								<li>Courses</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/science.png" alt=""></div>
									<div class="course_body">
										<h3 class="glow"><a href="course.php">1. SCIENCE</a></h3>
										<div class="course_text">
											<p>Sains merupakan kajian berhubungan dengan peristiwa alam yang melibatkan penyelidikan, penelitian dan pengukuran untuk menjelaskan sebab akibat dari sebuah fenomena alam. Penyelidikan dan penilitian sains dapat digunakan untuk mengidentifikasi bukti – bukti yang dibutuhkan untuk menjawab pertanyaan ilmiah dan menjawab permasalahan dalam kehidupan manusia.
											Kunci pemahaman yang sesungguhnya ialah dengan mempelajari sains dalam konteks yang relevan serta mampu mentransfer pengetahuan ilmiah ke dalam situasi yang nyata. Pendekatan inkuiri sains berbasis instruksi menuntut pendidik untuk mendorong dan memberi contoh mengenai kemampuan inkuiri sains serta membangun rasa ingin tahu peserta
											didik, keterbukaan terhadap gagasan baru dan skeptisisme yang menjadi ciri sains (National Research Council,1996). Inkuiri sains mempersiapkan peserta didik untuk berpikir dan bertindak layaknya seorang ilmuan sejati, mengajukan pertanyaan, berhipotesis dan melakukan investigasi
											menggunakan praktik yang sesuai dengan standar sains. Pada implementasinya, peserta didik dituntut tidak hanya melibatkan hands-on activity, namun minds-on activity pun harus berdampingan dalam kegiatan inti pembelajaran (National Research Council,1996). Dalam hal ini peserta didik dituntut tidak hanya bekerja berdasarkan prosedur yang ada, namun
											diharapkan dapat merancang sendiri prosedur apa dan bagaimana prosedur tersebut harus dilakukan agar diperoleh hasil yang maksimal dari suatu pembelajaran.
											</p>
										</div>
									</div>
									<div class="course_footer">
										
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/teknologi.png" alt=""></div>
									<div class="course_body">
										<h3 class="glow"><a href="course.php">2. TECHNOLOGY</a></h3>
										<div class="course_text">
											<p>Technology merupakan inovasi atau penemuan manusia yang dapat berupa perangkat lunak dan keras sebagai sarana untuk memenuhi keinginan dan kebutuhan manusia, sehingga dapat mempermudah pekerjaan manusia untuk kehidupan yang lebih maju.
											He identifies technology as (a) objects, (b) knowledge, (c) activities, and (d) volition. Often, people associate technology as artifacts or objects; unfortunately, many only view technology in this way and overcoming this limited view of technology may be critical for
											teaching STEM in an integrated approach. Mitcham also contends that technology consists of specific and distinct knowledge and therefore is a discipline Mitcham (1994) memandang teknologi sebagai proses dengan aktivitas yang meliputi
											merancang, membuat dan menggunakan teknologi. Mitcham (1994) mengidentifikasi empat cara berbeda dalam memahami teknologi diantaranya teknologi sebagai objek, pengetahuan, aktivitas dan kemauan. Teknologi berkaitan langsung dengan keperluan manusia serta ekonomi, sosial, aspek budaya atau aspek lingkungan yang diperoleh dari proses pemecahan
											masalah dan pengembangan produk baru (Barak dkk ,2012). Pendekatan STEM harus memberi kesempatan kepada peserta didik untuk memandang teknologi sebagai wahana perubahan yang baik dan positif.
											</p>
										</div>
									</div>
									<div class="course_footer">
										
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/engineering.png" alt=""></div>
									<div class="course_body">
										<h3 class="glow"><a href="course.php">3. ENGINEERING</a></h3>
										<div class="course_text">
											<p>Engineering merupakan pengetahuan dan keterampilan untuk mendesain, mengaplikasikan, mereplikasi serta marekayasa sebuah karya berupa peralatan, sistem dan mesin yang dapat digunakan oleh manusia untuk mempercepat dan mempermudah proses produksi terhadap barang dan jasa.</p>
										</div>
									</div>
									<div class="course_footer">
										
									</div>
								</div>
							</div>

							<!-- Course -->
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="images/mathematics.webp" alt=""></div>
									<div class="course_body">
										<h3 class="glow"><a href="course.php">4. MATHEMATIC</a></h3>
										<div class="course_text">
											<p>Mathematic merupakan ilmu yang berhubungan dengan numerasi, pola perubahan dan hubungan, ruang dan bentuk. keterampilan berpikir secara rasional dan logis serta bernalar, dan menggunakannya secara sistematik dan terstruktur.</p>
												Williams (2007) berpendapat bahwa pada pembelajaran kontekstual dapat memberikan makna pada matematika karena peserta didik ingin mengetahui tidak hanya bagaimana peseta didik menyelesaikan tugas matematika namun juga mengapa perlu belajar
												matematika. Peserta didik ingin tahu pula bagaimana matematika relevan terhadap kehidupan mereka. Pada implementasi STEM dalam pembelajaran, aspek matematika sangat diperlukan terutama dalam hal evaluasi. Analisis matematika yang terdapat dalam implementasi STEM
												ditujukan untuk mengevaluasi desain yang tersedia. Hal ini memberikan alasan yang diperlukan peserta didik untuk belajar matematika dan melihat hubungannya antara apa yang dipelajari di sekolah dan apa yang diperlukan dalam keterampilan karir di bidang STEM (Burghardt dan Hacker,2004)
										</div>
									</div>
									<div class="course_footer">
										
									</div>
								</div>
							</div>

							

							

						</div>
						<div class="row pagination_row">
							<div class="col">
								
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Nilai STEM</div>
							<div class="sidebar_categories">
								<ul>
									<li>Kreatif</a></li>
									<li>Kognitif</a></li>
									<li>Inovatif</a></li>
									<li>Berkonstruksi</a></li>
									<li>Memproduksi</a></li>
									<li>Imajinasi</a></li>
								</ul>
							</div>
						</div>

						

						<!-- Gallery -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Workshop STEM</div>
							<div class="sidebar_gallery">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop1.jpeg">
											<img src="images/workshop1_large.jpeg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop2_large.jpg">
											<img src="images/workshop2.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop3_large.jpg">
											<img src="images/workshop3.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop4_large.jpg">
											<img src="images/workshop4.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop5_large.jpg">
											<img src="images/workshop5.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop6_large.jpg">
											<img src="images/workshop6.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop7_large.jpg">
											<img src="images/workshop7.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop8_large.jpg">
											<img src="images/workshop8.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop9_large.jpg">
											<img src="images/workshop9.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop10_large.jpg">
											<img src="images/workshop10.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop11_large.jpeg">
											<img src="images/workshop11.jpeg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop12_large.jpg">
											<img src="images/workshop12.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop13_large.png">
											<img src="images/workshop13.png" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop14_large.jpg">
											<img src="images/workshop14.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop15_large.webp">
											<img src="images/workshop15.jpeg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop16_large.jpg">
											<img src="images/workshop16.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop17_large.jpg">
											<img src="images/workshop17.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="images/workshop18_large.jpg">
											<img src="images/workshop18.jpg" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>

						

						
					</div>
				</div>
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