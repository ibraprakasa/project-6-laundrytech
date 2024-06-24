@extends('layout.template')

@section('title', 'About')

@section('content')
	<div class="hero-wrap hero-wrap-2 js-fullheight " >
					<div class="overlay"></div>
			<div class="container bg-dark-subtle">
				<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
					<div class="col-md-9 ftco-animate pb-5">
						<h1 class="mb-0 bread text-center "><strong>About Us</strong></h1>
					</div>
				</div>
	        </div>
				</div>

				<div class="ftco-section ftco-about ftco-no-pt img">
								<div class="container">
									<div class="row d-flex">
										<div class="col-md-12 about-intro">
											<div class="row">
												<div class="col-md-6 d-flex align-items-stretch">
													<div class="img d-flex w-100 align-items-center justify-content-center md-3"
														style="background-image:url(images/home/kerja.jpg);">
													</div>
												</div>
					<div class="col-md-6 pl-md-2 py-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section">
								<span class="subheading">Tentang kami</span>
								<h2 class="mb-4">Laundry-Tech</h2>
								<p>Laundry-tech adalah platform berbasis web yang bertujuan untuk memberikan layanan laundry
                                berkualitas tinggi kepada masyarakat. Kami menggunakan teknologi timbangan pintar untuk memastikan
                                transparansi dan akurasi dalam setiap proses pencucian. Dengan tagline "Dari Kita Untuk Anda, Mencuci dengan Cerdas",
                                kami berkomitmen untuk menyediakan layanan laundry yang efisien, cepat, dan andal.
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	</div>
</div>

<div class="ftco-section testimony-section bg-bottom">
    <div class="overlay"></div>
<div class="container bg-dark-subtle">
    <div class="row justify-content-center pb-4">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Tim Kita</span>
            <h2 class="mb-4">Our Team</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
        <div class="col-lg-5 mb-5">
            <div class="card shadow" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/home/dini.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Web Developer - Pembuat Website</h5>
                            <p class="card-text">Saya, Dini Dama Yanti, adalah pengembang dari website ini. Dengan penuh dedikasi, saya menciptakan platform yang fungsional dan sesuai dengan kebutuhan pengguna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="card shadow" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Perancang Alat IoT</h5>
                            <p class="card-text">Saya, Abdullah Adam, adalah perancang alat timbangan pintar agar website ini bisa menampilkan data secara real-time dan efisien sesuai dengan kebutuhan pengguna.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="/images/home/abdullah.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="card shadow" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/home/farhan.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Membangun Server Website</h5>
                            <p class="card-text">Saya, Farhan Sahida, membangun server agar website ini berjalan dengan platform yang fungsional dan sesuai dengan kebutuhan pengguna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="card shadow" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Perancang Kinerja</h5>
                            <p class="card-text">Saya, Hafizhoh Viarma, merancang kinerja website dan alat IoT untuk memastikan performa optimal dan menyusun progres kerja tiap-tiap kegiatan.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="/images/home/hafizhoh.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
