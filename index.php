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
    <!-- lenis -->
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.8/dist/lenis.css">

    <!-- custom css -->
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
        .fade-out {
            opacity: 0;
            transform: translateY(-50px);
            transition: all 0.8s ease;
            pointer-events: none;
        }

        .copy-toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background: #333;
            color: #fff;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 9999;
        }

        .copy-toast.show {
            opacity: 1;
        }
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
            <a href="#" onclick="enableScroll()"><i class="bi bi-envelope-paper-heart mr-2"></i> BUKA UNDANGAN</a>
            <hr>
        </div>
    </section>
    <!-- end hero -->

    <section id="countdown" class="countdown d-flex flex-column align-items-center justify-content-end w-100 min-vh-100 p-3 mx-auto text-center">
        <!-- Swiper Background -->
        <div class="swiper countdown-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('/asset/img/1.jpg')"></div>
                <div class="swiper-slide" style="background-image: url('/asset/img/2.jpg')"></div>
                <div class="swiper-slide" style="background-image: url('/asset/img/3.jpg')"></div>
                <div class="swiper-slide" style="background-image: url('/asset/img/4.jpg')"></div>
            </div>
        </div>

        <!-- Overlay Content -->
        <div class="container mb-5 position-relative z-10">
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
        <div class="container-fluid g-0">
            <div class="row g-0">

                <!-- Bride Column -->
                <div class="col-md-6 vh-100 position-relative">
                    <div class="swiper swiper-couple bride-swiper h-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide bg-cover" style="background-image: url('asset/img/brid-2.jpg');"></div>
                            <div class="swiper-slide bg-cover" style="background-image: url('asset/img/brid-1.jpg');"></div>
                            <!-- Tambah slide jika perlu -->
                        </div>
                    </div>
                    <div class="couple-info position-absolute bottom-0 start-0 end-0 text-center p-4">
                        <h2 class="mb-2">Isma Ariyanty Juliani</h2>
                        <p class="mb-0">Putri dari</p>
                        <p class="mb-0">Bpk. Rokib (Alm) & Ibu. Yati (Almh)</p>
                    </div>
                </div>

                <!-- Groom Column -->
                <div class="col-md-6 vh-100 position-relative">
                    <div class="swiper swiper-couple groom-swiper h-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide bg-cover" style="background-image: url('asset/img/groom-2.jpg');"></div>
                            <div class="swiper-slide bg-cover" style="background-image: url('asset/img/groom-1.jpg');"></div>
                        </div>
                    </div>
                    <div class="couple-info position-absolute bottom-0 start-0 end-0 text-center p-4">
                        <h2 class="mb-2">Ecep Pirman Nurpatwa</h2>
                        <p class="mb-0">Putra dari</p>
                        <p class="mb-0">Bpk. Sahrudin (Alm) & Ibu. Sumartini</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end couple section -->

    <section id="quote" class="welcome p-3 mx-auto">
        <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="pt-5">Q.S Ar - rum : 21</h2>
            <p>"Dan diantara ayat -ayat(Nya) adalah dia menciptakan anda istri - istri dari jenismu sendiri agar kamu merasa nyaman padanya, dan dijakan(Nya) diantarmu mawaddah dan rahmah. Sebenarnya pada yang demikian itu benar - benar terdapat tanda - tanda bagi kaum yang berfikir."</p>
        </div>
    </section>
    <!-- end quote section -->

    <section id="event" class="position-relative">
        <!-- Swiper Background -->
        <div class="swiper event-swiper position-absolute top-0 start-0 w-100 z-n1">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-cover" style="background-image: url('asset/img/event-1.jpg');"></div>
                <div class="swiper-slide bg-cover" style="background-image: url('asset/img/event-2.jpg');"></div>
            </div>
        </div>

        <!-- Content Overlay -->
        <div class="container event-container d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 100vh;">
            <!-- Judul Wedding / Garis / Event -->
            <div class="d-flex justify-content-center align-items-center mt-3 mb-lg-5 p-3" data-aos="fade-up" data-aos-duration="2000">
                <hr class="my-0 mx-0">
                <h1 class="display-6 fw-bold m-0 px-3 text-nowrap">Wedding Event</h1>
                <hr class="my-0 mx-0">
            </div>

            <!-- Card -->
            <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img src="asset/img/event-3.jpg" alt="Contoh Gambar">
                <div class="card-content">
                    <div class="title-vertical">
                        <h3 class="display-4">Akad Nikah</h3>
                    </div>
                    <div class="description-date d-flex m-3">
                        <!-- Tanggal -->
                        <div class="d-flex align-items-center text-center">
                            <div class="date-number me-2">
                                <h2 class="fw-bold display-4">19</h2>
                            </div>
                            <div class="date-text text-start">
                                Minggu,<br>Oktober 2025
                            </div>
                        </div>

                        <!-- Garis Pemisah Estetik -->
                        <hr class="my-2 w-100" style="border: none; height: 2px; background: linear-gradient(to right, transparent, rgba(82, 78, 78, 0.7), transparent);">

                        <!-- Jam -->
                        <p class="text-center mt-lg-3"><i class="bi bi-clock-fill"></i> 08:00 WIB s/d Selesai</p>
                        <!-- <div class="mt-2">
                        </div> -->

                        <!-- Lokasi -->
                        <div>
                            <p class="mb-1 fw-bold">Lokasi:</p>
                            <p class="mb-2">Lapang Voli Kompak, RT/RW 04/05 Kp. Cibojong Ds. Balewangi, Kec Cisurupan - Garut</p>
                            <a href="https://maps.app.goo.gl/UMGPifmMJdt7Ps5X7?g_st=aw" target="_blank" class="btn btn-outline-secondary mt-lg-4 mb-lg-4">
                                📍 Buka Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="card" data-aos="fade-up" data-aos-duration="2000">
                <img src="asset/img/event-4.jpg" alt="Contoh Gambar">
                <div class="card-content">
                    <div class="title-vertical">
                        <h3 class="display-4">Resepsi</h3>
                    </div>
                    <div class="description-date d-flex">
                        <!-- Tanggal -->
                        <div class="d-flex align-items-center text-center">
                            <div class="date-number me-2">
                                <h2 class="fw-bold display-4">19</h2>
                            </div>
                            <div class="date-text text-start">
                                Minggu,<br>Oktober 2025
                            </div>
                        </div>

                        <!-- Garis Pemisah Estetik -->
                        <hr class="my-2 w-100" style="border: none; height: 2px; background: linear-gradient(to right, transparent, rgba(82, 78, 78, 0.7), transparent);">

                        <!-- Jam -->
                        <p class="text-center mt-lg-3"><i class="bi bi-clock-fill"></i> 11:00 WIB s/d Selesai</p>
                        <!-- <div class="mt-2">
                        </div> -->

                        <!-- Lokasi -->
                        <div class="mb-3">
                            <p class="mb-1 fw-bold">Lokasi:</p>
                            <p class="mb-2">Lapang Voli Kompak, RT/RW 04/05 Kp. Cibojong Ds. Balewangi, Kec Cisurupan - Garut</p>
                            <a href="https://maps.app.goo.gl/UMGPifmMJdt7Ps5X7?g_st=aw" target="_blank" class="btn btn-outline-secondary mt-lg-4 mb-lg-4">
                                📍 Buka Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end event section -->

    <section id="gallery" class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center mt-3" data-aos="fade-up" data-aos-duration="2000">
                <hr class="my-0 mx-0">
                <h2 class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">Gallery</h2>
                <hr class="my-0 mx-0">
            </div>
            <div id="lightgallery">
                <a href="asset/img/1.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/1.jpg" class="img-fluid rounded shadow-sm" alt="Image 1">
                </a>
                <a href="asset/img/2.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/2.jpg" class="img-fluid rounded shadow-sm" alt="Image 2">
                </a>
                <a href="asset/img/3.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/3.jpg" class="img-fluid rounded shadow-sm" alt="Image 3">
                </a>
                <a href="asset/img/4.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/4.jpg" class="img-fluid rounded shadow-sm" alt="Image 4">
                </a>
                <a href="asset/img/gallery-1.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/gallery-1.jpg" class="img-fluid rounded shadow-sm" alt="Image 5">
                </a>
                <a href="asset/img/gallery-2.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/gallery-2.jpg" class="img-fluid rounded shadow-sm" alt="Image 6">
                </a>
                <a href="asset/img/gallery-3.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/gallery-3.jpg" class="img-fluid rounded shadow-sm" alt="Image 7">
                </a>
                <a href="asset/img/gallery-4.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/gallery-4.jpg" class="img-fluid rounded shadow-sm" alt="Image 8">
                </a>
                <a href="asset/img/gallery-6.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/gallery-6.jpg" class="img-fluid rounded shadow-sm" alt="Image 10">
                </a>
                <a href="asset/img/gallery-7.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/gallery-7.jpg" class="img-fluid rounded shadow-sm" alt="Image 11">
                </a>
                <a href="asset/img/gallery-8.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/gallery-8.jpg" class="img-fluid rounded shadow-sm" alt="Image 12">
                </a>
                <a href="asset/img/gallery-9.jpg" class="gallery-item" data-aos="flip-left" data-aos-duration="1000">
                    <img src="asset/img/gallery-9.jpg" class="img-fluid rounded shadow-sm" alt="Image 13">
                </a>
            </div>
        </div>
    </section>

    <section id="wedding-gift" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" data-aos="fade-up" data-aos-duration="1000">Wedding Gift</h2>
                <p class="text-muted" data-aos="fade-up" data-aos-duration="1000">
                    Doa restu Anda adalah hadiah terbaik. Namun jika ingin memberikan tanda kasih, berikut informasi rekening kami.
                </p>
            </div>

            <div class="row justify-content-center mt-3 mb-3 p-2" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"
                data-aos-duration="1000">
                <div class="col-md-6">
                    <!-- ATM Style Card -->
                    <div class="atm-card text-white p-4 position-relative">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <img src="asset/img/SeaBank.png" alt="Seabank" style="height: 35px;">
                            <span class="small">Seabank</span>
                        </div>

                        <h5 class="mb-1">Nomor Rekening</h5>
                        <h3 class="fw-bold" id="rek-number">9012 4622 4849</h3>

                        <div class="mt-3">
                            <p class="mb-0">Nama Pemilik</p>
                            <h5 class="fw-bold">Isma Ariyanty Juliani</h5>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-light btn-sm mt-4" onclick="copyText('901246224849')">
                                📋 Salin Nomor
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3 mb-3 p-2" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine"
                data-aos-duration="1000">
                <div class="col-md-6">
                    <!-- ATM Style Card -->
                    <div class="atm-card text-white p-4 position-relative">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <img src="asset/img/bri.png" alt="BRI" style="height: 35px;">
                            <span class="small">BRI</span>
                        </div>

                        <h5 class="mb-1">Nomor Rekening</h5>
                        <h3 class="fw-bold" id="rek-number">4167 0103 1806 532</h3>

                        <div class="mt-3">
                            <p class="mb-0">Nama Pemilik</p>
                            <h5 class="fw-bold">Isma Ariyanty Juliani</h5>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-light btn-sm mt-4" onclick="copyText('416701031806532')">
                                📋 Salin Nomor
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="disqus" class="disqus row justify-content-center mt-3 mb-3 p-3">
                <div class="col-md-6">
                </div>
            </div>
            <div id="disqus_thread" data-aos="fade-up" data-aos-duration="1000"></div>
            <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document,
                        s = d.createElement('script');
                    s.src = 'https://isma-ecep.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>

        <!-- Toast -->
        <div id="copy-toast" class="copy-toast">Nomor rekening tersalin ✅</div>
    </section>

    <div id="audio-container">
        <audio id="audio" loop>
            <source src="asset/audio/backsound.mp3" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
        <div id="audio-icon" class="audio-icon"><i class="bi bi-disc"></i></div>
    </div>

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
    <!-- lenis -->
    <script src="https://unpkg.com/lenis@1.3.8/dist/lenis.min.js"></script>

    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="asset/js/custom.js"></script>

</body>

</html>