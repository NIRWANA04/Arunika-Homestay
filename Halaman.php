<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nirwana</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #fff5e1;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .main-btn, .cta-btn, .view-room-btn {
            background-color: #AF8F6F;
            color: white;
            padding: 5px 10px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .main-btn:hover, .cta-btn:hover, .view-room-btn:hover {
            background-color: #543310;
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
        }

        .hero-section {
            background: url('homestay.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 150px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

        .feature, .about-section, .rooms-section {
            padding: 50px 0;
        }

        .feature h2, .about-section h2, .rooms-section h2, .cta-section h2, .contact-section h2{
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: bold;
            color: #543310;            
        }

        .feature p, .about-section p, .rooms-section .card-text {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }

        .feature .icon {
            font-size: 3rem;
            color: #74512D;
            margin-bottom: 20px;
        }

        .cta-section {
            background-color: #74512D;
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .room-card {
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }

        .room-card:hover {
            transform: scale(1.05);
        }

        .room-card img {
            border-radius: 10px 10px 0 0;
        }

        .room-card .card-body {
            padding: 20px;
        }

        .room-card .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .about-section {
            background-color: #f4ede3;
            padding: 60px 0;
        }

        .about-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .about-section .about-content {
            padding: 20px;
        }
        
        .contact-section {
            background-color: #f4ede3;
            padding: 10px 0 1px;
        }

        .contact-info .col-md-4 {
            transition: transform 0.3s;
        }

        .contact-info .col-md-4:hover {
            transform: scale(1.1);
        }

        .contact-info i {
            color: #AF8F6F;
            transition: color 0.3s;
        }

        .contact-info a:hover i {
            color: #543310;
        }

        .contact-info .col-3,
        .contact-info .col-sm-2 {
            padding-left: 2px;
            padding-right: 2px;
        }

        .contact-info i {
            font-size: 1.5rem;
            margin-bottom: 3px;
        }

        .contact-section .container {
            padding: 20px 0;
        }
        
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                 <img src="logo.png" alt="Arunika Homestay" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="#rooms">Kost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="#contact">Kontak</a>
                    </li>
                </ul>
                <a href="Tampilan.php" class="main-btn ms-lg-4">Masuk/Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1>Selamat Datang di Nirwana Homestay</h1>
                    <p>Kosan dengan lingkungan bersih, aman, dan nyaman.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Feature Section -->
    <section class="feature">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h2>Kamar yang Nyaman</h2>
                    <p>Kamar-kamar kami dirancang untuk memberikan kenyamanan dan kemudahan maksimal.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h2>Keamanan</h2>
                    <p>Kami menyediakan lingkungan yang aman dengan sistem keamanan 24/7 untuk ketenangan Anda.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h2>Wi-Fi Gratis</h2>
                    <p>Tetap terhubung dengan akses internet berkecepatan tinggi yang tersedia di seluruh kost kost-an.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="about-us.jpg" alt="Tentang Kami">
                </div>
                <div class="col-lg-6 about-content">
                    <h2>Tentang Kami</h2>
                    <p>Arunika Homestay menawarkan pengalaman menginap yang nyaman dan aman dengan lingkungan yang bersih dan fasilitas lengkap. Kami berkomitmen untuk menyediakan layanan terbaik bagi para tamu dengan berbagai pilihan kamar yang sesuai dengan kebutuhan Anda.</p>
                    <p>Dengan fasilitas seperti Wi-Fi gratis, keamanan 24/7, dan kamar yang dirancang dengan baik, kami berusaha untuk membuat setiap tamu merasa seperti di rumah. Lokasi kami yang strategis juga memungkinkan akses mudah ke berbagai tempat penting di sekitar kota.</p>
                    <p>Tim kami yang ramah dan profesional siap membantu Anda kapan saja. Kami selalu berusaha untuk memberikan pelayanan terbaik untuk kenyamanan dan kepuasan para tamu yang menginap di Arunika Homestay.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
    <section id="rooms" class="rooms-section">
        <div class="container">
            <h2 class="text-center mb-5">Kost Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card room-card">
                        <img src="room11.webp" class="card-img-top" alt="Kamar 1">
                        <div class="card-body">
                            <h5 class="card-title">Kost Eksklusif</h5>
                            <p class="card-text">Kamar eksklusif dengan fasilitas premium seperti meja rias dan televisi.</p>
                            <a href="Login_pencari.php" class="view-room-btn">Lihat Kamar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card room-card">
                        <img src="room33.webp" class="card-img-top" alt="Kamar 2">
                        <div class="card-body">
                            <h5 class="card-title">Kost Campuran</h5>
                            <p class="card-text">Kost dengan aturan yang fleksibel,dan memiliki lingkungan yang santai.</p>
                            <a href="Login_pencari.php" class="view-room-btn">Lihat Kamar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card room-card">
                        <img src="room22.webp" class="card-img-top" alt="Kamar 3">
                        <div class="card-body">
                            <h5 class="card-title">Kost Loft</h5>
                            <p class="card-text">Kost dengan desain modern yang unik, membagi ruangan menjadi dua area.</p>
                            <a href="Login_pencari.php" class="view-room-btn">Lihat Kamar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="text-center mb-5">Hubungi Kami</h2>
            <div class="row contact-info justify-content-center">
                <div class="col-3 col-sm-1 text-center mb-2">
                    <a href="https://www.google.com/maps?q=KotaParepare,SulawesiSelatan" target="_blank">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                    </a>
                </div>
                <div class="col-3 col-sm-1 text-center mb-2">
                    <a href="tel:+6212345678">
                        <i class="fas fa-phone-alt fa-2x"></i>
                    </a>
                </div>
                <div class="col-3 col-sm-1 text-center mb-2">
                    <a href="mailto:arunika_homestay@gmail.com">
                        <i class="fas fa-envelope fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle (popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
