@extends('layouts.app')

@section('title', 'Privilege Driving School - Professional Driving Lessons')

@section('content')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <div class="logo">
                    <img src="{{ asset('frontend/assets/logo.png') }}" alt="Logo image">
                </div>
                <span class="app-name">{{ config('app.name', 'Privilege Driving School') }}</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Area Covers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#booking">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-up">
                        <h1>{{ $hero['title'] ?? 'Learn to Drive with Confidence' }}</h1>
                        <p>{{ $hero['subtitle'] ?? 'Professional driving lessons with experienced instructors. Start your journey to becoming a safe and confident driver today.' }}</p>
                        <a href="#booking" class="btn-primary-custom">Book Your Lesson</a>
                        <a href="#about" class="btn-outline-custom">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center aos-init aos-animate d-flex align-items-center justify-content-end" data-aos="fade-top">
                        <div class="floating">
                            <i class="fas fa-car"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title" data-aos="fade-up">{{ $about['title'] ?? 'Why Choose Privilege Driving School?' }}</h2>
                    <p class="section-subtitle" data-aos="fade-up">{{ $about['subtitle'] ?? 'We provide comprehensive driving education with a focus on safety, confidence, and excellence.' }}</p>
                </div>
            </div>
            <div class="row g-4">
                @foreach($features ?? [] as $feature)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="feature-card text-center">
                            <div class="feature-icon mx-auto">
                                <i class="{{ $feature['icon'] }}"></i>
                            </div>
                            <h4>{{ $feature['title'] }}</h4>
                            <p>{{ $feature['description'] }}</p>
                        </div>
                    </div>
                @endforeach

                @if(empty($features))
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="feature-card text-center">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h4>Expert Instructors</h4>
                            <p>Our certified instructors have years of experience and are committed to helping you become a safe driver.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="feature-card text-center">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-car"></i>
                            </div>
                            <h4>Modern Fleet</h4>
                            <p>Learn in our modern, well-maintained vehicles equipped with the latest safety features.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="feature-card text-center">
                            <div class="feature-icon mx-auto">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4>Flexible Schedule</h4>
                            <p>Choose from a variety of lesson times that fit your busy schedule, including evenings and weekends.</p>
                        </div>
                    </div>
                @endif
            </div>


            <!-- Areas Covered Section -->
            <div class="row align-items-center mt-5 pt-5" data-aos="fade-up">
                <div class="col-lg-4 position-relative mb-4 mb-lg-0">
                    <div class="image-stack d-flex justify-content-certer">
                        <i class="fa-solid fa-car-side" style="font-size: 15rem; color: rgb(250 107 3);"></i>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h4 class="fw-bold text-uppercase mb-3">Area Covers</h4>
                    <p class="font-bold" style="font-size: 1.2rem;">
                        Barking, Dagenham, Becontree, Dagenham Heatway, Dagenham East, Forest Gate, Romford, Loughton, Hainult, Ilford, Manor Park, East Ham,
                        Haringey, Chigwell, Chingford, Highams Park, Seven Kings, Newbury Park, Barkingside, Stratford, Goodmayes, Woodford, Gants Hill,
                        Walthamstow, Leyton, Leytonstone, Wanstead, Snaresbrook, Buckhurst Hill, Chadwell Heath, Collier Row, Plaistow, Canning Town.
                    </p>

                    <hr class="my-4">

                    <h5 class="fw-bold text-uppercase mb-2">Contact Us</h5>
                    <p class="mb-1">
                        <i class="fas fa-phone-alt text-danger me-2"></i>
                        <a href="tel:01918631391" class="text-decoration-none text-dark">01918631391</a>
                    </p>
                    <p>
                        <i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:privilegedrivschool@gmail.com" class="text-decoration-none text-dark">privilegedrivschool@gmail.com</a>
                    </p>
                </div>
            </div>



        </div>
    </section>

    <!-- Services Section -->
    <section id="price" class="price">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title" data-aos="fade-up">{{ $services['title'] ?? 'Our Prices' }}</h2>
                    <p class="section-subtitle" data-aos="fade-up">{{ $services['subtitle'] ?? 'Choose the perfect package for your learning needs and budget.' }}</p>
                </div>
            </div>
            <div class="row g-4">
                @foreach($packages ?? [] as $package)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-image">
                                <i class="{{ $package['icon'] }}"></i>
                            </div>
                            <div class="service-content">
                                <div class="service-price">{{ $package['price'] }}</div>
                                <h4>{{ $package['title'] }}</h4>
                                <p>{{ $package['description'] }}</p>
                                <ul class="list-unstyled">
                                    @foreach($package['features'] as $feature)
                                        <li><i class="fas fa-check text-success me-2"></i>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if(empty($packages))
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-image">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="service-content">
                                <div class="service-price">£35/hour</div>
                                <h4>Individual Lessons</h4>
                                <p>Perfect for beginners or those who need refresher lessons. One-on-one instruction tailored to your pace.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>1 Hour Session</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Personal Instructor</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Flexible Timing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-image">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="service-content">
                                <div class="service-price">£299</div>
                                <h4>Intensive Course</h4>
                                <p>Get ready for your test quickly with our intensive driving course. Perfect for fast learners.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>10 Hour Package</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Test Preparation</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Save £50</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-image">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="service-content">
                                <div class="service-price">£799</div>
                                <h4>Complete Package</h4>
                                <p>Everything you need from beginner to test pass. Includes theory and practical test support.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>30 Hour Package</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Theory Test Support</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Save £250</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title" data-aos="fade-up">{{ $services['title'] ?? 'Our Courses' }}</h2>
                    <p class="section-subtitle" data-aos="fade-up">{{ $services['subtitle'] ?? 'Choose the perfect service for your learning needs and budget.' }}</p>
                </div>
            </div>
            <div class="row g-4">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-content">
                                <h4 class="service-price">{{ $service['title'] }}</h4>
                                <p>{{ $service['description'] }}</p>
                                <ul class="list-unstyled">
                                    @foreach($service->features ?? [] as $feature)
                                        <li><i class="fas fa-check text-success me-2"></i>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if(empty($services))
                    <div class="col-lg-3 col-md-3" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-content">
                                <h4 class="service-price">Individual Lessons</h4>
                                <p>Perfect for beginners or those who need refresher lessons. One-on-one instruction tailored to your pace.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>1 Hour Session</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Personal Instructor</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Flexible Timing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-content">
                                <h4 class="service-price">Intensive Course</h4>
                                <p>Get ready for your test quickly with our intensive driving course. Perfect for fast learners.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>10 Hour Package</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Test Preparation</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Save £50</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-content">
                                <h4 class="service-price">Complete Package</h4>
                                <p>Everything you need from beginner to test pass. Includes theory and practical test support.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>30 Hour Package</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Theory Test Support</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Save £250</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-content">
                                <h4 class="service-price">Complete Package</h4>
                                <p>Everything you need from beginner to test pass. Includes theory and practical test support.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>30 Hour Package</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Theory Test Support</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Save £250</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking" class="booking">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title" data-aos="fade-up">Book Your Driving Lesson</h2>
                    <p class="section-subtitle" data-aos="fade-up">
                        Ready to start your driving journey? Fill out the form and we’ll get in touch shortly.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    @if(session('success'))
                        <div class="alert alert-success text-success mb-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form class="booking-form" id="bookingForm" method="POST" action="{{ route('booking.store') }}" data-aos="fade-up" >
                        @csrf
                        <div class="row g-3">

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" maxlength="100" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9\s+\-]+" required>
                            </div>

                            <!-- Postcode -->
                            <div class="col-md-6">
                                <label for="postcode" class="form-label">Postcode * (UK format)</label>
                                <input type="text" class="form-control" id="postcode" name="postcode"
                                       placeholder="e.g., E17 3AB" maxlength="8" pattern="^([A-Z]{1,2}[0-9][0-9A-Z]?)\s?[0-9][A-Z]{2}$" required>
                            </div>


                            <!-- Previous Lessons -->
                            <div class="col-md-12">
                                <div class="question-box p-3 border rounded mb-1">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <label class="form-label mb-2 mb-md-0">Have you had previous lessons? *</label>
                                        <div>
                                            <input type="radio" name="previous_lessons" value="yes" id="prev_yes" required>
                                            <label for="prev_yes" class="me-3 ms-1">Yes</label>
                                            <input type="radio" name="previous_lessons" value="no" id="prev_no">
                                            <label for="prev_no" class="ms-1">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Theory Test -->
                            <div class="col-md-12">
                                <div class="question-box p-3 border rounded mb-1">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <label class="form-label mb-2 mb-md-0">Have you passed your theory test? *</label>
                                        <div>
                                            <input type="radio" name="theory_test" value="yes" id="theory_yes" required>
                                            <label for="theory_yes" class="me-3 ms-1">Yes</label>
                                            <input type="radio" name="theory_test" value="no" id="theory_no">
                                            <label for="theory_no" class="ms-1">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Transmission Type -->
                            <div class="col-md-12">
                                <div class="question-box p-3 border rounded mb-1">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <label class="form-label mb-2 mb-md-0">Are you looking for Manual or Automatic lessons? *</label>
                                        <div>
                                            <input type="radio" name="transmission" value="manual" id="trans_manual" required>
                                            <label for="trans_manual" class="me-3 ms-1">Manual</label>
                                            <input type="radio" name="transmission" value="automatic" id="trans_auto">
                                            <label for="trans_auto" class="ms-1">Automatic</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Message -->
                            <div class="col-12">
                                <label for="message" class="form-label">Additional Message</label>
                                <textarea class="form-control" id="message" name="message" rows="2" maxlength="500"
                                          placeholder="Tell us about your needs or questions... (Max 500 characters)"></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-book">
                                    <i class="fas fa-calendar-check me-2"></i>Book My Lesson
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2 class="section-title text-center">Our Gallery</h2>
            <p class="section-subtitle text-center mb-4">Moments from our training sessions and happy students</p>

            <div class="swiper myGallery">
                <div class="swiper-wrapper">
                    @foreach($galleryImages ?? [] as $image)
                        <div class="swiper-slide">
                            <a href="{{ asset('storage/gallery/' . $image) }}" class="glightbox" data-gallery="gallery-group">
                                <img src="{{ asset('storage/gallery/' . $image) }}" alt="Gallery Image" class="img-fluid rounded shadow-sm" />
                            </a>
                        </div>
                    @endforeach

                    @if(empty($galleryImages))
                        @for ($i = 0; $i < 6; $i++)
                            <div class="swiper-slide">
                                <a href="{{ asset('frontend/assets/images/cars-5970663_640.webp') }}" class="glightbox" data-gallery="gallery-group">
                                    <img src="{{ asset('frontend/assets/images/cars-5970663_640.webp') }}" alt="Sample Image" class="img-fluid rounded shadow-sm" />
                                </a>
                            </div>
                        @endfor
                    @endif
                </div>

                <!-- Navigation buttons OUTSIDE the swiper container -->
                <div class="swiper-button-prev custom-swiper-nav"></div>
                <div class="swiper-button-next custom-swiper-nav"></div>

            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="reviews">
        <div class="container">
            <div class="row mb-4 text-center">
                <div class="col">
                    <h2 class="section-title">What Our Students Say</h2>
                    <p class="section-subtitle">Real feedback from our happy learners</p>
                </div>
            </div>

            <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($reviews ?? [] as $index => $review)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow text-center p-4">
                                        <div class="mb-3">
                                            <i class="fas fa-quote-left fa-2x text-primary"></i>
                                        </div>
                                        <p class="mb-3">{{ $review['text'] }}</p>
                                        <h5 class="fw-bold mb-0">{{ $review['name'] }}</h5>
                                        <small class="text-muted">{{ $review['location'] ?? '' }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if(empty($reviews))
                        <!-- Default Reviews -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow text-center p-4">
                                        <div class="mb-3">
                                            <i class="fas fa-quote-left fa-2x"></i>
                                        </div>
                                        <p class="mb-3">Privilege Driving School made me feel confident behind the wheel. Great instructors!</p>
                                        <h5 class="fw-bold mb-0">Sarah M.</h5>
                                        <small class="text-muted">Ilford</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow text-center p-4">
                                        <div class="mb-3">
                                            <i class="fas fa-quote-left fa-2x"></i>
                                        </div>
                                        <p class="mb-3">Privilege Driving School made me feel confident behind the wheel. Great instructors!</p>
                                        <h5 class="fw-bold mb-0">Sarah M.</h5>
                                        <small class="text-muted">Ilford</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow text-center p-4">
                                        <div class="mb-3">
                                            <i class="fas fa-quote-left fa-2x"></i>
                                        </div>
                                        <p class="mb-3">Privilege Driving School made me feel confident behind the wheel. Great instructors!</p>
                                        <h5 class="fw-bold mb-0">Sarah M.</h5>
                                        <small class="text-muted">Ilford</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow text-center p-4">
                                        <div class="mb-3">
                                            <i class="fas fa-quote-left fa-2x "></i>
                                        </div>
                                        <p class="mb-3">Privilege Driving School made me feel confident behind the wheel. Great instructors!</p>
                                        <h5 class="fw-bold mb-0">Sarah M.</h5>
                                        <small class="text-muted">Ilford</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="card border-0 shadow text-center p-4">
                                        <div class="mb-3">
                                            <i class="fas fa-quote-left fa-2x "></i>
                                        </div>
                                        <p class="mb-3">Privilege Driving School made me feel confident behind the wheel. Great instructors!</p>
                                        <h5 class="fw-bold mb-0">Sarah M.</h5>
                                        <small class="text-muted">Ilford</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more default slides if desired -->
                    @endif
                </div>

                <!-- Carousel Controls with Font Awesome -->
                <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev">
                    <span class="floating-btn"><i class="fas fa-chevron-left"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next">
                    <span class="floating-btn"><i class="fas fa-chevron-right"></i></span>
                </button>

            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5>Privilege Driving School</h5>
                    <p>Professional driving instruction with a focus on safety and confidence. Join thousands of satisfied students who have learned to drive with us.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#booking">Book Now</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Individual Lessons</a></li>
                        <li><a href="#">Intensive Courses</a></li>
                        <li><a href="#">Test Preparation</a></li>
                        <li><a href="#">Theory Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone me-2"></i>0123 456 7890</li>
                        <li><i class="fas fa-envelope me-2"></i>privilegedrivschool@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i>123 Driving Lane, London</li>
                        <li><i class="fas fa-clock me-2"></i>Mon-Sat: 8AM-8PM</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p>&copy; 2025 Privilege Driving School. All rights reserved.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#" class="me-3">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling with offset for fixed navbar
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);

                if (target) {
                    e.preventDefault();

                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const elementPosition = target.getBoundingClientRect().top + window.pageYOffset;
                    const offsetPosition = elementPosition - navbarHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Interactive card hover
        document.querySelectorAll('.feature-card, .service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

    </script>
@endsection
