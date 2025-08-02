<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isma & Ecep</title>
    <!-- Bootstrap CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="asset/css/style.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Hand:wght@400..700&family=Libertinus+Sans:ital@0;1&family=Merienda:wght@700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
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
        <div class="slideshow">
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

    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="asset/js/custom.js"></script>
</body>

</html>