<?php get_header() ?>

<body dir="ltr">

    <!-- Start Banner -->
    <button style="display: none;" dir="ltr" id="bannarBtn" onclick="openBannar()">
        <div class="bannar">
            <p>Exclusively for <span>Jeddah</span> customers - Computer check for your car for <span style="white-space: nowrap;"> <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
                        <defs>
                            <style>
                                .cls-0 {
                                    fill: #d32f2f;
                                }
                            </style>
                        </defs>
                        <path class="cls-0" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z" />
                        <path class="cls-0" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z" />
                    </svg> 5 </span> only!</p>
            <p>Our Branch Locations</p>
        </div>
    </button>

    <!-- start popup modal -->
    <div
        class="modal fade"
        id="war"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 w-100 text-center" style="margin-left: -32px;" id="exampleModalLabel">
                        Cashif Branches
                    </h1>
                    <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <ul dir="ltr" class="text-center m-0">
                        <li class="pb-3">
                            <a href="https://maps.app.goo.gl/MiFGsgakfo62on7u8">
                                Riyadh - Al-Qadisiyah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </li>

                        <li class="pb-3">
                            <a href="https://maps.app.goo.gl/pXCnG7RPXJ2CDLqe7?g_st=aw">
                                Riyadh - Al-Shifa <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://maps.app.goo.gl/Gd7g3VScomNQP8DR7">
                                Al Qassim <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="https://maps.app.goo.gl/9UiHq4kW7Mjh1Aik8">
                                Dammam <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://maps.app.goo.gl/697yXkaS4o6kYsos8">
                                Jeddah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <script>
        function openBannar() {
            var myModal = new bootstrap.Modal(document.getElementById("war"));
            document.body.classList.add('no-scroll'); // Set padding right
            myModal.show();
        }

        // Add an event listener to remove the class when the modal is hidden
        document.getElementById('war').addEventListener('hidden.bs.modal', function() {
            document.body.classList.remove('no-scroll'); // Allow scrolling again
        });
    </script>
    <!-- end popup modal -->
    <!-- End Banner -->



    <!--Start intro section-->
    <section class="intro-section">
        <div class="circle circle-top"></div>
        <div class="circle circle-top-left"></div>
        <div class="circle circle-top-right"></div>
        <div class="circle large-circle"></div>
        <div class="circle xs-circle1"></div>
        <div class="circle xs-circle"></div>

        <div class="container p-0">
            <div class="intro-content">
                <div class="logo-img" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                    <img src=<?php echo get_template_directory_uri() . '/assets/images/logo.webp' ?> alt="Cashif logo" />
                </div>
                <div class="discount-details">
                    <h1 dir="ltr">
                        <span>Cashif for car inspection</span>
                        <br />
                        A center specialized in inspecting used cars, keeps pace with the latest technologies to help you in your purchasing decision
                    </h1>
                </div>

                <a href="https://cashif.cc/dashboard/prices" id="discountBttn" class="discount-bttn" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                    Services and prices
                </a>


                <div class="login-btn-box">
                    <!-- <a href="https://cashif.cc/dashboard/" target="_blank">Login</a> -->


                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle unset-three-dot-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg fill="#fff" width="32" height="32" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="MenuIcon">
                                <path d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z"></path>
                            </svg>
                        </button>
                        <ul class="dropdown-menu unset-three-dot-ul">
                            <li>
                                <a style="display: flex;" class="dropdown-item" href="https://cashif.cc/">
                                    <span style="margin-right: 16px; display: flex; align-items: center;">
                                        <svg fill="#0000008a" width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="TranslateIcon">
                                            <path d="m12.87 15.07-2.54-2.51.03-.03c1.74-1.94 2.98-4.17 3.71-6.53H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2zm-2.62 7 1.62-4.33L19.12 17z"></path>
                                        </svg>
                                    </span>
                                    <span>العربية</span>
                                </a>
                            </li>
                            <li>
                                <a style="display: flex;" class="dropdown-item" href="https://cashif.cc/dashboard/contact">
                                    <span style="margin-right: 16px; display: flex; align-items: center;">
                                        <svg fill="#0000008a" width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                                            <path d="M20 4H4v2h16zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6zm-9 4H6v-4h6z"></path>
                                        </svg>
                                    </span>
                                    <span>Our branches</span>
                                </a>
                            </li>

                            <li>
                                <a style="display: flex;" class="dropdown-item" href="https://cashif.cc/blog/">
                                    <span style="margin-right: 16px; display: flex; align-items: center;">
                                        <svg fill="#0000008a" width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="BookmarkBorderIcon">
                                            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2m0 15-5-2.18L7 18V5h10z"></path>
                                        </svg>
                                    </span>
                                    <span>Blog</span>
                                </a>
                            </li>


                            <li><a style="display: flex;" class="dropdown-item" href="https://api.whatsapp.com/send?phone=966920019948&text=*Select from the main menu*">
                                    <span style="margin-right: 16px; display: flex; align-items: center;">
                                        <svg fill="#0000008a" width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                                            <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path>
                                        </svg>
                                    </span>
                                    <span>Contact us</span>
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li id="login"><a style="display: flex;" class="dropdown-item" href="https://cashif.cc/dashboard/login">
                                    <span style="margin-right: 16px; display: flex; align-items: center;">
                                        <svg fill="#0000008a" width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LoginIcon">
                                            <path d="M11 7 9.6 8.4l2.6 2.6H2v2h10.2l-2.6 2.6L11 17l5-5zm9 12h-8v2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-8v2h8z"></path>
                                        </svg>
                                    </span>
                                    <span>Login</span>
                                </a></li>

                            <li id="logout"><a style="display: flex;" class="dropdown-item" href="https://cashif.cc/dashboard/logout">
                                    <span style="margin-right: 16px; display: flex; align-items: center;">
                                        <svg fill="#0000008a" width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LogoutIcon">
                                            <path d="m17 7-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z"></path>
                                        </svg>
                                    </span>
                                    <span>Logout</span>
                                </a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End intro section-->

    <!--Start Video Section-->
    <!-- <div class="title-box">
        <h2 dir="ltr" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
            Who is Cashif ?
        </h2>
    </div>
    <section class="video-container" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <div class="container">
            <div class="video-box">
                <video id="player" controls poster=<?php echo get_template_directory_uri() . '/assets/images/cashif.webp' ?>>
                    <source src=<?php echo get_template_directory_uri() . '/assets/videos/cashif.mp4' ?> type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section> -->
    <!--End Video Section-->

    <!-- Start Image Carousel -->
    <div class="carousel-container" style="max-width: 1000px; margin: auto;" dir="ltr">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <?php for ($i = 50; $i <= 59; $i++): ?>
                    <button type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide-to="<?php echo $i - 50; ?>"
                        class="<?php echo $i === 50 ? 'active' : ''; ?>"
                        <?php echo $i === 50 ? 'aria-current="true"' : ''; ?>
                        aria-label="Slide <?php echo $i - 49; ?>">
                    </button>
                <?php endfor; ?>
            </div>
            <div class="carousel-inner">
                <?php
                for ($i = 50; $i <= 59; $i++):
                    $active = $i === 50 ? 'active' : '';
                ?>
                    <div class="carousel-item <?php echo $active; ?>">
                        <picture>
                            <!-- Mobile images (up to 768px) -->
                            <source media="(max-width: 768px)"
                                srcset="<?php echo get_template_directory_uri() . '/assets/images/mobile/' . $i . '.jpg'; ?>">
                            <!-- Desktop images (default) -->
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/desktop/' . $i . '.jpg'; ?>"
                                class="d-block w-100"
                                alt="Cashif Carousel <?php echo $i; ?>">
                        </picture>
                    </div>
                <?php endfor; ?>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
        </div>
    </div>
    <!-- End Image Carousel -->

    <!-- Start Our Services Section -->
    <div class="title-box">
        <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
            Our services
        </h2>
    </div>
    <section dir="ltr" class="services-section" id="inspection-before-buying">
        <div class="container" style="max-width: unset;">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 serv-container" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <div class="service-card d-flex flex-column h-100">
                        <div class="service-img">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                <path d="M160 64c0-11.8-6.5-22.6-16.9-28.2s-23-5-32.8 1.6l-96 64C-.5 111.2-4.4 131 5.4 145.8s29.7 18.7 44.4 8.9L96 123.8V416H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H160V64z" />
                            </svg>
                        </div>
                        <h4>Purchase Check</h4>
                        <p>Inspect all parts of the used vehicle to identify and discover faults and defects before making a purchase decision.</p>
                        <ul>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Car parts check</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Test drive the car</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Vehicle condition report</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Points and rewards</span>
                            </li>
                        </ul>
                        <a class="ask-now-serv mt-4 text-center" id="ask-now-btn" href="https://cashif.cc/dashboard/plans?purchaseInspection=true">Order now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 serv-container" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <div class="service-card d-flex flex-column h-100">
                        <div class="service-img">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M142.9 96c-21.5 0-42.2 8.5-57.4 23.8L54.6 150.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L40.2 74.5C67.5 47.3 104.4 32 142.9 32C223 32 288 97 288 177.1c0 38.5-15.3 75.4-42.5 102.6L109.3 416H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9L200.2 234.5c15.2-15.2 23.8-35.9 23.8-57.4c0-44.8-36.3-81.1-81.1-81.1z" />
                            </svg>
                        </div>
                        <h4>Makhdoom Check</h4>
                        <p>If you find a car for sale in <u>Riyadh, Jeddah, Dammam, or Al-Qassim</u> and you are outside these cities, Khashef Center will conduct a comprehensive and accurate vehicle inspection, while facilitating ownership transfer, insurance, and shipping the car to your city.</p>
                        <ul>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>The car owner must attend one of the Cashf branches</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>A thorough inspection of the vehicle with video recording and explanation of the report in a recorded video clip</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Download the inspection report through <a href="https://cashif.cc/dashboard/reports">our website</a></span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Completing ownership transfer, insurance, and vehicle shipping</span>
                            </li>
                        </ul>
                        <a class="ask-now-serv mt-4 text-center" href="https://cashif.cc/check-it/en/">Order now</a>
                    </div>
                </div>

                <div id="passnger-check" class="col-lg-4 col-md-6 col-12 serv-container" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <div class="service-card d-flex flex-column h-100">
                        <div class="service-img">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M0 64C0 46.3 14.3 32 32 32l240 0c13.2 0 25 8.1 29.8 20.4s1.5 26.3-8.2 35.2L162.3 208l21.7 0c75.1 0 136 60.9 136 136s-60.9 136-136 136l-78.6 0C63 480 24.2 456 5.3 418.1l-1.9-3.8c-7.9-15.8-1.5-35 14.3-42.9s35-1.5 42.9 14.3l1.9 3.8c8.1 16.3 24.8 26.5 42.9 26.5l78.6 0c39.8 0 72-32.2 72-72s-32.2-72-72-72L80 272c-13.2 0-25-8.1-29.8-20.4s-1.5-26.3 8.2-35.2L189.7 96 32 96C14.3 96 0 81.7 0 64z" />
                            </svg>
                        </div>
                        <h4>Traveler's Check</h4>
                        <p>A customized <u>pre-travel</u> inspection to ensure your vehicle's roadworthiness, covering essential checks that guarantee a safe and comfortable journey.</p>
                        <ul>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Oil and fluids inspection</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Tires, brakes, and lights inspection</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Safety tools and wipers inspection</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Road test for the vehicle</span>
                            </li>
                        </ul>
                        <a href="https://cashif.cc/dashboard/plans?passengerCheck=true" class="ask-now-serv mt-4 text-center">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Section -->

    <!-- Start inspection stage section -->
    <div class="title-box">
        <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Stages of the inspection</h2>
    </div>
    <div class="cont" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <div dir="ltr" class="price_box">
            <div class="g_one">
                <ul id="first_ul">
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x1.webp' ?> alt="car data registration logo">car data registration</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x2.webp' ?> alt="Engine and transmission mechanics inspection logo">Engine and transmission inspection</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x3.webp' ?> alt="Computer checking of sensors logo">Computer checking of sensors</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x4.webp' ?> alt="Airbag safety check logo">Airbag safety check</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x5.webp' ?> alt="Mechanical inspection of the undercarriage logo">Undercarriage inspection</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x6.webp' ?> alt="Checking oils, fluids and leaks logo">Checking oils, fluids and leaks</li>
                </ul>
            </div>

            <div class="g_two">
                <ul id="second_ul">
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x7.webp' ?> alt="Inspect brake and suspension systems logo">Brake and suspension inspection</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x8.webp' ?> alt="Chassis and plumbing inspection logo">Chassis and plumbing inspection</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x9.webp' ?> alt="Inspection of decoration and interior logo">Inspection of decoration and interior</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x10.webp' ?> alt="Tire safety inspection logo">Tire safety inspection</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x11.webp' ?> alt="Test the car on the road logo">Test the car on the road</li>
                    <li class="u_padd"><img class="stages-img" src=<?php echo get_template_directory_uri() . '/assets/images/x12.webp' ?> alt="Print the report and explain it logo">Print the report and explain it</li>
                </ul>
            </div>
        </div>



    </div>
    <!-- End inspection stage section -->

    <!-- Start why deal with us section -->
    <div class="title-box">
        <h2 dir="ltr" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Why do you deal with us ?</h2>
    </div>
    <section dir="ltr" class="why-we-container">
        <div class="why-we-boxs" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
            <div class="how-we-box">
                <div>
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-star" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                    </svg>
                </div>
                <h2>More than 10+ years of experience</h2>
                <p>We have over 12 years of experience in car inspection and are exceptionally accurate in our inspection and reports</p>
            </div>
            <div class="how-we-box">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M280 24c0-13.3-10.7-24-24-24s-24 10.7-24 24v80c0 13.3 10.7 24 24 24s24-10.7 24-24V24zM185.8 224H326.2c6.8 0 12.8 4.3 15.1 10.6L360.3 288H151.7l19.1-53.4c2.3-6.4 8.3-10.6 15.1-10.6zm-75.3-10.9L82.2 292.4C62.1 300.9 48 320.8 48 344v40 64 32c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V448H384v32c0 17.7 14.3 32 32 32h16c17.7 0 32-14.3 32-32V448 384 344c0-23.2-14.1-43.1-34.2-51.6l-28.3-79.3C390.1 181.3 360 160 326.2 160H185.8c-33.8 0-64 21.3-75.3 53.1zM128 344a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm232 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM39 39c-9.4 9.4-9.4 24.6 0 33.9l48 48c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L73 39c-9.4-9.4-24.6-9.4-33.9 0zm400 0L391 87c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0z" />
                    </svg>
                </div>
                <h2>Inspect all cars</h2>
                <p>We inspect all types of large and small cars, whether they run on gasoline or electricity, with complete precision</p>
            </div>
            <div class="how-we-box">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M400 0L176 0c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8L24 64C10.7 64 0 74.7 0 88c0 92.6 33.5 157 78.5 200.7c44.3 43.1 98.3 64.8 138.1 75.8c23.4 6.5 39.4 26 39.4 45.6c0 20.9-17 37.9-37.9 37.9L192 448c-17.7 0-32 14.3-32 32s14.3 32 32 32l192 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-26.1 0C337 448 320 431 320 410.1c0-19.6 15.9-39.2 39.4-45.6c39.9-11 93.9-32.7 138.2-75.8C542.5 245 576 180.6 576 88c0-13.3-10.7-24-24-24L446.4 64c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zM48.9 112l84.4 0c9.1 90.1 29.2 150.3 51.9 190.6c-24.9-11-50.8-26.5-73.2-48.3c-32-31.1-58-76-63-142.3zM464.1 254.3c-22.4 21.8-48.3 37.3-73.2 48.3c22.7-40.3 42.8-100.5 51.9-190.6l84.4 0c-5.1 66.3-31.1 111.2-63 142.3z" />
                    </svg>
                </div>
                <h2>Customer Loyalty Points</h2>
                <p>With every visit to the Cashif Center, you earn free credit that you can use for your next inspection.</p>
            </div>
            <div class="how-we-box">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                    </svg>
                </div>
                <h2>Guarantee of Report Accuracy</h2>
                <p>Committed to quality and reliability, we provide a guarantee of the safety and accuracy of our car inspection reports</p>
            </div>
        </div>
    </section>
    <!-- End why deal with us section -->




    <!-- Start FAQ Accordion Section -->
    <div class="title-box">
        <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">FAQ</h2>
    </div>

    <section dir="ltr" class="faq-section">
        <div class="container" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
            <div class="accordion" id="faqAccordion">

                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What is Cashif?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Cashif is a specialized center for inspecting used cars. It provides accurate technical inspections and issues both paper and electronic inspection reports that detail the vehicle's actual condition, helping buyers make confident purchasing decisions.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What distinguishes Cashif from others?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">Cashif has a team of specialized technicians with over 10 years of experience and offers a guarantee on the accuracy of its inspection report.</div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Is there a warranty?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, there is a warranty on the accuracy of the inspection report, applied according to specific terms.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What are Cashif's main services?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Purchase Inspection Service</p>
                            A comprehensive inspection of all parts of a used car to detect faults and defects before making a purchase decision.
                            <p style="margin-top: 16px;">Proxy Purchase Service</p>
                            If you have a car for sale in Riyadh, Jeddah, Qassim, or Dammam and you are outside these cities, Cashif center performs a comprehensive and accurate inspection of the car, while facilitating ownership transfer procedures, insurance, and shipping the car to your city.
                            <p style="margin-top: 16px;">Pre-Travel Service</p>
                            A specialized inspection before travel to ensure the car's roadworthiness and safety, covering the most important checks to guarantee a safe and comfortable trip.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What are the inspection packages?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>The Comprehensive Inspection Package includes:</p>
                            <ul>
                                <li>Engine</li>
                                <li>Transmission</li>
                                <li>Differential</li>
                                <li>Undercarriage Mechanics</li>
                                <li>Computer and Sensors</li>
                                <li>Internal Chassis/Body</li>
                                <li>Road Test / Test Drive</li>
                                <li>External Chassis/Body</li>
                                <li>Airbags</li>
                                <li>Interior Trim</li>
                                <li>Car-Specific Features</li>
                                <li>External Accessories</li>
                                <li>Glass/Windows</li>
                                <li>Tires and Rims</li>
                                <li>Plugs and Coils</li>
                            </ul>

                            <p style="margin-top: 16px;">The Basic Inspection Package includes:</p>
                            <ul>
                                <li>Engine</li>
                                <li>Transmission</li>
                                <li>Differential</li>
                                <li>Undercarriage Mechanics</li>
                                <li>Computer and Sensors</li>
                                <li>Internal Chassis/Body</li>
                                <li>Road Test / Test Drive</li>
                                <li>External Chassis/Body</li>
                                <li>Airbags</li>
                            </ul>


                            <p style="margin-top: 16px;">The Powertrain Inspection Package includes:</p>
                            <ul>
                                <li>Engine</li>
                                <li>Transmission</li>
                                <li>Differential</li>
                                <li>Undercarriage Mechanics</li>
                                <li>Computer and Sensors</li>
                                <li>Internal Chassis/Body</li>
                                <li>Road Test / Test Drive</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            What are Cashif's additional services?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>In cooperation with our partners, Cashif provides the following services:</p>
                            <ul>
                                <li>Car ownership transfer and insurance issuance</li>
                                <li>"Murtah" Service: Car pickup from your location via flatbed, inspection at the center, then return to the same location</li>
                                <li>Car shipping to all cities in the Kingdom</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            What are Cashif's electronic services?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Online appointment booking for inspection</li>
                                <li>Viewing prices and packages online</li>
                                <li>Multiple payment methods</li>
                                <li>Downloading inspection report online</li>
                                <li>Tracking free balance points (Loyalty Points)</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>






    <!-- Start Testimonian -->
    <div class="title-box">
        <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Testimonial</h2>
    </div>
    <section class="testimonian">
        <div class="container" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">


                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                </div>


                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <p>Masha'Allah Tabarak Allah, excellent inspection and their prices are good, precision in all car details, and with Saudi hands, may Allah bless them</p>
                            <div id="image-caption">Abdullah Aldosari</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>They inspect the car thoroughly. If you want to buy a car, inspect it with them. Their work is trustworthy and honest, and they have a good Saudi technician</p>
                            <div id="image-caption">saud ali ibrahim</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Very precise inspection, Masha'Allah Tabarak Allah, and their service is excellent. May Allah bless them. You will understand the meaning of inspection precision after the experience</p>
                            <div id="image-caption">Abu Abdulrahman</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Best experience I've had in comprehensive inspection centers. Many thanks to the brothers in charge of the inspection. They deserve the amount paid to them</p>
                            <div id="image-caption">mhmad mhmad</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>One of the best inspection centers. Cheerful and kind guys. Inspect with them while feeling relaxed. May Allah provide for them and bless them</p>
                            <div id="image-caption">Abdullah Almutairi</div>
                        </div>
                    </div>
                </div>
                <button aria-label="prev Button" class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="left-span"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg></span>
                </button>
                <button aria-label="next Button" class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="right-span"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg></span>
                </button>
            </div>
        </div>
    </section>
    <!-- End Testimonian -->

    <!--start footer section-->
    <footer dir="ltr" class="footer-section">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                    <div class="footer-logo-img">
                        <img src=<?php echo get_template_directory_uri() . '/assets/images/logo.webp' ?> alt="Cashif logo" />
                    </div>

                    <p class="footer-intro">At Cashif, we seek to highlight a very important awareness message; It consists of raising consumer awareness of the necessity of inspecting a used car at a specialized center before proceeding with the purchase.</p>


                    <div class='socials'>
                        <a href="https://www.youtube.com/@cashifcc" aria-label="YouTube">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/cashif_sa" aria-label="instagram">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@cashif_sa" aria-label="tiktok">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fab-tiktok" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"></path>
                            </svg>
                        </a>
                        <a href="https://x.com/cashif_sa" aria-label="x">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fab-x-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                            </svg>
                        </a>
                        <a href="https://www.snapchat.com/add/cashif_sa" aria-label="snapchat">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fab-snapchat-ghost" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M510.846 392.673c-5.211 12.157-27.239 21.089-67.36 27.318-2.064 2.786-3.775 14.686-6.507 23.956-1.625 5.566-5.623 8.869-12.128 8.869l-.297-.005c-9.395 0-19.203-4.323-38.852-4.323-26.521 0-35.662 6.043-56.254 20.588-21.832 15.438-42.771 28.764-74.027 27.399-31.646 2.334-58.025-16.908-72.871-27.404-20.714-14.643-29.828-20.582-56.241-20.582-18.864 0-30.736 4.72-38.852 4.72-8.073 0-11.213-4.922-12.422-9.04-2.703-9.189-4.404-21.263-6.523-24.13-20.679-3.209-67.31-11.344-68.498-32.15a10.627 10.627 0 0 1 8.877-11.069c69.583-11.455 100.924-82.901 102.227-85.934.074-.176.155-.344.237-.515 3.713-7.537 4.544-13.849 2.463-18.753-5.05-11.896-26.872-16.164-36.053-19.796-23.715-9.366-27.015-20.128-25.612-27.504 2.437-12.836 21.725-20.735 33.002-15.453 8.919 4.181 16.843 6.297 23.547 6.297 5.022 0 8.212-1.204 9.96-2.171-2.043-35.936-7.101-87.29 5.687-115.969C158.122 21.304 229.705 15.42 250.826 15.42c.944 0 9.141-.089 10.11-.089 52.148 0 102.254 26.78 126.723 81.643 12.777 28.65 7.749 79.792 5.695 116.009 1.582.872 4.357 1.942 8.599 2.139 6.397-.286 13.815-2.389 22.069-6.257 6.085-2.846 14.406-2.461 20.48.058l.029.01c9.476 3.385 15.439 10.215 15.589 17.87.184 9.747-8.522 18.165-25.878 25.018-2.118.835-4.694 1.655-7.434 2.525-9.797 3.106-24.6 7.805-28.616 17.271-2.079 4.904-1.256 11.211 2.46 18.748.087.168.166.342.239.515 1.301 3.03 32.615 74.46 102.23 85.934 6.427 1.058 11.163 7.877 7.725 15.859z"></path>
                            </svg>
                        </a>


                    </div>
                </div>

                <div class="col-xl-8 col-lg-6 col-md-12 col-12">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-6">
                            <div class="help-list">
                                <h4>Our branches</h4>
                                <ul>
                                    <li>
                                        <a href="https://maps.app.goo.gl/MiFGsgakfo62on7u8">
                                            Riyadh - Al Qadisiyah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://maps.app.goo.gl/pXCnG7RPXJ2CDLqe7?g_st=aw">
                                            Riyadh - Al Shifa <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://maps.app.goo.gl/Gd7g3VScomNQP8DR7">
                                            Al-Qassim <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://maps.app.goo.gl/9UiHq4kW7Mjh1Aik8">
                                            Dammam <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://maps.app.goo.gl/697yXkaS4o6kYsos8">
                                            Jeddah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-6">
                            <div class="help-list">
                                <h4>Cashif services</h4>
                                <ul>
                                    <li>
                                        <a href="#inspection-before-buying">Pre-purchase inspection</a>
                                    </li>
                                    <li>
                                        <a href="https://cashif.cc/check-it/en/">We check it for you</a>
                                    </li>
                                    <li>
                                        <a href="#passnger-check">Traveler's Check</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-6">
                            <div class="help-list">
                                <h4>Legal</h4>
                                <ul>
                                    <li>
                                        <a href="https://cashif.cc/terms-and-privacy-policy/en/">Terms and Privacy</a>
                                    </li>
                                    <li>
                                        <a href="https://cashif.cc/return-policy/en/">Return and exchange</a>
                                    </li>
                                    <li>
                                        <a href="https://cashif.cc/blog/">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 col-6 contact-us">
                            <div class="footer-contact">
                                <h4>Contact us</h4>
                                <ul>
                                    <li class="footer-contact-li">
                                        <span>Customers service</span>
                                        <p><a href="tel:920019948">920019948</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <hr class='line'>
            </hr> -->

            <div class="rights-section mt-0" style="justify-content: space-between;">
                <div class="rights-info">
                    <p class="m-0 mt-4">All rights reserved © 2025 Cashif Center</p>
                </div>

                <div class="sponsors mb-0" style="margin-top: 25px; gap: 9px; flex-wrap: wrap;">

                    <div class="sponsor-logo m-0">
                        <img src=<?php echo get_template_directory_uri() . '/assets/images/mada.svg' ?> alt="mada" />
                    </div>

                    <div class="sponsor-logo m-0">
                        <img src=<?php echo get_template_directory_uri() . '/assets/images/pay.svg' ?> alt="pay" />
                    </div>

                    <div class="sponsor-logo m-0" style="padding-top: 1px; padding-bottom: 1px;">
                        <img src=<?php echo get_template_directory_uri() . '/assets/images/samsung.png' ?> alt="pay" />
                    </div>

                    <div class="sponsor-logo m-0">
                        <img src=<?php echo get_template_directory_uri() . '/assets/images/visa.svg' ?> alt="visa" />
                    </div>

                    <div class="sponsor-logo m-0">
                        <img src=<?php echo get_template_directory_uri() . '/assets/images/mastercard.svg' ?> alt="mastercard" />
                    </div>

                    <div class="sponsor-logo m-0" style="background-color: #fff; border-radius: 6px;">
                        <img src=<?php echo get_template_directory_uri() . '/assets/images/tamara-logo.svg' ?> alt="tamara" />
                    </div>

                    <div class="sponsor-logo m-0" style="background-color: #fff; border-radius: 6px;">
                        <img src=<?php echo get_template_directory_uri() . '/assets/images/tabby.png' ?> alt="tabby" />
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer section-->

    <!--Start WhatsApp icon section-->
    <a id="whatsapp-btn" aria-label="WhatsApp Customer Service" class="sticky-icon" target="_blank" href="https://api.whatsapp.com/send?phone=966920019948&text=*Select from the main menu*">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="bi bi-whatsapp" viewbox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
        </svg>
    </a>
    <!--End WhatsApp icon section-->

    <!--Start gift icon section-->
    <!-- <a id="whatsapp-btn" aria-label="WhatsApp Customer Service" class="sticky-icon gift-icon" href="https://cashif.cc/dashboard/1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill: rgb(211, 48, 48); width: 36px; height: 36px;">
            <path d="M321.5 68.8C329.1 55.9 342.9 48 357.8 48l2.2 0c22.1 0 40 17.9 40 40s-17.9 40-40 40l-73.3 0 34.8-59.2zm-131 0l34.8 59.2-73.3 0c-22.1 0-40-17.9-40-40s17.9-40 40-40l2.2 0c14.9 0 28.8 7.9 36.3 20.8zm89.6-24.3l-24.1 41-24.1-41C215.7 16.9 186.1 0 154.2 0L152 0c-48.6 0-88 39.4-88 88 0 14.4 3.5 28 9.6 40L32 128c-17.7 0-32 14.3-32 32l0 32c0 17.7 14.3 32 32 32l448 0c17.7 0 32-14.3 32-32l0-32c0-17.7-14.3-32-32-32l-41.6 0c6.1-12 9.6-25.6 9.6-40 0-48.6-39.4-88-88-88l-2.2 0c-31.9 0-61.5 16.9-77.7 44.4zM480 272l-200 0 0 208 136 0c35.3 0 64-28.7 64-64l0-144zm-248 0l-200 0 0 144c0 35.3 28.7 64 64 64l136 0 0-208z"></path>
        </svg>
    </a> -->
    <!--End gift icon section-->


    <nav class="mob-phone-nav">
        <div class="navigation">
            <ul>
                <li class="list" aria-label="Booking" title="Booking">
                    <a href="https://cashif.cc/dashboard/booking">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z" />
                            </svg>
                        </span>
                        <span class="text-mob-nav">Booking</span>
                    </a>
                </li>

                <li class="list search-in-mob-nav" id="search-in-mob-nav" aria-label="Prices" title="Prices">
                    <a href="https://cashif.cc/dashboard/prices" class="search-icon-nav-mob-link">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M320 96L192 96 144.6 24.9C137.5 14.2 145.1 0 157.9 0L354.1 0c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128l128 0c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96L96 512c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4c0 0 0 0 0 0s0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20l0 14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1c0 0 0 0 0 0s0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4l0 14.6c0 11 9 20 20 20s20-9 20-20l0-13.8c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15c0 0 0 0 0 0l-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7l0-13.9z" />
                            </svg>
                        </span>
                        <span class="text-mob-nav">Prices</span>
                    </a>
                </li>

                <li class="list act" id="home-nav" aria-label="Home" title="Home">
                    <a href="https://cashif.cc/en">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                        </span>
                        <span class="text-mob-nav">Home</span>
                    </a>
                </li>

                <li class="list category-btn-in-mob-nav" aria-label="Reports" title="Reports">
                    <a href="https://cashif.cc/dashboard/reports">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM112 256l160 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-160 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l160 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-160 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l160 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-160 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                        </span>
                        <span class="text-mob-nav">Reports</span>
                    </a>
                </li>

                <li class="list" aria-label="Falak" title="Falak">
                    <a href="https://cashif.cc/dashboard/falak/marketer">
                        <span class="icon">
                            <svg
                                style="width: 44px; transform: translateY(2px);"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <path d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8 512 128l-.7 0-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48 0 224 28.2 0 91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16L0 352c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-224-80 0zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128l0 224c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-208c0-8.8-7.2-16-16-16l-80 0zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z" />
                            </svg>
                        </span>
                        <span class="text-mob-nav">Falak</span>
                    </a>
                </li>
                <div class="indicat"></div>
            </ul>
        </div>
    </nav>


    <?php get_footer() ?>