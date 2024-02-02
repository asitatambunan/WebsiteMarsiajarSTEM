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
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
				<li class="menu_mm"><a href="education.php">Education</a></li>>
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
								<li>Gallery</li>
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
				<div class="col">
					<div class="blog_post_container">

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/layang-layang.jpeg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="gallery1.php">Layang-Layang</a></div>
								
								<div class="blog_post_meta">
									<ul>
										<li><a href="https://youtu.be/CeYVbnj0fv4">Video Pembuatan</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/rangkaian_listrik.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="gallery2.php">Rangkaian Listrik Seri</a></div>
								
								<div class="blog_post_meta">
									<ul>
										<li><a href="https://youtu.be/Vnl7BHPx8BY">Video Pembuatan</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/dispenser.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="gallery3.php">Dispenser Kardus</a></div>
								
								<div class="blog_post_meta">
									<ul>
										<li><a href="https://youtu.be/vNjbwTAwtfU">Video Pembuatan</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/speaker.png" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="gallery4.php">Speaker Mini</a></div>
								
								<div class="blog_post_meta">
									<ul>
										<li><a href="https://youtu.be/NO8HOpwNfGk">Video Pembuatan</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/bel listrik.jpeg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="gallery5.php">Bel Listrik</a></div>
								
								<div class="blog_post_meta">
									<ul>
										<li><a href="https://youtu.be/N1MpYrcD3_I">Video Pembuatan</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/sapu.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="gallery6.php">Sapu Elektrik</a></div>
								
								<div class="blog_post_meta">
									<ul>
										<li><a href="https://youtu.be/pH4svJtCFn4">Video Pembuatan</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/kipas angin.png" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="gallery7.php">Kipas Angin Tanpa Baterai dan Listrik</a></div>
								
								<div class="blog_post_meta">
									<ul>
										<li><a href="https://youtu.be/sRp5-PXcv-Y">Video Pembuatan</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
							<div class="blog_post_image"><img src="images/pot bunga.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a href="gallery8.php">Pot Bunga dari Botol Bekas</a></div>
								
								<div class="blog_post_meta">
									<ul>
										<li><a href="https://youtu.be/6ftBh1eypmQ">Video Pembuatan</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/kincir air.webp" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery9.php">Miniatur Kincir Air</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/CiEUvJR1zUc">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/penyedot debu.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery10.php">Mesin Penyedot Debu</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/OWD14Bj09Rg">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/mobilan.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery11.php">Mobilan listrik dari botol</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=ysn5XOkt0Ao">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/lampu.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery12.php">Lampu Hias Dari Korek Gas</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/1KSsiqgy86E">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/lonceng.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery13.php">Lonceng Angin Dari Bambu</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=etKMMkdNrIM">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/botol.webp" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery14.php">Tempat Pensil/Pulpen dari Botol Bekas</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/o4YxuCxmPjM">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/anyaman.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery15.php">Anyaman Dari Bambu</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/0-ypksKTkjk">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/cangkir.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery16.php">Cangkir dari Korek Api</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/BNieCusRHEk">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/burung_hantu.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery17.php">Burung Hantu dari Kardus</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/rXJQcEy5VFk">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/lampu_nenas.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery18.php">Lampu Hias dari Botol</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/qCstEjQ01Hk">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/sendok.webp" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery19.php">Sendok dari Batok Kelapa</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/vlPp7jXqajw">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/lampion.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery20.php">Lampion dari Kertas Asturo</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/oXA6epxDP1c">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/powerbank.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery21.php">Powerbank Dari Baterai Bekas</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/vYe9vAgri40">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/laci.png" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery22.php">Laci Dari Kardus</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=tmhjTHyQbBM">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/amigurumi.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery23.php">Amigurumi</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/-ufNBu2LioI">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/bingkai.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery24.php">Bingkai Foto dari Kardus</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=V0M-RDLq90U">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/syall.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery25.php">Syall Rajutan</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://youtu.be/x6_8SrN0zhY">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/air_terjun.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery26.php">Air Mancur Tanpa Listrik Dari Botol Aqua</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=ovbbzFrGWB4">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/tissue.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery27.php">Tempat Tissue Dari Kardus</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=CNOd5s0l1Z8">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/gantungan.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery28.php">Gantungan Kunci dari Botol Yakult</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=wAdMOrxP5QQ">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/sandal.jpeg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery29.php">Sandal dari Kantong Plastik </a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=XWaxeCzdrRk">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/tas.webp" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery30.php">Tas dari Plastik bekas </a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=DQCqmWrZeIA">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/kemoceng.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery31.php">Kemoceng dari Tali Rafia </a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=OFv_C9IZjJk">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/bunga.webp" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery32.php">Bunga Matahari Dari Sedotan </a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=2s-qYAXAbNs">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/kaleng.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery33.php">Kompor Dari Kaleng</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=-EEgVxSX9xg">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/lampubelajar.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery34.php">Lampu Belajar dari Pipa PVC </a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=Rlftvld9A-0">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/guci.webp" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery35.php">Guci Dari Batok Kelapa</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=4XyEFw9q0H0">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/teko.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery36.php">Teko Dari Batok Kelapa</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=Oq7LwzeZw_Y">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/pewangi.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery37.php">Pengharum Ruangan Dari Downy</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=RYm4ZYupG3Y">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/keset.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery38.php">Keset Kaki dari Kain Perca</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=Ahe5hZ7PDrg">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/sendal.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery39.php">Sendal Kaki dari Kain Perca</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=jGywP8TdlaU">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/mesin.png" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery40.php">Mesin Uap Dari Botol Kaleng Bekas</a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=htYQElcFEk4&t=54s">Video Pembuatan</a></li>
								</ul>
							</div>
								
							</div>
						</div>

						<div class="blog_post trans_200">
						<div class="blog_post_image"><img src="images/jaring.jpg" alt=""></div>
						<div class="blog_post_body">
							<div class="blog_post_title"><a href="gallery41.php">Robot Laba Laba Dari Penjepit Kertas </a></div>
								
							<div class="blog_post_meta">
								<ul>
									<li><a href="https://www.youtube.com/watch?v=4BLRKn1Snh0">Video Pembuatan</a></li>
								</ul>
							</div>
								
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> NOTANES <i class="fa fa-heart-o" aria-hidden="true"></i> </a>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog.js"></script>
</body>
</html>