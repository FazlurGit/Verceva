<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Dress - Verceva</title>
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>


    <!-- Navbar -->
    <nav>
    <a href="#"><h2 class="logo">Verc<span>eva</span>.</h2></a>

    <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('catalog') }}">Catalogue</a></li>
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
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('catalog') }}">Catalogue</a></li>
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

                        <!-- navbar  END -->


    <!-- Main Content -->
    <main class="container">
        <div class="product-detail">
            <div class="product-gallery">
                <img id="product-image" src="{{ asset('images/Reddress.jpg') }}" alt="Red Dress">
                <div id="magnifier" class="magnifier"></div>
            </div>
            <div class="product-info">
                <h2>Red Dress</h2>
                <p>Color:</p>
                <div class="color-options">
                    <div class="color black"></div>
                    <div class="color white"></div>
                </div>
                <p>Size:</p>
                <div class="size-options">
                    <span>36</span><span>38</span><span>40</span><span>42</span><span>44</span>
                </div>
                <p>Availability: In stock</p>

                <!-- Description section -->
                <section class="description">
                    <h3>Description</h3>
                    <div class="description-content">
                        <p>Short dress in lightweight crepe fabric with coat dress line and 3/4 sleeves...</p>
                    </div>
                </br>
                </section>

                <!-- Detail section -->
                <section class="detail">
                    <h3 class="section-header">Detail</h3>
                    <div class="detail-content hidden">
                        <p>This product is made from premium materials, ensuring comfort and durability...</p>
                    </div>
                </section>

                <!-- Packing section -->
                <section class="packing">
                    <h3 class="section-header">Packing</h3>
                    <div class="packing-content hidden">
                        <p>The item will be packed securely with environmentally friendly materials to ensure it arrives safely...</p>
                    </div>
                </section>
            </div>
        </div>

        <!-- Suggestions and Recently Viewed Sections -->
            <section class="you-may-like">
        <h3>You may also like</h3>
        <div class="product-suggestions">
            <div class="suggestion-item">
                <img src="../images/Reddress.jpg" alt="Product 1">
            </div>
            <div class="suggestion-item">
                <img src="../images/Blueskirt.jpg" alt="Product 2">
            </div>
            <div class="suggestion-item">
                <img src="../images/Blackjeans.jpg" alt="Product 3">
            </div>
            <div class="suggestion-item">
                <img src="../images/Denimjeans.jpg" alt="Product 4">
            </div>
        </div>
    </section>

        <section class="recently-viewed">
            <h3>Recently viewed</h3>
            <div class="product-recently-viewed-wrapper">
                <div class="product-recently-viewed">Product 1</div>
                <div class="product-recently-viewed">Product 2</div>
                <div class="product-recently-viewed">Product 3</div>
                <div class="product-recently-viewed">Product 4</div>
            </div>
        </section>
    </main>

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


    <!-- JavaScript untuk toggle dropdown -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function toggleSection(header, content) {
                header.addEventListener("click", function () {
                    if (content.style.maxHeight) {
                        // Jika sudah terbuka, tutup dengan transisi
                        content.style.maxHeight = null;
                    } else {
                        // Jika tertutup, atur tinggi ke tinggi aslinya untuk efek smooth
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                    header.classList.toggle("expanded");
                });
            }

            // Ambil elemen
            const detailHeader = document.querySelector(".detail .section-header");
            const detailContent = document.querySelector(".detail-content");
            const packingHeader = document.querySelector(".packing .section-header");
            const packingContent = document.querySelector(".packing-content");

            // Terapkan efek smooth toggle
            toggleSection(detailHeader, detailContent);
            toggleSection(packingHeader, packingContent);
        });

        document.addEventListener("DOMContentLoaded", function () {

            // Magnifier logic
            const image = document.getElementById("product-image");
            const magnifier = document.getElementById("magnifier");

            image.addEventListener("mousemove", function (e) {
                const rect = image.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                magnifier.style.display = "block";
                magnifier.style.left = `${x - magnifier.offsetWidth / 1000}px`;
                magnifier.style.top = `${y - magnifier.offsetHeight / 1000}px`;

                const zoomImage = image.cloneNode();
                zoomImage.style.position = "absolute";
                zoomImage.style.transform = `translate(-${x}px, -${y}px) scale(2)`;
                magnifier.innerHTML = "";
                magnifier.appendChild(zoomImage);
            });

            image.addEventListener("mouseleave", () => {
                magnifier.style.display = "none";
            });
        });

    </script>
</body>
</html>
