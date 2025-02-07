<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verceva Website</title>
    <!-- Link ke CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <!-- CloudFlare Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="hero">
        
                        <!-- navbar  start -->
 <nav>
        <a href="#"><h2 class="logo">Verc<span>eva</span>.</h2></a>

        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>

        <div class="icon">
            <a href="#"><i class="fa-regular fa-user"></i></a>
            <a href="#"><i class="fa-regular fa-heart"></i></a>
        </div>

        <div class="hamburger" onclick="toggleMenu()">
            ☰
        </div>
    </nav>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>


                        <!-- navbar  END -->

                     <!-- Landing Page Start -->

        <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="images/Cover3.jpg" alt="Image 1">
            </div>
            <div class="slide">
                <img src="images/Cover2edit.jpg" alt="Image 2">
            </div>
            <div class="slide">
                <img src="images/Cover4.jpg" alt="Image 3">
            </div>
        </div>
        <button class="arrow arrow-left">&#8249;</button>
        <button class="arrow arrow-right">&#8250;</button>
    </div>

    <script>
        const slides = document.querySelector('.slides');
        const slideCount = document.querySelectorAll('.slide').length;
        const leftArrow = document.querySelector('.arrow-left');
        const rightArrow = document.querySelector('.arrow-right');

        let currentIndex = 0;
        let autoScrollInterval;

        function updateSlidePosition() {
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function goToNextSlide() {
        currentIndex = (currentIndex === slideCount - 1) ? 0 : currentIndex + 1;
        updateSlidePosition();

        }

        function goToPreviousSlide() {
        currentIndex = (currentIndex === 0) ? slideCount - 1 : currentIndex - 1;
        updateSlidePosition();
    }

    leftArrow.addEventListener('click', () => {
        goToPreviousSlide();
        resetAutoScroll();
    });

    rightArrow.addEventListener('click', () => {
        goToNextSlide();
        resetAutoScroll();
    });

    function startAutoScroll() {
        autoScrollInterval = setInterval(goToNextSlide, 3000); // Change slides every 3 seconds
    }

    function resetAutoScroll() {
        clearInterval(autoScrollInterval);
        startAutoScroll();
    }

    startAutoScroll();
</script>
    </div>

                    <!-- Landing Page End-->
  
                    
                    <!-- Promo Prices Start  -->
                    <section class="promo-prices">
    <div class="subtitle">Only The Best</div>
    <div class="heading">Promo Prices</div>

    <div class="carousel-container">
        <button class="prev-btn">&#10094;</button> <!-- Tombol Kiri -->

        <div class="carousel">
            <div class="card">
                <img src="images/product1.jpg" alt="Promo 1">
                <p>-30% off on all bags</p>
                <button>Shop Now</button>
            </div>
            <div class="card active"> <!-- Card tengah -->
                <img src="images/product2.jpg" alt="Promo 2">
                <p>-30% off coats & jackets</p>
                <button>Shop Now</button>
            </div>
            <div class="card">
                <img src="images/product1.jpg" alt="Promo 3">
                <p>-25% off on shoes</p>
                <button>Shop Now</button>
            </div>
        </div>

        <button class="next-btn">&#10095;</button> <!-- Tombol Kanan -->
    </div>
</section>


                     <!-- Promo Prices END  -->

                      <!-- New Arrivals Start-->
    
                      <section class="new-arrivals">
    <div class="subtitle">Only The Best</div>
    <div class="heading">New Arrival</div>

    <div class="carousel-container">
        <button class="prev-btn">&#10094;</button> <!-- Tombol Kiri -->

        <div class="carousel">
            <div class="product-card">
                <img src="images/product1.jpg" alt="Product 1">
                <h3>Women's Long Dress</h3>
                <p>$45.00</p>
            </div>
            <div class="product-card active"> <!-- Card tengah -->
                <img src="images/product2.jpg" alt="Product 2">
                <h3>2 Piece Swimsuit</h3>
                <p>$35.00</p>
            </div>
            <div class="product-card">
                <img src="images/product1.jpg" alt="Product 3">
                <h3>Men's Blue Jacket</h3>
                <p>$145.00</p>
            </div>
        </div>

        <button class="next-btn">&#10095;</button> <!-- Tombol Kanan -->
    </div>
</section>

<!-- JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const carousels = document.querySelectorAll(".carousel-container"); // Ambil semua carousel-container

    carousels.forEach(container => {
        let angle = 0;
        const carousel = container.querySelector(".carousel");
        const nextBtn = container.querySelector(".next-btn");
        const prevBtn = container.querySelector(".prev-btn");

        nextBtn.addEventListener("click", function () {
            angle -= 120; // Geser searah jarum jam
            carousel.style.transform = `rotateY(${angle}deg)`;
        });

        prevBtn.addEventListener("click", function () {
            angle += 120; // Geser berlawanan arah jarum jam
            carousel.style.transform = `rotateY(${angle}deg)`;
        });
    });
});

</script>






                        <!-- NEW Arrival END-->

                        <!-- Image Container start-->

<section class="image-container">
    <div class="image-box" style="background-image: url('images/poster1.png');"></div>
    <div class="image-box" style="background-image: url('images/poster1.png');"></div>
</section>


                        <!-- Image Container End -->


                        


                         <!-- Testimonial Start -->

<section class="testimonials">
    <div class="subtitle">Only The Best</div>
    <div class="heading">Testimonials</div>
    <div class="testimonial">
        <p>"Integer ut imperdiet erat. Quisque ultrices lectus tellus, eu tristique magna pharetra nec."</p>
        <h4>- Christine Smith</h4>
        <div class="profile-image">
            <img src="images/profil.jpg" alt="Christine Smith">
        </div>
    </div>
</section>


                        <!-- Testimonial End -->

                        
                       <!-- Poster promo start -->

 <div class="promo-section">
    <div class="promo-text">
      <h1>GRAND OPENING</h1>
      <p>Discover the Future of Style</p>
      <button>EXPLORE NOW</button>
    </div>
    <div class="promo-image">
      <img src="images/promo.jpg" alt="Promotional Image">
    </div>
  </div>


                        <!-- poster promo end -->


                        <!-- Footer Start -->


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

                        <!-- Footer End -->



</body>
</html>
