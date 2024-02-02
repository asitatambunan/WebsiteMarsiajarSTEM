<?php


include "server.php";
if(!isset($_SESSION['username']))
       header("location: index.php?Message=Login To Continue");


?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>MARSIAJAR STEM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="MARSIAJAR STEM project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style type="text/css">
.justify { text-align: justify;}

 </style>
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
									<li class="active"><a href="#">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="courses.php">Courses</a></li>
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
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(https://indonesiainside.id/wp-content/uploads/2020/02/STEM750.jpg)"></div>
					
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(https://kuliahdimana.id/public/news/9b524629a0b0894a23c9a6aa1fbdb63a.jpg)"></div>
					
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(https://smkwidyanusantara.sch.id/media_library/posts/large/bc6e6763d49006789b2565ddc2b2678d.jpg
					)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">MARSIAJAR STEM</div>
									<div class="home_slider_subtitle">SCIENCE, TECHNOLOGY, ENGINEER, MATHEMATICS</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h1 class="glow">STEM</h1>
						<div class="section_subtitle">
							<p class="justify">STEM adalah pendekatan pembelajaran interdisiplin antara sains, teknologi, teknik, dan matematika. Pendekatan dari keempat aspek ini merupakan pasangan yang serasi antara masalah yang terjadi di dunia nyata dan juga pembelajaran yang berfokus pada pemecahan masalah yang kita alami dalam kehidupan sehari-hari dan kehidupan yang profesional (Torlakson, 2014). Saat ini STEM telah berkembang jauh dalam cakupan dan pilihan bidang studi. STEM pertama kali ditemukan di Amerika Serikat yang dulunya dikenal dengan nama SMET. Seiring dengan berkembangnya teknologi, SMET kemudian diganti menjadi STEM. 
							Pendidikan STEM memiliki konsep akademik yang digabungkan dengan pelajaran dunia nyata sehingga siswa dapat menerapkan sains, teknologi, teknik, dan matematika dalam konteks yang membuat hubungan antara sekolah, komunitas, pekerjaan, dan perusahaan global memungkinkan pengembangan literasi STEM dan dengan itu akan muncul kemampuan untuk bersaing dalam ekonomi baru (Tsupros, 2009).
							<p>
							<p class="justify">NRC (2014) telah mendefinisikan empat konsep disiplin dalam STEM, yaitu:<p>
								<ol>
								<li class="justify">Sains merupakan ilmu pengetahuan yang berperan untuk menginformasikan rancangan teknik.</li>
								<li class="justify">Teknologi merupakan perangkat yang diciptakan manusia untuk memuaskan keinnginan dan kebutuhannya. Banyak dari teknolohi modern ialah produk dari sains dan teknik.</li>
								<li class="justify">Teknik merupakan pengetahuan tentang desain dan penciptaan benda buatan manusia dan sebuah proses untuk memecahkan masalah. Teknik memanfaatkan konsep dalam sains, matematika, dan alat-alat teknologi.</li>
								<li class="justify">Matematika adalah ilmu pengetahuan tentanag pola dan hubungan antara jumlah, angka, dan ruang.</li>
								</ol>

						<p class="justify">Fondasi untuk pendidikan STEM dimulai pada anak-anak usia dini. Dari tahun-tahun awal kehidupannya, melalui pengalaman bermain mereka dan lingkungan keluarga, anak-anak terlibat dengan dunia dengan cara yang dapat mempromosikan pembelajaran yang berkaitan dengan Sains, Teknologi, Teknik, dan Matematika. Mereka secara alami terlibat dalam eksplorasi STEM awal melalui pengalaman multisensor dan kreatif langsung. Dengan terlibat dalam pengalaman-pengalaman ini, mereka mengembangkan keingintahuan (curiosity), memiliki minat dalam mempelajari berbagai hal (inquisitiveness), berpikir kritis (critical-thinking) dan pemecahan masalah (problem-solving). Kapasitas kemampuan tersebut terus dibangun melalui pengalaman di sekolah dasar dan pasca-sekolah dasar mereka (Bruton, 2017).
							Untuk meningkatkan kinerja siswa dalam program STEM, mereka secara individu harus terhubung dengan berbagai cara untuk meningkatkan pembelajaran di bidang STEM (Darling-Harmond, 1994 dalam Ejiwale, 2013).
						<p>
						<p class="justify">Metode pengajaran menentukan jumlah pengetahuan yang diperoleh peserta didik. Guru sebagai fasilitator harus memiliki pengetahuan tentang subjek dan memiliki keterampilan dasar yang diperlukan untuk mempengaruhi pengetahuan siswa (Nwanekezi dkk., 2010 dalam Ejiwale, 2013). Guru akan memperkenalkan dan menunjukkan terlebih dahulu proses belajar mengajar dengan mengintegrasikan pendidikan STEM sebagai dasar untuk pengetahuan siswa.
						<p>
						<p class="justify"> Penelitian terbaru dalam pembelajaran berbasis proyek menunjukkan bahwa proyek dapat meningkatkan minat siswa pada STEM karena mereka melibatkan siswa dalam memecahkan masalah otentik, bekerja dengan orang lain, dan membangun solusi nyata. STEM akan memberikan pengalaman langsung kepada siswa untuk bekerja di industri atau kegiatan praktikum yang dibutuhkan oleh industri masa depan. Melalui pendekatan ini, para siswa akan memahami apa yang dimaksud dengan karir bidang STEM dengan menggunakan mesin yang digunakan di laboratorium yang mirip dengan yang akan mereka gunakan di tempat kerja. Banyak negara termasuk Amerika Serikat sangat membutuhkan tenaga kerja dengan persiapan yang memadai dalam sains dan matematika untuk membantu mengatasi ekonomi negara yang berantakan, hambatan terhadap keberhasilan penerapan STEM harus diidentifikasi dan diatasi.
						<p>
						<p class="justify">STEM adalah gerakan yang berkembang dalam pendidikan, tidak hanya di Amerika Serikat tetapi di seluruh dunia. Program pembelajaran berbasis STEM dimaksudkan untuk meningkatkan minat siswa dalam mengejar pendidikan tinggi dan karir di bidang-bidang tersebut. Pendidikan STEM biasanya menggunakan model pembelajaran campuran baru yang menggabungkan pengajaran kelas tradisional dengan pembelajaran online dan aktivitas pembelajaran langsung. Model pembelajaran campuran ini bertujuan memberi siswa kesempatan untuk mengalami cara belajar yang berbeda dan pemecahan masalah.
						<p>
						<p class="justify">Pendidikan STEM yang dipahami dengan baik dimulai di tingkat SMP, dengan menggunakan fakta dan prosedur akademis praktis dan tradisional, dapat memanifestasikan diri dalam bentuk produk  yang terkait teknologi dan rekayasa, dan juga secara visual menghubungkan area STEM untuk membantu menciptakan informasi baru.  Persiapan yang cermat dari pendidikan STEM juga dianggap sebagai cara untuk membantu siswa SMP untuk mengembangkan kemampuan khusus dalam konten STEM di tingkat pendidikan yang lebih  tinggi (Ostler, 2012). 
							Terlibat dengan pengalaman STEM berkualitas tinggi pada usia muda dapat memiliki dampak yang langgeng pada peserta didik, karena dapat mengatur tahapan untuk keterlibatan dan kesuksesan mereka di bidang ini nantinya. Pengalaman semacam itu dapat mendorong dan mendukung anak-anak untuk mengartikulasikan dan mewakili eksplorasi, penemuan, pemikiran, dan pemahaman mereka yang pada gilirannya dapat membantu membangun pengetahuan dan keterampilan STEM awal yang kritis. Berdasarkan pengalaman ini, pengalaman pendidikan STEM hendaknya memberikan kesempatan bagi peserta didik, di setiap fase perjalanan pembelajarannya, untuk mengembangkan pengetahuan dan keterampilan STEM mereka dengan cara yang terintegrasi dan menarik.
						<p>
						</div>

						<h3>MANFAAT STEM</h3>
						<p class="justify">Pendidikan STEM berfokus pada pengembangan berbagai Keahlian Utama yang penting untuk hidup dan bekerja di dunia saat ini. Peserta didik akan terlibat dalam berbagai kegiatan sebagai berikut:<p>
							<ol>
								<li class="justify">Menggunakan keterampilan dan pengetahuan konten mereka untuk memecahkan masalah secara kreatif;</li>
								<li class="justify">Membayangkan, bertanya dan mengeksplorasi;</li>
								<li class="justify">Berkolaborasi dengan orang lain;</li>
								<li class="justify">Terlibat dalam penyelidikan dan analisis;</li>
								<li class="justify">Berinovasi, merancang dan membuat;</li>
								<li class="justify">Menguji dan memodifikasi solusi mereka untuk masalah yang rumit.</li>
							</ol>


						<h3>DAMPAK STEM</h3>
						<ol>
								<li class="justify">Siswa selalu termotivasi dalam pembelajaran karena siswa bisa learning by doing jadi siswa bisa belajar dan mempraktekkan.</li>
								<li class="justify">Fun dan menikmati KBM dalam proses pembelajaran, ini bisa menghindari KBM yang monoton.</li>
								<li class="justify">Siswa akan lebih komunikatif sehingga akan ada timbul interaksi dan empati.</li>
								<li class="justify">Guru senang dan menikmati dalam mengajar dalam pelaksanaan pengajaran.</li>
								<li class="justify">Orang tua akan puas terhadap hasil belajar, sehingga mereka bisa mengapresiasi terhadap guru atas keberhasilan belajar.</li>
						</ol>

						<p class="justify">STEM telah menjadi kata kunci dalam pendidikan. Banyak orang memiliki pemahaman yang dangkal tentang program pembelajaran STEM, tetapi hanya sedikit yang memahami dampaknya terhadap gambaran pendidikan yang lebih besar di Amerika. Dalam beberapa hal, pendidikan STEM adalah pembaruan yang sudah lama ditunggu-tunggu untuk sistem pendidikan kami secara keseluruhan yang dimaksudkan untuk membawa anak-anak untuk mempercepat keterampilan dan pengetahuan yang paling relevan di masyarakat saat ini. Inisiatif STEM juga melakukan lebih banyak untuk menjangkau dan mendorong anak perempuan dan minoritas yang mungkin tidak menunjukkan minat pada subyek STEM di masa lalu atau mungkin tidak memiliki dukungan yang kuat untuk mengejar dan unggul dalam mata pelajaran STEM. Secara umum, ada kebutuhan nyata bagi semua siswa untuk menjadi lebih terpelajar dalam bidang sains dan teknologi saat ini daripada di generasi sebelumnya karena teknologi dan sains memengaruhi dan membentuk kehidupan sehari-hari. Dengan cara ini, pendidikan STEM telah mendapatkan status kata kunci.
						<p>
						<p class="justify">Pendidikan STEM akan mengembangkan kreativitas siswa melalui proses pemecahan masalah dalam kehidupan sehari-hari. Siswa akan memiliki kemampuan keterampilan belajar dan berinovasi yang meliputi: siswa akan berpikir kritis dan mampu menyelesaikan masalah, kreatif dan inovatif, serta mampu berkomunikasi dan berkolaborasi, terampil untuk menggunakan media, teknologi, informasi, dan komunikasi (TIK), kemampuan untuk menjalani kehidupan dan karir yang meliputi: kemampuan beradaptasi, berinisiatif, mampu mengembangkan diri, memiliki kemampuan sosial dan budaya, produktif, dapat dipercaya, memiliki jiwa kepemimpinan, dan bertanggungjawab.
						<p>
							<p class="justify">Selain itu, adapun manfaat yang dapat di ambil dari penerapan STEM yaitu :<p>
							<ol>
								<li class="justify" >Mempersiapkan sumber daya manusia yang  berkualitas di masa yang akan datang, agar dapat berkontribusi dalam menciptakan teknologi &#8211; teknologi baru yang bemanfaat untuk memperbaiki kehidupan manusia. Sehingga bukan hanya saja menjadi pengguna yang aktif seperti saat ini.</li>
								<li class="justify">Peserta didik akan memiliki pola pikir yang logis, sistematis, serta kritis. Sehingga dapat digunakan dalam berbagai mata pelajaran lain, serta dalam kehidupan sehari-hari.</li>
								<li class="justify">Mampu meningkatkan soft skill peserta didik, yang di mulai dari pemecahan masalah problem solving dengan cara yang efektif dan efisien, kesabaran, kerja sama tim, dan berbagai keahlian mental yang mampu diaplikasikan dalam kepribadian dan kehidupan mereka sehari-hari.</li>
								</ol>
						</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<p class="justify">Dalam konteks pendidikan dasar dan menengah, pendidikan STEM bertujuan mengembangkan peserta didik yang STEM literate (Bybee, 2013) dengan rincian sebagai berikut:<p>
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
						<div class="feature_text"><p class="justify">memiliki pengetahuan, sikap, dan keterampilan untuk mengidentifikasi pertanyaan dan masalah dalam situasi kehidupannya, menjelaskan fenomena alam, mendesain, serta menarik  kesimpulan  berdasar  bukti  mengenai  isu-isu  terkait STEM. </p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
						<div class="feature_text"><p class="justify">memahami karakteristik khusus disiplin STEM sebagai bentukbentuk pengetahuan, penyelidikan, dan desain yang digagas manusia.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
						<div class="feature_text"><p class="justify">memiliki kesadaran bagaimana disiplin-disiplin STEM membentuk lingkungan material, intelektual dan kultural.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<div class="feature_text"><p class="justify">memiliki keinginan untuk terlibat dalam kajian isu-isu terkait STEM (misalnya efisiensi  energi,  kualitas  lingkungan,  keterbatasan  sumberdaya  alam)  sebagai manusia  yang  konstruktif,  peduli,   dan  reflektif  menggunakan  gagasan- gagasan sains, teknologi, rekayasa, dan matematika.</p></div>
					</div>
				</div>
php
			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">STEM MENURUT PARA AHLI</h2>
						</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/anime1.jpeg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title">Sanders (2009: 21)</a></h3>
							<div class="course_text">
								<p>Menurut Sanders (2009: 21), STEM adalah pendekatan pembelajaran yang
									menggabungkan dua atau lebih bidang ilmu yang termuat dalam STEM, dan atau
									antara bidang ilmu yang termuat dalam STEM dengan satu atau lebih mata
									pelajaran sekolah lainnya.</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								
								
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/anime2.jpeg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title">khairiyah (2019: 28)</a></h3>
							<div class="course_text">
								<p>Menurut khairiyah (2019: 28), pembelajaran STEM akan membentuk
karakter peserta didik yang mampu mengenali sebuah konsep atau pengetahuan
(Science) dan menerapkan pengetahuan tersebut dengan keterampilan
(Technology) yang dikuasainya untuk menciptakan atau merancang suatu cara
(Engineering) dengan analisa dan berdasarkan perhitungan data matematis (Math)
dalam rangka memperoleh solusi atas penyelesaian sebuah masalah sehingga
pekerjaan manusia menjadi lebih mudah</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								
								
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="images/anime3.jpeg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title">Tsupors (2009)</a></h3>
							<div class="course_text">
								<p>Menurut Tsupors (2009) dalam Winarni (2016: 978),
menyatakan bahwa STEM sebagai pendekatan interdisipliner untuk belajar
dimana konsep akademis yang ketat digabungkan dengan pelajaran dunia nyata.</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								
							</div>
						</div>
					</div>
				</div>

			</div>
			
		</div>
	</div>


	

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Buku Panduan Belajar STEM</h2>
						<div class="section_subtitle"><p>Daftar buku yang dapat membantu anda dalam mengasah skill bersama STEM</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="images/buku1.jpg" alt=""></div>
						
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/buku2.jpg" alt=""></div>
						
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/buku3.png" alt=""></div>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/buku4.jpg" alt=""></div>
						
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/buku5.jpg" alt=""></div>
						
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/buku8.png" alt=""></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	
				

		<!-- Counter -->

		<div class="counter">
		<div class="counter_background" style="background-image:url(images/about_3.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Tambahkan Komentar</h2>
						<div class="counter_text"><p>Silahkan tinggalkan saran dan komentar anda</p></div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							
							

						</div>
					</div>

				</div>
			</div>

			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form method="post" class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="home.php">
							<?php include('errors.php'); ?>
							<div class="counter_form_title">Tambahkan Komentar</div>
							<input type="text" class="counter_input" placeholder="Nama:" required="required" name="nama">
							<input type="tel" class="counter_input" placeholder="Email:" required="required" name="email">
							<textarea class="counter_input counter_text_input" placeholder="Komentar:" required="required" name="komentar"></textarea>
							<button type="submit" class="counter_form_button" name="kom_user">Kirim</button>
						</form>
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