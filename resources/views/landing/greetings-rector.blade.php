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
									<p style="text-align: justify">Welcome to the first cyber university of Indonesia, Asia Cyber University.  Our university is established since 2019 to meet the 21 century's needs, professional leader in a smart digital society under 4th industrialized revolution.</p>
									<p style="text-align: justify">Indonesia is an archipelago nation that consist almost 17.000 islands with the population around 270 million of people. Thus Indonesia has a great opportunity to be the key player in global competition, leading to digital economy market. This requires development of human resources that has major skill in IT literacy and applied science. In order to meet this goal, massive education through online higher education system is the only solution regarding the diversity of geographical condition in Indonesia as well as the quality discrepancy.</p>
									<p style="text-align: justify">Every year, more than 2 million talented young men and women from high school graduations are losing opportunity to continue higher education, mainly cased by economical problem and other urgent reasons.  Our cyber university provides solution that will provide top quality education service to you anytime, and wherever you are, without any bias, with very affordable tuition.  Online higher education can bring you into the top through bring you a learning system that can be everywhere not only in the city or big metro. Online learning system guides every students to be an active learner and full of joy through interactive activity and supported by digital material in Learning Management System.</p>
									<p style="text-align: justify">You will be the pioneer group to break the bias that education is possible only through physical facilities.  You can reach to world class lectures with top support from our professional staffs and top education technologies. Welcome to visit our homepage again and hope to start a journey together to write your own success story together with us.</p>
                                    <p>Thank you again, Best regards,</p>
                                    <p>Rector,</p>
                                    <p>Prof. Cho, Jang Youn  Ph.D., CPA</p>
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