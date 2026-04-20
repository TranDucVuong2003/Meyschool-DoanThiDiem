<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Khu thể thao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Khu thể thao">
    <meta property="og:description" content="">
    <meta property="og:url" content="khu-the-thao.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="twitter:title" content="Khu thể thao">
    <meta name="twitter:description" content="">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="olympia/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="olympia/css/reset.css">
    <link rel="stylesheet" href="olympia/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="olympia/css/fonts.css">
    <link rel="stylesheet" href="olympia/css/style.css">
    <link rel="stylesheet" href="olympia/css/styles-new.css">
    <link type="image/x-icon" href="#" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="olympia/css/slick.css">
    <link rel="stylesheet" type="text/css" href="olympia/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="olympia/css/jquery.toast.min.css">
    <script type="text/javascript" src="olympia/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="olympia/js/swiper-bundle.min.js"></script>
    <script src="olympia/js/slick.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="alternate" href="en.html" hreflang="en" />
    <style>
        nav#admin_bar { display: none; }
        .jq-toast-wrap {
            display: block;
            position: fixed;
            width: 250px;
            pointer-events: none !important;
            letter-spacing: normal;
            z-index: 9000999999999 !important;
        }
        .btn-dk {
            width: 210px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background-color: #2354a0;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            border: none;
            color: #fff;
            display: inline-block;
            margin-top: 20px;
            border-radius: 10px;
        }
        .btn-full {
            text-align: center;
            line-height: 60px;
        }
        body.show-admin-bar { margin-top: 0px !important; }

        :root {
            --blue-1: #2354a0;
            --blue-2: #439bd4;
            --blue-3: #4db0e4;
            --blue-soft: #eef7ff;
        }

        .sport-wrap {
            background: #f7fbff;
        }

        .sport-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .sport-hero {
            position: relative;
            padding: 140px 0 90px;
            color: #fff;
            background: linear-gradient(120deg, rgba(35, 84, 160, 0.95) 0%, rgba(67, 155, 212, 0.9) 55%, rgba(77, 176, 228, 0.65) 100%);
            overflow: hidden;
        }

        .sport-hero::after {
            content: "";
            position: absolute;
            right: -120px;
            bottom: -140px;
            width: 340px;
            height: 340px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
        }

        .sport-hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 60px;
            align-items: center;
        }

        .sport-hero h1 {
            font-family: 'Garamond', serif;
            font-size: 46px;
            margin: 16px 0 18px;
        }

        .sport-hero p {
            font-size: 16px;
            line-height: 1.8;
            max-width: 520px;
        }

        .sport-hero .breadcrumb {
            margin: 0 0 18px;
            background: rgba(255, 255, 255, 0.15);
            display: inline-flex;
            padding: 10px 18px;
            border-radius: 999px;
        }

        .sport-hero .breadcrumb-item a,
        .sport-hero .breadcrumb-item.active {
            color: #fff;
        }

        .sport-collage {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            grid-auto-rows: 160px;
            gap: 16px;
        }

        .sport-collage img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 16px 28px rgba(0, 0, 0, 0.18);
        }

        .sport-band {
            background: #ffffff;
            margin-top: -40px;
            border-radius: 22px;
            padding: 30px 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .sport-band h3 {
            margin: 0 0 6px;
            font-size: 26px;
            color: var(--blue-1);
        }

        .sport-band p {
            margin: 0;
            font-size: 13px;
            color: #4e5e78;
        }

        .sport-section {
            padding: 70px 0;
        }

        .sport-zigzag {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-bottom: 50px;
        }

        .sport-zigzag img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 22px;
        }

        .sport-zigzag h3 {
            color: var(--blue-1);
            font-size: 28px;
            margin-bottom: 16px;
        }

        .sport-zigzag p {
            font-size: 15px;
            line-height: 1.8;
            color: #4e5e78;
        }

        .sport-gallery {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            gap: 14px;
        }

        .sport-gallery img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 18px;
        }

        .sport-gallery .wide {
            grid-column: span 2;
        }

        .sport-cta {
            margin-top: 60px;
            background: linear-gradient(120deg, var(--blue-1), var(--blue-2));
            border-radius: 22px;
            padding: 35px 40px;
            color: #fff;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 20px;
            align-items: center;
        }

        .sport-cta h3 {
            margin: 0 0 10px;
            font-size: 26px;
        }

        .sport-cta p {
            margin: 0;
            font-size: 15px;
            line-height: 1.7;
        }

        .sport-cta .cta-actions { text-align: right; }

        @media (max-width: 1100px) {
            .sport-hero-grid,
            .sport-zigzag,
            .sport-cta {
                grid-template-columns: 1fr;
            }
            .sport-band { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .sport-gallery { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .sport-cta .cta-actions { text-align: left; }
        }

        @media (max-width: 768px) {
            .sport-hero h1 { font-size: 34px; }
            .sport-band { grid-template-columns: 1fr; }
            .sport-gallery { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 520px) {
            .sport-gallery { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content sport-wrap">
        <section class="sport-hero">
            <div class="sport-container sport-hero-grid">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Cơ sở vật chất</a></li>
                        <li class="breadcrumb-item active">Khu thể thao</li>
                    </ol>
                    <h1>Khu thể thao đa năng</h1>
                    <p>Không gian vận động được thiết kế để học sinh rèn luyện thể lực mỗi ngày, phát triển sức bền, sự linh hoạt và tinh thần đồng đội trong môi trường an toàn.</p>
                </div>
                <div class="sport-collage">
                    <img class="wide" src="olympia/images/0201.jpg" alt="Sân thể thao">
                    <img src="olympia/images/0202.jpg" alt="Sân bóng rổ">
                    <img src="olympia/images/0206.jpg" alt="Bể bơi">
                </div>
            </div>
        </section>

        <section class="sport-section">
            <div class="sport-container">
                <div class="sport-band">
                    <div>
                        <h3>6+</h3>
                        <p>Khu vận động chuyên biệt</p>
                    </div>
                    <div>
                        <h3>10K m²</h3>
                        <p>Không gian ngoài trời</p>
                    </div>
                    <div>
                        <h3>12</h3>
                        <p>Câu lạc bộ thể thao</p>
                    </div>
                    <div>
                        <h3>24/7</h3>
                        <p>Đảm bảo an toàn & vận hành</p>
                    </div>
                </div>

                <div class="sport-zigzag" style="margin-top: 50px;">
                    <img src="storage/banner/trung-hoc.jpg" alt="Hoạt động thể thao">
                    <div>
                        <h3>Nhịp sống năng động mỗi ngày</h3>
                        <p>Chương trình thể chất tích hợp cùng hoạt động ngoại khóa giúp học sinh duy trì thói quen vận động, đồng thời phát triển kỹ năng phối hợp, tinh thần thi đấu lành mạnh.</p>
                        <p>Các khu vực tập luyện được bảo trì thường xuyên, có giáo viên hướng dẫn và đội ngũ y tế hỗ trợ.</p>
                    </div>
                </div>

                <div class="sport-zigzag">
                    <div>
                        <h3>Không gian vận động đa dạng</h3>
                        <p>Sân bóng đá, bóng rổ, cầu lông và phòng gym đều được trang bị tiêu chuẩn an toàn, ánh sáng và bề mặt phù hợp với từng cấp học.</p>
                        <p>Học sinh được khuyến khích lựa chọn bộ môn phù hợp để phát triển thể lực toàn diện.</p>
                    </div>
                    <img src="storage/banner/tieu-hoc.jpg" alt="Không gian vận động">
                </div>

                <h3 style="color: var(--blue-1); font-size: 28px; margin: 40px 0 20px;">Khoảnh khắc tại khu thể thao</h3>
                <div class="sport-gallery">
                    <img class="wide" src="olympia/images/0208.jpg" alt="Hoạt động">
                    <img src="storage/banner/tien-tieu-hoc.jpg" alt="CLB thể thao">
                    <img src="olympia/images/0202.jpg" alt="Sân bóng">
                    <img class="wide" src="olympia/images/0206.jpg" alt="Bể bơi">
                    <img src="olympia/images/0201.jpg" alt="Vận động">
                    <img src="storage/banner/trung-hoc.jpg" alt="Trải nghiệm">
                </div>

                <div class="sport-cta">
                    <div>
                        <h3>Gia nhập các CLB thể thao Olympia</h3>
                        <p>Khám phá môi trường vận động tích cực, nơi học sinh nâng cao thể lực và bản lĩnh qua từng hoạt động.</p>
                    </div>
                    <div class="cta-actions">
                        <a class="facility-btn ghost" href="dang-ky-tu-van.php" style="border-color:#fff;color:#fff;">Đăng ký tham quan</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

    <script type="text/javascript" src="olympia/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="olympia/js/toastr.min.js"></script>
    <script type="text/javascript" src="olympia/js/moment.min.js"></script>
    <script type="text/javascript" src="olympia/js/moment-timezone.min.js"></script>
    <script type="text/javascript" src="olympia/js/bootstrap-datetimepicker.min.js"></script>
    <script src="olympia/js/slick.js"></script>
    <script type="text/javascript" src="olympia/js/script.js"></script>
    <script type="text/javascript" src="olympia/js/main.js"></script>
</body>
</html>
