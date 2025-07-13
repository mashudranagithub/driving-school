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
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#booking">Book Now</a>
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
                    <div class="text-center" data-aos="fade-left">
                        <div class="floating">
                            <i class="fas fa-car" style="font-size: 15rem; color: rgba(255,255,255,0.1);"></i>
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
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title" data-aos="fade-up">{{ $services['title'] ?? 'Our Driving Packages' }}</h2>
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

    <!-- Booking Section -->
    <section id="booking" class="booking">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title" data-aos="fade-up">Book Your Driving Lesson</h2>
                    <p class="section-subtitle" data-aos="fade-up">Ready to start your driving journey? Fill out the form below and we'll get back to you shortly.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form class="booking-form" data-aos="fade-up" id="bookingForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="postcode" class="form-label">Postcode *</label>
                                <input type="text" class="form-control" id="postcode" required>
                            </div>
                            <div class="col-md-4">
                                <label for="experience" class="form-label">Driving Experience *</label>
                                <select class="form-control" id="experience" required>
                                    <option value="">Select...</option>
                                    <option value="complete-beginner">Complete Beginner</option>
                                    <option value="some-experience">Some Experience</option>
                                    <option value="refresher">Refresher Course</option>
                                    <option value="test-preparation">Test Preparation</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="package" class="form-label">Preferred Package *</label>
                                <select class="form-control" id="package" required>
                                    <option value="">Select...</option>
                                    <option value="individual">Individual Lessons</option>
                                    <option value="intensive">Intensive Course</option>
                                    <option value="complete">Complete Package</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="transmission" class="form-label">Transmission Type *</label>
                                <select class="form-control" id="transmission" required>
                                    <option value="">Select...</option>
                                    <option value="manual">Manual</option>
                                    <option value="automatic">Automatic</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Additional Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Tell us about your specific needs or any questions you have..."></textarea>
                            </div>
                            <div class="col-12">
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

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5>Privilege Driving School</h5>
                    <p>Professional driving instruction with a focus on safety and confidence. Join thousands of satisfied students who have learned to drive with us.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
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
                        <li><i class="fas fa-envelope me-2"></i>info@privilegedrivingschool.com</li>
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


        // Booking form
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                postcode: document.getElementById('postcode').value,
                experience: document.getElementById('experience').value,
                package: document.getElementById('package').value,
                transmission: document.getElementById('transmission').value,
                message: document.getElementById('message').value
            };

            console.log('Booking form submitted:', formData);
            alert('Thank you for your booking request! We will contact you shortly to confirm your lesson.');
            this.reset();
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
