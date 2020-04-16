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
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="{{ url('/faq') }}"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
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
							<li class="active">
								<a href="/">Beranda</a>
							</li>
							<li><a href="{{ route('landing.about') }}">Tentang USA <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('landing.greetings_rector') }}">Salam Rektor</i></a></li>
									{{-- <li><a href="{{ route('landing.about') }}">Tentang USA</i></a></li> --}}
									<li><a href="{{ route('landing.sejarah') }}">Sejarah USA</i></a></li>
									<li><a href="{{ route('landing.visi_misi') }}">Visi Misi</i></a></li>
									<li><a href="{{ route('landing.struktur_organisasi') }}">Struktur Organisasi</i></a></li>
									{{-- <li><a href="{{ route('landing.pelatihan_bersertifikasi') }}">Pelatihan Bersertifikasi</a></li>
									<li><a href="{{ route('landing.teaser_video_pembelajaran') }}">Teaser Video Pembelajaran</a></li>
									<li><a href="{{ route('landing.keunggulan_lulusan') }}">Keunggulan Lulusan UNSIA</a></li> --}}
									<li><a href="{{ route('landing.faq') }}">FAQ</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Akademik <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="javascript:;">Program Studi <i class="fa fa-chevron-down"></i></a>
										<ul class="sub-menu">
											<li><a href="#">Teknologi Informasi</a></li>
											<li><a href="#">Sistem Informasi</a></li>
											<li><a href="#">Manajemen Kontemporer</a></li>
											<li><a href="#">Akuntansi dan Perpajakan</a></li>
											<li><a href="#">Penyiaran dan Komunikasi Digital</a></li>
										</ul>
									</li>
									<li><a href="{{ route('landing.academic_info') }}">Sistem Pembelajaran</a></li>
									{{-- <li><a href="{{ route('landing.admission_info') }}">Info Pendaftaran</a></li>
									<li><a href="{{ route('landing.academic_program') }}">Program Akademik</a></li>
									<li><a href="{{ route('landing.study_guide') }}">Panduan Pembelajaran</a></li> --}}
								</ul>
							</li>
							{{-- <li>
								<a href="http://portal.koreaswt.com/apply/index.jsp">Pendaftaran</a>
							</li> --}}
							<li><a href="javascript:;">Pendaftaran<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="javascript:;">Jenjang S1<i class="fa fa-chevron-down"></i></a>
										<ul class="sub-menu">
											<li><a href="#">Info</a></li>
											<li><a href="{{ route('landing.admission_info') }}">Persyaratan</a></li>
											<li><a href="http://portal.koreaswt.com/apply/index.jsp">Admission</a></li>
										</ul>
									</li>
									<li><a href="{{ route('landing.academic_guide') }}">Panduan Akademik</a></li>
									<li><a href="#">Kalender Akademik</a></li>
									<li><a href="{{ route('landing.marketing_promosi') }}">Beasiswa</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Berita<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="#">Berita</a></li>
									<li><a href="#">Kegiatan</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Kontak</a>
							</li>
							{{-- <li>
								<a href="http://portal.koreaswt.com/portal/login">Sistem Akademik</a>
							</li> --}}
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
    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
				<div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
					<ul>	<!-- SLIDE  -->
						<li data-index="rs-100" 
						data-transition="parallaxvertical" 
						data-slotamount="default" 
						data-hideafterloop="0" 
						data-hideslideonmobile="off" 
						data-easein="default" 
						data-easeout="default" 
						data-masterspeed="default" 
						data-thumb="error-404.html" 
						data-rotate="0" 
						data-fstransition="fade" 
						data-fsmasterspeed="1500" 
						data-fsslotamount="7" 
						data-saveperformance="off" 
						data-title="A STUDY ON HAPPINESS" 
						data-param1="" data-param2="" 
						data-param3="" data-param4="" 
						data-param5="" data-param6="" 
						data-param7="" data-param8="" 
						data-param9="" data-param10="" 
						data-description="Science says that Women are generally happier">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('homepages/images/slider/slider4.jpg') }}" alt="" 
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat" 
								data-bgparallax="10" 
								class="rev-slidebg" 
								data-no-retina />
								
							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper " 
								id="slide-100-layer-1" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
								data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-type="shape" 
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>	
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme" 
								id="slide-100-layer-2" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['250','250','250','240']" 
								data-fontsize="['50','50','50','30']"
								data-lineheight="['55','55','55','35']"
								data-width="full"
								data-height="none"
								data-whitespace="normal"
								data-type="text" 
								data-responsive_offset="on" 
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
									Asia Cyber University
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
								id="slide-100-layer-3" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['210','210','210','210']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="text" 
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
									LEADING INNOVATION FOR EDUCATION
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
								id="slide-100-layer-4" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['320','320','320','290']" 
								data-width="['800','800','700','420']"
								data-height="['100','100','100','120']"
								data-whitespace="unset"
								data-type="text" 
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
									Universitas siber pertama di Indonesia yang diresmikan oleh Kemenristek Dikti
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption Newspaper-Button rev-btn " 
								id="slide-100-layer-5" 
								data-x="['center','center','center','center']" 
								data-hoffset="['90','80','75','90']" 
								data-y="['top','top','top','top']" 
								data-voffset="['400','400','400','420']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button" 
								data-responsive_offset="on" 
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
							></div>
							<div class="tp-caption Newspaper-Button rev-btn" 
								id="slide-100-layer-6" 
								data-x="['center','center','center','center']" 
								data-hoffset="['-90','-80','-75','-90']" 
								data-y="['top','top','top','top']" 
								data-voffset="['400','400','400','420']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button" 
								data-responsive_offset="on" 
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
							></div>
						</li>
						<li data-index="rs-200" 
						data-transition="parallaxvertical" 
						data-slotamount="default" 
						data-hideafterloop="0" 
						data-hideslideonmobile="off" 
						data-easein="default" 
						data-easeout="default" 
						data-masterspeed="default" 
						data-thumb="{{ asset('homepages/images/slider/slider1.jpg') }}" 
						data-rotate="0" 
						data-fstransition="fade" 
						data-fsmasterspeed="1500" 
						data-fsslotamount="7" 
						data-saveperformance="off" 
						data-title="A STUDY ON HAPPINESS" 
						data-param1="" data-param2="" 
						data-param3="" data-param4="" 
						data-param5="" data-param6="" 
						data-param7="" data-param8="" 
						data-param9="" data-param10="" 
						data-description="Science says that Women are generally happier">
							<!-- MAIN IMAGE -->
							<img src="{{ asset('homepages/images/slider/slider2.jpg') }}" alt="" 
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat" 
								data-bgparallax="10" 
								class="rev-slidebg" 
								data-no-retina />
								
							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper " 
								id="slide-200-layer-1" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
								data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-type="shape" 
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:1;","ease":"Power4.easeOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme" 
								id="slide-200-layer-2" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['250','250','250','240']" 
								data-fontsize="['50','50','50','30']"
								data-lineheight="['55','55','55','35']"
								data-width="full"
								data-height="none"
								data-whitespace="normal"
								data-type="text" 
								data-responsive_offset="on" 
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
									Asia Cyber University
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
								id="slide-200-layer-3" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['210','210','210','210']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="text" 
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; white-space: nowrap;text-transform:uppercase; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
									LEADING INNOVATION FOR EDUCATION
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
								id="slide-200-layer-4" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['320','320','320','290']" 
								data-width="['800','800','700','420']"
								data-height="['100','100','100','120']"
								data-whitespace="unset"
								data-type="text" 
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
									Universitas siber pertama di Indonesia yang diresmikan oleh Kemenristek Dikti
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption Newspaper-Button rev-btn " 
								id="slide-200-layer-5" 
								data-x="['center','center','center','center']" 
								data-hoffset="['90','80','75','90']" 
								data-y="['top','top','top','top']" 
								data-voffset="['400','400','400','420']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button" 
								data-responsive_offset="on" 
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
							></div>
							<div class="tp-caption Newspaper-Button rev-btn" 
								id="slide-200-layer-6" 
								data-x="['center','center','center','center']" 
								data-hoffset="['-90','-80','-75','-90']" 
								data-y="['top','top','top','top']" 
								data-voffset="['400','400','400','420']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button" 
								data-responsive_offset="on" 
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
							></div>
						</li>
						<!-- SLIDE  -->
					</ul>
				</div><!-- END REVOLUTION SLIDER -->  
			</div>  
		</div>  
        <!-- Main Slider -->
		<div class="content-block">
            
			<!-- Our Services -->
			<div class="section-area content-inner service-info-bx">
                <div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="{{ asset('homepages/images/our-services/img1.jpg') }}" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-bank text-primary"></i>
									</div>
									<h4><a href="#">Pendidikan Online Pertama di Indonesia</a></h4>
									<!-- <a href="#" class="btn radius-xl">View More</a> -->
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="{{ asset('homepages/images/our-services/img2.jpg') }}" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-book text-primary"></i>
									</div>
									<h4><a href="#">Teknologi Edukasi Terbaik dan Terbaru</a></h4>
									<!-- <a href="#" class="btn radius-xl">View More</a> -->
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="service-bx m-b0">
								<div class="action-box">
									<img src="{{ asset('homepages/images/our-services/img3.jpg') }}" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-file-text-o text-primary"></i>
									</div>
									<h4><a href="#">Belajar Mudah, Kapanpun Di Manapun</a></h4>
									<!-- <a href="#" class="btn radius-xl">View More</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Our Services END -->
			
			<!-- Popular Courses -->
			<section class="section-area section-sp2 popular-courses-bx page-section" style="padding-bottom: 0em !important;" id="tentang">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Fakultas</h2>
							<p>Macam-macam fakultas terbaik yang bisa membantu mengembangkan pengetahuanmu</p>
						</div>
					</div>
					<div class="row">
						<div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img3.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Manajemen<br>dan E-commerce</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img4.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Sistem<br>Informasi</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img1.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Teknik<br>Informatika</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img2.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Akuntansi<br>dan Perpajakan</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img5.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Penyiaran dan<br>Komunikasi Digital</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Popular Courses END -->

			<!-- Popular Courses -->
			<section class="section-area section-sp2 popular-courses-bx page-section" style="padding-top:2.5em !important;">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Program <span>Studi</span></h2>
							<p>Macam-macam program studi terbaik yang bisa membantu mengembangkan pengetahuanmu</p>
						</div>
					</div>
					<div class="row">
						<div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img3.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Program Studi Penyiaran dan Komunikasi Digital</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img4.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Program Studi Manajemen Kontemporer</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img1.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Program Studi Akuntansi dan Perpajakan</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img2.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Program Studi Sistem Informasi</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
							<div class="item">
								<div class="cours-bx">
									<div class="action-box">
										<img src="{{ asset('homepages/images/courses/img5.jpg') }}" alt="">
										<a href="#" class="btn">Read More</a>
									</div>
									<div class="info-bx text-center">
										<h5><a href="#">Program Studi Teknologi Informasi</a></h5>
										<!-- <span>Programming</span> -->
									</div>
									<!-- <div class="cours-more-info">
										<div class="review">
											<span>3 Review</span>
											<ul class="cours-star">
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li class="active"><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
										</div>
										<div class="price">
											<del>$190</del>
											<h5>$120</h5>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Popular Courses END -->

			<section class="section-area section-sp2 popular-courses-bx page-section p-1" id="tentang">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Sturktur <span>Organisasi</span></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<img src="{{ asset('homepages/images/oraganisation.png') }}" alt="">
							<!-- <div class="container text-center">
								<div class="row">
									<div class="col-5"></div>
									<div class="col-2 bg-box bor-rad">YMIK</div>
									<div class="col-5"></div>
								</div>
								<div class="row">
									<div class="col-6 right-line"></div>
									<div class="col-6"></div>
								</div>
								<div class="row">
									<div class="col-5"></div>
									<div class="col-2 bg-box bor-rad">Rector</div>
									<div class="col-5"></div>
								</div>
								<div class="row">
									<div class="col-6 right-line"></div>
									<div class="col-6"></div>
								</div>
								<div class="row">
									<div class="col-2 right-line"></div>
									<div class="col-2 top-line"></div>
									<div class="col-2 right-line top-line"></div>
									<div class="col-2 top-line"></div>
									<div class="col-2 right-line top-line"></div>
									<div class="col-2"></div>
								</div>
								<div class="row">
									<div class="col-1"></div>
									<div class="col-2 bg-box bor-rad">Vice Rector Academic</div>
									<div class="col-1"></div>
									<div class="col-2 right-line h-auto"></div>
									<div class="col-2"></div>
									<div class="col-1"></div>
									<div class="col-2 bg-box bor-rad">Vice Rector Eksternal Affair</div>
									<div class="col-1"></div>
								</div>
								<div class="row">
									<div class="col-2 right-line"></div>
									<div class="col-2"></div>
									<div class="col-2 right-line"></div>
									<div class="col-2"></div>
									<div class="col-2 right-line"></div>
									<div class="col-2"></div>
								</div>
								<div class="row">
									<div class="col-2 right-line h-auto"></div>
									<div class="col-1 top-line h-auto mt-4"></div>
									<div class="col-2 top-line bg-box bor-rad">Quality Assurance Division</div>
									<div class="col-1 right-line h-auto pr-0"></div>
									<div class="col-2"></div>
									<div class="col-2 right-line h-auto"></div>
									<div class="col-2"></div>
								</div>
								<div class="row">
									<div class="col-2 right-line"></div>
									<div class="col-2"></div>
									<div class="col-2 right-line"></div>
									<div class="col-2"></div>
									<div class="col-2 right-line"></div>
									<div class="col-2"></div>
								</div>
								<div class="row">
									<div class="col-1 right-line"></div>
									<div class="col-1 top-line"></div>
									<div class="col-1 right-line top-line"></div>
									<div class="col-3 right-line pr-0"></div>
									<div class="col-2"></div>
									<div class="col-1 right-line"></div>
									<div class="col-1 top-line"></div>
									<div class="col-1 right-line top-line"></div>
									<div class="col-1"></div>
								</div>
								<div class="row">
									<div class="col-2 bg-box bor-rad">Academic Affair Division</div>
									<div class="col-2 bg-box bor-rad">IT and Multimedia Division</div>
									<div class="col-2 right-line h-auto"></div>
									<div class="col-2"></div>
									<div class="col-2 bg-box bor-rad">Planning & Administration</div>
									<div class="col-2 bg-box bor-rad">Admission & Students Affairs</div>
								</div>
								<div class="row">
									<div class="col-6 right-line"></div>
									<div class="col-6"></div>
								</div>
								<div class="row">
									<div class="col-5"></div>
									<div class="col-2 bg-box bor-rad">Faculty</div>
									<div class="col-5"></div>
								</div>
								<div class="row">
									<div class="col-6 right-line"></div>
									<div class="col-6"></div>
								</div>
								<div class="row">
									<div class="col-1 right-line"></div>
									<div class="col-2 right-line top-line"></div>
									<div class="col-3 right-line top-line"></div>
									<div class="col-3 right-line top-line"></div>
									<div class="col-2 right-line top-line"></div>
									<div class="col-1"></div>
								</div>
								<div class="row">
									<div class="col-2 bg-box bor-rad">Faculty of Broadcasting and Digital Communication</div>
									<div class="col-2 bg-box bor-rad">Faculty of Contemporary Management</div>
									<div class="col-1"></div>
									<div class="col-2 bg-box bor-rad">Faculty of Accounting and Taxation</div>
									<div class="col-1"></div>
									<div class="col-2 bg-box bor-rad">Faculty of Informatics Engineering</div>
									<div class="col-2 bg-box bor-rad">Faculty of Information Systems</div>
								</div>
								<div class="row">
									<div class="col-1 right-line"></div>
									<div class="col-2 right-line"></div>
									<div class="col-3 right-line"></div>
									<div class="col-3 right-line"></div>
									<div class="col-2 right-line"></div>
									<div class="col-1"></div>
								</div>
								<div class="row">
									<div class="col-2 bg-box bor-rad">Lecture</div>
									<div class="col-2 bg-box bor-rad">Lecture</div>
									<div class="col-1"></div>
									<div class="col-2 bg-box bor-rad">Lecture</div>
									<div class="col-1"></div>
									<div class="col-2 bg-box bor-rad">Lecture</div>
									<div class="col-2 bg-box bor-rad">Lecture</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</section>
			
			<!-- Form -->
			<div class="section-area section-sp1 ovpr-dark bg-fix online-course" style="background-image:url('{{ asset('homepages/images/background/bg1.jpg') }}');">
				<div class="container">
					<!-- <div class="row">
						<div class="col-md-12 text-center text-white">
							<h2>Online Courses To Learn</h2>
							<h5>Own Your Feature Learning New Skills Online</h5>
							<form class="cours-search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="What do you want to learn today?	">
									<div class="input-group-append">
										<button class="btn" type="submit">Search</button> 
									</div>
								</div>
							</form>
						</div>
					</div> -->
					<div class="mw1000 m-auto">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-user"></i><span class="counter">5</span>M</h3>
									</div>
									<span class="cours-search-text">Over 5 million student</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-book"></i><span class="counter">30</span>K</h3>
									</div>
									<span class="cours-search-text">30,000 e-Book.</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-layout-list-post"></i><span class="counter">20</span>K</h3>
									</div>
									<span class="cours-search-text">Learn Anythink Online.</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-cup"></i><span class="counter">20</span></h3>
									</div>
									<span class="cours-search-text">Achievements.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Form END -->
			<section class="section-area section-sp2 page-section" id="akademik">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading-bx">
							<h2 class="title-head m-b0">Agenda <span>Kampus</span></h2>
							<p class="m-b0">Upcoming Education Events To Feed Brain. </p>
						</div>
					</div>
					<div class="row">
					<div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="{{ asset('homepages/images/event/img1.jpg') }}" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">20</div>
											<div class="event-month">Agustus</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Seminar Bisnis Internet Gratis "BOOST"</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 6:30 PM – 8:30 PM WIB</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Tower Central Park, Jakarta</a></li>
										</ul>
										<p>
											Jangan sampai Anda mengalami kesalahan FATAL yang dialami oleh lebih dari 90% orang yang TERJUN ke bisnis internet.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="{{ asset('homepages/images/event/img2.jpg') }}" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">4</div>
											<div class="event-month">September</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Indonesia Fintech Forum 2019</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 8:00 AM – 3:30 PM</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Dhanapala Building, Jakarta</a></li>
										</ul>
										<p>
										We realize networking is a major drawcard for Indonesia Fintech Forum 2019. The organizers will be bringing a business matchmaking segment.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="{{ asset('homepages/images/event/img3.jpg') }}" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">9</div>
											<div class="event-month">November</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Terapi Ngomong Inggris 2019</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 08.00 AM - 5.00 PM</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Kota Tua, Jakarta</a></li>
										</ul>
										<p>
											Terapi Ngomong Inggris is practicing English with native speakers & fun games at Jakarta (Kota Tua & Monas) that held by ngomonginggris.com for free.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="text-center">
						<a href="#" class="btn">View All Event</a>
					</div>
				</div>
			</section>
			
			<!-- Testimonials -->
			<div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url('{{ asset('homepages/images/background/bg2.jpg') }}');">
                <div class="container">
					<div class="row">
						<div class="col-md-12 text-white heading-bx left">
							<h2 class="title-head text-uppercase">Salam <span>Rektor</span></h2>
							<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page</p> -->
						</div>
					</div>
					<div class="item">
						<div class="testimonial-bx">
							<div class="testimonial-thumb">
								<img src="{{ asset('homepages/images/dr-cho.jpg') }}" alt="">
							</div>
							<div class="testimonial-info">
								<h5 class="name">Prof. Cho, Jang Youn Ph.D., CPA</h5>
								<p>Rector</p>
							</div>
							<div class="testimonial-content">
								<p style="padding-bottom: 0.5em;">
									Welcome to first cyber university of indonesia, Asia Cyber University.
								</p>
								<p style="padding-bottom: 0.5em;">
									Our university is established to meet the 21 century's needs, leader in digitalized society under
									4th industrialized revolution. Indonesia is a huge country with a lot of potentials to be a world
									leading country. However, without massive education to meet future challenge, our goal to be a
									leading country is not easy task to achieve. Every year, more than 2 million talented young men
									and women are losing opportunity to continue higher education, mainly economic and other
									urgent reasons.
								</p>
								<p style="padding-bottom: 0.5em;">
									Our cyber university provide solution that we will provide top quality education service to you
									anytime, and wherever you are, without any bias, with very affordable tuition. You will be the
									pioneer group to break the bias that education is possible only through physical facilities. You can reach to world class lectures with top support from our professional staffs and top education
									technologies. Welcome to visit our homepage again and hope to start a journey together to write
									your own success story together with us.
								</p>
								<p style="padding-bottom: 0.5em;">
									Thank you again, Best regards,
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Testimonials END -->
			
			<!-- Recent News -->
			<section class="section-area section-sp2 page-section" id="berita">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Berita <span>Terbaru</span></h2>
							<p>Artikel-artikel terbaru tentang Siber Universitas Asia</p>
						</div>
					</div>
					<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						<div class="item">
							<div class="recent-news">
								<div class="action-box">
									<img src="{{ asset('homepages/images/blog/latest-blog/mpr-unas.jpg') }}" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Agustus 26 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By MPR UNAS</a></li>
									</ul>
									<h5 class="post-title"><a href="https://www.unas.ac.id/berita/ymik-terima-izin-pendirian-universitas-siber-pertama-di-indonesia/">YMIK Terima Izin Pendirian Universitas Siber Pertama di Indonesia</a></h5>
									<p>BALI (YMIK) – Yayasan Memajukan Ilmu dan Kebudayaan (YMIK) menerima izin prinsip pendirian Universitas Siber Asia dari Menteri</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>19 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="recent-news">
								<div class="action-box">
									<img src="{{ asset('homepages/images/blog/latest-blog/blog-1.jpg') }}" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Feb 28 201</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By Ristekdikti</a></li>
									</ul>
									<h5 class="post-title"><a href="https://www.ristekdikti.go.id/kabar/indonesia-korea-selatan-menjajaki-kerja-sama-cyber-university/">Indonesia-Korea Selatan Menjajaki Kerja Sama Cyber University.</a></h5>
									<p>Jakarta – Pendidikan dengan teknologi cyber university harus dipandang sebagai alat untuk meningkatkan kualitas pembelajaran.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="recent-news">
								<div class="action-box">
									<img src="{{ asset('homepages/images/blog/latest-blog/blog-2.jpg') }}" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Sep 27 2018</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By Jawapos</a></li>
									</ul>
									<h5 class="post-title"><a href="https://www.jawapos.com/nasional/pendidikan/27/09/2018/indonesia-cyber-university-siap-dibentuk-ini-peranannya/">Indonesia Cyber University Siap Dibentuk, Ini Peranannya</a></h5>
									<p>Regulasi baru tentang pendidikan jarak jauh (PJJ) atau distance learning telah diterbitkan Menristekdikti Mohamad Nasir.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14 Comment</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="recent-news">
								<div class="action-box">
									<img src="{{ asset('homepages/images/blog/latest-blog/blog-3.jpg') }}" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Maret 28 2018</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By Mediaindonesia</a></li>
									</ul>
									<h5 class="post-title"><a href="https://mediaindonesia.com/read/detail/151977-menristekditi-cyber-university-awasi-sistem-perkuliahan-online">Cyber University Awasi Sistem Perkuliahan Online.</a></h5>
									<p>MENTERI Riset Teknologi dan Pendidikan Tinggi M Nasir menyebutkan keberadaan 'cyber university' bakal mengawasi sistem perkuliahan daring (online) yang dilakukan perguruan tinggi.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23 Comment</a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- Recent News End -->
			
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
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
    <button class="back-to-top fa fa-chevron-up" ></button>
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
