<?php get_header() ?>

<body>

    <div class="white-background">

        <div class="title-box" style="margin-top: 0px; padding-top: 48px;">
            <h2>
                خدمات إضافية
            </h2>
        </div>

        <section class="inputs-container">
            <div class="inputs-box">

                <div class="form-check form-check-reverse mb-3" style="display: none;">
                    <input class="form-check-input control-table checked-input" type="checkbox" value="تصوير فيديو" id="reverseCheck1" data-row="row-video">
                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck1">
                        تصوير مقطع فيديو للسيارة (+45 ريال)
                    </label>
                </div>

                <div class="form-check form-check-reverse mb-3">
                    <input class="form-check-input control-table checked-input" type="checkbox" value="تقرير موجز" id="reverseCheck3" data-row="row-summary-report">
                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck3">
                        تقرير موجز (+<span class="summary-label"></span> ريال)
                    </label>
                </div>

                <div class="form-check form-check-reverse mb-3">
                    <input class="form-check-input checked-input" type="checkbox" value="فحص متنقل" id="reverseCheck2" data-row="row-mobile-inspection" disabled>
                    <label class="form-check-label small-text-in-small-screeen" for="reverseCheck2">
                        فحص متنقل (قريبا)
                    </label>
                </div>

            </div>

        </section>


        <div class="table-container">

            <div class="box">

                <div class=" table-box">

                    <h4 class="mb-4" style="color: #1A1A1AE6;">طلبك</h4>

                    <table class="table">
                        <caption style="padding-top: 24px; color: #1A1A1AE6;"></caption>
                        <thead>
                            <tr>
                                <th scope="col">الباقة</th>
                                <th class="text-center" scope="col">المجموع</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>فحص <span id="inspection-plane"></span></br><span id="car-model-name"></span></td>
                                <td class="text-center"><span id="price-plane"></span> ريال</td>
                            </tr>
                            <tr id="row-video" style="display: none;">
                                <td>تصوير فيديو</td>
                                <td class="text-center" id="video-price">45 ريال</td>
                            </tr>
                            <tr id="row-summary-report" style="display: none;">
                                <td>تقرير موجز</td>
                                <td class="text-center" id="summary-price"><span class="summary-label"></span> ريال</td>
                            </tr>

                            <tr id="row-discount" style="display: none;">
                                <td>خصم <span id="discount-percent-label"></span></td>
                                <td dir="rtl" class="text-center" id="discount-price"><span id="discount-label"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="inputs-containers">

                    <div>
                        <div class="mb-3">
                            <label for="exampleName" class="form-label">الاسم الثلاثي*</label>
                            <input type="text" class="form-control" id="exampleName" aria-describedby="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputphone" class="form-label">رقم الهاتف* (5xxxxxxxx)</label>
                            <input maxlength="9" type="tel" class="form-control" id="exampleInputphone" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleBranch" class="form-label">الفرع*</label>
                            <select class="form-select" id="exampleBranch" aria-label="Default select example" required>
                                <option selected disabled>اختر فرع</option>
                                <option value="الرياض-القادسية">الرياض - القادسية</option>
                                <option value="الرياض-الشفا">الرياض - الشفا</option>
                                <option value="الدمام">الدمام</option>
                            </select>
                        </div>

                        <div class="mb-4" dir="rtl">
                            <label for="discount-input" class="form-label">كود الخصم</label>
                            <div class="input-group flex-row-reverse">
                                <button id="discount-btn" class="btn btn-outline-secondary" type="button" style="color: #fff; background-color: #6c757d; width: 75px;">تطبيق</button>
                                <input type="text" class="form-control" id="discount-input" style="border: 1px solid #6c757d; box-shadow: none;">
                            </div>
                        </div>




                        <div class="mb-4 pt-2 pb-2" style="border-top: 1px solid #ececec; border-bottom: 1px solid #ececec;">
                            <div class="form-check form-check-reverse" style="border-bottom: 1px solid #ececec;">
                                <input class="form-check-input" style="width: 1em;" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2" style="color: #1A1A1AE6;">
                                    دفع الكتروني
                                    <p style="color: #747a79; font-size: 11px; margin-top: 6px; ">ادفع باستخدام بطاقة الإئتمان, Mada, Visa, MasterCard</p>
                                </label>
                            </div>

                            <div class="form-check form-check-reverse pt-2 pb-2" style="border-bottom: 1px solid #ececec;">
                                <input class="form-check-input" type="radio" style="width: 1em;" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1" style="color: #1A1A1AE6;">
                                    دفع في المركز
                                    <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">قم بالدفع عند حضورك الى أحد فروع كاشف</p>
                                </label>
                            </div>


                            <div class="form-check form-check-reverse pt-2 pb-2" style="border-bottom: 1px solid #ececec;">
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
                            <button id="pay-in-center-btn" class="btn btn-primary" style="background-color: #183f9c; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">تأكيد الطلب</button>
                        </div>

                        <!-- Pay with Tamara button -->
                        <div class="pay-with-tamara text-center mb-4 mt-4">
                            <button id="pay-with-tamara-btn" class="btn btn-primary d-flex justify-content-center" style="background-color: #183f9c; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">تأكيد الطلب</button>
                        </div>

                        <!-- Pay with Tabby button -->
                        <div class="pay-with-tabby text-center mb-4 mt-4">
                            <button id="pay-with-tabby-btn" class="btn btn-primary d-flex justify-content-center" style="background-color: #183f9c; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">تأكيد الطلب</button>
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