<?php require_once 'head.php' ?>
<header id="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo BASE_PATH; ?>index">
                <img src="<?php echo BASE_PATH; ?>assets/images/logo/logo_new-removebg.png" alt="Kenz Automotive Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Dealers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Order</a>
                        </li> -->
                    <li class="nav-item">
                        <button class="nav-link" id="menu-button">Menu</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_PATH; ?>index">Home</a>
                </li>
                <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="localLineup" role="button" data-bs-toggle="collapse" data-bs-target="#submenu1" aria-expanded="false">
                            Local Line-up ↓
                        </a>
                        <div class="collapse" id="submenu1">
                            <ul class="navbar-nav ms-3">
                                <li class="nav-item"><a class="nav-link" href="#">Sub Link 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sub Link 2</a></li>
                            </ul>
                        </div>
                    </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#featured-vehicles">Featured Vehicles</a>
                </li>
                <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutUs" role="button" data-bs-toggle="collapse" data-bs-target="#submenu2" aria-expanded="false">
                            About Master Changan ↓
                        </a>
                        <div class="collapse" id="submenu2">
                            <ul class="navbar-nav ms-3">
                                <li class="nav-item"><a class="nav-link" href="#">Sub Link 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sub Link 2</a></li>
                            </ul>
                        </div>
                    </li> -->
                <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="whyChangan" data-bs-toggle="collapse" data-bs-target="#submenu3" aria-expanded="false">
                            Why Changan ↓
                        </a>
                        <div class="collapse" id="submenu3">
                            <ul class="navbar-nav ms-3">
                                <li class="nav-item"><a class="nav-link" href="#">Sub Link 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sub Link 2</a></li>
                            </ul>
                        </div>
                    </li> -->
                <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Careers</a>
                    </li> -->
                <!-- <li class="nav-item">
                        <a class="nav-link" href="#">News & Events</a>
                    </li> -->
                <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terms of Use</a>
                    </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testim">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<script>
    document.addEventListener('scroll', function() {
        var header = document.getElementById('main-header');
        var swiperSection = document.querySelector('.swiper');
        var scrollPosition = window.scrollY;
        var swiperHeight = swiperSection.offsetHeight;

        // If scroll position is greater than the swiper height, change header background
        if (scrollPosition > swiperHeight) {
            header.style.backgroundColor = 'white';
        } else {
            header.style.backgroundColor = 'transparent';
        }
    });
</script>