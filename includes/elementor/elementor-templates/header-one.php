<?php

use RoavioTheme\Classes\Roavio_Nav_Walker;

if ('layout_one' == $settings['layout_type']) : ?>
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h3>Get Appointment</h3>
                        <form action="#" id="contact-form" method="POST" class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name33" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="email33" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <textarea name="message" id="message2" placeholder="Enter message..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <!-- Header-Top Section Start -->
    <div class="header-top-section">
        <div class="container-fluid">
            <div class="header-top-wrapper">
                <p>Welcome to <span>Roavio</span> travel agency, need helps for travel guide <b>Let’s Talk</b></p>
                <div class="header-right">
                    <div class="flag-wrap">
                        <i class="fa-solid fa-globe"></i>
                        <div class="nice-select" tabindex="0">
                            <span class="current">
                                English
                            </span>
                            <ul class="list">
                                <li data-value="1" class="option selected focus">
                                    English
                                </li>
                                <li data-value="1" class="option">
                                    Bangla
                                </li>
                                <li data-value="1" class="option">
                                    Hindi
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="header-list">
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:support@gmail.com">Email : support@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone-flip"></i>
                            <a href="tel:+1-234-567-889">Call : +1-234-567-889</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="index.html">
                                                Home
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu">
                                                <li>
                                                    <div class="homemenu-items">
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="assets/img/header/home-1.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index.html" class="theme-btn">
                                                                        Multi Page
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 01
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="assets/img/header/home-2.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-2.html" class="theme-btn">
                                                                        Multi Page
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 02
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown active d-xl-none">
                                            <a href="index.html" class="border-none">
                                                Home
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home 01</a></li>
                                                <li><a href="index-2.html">Home 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="destination-details.html">
                                                Destinations
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="destination.html">Destinations</a></li>
                                                <li><a href="destination-details.html">Destinations Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="tour-details.html">
                                                Tours
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="tour.html">Tours</a></li>
                                                <li><a href="tour-list.html">Tours List</a></li>
                                                <li><a href="tour-details.html">Tours Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="news-details.html">
                                                Pages
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="contact.html">About US</a>
                                                </li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="faq.html">Our Faq</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="news-details.html">
                                                Blog
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="news.html">Blog Standard</a></li>
                                                <li><a href="news-grid.html">Blog Grid</a></li>
                                                <li><a href="news-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="search-widget">
                            <form action="#">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <input type="text" placeholder="Search">
                            </form>
                        </div>
                        <div class="header-button">
                            <a href="contact.html" class="theme-btn">Book Now</a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>