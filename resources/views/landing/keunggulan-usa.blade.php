@extends('layouts.main-page')

@section('active-pendaftaran', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">Keunggulan USA</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Tentang USA</li>
            <li>Keunggulan USA</li>
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
                            <h3 class="text-center">Manfaat kuliah di Universitas Siber Asia</h3>
                            <p>Kuliah di Universitas SIber Asia pasti tidak akan menyesal. Berikut adalah manfaat kuliah di Universitas Siber Asia:</p>
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
                                    <td>Kuliah dapat berjalan tanpa gangguan adanya musibah bencana alam, bencana Covid
                                        19 dan libur hari nasional.</td>
                                </tr>
                            </table>
                            <div class="text-center mb-5">
                                <img src="{{ asset('homepages/images/manfaat.jpg') }}" alt="usa">
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