<?php get_header() ?>

<body>


    <!-- Start Section -->
    <section class="services-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 w-100 p-0" data-aos="fade-up" data-aos-duration="500">
                    <div class="service-card d-flex flex-column h-100">
                        <div class="service-img">
                            <img src=<?php echo get_template_directory_uri() . '/assets/images/logo.webp' ?> alt="Cashif logo" />
                        </div>
                        <h4 dir="ltr">The service includes:</h4>
                        <ul dir="ltr">
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>The car owner must attend one of the Cashif inspection centers.</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Vehicle inspection with field test drive.</span>
                            </li>
                            <li>
                                <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="VerifiedUserIcon">
                                        <path d="M12 1 3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"></path>
                                    </svg>
                                </span>
                                <span>Drafting the report in PDF format.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <div class="title-box">
        <h2 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
            Additional services
        </h2>
    </div>

    <section class="services-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 p-0 paid-serv" data-aos="fade-up" data-aos-duration="500">
                    <div dir="ltr" class="service-card d-flex flex-column h-100 w-100">
                        <p>Select the required services</p>

                        <div class="form-check mb-3">
                            <input class="form-check-input control-table" type="checkbox" value="Shooting a video" id="reverseCheck1" data-row="row-video">
                            <label class="form-check-label" for="reverseCheck1">
                                Video recording of the car (+45 SAR)
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input control-table" type="checkbox" value="Ownership transfer" id="reverseCheck2" data-row="row-ownership">
                            <label class="form-check-label" for="reverseCheck2">
                                Car ownership transfer (+550 SAR)
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="Car insurance" id="reverseCheck3">
                            <label class="form-check-label" for="reverseCheck3">
                                Car insurance (not specified)
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Car Shipping" id="reverseCheck4">
                            <label class="form-check-label" for="reverseCheck4">
                                Shipping the car to your city (10% discount)
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="title-box">
        <h2 dir="ltr" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
            Note !
        </h2>
    </div>

    <div dir="ltr">
        <div class="text-center p-3 pt-0">
            <p>In cooperation with <a href="https://www.albassamitransport.com/">Al Bassami</a> Car Shipping Company. We offer a 10% discount on the total bill.</p>
            <p>Please note that prices vary depending on the car and the city.</p>
            <p>Car shipping prices start at around 350 riyals.</p>
        </div>
    </div>


    <div class="table-container">
        <div class="table-box">
            <table dir="ltr" class="table">
                <caption dir="ltr" style="padding-top: 24px;"></caption>
                <thead>
                    <tr>
                        <th scope="col">Service Type</th>
                        <th class="text-center" scope="col">Unit price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Plan <span id="inspection-plane"></span></td>
                        <td class="text-center"><span id="price-plane"></span> SAR</td>
                    </tr>
                    <tr id="row-video" style="display: none;">
                        <td>Shooting a video</td>
                        <td class="text-center">45 SAR</td>
                    </tr>
                    <tr id="row-ownership" style="display: none;">
                        <td>Ownership transfer</td>
                        <td class="text-center">550 SAR</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button id="ask-serv-btn" class="discount-bttn" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
            Request service
        </button>
    </div>





    <!--start footer section-->
    <footer dir="ltr" class="footer-section">
        <div class="container">
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
                        <div class="col-xl-4 col-md-6 col-6">
                            <div class="help-list">
                                <h4>Our branches</h4>
                                <ul>
                                    <li>
                                        <a href="https://maps.app.goo.gl/MiFGsgakfo62on7u8">
                                            Riyadh - Al-Qadisiyah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://maps.app.goo.gl/EXwyqvoEvLnxCrzu5">
                                            Riyadh - Al Shifa <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://maps.app.goo.gl/WXDnDccnC5N1C2au8">
                                            Dammam <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-6">
                            <div class="help-list">
                                <h4>Cashif services</h4>
                                <ul>
                                    <li>
                                        <a href="https://cashif.cc/en/">Pre-purchase inspection</a>
                                    </li>

                                    <li>
                                        <a href="https://cashif.cc/en/">Pre-travel inspection</a>
                                    </li>

                                    <li>
                                        <a href="https://cashif.cc/en/">Inspecting my own car</a>
                                    </li>

                                    <li>
                                        <a href="https://cashif.cc/en/">Maintenance check</a>
                                    </li>

                                    <li>
                                        <a href="https://cashif.cc/check-it/en/">We check it for you</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-12 contact-us">
                            <div class="footer-contact">
                                <h4>Contact us</h4>
                                <ul>
                                    <li class="footer-contact-li">
                                        <span>Customers service</span>
                                        <p><a href="tel:920019948">920019948</a></p>
                                    </li>
                                    <li class="footer-contact-li">
                                        <span>Language:</span>
                                        <p><a href="https://cashif.cc/check-it/">Arabic (AR)</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <hr class='line'>
            </hr> -->

            <div class="rights-section">
                <div class="rights-info">
                    <p>All rights reserved © 2024 Cashif Center</p>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer section-->

    <!--Start WhatsApp icon section-->
    <a id="whatsapp-btn" aria-label="WhatsApp Customer Service" class="sticky-icon" target="_blank" href="https://api.whatsapp.com/send?phone=966920019948&text=*I would like to speak with customer service*">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" class="bi bi-whatsapp" viewbox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
        </svg>
    </a>
    <!--End WhatsApp icon section-->


    <?php get_footer() ?>