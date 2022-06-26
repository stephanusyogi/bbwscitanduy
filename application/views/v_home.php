<!-- Section Jumbotron -->
<div class="section-jumbotron">
    <div id="carouselImage" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselImage" data-slide-to="0" class="active"></li>
            <li data-target="#carouselImage" data-slide-to="1"></li>
            <li data-target="#carouselImage" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("assets/images/galeri1.jpg") ?>" class="d-block w-100">
                <div class="carousel-caption">
                    <h1 class="animate__animated animate__fadeInUp" style="animation-duration: 2s;">Judul Foto Kegiatan #1</h1>
                    <hr class="animate__animated animate__fadeInUp" style="animation-duration: 2s;">
                    <button type="button" class="btn btn-selengkapnya animate__animated animate__fadeInUp" p" style="animation-duration: 2s;">Baca Selengkapnya <span><i class="fas fa-angle-right"></i></span></button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("assets/images/galeri2.jpg") ?>" class="d-block w-100">
                <div class="carousel-caption">
                    <h1 class="animate__animated animate__fadeInUp" style="animation-duration: 2s;">Judul Foto Kegiatan #2</h1>
                    <hr class="animate__animated animate__fadeInUp" style="animation-duration: 2s;">
                    <button type="button" class="btn btn-selengkapnya animate__animated animate__fadeInUp" p" style="animation-duration: 2s;">Baca Selengkapnya <span><i class="fas fa-angle-right"></i></span></button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("assets/images/galeri3.jpg") ?>" class="d-block w-100">
                <div class="carousel-caption">
                    <h1 class="animate__animated animate__fadeInUp" style="animation-duration: 2s;">Judul Foto Kegiatan #3</h1>
                    <hr class="animate__animated animate__fadeInUp" style="animation-duration: 2s;">
                    <button type="button" class="btn btn-selengkapnya animate__animated animate__fadeInUp" p" style="animation-duration: 2s;">Baca Selengkapnya <span><i class="fas fa-angle-right"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Search Bar -->
<section class="section-search py-2">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 col-sm-4 col-12 saran-pengaduan">
                <a type="button" data-toggle="modal" data-target="#modalSaranPengaduan">
                    <i class="fas fa-bullhorn"></i><span> Saran & Pengaduan</span>
                </a>
                <!-- Modal Saran&Pengaduan -->
                <div class="modal fade" id="modalSaranPengaduan" tabindex="-1" aria-labelledby="modalSaranPengaduanLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalSaranPengaduanLabel">Formulir Saran & Pengaduan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <label for="nama">Nama :</label>
                                <input type="text" id="nama" class="form-control" placeholder="Masukan Nama Lengkap Anda">
                                <label for="nomor">No. Telepon (WA) :</label>
                                <input type="text" id="nomor" class="form-control" placeholder="Masukan Nomor WhatsApp Anda">
                                <label for="alamat">Alamat :</label>
                                <input type="text" id="alamat" class="form-control" placeholder="Masukan Alamat Anda">
                                <label for="saran">Saran :</label>
                                <textarea id="saran" class="form-control" cols="30" rows="10" placeholder="Tulis Saran Anda Disini"></textarea>
                                <label for="aduan">Pengaduan :</label>
                                <textarea id="aduan" class="form-control" cols="30" rows="10" placeholder="Tulis Aduan Anda Disini"></textarea>
                                <button class="btn btn-primary mt-3" type="submit">Kirim</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12 searchbox">
                <div class="bg-light rounded-pill shadow-sm">
                    <div class="input-group">
                        <input type="search" placeholder="Apa yang ingin anda cari?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12 sosmed d-flex">
                <a target="_blank"  href="#"><i class="fab fa-twitter-square ml-2"></i></a>
                <a target="_blank" href="https://www.facebook.com/profile.php?id=100068922141390"><i class="fab fa-facebook-square ml-2"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCnJWpir37dLy3bfe9o4C9Eg"><i class="fab fa-youtube-square ml-2"></i></a>
                <a target="_blank" href="https://instagram.com/pupr_sda_citanduy?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram-square ml-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Section Berita -->
<section class="section-berita">
    <div class="container py-4">
        <div data-aos="zoom-in">
            <h1 class="text-center mt-3">BERITA TERKINI</h1>
            <hr class="mb-4">
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 card-news">
                <div class="card mb-2">
                    <img src="<?= base_url("assets/images/berita1.jpeg") ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title mb-0">News Title #1</h5>
                        <small>00/00/00 00:00</small>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <small><a href="#">Baca Selengkapnya <span><i class="fas fa-angle-right"></i></span></a></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 card-news">
                <div class="card mb-2">
                    <img src="<?= base_url("assets/images/berita2.jpeg") ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title mb-0">News Title #2</h5>
                        <small>00/00/00 00:00</small>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <small><a href="#">Baca Selengkapnya <span><i class="fas fa-angle-right"></i></span></a></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 card-news">
                <div class="card mb-2">
                    <img src="<?= base_url("assets/images/berita3.jpeg") ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title mb-0">News Title #3</h5>
                        <small>00/00/00 00:00</small>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <small><a href="#">Baca Selengkapnya <span><i class="fas fa-angle-right"></i></span></a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Baca Berita Lain -->
<section class="section-beritalain py-2">
    <div class="container-fluid d-flex justify-content-center">
        <a class="mx-2" href="#">Baca Berita KemenPUPR</a>|
        <a  class="mx-2" href="#">Baca Berita SDA</a>
        |<a class="mx-2" href="#">Baca Berita Balai</a>
    </div>
</section>

<!-- Section Galeri -->
<section class="section-galeri">
    <div class="container py-4">
        <div data-aos="fade-up">
            <h1 class="text-center mt-3">GALERI BBWS CITANDUY</h1>
            <hr class="mb-4">
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 border py-2">
                <div class="d-flex justify-content-between w-100 mb-2">
                    <h3>Foto & Gambar</h3>
                    <div class="photo-btn d-flex align-items-center mr-1">
                        <i class="fas fa-chevron-circle-left mx-1"></i>
                        <i class="fas fa-chevron-circle-right mx-1"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= base_url("assets/images/galeri1.jpg") ?>">
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url("assets/images/galeri2.jpg") ?>">
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url("assets/images/galeri3.jpg") ?>">
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url("assets/images/galeri4.jpg") ?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 border  py-2">
                <div class=" w-100 mb-2">
                    <h3>Video</h3>
                </div>
                <div class="embed-youtube">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/S0eNCIu_Qdg" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                </div>
                <h5 class="card-title mb-0">Video title</h5>
                <small>00/00/00 00:00</small>
            </div>
        </div>
    </div>
</section>

<!-- Section Majalah -->
<section class="section-majalah">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 py-2 text-center">
                <div class="d-flex justify-content-between w-100 mb-2">
                    <h3>Majalah</h3>
                    <div class="photo-btn d-flex align-items-center mr-1">
                        <i class="fas fa-angle-left mx-1"></i>
                        <i class="fas fa-angle-right mx-1"></i>
                    </div>
                </div>
                <img src="<?= base_url("assets/images/majalahbbws.jpg") ?>">
                <br>
                <button type="button" class="btn btn-sm mt-3 px-4">Lihat Lainnya</button>
            </div>
            <div class="col-lg-4 col-md-12 py-2  text-center">
                <div class="d-flex justify-content-between w-100 mb-2">
                    <h3>Leflet / Booklet</h3>
                    <div class="photo-btn d-flex align-items-center mr-1">
                        <i class="fas fa-angle-left mx-1"></i>
                        <i class="fas fa-angle-right mx-1"></i>
                    </div>
                </div>
                <img src="<?= base_url("assets/images/majalahbbws.jpg") ?>">
                <br>
                <button type="button" class="btn btn-sm mt-3  px-4">Lihat Lainnya</button>
            </div>
            <div class="col-lg-4 col-md-12 py-2 text-center">
                <div class="d-flex justify-content-between w-100 mb-2">
                    <h3>Poster</h3>
                    <div class="photo-btn d-flex align-items-center mr-1">
                        <i class="fas fa-angle-left mx-1"></i>
                        <i class="fas fa-angle-right mx-1"></i>
                    </div>
                </div>
                <img src="<?= base_url("assets/images/majalahbbws.jpg") ?>">
                <br>
                <button type="button" class="btn btn-sm mt-3  px-4">Lihat Lainnya</button>
            </div>
        </div>
    </div>
</section>

<!-- Section Link -->
<section class="section-link">
    <div class="container-fluid pt-4">
    <div data-aos="fade-up">
        <h1 class="text-center mt-3">LINK & APLIKASI TERKAIT</h1>
        <hr class="mb-4">
    </div>
    </div>
    <div class="container py-4">
        <!-- Link -->
        <div class="row links">
            <div class="col-md-12">
                <div id="carouselLink" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="http://sda.pu.go.id/tkpsda/citanduy/"><img src="<?= base_url("assets/images/link1.jpg") ?>"></a>
                                </div>
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="http://bbwscitanduy.sdatelemetry.com/"><img src="<?= base_url("assets/images/link2.jpg") ?>"></a>
                                </div>
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="http://sihlsda.sda.pu.go.id/"><img src="<?= base_url("assets/images/link3.jpg") ?>"></a>
                                </div>
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="http://103.122.35.5/"><img src="<?= base_url("assets/images/link4.png") ?>"></a>
                                </div>
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="https://www.worldwaterday.org/"><img src="<?= base_url("assets/images/link5.jpg") ?>"></a>
                                </div>
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="http://sda.pu.go.id/bpsda/ppsda/"><img src="<?= base_url("assets/images/link6.png") ?>"></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="http://www.inawater.org/en/"><img src="<?= base_url("assets/images/link7.jpg") ?>"></a>
                                </div>
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="http://pug-pupr.pu.go.id/"><img src="<?= base_url("assets/images/link8.jpg") ?>"></a>
                                </div>
                                <div class="col-md-2 col-sm-2 col-6">
                                    <a target="_blank" href="http://sda.pu.go.id/"><img src="<?= base_url("assets/images/link9.png") ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev link-prev" type="button" data-target="#carouselLink" data-slide="prev">
                        <span class="fas fa-angle-left" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next link-next" type="button" data-target="#carouselLink" data-slide="next">
                        <span class="fas fa-angle-right" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Aplikasi -->
        <div class="row apps mt-4">
            <div class="col-md-12 px-4">
                <div id="carouselApp" class="carousel slide mx-4" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-md-3  col-sm-3 col-6">
                                    <a target="_blank" href="http://sigab.bbwscitanduy.id/"><img class="mb-2" src="<?= base_url("assets/images/aplikasi1.png") ?>"></a>
                                </div>
                                <div class="col-md-3 col-sm-3 col-6">
                                    <a target="_blank" href="http://222.124.202.180/web/"><img class="mb-2" src="<?= base_url("assets/images/aplikasi2.jpg") ?>"></a>
                                </div>
                                <div class="col-md-3 col-sm-3 col-6">
                                    <a target="_blank" href="http://emonitoring.pu.go.id/"><img class="mb-2" src="<?= base_url("assets/images/aplikasi3.png") ?>"></a>
                                </div>
                                <div class="col-md-3 col-sm-3 col-6">
                                    <a target="_blank" href="http://eoffice.pu.go.id/"><img class="mb-2" src="<?= base_url("assets/images/aplikasi4.png") ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev apps-prev" type="button" data-target="#carouselApp" data-slide="prev">
                        <span class="fas fa-angle-left" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next apps-next" type="button" data-target="#carouselApp" data-slide="next">
                        <span class="fas fa-angle-right" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
