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
</head>
<body>
    <div class="hero">
        
                        <!-- navbar  start -->
        <nav>
            <a href=""><h2 class="logo">Verc<span>eva</span>.</h2></a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Catalogue</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="icon">
                <a href="#"><i class="fa-regular fa-user"></i></a>
                <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
        </nav>

                        <!-- navbar  END -->

                     <!-- Landing Page Start -->

        <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="images/hero2.jpeg" alt="Image 1">
            </div>
            <div class="slide">
                <img src="images/hero.jpeg" alt="Image 2">
            </div>
            <div class="slide">
                <img src="images/hero3.jpg" alt="Image 3">
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
    <div class="subtitle" >Only The Best</div>
    <div class="heading">Promo Prices</div>
    <div class="promo-cards">
        <div class="card">
            <img src="images/product1.jpg" alt="Promo 1">
            <p>-30% off on all bags</p>
            <button>Shop Now</button>
        </div>
        <div class="card">
            <img src="images/product1.jpg" alt="Promo 2">
            <p>-30% off coats & jackets</p>
            <button>Shop Now</button>
        </div>
        <div class="card">
            <img src="images/product1.jpg" alt="Promo 3">
            <p>-25% off on shoes</p>
            <button>Shop Now</button>
        </div>
    </div>
</section>

                     <!-- Promo Prices END  -->

                      <!-- New Arrivals Start-->
    
<section class="new-arrivals">
<div class="subtitle" >Only The Best</div>
<div class="heading">New Arrival</div>
    <div class="product-grid">
        <div class="product-card">
            <img src="images/product1.jpg" alt="Product 1">
            <h3>Women's Long Dress</h3>
            <p>$45.00</p>
        </div>
        <div class="product-card">
            <img src="images/product1.jpg" alt="Product 2">
            <h3>2 Piece Swimsuit</h3>
            <p>$35.00</p>
        </div>
        <div class="product-card">
            <img src="images/product1.jpg" alt="Product 3">
            <h3>Men's Blue Jacket</h3>
            <p>$145.00</p>
        </div>
    </div>
</section>

                        <!-- NEW Arrival END-->

                        <!-- Image Container start-->

<section class="image-container">
    <div class="image-box" style="background-image: url('images/poster1.png');"></div>
    <div class="image-box" style="background-image: url('images/poster1.png');"></div>
</section>


                        <!-- Image Container End -->

                         <!-- Testimonial Start -->

<section class="testimonials">
    <h2>Testimonials</h2>
    <div class="testimonial">
        <p>"Integer ut imperdiet erat. Quisque ultrices lectus tellus, eu tristique magna pharetra nec."</p>
        <h4>- Christine Smith</h4>
    </div>
</section>

                        <!-- Testimonial End -->

                        <!-- Footer Start -->


<footer>
    <div class="footer-content">
        <h3>Verceva</h3>
        <p>Subscribe for a 20% discount and stay updated with our latest collections.</p>
        <form>
            <input type="email" placeholder="Enter your email">
            <button>Subscribe</button>
        </form>
    </div>
    <p>&copy; 2025 Verceva. All rights reserved.</p>
</footer>

                        <!-- Footer End -->



</body>
</html>
