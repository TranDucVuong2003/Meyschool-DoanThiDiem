<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Nhà truyền thống</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Nhà truyền thống">
    <meta property="og:description" content="">
    <meta property="og:url" content="nha-truyen-thong.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Nhà truyền thống">
    <meta name="twitter:description" content="">

    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
    <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
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
    <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>

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
        .btn-full { text-align: center; line-height: 60px; }
        body.show-admin-bar { margin-top: 0px !important; }

        :root {
            --blue-1: #2354a0;
            --blue-2: #439bd4;
            --blue-3: #4db0e4;
            --blue-soft: #eef7ff;
        }

        .heritage-wrap { background: #f6fbff; }
        .heritage-container { max-width: 1260px; margin: 0 auto; padding: 0 20px; }

        .heritage-hero {
            padding: 130px 0 70px;
            background: linear-gradient(120deg, rgba(35, 84, 160, 0.95) 0%, rgba(67, 155, 212, 0.9) 60%, rgba(77, 176, 228, 0.7) 100%);
            color: #fff;
        }

        .heritage-hero h1 {
            font-family: 'Garamond', serif;
            font-size: 44px;
            margin: 16px 0 18px;
        }

        .heritage-hero p {
            font-size: 16px;
            line-height: 1.8;
            max-width: 620px;
        }

        .heritage-hero .breadcrumb {
            margin: 0 0 16px;
            background: rgba(255, 255, 255, 0.15);
            display: inline-flex;
            padding: 10px 18px;
            border-radius: 999px;
        }

        .heritage-hero .breadcrumb-item a,
        .heritage-hero .breadcrumb-item.active { color: #fff; }

        .heritage-timeline {
            margin-top: 60px;
            border-left: 2px dashed rgba(67, 155, 212, 0.4);
            padding-left: 40px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 40px;
        }

        .timeline-item::before {
            content: "";
            position: absolute;
            left: -50px;
            top: 10px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: var(--blue-2);
            box-shadow: 0 0 0 6px rgba(67, 155, 212, 0.2);
        }

        .timeline-item h4 {
            color: var(--blue-1);
            margin-bottom: 10px;
            font-size: 20px;
        }

        .timeline-item p {
            margin: 0;
            font-size: 15px;
            line-height: 1.8;
            color: #54647f;
        }

        .heritage-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 50px;
        }

        .heritage-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 20px;
        }

        .heritage-cta {
            margin-top: 60px;
            background: #fff;
            border-radius: 22px;
            padding: 30px 35px;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 20px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
        }

        .heritage-cta h3 { color: var(--blue-1); margin-bottom: 10px; }
        .heritage-cta p { margin: 0; color: #53657f; }

        @media (max-width: 1100px) {
            .heritage-cta { grid-template-columns: 1fr; }
            .heritage-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 768px) {
            .heritage-hero h1 { font-size: 34px; }
            .heritage-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content heritage-wrap">
        <section class="heritage-hero">
            <div class="heritage-container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="javascript:;">Cơ sở vật chất</a></li>
                    <li class="breadcrumb-item active">Nhà truyền thống</li>
                </ol>
                <h1>Nhà truyền thống</h1>
                <p>Không gian lưu giữ ký ức và dấu ấn Olympia, nơi các thế hệ học sinh tìm về nguồn cội, hiểu hơn về hành trình phát triển của ngôi trường.</p>
            </div>
        </section>

        <section class="heritage-section">
            <div class="heritage-container">
                <div class="heritage-timeline">
                    <div class="timeline-item">
                        <h4>2005 - Khởi nguồn</h4>
                        <p>Hình thành nền tảng giáo dục tiên phong, xây dựng những giá trị đầu tiên cho cộng đồng Olympia.</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2012 - Lan tỏa</h4>
                        <p>Mở rộng quy mô và mở ra hành trình gắn kết, ghi dấu những thành tựu của học sinh, giáo viên.</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2020 - Bứt phá</h4>
                        <p>Ứng dụng công nghệ, chuyển đổi mô hình học tập và nâng cao trải nghiệm học sinh toàn diện.</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2026 - Tự hào tiếp nối</h4>
                        <p>Nhà truyền thống trở thành điểm kết nối ký ức, nơi nuôi dưỡng tinh thần tự hào Olympia.</p>
                    </div>
                </div>

                <div class="heritage-grid">
                    <img src="storage/banner/tieu-hoc.jpg" alt="Ký ức Olympia">
                    <img src="storage/banner/trung-hoc.jpg" alt="Truyền thống">
                    <img src="olympia/images/0208.jpg" alt="Khoảnh khắc">
                </div>

                <div class="heritage-cta">
                    <div>
                        <h3>Kết nối thế hệ Olympians</h3>
                        <p>Nhà truyền thống là nơi lưu giữ những câu chuyện, khơi gợi niềm tự hào và truyền cảm hứng cho thế hệ học sinh hôm nay.</p>
                    </div>
                    <div style="text-align:right;">
                        <a class="btn-dk" href="dang-ky-tu-van.php" style="width:auto; padding: 0 24px;">Đăng ký tham quan</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

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
