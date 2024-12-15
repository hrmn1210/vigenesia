<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center"
        style="background-image: url(<?= base_url('images/banner/' . $banner->photo) ?>)">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>ABOUT</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<div class="row">
    <div class="col-lg-6  mx-auto">
        <div class="container contact">
            <p>
                <?= $content->description ?>
            </p>
        </div>
    </div>
</div>

<section class="team_area p_20">
    <div class="container">
        <div class="main_title">
            <h2 data-aos="fade-up" data-aos-duration="1800">Tim Kami</h2>
            <p data-aos="fade-up" data-aos-duration="2000">Ini adalah developer pengembang Si-Pandai</p>
        </div>
        <section class="row justify-content-center">
            <div class="container">
                <!-- Baris Atas (4 Kolom) -->
                <div class="row justify-content-center mb-4">
                    <div class="col-md-3 col-sm-6 mb-4 d-flex justify-content-center" data-aos="fade-right"
                        data-aos-duration="1800">
                        <div class="card text-center border-0 shadow-sm"
                            style="box-shadow: 0 0 10px 4px #FF2400 !important;">
                            <div class="card-body">
                                <img src="<?= base_url('images/testimonials/pakreza.jpg'); ?>" alt="Andika"
                                    class="rounded-circle img-fluid mb-3 border border-3"
                                    style="width: 150px; height: 150px; object-fit: cover; border-color: white;">
                                <h5 class="card-title mb-0">Reza Maulana, M.Kom</h5>
                                <div class="mt-3">
                                    <a href="#" class="text-danger me-4"><i class="fa fa-instagram fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 d-flex justify-content-center" data-aos="fade-right"
                        data-aos-duration="900">
                        <div class="card text-center border-0 shadow-sm"
                            style="box-shadow: 0 0 10px 4px #FF2400 !important;">
                            <div class="card-body">
                                <img src="<?= base_url('images/testimonials/bulisna.jpg'); ?>" alt="Lisna"
                                    class="rounded-circle img-fluid mb-3 border border-3"
                                    style="width: 150px; height: 150px; object-fit: cover; border-color: white;">
                                <h5 class="card-title mb-0">Lisnawaty, S.T, M.Kom</h5>
                                <div class="mt-3">
                                    <a href="#" class="text-danger me-4"><i class="fa fa-instagram fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 d-flex justify-content-center" data-aos="fade-left"
                        data-aos-duration="900">
                        <div class="card text-center border-0 shadow-sm"
                            style="box-shadow: 0 0 10px 4px #FF2400 !important;">
                            <div class="card-body">
                                <img src="<?= base_url('images/testimonials/hrmn.jpg'); ?>" alt="Herman"
                                    class="rounded-circle img-fluid mb-3 border border-3"
                                    style="width: 150px; height: 150px; object-fit: cover; border-color: white;">
                                <h5 class="card-title mb-0">Herman Firmansyah</h5>
                                <div class="mt-3">
                                    <a href="#" class="text-danger me-4"><i class="fa fa-instagram fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>