@extends('layouts.main-page')

@section('active-about', 'active')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white text-uppercase">Visi Misi</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Tentang UNSIA</li>
					<li>Visi Misi</li>
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
									<ol class="ml-4">
										<li class="mb-4">
											<h4>Visi</h4>
											<p>Menjadi perguruan tinggi online yang unggul dalam layanan pendidikan tinggi bereputasi global berbasis Smart Digital Technology pada 2025.</p>
											{{-- Visi Lama --}}
											{{-- <p>Visi Universitas adalah menjadi Universitas Siber unggulan di Indonesia dalam tata kelola pendidikan, penelitian, dan pengabdian pada masyarakat pada tahun 2024</p> --}}
										</li>
										<li class="mb-4">
											<h4>Misi</h4>
											<p>Berdasarkan rumusan visi UNSIA, maka yang menjadi misi UNSIA adalah sebagai berikut:</p>
											<ol type="a" class="ml-5">
												<li>Membangun tata kelola kampus online berbasis teknologi informasi yang mendukung layanan pendidikan tinggi secara massive dan online berbasis high-end Smart Digital Technology.</li>
												<li>Mengembangkan sumber daya dosen dan tenaga kependidikan yang mampu menguasai platform smart digital technology berorientasi pada pengembangan keilmuan dan dan applied skill.</li>
												<li>Mengembangkan sistem pembelajaran yang berorientasi pada luaran lulusan yang memiliki kemampuan dalam penguasaan applied science dan platform smart digital technology development dan berkarakter mandiri, inovatif, kreatif, mampu bekerja sama dan complex problem solving.</li>
												<li>Membangun roadmap penelitian dan pengabdian kepada masyarakat berorientasi pada pengembangan Smart Digital Technology untuk berkontribusi pengembangan Revolusi Industri 4.0.</li>
												<li>Menjalin networking dan kerjasama baik nasional dan internasional untuk mengembangkan kampus berbasis layanan online.</li>
												{{-- Misi Lama --}}
												{{-- <li>Menyelenggarakan dan mengembangkan pendidikan tinggi berbasis online bertaraf nasional yang dapat bersaing di tataran global</li>
												<li>Menyelenggarakan pendidikan tinggi berbasis online yang menghasilkan lulusan yang unggul dalam bidangnya, menguasai perkembangan ilmu pengetahuan, teknologi dan kebudayaan terkini dan mampu bersaing di dunia kerja, baik nasional maupun internasional</li>
												<li>Menyelenggarakan penelitian dan pengabdian pada masyarakat bagi pengembangan ilmu pengetahuan, teknologi dan kebudayaan yang mampu berkiprah di kancah nasional dan internasional</li>
												<li>Menyelenggarakan tata kelola Universitas secara akuntabel yang mengacu pada sistem pendidikan nasional</li>
												<li>Membangun jejaring kemitraan nasional dan internasional dalam rangka kelancaran penyelenggaraan pendidikan tinggi berbasis online</li> --}}
											</ol>
										</li>
										<li class="mb-4">
											<h4>Tujuan</h4>
											<ol type="a" class="ml-5">
												<li>Terselenggaranya pendidikan tinggi berbasis online bertaraf nasional yang dapat bersaing di tataran global</li>
												<li>Dihasilkannya lulusan yang memiliki integritas, kompetensi, serta daya saing nasional dan internasional.</li>
												<li>Dihasilkannya karya penelitian dan pengabdian pada masyarakat yang berkontribusi terhadap pengembangan ilmu pengetahuan, teknologi dan kebudayaan baik di tingkat nasional maupun internasional</li>
												<li>Menghasilkan tata kelola Universitas secara transparan, adil, bertanggung jawab dan kredibel yang mengacu kepada kebijakan pendidikan nasional</li>
												<li>Terbangunnya jejaring nasional dan internasional untuk memperluas dan memperdalam kerja sama dalam pengembangan ilmu pengetahuan, teknologi dan kebudayaan yang bermanfaat bagi kepentingan bangsa dan Negara</li>
											</ol>
										</li>
									</ol>
									<div class="text-center mb-5">
										<img src="{{ asset('homepages/images/visi-misi.png') }}" alt="">
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
    @endsection