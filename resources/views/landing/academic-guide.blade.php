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
							<li><a href="{{ route('landing.faq') }}"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
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
							<li><a href="javascript:;">Tentang USA <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('landing.about') }}">Tentang USA</i></a></li>
									<li><a href="{{ route('landing.marketing_promosi') }}">Marketing dan Promosi</a></li>
									<li><a href="{{ route('landing.pelatihan_bersertifikasi') }}">Pelatihan Bersertifikasi</a></li>
									<li><a href="{{ route('landing.teaser_video_pembelajaran') }}">Teaser Video Pembelajaran</a></li>
									<li><a href="{{ route('landing.faq') }}">FAQ</a></li>
								</ul>
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
										<h4 class="text-center">Kurikulum dan Mata Kuliah</h4>
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
									<div class="mb-5">
										<h6 class="text-center">Administrasi Perkuliahan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Pelayanan administrasi perkuliahan dilakukan secara terpusat di Sentra Pelayanan Akademik (SPA);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Mahasiswa yang tidak mengisi Kartu Rencana Studi (KRS) seperti yang tercantum pada ayat (3) pasal 48, maka namanya tidak akan tercantum dalam Daftar Peserta Mata Kuliah (DPMK);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Mahasiswa tidak diperkenankan mengganti jadwal mata kuliah yang sudah di input dalam Kartu Rencana Studi tanpa sepengetahuan Pembimbing Akademik.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Daftar Peserta Mata Kuliah (DPMK)</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	DPMK memuat peserta matakuliah sesuai dengan pendaftaran rencana studi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Jumlah peserta matakuliah untuk tiap kelas minimum 10 (sepuluh) mahasiswa dan maksimum 40 (delapan puluh) mahasiswa, kecuali untuk Prodi yang tidak sanggup memenuhi ketentuan tersebut;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Mahasiswa yang namanya tidak tercantum dalam DPMK tidak diperkenankan mengikuti perkuliahan, kecuali menjadi mahasiswa pendengar (sit in) yang telah mendapat ijin dari Dosen pengampu.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Aktivitas Perkuliahan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Aktivitas perkuliahan terdiri atas perkuliahan reguler, perkuliahan modus ganda/blended learning, pendidikan jarak jauh (PJJ), dan perkuliahan non reguler (karyawan) /perkuliahan antar lembaga;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Perkuliahan reguler dan non reguler :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. wajib bagi mahasiswa pada seluruh Prodi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. dilaksanakan dengan cara tatap muka terjadwal dikelas dan/atau e-learning, dengan komposisi untuk perkuliahan regular 14 pertemuan tatap muka dalam bentuk ceramah, seminar  atau diskusi, praktikum, kerja lapangan atau magang, yang pengaturannya disesuaikan dengan kebutuhan, bobot dan sifat matakuliah. Untuk perkuliahan non reguler dengan komposisi 12 pertemuan online via LMS (Learning Management System) dan 2 perkuliahan on class.
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Jika diperlukan dari 14 pertemuan tatap muka, dapat menghadirkan seseorang yang dinilai mempunyai pengetahuan, keahlian, pengalaman tertentu untuk berbagi dalam bidangnya sebagai dosen tamu.
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. dilaksanakan dalam satu semester dengan jumlah pertemuan 16 (enambelas) minggu/semester terdiri dari :
											</div>
											<div class="m-0" style="padding-left: 4em; text-indent:-1.0em;">
												1. Enam belas (14) minggu perkuliahan;
											</div>
											<div class="m-0" style="padding-left: 4em; text-indent:-1.0em;">
												2. Dua (2) minggu pengujian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. matakuliah yang ditawarkan disesuaikan dengan kurikulum Prodi.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Pendidikan Jarak Jauh (PJJ) merupakan proses belajar mengajar yang dilakukan melalui penggunaan berbagai media komunikasi dengan tujuan:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. memberikan layanan Pendidikan Tinggi kepada kelompok masyarakat yang tidak dapat mengikuti pendidikan secara tatap muka atau reguler;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. memperluas akses serta mempermudah pelayanan Pendidikan Tinggi dalam pendidikan dan pembelajaran;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. perkuliahan PJJ diatur dalam ketentuan tersendiri.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Penyelenggaraan Perkuliahan antar Perguruan Tinggi, dan Perkuliahan ekstensi, akan diatur kemudian dengan ketentuan tersendiri.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Koordinator Mata Kuliah</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Matakuliah paralel dan Team Teaching dikoordinir oleh seorang dosen dengan syarat:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. sekurang-kurangnya berpendidikan magister dengan kepangkatan sekurang-kurangnya Lektor;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. koordinator matakuliah diangkat dengan keputusan Dekan, atas usul ketua Prodi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. koordinator kelompok matakuliah universitas diangkat dengan surat tugas dari Wakil Rektor Bidang Akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Mata kuliah lintas Prodi dan lintas Fakultas dikoordinir oleh Prodi dan Fakultas induk;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Koordinator matakuliah mempunyai tugas:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a.	mengkoordinasi perumusan profil dan kompotensi matakuliah, menyusun RPS bersama- bersama kelompok dosen;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b.	menggantikan atau mencarikan pengganti bagi dosen yang tidak hadir dalam kelompok yang sama;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c.	memberikan laporan tertulis kepada Ketua Prodi mengenai pelaksanaan perkuliahan bagi matakuliah yang ada di bawah koordinasinya.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Rencana Pembelajaran Semester (RPS)</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Perencanaan proses pembelajaran disusun untuk setiap mata kuliah dan disajikan dalam rencana pembelajaran semester (RPS);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Rencana pembelajaran semester (RPS) yang dimaksud pada ayat (1) ditetapkan dan dikembangkan oleh dosen secara mandiri atau bersama dalam kelompok keahlian suatu bidang ilmu pengetahuan dan/atau teknologi dalam program studi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Rencana pembelajaran semester (RPS) paling sedikit memuat :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. nama program studi, nama dan kode mata kuliah, semester, sks, nama dosen pengampu;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. capaian pembelajaran lulusan yang dibebankan pada mata kuliah;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. kemampuan akhir yang direncanakan pada tiap tahap pembelajaran untuk memenuhi capaian pembelajaran lulusan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. bahan kajian yang terkait dengan kemampuan yang akan dicapai;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. metode pembelajaran;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. waktu yang disediakan untuk mencapai kemampuan pada tiap tahap pembelajaran;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												g. pengalaman belajar mahasiswa yang diwujudkan dalam deskripsi tugas yang harus dikerjakan oleh mahasiswa selama satu semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												h. kriteria, indikator, dan bobot penilaian; dan
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												i. daftar referensi yang digunakan.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Rencana Pembelajaran Semester	(RPS)	wajib ditinjau dan disesuaikan secara berkala dengan perkembangan ilmu pengetahuan dan teknologi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	RPS harus bersifat dinamis dan selalu disesuaikan dengan perkembangan substansi bahan ajar yang diberikan pada tiap semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Paling Lambat dua minggu sebelum perkuliahan berlangsung Rencana Pembelajaran Semester (RPS) harus sudah di-upload oleh Dosen/Koordinator ke dalam Sistem Informasi Akademik.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Tata Tertib Perkuliahan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												Tata tertib kehadiran selama memberikan/mengikuti perkuliahan:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Dosen dan mahasiswa diharuskan hadir sesuai jadwal kuliah;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Dosen tidak diperkenankan mengganti jadwal perkuliahan tanpa seijin pimpinan Fakultas;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Toleransi keterlambatan adalah 15 (lima belas) menit dari waktu terjadwal;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Kehadiran dosen adalah 100% (seratus persen) dari jumlah tatap muka terjadwal;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. Jika dosen berhalangan hadir pada waktu yang telah ditentukan, maka dosen wajib menggantikan pada waktu lain dengan terlebih dahulu melaporkan ke SPA-BAA;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. Perkuliahan on-line maksimum 2 (dua kali) untuk perkuliahan regular dan 8 (delapan kali) untuk perkuliahan non reguler.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Waktu dan Tempat Perkuliahan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Waktu perkuliahan adalah :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. waktu perkuliahan regular dilaksanakan dari hari Senin s/d Jumat, pukul 08.00 s/d 17.00 WIB;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. perkuliahan non reguler ( kelas karyawan) dilaksanakan dari hari Senin s/d Jumat, pukul 18.30 s/d 21.30 WIB dan hari Sabtu dari jam 08.00 s/d 19.00 WIB;
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Evaluasi Penyelenggaraan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1) Evaluasi terhadap penyelenggaraan perkuliahan meliputi studi mahasiswa, kinerja dosen dan institusi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Evaluasi sebagaimana dimaksud pada ayat (1) pasal ini dilakukan tiap semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Cara dan prosedur evaluasi kinerja dosen dan institusi diatur kemudian.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Evaluasi Perkuliahan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Evaluasi perkuliahan dilakukan dua kali dalam satu semester untuk menilai capaian pembelajaran pada setiap mata kuliah;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Teknik penilaian dapat berupa observasi, partisipasi, tes lisan, tes tertulis, dan unjuk kerja meliputi 2 tugas individu dan 4 tugas kelompok yang dipresentasikan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Teknik penilaian tes tertulis dilakukan dua kali untuk tiap mata kuliah selama satu semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Teknik penilaian tes tertulis Ujian Tengah dan Akhir semester (UTS dan UAS) dilakukan secara terstruktur yang dikoordinir oleh Sentra Pelayanan Akademik - BAA;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Ujian Akhir Semester hanya boleh diikuti oleh mahasiswa dengan kehadiran minimal 80% dari seluruh kegiatan perkuliahan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Proses penilaian dilakukan sesuai Rencana Pembelajaran Semester (RPS);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(7)	Penilaian yang diberikan dosen kepada mahasiswa dalam bentuk angka antara 0 dan 100.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(8)	Komponen penilaian untuk setiap mata kuliah terdiri : (karakter : sikap, perilaku, disiplin. Integritas : jujur, tanggung jawab, peduli); Tugas-tugas; UTS, dan UAS;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(9)	Nilai Akhir (NA) dapat dibatalkan/digugurkan apabila peserta ujian melanggar tata tertib ujian dan peraturan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(10) Apabila komponen penilaian seperti yang tertera pada ayat 8 pasal ini tidak terpenuhi, sehingga nilai mahasiswa kurang dan /atau tidak lulus maka mahasiswa diberi kesempatan untuk memperbaiki nilai matakuliah, yang ketentuannya diatur tersendiri.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Nilai Akhir MataKuliah</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Nilai akhir suatu matakuliah menunjukkan hasil evaluasi setiap matakuliah yang ditempuh selama satu semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Nilai Akhir (NA) suatu matakuliah merupakan gabungan dari penilaian pada pasal 59 ayat 8;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	NA suatu matakuliah Program Sarjana dan Program Diploma dinyatakan dalam bentuk huruf,  yang merupakan konversi dari nilai angka ke nilai huruf dan padanya diberikan bobot tertentu sebagai berikut :
											</div>
											<div class="text-center">
												<img src="{{ asset('homepages/images/academic-guide1.png') }}" style="width: 40%;" alt="">
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	NA suatu matakuliah, Program Pascasarjana dinyatakan dalam bentuk huruf, yang merupakan konversi dari nilai angka ke nilai huruf dan padanya diberikan bobot tertentu sebagai berikut:
											</div>
											<div class="text-center">
												<img src="{{ asset('homepages/images/academic-guide2.png') }}" style="width: 40%;" alt="">
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Batas kelulusan matakuliah</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Kelulusan suatu matakuliah adalah minimal nilai C untuk Program Sarjana dan Program Diploma, serta minimal nilai B untuk Program Magister dan Program Doktor;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Nilai Karya Tulis Akhir pada Program Diploma, Skripsi pada Program Sarjana, Tesis pada Program Magister dan Disertasi pada Program Doktor minimal nilai B.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Pelaporan nilai akhir matakuliah</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Pelaporan penyelenggaraan kegiatan akademik dilakukan oleh BAA tiap semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Pelaporan sebagaimana dimaksud pada ayat (1) pasal ini disesuaikan dengan format dari Dirjen Kemenristekdikti
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Indek prestasi semester</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Hasil penilaian capaian pembelajaran lulusan disetiap semester dinyatakan dengan indeks prestasi semester (IPS);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	IPS dihitung dengan rumus :
											</div>
											<div class="text-left">
												<img src="{{ asset('homepages/images/academic-guide3.png') }}" style="width: 30%;" alt="">
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	IPK digunakan untuk menentukan pemberian penghargaan atau ancaman/sanksi terhadap mahasiswa.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Sistem Informasi Akademik</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Sistem Informasi Akademik dapat diakses oleh mahasiswa, dosen, Dekan, Wakil Dekan, Ketua Program Studi, Sekretaris Program Studi, Kepala Unit Penjaminan Mutu, Kepala Tata Usaha, Staf Tata Usaha, dan orangtua/wali untuk mengevaluasi capaian pembelajaran mahasiswa;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Sistem Informasi Akademik dikelola oleh Badan Pengelola Sistem Informasi disingkat BPSI
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h4 class="text-center">TUGAS AKHIR</h4>
										<h6 class="text-center">Jenis dan Bobot sks</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Sistem Informasi Akademik dapat diakses oleh mahasiswa, dosen, Dekan, Wakil Dekan, Ketua Program Studi, Sekretaris Program Studi, Kepala Unit Penjaminan Mutu, Kepala Tata Usaha, Staf Tata Usaha, dan orangtua/wali untuk mengevaluasi capaian pembelajaran mahasiswa;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Sistem Informasi Akademik dikelola oleh Badan Pengelola Sistem Informasi disingkat BPSI
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Jenis dan Bobot sks</h6>
										<p class="mb-0" style="text-align: justify">
											Tugas Akhir wajib disusun oleh mahasiswa, yaitu berupa :
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Karya Tulis Akhir adalah karya tulis ilmiah untuk mahasiswa Program Diploma;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Skripsi adalah karya tulis ilmiah akhir untuk mahasiswa Program Sarjana;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Tesis adalah adalahkarya tulis ilmiah akhir untuk mahasiswa Program Magister (S2);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Disertasi adalah karya tulis ilmiah akhir untuk mahasiswa Program Doktor (S3);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Bobot kredit tugas akhir :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Karya Tulis Ilmiah Diploma setara dengan 6 (enam) sks;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Skripsi setara dengan  6 (enam) sks;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Tesis setara  dengan 8 (delapan) sks;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Disertasi setara dengan 8 (delapan) sks.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Syarat untuk mengajukan penyusunan Tugas Akhir :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. mengajukan proposal;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. telah lulus minimal 90 sks pada Program Diploma III;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. telah lulus minimal 120 sks pada Program Sarjana dan Program D.IV;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. telah lulus minimal 32 sks pada Program Magister;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. telah lulus minimal 27 sks pada Program Doktor.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(7)	Prosedur penetapan judul dan pembimbing Tugas Akhir ditetapkan dengan peraturan tersendiri.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(8)	Mahasiswa dapat memilih Tugas Akhir jalur publikasi sesuai dengan jenjang studi, yang diatur dengan Keputusan Rektor tersendiri tentang Tugas Akhir Jaur Publikasi.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Format Penulisan Tugas Akhir dan Jangka Waktu Penulisan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Format penulisan proposal dan Tugas Akhir diatur dalam ketentuan tersendiri;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Program Sarjana, 2 (dua) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Program Magister, 2 (dua) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Program Doktor, 4 (empat) semester.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Jangka waktu maksimum penulisan Tugas Akhir adalah sebagai berikut :
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Bila jangka waktu maksimum tidak terpenuhi, perpanjangan waktu diberikan selama 1 (satu) semester;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Jika Tugas Akhir tidak dapat diselesaikan dalam jangka waktu maksimum sebagaimana dimaksud pada ayat (3) pasal ini, mahasiswa harus mengajukan judul baru.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Tugas Akhir bagi mahasiswa program magister dan doktoral wajib dipublikasikan dalam jurnal bereputasi.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Pembimbing Tugas Akhir</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Dosen sebagai pembimbing tugas akhir bertugas dan bertanggung jawab untuk :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. membimbing penyusunan rencana (proposal) penelitian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. memeriksa konsep, kerangka, dan arah serta sasaran rencana penelitian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. memonitor pelaksanaan penelitian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. membimbing penyusunan tugas akhir;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Pembimbing tugas akhir untuk setiap mahasiswa terdiri atas 1 (satu) s/d 2(dua) orang dosen.
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. pembimbing pertama dengan syarat sesuai dengan bidang ilmunya, jabatan akademik minimal Lektor dengan pendidikan magister atau Asisten Ahli dengan pendidikan doktor bagi Program Sarjana dan/atauprogramDiploma, jabatan akademik minimal Lektor dengan pendidikan doktor untuk program magister, jabatan akademik minimal Lektor Kepala dengan pendidikan doktor untuk program doktor;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. pembimbing pendamping dengan syarat sesuai dengan bidang ilmunya, jabatan akademik minimal Asisten Ahli bagi program Sarjana dan programDiploma, jabatan akademik minimal Assisten Ahli dengan pendidikan doktor untuk program magister, jabatan akademik minimal Lektor Kepala dengan pendidikan doktor untuk program doktor;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Apabila diperlukan tenaga ahli non akademikdan/atau dari institusi selain Unas dapat ditunjuk sebagai pembimbing tugas akhir atau penguji;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Pembimbing ditunjuk dan diberhentikan dengan surat keputusan Dekan/Direktur atas usul Ketua Prodi.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Dosen pembimbing tugas akhir dapat diganti apabila dosen yang bersangkutan:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. tugas belajar;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. mengundurkan diri dan disetujui oleh ketua Prodi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. berhalangan tetap;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. mahasiswa mengganti topik/materi tugas akhir;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. pensiun; atau
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. alasan lain berdasarkan pertimbangan ketua Prodi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Penggantian pembimbing tugas akhir ditetapkan dengan surat keputusan Dekan/Direktur atas usul Ketua Prodi.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Ujian Tugas Akhir</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Ujian Tugas Akhir merupakan ujian penutup dari keseluruhan kewajiban akademik setiap mahasiswa;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Ujian Tugas Akhir dapat diikuti oleh mahasiswa dengan ketentuan :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. mengisi kartu rencana studi dan mencantumkan Tugas Akhir pada semester berjalan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. telah memperoleh persetujuan dari dosen pembimbing Tugas Akhir;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. telah lulus semua matakuliah sesuai ketentuan Prodi yang bersangkutan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3) Memiliki Satuan Kegiatan Prestasi Mahasiswa (SKPM) yang terdiri dari Kompetensi Penunjang Langsung (KPL); Kompetensi Penunjang Tambahan (KPT) dan Kompetensi Penunjang Pelengkap (KPP) dengan jumlah minimal 1000 point ;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Mahasiswa yang tidak lulus ujian Tugas Akhir dapat menempuh ujian ulangan maksimum 2 (dua) kali dalam semester yang sama atau pada semester berikutnya;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Jika mahasiswa tidak lulus pada ujian ulangan sebagaimana dimaksud pada ayat (3) pasal ini, maka mahasiswa yang bersangkutan harus membuat Tugas Akhir yang baru. 
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Penilaian Ujian Tugas Akhir</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Penilaian ujian Tugas Akhir dilakukan oleh penguji pada waktu dan tempat yang sama;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Penilaian ujian Tugas Akhir didasarkan pada :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Materi atau isi meliputi:orisinalitas materi, format, sistematika penulisan ilmiah dan kemutakhiran materi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Penguasaan materi saat ujian yang menyangkut tingkat pemahaman materi, kemampuan menjawab serta menjelaskan pertanyaan, kemampuan mempertahankan tulisan  dan pengetahuan umum yang terkait dengan topik tugas akhir;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Penguasaan presentasi menyangkut kesiapan presentasi, tampilan lembar presentasi, penggunaan bahasa verbal, alur presentasi, kemuthakhiran presentasi
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Tata krama dan etika, sikap positif, karakter, dan akhlak.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Komposisi penilaian tugas akhir terdiri atas materi (40%), penguasaan materi (30%),penguasaan presentasi (20%), tata krama dan etika (10 %).
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Perbaikan tugas akhir bagi mahasiswa yang sudah dinyatakan lulus dalam ujian Skripsi dan Karya Tulis Akhir adalah 1(satu) bulan, dan untuk Tesis dan Disertasi adalah 3 (tiga bulan).
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Syarat Kelulusan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Syarat kelulusan Program Diploma, Sarjana dan Pascasarjana minimal mempunyai 3 (tiga) sertifikat kompetensi penunjang langsung profesi sesuai pada masing-masing peminatan program studi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Sertifikat kompetensi penunjang tambahan berupa kompetensi tambahan seperti keahlian bahasa internasional;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Sertifikat kompetensi penunjang pelengkap berupa kompetensi penunjang pelengkap seperti aktif dalam organisasi , menang dalam lomba yang diselenggarakan oleh instansi yang kredibel;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Persyaratan yang dimaksud pada ayat (1), (2) dan (3) wajib di upload oleh mahasiswa dalam aplikasi akademik secara bertahap selama menjadi mahasiswa Universitas Siber Asia untuk diverifikasi oleh Pembimbing Akademik dan/atau Ketua Prodi .
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Kelulusan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Standar kelulusan suatu Prodi:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												IPK minimum 2,5 tanpa nilai D untuk Program Sarjana dan Diploma dan akan dinaikkan secara bertahap; IPK minimum 3 tanpa nilai C untuk Program S-2; IPK minimum 3,25 tanpa nilai C untuk Program Doktor;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Predikat kelulusan:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. program Sarjana dan Diploma
											</div>
											<div class="text-center">
												<img src="{{ asset('homepages/images/academic-guide4.png') }}" style="width: 35%;" alt="">
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. program Magister dan Doktor
											</div>
											<div class="text-center">
												<img src="{{ asset('homepages/images/academic-guide5.png') }}" style="width: 35%;" alt="">
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Hak Lulusan</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Setiap lulusan Universitas berhak memperoleh ijazah, transkrip akademik, dan surat keterangan pendamping ijazah (SKPI);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Setiap lulusan program studi di lingkungan Universitas diberi gelar sesuai dengan peraturan perundang-undangan yang berlaku.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Wisuda</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Mahasiswa yang sudah lulus suatu Prodi diwajibkan mengikuti wisuda;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Wisuda sebagaimana dimaksud pada ayat (1) pasal ini dilaksanakan 1 (satu) sampai 2 (dua) kali dalam 1 (satu) Tahun Akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Mahasiswa yang sudah lulus dan/atau mengikuti wisuda harus dilaporkan ke Kemenristekdikti melalui Kopertis Wilayah III/ Lembaga Layanan Perguruan Tinggi selambat-lambatnya empat belas (14) hari kerja sebelum pelaksanaan wisuda.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Ijazah, Transkrip Akademik, dan Surat Keterangan Pendamping Ijazah (SKPI)</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Ijazah diberikan kepada lulusan perguruan tinggi disertai dengan transkrip dan Surat Keterangan Pendamping Ijazah (SKPI);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Ijazah, transkrip akademik dan SKPI dibuat dalam dua bahasa (bahasa Indonesia dan bahasa Inggris);
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Ijazah, transkrip akademik dan surat keterangan pendamping ijazah harus dibuat berdasarkan nama-nama kelulusan sebagaimana yang tercantum dalam Keputusan Dekan dan diproses sesuai prosedur yang ditetapkan oleh Universitas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Semua mahasiswa yang sudah dinyatakan lulus berhak mendapatkan ijazah dan transkrip akademik, surat keterangan pendamping ijazah setelah memenuhi seluruh kewajiban;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Dekan menugaskan Ketua Prodi dan/atau lainnya dalam suatu tim untuk mengecek keabsahan dan kesempurnaan ijazah dan transkrip akademik, surat keterangan pendamping ijazah;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Perbaikan kesalahan pada ijazah atau transkrip akademik yang sedang diproses, harus sepengetahuan Wakil Rektor Bidang Akademik;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(7)	Tidak diperkenankan memberikan tanda apapun di lembar ijazah yang sudah dikoreksi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(8)	Ijazah, transkrip akademik, dan surat keterangan pendamping ijazah diberikan pada saat wisuda, kecuali dalam hal khusus.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(9)	Ijazah dan transkrip akademik Program Diploma, Sarjana dan Pascasarjana, ditandatangani oleh Dekan/Direktur dan Rektor;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(10) Surat keterangan pendamping ijazah ditandatangani Dekan/Direktur dan Rektor;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(11) Legalisasi salinan ijazah dan transkrip akademik Program Sarjana, Diploma IV ditandatangani oleh Dekan, Program Diploma dan Program Pascasarjana ditandatangani oleh Direktur.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Format Ijazah ,Transkrip Akademik, dan Surat Keterangan Pendamping Ijazah</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1). Isi dari ijazah yang tercetak memuat :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Penomoran Ijazah Nasional (PIN) dari Kemeristekdikti;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Logo Universitas Siber Asia;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Nama Universitas;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Nomor Keputusan Pendirian Universitas Siber Asia;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. Program Pendidikan (Diploma III, Diploma IV, Sarjana, Magister, Doktor);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. Nama Program studi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												g. Fakultas;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												h. Nama pemilik ijazah;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												i. Nomor Pokok Mahasiswa (NPM);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												j. Tempat dan tanggal lahir pemilik ijazah;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												k. Gelar yang diberikan beserta singkatannya;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												l. Tanggal , bulan dan tahun kelulusan (tanggal, bulan, dan tahun yudisium)
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												m. Tempat, tanggal, bulan dan tahun penerbitan ijazah (tanggal, bulan dan tahun Keputusan Rektor tentang Wisuda);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												n. Nama dan tanda tangan Rektor yang aktif;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												o. Nama dan tanda tangan Dekan/Direktur yang aktif;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												p. Foto pemilik ijazah.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2). Isi dari transkrip akademik yang tercetak memuat :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Logo Universitas Siber Asia;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Nama Universitas;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Nomor Keputusan pendirian Universitas Siber Asia;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Nomor transkrip akademik;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. Program Pendidikan (Diploma III, Diploma IV, Sarjana, Magister, Doktor);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. Nama Program Studi;dan nama konsentrasi studi (kalau ada);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												g. Nama Lengkap Pemilik Transkrip Akademik;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												h. Tempat dan tanggal lahir pemilik transkrip akademik;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												i. Nomor pokok mahasiswa (NPM);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												j. Tanggal, bulan, dan tahun kelulusan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												k. Tempat, tanggal, bulan, dan tahun penerbitan transkrip akademik;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												l. Nama dan tanda tangan Rektor dan Dekan/Direktur aktif;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												m. Stempel Universitas;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												n. Foto mahasiswa;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												o. Seluruh mata kuliah yang telah ditempuh, bobot sks, dan nilai;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												p. Judul Skripsi, Tesis, Disertasi/ Tugas Akhir ditulis dengan huruf kapital pada setiap awal kata;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												q. Indeks prestasi kumulatif;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												r. Predikat kelulusan.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Isi Surat Keterangan Pendamping Ijazah (SKPI) memuat :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Logo Universitas;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Nama Universitas;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Nomor Keputusan pendirian Universitas Siber Asia;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Nama Program Studi;dan nama konsentrasi studi (kalau ada);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. Nama Lengkap Pemilik SKPI;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. Tempat dan tanggal lahir pemilik SKPI;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												g. Nomor pokok mahasiswa (NPM);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												h. Tanggal, bulan, dan tahun kelulusan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												i. Penomoran Ijazah Nasional
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												j. Nomor SKPI;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												k. Gelar yang diberikan beserta singkatannya;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												l. Jenis pendidikan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												m. Program pendidikan (Diploma III, Diploma IV, Sarjana, Magister, Doktoral );
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												n. Capaian pembelajaran lulusan sesuai Kerangka Kualifikasi Nasional Indonesia secara naratif;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												o. Capaian Prestasi di bidang ekstrakurikuler (kompetensi pendukung yang terdiri atas kompetensi penunjang langsung, kompetensi penunjang tambahan, kompetensi penunjang pelengkap);
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												p. Sertifikasi profesional baik nasional maupun internasional;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												q. Prasyarat penerimaan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												r. Bahasa pengantar kuliah;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												s. Sistem penilaian/ metode assesmen;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												t. Lama studi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												u. Jenis dan program pendidikan tinggi lanjutan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												v. Tingkat /Level Kerangka Kualifikasi Nasional Indonesia;
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Surat Keterangan Pengganti Ijazah, Transkrip Akademik dan SKPI</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Surat Keterangan Pengganti Ijazah, Transkrip Akademik dan SKPI diberikan apabila :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Kehilangan ijazah asli, transkrip akademik dan SKPI asli yang disertai dengan Surat Keterangan Kehilangan dari Pemilik;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Ijazah, transkrip akademik, SKPI yang rusak, harus menunjukkan ijazah, transkrip akademik, dan SKPI tersebut;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Permohonan surat keterangan pengganti ijazah harus disampaikan kepada Rektor oleh yang berkepentingan secara tertulis;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Surat Keterangan Pengganti sebagaimana dimaksud pada ayat (1) paling sedikit memuat:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Keterangan bahwa ijazah, transkrip akademik, SKPI rusak, hilang, atau musnah sebagaimana dibuktikandengan pencantuman Nomor dan Tanggal keterangan tertulis tentang kehilangan tersebut dari pihak kepolisian;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Keterangan tentang muatan ijazah, transkrip akademik, dan SKPI sebagai dimaksud dalam pasal 76 ayat (1), (2), (3).
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Surat Keterangan Pengganti sebagaimana dimaksud pada ayat (1) berupa pengganti:
											</div>
											<div class="m-0" style="padding-left: 4em; text-indent:-1.0em;">
												1) Ijazah, transkrip akademik ditulis dalam Bahasa Indonesia dan Bahasa Inggris;
											</div>
											<div class="m-0" style="padding-left: 4em; text-indent:-1.0em;">
												2) SKPI ditulis dalam bahasa Indonesia dan Bahasa Inggris.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Pemberian Gelar</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Lulusan suatu Prodi diberikan gelar akademik yang dicantumkan dalam ijazah, dan yang bersangkutan berhak memakai gelar tersebut sesuai dengan peraturan perundang-undangan yang berlaku;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Gelar Akademik :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Sarjana Ilmu Sosial (S.Sos) bagi lulusan Prodi Ilmu Politik, Prodi Hubungan Internasional dan Prodi Sosiologi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Sarjana Administrasi Publik (S.AP) Prodi Administrasi Publik ;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Sarjana Ilmu Komunikasi (S.I.Kom) Prodi Ilmu Komunikasi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Sarjana Sains (S.Si) bagi lulusan Prodi Biologi dan Prodi Fisika;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. Sarjana Ekonomi (S.M) bagi lulusan Prodi Manajemen dan S.Ak bagi Prodi Akuntansi, Sarjana Pariwisata (S.Par) bagi lulusan Prodi Pariwisata
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. Sarjana Sastra (S.S.) bagi lulusan Prodi Sastra Indonesia, Prodi Sastra Inggris, Prodi Sastra Jepang, dan Prodi Sastra Korea; Sarjana Bahasa (S.Li) bagi Prodi Bahasa Korea;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												g. Sarjana Teknik (S.T.) bagi lulusan Prodi Teknik Fisika, Prodi Teknik Elektro, Prodi Teknik Mesin;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												h. Sarjana Komputer (S.Kom.) bagi lulusan Prodi Sistem Informasi dan Prodi Informatika;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												i. Sarjana Hukum (S.H.) bagi lulusan Prodi Hukum;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												j. Sarjana Pertanian (S.P.) bagi lulusan Prodi Agroteknologi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												k. Sarjana Keperawatan (S.Kep.) bagi lulusan Prodi Ilmu Keperawatan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												l. Sarjana Sains Terapan (S.Tr. Keb) bagi lulusan Prodi Kebidanan;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Gelar Akademik Pendidikan Profesi Ners (Ns) bagi lulusan Prodi Pendidikan Ners;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Gelar Akademik Program Diploma III adalah Ahli Madya (A.Md. Par) bagi lulusan Prodi Perhotelan.
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Gelar Akademik Program Diploma III adalah Madya (A.Md.) bagi lulusan Prodi Bahasa Korea;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Gelar Akademik Program Magister dan program Doktor
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Magister Ilmu Politik ( M.Sos.) bagi lulusan Prodi Magister Ilmu Politik
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Magister Manajemen (M.M.) bagi lulusan Prodi Magister Manajemen
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Magister Hukum (M.H.) bagi lulusan Magister Hukum
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Magister Administrasi Publik (M.A.P.) bagi lulusan Prodi Magister Administrasi Publik
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												e. Magister Sains (M.Si.) bagi lulusan Magister Biologi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												f. Magister Komputer (M.Kom) bagi lulusan Prodi Magister Informatika;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												g. Doktor Ilmu Politik (Dr.Sos) bagi lulusan Prodi Doktor Ilmu Politik;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												h. Doktor Administrasi Publik (Dr.A.P.) bagi lulusan Prodi Doktor Administrasi Publik;
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h4 class="text-center">PENGHARGAAN DAN SANKSI</h4>
										<h6 class="text-center">Penghargaan pada Mahasiswa</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Mahasiswa berprestasi dalam bidang akademik dan non akademik dapat diberi penghargaan oleh Universitas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Mahasiswa berprestasi dalam bidang akademik sebagaimana dimaksud pada ayat (1) pasal ini adalah :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. mahasiswa yang mempunyai IPS = 4,00 dengan beban studi minimal 18 sks;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. mahasiswa yang memenangkan kompetisi dalam suatu bidang keilmuan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. mahasiswa yang mengharumkan nama Universitas dalam suatu bidang keilmuan berdasarkan penilaian Senat Universitas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Mahasiswa berprestasi dalam bidang non akademik sebagaimana dimaksud pada ayat (1) pasal ini adalah :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. mahasiswa yang memenangkan kompetisi tingkat nasional;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. mahasiswa	yang	mengharumkan	nama	Universitas	dalam	bidang	non	akademik berdasarkanpenilaian Senat Universitas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Mahasiswa berprestasi dapat diberi penghargaan berupa :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. sertifikat dan/atau piagam atas prestasinya;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. beasiswa.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Penghargaan pada Dosen</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Dosen diberi penghargaan oleh Universitas jika :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. telah mengabdi di Universitas selama 25 (dua puluh lima) tahun dan/atau 50 (lima puluh) tahun tanpa putus;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. memenangkan kompetisi dalam suatu bidang keilmuan dan/atau kompetisi dosen berprestasi;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. melakukan publikasi internasional media yang berkualitas baik;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. mengharumkan nama Universitas berdasarkan penilaian Senat Universitas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Penghargaan bagi dosen sebagaimana dimaksud pada ayat (1) pasal ini dapat berupa :
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. sertifikat dan/atau piagam;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. dana stimulus untuk mempertahankan/meningkatkan prestasinya.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Sanksi pada Mahasiswa</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Mahasiswa yang melanggar ketentuan-ketentuan yang berlaku di Universitas dapat dijatuhi sanksi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Sanksi sebagaimana dimaksud pada ayat (1) pasal ini dapat berupa peringatan tertulis, pemberhentian studi sementara (skorsing) atau pemberhentian studi permanen (drop out)
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Mahasiswa yang sedang menjalani sanksi skorsing tidak dibenarkan menjadi pengurus organisasi kemahasiswaan dan tidak boleh mengikuti semua kegiatan kemahasiswaan.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Peringatan Tertulis</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Peringatan tertulis diberikan oleh Ketua Prodi tiap semester jika IPS dan/atau IPK< 2,00;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Peringatan tertulis, pemberhentian sementara (skorsing) atau pemberhentian permanen (drop out) oleh Dekan/Direktur jika melakukan pelanggaran peraturan/tata tertib kehidupan kampus dan kode etik mahasiswa;
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Pemberhentian Studi Sementara(Skorsing)</h6>
										<p class="mb-0" style="text-align: justify">
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Pemberhentian studi sementara (skorsing) dijatuhkan kepada mahasiswa jika terbukti melanggar tata tertib kehidupan kampus, melanggar kode etik mahasiswa, melakukan kecurangan / pelanggaran / penghinaan terhadap ketentuan dan proses akademik yang berlaku di Universitas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Sanksi skorsing dijatuhkankepada mahasiswa sehingga tidak boleh mengikuti kegiatan akademik dan kegiatan non akademik selama-lamanya sebanyak 2 (dua) semester;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Sanksi skorsing dijatuhkan oleh Dekan kepada mahasiswa dengan surat keputusan yang ditembuskan kepada Rektor, Wakil Rektor Bidang Akademik , Biro Adminsitrasi Akademik (BAA), Biro Administrasi Keuangan (BAK) dan Biro Kemahasiswaan;
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Mahasiswa yang dijatuhi sanksi skorsing ditetapkan sebagai mahasiswa cuti dan diperhitungkan dalam masa studi.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Putus Studi (Drop Out)</h6>
										<p class="mb-0" style="text-align: justify">
											Mahasiswa dapat diberhentikan dari kuliah secara permanen (drop out) oleh Universitas jika :
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	IPK kurang dari 2,00 (dua koma nol nol) selama 2 (dua) semester berturut-turut dimulai dari semester 2 dan seterusnya;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Habis masa studinya;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(3)	Tidak aktif selama 2 (dua) semester berturut-turut;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(4)	Diberi 2 (dua) kali peringatan tertulis, tetapi mahasiswa tidak mampu memperbaiki diri;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(5)	Tidak lulus ujian Tugas Akhir sebanyak 2 (dua)kali penggantian judul;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(6)	Tidak dapat menyelesaikan studi walaupun telah dilakukan perpanjangan masa studi;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(7)	Melakukan pelanggaran berat terhadap peraturan/tata tertib kehidupan kampus, kode etik mahasiswa;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(8)	Mahasiswa yang telah ditetapkan sebagai mahasiswa putus kuliah (drop out) pada salah satu program studi tidak dapat melanjutkan pada program studi lainnya di lingkungan Universitas
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(9)	Prosedur pelaksanaan pemberhentian studi program Diploma, Program Sarjana dan Pascasarjana:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Dekan/Direktur wajib memberi surat peringatan pertama, kedua, dan ketiga pada setiap akhir semester1(satu), akhir semester 2(dua) dan akhir semester 3 (tiga) kepada mahasiswa program sarjana dan Diploma yang IPK-nya kurang atau sama dengan 2,00; mahasiswa program  Magister yang IPK-nya kurang dari 2,75 dan mahasiswa program Doktor yang IPK-nya kurang dari 3,00.
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Pada akhir semester 4 (empat), Dekan/Direktur menetapkan mahasiswa program Sarjana dan Diploma yang IPK-nya 2,00; mahasiswa program Magister yang IPK-nya kurang dari 2,75; mahasiswa program Doktor yang IPK-nya kurang dari 3,00 sebagai mahasiswa putus kuliah (drop out)
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												c. Dekan/Direktur menerbitkan surat keputusan tentang mahasiswa putus kuliah (drop out) sebagaimana dimaksud pada butir b ayat (8) pasal ini.
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												d. Dekan/Direktur dapat menerbitkan surat keputusan drop out (DO) atau dikeluarkan sebagai mahasiswa Universitas Siber Asia bagi mahasiswa yang melakukan pelanggaran berat.
											</div>
										</p>
									</div>
									<div class="mb-5">
										<h6 class="text-center">Mengundurkan Diri</h6>
										<p class="mb-0" style="text-align: justify">
											Mahasiswa dapat diberhentikan dari kuliah secara permanen (drop out) oleh Universitas jika :
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(1)	Bagi mahasiswa yang disebut pada pasal 86 ayat (1, 2, 3, 4) diberikan kesempatan untuk mengundurkan diri dari Universitas;
											</div>
											<div style="padding-left: 1.5em; text-indent:-1.5em;">
												(2)	Prosedur pelaksanaan pengunduran diri:
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												a. Dekan/Direktur wajib memberi surat peringatan pertama,kedua, dan ketiga pada setiap akhir semester 1(satu), akhir semester 2(dua) dan akhir semester 3 (tiga) kepada mahasiswa program sarjana dan diploma yang IPK-nya kurang atau sama dengan 2,00; mahasiswa program Magister yang IPK-nya kurang dari 2,75 dan mahasiswa program Doktor yang IPK-nya kurang dari 3,00.
											</div>
											<div class="m-0" style="padding-left: 3em; text-indent:-1.0em;">
												b. Dekan/Direktur menerbitkan surat keputusan tentang mahasiswa mengundurkan diri sebagaimana dimaksud pada butir (a) ayat (2) pasal ini.
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
										<li><a href="/">Beranda</a></li>
										<li><a href="{{ route('landing.about') }}">Tentang Kami</a></li>
										<li><a href="#">Tanya Jawab</a></li>
										<li><a href="#">Kontak</a></li>
									</ul>
								</div>
							</div>
							<div class="col-8 col-lg-8 col-md-8 col-sm-8">
								<div class="widget footer_widget">
									<h5 class="footer-title">Program Studi</h5>
									<ul>
										<li><a href="{{ url('/penyiaran-dan-komunikasi-digital') }}">Penyiaran dan Komunikasi Digital</a></li>
										<li><a href="{{ url('/manajemen-kontemporer') }}">Manajemen Kontemporer</a></li>
										<li><a href="{{ url('/akuntansi-dan-perpajakan') }}">Akuntansi dan Perpajakan</a></li>
										<li><a href="{{ url('/sistem-informasi') }}">Sistem Informasi</a></li>
										<li><a href="{{ url('/teknologi-informasi') }}">Teknologi Informasi</a></li>
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
