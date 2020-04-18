@extends('layouts.main-page')

@section('active-about', 'active')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Salam Rektor</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Tentang USA</li>
					<li>Salam Rektor</li>
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
								<div class="icon-content mb-2 rector">
									<img src="{{ asset('homepages/images/dr-cho.jpg') }}" class="img-fluid" alt="Responsive image">
									<p style="text-align: justify;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selamat datang di Universitas Siber pertama di Indonesia, Universitas Siber Asia / Asia Cyber University. Universitas kami didirikan sejak 2019 untuk memenuhi kebutuhan abad ke 21, pemimpin professional dalam masyarakat digital yang cerdas dalam era revolusi industri ke 4.
									</p>
									<p style="text-align: justify;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indonesia adalah negara kepulauan yang terdiri dari hampir 17.000 pulau dengan populasi sekitar 270 juta penduduk. Maka dari itu, Indonesia memiliki kesempatan yang strategis untuk menjadi pemain kunci dalam kompetisi global, memimpin pasar ekonomi digital. Ini membutuhkan pengembangan Sumber Daya Manusia yang memiliki keterampilan utama dalam hal literasi Teknologi Informasi dan Sains terapan. Untuk memenuhi tujuan ini, Pendidikan secara massif yang diselenggarakan melalui Sistem Pendidikan tinggi adalah satu-satunya solusi mengingat perbedaan kondisi geografis di Indonesia sekaligus perbedaan kualitas.
									</p>
									<p style="text-align: justify;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setiap tahun, lebih dari 2 juta orang berbakat yang tamat dari Sekolah Menengah Atas kehilangan kesempatan untuk melanjutkan Pendidikan tinggi, kasus terbanyak disebabkan oleh masalah ekonomi dan masalah-masalah penting lainnya. Universitas Siber kami menyediakan solusi yang akan menyediakan layanan pendidikan berkualitas terbaik, kapanpun, dan dimanapun anda, tanpa bias apapun, dengan biaya Pendidikan yang terjangkau. Pendidikan Tinggi berbasis daring dapat membawa Anda menuju puncak melalui sebuah sistem pembelajaran yang dapat di akses dimana saja tanpa perlu berada di kota besar. Sistem Pembelajaran Online memandu setiap siswa untuk menjadi pembelajar yang aktif dan penuh kegembiraan melalui aktivitas interaktif dan didukung oleh materi digital dalam Sistem Manajemen Pembelajaran (Learning Management System).
									</p>
									<p style="text-align: justify;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda akan menjadi kelompok pionir untuk mendobrak bias yang menggambarkan bahwa Pendidikan hanya mungkin dilakukan bila melalui fasilitas fisik. Anda akan mencapai perkuliahan kelas dunia dengan dukungan teratas dari staf professional dan teknologi pendidikan kami. Selamat datang dan semoga kita dapat memulai perjalanan bersama untuk menuliskan cerita sukses Anda, bersama kami.
									</p>
                                    <p>Hormat kami, <br> Rektor, <br> Prof. Cho, Jang Youn  Ph.D., CPA </p>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- About Us END ==== -->
		</div>
		<!-- Page Content Box END ==== -->
    @endsection