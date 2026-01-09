<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOOU Agency - Layanan Profesional</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Fixed Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#home"><img src="/uploads/lambang (2).png" alt="Logo" style="height: 30px; width: auto;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1200/600?random=1" class="d-block w-100" alt="Hero Image 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="hero-title">Welcome to TOOU Agency</h1>
                        <p class="hero-subtitle">Professional services for your academic, creative, and digital needs.</p>
                        <a href="#services" class="btn btn-primary btn-lg">Explore Services</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1200/600?random=2" class="d-block w-100" alt="Hero Image 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="hero-title">Expert Teams</h1>
                        <p class="hero-subtitle">We deliver excellence with our skilled professionals.</p>
                        <a href="#services" class="btn btn-primary btn-lg">Explore Services</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1200/600?random=3" class="d-block w-100" alt="Hero Image 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="hero-title">Your Success is Our Priority</h1>
                        <p class="hero-subtitle">Achieve your goals with our comprehensive solutions.</p>
                        <a href="#services" class="btn btn-primary btn-lg">Explore Services</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="row">
                <?php foreach ($services as $service): ?>
                    <div class="col-md-4 mb-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <?php
                                $icon = '';
                                switch ($service['category']) {
                                    case 'joki': $icon = 'fas fa-graduation-cap'; break;
                                    case 'edit': $icon = 'fas fa-edit'; break;
                                    case 'web': $icon = 'fas fa-code'; break;
                                    case 'design': $icon = 'fas fa-palette'; break;
                                }
                                ?>
                                <i class="<?= $icon ?>"></i>
                            </div>
                            <h5 class="service-title"><?= esc($service['name']) ?></h5>
                            <p class="service-description"><?= esc($service['description']) ?></p>
                            <p class="service-price">Rp <?= number_format($service['price'], 0, ',', '.') ?></p>
                            <a href="/order?service=<?= $service['id'] ?>" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($testimonials as $index => $testimonial): ?>
                        <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                            <div class="testimonial-card">
                                <p class="testimonial-message">"<?= esc($testimonial['message']) ?>"</p>
                                <div class="testimonial-rating">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="fas fa-star <?= $i <= $testimonial['rating'] ? 'filled' : '' ?>"></i>
                                    <?php endfor; ?>
                                </div>
                                <p class="testimonial-author">- <?= esc($testimonial['name']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: info@toouagency.com</p>
                    <p>Phone: +62 123 456 789</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="text-center">&copy; 2023 TOOU Agency. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Smooth scrolling with easing
        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 70
                }, 800, 'easeInOutQuart');
            }
        });

        // Navbar scroll effect with smooth transition
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();
            if (scrollTop > 50) {
                $('.navbar').css({
                    'background': 'rgba(0, 0, 0, 0.95)',
                    'backdrop-filter': 'blur(25px)'
                });
            } else {
                $('.navbar').css({
                    'background': 'rgba(0, 0, 0, 0.8)',
                    'backdrop-filter': 'blur(20px)'
                });
            }
        });

        // Add custom easing function
        $.easing.easeInOutQuart = function (x, t, b, c, d) {
            if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
            return -c/2 * ((t-=2)*t*t*t - 2) + b;
        };
    </script>
</body>
</html>