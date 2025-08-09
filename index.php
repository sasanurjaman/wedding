<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isma & Ecep</title>
    <!-- Bootstrap CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Hand:wght@400..700&family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Merienda:wght@300..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">
    <!-- Swiper -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    <!-- AOS (Animate On Scroll) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css" rel="stylesheet">
    <!-- LightGallery CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">
    <!-- Optional Animate.css for Hover Effect -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="asset/css/style.css">
    <style>

    </style>
</head>

<body>
    <section id="hero" class="hero d-flex flex-column align-items-center justify-content-between w-100 min-vh-100 p-3 mx-auto text-center">
        <div class="mt-0"> <!-- Div untuk konten atas -->
            <h5>The Wedding Of</h5>
            <h1>Isma & Ecep</h1>
        </div>

        <div class="mb-5"> <!-- Div untuk konten bawah -->
            <h6>Kepada Yth</h6>
            <h6>Bpk/Ibu/Saudara/i</h6>
            <h4>Syamsul & Istri</h4>
            <hr>
            <a href="#hero"><i class="bi bi-envelope-paper-heart mr-2"></i> BUKA UNDANGAN</a>
            <hr>
        </div>
    </section>
    <!-- end hero -->

    <section id="countdown" class="countdown d-flex flex-column align-items-center justify-content-end w-100 min-vh-100 p-3 mx-auto text-center">
        <div class="slideshow" data-aos="zoom-out" data-aos-duration="2000">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>
        <div class="container mb-5"> <!-- mb-5 untuk margin bottom -->
            <h5>The Wedding of</h5>
            <h1>Isma & Ecep</h1>
            <!-- Countdown Timer -->
            <div id="wedding-countdown" class="mt-4">
                <div class="d-flex justify-content-center gap-3">
                    <div>
                        <span id="days" class="display-5">00</span>
                        <div>Hari</div>
                    </div>
                    <div>
                        <span id="hours" class="display-5">00</span>
                        <div>Jam</div>
                    </div>
                    <div>
                        <span id="minutes" class="display-5">00</span>
                        <div>Menit</div>
                    </div>
                    <div>
                        <span id="seconds" class="display-5">00</span>
                        <div>Detik</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end countdown section -->

    <section id="welcome" class="welcome p-3 mx-auto">
        <div class="container text-center" data-aos="fade-up" data-aos-duration="2000">
            <h2 class="pt-5">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>
            <h3 class="mb-3 mt-3">Assalamuálaikum Wr. Wb.</h3>
            <p>Tanpa mengurangi rasa hormat, kami mengundang Bpk/Ibu/Saudara/i</p>
            <p>serta kerabat sekalian untuk menghadiri acara pernikahan kami :</p>
        </div>
    </section>

    <!-- Section Couple -->
    <section id="couple" class="couple-section d-flex align-items-center w-100">
        <div class="container-fluid g-0" data-aos="fade-up" data-aos-duration="2000">
            <div class="row g-0">

                <!-- Bride Column -->
                <div class="col-md-6 vh-100 position-relative">
                    <div class="swiper bride-swiper h-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide bg-cover" style="background-image: url('asset/img/brid-2.jpg');"></div>
                            <div class="swiper-slide bg-cover" style="background-image: url('asset/img/brid-1.jpg');"></div>
                            <!-- Tambah slide jika perlu -->
                        </div>
                    </div>
                    <div class="couple-info position-absolute bottom-0 start-0 end-0 text-center p-4 text-white">
                        <h2 class="mb-2">Isma Ariyanty Juliani</h2>
                        <p class="mb-0">Putri dari</p>
                        <p class="mb-0">Bpk. Rokib (Alm) & Ibu. Yati (Almh)</p>
                    </div>
                </div>

                <!-- Groom Column -->
                <div class="col-md-6 vh-100 position-relative">
                    <div class="swiper groom-swiper h-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide bg-cover" style="background-image: url('asset/img/groom-2.jpg');"></div>
                            <div class="swiper-slide bg-cover" style="background-image: url('asset/img/groom-1.jpg');"></div>
                        </div>
                    </div>
                    <div class="couple-info position-absolute bottom-0 start-0 end-0 text-center p-4 text-white">
                        <h2 class="mb-2">Ecep Pirman Nurpatwa</h2>
                        <p class="mb-0">Putra dari</p>
                        <p class="mb-0">Bpk. Sahrudin (Alm) & Ibu. Sumartini</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end couple section -->

    <section id="welcome" class="welcome p-3 mx-auto">
        <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="pt-5">Q.S Ar - rum : 21</h2>
            <p>"Dan diantara ayat -ayat(Nya) adalah dia menciptakan anda istri - istri dari jenismu sendiri agar kamu merasa nyaman padanya, dan dijakan(Nya) diantarmu mawaddah dan rahmah. Sebenarnya pada yang demikian itu benar - benar terdapat tanda - tanda bagi kaum yang berfikir."</p>
        </div>
    </section>

    <section id="gallery" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Gallery</h2>
            <div id="lightgallery">
                <a href="asset/img/1.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/1.jpg" class="img-fluid rounded shadow-sm" alt="Image 1">
                </a>
                <a href="asset/img/2.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/2.jpg" class="img-fluid rounded shadow-sm" alt="Image 2">
                </a>
                <a href="asset/img/3.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/3.jpg" class="img-fluid rounded shadow-sm" alt="Image 3">
                </a>
                <a href="asset/img/4.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/4.jpg" class="img-fluid rounded shadow-sm" alt="Image 4">
                </a>
                <a href="asset/img/gallery-1.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/gallery-1.jpg" class="img-fluid rounded shadow-sm" alt="Image 5">
                </a>
                <a href="asset/img/gallery-2.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/gallery-2.jpg" class="img-fluid rounded shadow-sm" alt="Image 6">
                </a>
                <a href="asset/img/gallery-3.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/gallery-3.jpg" class="img-fluid rounded shadow-sm" alt="Image 7">
                </a>
                <a href="asset/img/gallery-4.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/gallery-4.jpg" class="img-fluid rounded shadow-sm" alt="Image 8">
                </a>
                <a href="asset/img/gallery-6.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/gallery-6.jpg" class="img-fluid rounded shadow-sm" alt="Image 10">
                </a>
                <a href="asset/img/gallery-7.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/gallery-7.jpg" class="img-fluid rounded shadow-sm" alt="Image 11">
                </a>
                <a href="asset/img/gallery-8.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/gallery-8.jpg" class="img-fluid rounded shadow-sm" alt="Image 12">
                </a>
                <a href="asset/img/gallery-9.jpg" class="gallery-item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="asset/img/gallery-9.jpg" class="img-fluid rounded shadow-sm" alt="Image 13">
                </a>
            </div>
        </div>
    </section>

    <!-- LightGallery CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

    <!-- LightGallery JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.min.js"></script>
    <!-- Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS (Animate On Scroll) -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>

    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="asset/js/custom.js"></script>

</body>

</html>