<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Arunika Homestay</title>
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

        .main-btn {
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

        .main-btn:hover {
            background-color: #543310;
            color: white;
            text-decoration: none;
            transform: translateY(-3px);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .section-content {
            font-size: 1rem;
            color: #555;
            margin-bottom: 30px;
        }

        .about-section, .team-section, .contact-section {
            padding: 70px 0;
        }

        .team-member {
            text-align: center;
            transition: transform 0.3s;
        }

        .team-member img {
            width: 190px; /* Reduced size */
            height: 190px; /* Fixed height to match width */
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h5 {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 1rem;
            color: #777;
        }

        .team-member:hover {
            transform: translateY(-10px);
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

        .team-section .section-title {
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: bold;
            color: #543310;
        }

        .team-member h5 {
            font-size: 1.5rem;
        }

        .team-member p {
            font-size: 1.25rem;
        }

        .contact-section .section-title {
            font-size: 2rem;
            margin-bottom: 20px;
            font-weight: bold;
            color: #543310;
        }

        .contact-info i {
            font-size: 1.5rem;
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
                        <a class="nav-link ms-4" href="tampilan_loginkw.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="Menu.php">Kost</a>
                    </li>
                </ul>
                <a href="Tampilan.php" class="main-btn ms-lg-4">Logout</a>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">Arunika Homestay</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="about-us.jpg" alt="Tentang Kami" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 section-content">
                    <p>Arunika Homestay menawarkan pengalaman menginap yang nyaman dan aman dengan lingkungan yang bersih dan fasilitas lengkap. Kami berkomitmen untuk menyediakan layanan terbaik bagi para tamu dengan berbagai pilihan kamar yang sesuai dengan kebutuhan Anda.</p>
                    <p>Dengan fasilitas seperti Wi-Fi gratis, keamanan 24/7, dan kamar yang dirancang dengan baik, kami berusaha untuk membuat setiap tamu merasa seperti di rumah. Lokasi kami yang strategis juga memungkinkan akses mudah ke berbagai tempat penting di sekitar kota.</p>
                    <p>Tim kami yang ramah dan profesional siap membantu Anda kapan saja. Kami selalu berusaha untuk memberikan pelayanan terbaik untuk kenyamanan dan kepuasan para tamu yang menginap di Arunika Homestay.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section bg-light">
        <div class="container">
            <h2 class="section-title">Team</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="team-member">
                        <img src="team1.jpg" alt="Tim 1" class="img-fluid">
                        <h5>Nirwana</h5>
                        <p>221011107</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="team-member">
                        <img src="team2.jpg" alt="Tim 2" class="img-fluid">
                        <h5>Saphira Nur Malika</h5>
                        <p>221011040</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="team-member">
                        <img src="team3.jpg" alt="Tim 3" class="img-fluid">
                        <h5>Edwin Tangaran</h5>
                        <p>221011118</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="team-member">
                        <img src="team4.jpg" alt="Tim 4" class="img-fluid">
                        <h5>Maulana Shufi Madani</h5>
                        <p>221011095</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="text-center section-title mb-5">Hubungi Kami</h2>
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
