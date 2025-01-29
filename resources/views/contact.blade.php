<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verceva Website</title>
    <!-- Link ke CSS -->
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Catalogue</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="icon">
                <a href="#"><i class="fa-regular fa-user"></i></a>
                <a href="#"><i class="fa-regular fa-heart"></i></a>
                <a href="#" id="hamburger"><i class="fa-solid fa-bars"></i></a>
            </div>
        </nav>

                        <!-- navbar  END -->

                         <!-- Poster promo start -->

<div class="promo-section">
  <div class="promo-text">
    <h1>Welcome to Our Contact Page</h1>
    <p>If you have any questions or feedback, we’re here to assist you. Let’s work together to create something amazing!</p>
    <a href="#contact-form">
            <button>Get in Touch</button>
        </a>
</div>
</div>



                        <!-- poster promo end -->

                        <!-- Main Page Contact Start  -->

    <div class="container" id="contact-form">
        <div class="info-cards">
            <div class="info-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Jl.Bangkit V Blok H2 No 12<br>Bandung, Panyileukan</p>
            </div>
            <div class="info-card">
                <i class="fas fa-envelope"></i>
                <h3>E-Mail</h3>
                <p>Aep123@gmail.com</p>
            </div>
            <div class="info-card">
            <i class="fa-solid fa-phone-volume"></i>
                <h3>Reach Us</h3>
                <p>+62 831-0039-8719</p>
            </div>
        </div>
        <div class="form-container">
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="E-mail" required>
                <input type="text" placeholder="Phone Number" required>
                <input type="text" placeholder="Subject" required>
                <textarea placeholder="Write Your Message" rows="5" required></textarea>
                <button type="submit">Send Now</button>
            </form>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1198.827471858873!2d107.71230960891101!3d-6.946285998991926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1737799380003!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <!-- Main Page Contact Start  -->

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