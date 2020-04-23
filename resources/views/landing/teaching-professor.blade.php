@extends('layouts.main-page')

@section('active-akademik', 'active')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white text-uppercase">Teaching Professor</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Proses Akademik</li>
            <li>Teaching Professor</li>
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
                            <p style="text-align: justify">Universitas Siber Asia memiliki visi untuk menghasilkan lulusan yang unggul dalam aspek Skill, Knowledge dan Attitude. Salah satu upaya untuk mewujudkan hal tersebut adalah dengan menghadirkan dosen professional yang memiliki reputasi global dalam bidang ilmunya masing-masing. Universitas Siber Asia merancang program perkuliahan Teaching Professor Online dalam beberapa sesi di minggu perkuliahan online untuk Mata Kuliah tertentu yang ada di kurikulum Program Studi. Teaching Professor merupakan “break through” dalam “method of learning” sebagai realisasi untuk menghadirkan materi pembelajaran yang berkualitas global. Beberapa Profesor dari dalam dan luar negeri yang dirancang untuk dihadirkan dalam pembelajaran online di Universitas Siber Asis adalah sebagai berikut:</p>
                            <table class="table table-bordered">
                                <tr class="bg-info">
                                    <th>No.</th>
                                    <th>Nama Profesor</th>
                                    <th></th>
                                    <th>Asal Perguruan Tinggi</th>
                                    <th>Kepakaran Bidang Ilmu</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th>Prof. Dr. Muhammad Zarlis, M.Kom</th>
                                    <th>
                                        <div class="text-center mb-5">
                                            <img src="{{ asset('homepages/images/profesor/muhammad-zarlis.jpg') }}" alt="">
                                        </div>
                                    </th>
                                    <th>Universitas Sumatra Utara (USU)</th>
                                    <th>Sistem Pakar, Teknologi Komputasi Cerdas, dan Metode Riset Teknologi Informasi</th>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>Dr. Ali Ahmad </th>
                                    <th>
                                        <div class="text-center mb-5">
                                            <img src="{{ asset('homepages/images/profesor/ali-ahmad.jpg') }}" alt="">
                                        </div>
                                    </th>
                                    <th>Warwick University (UK)</th>
                                    <th>Entrepreneurship and Innovation</th>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <th>Prof. Ir. Rudy C. Tarumingkeng Ph.D</th>
                                    <th>
                                        <div class="text-center mb-5">
                                            <img src="{{ asset('homepages/images/profesor/rudy.jpg') }}" alt="">
                                        </div>
                                    </th>
                                    <th>Professor (Emeritus)  Institut Pertanian Bogor (IPB)</th>
                                    <th>Manajemen Strategik.</th>
                                </tr>
                            </table>
                            <p>Berikut contoh Video Teaser Teaching Professor:</p>
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