@extends('layouts.academic')

@section('content')
<section class="section-area section-sp2 popular-courses-bx page-section" style="padding-bottom: 0em !important;" id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Marketing dan Promosi</h2>
            </div>
        <div class="row">
            <div class="col-md-12">
                <p>Manfaat kuliah di Universitas Siber Asia</p>
                <ul class="ml-5">
                    <li>Mahasiswa bisa mengikuti kuliah dari mana pun dan kapan pun</li>
                    <li>Biaya kuliah dapat diminimalkan</li>
                    <li>Membantu mahasiswa yang juga harus bekerja paruh-waktu</li>
                    <li>Melatih mahasiswa agar lebih mandiri dalam mengikuti mata kuliah online</li>
                    <li>Mahasiswa dapat sekaligus belajar tentang Teknologi dan Informasi</li>
                    <li>Materi digital bersifat repeatable, dapat diulang-ulang hingga jelas</li>
                    <li>Ditunjang oleh pelatihan bersertifikasi secara online</li>
                    <li>Kuliah dapat berjalan tanpa gangguan adanya musibah bencana alam, bencana Covid 19 dan libur hari nasional</li>
                </ul>
                <div class="banner-marketing">
                    <img src="{{ asset('homepages/images/marketing.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>
                <h5 class="mt-4">Beasiswa</h5>
                <p>Universitas Siber Asia menawarkan beasiswa setiap semester dengan jenis sebagai berikut:</p>
                <ol class="ml-4">
                    <li>Beasiswa Mahasiswa Berprestasi</li>
                    <ul type="none"><li>Syarat:</li></ul>
                    <ul class="ml-5">
                        <li>Telah menjalankan perkuliahan di Universitas Siber Asia selama 2 semester</li>
                        <li>IPK 4.0</li>
                        <li>Mengisi formulir permohonan digital </li>
                    </ul>
                    <li>Beasiswa Tidak Mampu (Orang Tua tidak mampu atau single parent)</li>
                    <ul type="none"><li>Syarat:</li></ul>
                    <ul class="ml-5">
                        <li>Telah menjalankan perkuliahan di Universitas Siber Asia selama 2 semester</li>
                        <li>IPK 3.0</li>
                        <li>Surat Keterangan Tidak Mampu Dari Kelurahan</li>
                        <li>Mengisi formulir permohonan digital</li>
                    </ul>
                    <li>Beasiswa Disabilitas</li>
                    <ul type="none"><li>Syarat:</li></ul>
                    <ul class="ml-5">
                        <li>Telah menjalankan perkuliahan di Universitas Siber Asia selama 2 semester</li>
                        <li>IPK 3.0</li>
                        <li>Surat Keterangan Penyandang Disabilitas Dari Kelurahan</li>
                        <li>Mengisi formulir permohonan digital</li>
                    </ul>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection