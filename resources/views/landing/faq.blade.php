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
							<li class="active"><a href="javascript:;">Tentang USA <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('landing.about') }}">Tentang USA</i></a></li>
									<li><a href="{{ route('landing.marketing_promosi') }}">Marketing dan Promosi</a></li>
									<li><a href="{{ route('landing.pelatihan_bersertifikasi') }}">Pelatihan Bersertifikasi</a></li>
									<li><a href="{{ route('landing.teaser_video_pembelajaran') }}">Teaser Video Pembelajaran</a></li>
									<li><a href="{{ route('landing.faq') }}">FAQ</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Akademik <i class="fa fa-chevron-down"></i></a>
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
                    <h1 class="text-white">FAQ</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Tentang USA</li>
					<li>FAQ</li>
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
									<ol>
                    <li>
                      <h4>Apa itu online learning?</h4>
                    <p style="text-align: justify">Online learning disebut juga e-Learning atau Online Course adalah konsep pendidikan yang memanfaatkan Teknologi Informasi dan Komunikasi dalam proses belajar mengajar. Dalam perkuliahan online atau kuliah non tatap muka ini mahasiswa tidak perlu duduk dengan manis di ruang kelas untuk menyimak setiap ucapan dari seorang dosen secara langsung. Kuliah Online juga merupakan salah satu sarana pembelajaran interaktif, dosen dan mahasiswa dapat berkomunikasi dengan menggunakan media internet. Dosen dapat memberikan materi kuliah, baik berupa file, video, maupun tulisan (teks). Dengan kuliah online, seorang dosen juga bisa mengajar di beberapa tempat secara bersamaan. Mahasiswa dapat mengikuti kuliah di mana saja dan kapan saja, selama mereka memiliki koneksi Internet.</p>
                    </li>
                    <li>
                      <h4>Apa keunggulan online learning?</h4>
                      <table class="table table-borderless">
                          <tr>
                            <th scope="row">1</th>
                            <td>Penggunaan E-learning untuk menunjang pelaksanaan proses belajar dapat meningkatkan daya serap peserta didik (Mahasiswa) atas materi yang diajarkan.</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Meningkatkan partisipasi aktif dari peserta didik. Sehingga proses pembelajaran menjadi lebih menarik dan tidak monoton.</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Menghemat biaya transportasi atau pun tempat tinggal bila universitas yang dipilih berada di luar pulau atau luar negeri.</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Tanya Jawab dalam perkuliahan bersifat fleksibel karena bisa ditanyakan lewat chatinggan baik itu kepada dosen atau teman sekelas.</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Waktu masa perkuliahan lebih singkat dibandingkan perkuliahan yang bersifat konvensional.</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Meningkatkan kemampuan belajar mandiri peserta didik. Sehingga peserta didik tidak selalu bergatung kepada temannya.</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Mahasiswa bisa melihat kembali materi yang diajarkan karena materi biasanya berupa modul yang dapat didownload dan tersimpan dalam PC atau komputer.</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Meningkatkan kualitas materi pendidik dan pelatihan. Dimana materi yang bisa diberikan oleh pendidik akan meningkat kualitasnya karena bisa mengambil dari berbagai sumber yang ada.</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Meningkatkan kemampuan menampilkan informasi dengan perangkat teknologi informasi, dimana dengan perangkat biasa sulit dilakukan.</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Melatih mahasiswa untuk lebih bertanggung jawab, kreatif, dan juga mandiri. Sehingga membentuk pribadi yang lebih percaya diri.</td>
                          </tr>
                      </table>
                    </li>
                    <li>
                      <h4>Apa yg dimaksud cyber university?</h4>
                      <p style="text-align: justify">Cyber University merupakan bentuk upaya untuk menjadikan perguruan tinggi berbasis teknologi informasi, usaha tersebut diterapkan di semua lini, mulai dari sistem pembelajaran, kurikulum, pelayanan, fasilitas, maupun sarana dan prasarana lainnya, itu semua dikembangkan dengan berbasis teknologi. Selain itu</p>
                      <p style="text-align: justify">Cyber University menyediakan layanan belajar formal melalui media online yang bisa diakses semua orang, terlepas dari keterbatasan akibat lokasi geografis, fleksibilitas, dan lainnya.</p>
                      <p style="text-align: justify">Cyber University adalah salah satu kecanggihan fasilitas bagi siswa yang ingin melanjutkan ke perguruan tinggi. Kementerian Riset Teknologi dan Pendidikan Tinggi menyadari perlunya mengubah universitas di Indonesia jadi sekelas internasional. Untuk mendorong daya saing generasi muda Indonesia, universitas-universitas di Indonesia perlu melakukan inovasi sistem secara menyeluruh.</p>
                    </li>
                    <li>
                      <h4>Apakah Asia Cyber University atau Universitas Siber Asia (UNSIA)?</h4>
                      <p style="text-align: justify">Asia Cyber University atau Universitas Siber Asia (UNSIA) merupakan  perguruan tinggi swasta berbasis daring yang diselenggarakan oleh Yayasan Memajukan Ilmu dan Kebudayaan (YMIK). YMIK saat ini menaungi Universitas Nasional (UNAS). Yayasan Memajukan Ilmu dan Kebudayaan (YMIK) mendapatkan dukungan dari Kementerian Riset Teknologi dan Perdidikan Tinggi (KEMENRISTEK DIKTI) melalui pemberian izin prinsip pendirian Universitas Siber Asia yang diserahkan oleh Menteri Riset Teknologi dan Pendidikan Tinggi, Prof. M. Nasir, pada Hari Kebangkitan Teknologi (HARTEKNAS) di Bali, 26 Agustus 2019. Universitas Siber Asia ini adalah universitas swasta pertama yang akan menyelenggarakan Pendidikan tinggi berbasis full online learning, dengan dipimpin oleh rektor asing pertama asal Korea yaitu Jan Youn Cho, Ph.D, MPA., CPA.</p>
                      <p style="text-align: justify">Universitas Siber Asia akan menjalankan tiga strategi utama, yaitu meningkatkan kuantitas, memberikan fitur-fitur pengajaran yang sesuai dengan masa depan era revolusi industri 4.0 dan menghadirkan pengajaran dengan kualitas dunia (world class learning).</p>
                      <p style="text-align: justify">Pendidikan berbasis full online learning dan full learning management system ini juga selaras dengan kebijakan pemerintah dan menjawab tantangan Era Revolusi Industri 4.0, memberikan efisiensi dalam layanan pendidikan tinggi dalam skala tidak terbatas bagi penduduk Indonesia tidak saja di perkotaan namun juga daerah terpencil yang memiliki akses internet. Bahkan dengan biaya pendidikan yang terjangkau, dapat membantu para pekerja dengan penghasilan rendah untuk tetap dapat mengakses pendidikan tinggi.</p>
                      <p style="text-align: justify">Nantinya, sistem pembelajaran Universitas Siber Asia memanfaatkan jaringan internet secara terbuka dan masif melalui program Massive Open Online Course akan menghadirkan fitur-fitur pembelajaran berorientasi masa depan untuk mempersiapkan lulusannya menghadapi era revolusi industri 4.0.</p>
                      <p style="text-align: justify">Universitas Siber Asia juga akan menjaga kualitas dengan membawa pembelajaran kelas dunia yang salah satunya dilakukan dengan membawa para pengajar terbaik dari berbagai negara seperti Amerika, Korea dan juga Indonesia. Didukung dengan insfrastruktur dan teknologi dari Korea, serta pengajar yang kompeten di bidangnya baik dari dalam negeri maupun luar negeri, Universitas Siber Asia ditargetkan akan mulai menerima mahasiswa baru tahun depan melalui lima program studi yang akan dibuka yaitu Manajemen Kontemporer dan e-commerce, Akuntansi dan Perpajakan, Sistem Informasi,  Informatika, Penyiaran dan Komunikasi Digital.</p>
                      <p style="text-align: justify">Untuk menyiapkan universitas Siber Asia, YMIK  didampingi oleh pakar yang telah berpengalaman dalam memimpin universitas siber di Korea Selatan, yaitu Prof. Dr. Jan Youn Cho, MPA., CPA. Profesor Cho yang selama 10 tahun di Amerika Serikat ini merupakan mantan Vice President  of  Hankuk University  for Foreign Studies, yang sekaligus merupakan Operating Rector dari Cyber  Hankuk University for Foreign Studies, di Korea Selatan.  Beliau juga pernah menjabat sebagai Dekan di College of Business dan Dekan Sekolah Pascasarjana di Hankuk University for Foreign Studies, Korea Selatan. Selain itu Dia pernah dinominasikan sebagai 10 besar profesor terbaik di Universitas Nebraska-Lincoln.</p>
                    </li>
                    <li>
                      <h4>Bagaimana metode pembelajarannya ?</h4>
                      <p>Aktifitas setiap semester:</p>
                      <table class="table table-borderless">
                        <tr>
                          <th scope="row">1</th>
                          <td>Total aktifitas 1 semester 16 minggu terdiri atas Off-Line dan On-Line</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Kelas Off-Line per MK = 2 minggu terdiri atas 1 minggu diawal semester dan 1 minggu di akhir semester</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Kelas On-line per MK = 14 Minggu</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Mode pembelajaran on-line menerapkan metode Singkron dan Asinkron, yakni dosen dan mahasiswa bisa berinteraksi di LMS dalam waktu yang bersamaan, maupun tidak bersamaan dalam setiap minggu on-line.</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Video conference atau Webinar (Web Seminar) di salah satu minggu On-Line.</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>UTS On-Line minggu ke-8, bentuk E-paper dan Vlog Presentation</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>UAS Off-Line/On-Site minggu ke-16</td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Aktifitas 1 Minggu on-line untuk reguler mode sinkron dan asinkron (6 hari kerja, Senin – Sabtu, alokasi waktu 24 jam/hari)</td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Meningkatkan kemampuan menampilkan informasi dengan perangkat teknologi informasi, dimana dengan perangkat biasa sulit dilakukan.</td>
                        </tr>
                    </table>
                    <p>Secara singkat aktivitas pembelajaran dalam LMS nanti nya ialah sebagai berikut:</p>
                    <p>Eksplorasi Materi, Diskusi, Pengerjaan Tugas, Video Conference/Webinar dan Assesment & Reviewing.</p>
                    </li>
                    <li>
                      <h4>Apa yang akan saya (mahasiswa) dapatkan ketika belajar online?</h4>
                      <table class="table table-borderless">
                        <tr>
                          <th scope="row">1</th>
                          <td>Video ceramah dan materi pembelajaran disediakan halaman demi halaman</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Materi interaktif akan meningkatkan pengalaman belajar siswa.</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Siswa dapat memilih kualitas video dan kecepatan pemutaran sesuai dengan lingkungan belajar mereka. (Fungsi bookmark disediakan untuk video)</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Materi tambahan seperti halaman contoh / kuis / ringkasan akan membantu proses belajar siswa.</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Video ceramah disediakan dengan materi pembelajaran terstruktur yang dimasukkan dalam layar HD.</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Ceramah, materi pembelajaran, dan tulisan di papan tulis dapat diakses secara bersamaan.</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Melalui perangkat lunak "e-Stream", penjelasan video/audio dosen dan materi pembelajaran disediakan.</td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Tulisan di papan tulis menggunakan pena elektronik disediakan untuk membantu pengalaman belajar siswa.</td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Lebih banyak interaksi antara mahasiswa dan dosen untuk membawa rasa kedekatan dalam perkuliahan.</td>
                        </tr>
                    </table>
                    </li>
                    <li>
                      <h4>Kenapa saya harus masuk Asia Cyber University?</h4>
                      <table class="table table-borderless">
                        <tr>
                          <th scope="row">1</th>
                          <td>kuliah berkualitas tinggi melalui pengembangan sistem akademik kuliah dan sistem manajemennya.</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>UNSIA bertekad untuk menjadi salah satu institusi online global teratas dan akan terus memimpin dan menetapkan standar untuk paradigma pendidikan online melalui kurikulum kompetitif dan sistem pendidikan yang efektif.</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>UNSIA adalah tempat untuk dapat mengembangkan apa yang Anda butuhkan untuk merancang masa depan Anda, dan di mana para pemimpin masa depan dapat ditemukan.</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Sarana e-learning yang dapat membantu mengakomodir pembelajaran jarak jauh serta membuat mahasiswa tidak lagi merasa malu untuk mengutarakan pertanyaannya karena bisa langsung ditanyakan di e-learning tersebut.</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Pendidikan berbasis full online learning dan full learning management system</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Memberikan fitur-fitur pengajaran yang sesuai dengan masa depan era revolusi industri 4.0</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Menghadirkan pengajaran dengan kualitas dunia (world class learning).</td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Didukung dengan insfrastruktur dan teknologi dari Korea, serta pengajar yang kompeten di bidangnya baik dari dalam negeri maupun luar negeri</td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Biaya pendidikan yang terjangkau.</td>
                        </tr>
                    </table>
                    </li>
                    <li>
                      <h4>Program studi apa saja yang ditawarkan di Unsia?</h4>
                      <p>UNSIA akan membuka 5 (lima) program pendidikan Sarjana Strata Satu, meliputi:</p>
                      <table class="table table-borderless">
                        <tr>
                          <th scope="row">1</th>
                          <td>Manajemen Kontemporer (Contemporary Management);</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Akuntansi dan Perpajakan (Accounting & Taxation);</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Sistem Informasi (Data & Information System);</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Informatika (Informatics);</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Penyiaran dan Komunikasi Digital (Broadcasting & Digital Communication)</td>
                        </tr>
                    </table>
                    </li>
                    <li>
                      <h4>Berapa lama saya kuliah online di Unsia?</h4>
                      <p style="text-align: justify">Secara umum kuliah untuk gelar sarjana S-1 dapat diselesaikan dalam 4 tahun atau 8 semester dengan minimal SKS ditempuh sebanyak 144 SKS.</p>
                    </li>
                    <li>
                      <h4>Setelah kuliah apa yang saya dapatkan?</h4>
                      <table class="table table-borderless">
                        <tr>
                          <th scope="row">1</th>
                          <td>Ijazah S1 yang diakui;</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Sertifikasi Kompetensi;</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Pengalaman dan Ilmu Pengetahuan yang berkualitas.</td>
                        </tr>
                    </table>
                    </li>
                    <li>
                      <h4>Kemana saya setelah lulus?</h4>
                      <p style="text-align: justify">UNSIA bekerjasama dan memiliki jaringan yang luas untuk menjalin kemitraan strategis dengan pemangku kepentingan (Stakeholders) meliputi Academic, Business, Company, and Government. Selain itu, dengan penandatanganan Nota Kesepahaman dengan sejumlah dunia industri di Indonesia dan memiliki pusat career center tentu akan memudahkan dengan menyediakan pusat informasi kerja bagi para lulusan dan menjembatani para lulusan dengan dunia kerja. </p>
                    </li>
                  </ol>
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
