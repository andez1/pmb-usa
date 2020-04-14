@extends('layouts.main-page')

@section('contentBox')
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Marketing dan Promosi</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Beranda</a></li>
					<li>Tentang USA</li>
					<li>Marketing dan Promosi</li>
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
                                    <h4>Manfaat kuliah di Universitas Siber Asia</h4>
                                    <table class="table table-borderless">
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mahasiswa bisa mengikuti kuliah dari mana pun dan kapan pun.</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Biaya kuliah dapat diminimalkan.</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Membantu mahasiswa yang juga harus bekerja paruh-waktu.</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">4</th>
                                          <td>Melatih mahasiswa agar lebih mandiri dalam mengikuti mata kuliah online.</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">5</th>
                                          <td>Mahasiswa dapat sekaligus belajar tentang Teknologi dan Informasi.</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">6</th>
                                          <td>Materi digital bersifat repeatable, dapat diulang-ulang hingga jelas.</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">7</th>
                                          <td>Ditunjang oleh pelatihan bersertifikasi secara online</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">8</th>
                                          <td>Kuliah dapat berjalan tanpa gangguan adanya musibah bencana alam, bencana Covid 19 dan libur hari nasional.</td>
                                        </tr>
                                    </table>
                                    <img src="{{ asset('homepages/images/marketing.jpg') }}" class="img-fluid" alt="Responsive image">
                                    <h4>Beasiswa</h4>
                                    <p>Universitas Siber Asia menawarkan beasiswa setiap semester dengan jenis sebagai berikut:</p>
                                    <table class="table table-borderless">
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Beasiswa Mahasiswa Berprestasi</td>
                                        </tr>
                                        <tr>
                                          <th scope="row"></th>
                                          <td>Syarat:</td>
                                        </tr>
                                        <tr>
                                          <th scope="row"></th>
                                          <td>- Telah menjalankan perkuliahan di Universitas Siber Asia selama 2 semester</td>
                                        </tr>
                                        <tr>
                                          <th scope="row"></th>
                                          <td>- IPK 4.0</td>
                                        </tr>
                                        <tr>
                                          <th scope="row"></th>
                                          <td>- Mengisi formulir permohonan digital </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Beasiswa Tidak Mampu (Orang Tua tidak mampu atau single parent)</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Syarat:</td>
                                          </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>- Telah menjalankan perkuliahan di Universitas Siber Asia selama 2 semester</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>- IPK 3.0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>- Surat Keterangan Tidak Mampu Dari Kelurahan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>- Mengisi formulir permohonan digital </td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Beasiswa Disabilitas </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>Syarat:</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>- Telah menjalankan perkuliahan di Universitas Siber Asia selama 2 semester</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>- IPK 3.0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>- Surat Keterangan Penyandang Disabilitas Dari Kelurahan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>- Mengisi formulir permohonan digital </td>
                                        </tr>
                                    </table>
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