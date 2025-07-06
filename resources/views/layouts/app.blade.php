<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gravronex Technology Private Limited</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Gravronex Technology Private Limited" />
    <meta property="og:description" content="Explore Gravronex Technology Private Limited's green and digital energy solutions." />

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
<script>
  document.addEventListener("input", function (e) {
    if (e.target.tagName.toLowerCase() === "textarea") {
      e.target.style.height = "auto";
      e.target.style.height = e.target.scrollHeight + "px";
    }
  });

  // Optional: auto-expand inputs if needed
  document.querySelectorAll("input[type='text'], input[type='email']").forEach(input => {
    input.addEventListener("input", () => {
      input.style.width = "100%"; // fixed width
      input.style.height = "auto";
      input.style.height = input.scrollHeight + "px";
    });
  });
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GYFM891DDV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GYFM891DDV');
</script>


</head>
<body>
    <header class="green-header">
    <div class="container">
        <a href="/">
            <img src="{{ asset('images/gravronex new logo.jpeg') }}" alt="Gravronex Logo" class="newlogo">
        </a>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About Us</a>
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
