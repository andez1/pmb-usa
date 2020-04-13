@extends('layouts.academic')

@section('content')
<section class="section-area section-sp2 popular-courses-bx page-section" style="padding-bottom: 0em !important;" id="tentang">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Pelatihan Bersertifikasi</h2>
            </div>
        <div class="row">
            <div class="col-md-12">
                <p>Universitas Siber Asia secara regular atau setiap akhir semester menyelenggarakan Pelatihan Profesional Bersertifikasi dengan tujuan untuk mempersiapkan lulusan yang siap berkiprah di dunia kerja dalam Era Smart Digital Economy. Pelatihan secara rutin diumumkan dalam kalender akademik mahasiswa wajib mengikuti pelatihan tersebut secara online.</p>
                <p>Contoh Pelatihan Berikut ini:</p>
                <p class="text-center">Sharing Pengalaman Kerja</p>
                <div class="video-teaser">
                    <video controls src="{{ asset('homepages/images/video/teaservideo1.mp4') }}"></video>
                </div>
                <p>Jenis-jenis pelatihan yang disiapkan Universitas Siber Asia:</p>
                <ol class="ml-5">
                    <li>Leadership Training</li>
                    <li>IT Training</li>
                    <li>Online Learning Libraries</li>
                    <li>Content Development</li>
                    <li>Sales and Marketing Training</li>
                    <li>NTI conducts the following IT courses</li>
                    <li>MS Office Applications</li>
                    <li>Microsoft Technical Courses</li>
                    <li>CompTIA</li>
                    <li>Unix / Linux</li>
                    <li>CISCO</li>
                    <li>Oracle</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection