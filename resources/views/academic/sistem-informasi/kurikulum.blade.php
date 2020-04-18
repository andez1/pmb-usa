@extends('layouts.main-page')

@section('contentBox')
<!-- Page Heading Box ==== -->
<div class="page-banner ovbl-dark" style="background-image:url(/homepages/images/banner/banner2.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">Kurikulum Sistem Informasi</h1>
        </div>
    </div>
</div>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Beranda</a></li>
            <li>Program Studi</li>
            <li>Sistem Informasi</li>
            <li>Kurikulum</li>
        </ul>
    </div>
</div>
<!-- Page Heading Box END ==== -->

<!-- Page Content Box ==== -->
<div class="content-block">
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 m-b30">
                    <div class="feature-container">
                        <ul class="nav nav-tabs mb-4">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer') }}">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active"
                                    href="{{ url('/manajemen-kontemporer/kurikulum') }}">Kurikulum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/keunggulan') }}">Keunggulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/prospek-karir') }}">Prospek Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/manajemen-kontemporer/dosen') }}">Dosen</a>
                            </li>
                        </ul>
                        <div class="icon-content mb-2">
                            <ul class="ml-4">
                                <li class="mb-3">
                                    <h4>KURIKULUM BERBASIS KPT-KKNI level 6</h4>
                                    <p style="text-align: justify">Dengan penerapan KPT-KKNI level 6, Manajemen Kontemporer dan E-Commerce telah
                                        merancang SKPI (Surat Keterangan Pendamping Ijazah) yang menerangkan jenjang pencapaian
                                        learning outcome lulusan. Selain itu, SKPI dirancang sebagai recognition of competence outside
                                        the running curricula, artinya kompetensi yang dicapai oleh peserta didik akan diakui oleh Asia
                                        Cyber Universitysebagai pelengkap pencapaian learning outcome. Sistem recognition atau
                                        pengakuan kompetensi yang dicapai oleh peserta didik adalah meliputi 3 komponen utama yakni
                                        kompetensi pendukung professional, kompetensi pendukung soft skill, dan kompetensi
                                        pendukung talenta/jalur bakat. Dengan demikian, penerapan KPT-KKNI level 6 di Manajemen
                                        Kontemporer dan E-Commerce berupaya konsisten dalam membangun mutu lulusan di bidang
                                        manajemen kontempore</p>
                                </li>
                                <li>
                                    <h4>SEBARAN MATA KULIAH PROGRAM STUDI MANAJEMEN KONTEMPORER 2020</h4>
                                    <p>Jumlah sks Program Studi (minimum untuk kelulusan) :  144 sks yang tersusun sebagai berikut:</p>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                          <tr class="bg-info">
                                            <th colspan="5">Semester 1</th>
                                          </tr>
                                          <tr class="bg-success">
                                            <th scope="col">No</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Mata Kuliah</th>
                                            <th scope="col">SKS</th>
                                            <th scope="col">Keterangan</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>`19010001</td>
                                            <td>Pancasila*</td>
                                            <td>2</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>`19010001</td>
                                            <td>Pancasila*</td>
                                            <td>2</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>`19010001</td>
                                            <td>Pancasila*</td>
                                            <td>2</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">4</th>
                                            <td>`19010001</td>
                                            <td>Pancasila*</td>
                                            <td>2</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">5</th>
                                            <td>`19010001</td>
                                            <td>Pancasila*</td>
                                            <td>2</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">6</th>
                                            <td>`19010001</td>
                                            <td>Pancasila*</td>
                                            <td>2</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">7</th>
                                            <td>`19010001</td>
                                            <td>Pancasila*</td>
                                            <td>2</td>
                                            <td></td>
                                          </tr>
                                          <tr class="bg-warning">
                                            <th colspan="3">Jumlah SKS yang wajib diambil di semester ke-1</th>
                                            <th>20</th>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Box END ==== -->
@endsection