<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Privilege Driving School')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.css') }}">

    @stack('styles')
</head>
<body>



<!-- Main Content -->
<main class="">
    @yield('content')

    <!-- WhatsApp Button -->
    <a href="https://wa.me/your-number" class="floating-btn whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Back to Top Button -->
    <button id="backToTop" class="floating-btn">
        <i class="fas fa-arrow-up"></i>
    </button>

</main>


<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        const carouselElement = document.querySelector('#reviewsCarousel');
        const carousel = new bootstrap.Carousel(carouselElement, {
            interval: 5000,     // Slide every 5 seconds
            ride: 'carousel',
            pause: 'hover',     // Pause on mouse hover
            wrap: true          // Loop slides
        });
    });

    // Get the button
    const backToTopButton = document.getElementById('backToTop');

    window.onscroll = function() {
        // Show button after scrolling down 100px
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }
    };

    // Scroll smoothly to the top when button clicked
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });


    document.addEventListener('DOMContentLoaded', function () {
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true,
        });
    });


</script>

@yield('scripts')
</body>
</html>
