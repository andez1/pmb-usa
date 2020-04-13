<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="Website Resmi Universitas Siber Asia" />
	
	<!-- OG -->
	<meta property="og:title" content="Website Resmi Universitas Siber Asia" />
	<meta property="og:description" content="Website Resmi Universitas Siber Asia" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{ asset('homepages/images/favicon-usa.png') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('homepages/images/favicon-usa.png') }}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Universitas Siber Asia</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/assets.css') }}">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/typography.css') }}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/shortcodes/shortcodes.css') }}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/style.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('homepages/css/color/color-1.css') }}">
	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('homepages/vendors/revolution/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('homepages/vendors/revolution/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('homepages/vendors/revolution/css/navigation.css') }}">
	<!-- REVOLUTION SLIDER END -->	

	<!-- ADDING STYLES CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('homepages/css/add-styles.css') }}">
	<!-- ADDING STYLES END-->

</head>
<body id="bg">
<div class="page-wraper">
	
	<!-- Header Top ==== -->
    <header class="header rs-nav" style="height: 127px;">
    <div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="#"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>bak@usa.edu</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
							<li>
								<select class="header-lang-bx">
									<option data-icon="flag flag-id">Indonesia</option>
									<option data-icon="flag flag-us">English US</option>
									<!-- <option data-icon="flag flag-uk">English UK</option> -->
								</select>
							</li>
							<!-- <li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="{{ route('student.form_create_account') }}">Register</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
                        <a href="/"><img src="{{ asset('homepages/images/logo-usa.png') }}" alt=""></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="index.html"><img src="{{ asset('homepages/images/logo.png') }}" alt=""></a>
						</div>
                        <ul class="nav navbar-nav navigation">	
							<li>
								<a href="/">Beranda</a>
							</li>
							<li>
								<a href="{{ route('landing.about') }}">Tentang USA</i></a>
							</li>
							<li class="active"><a href="javascript:;">Akademik <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('landing.admission_info') }}">Info Pendaftaran</a></li>
									<li><a href="{{ route('landing.academic_info') }}">Info Akademik</a></li>
									<li><a href="{{ route('landing.academic_program') }}">Program Akademik</a></li>
									<li><a href="{{ route('landing.academic_guide') }}">Panduan Akademik</a></li>
									<li><a href="{{ route('landing.study_guide') }}">Panduan Pembelajaran</a></li>
								</ul>
							</li>
							<li>
								<a href="http://portal.koreaswt.com/apply/index.jsp">Pendaftaran</a>
							</li>
							<li>
								<a href="http://portal.koreaswt.com/portal/login">Sistem Akademik</a>
							</li>
						</ul>
						<div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- header END ==== -->
    <!-- Inner Content Box ==== -->
    <div class="page-content">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Panduan Akademik</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Akademik</li>
					<li>Panduan Akademik</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
		<div class="content-block">
            <!-- About Us ==== -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 m-b30">
							<div class="feature-container">
								<div class="icon-content mb-2">
									<div class="mb-5">
										<h6 class="text-center">Penyelenggaraan Pendidikan</h6>
										<p class="mb-0" style="text-align: justify">
											(1) Penyelenggaraan pendidikan yang digunakan adalah Sistem Kredit Semester (SKS);</br>
											(2)	Dalam SKS bobot mata kuliah diukur dengan satuan kredit semester (sks) yaitu :
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. satu sks matakuliah teori setara dengan 50 (lima puluh) menit kegiatan akademik tatap muka, ditambah 60 (enam puluh) menit kegiatan akademik terstruktur, ditambah 60 (enam puluh) menit kegiatan akademik mandiri;
											</div>
											<div style="padding-left: 3em; text-indent:-1.0em;">
												b.	satu sks matakuliah praktik di laboratorium, praktik studio, praktik bengkel, praktik lapangan, penelitian, pengabdian kepada masyarakat, dan/atau proses pembelajaran lain yang sejenis setara dengan170 (seratus tujuh puluh) menit;
											</div>
											<div style="padding-left: 3em; text-indent:-1.0em;">
												c.	satu sks pada proses pembelajaran berupa seminar atau bentuk lain yang sejenis setara dengan kegiatan tatap muka 100 (seratus) menit, kegiatan mandiri 70 (tujuh puluh) menit .
											</div>
											(3) Metode pembelajaran yang digunakan adalah pembelajaran yang berpusat pada mahasiswa yakni Student Centered Learning (SCL)
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Semester Antara</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Satu tahun akademik terdiri atas 2 (dua semester) dan 1 (satu) semester antara; 
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Semester antara sebagaimana dimaksud pada ayat (1) diselenggarakan: 
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. selama paling sedikit 8 (delapan) minggu;
											</div>
											<div style="padding-left: 3em; text-indent:-1.0em;">
												b. beban belajar mahasiswa paling banyak 9 (sembilan) sks;
											</div>
											<div style="padding-left: 3em; text-indent:-1.0em;">
												c. sesuai beban belajar mahasiswa untuk memenuhi capaian pembelajaran yang telah ditetapkan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Semester antara diselenggarakan dalam bentuk perkuliahan, tatap muka paling sedikit 16 (enam belas) kali termasuk ujian tengah semester dan ujian akhir semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Ketentuan tentang semester antara akan diatur dalam peraturan tersendiri .
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Beban Studi</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Beban studi Program Diploma III minimal 108 sks;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Beban studi Program Sarjana dan Diploma IV minimal 144 sks;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Beban Studi Program Profesi berjumlah minimal 24 sks;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Beban studi Program Magister minimal 36 sks;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Beban studi Program doktor minimal 42 sks.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Masa Studi</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Masa Studi Program Diploma (D III) : 5 (lima) semester dan maksimun 10 (sepuluh) semester
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Masa studi Program Sarjana dan D.IV:7 (tujuh) semester dan maksimum14 (empat belas) semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Masa studi Program Magister : 3 (tiga) semester dan maksimum 8 (delapan) semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Masa studi Program Doktor: 6 (enam) semester dan maksimum 14 (empat belas) semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Perhitungan masa studi tidak termasuk cuti akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Masa studi mahasiswa pindahan dan mahasiswa aktif kembali ditetapkan menggunakan rumus :
											</div>
											<div class="col-md-6 text-center">
												<img src="{{ asset('homepages/images/study/guide-masastudi.png') }}" alt="">
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Perpanjangan Masa Studi</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Perpanjangan masa studi hanya diberikan 1(satu) kali dengan batas waktu :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a.	Perpanjangan masa studi Program Sarjana dan Diploma adalah 2 (dua) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b.	Perpanjangan masa studi Program Magister adalah 2 (dua) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c.	Perpanjangan masa studi Program Doktor adalah 2 (dua) semester.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Mahasiswa yang berhak mendapatkan perpanjangan masa studi adalah :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a.	Mahasiswa Program Diploma III yang belum dapat menyelesaikan studi dalam 10 (sepuluh) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b.	Mahasiswa program Sarjana dan Diploma IV yang belum dapat menyelesaikan studi dalam waktu 14 (sepuluh) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c.	Mahasiswa program Magister yang belum dapat menyelesaikan studi dalam waktu 8 (delapan) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d.	Mahasiswa program Doktor yang belum dapat menyelesaikan studi dalam waktu 14 (empat belas) semester.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Prosedur perpanjangan masa studi diatur sebagai berikut :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a.	Mahasiswa mengajukan permohonan perpanjangan masa studi secara tertulis kepada Dekan/Direktur selambat-lambatnya 30 (tiga puluh) hari sebelum perkuliahan pada semester yang akan ditempuh, dengan melampirkan :
											</div>
											<div class="m-0" style="padding-left: 4em; text-indent:-1.0em;">
												1.	rekomendasi dosen Pembimbing Akademik;
											</div>
											<div class="m-0" style="padding-left: 4em; text-indent:-1.0em;">
												2.	rekomendasi Ketua Prodi;
											</div>
											<div class="m-0" style="padding-left: 4em; text-indent:-1.0em;">
												3.	pernyataan kesanggupan untuk menyelesaikan studi selama masa perpanjangan studi.
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b.	Dekan/Direktur mengusulkan perpanjangan masa studi mahasiswa kepada Rektor melalui Wakil Rektor Bidang Akademik.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Kurikulum</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Kurikulum yang berlaku di Prodi adalah Kurikulum Pendidikan Tinggi mengacu SNPT/KKNI;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Kurikulum dirancang dan disusun oleh Prodi dan disahkan Rektor untuk diimplementasikan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Kurikulum dirancang dan diterapkan oleh Prodi untuk menghasilkan capaian pembelajaran/profil lulusan/kompetensi lulusan sesuai dengan standar level di KKNI;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Standar level capaian pembelajaran untuk DIII adalah level 5, standar level capaian pembelajaran untuk DIV/S1 adalah level 6, standar level capaian pembelajaran untuk profesi adalah level 7, standar level capaian pembelajaran untuk S2 adalah level 8, standar level capaian pembelajaran untuk S3 adalah level 9;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Capaian pembelajaran/kompetensi terdiri atas komponen sikap/perilaku, pengetahuan, dan ketrampilan sesuai dengan jenjang level di KKNI;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Prodi wajib menyusun capaian pembelajaran sesuai dengan jenjang pendidikan dan level di KKNI;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(7)	Peninjauan kurikulum wajib dilakukan oleh Prodi minimum dalam jangka waktu 2 (dua) tahun terhitung sejak kurikulum tersebut diberlakukan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(8)	Peninjauan kurikulum dilakukan oleh Prodi dengan melibatkan pemangku kepentingan, pengguna lulusan, asosiasi Prodi sejenis, asosiasi profesi, dan alumni;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(9)	Kurikulum yang dirancang oleh Prodi wajib menggambarkan peta jalan (road map) capaian pembelajaran, kedalaman dan keluasan materi pembelajaran;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(10)	Kurikulum yang dirancang oleh Prodi wajib menyertakan Rencana Pembelajaran Semester  (RPS) di setiap sebaran semester dengan mengacu pada capaian pembelajaran yang telah ditetapkan Prodi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(11)	Kurikulum diterapkan oleh Prodi dengan mengadopsi karakteristik pembelajaran yang terdiri atas interaktif, holistik, integratif, saintifik, kontekstual, tematik, efektif, kolaboratif, dan berpusat pada mahasiswa atau Student Centered Learning (SCL);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(12)	Interaktif sebagaimana dimaksud pada ayat (11) menyatakan bahwa capaian pembelajaran lulusan diraih dengan mengutamakan proses interaksi dua arah antara mahasiswa dan dosen;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(13)	Holistik sebagaimana dimaksud pada ayat (11) menyatakan bahwa proses pembelajaran mendorong terbentuknya pola pikir yang komprehensif dan luas dengan menginternalisasi keunggulan dan kearifan lokal maupun nasional;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(14)	Integratif sebagaimana dimaksud pada ayat (11) menyatakan bahwa capaian pembelajaran lulusan diraih melalui proses pembelajaran yang terintegrasi untuk memenuhi capaian pembelajaran lulusan secara keseluruhan dalam satu kesatuan program melalui pendekatan antardisiplin dan multidisiplin;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(15)	Saintifik sebagaimana dimaksud pada ayat (11) menyatakan bahwa capaian pembelajaran lulusan diraih melalui proses pembelajaran yang mengutamakan pendekatan ilmiah sehingga tercipta lingkungan akademik yang berdasarkan sistem nilai, norma, dan kaidah ilmu pengetahuan serta menjunjung tinggi nilai-nilai agama dan kebangsaan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(16)	Kontekstual sebagaimana dimaksud pada ayat (11) menyatakan bahwa capaian pembelajaran lulusan diraih melalui proses pembelajaran yang disesuaikan dengan tuntutan kemampuan menyelesaikan masalah dalam ranah keahliannya;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(17)	Tematik sebagaimana dimaksud pada ayat (11) menyatakan bahwa capaian pembelajaran lulusan diraih melalui proses pembelajaran yang disesuaikan dengan karakteristik keilmuan program studi dan dikaitkan dengan permasalahan nyata melalui pendekatan transdisiplin;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(18)	Efektif sebagaimana dimaksud pada ayat (11) menyatakan bahwa capaian pembelajaran lulusan diraih secara berhasil guna dengan mementingkan internalisasi materi secara baik dan benar dalam kurun waktu yang optimum;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(19)	Kolaboratif sebagaimana dimaksud pada ayat (11) menyatakan bahwa capaian pembelajaran lulusan diraih melalui proses pembelajaran bersama yang melibatkan interaksi antar individu pembelajar untuk menghasilkan kapitalisasi sikap, pengetahuan, dan keterampilan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(20)	Berpusat pada mahasiswa sebagaimana dimaksud pada ayat (11) menyatakan bahwa capaian pembelajaran lulusan diraih melalui proses pembelajaran yang mengutamakan pengembangan kreativitas, kapasitas, kepribadian, dan kebutuhan mahasiswa, serta mengembangkan kemandirian dalam mencari dan menemukan pengetahuan.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Kelompok Mata Kuliah</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Kelompok matakuliah pada kurikulum Prodi terdiri atas
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												(a)	Mata kuliah Program Studi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												(b)	Mata kuliah Universitas (Mata kuliah Wajib Universitas dan Mata kuliah wajib pilihan Universitas);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Mata kuliah program studi adalah mata kuliah yang mencerminkan capaian pembelajaran yang khusus dari suatu program studi sesuai dengan rancangan Kurikulum Pendidikan Tinggi mengacu SNPT/KKNI;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Mata kuliah wajib Universitas adalah mata kuliah yang mencerminkan capaian pembelajaran sehingga terbentuk manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa dan berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, terampil, kompeten, sertamendorong pada pengembangan karakter dan integritas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Matakuliah Wajib Universitas pada program Diploma dan Sarjana sebagaimana dimaksud pada ayat (3) pasal ini adalah :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												1.	Pendidikan Agama;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												2.	Pendidikan Kewarganegaraan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												3.	Pendidikan Pancasila;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												4.	Bahasa Indonesia;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												5.	Kewirausahaan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												6.	Bahasa Inggris (TOEFL/IELTS/TOEIC).
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Mata kuliah pilihan Universitas adalah mata kuliah yang mencerminkan capaian pembelajaran sehingga terbentuk manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa dan berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, terampil, kompeten, serta mendorong pada pengembangan karakter dan integritas yakni;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												1.	Seni/olah raga;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												2.	Pendidikan anti korupsi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												3.	Pendidikan konservasi alam dan lingkungan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												4.	Bahasa asing lain selain Bahasa Inggris (Bahasa Korea,Mandarin, Jepang, Itali, Spanyol);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												5.	Keterampilan berkomunikasi.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Bentuk Pembelajaran</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Bentuk pembelajaran dapat berupa:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a.	ceramah dan diskusi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b.	responsi dan tutorial;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c.	tugas (tugas mandiri dan tugas kelompok;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d.	seminar; dan
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e.	praktikum, praktik studio, praktik bengkel, atau praktik lapangan.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Bentuk pembelajaran selain yang dimaksud pada ayat (5), bagi program pendidikan diploma empat, program sarjana, program magister, dan program doktoral, wajib ditambah bentuk pembelajaran berupa penelitian dan pengabdian kepada masyarakat;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3) Bentuk pembelajaran berupa penelitian dan/ atau pengabdian kepada masyarakat merupakan kegiatan mahasiswa di bawah bimbingan dosen dalam rangka pengembangan pengetahuan dan keterampilannya serta meningkatkan kesejahteran masyarakat dan daya saing bangsa.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Penilaian Pembelajaran</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Penilaian proses dan hasil belajar mahasiswa mencakup:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a.	prinsip penilaian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b.	teknik dan instrumen penilaian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c.	mekanisme dan prosedur penilaian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d.	pelaksanaan penilaian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e.	pelaporan penilaian; dan
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f.	kelulusan mahasiswa.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2) Prinsip penilaian mencakup prinsip edukatif, otentik, objektif, akuntabel, dan transparan yang dilakukan secara terintegrasi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Prinsip edukatif merupakan penilaian yang memotivasi mahasiswa agar mampu:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a.	memperbaiki perencanaan dan cara belajar dan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b.	meraih capaian pembelajaran lulusan.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Prinsip otentik merupakan penilaian yang berorientasi pada proses belajar yang berkesinambungan dan hasil belajar yang mencerminkan kemampuan mahasiswa pada saat proses pembelajaran berlangsung;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Prinsip objektif merupakan penilaian yang didasarkan pada stándar yang disepakati antara dosen dan mahasiswa serta bebas dari pengaruh subjektivitas penilai dan yang dinilai;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Prinsip akuntabel merupakan penilaian yang dilaksanakan sesuai dengan prosedur dan kriteria yang jelas, disepakati pada awal kuliah, dan dipahami oleh mahasiswa;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(7)	Prinsip transparan merupakan penilaian yang prosedur dan hasil penilaiannya dapat diakses oleh semua pemangku kepentingan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(8)	Instrumen penilaian terdiri atas penilaian proses dalam bentuk rubrik dan/atau penilaian hasil dalam bentuk portofolio atau karya desain;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(9)	Penilaian sikap dapat menggunakan teknik penilaian observasi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(10) Penilaian penguasaan pengetahuan, keterampilan umum, dan keterampilan khusus dilakukan dengan memilih satu atau kombinasi dari berbagi teknik dan instrumen penilaian sebagaimana dimaksud pada ayat (7) dan ayat (8).
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(11) Hasil akhir penilaian merupakan integrasi antara berbagai teknik dan instrumen penilaian yang digunakan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(12) Mekanisme penilaian terdiri atas:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. menyusun, menyampaikan, menyepakati tahap, teknik, instrumen, kriteria, indikator, dan bobot penilaian antara penilai dan yang dinilai sesuai dengan rencana pembelajaran;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. melaksanakan proses penilaian sesuai dengan tahap, teknik, instrumen, kriteria, indikator, dan bobot penilaian yang memuat prinsip penilaian ;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. memberikan umpan balik dan kesempatan untuk mempertanyakan hasil penilaian kepada mahasiswa; dan
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. mendokumentasikan penilaian proses dan hasil belajar mahasiswa secara akuntabel dan transparan.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(13) Prosedur penilaian mencakup tahap perencanaan, kegiatan pemberian tugas atau soal, observasi kinerja, pengembalian hasil observasi, dan pemberian nilai akhir;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(14) Prosedur penilaian pada tahap perencanaan dapat dilakukan melalui penilaian bertahap dan/atau penilaian ulang;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(15) Pelaksanaan penilaian dilakukan sesuai dengan rencana pembelajaran;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(16) Komponen penilaian pembelajaran meliputi: Sikap, Tugas, UTS dan UAS
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(17) Dosen pengampu mata kuliah wajib memberikan tugas terstruktur atau mandiri minimal 2 dalam satu semester dan tugas tersebut dimasukkan dalam Rencana Pembelajaran Semester)
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(18) Komponen penilaian Tugas merupakan jumlah total nilai semua tugas yang diberikan kepada mahasiswa sesuai rancangan Rencana Pembelajaran Semester (RPS)
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(19) Pelaksanaan penilaian dapat dilakukan oleh:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. dosen pengampu atau tim dosen pengampu;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. dosen pengampu atau tim dosen pengampu dengan mengikutsertakan mahasiswa; dan/atau
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c.	dosen pengampu atau tim dosen pengampu dengan mengikutsertakan pemangku kepentingan yang relevan.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(20) Pelaksanaan penilaian program doktor wajib menyertakan tim penilai eksternal dari perguruan tinggi yang berbeda.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Tugas Pembimbing Akademik</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Melakukan monitoring	terhadap nilai yang dicapai mahasiswa bimbingannya pada setiap akhir semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Membantu mahasiswa agar dapat mengembangkan sikap dan budaya akademik yang baik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Menyediakan Waktu untuk mahasiswa yang akan melakukan bimbingan mengenai permasalahan yang terkait proses belajar mengajar;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Pada akhir semester 2 (dua), PA harus dapat memberikan masukan kepada mahasiswa yang IPK- nya kurang dari 2,50 apakah mahasiswa tersebut akan tetap melanjutkan di jurusan masing-masing ataukah akan pindah ke jurusan lain yang ada di lingkungan Universitas Siber Asia;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Menyampaikan peringatan lisan atau tertulis kepada mahasiswa bimbingannya yang berprestasi kurang, memberikan laporan ke Ketua Program Studi dan selanjutnya dilakukan pemanggilan orang tua mahasiswa oleh PA, membuat jadwal kapan pertemuan dengan orang tua melalui  Ketua Program Studi;
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Wewenang Pembimbing Akademik</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Pembimbing Akademik (PA) berwenang untuk memanggil mahasiswa yang diduga melakukan pelanggaran tata tertib kehidupan kampus dan menyimpang dari kode etik mahasiswa;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Memberi pertimbangan dan persetujuan perpanjangan masa studi dan cuti akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Pembimbing Akademik (PA) berhak merekomendasikan mahasiswa bimbingannya yang berprestasi untuk mendapatkan beasiswa, dan PA harus mempunyai daftar mahasiswa bimbingannya yang belum dan sudah mendapatkan beasiswa;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	PA wajib melaporkan bimbingannya yang diduga melakukan pelanggaran kepada Pimpinan Fakultas/ Program Studi.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Tugas Mahasiswa</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Setiap mahasiswa wajib mengikuti tata tertib yang berlaku di Universitas, yang telah tertuang dalam Keputusan Rektor tentang Tata Tertib Kehidupan Kampus dan Keputusan Rektor tentang Kode Etik Mahasiswa Universitas dan Akademi-Akademi Nasional;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Mahasiswa wajib datang pada saat bimbingan akademik dan tidak dapat diwakilkan.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Hak Mahasiswa</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Setiap mahasiswa berhak mendapatkan bimbingan dari dosen PA minimal dua kali per semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Mahasiswa  yang  berprestasi  dan  belum   pernah  mendapat	beasiswa, berhak mengikuti seleksi beasiswa yang ditawarkan oleh Universitas atau pihak luar yang bekerjasama dengan Universitas.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Pengisian KRS</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Prodi membuat jadwal mata kuliah pada sistem informasi akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Mahasiswa melakukan pembayaran uang kuliah;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Sebelum mengisi KRS mahasiswa wajib meminta bimbingan dari PA yang sudah ditentukan oleh Ketua Program Studi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Mahasiswa melakukan pengisian KRS melalui sistem informasi akademik dan melakukan posting;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Dosen PA menyetujui KRS yang telah diposting oleh mahasiswa melalui sistem informasi akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Setelah disetujui Dosen PA, mahasiswa terdaftar sebagai peserta matakuliah;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(7)	Jika KRS belum disetujui PA, mahasiswa dapat menemui PA sesuai dengan pesan yang tertulis dalam aplikasi akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(8)	Apabila PA berhalangan, persetujuan KRS dapat dilakukan oleh Ketua Program Studi/Wakil Dekan;
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Pendaftaran Rencana Studi dan Cuti Akademik</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Kewajiban mahasiswa pada tiap awal semester adalah melakukan pendaftaran akademik, setelah menyelesaikan semua persyaratan administrasi keuangan sesuai ketentuan yang berlaku ;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Hak mahasiswa yang telah melakukan pendaftaran akademik adalah :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. mengikuti kegiatan perkuliahan dan kegiatan kemahasiswaan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. mengambil cuti akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Pendaftaran Rencana Studi diatur dengan ketentuan :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. mahasiswa menyelesaikan kewajiban administrasi keuangannya;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. pendaftaran Rencana Studi dapat menggunakan Sistem Informasi Akademik yang diakses secara on-line dengan ketentuan seperti yang tertuang dalam pasal 32;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. mahasiswa yang terlambat melakukan pengisian Kartu Rencana Studi (KRS) dikenakan denda yang ketentuannya diatur tersendiri.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Cuti Akademik dapat diberikan dengan ketentuan :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. memenuhi prosedur yang berlaku;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. telah menempuh perkuliahan sekurang-kurangnya 1 (satu) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. maksimum 2 (dua) semester dan tidak dapat diambil sekaligus;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Cuti akademik sebagaimana dimaksud pada ayat (4) pasal ini tidak mengurangi jumlah maksimum masa studi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Prosedur pendaftaran cuti akademik :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Mahasiswa mengajukan cuti dengan mengisi formulir pengajuan Cuti Akademik, yang diperoleh dari BAA;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Cuti akademik harus mendapatkan rekomendasi Dekan, dan diketahui oleh PA, Orangtua/Wali, dan BAK; yang dibuktikan dengan tandatangan pada formulir Cuti Akademik;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Mahasiswa membayar biaya Cuti Akademik ke BAK;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Formulir Cuti Akademik dan bukti pembayaran dikembalikan ke BAA;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. BAA membuatkan Surat Keputusan Rektor tentang Cuti Akademik mahasiswa bersangkutan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. BAA memberikan Surat Keputusan Cuti Akademik kepada mahasiswa bersangkutan dengan tembusan ke Fakultas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(7)	Mahasiswa yang tidak melaksanakan administrasi akademik sebagaimana dimaksud dalam ayat (1) pasal ini tidak diijinkan mengikuti seluruh kegiatan akademik dan kegiatan kemahasiswaan.
											</div>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- About Us END ==== -->
		</div>
		<!-- Page Content Box END ==== -->
    </div>
    <!-- Inner Content Box END ==== -->
    <!-- Footer ==== -->
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="/"><img src="{{ asset('homepages/images/logo-usa.png') }}" alt="" width="211px" /></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="http://portal.koreaswt.com/apply/index.jsp" class="btn ">Daftar Sekarang</a>
						</div>
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Ikuti Kami</h5>
							<p class="m-b20">Masukkan email anda untuk mengetahui info terupdate dari kami</p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="#" method="post">
									<div class="ajax-message"></div>
									<div class="input-group">
										<input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
										</span> 
									</div>
								</form>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">USA</h5>
									<ul>
										<li><a href="#">Beranda</a></li>
										<li><a href="#">Tentang Kami</a></li>
										<li><a href="#">Tanya Jawab</a></li>
										<li><a href="#">Kontak</a></li>
									</ul>
								</div>
							</div>
							<div class="col-8 col-lg-8 col-md-8 col-sm-8">
								<div class="widget footer_widget">
									<h5 class="footer-title">Program Studi</h5>
									<ul>
										<li><a href="http://educhamp.themetrades.com/admin/index.html">Penyiaran dan Komunikasi Digital</a></li>
										<li><a href="blog-classic-grid.html">Manajemen Kontemporer</a></li>
										<li><a href="portfolio.html">Akuntansi dan Perpajakan</a></li>
										<li><a href="event.html">Sistem Informasi</a></li>
										<li><a href="event.html">Teknologi Informasi</a></li>
									</ul>
								</div>
							</div>
							<!-- <div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Courses</h5>
									<ul>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="courses-details.html">Details</a></li>
										<li><a href="membership.html">Membership</a></li>
										<li><a href="profile.html">Profile</a></li>
									</ul>
								</div>
							</div> -->
						</div>
                    </div>
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Galeri Kami</h5>
                            <ul class="magnific-image">
								<li><a href="{{ asset('homepages/images/gallery/pic1.jpg') }}" class="magnific-anchor"><img src="{{ asset('homepages/images/gallery/pic1.jpg') }}" alt=""></a></li>
								<li><a href="{{ asset('homepages/images/gallery/pic2.jpg') }}" class="magnific-anchor"><img src="{{ asset('homepages/images/gallery/pic2.jpg') }}" alt=""></a></li>
								<li><a href="{{ asset('homepages/images/gallery/pic3.jpg') }}" class="magnific-anchor"><img src="{{ asset('homepages/images/gallery/pic3.jpg') }}" alt=""></a></li>
								<li><a href="{{ asset('homepages/images/gallery/pic4.jpg') }}" class="magnific-anchor"><img src="{{ asset('homepages/images/gallery/pic4.jpg') }}" alt=""></a></li>
								<li><a href="{{ asset('homepages/images/gallery/pic5.jpg') }}" class="magnific-anchor"><img src="{{ asset('homepages/images/gallery/pic5.jpg') }}" alt=""></a></li>
								<li><a href="{{ asset('homepages/images/gallery/pic6.jpg') }}" class="magnific-anchor"><img src="{{ asset('homepages/images/gallery/pic6.jpg') }}" alt=""></a></li>
								<li><a href="{{ asset('homepages/images/gallery/pic7.jpg') }}" class="magnific-anchor"><img src="{{ asset('homepages/images/gallery/pic7.jpg') }}" alt=""></a></li>
								<li><a href="{{ asset('homepages/images/gallery/pic8.jpg') }}" class="magnific-anchor"><img src="{{ asset('homepages/images/gallery/pic8.jpg') }}" alt=""></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net"><?php echo date("Y"); ?> | Copyright © Universitas Siber Asia</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
</div>

<!-- External JavaScripts -->
<script src="{{ asset('homepages/js/jquery.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('homepages/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('homepages/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('homepages/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('homepages/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('homepages/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('homepages/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('homepages/js/functions.js') }}"></script>
<script src="{{ asset('homepages/js/contact.js') }}"></script>
<!-- <script src="{{ asset('homepages/vendors/switcher/switcher.js') }}"></script> -->
<!-- Revolution JavaScripts Files -->
<script src="{{ asset('homepages/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('homepages/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script>
jQuery(document).ready(function() {
	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"assets/vendors/revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"on",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style: "uranus",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},
				
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[768,600,600,600],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});	
</script>
<script>
    $(document).ready(function() {
		$('a[href*=\\#]').bind('click', function(e) {
				e.preventDefault(); // prevent hard jump, the default behavior

				var target = $(this).attr("href"); // Set the target as variable

				// perform animated scrolling by getting top-position of target-element and set it as scroll target
				$('html, body').stop().animate({
						scrollTop: $(target).offset().top
				}, 600, function() {
						location.hash = target; //attach the hash (#jumptarget) to the pageurl
				});

				return false;
		});
	});

	$(window).scroll(function() {
			var scrollDistance = $(window).scrollTop();

			// Show/hide menu on scroll
			//if (scrollDistance >= 850) {
			//		$('nav').fadeIn("fast");
			//} else {
			//		$('nav').fadeOut("fast");
			//}
		
			// Assign active class to nav links while scolling
			$('.page-section').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
					$('.navigation li.active').removeClass('active');
					$('.navigation li').eq(i).addClass('active');
				}
			});
	}).scroll();
</script>
</body>

</html>
