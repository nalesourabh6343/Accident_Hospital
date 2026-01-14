<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mane Accident Hospital - Advanced Orthopedic Care</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <style>
        :root {
            /* Branding: Deep Blue & Emergency Red mapped to template variables */
            --primary: #0f172a;
            /* Deep Blue (was generic primary) */
            --primary-dark: #020617;

            --teal: #0f172a;
            /* MAIN BRAND COLOR (Deep Blue) */
            --teal-light: #1e293b;
            /* Lighter Blue */

            --aqua: #dc2626;
            /* ACCENT COLOR (Emergency Red) */
            --soft-green: #10b981;
            /* Success Green */

            --bg-light: #f8fafc;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        html,
        body {
            overflow-x: hidden;
            width: 100%;
            position: relative;
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Playfair Display', serif;
        }

        .bg-teal {
            background-color: var(--teal) !important;
        }

        .bg-teal-subtle {
            background-color: rgba(15, 23, 42, 0.1) !important;
        }

        /* ======= NEW CONTACT SECTION STYLES ======= */
        .contact-info-card {
            padding: 30px;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            border: 1px solid rgba(15, 23, 42, 0.05);
            height: 100%;
        }

        .contact-info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12);
            border-color: var(--aqua);
        }

        .contact-info-card .icon-box {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--teal) 0%, var(--teal-light) 100%);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin: 0 auto 25px;
            transition: all 0.3s ease;
        }

        .contact-info-card:hover .icon-box {
            transform: scale(1.1) rotate(10deg);
        }

        .contact-info-card h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .contact-info-card p {
            color: var(--text-muted);
            margin-bottom: 0;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .contact-form-wrapper {
            background: #fff;
            padding: 45px;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(15, 23, 42, 0.05);
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label {
            color: var(--teal);
        }

        .contact-map-wrapper {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            height: 100%;
            min-height: 450px;
        }

        .contact-map-wrapper iframe {
            filter: grayscale(0.2) contrast(1.1);
            transition: all 0.5s ease;
        }

        .contact-form-wrapper .form-control {
            border: 1.5px solid #e2e8f0 !important;
            border-radius: 12px !important;
            padding: 1rem 1.25rem !important;
            background-color: #f8fafc !important;
            transition: all 0.3s ease !important;
            color: var(--text-dark) !important;
        }

        .contact-form-wrapper .form-control:focus {
            border-color: var(--teal) !important;
            box-shadow: 0 0 0 4px rgba(15, 23, 42, 0.1) !important;
            background-color: #fff !important;
        }

        .form-floating>label {
            padding: 1rem 1.25rem !important;
        }

        .contact-map-wrapper:hover iframe {
            filter: grayscale(0);
        }

        @media (max-width: 767.98px) {
            .contact-form-wrapper {
                padding: 30px 20px;
            }

            .contact-map-wrapper {
                min-height: 350px;
            }
        }

        .bg-teal-light {
            background-color: var(--teal-light) !important;
        }

        .text-teal {
            color: var(--teal) !important;
        }

        .text-aqua {
            color: var(--aqua) !important;
        }

        /* Scroll Progress Bar */
        .progress-container {
            width: 100%;
            height: 4px;
            background: rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2000;
        }

        .progress-bar {
            height: 4px;
            background: var(--aqua);
            width: 0%;
            transition: width 0.1s;
        }

        /* Top Info Bar */
        .top-info-bar {
            background-color: var(--teal);
            color: white;
            padding: 10px 0;
            font-size: 0.85rem;
            position: relative;
            z-index: 1050;
        }

        .top-info-bar a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .top-info-bar a:hover {
            color: var(--aqua);
        }

        /* Navbar */
        .navbar {
            transition: background 0.3s ease, padding 0.3s ease, box-shadow 0.3s ease;
            padding: 1rem 0;
            top: 0;
            z-index: 1040;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
            top: 4px !important;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .navbar-toggler {
            border: 1px solid rgba(15, 23, 42, 0.1) !important;
            padding: 5px 10px;
            border-radius: 8px;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.25rem rgba(15, 23, 42, 0.1);
        }

        /* Responsive Mobile Menu Customization */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: white;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                margin-top: 15px;
                padding: 20px;
                border-radius: 12px;
            }

            .nav-link {
                padding: 12px 0;
                border-bottom: 1px solid #f1f5f9;
            }

            .nav-item:last-child .nav-link {
                border-bottom: none;
            }

            .navbar-nav .btn-teal {
                margin-top: 15px;
                width: 100%;
                justify-content: center;
            }
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--aqua) !important;
        }

        /* Social Sidebar */
        .social-sidebar {
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1040;
            display: none;
            flex-direction: column;
        }

        @media (min-width: 992px) {
            .social-sidebar {
                display: flex;
            }
        }

        .social-icon {
            width: 50px;
            height: 50px;
            background: #fff;
            color: var(--teal);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            margin-bottom: 5px;
            border-radius: 0 8px 8px 0;
            text-decoration: none;
        }

        .social-icon:hover {
            width: 60px;
            background: var(--aqua);
            color: white;
        }

        /* Floating Action Buttons */
        .fab-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1040;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .fab-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            text-decoration: none;
        }

        .fab-btn:hover {
            transform: scale(1.1);
            color: white;
        }

        .fab-whatsapp {
            background: #25D366;
        }

        .fab-phone {
            background: var(--aqua);
        }

        .fab-top {
            background: var(--teal);
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s;
        }

        /* Hero Carousel */
        .hero-slide {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
            position: relative;
            margin-top: 0;
        }

        .hero-slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* Gradient: Deep Blue to Red-tinged Blue */
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(220, 38, 38, 0.4) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .hero-slide h1 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero-slide p.text-uppercase {
            letter-spacing: 3px;
            color: var(--aqua) !important;
        }

        /* Buttons */
        .btn-teal {
            background: linear-gradient(135deg, var(--teal) 0%, var(--teal-light) 100%);
            border: none;
            color: #fff;
            padding: 0.875rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-teal:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.4);
            color: #fff;
        }

        .btn-outline-teal {
            border: 2px solid var(--teal);
            color: var(--teal);
            background: transparent;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-outline-teal:hover {
            background: var(--teal);
            color: #fff;
        }

        /* Sections */
        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            color: var(--aqua);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.875rem;
        }

        /* Cards */
        .service-card {
            border: none;
            border-radius: 16px;
            transition: all 0.4s ease;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15);
        }

        .service-card .icon-box {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--teal) 0%, var(--aqua) 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            color: #fff;
            margin-bottom: 1.25rem;
        }

        /* Doctor Card */
        .doctor-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
        }

        .doctor-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .doctor-card img {
            height: 350px;
            object-fit: cover;
        }

        /* Testimonials */
        .testimonial-card {
            background: #fff;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .testimonial-card .stars {
            color: #fbbf24;
        }

        /* Gallery */
        .gallery-card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
        }

        .gallery-card img {
            height: 280px !important;
            /* Fixed height for uniformity */
            width: 100%;
            object-fit: cover;
            /* Ensures image covers area without distortion */
            transition: transform 0.5s ease;
        }

        .gallery-card:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.7), rgba(220, 38, 38, 0.6));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .gallery-card:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-filter.active {
            background: linear-gradient(135deg, var(--teal) 0%, var(--teal-light) 100%);
            border-color: var(--teal);
            color: #fff;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }

        /* Enhanced Facilities */
        .facility-card {
            overflow: hidden;
            transition: all 0.3s ease;
            border-radius: 15px;
        }

        .facility-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .facility-img-wrapper img {
            transition: transform 0.5s ease;
            height: 220px;
            object-fit: cover;
            width: 100%;
        }

        .facility-card:hover .facility-img-wrapper img {
            transform: scale(1.1);
        }

        .facility-icon-overlay {
            position: absolute;
            top: 0;
            right: 0;
            width: 60px;
            height: 60px;
            background: var(--aqua);
            color: white;
            border-bottom-left-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            z-index: 10;
        }

        /* Enhanced Testimonial Slider */
        .testimonial-slider-card {
            background: #fff;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            margin: 20px;
        }

        .testimonial-slider-card::before {
            content: '\201C';
            position: absolute;
            top: -20px;
            left: 30px;
            font-size: 8rem;
            color: var(--teal);
            opacity: 0.1;
            font-family: sans-serif;
        }

        .user-img-ring {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 4px solid var(--teal-light);
            padding: 3px;
        }

        /* Enhanced Appointment Section */
        .appointment-bg {
            background: url('https://images.pexels.com/photos/127873/pexels-photo-127873.jpeg?auto=compress&cs=tinysrgb&w=1600') center/cover fixed;
            position: relative;
        }

        .appointment-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 23, 42, 0.9);
            /* Dark Blue Overlay */
        }

        .glass-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 3rem;
        }

        .form-floating>.form-control {
            background: rgba(255, 255, 255, 0.9);
            border: none;
        }

        .form-floating>label {
            color: #666;
        }

        /* Utility Helpers */
        .bg-white-20 {
            background: rgba(255, 255, 255, 0.2);
        }

        .opacity-10 {
            opacity: 0.1;
        }

        .letter-spacing-2 {
            letter-spacing: 2px;
        }

        /* Mobile Responsive Adjustments */
        @media (max-width: 576px) {
            .section-title {
                font-size: 28px;
            }

            h1.display-4,
            .display-4 {
                font-size: 2.2rem;
            }

            .fab-container {
                right: 15px;
                bottom: 15px;
            }

            .fab-btn {
                width: 45px;
                height: 45px;
                font-size: 20px;
            }

            .glass-form {
                padding: 1.5rem !important;
            }

            .section-padding {
                padding: 50px 0;
            }

            .hero-slide {
                min-height: 80vh;
            }
        }

        /* ======= NEW SECTIONS STYLES ======= */
        /* Golden Hour Protocol */
        .protocol-step {
            padding: 30px;
            border-radius: 20px;
            background: #fff;
            border-left: 5px solid var(--aqua);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: all 0.3s ease;
        }

        .protocol-step:hover {
            transform: translateX(10px);
            box-shadow: 0 15px 35px rgba(220, 38, 38, 0.1);
        }

        .protocol-number {
            width: 40px;
            height: 40px;
            background: var(--aqua);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-bottom: 15px;
        }

        /* OPD Schedule */
        .opd-schedule-wrapper {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
            border: 1px solid rgba(15, 23, 42, 0.05);
        }

        .opd-table thead {
            background: var(--teal);
            color: #fff;
        }

        .opd-table th {
            padding: 20px !important;
            font-weight: 600;
            border: none;
        }

        .opd-table td {
            padding: 15px 20px !important;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        /* Technology Showcase */
        .tech-card {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            height: 300px;
            margin-bottom: 30px;
            cursor: pointer;
        }

        .tech-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .tech-card:hover img {
            transform: scale(1.1);
        }

        .tech-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 30px;
            background: linear-gradient(to top, rgba(15, 23, 42, 0.9) 0%, transparent 100%);
            color: #fff;
            transition: all 0.3s ease;
        }

        /* FAQ Section */
        .faq-accordion .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 12px !important;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .faq-accordion .accordion-button {
            padding: 20px;
            font-weight: 600;
            color: var(--teal);
            box-shadow: none;
        }

        .faq-accordion .accordion-button:not(.collapsed) {
            background-color: var(--teal);
            color: #fff;
        }

        .faq-accordion .accordion-button::after {
            filter: grayscale(1) invert(0);
        }

        .faq-accordion .accordion-button:not(.collapsed)::after {
            filter: grayscale(1) invert(1);
        }

        .faq-accordion .accordion-body {
            padding: 25px;
            line-height: 1.7;
            color: var(--text-muted);
            background: #fff;
        }
    </style>


</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="100">

    <!-- Scroll Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Top Info Bar -->
    <div class="top-info-bar">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="d-flex flex-wrap justify-content-center gap-3 gap-md-4 mb-2 mb-md-0">
                    <span class="small"><i class="bi bi-telephone-fill me-2 text-aqua"></i>+91 99999 99999</span>
                    <span class="small"><i class="bi bi-envelope-fill me-2 text-aqua"></i>info@Manehospital.com</span>
                    <span class="small d-none d-sm-inline"><i class="bi bi-geo-alt-fill me-2 text-aqua"></i>Phaltan,
                        Satara</span>
                </div>
                <div class="d-flex gap-3">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand text-teal" href="#">
                <i class="bi bi-heart-pulse-fill me-2 text-aqua"></i>Mane Hospital
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About
                            Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#about"><i class="bi bi-hospital me-2 text-teal"></i>Our
                                    Hospital</a></li>
                            <li><a class="dropdown-item" href="#doctor-Mane"><i
                                        class="bi bi-person-badge me-2 text-teal"></i>Dr. Prashant Mane (MBBS, MS
                                    Ortho)</a></li>
                            <li><a class="dropdown-item" href="#doctor-Dipali"><i
                                        class="bi bi-person-badge-fill me-2 text-teal"></i>Dr. Dipali Mane (MBBS,
                                    DGO)</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#gallery"><i
                                        class="bi bi-images me-2 text-teal"></i>Hospital Gallery</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold text-danger" href="#" role="button"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-exclamation-triangle-fill me-1"></i>Emergency
                        </a>
                        <ul class="dropdown-menu border-danger">
                            <li><a class="dropdown-item text-danger fw-semibold" href="#emergency"><i
                                        class="bi bi-telephone-fill me-2"></i>24/7 Accident & Trauma Care</a></li>
                            <li><a class="dropdown-item" href="#emergency"><i
                                        class="bi bi-truck-front me-2 text-danger"></i>Ambulance Service</a></li>
                            <li><a class="dropdown-item" href="#emergency"><i
                                        class="bi bi-bandaid me-2 text-danger"></i>First Aid Instructions</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Specialties</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#services"><i
                                        class="bi bi-gear-wide-connected me-2 text-teal"></i>Joint Replacement (Knee &
                                    Hip)</a></li>
                            <li><a class="dropdown-item" href="#services"><i
                                        class="bi bi-activity me-2 text-teal"></i>Spine & Back Surgery</a></li>
                            <li><a class="dropdown-item" href="#services"><i
                                        class="bi bi-bandaid me-2 text-teal"></i>Fracture & Complex Trauma</a></li>
                            <li><a class="dropdown-item" href="#services"><i
                                        class="bi bi-eyedropper me-2 text-teal"></i>Arthroscopy (Keyhole Surgery)</a>
                            </li>
                            <li><a class="dropdown-item" href="#services"><i
                                        class="bi bi-wrench-adjustable me-2 text-teal"></i>Ilizarov Surgery (Russian
                                    Method)</a></li>
                            <li><a class="dropdown-item" href="#services"><i
                                        class="bi bi-trophy me-2 text-teal"></i>Sports Injury & Ligament Surgery</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Facilities</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#facilities"><i
                                        class="bi bi-hospital me-2 text-teal"></i>Modern Operation Theater</a></li>
                            <li><a class="dropdown-item" href="#facilities"><i
                                        class="bi bi-radioactive me-2 text-teal"></i>Digital X-Ray & C-Arm</a></li>
                            <li><a class="dropdown-item" href="#facilities"><i
                                        class="bi bi-person-walking me-2 text-teal"></i>Physiotherapy & Rehab</a></li>
                            <li><a class="dropdown-item" href="#facilities"><i
                                        class="bi bi-capsule me-2 text-teal"></i>Pathology Lab & Pharmacy</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Patient Corner
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#insurance"><i
                                        class="bi bi-credit-card me-2 text-teal"></i>Cashless Insurance / TPA</a></li>
                            <li><a class="dropdown-item" href="#insurance"><i
                                        class="bi bi-building me-2 text-teal"></i>Government Health Schemes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#testimonials"><i
                                        class="bi bi-star-fill me-2 text-teal"></i>Patient Reviews</a></li>
                            <li><a class="dropdown-item" href="#blog"><i
                                        class="bi bi-journal-medical me-2 text-teal"></i>Health Blog (Bone Care
                                    Tips)</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Contact Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#contact"><i
                                        class="bi bi-geo-alt-fill me-2 text-teal"></i>Location (Google Maps)</a></li>
                            <li><a class="dropdown-item" href="#appointment"><i
                                        class="bi bi-calendar-check me-2 text-teal"></i>Book an Appointment</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="#appointment" class="btn btn-teal">
                    <i class="bi bi-calendar-plus me-1"></i>Book Appointment
                </a>
            </div>
        </div>
    </nav>




    @yield('content')



    <!-- Footer -->
    <footer class="text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4">Mane Accident Hospital</h4>
                    <p class="small opacity-75">Ring Road, Laxminagar, Phaltan<br>Dist. Satara - 415523</p>
                    <p class="small opacity-75">Phone: +91 99999 99999</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled small opacity-75">
                        <li><a href="#about" class="text-white text-decoration-none">About Us</a></li>
                        <li><a href="#doctor-Mane" class="text-white text-decoration-none">Dr. Mane</a></li>
                        <li><a href="#appointment" class="text-white text-decoration-none">Book Appointment</a></li>
                        <li><a href="#gallery" class="text-white text-decoration-none">Gallery</a></li>
                        <li><a href="#contact" class="text-white text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Our Services</h5>
                    <ul class="list-unstyled small opacity-75">
                        <li><a href="#services" class="text-white text-decoration-none">Joint Replacement (Knee &
                                Hip)</a></li>
                        <li><a href="#services" class="text-white text-decoration-none">Spine & Back Surgery</a></li>
                        <li><a href="#services" class="text-white text-decoration-none">Fracture & Complex Trauma</a>
                        </li>
                        <li><a href="#services" class="text-white text-decoration-none">Arthroscopy (Keyhole
                                Surgery)</a></li>
                        <li><a href="#services" class="text-white text-decoration-none">Ilizarov Surgery (Russian
                                Method)</a></li>
                        <li><a href="#services" class="text-white text-decoration-none">Sports Injury & Ligament
                                Surgery</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Location</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60826.96781229048!2d74.3989824!3d17.9836796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc30f6a273b4009%3A0xe537d8e68224300a!2sPhaltan%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1704256000000!5m2!1sen!2sin"
                        width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <hr class="border-secondary opacity-50">
            <div class="text-center small opacity-50">
                &copy; 2025 Mane Accident Hospital.
            </div>
        </div>
    </footer>

    <!-- Social Sidebar -->
    <div class="social-sidebar">
        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
    </div>

    <!-- Floating Action Buttons -->
    <div class="fab-container">
        <a href="#" class="fab-btn fab-top js-back-to-top"><i class="bi bi-arrow-up"></i></a>
        <a href="https://wa.me/919999999999" class="fab-btn fab-whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="tel:+919999999999" class="fab-btn fab-phone"><i class="bi bi-telephone-fill"></i></a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        function handleHeader() {
            const navbar = document.querySelector('.navbar');
            const topBar = document.querySelector('.top-info-bar');
            const progressBar = document.getElementById("progressBar");
            const topToBtn = document.querySelector('.js-back-to-top');

            const winScroll = window.scrollY || document.documentElement.scrollTop;
            const topBarHeight = topBar ? topBar.offsetHeight : 0;

            // 1. Navbar Scrolled Class
            if (winScroll > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // 2. Navbar Fixed Position Adjustment with requestAnimationFrame for mobile
            window.requestAnimationFrame(() => {
                if (winScroll < topBarHeight) {
                    navbar.style.top = (4 + topBarHeight - winScroll) + 'px';
                    navbar.style.position = 'fixed';
                } else {
                    navbar.style.top = '4px';
                    navbar.style.position = 'fixed';
                }
            });

            // 3. Progress Bar
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            if (progressBar) progressBar.style.width = Math.min(scrolled, 100) + "%";

            // 4. Back to Top Button
            if (topToBtn) {
                if (winScroll > 300) {
                    topToBtn.style.opacity = '1';
                    topToBtn.style.visibility = 'visible';
                } else {
                    topToBtn.style.opacity = '0';
                    topToBtn.style.visibility = 'hidden';
                }
            }
        }

        // Attach listeners
        window.addEventListener('scroll', handleHeader);
        window.addEventListener('resize', handleHeader);
        window.addEventListener('load', handleHeader);
        document.addEventListener('DOMContentLoaded', handleHeader);

        // Back to top click handler
        document.querySelector('.js-back-to-top').addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Gallery Filter
        const filterButtons = document.querySelectorAll('.gallery-filter');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filterValue = button.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.classList.remove('d-none');
                        item.classList.add('fade-in'); // Optional animation class
                    } else {
                        item.classList.add('d-none');
                        item.classList.remove('fade-in');
                    }
                });
            });
        });

        // Gallery Lightbox
        const galleryCards = document.querySelectorAll('.gallery-card');
        const modalImg = document.getElementById('galleryModalImg');
        const galleryModal = new bootstrap.Modal(document.getElementById('galleryModal'));

        galleryCards.forEach(card => {
            card.addEventListener('click', () => {
                const img = card.querySelector('img');
                const src = img.src; // Use high-res data-full if available
                modalImg.src = src;
                galleryModal.show();
            });
        });

        // Close mobile menu on link click
        const navLinks = document.querySelectorAll('.nav-item:not(.dropdown) .nav-link, .dropdown-item');
        const navbarCollapse = document.getElementById('navbarNav');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.getComputedStyle(document.querySelector('.navbar-toggler')).display !== 'none' && navbarCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse, { toggle: false });
                    bsCollapse.hide();
                }
            });
        });
    </script>
</body>

</html>