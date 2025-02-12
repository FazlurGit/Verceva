<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Verceva</title>
    <!-- Link ke CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleabout.css') }}">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="hero">
        <!-- Navbar Start -->
    
   <nav>
    <a href="#"><h2 class="logo">Verc<span>eva</span>.</h2></a>

    <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#">Catalogue</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>

    <div class="icon">
        <a href="#"><i class="fa-regular fa-user"></i></a>
        <a href="#"><i class="fa-regular fa-heart"></i></a>
    </div>

    <div class="hamburger" onclick="toggleMenu()">☰</div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <span class="close-btn" onclick="toggleMenu()">×</span>
        <ul>
            <li><a href="#{{ route('home') }}">Home</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    function toggleMenu() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }

    // Menutup sidebar saat klik di luar sidebar
    window.addEventListener('click', function (e) {
        const sidebar = document.getElementById('sidebar');
        const hamburger = document.querySelector('.hamburger');

        if (!sidebar.contains(e.target) && !hamburger.contains(e.target)) {
            sidebar.classList.remove('active');
        }
    });
</script>
        <!-- Navbar End -->

        <!-- Hero Content -->
        <div class="content">
    <h1 class="about-title">Tentang Kami</h1> <!-- Tambahkan judul jika diperlukan -->
    <p class="about-text">Verceva is a clothing brand established in 2024 in Bandung with the aim of creating elegant, calm, and simple yet captivating apparel.</p>
    <p class="about-text">Our products are designed to help people from all walks of life feel confident and comfortable in what they wear. Our brand’s designs are uniquely crafted to compete in the modern era. Our collection features a wide variety of clothing made from high-quality materials with unique designs.</p></br>
    <p class="about-text">We are committed to providing the best customer service. We want to ensure that you are satisfied with your purchases, and we are always ready to assist you. We believe that fashion should be fun and accessible.</p>
    <p class="about-text">We are confident you will love our collection and find the perfect clothing to express yourself.</p>
</div>
    </div>

    <main>
        <section class="about-section h4">
            <h4>Visi dan Misi Kami</h4>
            <p>
                Verceva bertujuan untuk menjadi pelopor dalam dunia fashion dengan mengedepankan kualitas, inovasi, dan tren terkini. Kami percaya bahwa setiap individu memiliki gaya unik, dan kami di sini untuk membantu Anda mengekspresikannya.
            </p>
        </section>
    </main>

    <footer>
    <footer class="footer">
    <div class="container-foot">
        <div class="footer-title">Verceva</div>
        <div class="footer-nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>
        <div class="social-icons">
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-reddit"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <p class="copyright">
        Copyright © 2025 Verceva. All rights reserved.
        </p>
    </div>
    </footer>

    </footer>
</body>
</html>
