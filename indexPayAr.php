<?php get_header() ?>

<body>

    <div class="white-background">

        <div class="table-container">

            <div class="inputs-containers">

                <div class="p-2">

                    <h4 class="mb-4" style="color: #1A1A1AE6;">طلبك</h4>

                    <div style="color: #747a79;">
                        <div class="d-flex justify-content-between" style="border-bottom: 1px solid #ececec;">
                            <h6 style="font-size: 15px;">الباقة</h6>
                            <h6 style="font-size: 15px;">المجموع</h6>
                        </div>
                    </div>

                    <div style="color: #747a79;">
                        <div class="d-flex justify-content-between mb-0 mt-4">
                            <h6 style="font-size: 15px;" class="m-0">فحص <span id="plan"></span></h6>
                            <h6 style="font-size: 15px;" class="m-0" style="color: #1A1A1AE6;"><span id="price"></span> ريال</h6>
                        </div>
                    </div>

                    <div>
                        <p id="model" style="color: #1A1A1AE6; font-size: 12px;"></p>
                    </div>

                    <div class="mb-4" style="color: #747a79; border-top: 1px solid #ececec;">
                        <div class="d-flex justify-content-between mt-2">
                            <h6 style="font-size: 15px;">الإجمالي</h6>
                            <h6 style="font-size: 15px;"><span style="color: #1A1A1AE6;" id="total"></span> <span style="color: #1A1A1AE6;">ريال</span></h6>
                        </div>
                    </div>

                </div>

                <div style="width: 100%; margin: auto;">
                    <div class="mb-3">
                        <label for="exampleName" class="form-label">الاسم الثلاثي*</label>
                        <input type="text" class="form-control" id="exampleName" aria-describedby="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputphone" class="form-label">رقم الهاتف*</label>
                        <input type="tel" class="form-control" id="exampleInputphone" required>
                    </div>
                    <div class="mb-4">
                        <label for="exampleBranch" class="form-label">الفرع*</label>
                        <select class="form-select" id="exampleBranch" aria-label="Default select example" required>
                            <option selected disabled>اختر فرع</option>
                            <option value="الرياض-القادسية">الرياض - القادسية</option>
                            <option value="الرياض-الشفا">الرياض - الشفا</option>
                            <option value="الدمام">الدمام</option>
                        </select>
                    </div>

                    <div class=" mb-4 pt-2 pb-2" style="border-top: 1px solid #ececec; border-bottom: 1px solid #ececec;">
                        <div class="form-check form-check-reverse" style="border-bottom: 1px solid #ececec;">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2" style="color: #1A1A1AE6;">
                                دفع الكتروني
                                <p style="color: #747a79; font-size: 11px; margin-top: 6px;">ادفع باستخدام بطاقة الإئتمان, Mada, Visa, MasterCard</p>
                            </label>
                        </div>

                        <div class="form-check form-check-reverse pt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1" style="color: #1A1A1AE6;">
                                دفع في المركز
                                <p style="color: #747a79; font-size: 11px; margin-top: 6px; margin-bottom: 0px;">قم بالدفع عند حضورك الى أحد فروع كاتشف</p>
                            </label>
                        </div>
                    </div>

                    <div class="mysr-form"></div>

                    <div class="pay-in-center text-center mb-4 mt-4">
                        <button id="pay-in-center-btn" class="btn btn-primary" style="background-color: #183f9c; color: #fff; font-size: 15px; padding: 8.5px 12px; border-radius: 7px; border: none; cursor: pointer; width: 100%;">تأكيد الطلب</button>
                    </div>
                </div>
            </div>

        </div>


        <footer>
            <div>
                <p>جميع الحقوق محفوظة © 2024 مركز كاشف</p>
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