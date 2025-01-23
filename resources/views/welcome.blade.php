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

        
        <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="images/hero2.jpeg" alt="Image 1">
            </div>
            <div class="slide">
                <img src="images/hero.jpeg" alt="Image 2">
            </div>
            <div class="slide">
                <img src="https://via.placeholder.com/800x400?text=Image+3" alt="Image 3">
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

        function updateSlidePosition() {
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        leftArrow.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? slideCount - 1 : currentIndex - 1;
            updateSlidePosition();
        });

        rightArrow.addEventListener('click', () => {
            currentIndex = (currentIndex === slideCount - 1) ? 0 : currentIndex + 1;
            updateSlidePosition();
        });
    </script>
    </div>
    <!-- navbar  end -->
        



</body>
</html>
