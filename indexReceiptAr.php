<?php get_header() ?>

<body>


    <!-- Redeeme Modal -->
    <!-- <div class="modal fade" id="redeeme-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body" style="padding-bottom: 0;">
                    <div>
                        <p style="color: #747a79; margin-bottom: 6px;">رصيد نقاطك</p>
                        <h2 style="color: #1a1a1ae6; margin-bottom: 12px;"><span id="points-span-in-modal">0</span> <span>نقطة</span></h2>

                        <div class="mb-3">
                            <label class="form-label">استبدال:</label>
                            <input min="1" step="1" id="redeeme-value-input" dir="ltr" type="number" class="form-control" required>
                            <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0;">كل نقطة تساوي ريال واحد</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border: none;">
                    <button id="confirm-redeeme-btn" type="button" class="confirm-redeeme-btn">تأكيد</button>
                </div>
            </div>
        </div>
    </div> -->


    <div class="white-background">

        <div class="general-container">

            <div class="steps-box">
                <div>
                    <h1>خطوات طلب الخدمة:</h1>
                    <ol>
                        <li>بعد إتمام الدفع، ستحصل على باركود خاص بالخدمة.</li>
                        <li>قم بمشاركة صورة الباركود مع مالك السيارة واطلب منه التوجه إلى أقرب فرع.</li>
                        <li>سيتم فحص السيارة، وبعد ذلك يمكنك تحميل التقرير من <a target="_blank" href="https://cashif.cc/dashboard/reports">موقعنا الإلكتروني</a>.</li>
                        <li>بالتعاون مع شركائنا, نسهل عليك إجراءات نقل ملكية السيارة وتأمينها.</li>
                    </ol>
                </div>
            </div>

            <div>

                <div class="table-container">

                    <div class="box">


                        <!-- Signin Banner -->
                        <div id="signin-banner" class="signin-banner text-center">
                            للاستفادة من نقاطك، <a href="https://cashif.cc/dashboard/login/?from=prices">سجّل الدخول</a> إلى حسابك في كاشف <span class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="سجل الدخول لاستبدال نقاطك، كل نقطة تساوي ريال واحد"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                </svg></span>
                        </div>

                        <!-- Redeeme Banner -->
                        <div id="redeeme-banner" class="redeeme-banner" style="text-align: center;">
                            رصيد نقاطك الحالي <span id="points-span">0</span> نقطة
                            <!-- <button id="redeeme-btn" data-bs-toggle="modal" data-bs-target="#redeeme-modal">استبدال</button> -->
                        </div>



                        <div class=" table-box">

                            <h4 class="mb-4" style="color: #212529;">طلبك</h4>

                            <table class="table">
                                <caption style="padding-top: 24px; color: #212529;"></caption>

                                <tbody>
                                    <tr>
                                        <td style="color: #174545 !important;">
                                            فحص <span id="inspection-plane"></span>
                                            </br>
                                            <span id="car-model-name"></span>
                                        </td>
                                        <td class="text-center">
                                            <span id="price-plane"></span>
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
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="border-0">
                                            <input class="ms-1 form-check-input control-table checked-input" type="checkbox" value="تصوير السيارة (فيديو + صور)" id="reverseCheck1" data-row="row-video">
                                            <label class="form-check-label small-text-in-small-screeen" for="reverseCheck1">
                                                تصوير السيارة (فيديو + صور)
                                            </label>
                                        </td>
                                        <td class="text-center border-0">
                                            45
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
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="border-0">
                                            <input class="ms-1 form-check-input control-table checked-input" type="checkbox" value="شرح التقرير عبر فيديو" id="reverseCheck2" data-row="row-explain-report">
                                            <label class="form-check-label small-text-in-small-screeen" for="reverseCheck2">
                                                شرح التقرير عبر فيديو
                                            </label>
                                        </td>
                                        <td class="text-center border-0">
                                            50
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
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input class="ms-1 form-check-input control-table checked-input" type="checkbox" value="تقرير موجز" id="reverseCheck3" data-row="row-summary-report">
                                            <label class="form-check-label small-text-in-small-screeen" for="reverseCheck3">
                                                تقرير موجز
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <span class="summary-label">100</span> <svg width="16" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
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
                                        </td>
                                    </tr>



                                    <tr id="row-discount" style="display: none;">
                                        <td class="border-top border-bottom-0" style="border-color: #ececec !important; color: #174545 !important;">
                                            خصم <span id="discount-percent-label"></span> <span>على الفحص</span>
                                        </td>
                                        <td dir="rtl" class="text-center border-top border-bottom-0" style="border-color: #ececec !important;" id="discount-price"><span id="discount-label"></span></td>
                                    </tr>



                                    <tr id="row-redeeme" style="display: none;">
                                        <td class="border-top border-bottom-0" style="border-color: #ececec !important; color: #174545 !important;">
                                            خصم من استبدال <span id="ammount-of-redeemed-point-label"></span> <span>نقطة</span>
                                        </td>
                                        <td dir="rtl" class="border-top border-bottom-0" style="border-color: #ececec !important; text-align: center !important;">
                                            <span id="redeeme-label"></span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="inputs-containers">

                            <div>
                                <div class="mb-3" dir="rtl">
                                    <label for="discount-input" class="form-label">كود الخصم</label>
                                    <div class="input-group flex-row-reverse">
                                        <button id="discount-btn" class="btn btn-outline-secondary" type="button" style="color: #fff; background-color: #174545; width: 86px; border-color: #174545;">تطبيق</button>
                                        <input dir="ltr" type="text" class="form-control" id="discount-input" style="border: 1px solid #174545; box-shadow: none; text-align: right;">
                                    </div>
                                    <p class="paragraph-under-discount-input" style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">سيتم احتساب القيمة الأعلى عند إدخال كود لباقة تحتوي على خصم</p>
                                </div>

                                <div class="mb-3" dir="rtl">
                                    <label for="discount-input" class="form-label">استبدال النقاط</label>
                                    <div class="input-group flex-row-reverse">
                                        <button id="confirm-redeeme-btn" class="btn btn-outline-secondary" type="button" style="color: #fff; background-color: #174545; width: 86px; border-color: #174545;">استبدال</button>
                                        <input dir="ltr" id="redeeme-value-input" type="number" class="form-control" style="border: 1px solid #174545; box-shadow: none; text-align: right;">
                                    </div>
                                    <p id="helper-text-under-discount-input-if-auth" class="paragraph-under-discount-input" style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">رصيد نقاطك الحالي <span id="points-span-under-redeme-input">0</span> نقطة </p>
                                    <p id="helper-text-under-discount-input-if-not-auth" class="paragraph-under-discount-input" style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">للاستفادة من نقاطك، <a href="https://cashif.cc/dashboard/login/?from=prices">سجّل الدخول</a> إلى حسابك في كاشف</p>
                                </div>

                                <div class="mb-3 mt-4 pt-4" style="border-top: 1px solid #174545;">
                                    <label for="exampleName" class="form-label">الاسم الثلاثي*</label>
                                    <input type="text" class="form-control" id="exampleName" aria-describedby="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputphone" class="form-label">رقم الهاتف* (5xxxxxxxx)</label>
                                    <input maxlength="9" type="tel" class="form-control" id="exampleInputphone" required>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleBranch" class="form-label">الفرع*</label>
                                    <select class="form-select" id="exampleBranch" aria-label="Default select example" required>
                                        <option selected disabled>اختر فرع</option>
                                        <option value="الرياض-القادسية">الرياض - القادسية</option>
                                        <option value="الرياض-الشفا">الرياض - الشفا</option>
                                        <option value="الدمام">الدمام</option>
                                        <option value="جدة">جدة</option>
                                    </select>
                                </div>



                                <div class="mb-4 pt-4 pb-2" style="border-top: 1px solid #174545;">
                                    <div class="form-check form-check-reverse">
                                        <input class="form-check-input" style="width: 1em;" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2" style="color: #1A1A1AE6;">
                                            دفع الكتروني
                                            <p style="color: #747a79; font-size: 11px; margin-top: 6px; ">ادفع باستخدام بطاقة الإئتمان, Mada, Visa, MasterCard</p>
                                        </label>
                                    </div>

                                    <!-- <div class="form-check form-check-reverse pt-2 pb-2" style="border-bottom: 1px solid #ececec;">
                                        <input class="form-check-input" type="radio" style="width: 1em;" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" style="color: #1A1A1AE6;">
                                            دفع في المركز
                                            <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">قم بالدفع عند حضورك الى أحد فروع كاشف</p>
                                        </label>
                                    </div> -->


                                    <div class="form-check form-check-reverse pt-2 pb-2">
                                        <input class="form-check-input" type="radio" style="width: 1em;" name="flexRadioDefault" id="flexRadioDefault0">
                                        <label class="form-check-label" for="flexRadioDefault0" style="color: #1A1A1AE6;">
                                            <div style="display: flex; align-items: center; gap: 8px;">
                                                <div><img src=<?php echo get_template_directory_uri() . '/assets/images/tamara-logo.svg' ?> alt="tamata logo"></div>
                                                قسمها على 4 دفعات
                                            </div>
                                            <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">بدون رسوم تأخير، متوافقة مع الشريعة الإسلامية</p>
                                        </label>
                                    </div>

                                    <div class="form-check form-check-reverse pt-2">
                                        <input class="form-check-input" type="radio" style="width: 1em;" name="flexRadioDefault" id="flexRadioDefaultTabby">
                                        <label class="form-check-label" for="flexRadioDefaultTabby" style="color: #1A1A1AE6;">
                                            <div style="display: flex; align-items: center; gap: 8px;">
                                                <div><img style="width: 74px;" src=<?php echo get_template_directory_uri() . '/assets/images/tabby.png' ?> alt="tabby logo"></div>
                                                قسمها على 4 دفعات
                                            </div>
                                            <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">بدون أي فوائد، أو رسوم</p>
                                        </label>
                                    </div>

                                </div>

                                <!-- Moyasar form -->
                                <div class="mysr-form"></div>

                                <!-- Pay in center button -->
                                <div class="pay-in-center text-center mb-4 mt-4">
                                    <button id="pay-in-center-btn" class="btn btn-primary" style="background-color: #174545; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">تأكيد الطلب</button>
                                </div>

                                <!-- Pay with Tamara button -->
                                <div class="pay-with-tamara text-center mb-4 mt-4">
                                    <button id="pay-with-tamara-btn" class="btn btn-primary d-flex justify-content-center" style="background-color: #174545; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">تأكيد الطلب</button>
                                </div>

                                <!-- Pay with Tabby button -->
                                <div class="pay-with-tabby text-center mb-4 mt-4">
                                    <button id="pay-with-tabby-btn" class="btn btn-primary d-flex justify-content-center" style="background-color: #174545; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">تأكيد الطلب</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <footer>
            <div>
                <p>جميع الحقوق محفوظة © 2025 مركز كاشف</p>
            </div>
            <div class="footer-links-box">
                <a href="https://cashif.cc/privacy-policy/">سياسة الخصوصية</a>
                <a href="https://cashif.cc/return-policy/">سياسة الاسترجاع</a>
                <a href="https://cashif.cc/terms-of-service/">شروط الخدمة</a>
            </div>
        </footer>




        <!--Start WhatsApp icon section-->
        <a id="whatsapp-btn" aria-label="WhatsApp Customer Service" class="sticky-icon" target="_blank" href="https://api.whatsapp.com/send?phone=966920019948&text=*اختر من القائمة الرئيسية*">
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