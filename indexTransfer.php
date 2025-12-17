<?php get_header() ?>

<body dir="rtl">

    <style>
        body::after {
            box-shadow: none !important;
        }

        * {
            /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
            font-family: "mont-light";
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .whatsapp-redirect-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            padding: 30px 20px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .whatsapp-button {
            display: flex;
            align-items: center;
            gap: 15px;
            background: #25D366;
            color: white;
            text-decoration: none;
            padding: 22px 45px;
            border-radius: 50px;
            font-size: 24px;
            font-weight: bold;
            margin: 35px 0;
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .whatsapp-button:hover {
            background: linear-gradient(45deg, #1da851, #0d7c6e);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.5);
        }

        .whatsapp-icon {
            font-size: 30px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .redirect-message {
            font-size: 20px;
            color: #555;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .countdown {
            font-size: 18px;
            color: #666;
            margin-top: 25px;
            background: #f8f9fa;
            padding: 10px 25px;
            border-radius: 25px;
            border: 1px solid #e0e0e0;
        }

        .manual-link {
            font-size: 16px;
            color: #666;
            margin-top: 25px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        .manual-link a {
            color: #25D366;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .manual-link a:hover {
            background: #25D366;
            color: white;
            text-decoration: none;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #25D366, #128C7E);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 32px;
            margin-bottom: 15px;
            text-align: center;
        }

        .arabic-text {
            direction: rtl;
            text-align: right;
        }

        @media (max-width: 768px) {
            .whatsapp-button {
                padding: 18px 35px;
                font-size: 18px;
                width: 90%;
                justify-content: center;
            }

            h1 {
                font-size: 26px;
            }

            .redirect-message {
                font-size: 18px;
            }
        }
    </style>

    <div class="whatsapp-redirect-container arabic-text">

        <h1>جاري التوجيه إلى واتساب...</h1>

        <p class="redirect-message">سيتم تحويلك تلقائياً إلى واتساب خلال ثوانٍ</p>

        <!-- WhatsApp Button -->
        <a dir="ltr" href="https://wa.me/966548682102" class="whatsapp-button">
            <span class="whatsapp-icon">💬</span>
            <span>الدردشة على واتساب</span>
        </a>

        <p class="countdown" id="countdown">جاري التوجيه خلال 5 ثواني...</p>

        <p class="manual-link">إذا لم يتم تحويلك تلقائياً، <a href="https://wa.me/966548682102">انقر هنا</a></p>

        <div style="margin-top: 30px; font-size: 14px; color: #888;">
            <p>رقم الواتساب: <span dir="ltr">+966 54 868 2102</span></p>
        </div>
    </div>

    <script>
        // Countdown timer in Arabic
        let seconds = 5;
        const countdownElement = document.getElementById('countdown');

        function getArabicNumber(num) {
            const arabicNumbers = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
            return num.toString().split('').map(digit => arabicNumbers[digit]).join('');
        }

        function updateCountdownText() {
            const arabicSeconds = getArabicNumber(seconds);
            let text = '';

            if (seconds > 1) {
                text = `جاري التوجيه خلال ${arabicSeconds} ثواني...`;
            } else if (seconds === 1) {
                text = `جاري التوجيه خلال ثانية واحدة...`;
            } else {
                text = `جاري التوجيه الآن...`;
            }

            countdownElement.textContent = text;
        }

        // Initial update
        updateCountdownText();

        const countdownInterval = setInterval(function() {
            seconds--;
            updateCountdownText();

            if (seconds <= 0) {
                clearInterval(countdownInterval);
            }
        }, 1000);

        // Auto-redirect after 5 seconds
        const redirectTimeout = setTimeout(function() {
            window.location.href = "https://wa.me/966548682102";
        }, 5000);

        // Store timeout for potential clearing
        window.redirectTimeout = redirectTimeout;

        // Immediate redirect on button click
        document.querySelector('.whatsapp-button').addEventListener('click', function(e) {
            // Optional: You can remove the setTimeout if user clicks manually
            clearTimeout(window.redirectTimeout);
            clearInterval(countdownInterval);

            // Update countdown text
            countdownElement.textContent = "جاري التوجيه الآن...";
            countdownElement.style.color = "#25D366";
            countdownElement.style.fontWeight = "bold";

            // Optional: Add a small delay for visual feedback
            setTimeout(() => {
                window.location.href = "https://wa.me/966548682102";
            }, 300);
        });

        // Also handle the manual link
        document.querySelector('.manual-link a').addEventListener('click', function(e) {
            clearTimeout(window.redirectTimeout);
            clearInterval(countdownInterval);

            // Update countdown text
            countdownElement.textContent = "جاري التوجيه الآن...";
            countdownElement.style.color = "#25D366";
            countdownElement.style.fontWeight = "bold";
        });
    </script>

    <?php get_footer() ?>