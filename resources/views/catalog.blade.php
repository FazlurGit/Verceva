<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verceva Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylecatalog.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Header / Navbar -->
    <div class="hero">
        <nav>
            <a href="{{ route('home') }}"><h2 class="logo">Verc<span>eva</span>.</h2></a>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('catalog') }}">Catalogue</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <div class="icon">
                <a href="#"><i class="fa-regular fa-user"></i></a>
                <a href="#"><i class="fa-regular fa-heart"></i></a>
            </div>
        </nav>
        <div class="content">
            <h1>Welcome to Verceva</h1>
            <p>Explore our women's clothing collection</p>
        </div>
    </div>

    <!-- Kategori -->
    <nav class="bg-white shadow-sm sticky top-[60px] z-40">
    <div class="container mx-auto px-4 py-2 flex gap-4 overflow-x-auto justify-center">
        @php
            $categories = ['Red Carpet', 'Dresses', 'Skirts', 'Trousers', 'Jeans', 'Jumpsuits', 'Knits'];
        @endphp
        @foreach($categories as $index => $category)
            <button class="px-4 py-2 {{ $index == 0 ? 'bg-yellow-500 text-white' : 'bg-gray-200 text-gray-700' }} rounded-full">
                {{ $category }}
            </button>
        @endforeach
    </div>
</nav>


    <!-- Katalog Produk -->
    <div class="container mt-4">
        <div class="row">
            @if (!empty($products))
                @foreach($products as $product)
                    <div class="col-md-3 mb-4">
                        <div class="product-card text-center">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="product-image">
                            <h5 class="product-title">{{ $product['name'] }}</h5>
                            <p class="product-price">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No products available.</p>
            @endif
        </div>
    </div>

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
