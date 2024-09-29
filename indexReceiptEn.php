<?php get_header() ?>

<body>

    <div class="white-background">


        <!-- Start Section -->
        <section class="services-section">

            <div class="service-card d-flex flex-column h-100">

                <h4 dir="ltr">The service includes:</h4>
                <ul dir="ltr">
                    <li>
                        <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" />
                            </svg>
                        </span>
                        <span class="small-text-in-small-screeen">Car owner must attend Cashif center</span>
                    </li>
                    <li>
                        <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" />
                            </svg>
                        </span>
                        <span class="small-text-in-small-screeen">Inspect and test the car</span>
                    </li>
                    <li>
                        <span><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-119a5lz" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" />
                            </svg>
                        </span>
                        <span class="small-text-in-small-screeen">Report in PDF format</span>
                    </li>
                </ul>
            </div>

        </section>
        <!-- End Section -->

        <div class="title-box">
            <h2>
                Additional services
            </h2>
        </div>


        <section class="inputs-container">
            <div class="inputs-box">

                <div class="form-check mb-3">
                    <input class="form-check-input control-table" type="checkbox" value="Shooting a video" id="reverseCheck1" data-row="row-video">
                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck1">
                        Shooting video of the car (+45 SAR)
                    </label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="mobile inspection" id="reverseCheck2" data-row="row-mobile-inspection" disabled>
                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck2">
                        Mobile inspection (Soon)
                    </label>
                </div>

                <!-- <div class="form-check mb-3">
                    <input class="form-check-input control-table" type="checkbox" value="Ownership transfer" id="reverseCheck3" data-row="row-ownership">
                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck3">
                        Car ownership transfer (+550 SAR)
                    </label>
                </div> -->

                <!-- <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="Car insurance" id="reverseCheck4">
                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck4">
                        Car insurance (not specified)
                    </label>
                </div> -->

                <!-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Car Shipping" id="reverseCheck5">
                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck5">
                        Shipping the car to you (10% discount)
                    </label>
                </div> -->

            </div>

        </section>

        <div class="title-box">
            <h2>
                Post-Inspection Services
            </h2>
        </div>

        <div class="sub-title-box mt-5">
            <h3>
                Vehicle Ownership Transfer
            </h3>
        </div>

        <div>
            <div class="text-center p-2 pt-0 note-box">
                <p class="small-text-in-small-screeen">In collaboration with <span>our partners</span>, we facilitate the vehicle ownership transfer process for you.</p>
                <p class="small-text-in-small- m-0">The cost of vehicle ownership transfer is <span>550 SAR</span>.</p>
            </div>
        </div>

        <div class="sub-title-box mt-5">
            <h3>
                Vehicle Insurance
            </h3>
        </div>

        <div>
            <div class="text-center p-2 pt-0 note-box">
                <p class="small-text-in-small-screeen">In collaboration with <span>insurance companies</span>, we help you obtain suitable insurance.</p>
                <p class="small-text-in-small-screeen">Please note that <span>insurance prices vary</span> depending on the vehicle and the individual.</p>
                <p class="small-text-in-small-screeen m-0">Vehicle insurance prices start at <span>approximately 800 SAR</span>.</p>
            </div>
        </div>

        <div class="sub-title-box mt-5">
            <h3>
                Vehicle Shipping
            </h3>
        </div>

        <div>
            <div class="text-center p-2 pt-0 note-box">
                <p class="small-text-in-small-screeen">In collaboration with <span>Al-Bassami Company</span> for vehicle shipping, we offer you a <span>10%</span> discount on the total invoice.</p>
                <p class="small-text-in-small-screeen">Please note that <span>prices vary</span> depending on the vehicle and the city.</p>
                <p class="mb-4 small-text-in-small-screeen">Vehicle shipping prices start at <span>approximately 350 SAR</span>.</p>
            </div>
        </div>

        <div>
            <h2 id="car-model-name" class="text-center mt-4"></h2>
        </div>


        <div class="table-container">

            <div class="inputs-containers">

                <div style="width: fit-content; margin: auto;">
                    <div class="mb-3">
                        <label for="exampleName" class="form-label">Full name*</label>
                        <input type="text" class="form-control" id="exampleName" aria-describedby="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputphone" class="form-label">Phone number*</label>
                        <input type="tel" class="form-control" id="exampleInputphone" required>
                    </div>
                    <div class="mb-4">
                        <label for="exampleBranch" class="form-label">Branch*</label>
                        <select class="form-select" id="exampleBranch" aria-label="Default select example" required>
                            <option selected disabled>Choose a branch</option>
                            <option value="الرياض-القادسية">Riyadh - Al-Qadisiyah</option>
                            <option value="الرياض-الشفا">Riyadh - Al-Shifa</option>
                            <option value="الدمام">Dammam</option>
                        </select>
                    </div>

                    <div class="mysr-form"></div>
                </div>
            </div>



            <div class="table-box">
                <table dir="ltr" class="table">
                    <caption dir="ltr"></caption>
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

            <!-- <button id="ask-serv-btn" class="discount-bttn">
                Order
            </button> -->
        </div>


        <footer dir="ltr">
            <div>
                <p>All rights reserved © 2024 Cashif Center</p>
            </div>
            <div class=" footer-links-box">
                <a href="https://cashif.cc/privacy-policy/en/">Privacy policy</a>
                <a href="https://cashif.cc/return-policy/en/">Return policy</a>
                <a href="https://cashif.cc/terms-of-service/en/">Terms of service</a>
            </div>
        </footer>


        <!--Start WhatsApp icon section-->
        <a id="whatsapp-btn" aria-label="WhatsApp Customer Service" class="sticky-icon" target="_blank" href="https://api.whatsapp.com/send?phone=966920019948&text=*Select from the main menu*">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" class="bi bi-whatsapp" viewbox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
            </svg>
        </a>
        <!--End WhatsApp icon section-->

        <div id="spinner" class="spinner">
            <div class="spinner-border" style="margin: auto;" role="status">
            </div>
        </div>

    </div>


    <?php get_footer() ?>