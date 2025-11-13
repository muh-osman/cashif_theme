<?php get_header() ?>

<body>


    <!-- Redeem Modal -->
    <div class="modal fade" id="redeeme-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" dir="ltr">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body" style="padding-bottom: 0;">
                    <div>
                        <p style="color: #747a79; margin-bottom: 6px;">Your points balance</p>
                        <h2 style="color: #1a1a1ae6; margin-bottom: 12px;"><span id="points-span-in-modal">0</span> <span>points</span></h2>


                        <div class="mb-3">
                            <label class="form-label">Redeem:</label>
                            <input min="1" step="1" id="redeeme-value-input" dir="ltr" type="number" class="form-control" required>
                            <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0;">Each point is worth one Riyal</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border: none;">
                    <button id="confirm-redeeme-btn" type="button" class="confirm-redeeme-btn">Confirm</button>
                </div>
            </div>
        </div>
    </div>




    <div class="white-background">


        <div class="table-container">


            <div class="box">

                <!-- Signin Banner -->
                <div id="signin-banner" class="signin-banner" style="font-size: 12px; text-align: center;">
                    <span class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Sign in to redeem your points, each point equals one Riyal"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </span>
                    To benefit from your points, <a href="https://cashif.cc/dashboard/login/?from=prices">sign in</a> to your Cashif account

                </div>

                <!-- Redeem Banner -->
                <div id="redeeme-banner" class="redeeme-banner" dir="ltr">
                    Your current points balance is <span id="points-span">0</span> points. <button id="redeeme-btn" data-bs-toggle="modal" data-bs-target="#redeeme-modal">Redeem</button>
                </div>


                <div class="table-box">

                    <h4 dir="ltr" class="mb-4" style="color: #212529;">Order</h4>

                    <table dir="ltr" class="table">
                        <caption dir="ltr" style="text-align: right; padding-top: 24px; color: #212529;"></caption>

                        <tbody>

                            <tr>
                                <td style="color: #174545 !important;">
                                    <span id="inspection-plane"></span>
                                    </br>
                                    <span id="car-model-name"></span>
                                </td>
                                <td style="text-align: right !important;">
                                    <svg width="16" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
                                        <defs>
                                            <style>
                                                .cls-0 {
                                                    fill: #757575;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-0" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z" />
                                        <path class="cls-0" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z" />
                                    </svg>
                                    <span id="price-plane"></span>
                                </td>
                            </tr>

                            <tr id="summary-report-row">
                                <td>
                                    <input class="me-1 form-check-input control-table checked-input" type="checkbox" value="Summary report" id="reverseCheck3" data-row="row-summary-report">
                                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck3">
                                        Summary report
                                    </label>
                                </td>
                                <td class="text-center" style="text-align: right !important;">
                                    <svg width="16" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
                                        <defs>
                                            <style>
                                                .cls-0 {
                                                    fill: #757575;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-0" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z" />
                                        <path class="cls-0" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z" />
                                    </svg>
                                    <span class="summary-label">100</span>
                                </td>
                            </tr>

                            <tr id="air-bag-row">
                                <td>
                                    <input class="me-1 form-check-input control-table checked-input" type="checkbox" value="فحص الإيرباق" id="reverseCheck4" data-row="row-air-bag">
                                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck4">
                                        Airbag check
                                    </label>
                                </td>

                                <td class="text-center" style="text-align: right !important;">
                                    <svg width="16" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
                                        <defs>
                                            <style>
                                                .cls-0 {
                                                    fill: #757575;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-0" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z" />
                                        <path class="cls-0" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z" />
                                    </svg>
                                    <span class="air-bag-label"></span>
                                </td>
                            </tr>

                            <tr id="row-discount" style="display: none;">
                                <td class="border-top border-bottom-0" style="border-color: #ececec !important; color: #174545 !important;">
                                    Discount <span id="discount-percent-label"></span> <span>on inspection</span>
                                </td>
                                <td dir="ltr" class="border-top border-bottom-0" style="border-color: #ececec !important; text-align: right !important;" id="discount-price">
                                    <span id="discount-label"></span>
                                </td>
                            </tr>

                            <tr id="row-redeeme" style="display: none;">
                                <td class="border-top border-bottom-0" style="border-color: #ececec !important; color: #174545 !important;">
                                    Discount from redeeming <span id="ammount-of-redeemed-point-label"></span> <span>points</span>
                                </td>
                                <td dir="rtl" class="border-top border-bottom-0" style="border-color: #ececec !important; text-align: right !important;">
                                    <span id="redeeme-label"></span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>



                <div dir="ltr" class="inputs-containers">

                    <div>
                        <div class="mb-3" dir="ltr">
                            <label for="discount-input" class="form-label">Discount code</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="discount-input" style="border: 1px solid #174545; box-shadow: none;">
                                <button id="discount-btn" class="btn btn-outline-secondary" type="button" style="border: 1px solid #174545; color: #fff; background-color: #174545; width: 75px;">Apply</button>
                            </div>
                            <p class="paragraph-under-discount-input" style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">The higher value will be applied when entering a discount code for a package that already includes a discount</p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleName" class="form-label">Full name*</label>
                            <input type="text" class="form-control" id="exampleName" aria-describedby="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputphone" class="form-label">Phone number* (5xxxxxxxx)</label>
                            <input maxlength="9" type="tel" class="form-control" id="exampleInputphone" required>
                        </div>
                        <div class="mb-4">
                            <label for="exampleBranch" class="form-label">Branch*</label>
                            <select class="form-select" id="exampleBranch" aria-label="Default select example" required>
                                <option selected disabled>Choose a branch</option>
                                <option value="الرياض-القادسية">Riyadh - Al-Qadisiyah</option>
                                <option value="الرياض-الشفا">Riyadh - Al-Shifa</option>
                                <option value="الدمام">Dammam</option>
                                <option value="جدة">Jeddah</option>
                            </select>
                        </div>




                        <div dir="ltr" class=" mb-4 pt-2 pb-2" style="border-top: 1px solid #ececec; border-bottom: 1px solid #ececec;">
                            <div dir="ltr" class="form-check" style="border-bottom: 1px solid #ececec;">
                                <input dir="ltr" class="form-check-input" style="width: 1em;" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label dir="ltr" class="form-check-label" for="flexRadioDefault2" style="color: #1A1A1AE6;">
                                    Electronic payment
                                    <p style="color: #747a79; font-size: 11px; margin-top: 6px;">Pay with credit card, Mada, Visa, MasterCard</p>
                                </label>
                            </div>

                            <!-- <div dir="ltr" class="form-check pt-2 pb-2" style="border-bottom: 1px solid #ececec;">
                                <input dir="ltr" class="form-check-input" style="width: 1em;" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label dir="ltr" class="form-check-label" for="flexRadioDefault1" style="color: #1A1A1AE6;">
                                    Pay at the center
                                    <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">Pay at one of the Cashif branches</p>
                                </label>
                            </div> -->

                            <div class="form-check pt-2 pb-2" style="border-bottom: 1px solid #ececec;">
                                <input class="form-check-input" style="width: 1em;" type="radio" name="flexRadioDefault" id="flexRadioDefault0">
                                <label class="form-check-label" for="flexRadioDefault0" style="color: #1A1A1AE6;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <div><img src=<?php echo get_template_directory_uri() . '/assets/images/tamara-logo.svg' ?> alt="tamata logo"></div>
                                        Split in 4 payments
                                    </div>
                                    <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">No late fees, Sharia-compliant!</p>
                                </label>
                            </div>

                            <div class="form-check pt-2">
                                <input class="form-check-input" type="radio" style="width: 1em;" name="flexRadioDefault" id="flexRadioDefaultTabby">
                                <label class="form-check-label" for="flexRadioDefaultTabby" style="color: #1A1A1AE6;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <div><img style="width: 74px;" src=<?php echo get_template_directory_uri() . '/assets/images/tabby.png' ?> alt="tabby logo"></div>
                                        Split in 4 payments
                                    </div>
                                    <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">Pay in 4. No interest, no fees.</p>
                                </label>
                            </div>

                        </div>

                        <!-- Moyasar form -->
                        <div class="mysr-form"></div>

                        <!-- Pay in center button -->
                        <div class="pay-in-center text-center mb-4 mt-4">
                            <button id="pay-in-center-btn" class="btn btn-primary" style="background-color: #174545; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">Confirm order</button>
                        </div>

                        <!-- Pay with Tamara button -->
                        <div class="pay-with-tamara text-center mb-4 mt-4">
                            <button id="pay-with-tamara-btn" class="btn btn-primary d-flex justify-content-center" style="background-color: #174545; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">Confirm order</button>
                        </div>

                        <!-- Pay with Tabby button -->
                        <div class="pay-with-tabby text-center mb-4 mt-4">
                            <button id="pay-with-tabby-btn" class="btn btn-primary d-flex justify-content-center" style="background-color: #174545; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">Confirm order</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <footer dir="ltr">
            <div>
                <p>All rights reserved © 2025 Cashif Center</p>
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