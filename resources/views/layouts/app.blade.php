<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gravronex</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                delay: 2000,       // Time between slides (in ms)
                disableOnInteraction: false // Continue autoplay even after user interaction
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1024: { slidesPerView: 3 },
                768: { slidesPerView: 2 },
                480: { slidesPerView: 1 },
            }
        });
    });
</script>



</head>
<body>
    <header>
        <div class="container">
          <a href="/">
    <img src="{{ asset('images/gravronex.jpeg') }}" alt="Gravronex Logo" class="logo">
</a>

            <nav>
                <a href="/">Home</a>
                <a href="/about">About Us</a> <!-- Added About Us link -->
                <a href="/contact">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Gravronex. All rights reserved.</p>
    </footer>
</body>
</html>
