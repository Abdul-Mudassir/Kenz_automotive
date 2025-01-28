<?php include_once 'includes/head.php' ?>

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<!-- Link Swiper's CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/index.css" as="style" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/swiper-bundle.min.css" as="style" media="all">
<!-- 123 -->
</head>
<body>
    <!-- Swiper -->
    <?php include_once 'includes/header.php' ?>
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
        <div class="parallax-bg" data-swiper-parallax="-23%"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide"
                style="background-image: url(assets/images/home/car11.png); display: flex; align-items: center;">
                <div>
                    <div class="title" data-swiper-parallax="-300">Quality Car Rentals</div>
                    <div class="subtitle" data-swiper-parallax="-200">Explore our wide range of rental options</div>
                    <div class="text" data-swiper-parallax="-100">
                        <p>
                            Kenz Automotive offers a diverse selection of high-quality vehicles available for rent.
                            Whether you're looking for a luxury sedan or a rugged SUV, we have the perfect car to meet
                            your needs.
                        </p>
                    </div>
                    <div class="contactus" style="margin-top: 20px;">
                        <a href="#contact" class="btn btn-secondary btn-outline-light px-5 rounded-pill fw-bold">Contact
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide"
                style="background-image: url(assets/images/home/car14.jpg); display: flex; align-items: center;">
                <div>
                    <div class="title" data-swiper-parallax="-300">Trusted Car Sales</div>
                    <div class="subtitle" data-swiper-parallax="-200">Find your next vehicle with us</div>
                    <div class="text" data-swiper-parallax="-100">
                        <p>
                            Discover a range of vehicles for sale at Kenz Automotive. Our cars are meticulously
                            inspected and maintained, ensuring you drive away in a vehicle you can trust.
                        </p>
                    </div>
                    <div class="contactus" style="margin-top: 20px;">
                        <a href="#contact" class="btn btn-secondary btn-outline-light px-5 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide"
                style="background-image: url(assets/images/home/car6.jpg); display: flex; align-items: center;">
                <div>

                    <div class="title" data-swiper-parallax="-300">Global Reach</div>
                    <div class="subtitle" data-swiper-parallax="-200">Serving customers worldwide</div>
                    <div class="text" data-swiper-parallax="-100">
                        <p>
                            At Kenz Automotive, we pride ourselves on delivering quality service to customers across the
                            globe. Whether you're buying or renting, we ensure satisfaction at every step.
                        </p>
                    </div>
                    <div class="contactus" style="margin-top: 20px;">
                        <a href="#contact" class="btn btn-secondary btn-outline-light px-5 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- About Us Section -->
    <section class="section_all" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title_all text-center">
                        <h1 class="fw-bold">Welcome To <span class="text-custom">Kenz Automotive</span></h1>
                        <p class="section_subtitle mx-auto ">Your trusted partner in premium car rentals and sales.
                            <br />We provide quality vehicles and exceptional service, ensuring your satisfaction every
                            step of the way.
                        </p>
                        <div class="">
                            <i class=""></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row vertical_content_manage mt-5">
                <div class="col-lg-6">
                    <div class="about_header_main mt-3">
                        <div class="about_icon_box">
                            <h2 class="text_custom fw-bold">Excellence in Automotive Services</h2>
                        </div>
                        <h4 class="about_heading text-capitalize fw-bold mt-4">Leading the industry with
                            quality and trust.</h4>
                        <p class=" mt-3">At Kenz Automotive, we take pride in offering a diverse range of vehicles for
                            both rental and purchase. Each vehicle undergoes rigorous inspections to ensure it meets our
                            high standards of quality.</p>

                        <p class=" mt-3">Our commitment to customer satisfaction is unparalleled, and we strive to make
                            your experience smooth and hassle-free, whether you're renting or buying a car.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_about mt-3">
                        <img src="assets/images/home/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <img src="assets/images/home/diversity.gif" alt="" height="65px" width="65px">
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 fw-bold">Diverse Fleet</h5>
                            <p class="edu_desc mt-3 mb-0 ">Choose from a wide range of vehicles, from luxury sedans to
                                rugged SUVs, all maintained to the highest standards.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <img src="assets/images/home/quality-control.gif" alt="" height="65px" width="65px">
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 fw-bold">Quality Assurance</h5>
                            <p class="edu_desc mb-0 mt-3 ">Every vehicle we offer is thoroughly inspected and
                                maintained, ensuring you drive away with peace of mind.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <img src="assets/images/home/global.gif" alt="" height="65px" width="65px">
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 fw-bold">Global Reach</h5>
                            <p class="edu_desc mb-0 mt-3 ">Serving customers worldwide, Kenz Automotive ensures
                                top-notch service no matter where you are.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Vehicles Section -->
    <section id="featured-vehicles" style="padding: 60px 0; background-color: #f8f9fa;">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h1 class="fw-bold">Featured Vehicles</h1>
                <h3 class="">Explore our top-rated cars, available for both sale and rental.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0 rounded">
                        <img src="assets/images/home/Luxury_sedan.webp" class="card-img-top" alt="Luxury Sedan"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Luxury Sedan</h5>
                            <p class="card-text ">Experience luxury with this premium sedan.</p>
                            <a href="#contact" class="btn px-4 rounded-pill">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0 rounded">
                        <img src="assets/images/home/suv.webp" class="card-img-top" alt="SUV"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">SUV</h5>
                            <p class="card-text ">Perfect for family trips or off-road adventures.</p>
                            <a href="#contact" class="btn px-4 rounded-pill">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0 rounded">
                        <img src="assets/images/home/convertible.webp" class="card-img-top" alt="Convertible"
                            style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Convertible</h5>
                            <p class="card-text ">Enjoy the open road with the top down.</p>
                            <a href="#contact" class="btn px-4 rounded-pill">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="we-offer-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>What We <span>Offer</span></h2>
                        <h4>Your comprehensive automotive solutions</h4>
                    </div>
                </div>
            </div>
            <div class="row our-offer-items less-carousel">
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <img class="rounded-circle" src="assets/images/home/rent.gif" alt="" height="80px" width="80px">
                        <h4>Rentals</h4>
                        <p>
                            Choose from a wide range of vehicles for short-term or long-term rentals.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <img class="rounded-circle" src="assets/images/home/sale.gif" alt="" height="80px" width="80px">
                        <!-- <i class="fas fa-car-side fa-3x"></i> -->
                        <h4>Sales</h4>
                        <p>
                            Discover our diverse selection of high-quality vehicles available for purchase.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <img class="rounded-circle" src="assets/images/home/buy.gif" alt="" height="80px" width="80px">
                        <!-- <i class="fas fa-shopping-cart fa-3x"></i> -->
                        <h4>Buy</h4>
                        <p>
                            Special deals and offers for buying your next vehicle with ease.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <img class="rounded-circle" src="assets/images/home/phone.gif" alt="" height="80px"
                            width="80px">
                        <h4>24/7 Support</h4>
                        <p>
                            Get assistance anytime with our dedicated customer support team.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <img class="rounded-circle" src="assets/images/home/maintenance.gif" alt="" height="80px"
                            width="80px">
                        <h4>Vehicle Maintenance</h4>
                        <p>
                            Keep your vehicle in prime condition with our professional maintenance services.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <img class="rounded-circle" src="assets/images/home/satisfaction.gif" alt="" height="80px"
                            width="80px">
                        <h4>Customer Satisfaction</h4>
                        <p>
                            We are committed to ensuring the highest level of satisfaction with every service.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </section>

    <!-- Customer Testimonials Section Start-->
    <section id="testim" class="testim bg-light">
        <div class="heading-section text-center">
            <span class="sub-heading h1">Testimonials</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
        </div>
        <div class="wrap">
            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
            <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
            <ul id="testim-dots" class="dots">
                <li class="dot active"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
                <li class="dot"></li>
            </ul>
            <div id="testim-content" class="cont">
                <div class="active">
                    <div class="img"><img src="<?php echo BASE_PATH; ?>assets/images/home/mudassir.jpeg" alt="Mudassir">
                    </div>
                    <h2>Mr. Md Mudassir</h2>
                    <p>Kenz Automotive exceeded my expectations with their top-notch service and exceptional vehicle
                        selection. I found the perfect car for my needs, and the entire process was seamless.</p>
                </div>

                <div>
                    <div class="img"><img src="<?php echo BASE_PATH; ?>assets/images/home/farooq.jpg" alt="Farooq">
                    </div>
                    <h2>Mr. Md Farooq Nawaz</h2>
                    <p>The team at Kenz Automotive made my car rental experience effortless. Their customer service is
                        outstanding, and the vehicle was in pristine condition. Highly recommend!</p>
                </div>

                <div>
                    <div class="img"><img src="<?php echo BASE_PATH; ?>assets/images/home/Bala.jpeg" alt="Balaraju">
                    </div>
                    <h2>Mr. Balaraju Kotakonda</h2>
                    <p>I purchased a car from Kenz Automotive, and the process was smooh and hassle-free. The staff were
                        knowledgeable and helped me make an informed decision. Great experience!</p>
                </div>

                <div>
                    <div class="img"><img src="<?php echo BASE_PATH; ?>assets/images/home/sunil.jpg" alt="Sunil"></div>
                    <h2>CEO Sunil Khobragade</h2>
                    <p>From rentals to purchases, Kenz Automotive offers a wide range of services that cater to all my
                        automotive needs. Their professionalism and attention to detail are commendable.</p>
                </div>
                <div>
                    <div class="img"><img src="<?php echo BASE_PATH; ?>assets/images/home/Amir.jpg" alt="Amir"></div>
                    <h2>Mr. Amir Ali Ahmed</h2>
                    <p>Choosing Kenz Automotive was the best decision I made for buying my car. The quality of vehicles
                        and the customer support provided are simply unmatched.</p>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- Customer Testimonials Section  END-->

    <!-- Call to Action Section -->
    <section id="cta" style="padding: 60px 0;">
        <div class="container text-center">
            <h2>Ready to find your perfect car?</h2>
            <p>Contact us today or browse our inventory to get started.</p>
            <a href="#contact" class="btn button-action button-pulse">Contact Us</a>
        </div>
    </section>
    <!-- Call to Action Section End-->

    <!-- Contact Us Section Starts-->
    <section id="contact" class="footer_get_touch_outer bg-light">
        <div class="container">
            <div class="footer_get_touch_inner row">
                <div class="col-lg-8 col-md-7 col-sm-12 get_form">
                    <div class="get_form_inner">
                        <div class="get_form_inner_text">
                            <h2>Contact Us</h2>
                            <p class="fw-bold">We're here to help you with all your automotive needs.</p>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="tel" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" placeholder="Message" cols="30" rows="5"></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <input type="submit" class="btn btn-primary w-100" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 get_say_form">
                    <h5>Say Hi!</h5>
                    <ul class="get_say_info_sec list-unstyled">
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@kenzautomotive.com" class=" fw-bold">info@kenzautomotive.com</a>
                        </li>
                        <li>
                            <i class="fa fa-whatsapp"></i>
                            <a href="tel:+919391498886" class=" fw-bold">+91 93914 98886</a>
                        </li>
                        <li>
                            <i class="fa fa-skype"></i>
                            <button id="skype-link" class=" fw-bold"
                                onclick="copyToClipboard('kenzautomotive')">kenzautomotive</button>
                            <span id="copy-message"
                                style="display:none; margin-left: 10px; color: white; font-weight: 600;">Copied!</span>
                        </li>
                    </ul>
                    <ul class="get_say_social-icn list-inline mt-4">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section Ends-->

    <!-- Call BUtton Start -->
    <div class="call-buton"><a class="cc-calto-action-ripple" href="tel:+919391498886"><i class="fa fa-car"></i><span
                class="num fw-bold">+91 9391498886</span>
        </a>
    </div>
    <!-- Call BUtton End -->
    <?php include_once 'includes/footer.php' ?>

    <!-- Swiper JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
    <script src="<?php echo BASE_PATH; ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo BASE_PATH; ?>assets/js/font.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            speed: 100,
            parallax: true,
            autoplay: {
                delay: 5000, // Time between slide transitions (in milliseconds)
                disableOnInteraction: false, // Autoplay will not stop after user interactions
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        function getBackgroundBrightness(imageUrl, callback) {
            // Create an image element to load the background image
            var img = new Image();
            img.src = imageUrl;
            img.crossOrigin = "Anonymous"; // This is important if the image is hosted on a different domain
            img.onload = function() {
                // Create a canvas to draw the image
                var canvas = document.createElement('canvas');
                canvas.width = img.width;
                canvas.height = img.height;
                var ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                // Get image data
                var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                var data = imageData.data;
                var r, g, b, avg;
                var colorSum = 0;
                for (var x = 0, len = data.length; x < len; x += 4) {
                    r = data[x];
                    g = data[x + 1];
                    b = data[x + 2];
                    avg = Math.floor((r + g + b) / 3);
                    colorSum += avg;
                }
                var brightness = Math.floor(colorSum / (img.width * img.height));
                callback(brightness);
            };
        }
        // Function to set text color based on brightness
        function setTextColorBasedOnBackground(slideElement, backgroundUrl) {
            getBackgroundBrightness(backgroundUrl, function(brightness) {
                if (brightness < 128) { // Dark background
                    slideElement.style.color = 'white';
                } else { // Light background
                    slideElement.style.color = 'black';
                }
            });
        }
        // Example usage with your swiper slides
        document.querySelectorAll('.swiper-slide').forEach(function(slide) {
            var backgroundImage = slide.style.backgroundImage;
            var imageUrl = backgroundImage.slice(5, -2); // Extract the URL from the background-image property
            setTextColorBasedOnBackground(slide, imageUrl);
        });
    </script>
    <script>
        // vars
        'use strict'
        var testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;;
        window.onload = function() {
            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }
                if (slide < 0) {
                    slide = currentSlide = testimContent.length - 1;
                }
                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }
                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");
                currentActive = currentSlide;
                clearTimeout(testimTimer);
                testimTimer = setTimeout(function() {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }
            testimLeftArrow.addEventListener("click", function() {
                playSlide(currentSlide -= 1);
            })
            testimRightArrow.addEventListener("click", function() {
                playSlide(currentSlide += 1);
            })
            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function() {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }
            playSlide(currentSlide);
            // keyboard shortcuts
            document.addEventListener("keyup", function(e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;
                    case 39:
                        testimRightArrow.click();
                        break;
                    case 39:
                        testimRightArrow.click();
                        break;
                    default:
                        break;
                }
            })
            testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
            })
            testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;
                touchPosDiff = touchStartPos - touchEndPos;
                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);
                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }
            })
        }
    </script>
    <script>
        function copyToClipboard(text) {
            // Create a temporary input element
            const tempInput = document.createElement('input');
            tempInput.style.position = 'absolute';
            tempInput.style.left = '-9999px';
            tempInput.value = text;
            document.body.appendChild(tempInput);
            // Select the text and copy it to the clipboard
            tempInput.select();
            document.execCommand('copy');
            // Remove the temporary input element
            document.body.removeChild(tempInput);
            // Display the 'Copied!' message
            const message = document.getElementById('copy-message');
            message.style.display = 'inline';
            // Hide the message after 2 seconds
            setTimeout(() => {
                message.style.display = 'none';
            }, 2000);
        }
    </script>
</body>

</html>