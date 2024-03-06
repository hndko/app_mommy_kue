<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Mendapatkan nama hari dalam bahasa Indonesia dari tanggal
function getNamaHari($tanggal)
{
    $nama_hari = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );
    $nama_hari_indonesia = $nama_hari[date('w', strtotime($tanggal))];
    return $nama_hari_indonesia;
}

// Mendapatkan tanggal dalam format yang diinginkan
function getTanggal($tanggal)
{
    $bulan = array(
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
    );

    $tanggal_indonesia = date('d ', strtotime($tanggal)) . $bulan[date('F', strtotime($tanggal))] . date(' Y', strtotime($tanggal));
    return $tanggal_indonesia;
}


// Mendapatkan jam dalam format yang diinginkan
function getJam($tanggal)
{
    $jam_indonesia = date('H:i', strtotime($tanggal));
    return $jam_indonesia;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $set_umum->title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/<?= $set_umum->logo ?>" type="image/x-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">
    <style>
        /* Tambahkan CSS untuk countdown */
        .countdown-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .countdown-item {
            margin: 0 10px;
            text-align: center;
        }

        .countdown-number {
            font-size: 36px;
            font-weight: bold;
            color: #fff;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 10px;
            display: inline-block;
        }

        .countdown-label {
            display: block;
            margin-top: 5px;
            font-size: 14px;
            color: #333;
        }

        .invitation-text {
            margin-top: 30px;
            text-align: center;
        }

        .invitation-text h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .invitation-text p {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .invitation-text strong {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="<?= base_url() ?>assets/img/logo.png" alt=""> -->
                <h1><?= $set_umum->judul ?><span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#portofolio">Portofolio</a></li>
                    <li><a href="#galeri-foto">Galeri Foto</a></li>
                    <li><a href="#lokasi">Lokasi</a></li>
                    <li><a href="#ucapan">Ucapan</a></li>
                </ul>
            </nav>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="beranda" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Undangan</h2>
                    <p data-aos="fade-up" data-aos-delay="100"><?= getTanggal($acara->datetime) ?></p>

                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="<?= base_url() ?>assets/img/<?= $set_umum->logo ?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <section id="countdown" class="countdown">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Countdown</h2>
                    <p>Grand Opening</p>
                </div>
                <div class="countdown-container">
                    <div class="countdown-item">
                        <span id="days" class="countdown-number"></span>
                        <span class="countdown-label">Days</span>
                    </div>
                    <div class="countdown-item">
                        <span id="hours" class="countdown-number"></span>
                        <span class="countdown-label">Hours</span>
                    </div>
                    <div class="countdown-item">
                        <span id="minutes" class="countdown-number"></span>
                        <span class="countdown-label">Minutes</span>
                    </div>
                    <div class="countdown-item">
                        <span id="seconds" class="countdown-number"></span>
                        <span class="countdown-label">Seconds</span>
                    </div>
                </div>

                <!-- Invitation Text -->
                <div class="invitation-text">
                    <?= $acara->text_start ?>
                    <p><strong>Hari:</strong> <?= getNamaHari($acara->datetime) ?></p>
                    <p><strong>Tanggal:</strong> <?= getTanggal($acara->datetime) ?></p>
                    <p><strong>Jam:</strong> <?= getJam($acara->datetime) ?></p>
                    <?= $acara->text_end ?>
                </div>
                <!-- End Invitation Text -->
            </div>
        </section>

        <section id="portofolio" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Portofolio</h2>
                    <p>Apa yang Mereka <span>Katakan Tentang Kami</span></p>
                </div>
                <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="<?= base_url() ?>assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="<?= base_url() ?>assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section id="galeri-foto" class="gallery section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Galeri Foto</h2>
                    <p>Periksa <span>Galeri Kami</span></p>
                </div>
                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/img/gallery/gallery-1.jpg"><img src="<?= base_url() ?>assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/img/gallery/gallery-2.jpg"><img src="<?= base_url() ?>assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/img/gallery/gallery-3.jpg"><img src="<?= base_url() ?>assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/img/gallery/gallery-4.jpg"><img src="<?= base_url() ?>assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/img/gallery/gallery-5.jpg"><img src="<?= base_url() ?>assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/img/gallery/gallery-6.jpg"><img src="<?= base_url() ?>assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/img/gallery/gallery-7.jpg"><img src="<?= base_url() ?>assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url() ?>assets/img/gallery/gallery-8.jpg"><img src="<?= base_url() ?>assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section id="lokasi" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Lokasi</h2>
                    <p>Periksa <span>Lokasi Kami</span></p>
                </div>

                <div class="mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p><?= $set_umum->alamat ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p><?= $set_umum->email ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p><?= $set_umum->no_telpon ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                                    <strong>Sunday:</strong> Closed
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ucapan" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Ucapan</h2>
                    <p>Berikan <span>Ucapan</span></p>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" role="form" class="p-3 p-md-4">
                            <div class="row mb-3">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama" autocomplete="off" maxlength="155" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <select name="konfirmasi_kehadiran" id="konfirmasi_kehadiran" class="form-select" required>
                                        <option value="">Konfirmasi Kehadiran</option>
                                        <option value="1">Hadir</option>
                                        <option value="2">Tidak Hadir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control" name="ucapan" id="ucapan" rows="5" placeholder="Ucapan" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark" style="width: 100px;">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="card mb-3 border-0 bg-light">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold">Fimansyah Nurindra Widyakusuma</span>
                                            <small class="btn btn-dark btn-sm ms-auto"><i class="bi bi-check-circle-fill"></i> Tidak Hadir</small>
                                        </div>
                                        <small class="text-muted"><i class="bi bi-clock"></i> 1 bulan, 4 minggu lalu</small>
                                        <div>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            <?= $set_umum->alamat ?>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> <?= $set_umum->no_telpon ?><br>
                            <strong>Email:</strong> <?= $set_umum->email ?><br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="<?= $sosmed->twitter ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="<?= $sosmed->facebook ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="<?= $sosmed->instagram ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="<?= $sosmed->tiktok ?>" class="tiktok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><?= $set_umum->judul ?></span></strong> Support By <strong><span>CMS Group</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script>
        // Tanggal target countdown (ganti dengan tanggal yang diinginkan)
        var countDownDate = new Date("<?= $acara->datetime ?>").getTime();

        // Memperbarui countdown setiap 1 detik
        var x = setInterval(function() {

            // Dapatkan tanggal dan waktu saat ini
            var now = new Date().getTime();

            // Hitung selisih waktu antara sekarang dan tanggal target
            var distance = countDownDate - now;

            // Hitung waktu yang tersisa dalam hari, jam, menit, dan detik
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Menampilkan hasil countdown pada elemen dengan id yang sesuai
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // Jika waktu countdown telah berakhir, tampilkan pesan
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "<p>Countdown has ended!</p>";
            }
        }, 1000);
    </script>
</body>

</html>