<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Xe bus đưa đón</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Xe bus đưa đón">
    <meta property="og:description" content="">
    <meta property="og:url" content="xe-bus-dua-don.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Xe bus đưa đón">
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

        .bus-wrap { background: #f7fbff; }
        .bus-container { max-width: 1260px; margin: 0 auto; padding: 0 20px; }

        .bus-hero {
            padding: 130px 0 70px;
            background: linear-gradient(120deg, rgba(35, 84, 160, 0.95) 0%, rgba(67, 155, 212, 0.9) 60%, rgba(77, 176, 228, 0.7) 100%);
            color: #fff;
        }

        .bus-hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .bus-hero h1 {
            font-family: 'Garamond', serif;
            font-size: 42px;
            margin: 16px 0 18px;
        }

        .bus-hero p {
            font-size: 16px;
            line-height: 1.8;
            max-width: 520px;
        }

        .bus-hero .breadcrumb {
            margin: 0 0 16px;
            background: rgba(255, 255, 255, 0.15);
            display: inline-flex;
            padding: 10px 18px;
            border-radius: 999px;
        }

        .bus-hero .breadcrumb-item a,
        .bus-hero .breadcrumb-item.active { color: #fff; }

        .bus-routes {
            margin-top: 60px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .route-card {
            background: #fff;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 14px 30px rgba(0,0,0,0.08);
            border: 1px solid rgba(67, 155, 212, 0.14);
        }

        .route-card h4 { color: var(--blue-1); margin-bottom: 8px; }
        .route-card p { margin: 0; color: #5b6a82; font-size: 14px; line-height: 1.7; }

        .bus-map {
            margin-top: 50px;
            background: #fff;
            border-radius: 24px;
            padding: 18px;
            box-shadow: 0 16px 40px rgba(0,0,0,0.08);
        }

        .bus-map img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 18px;
        }

        @media (max-width: 1100px) {
            .bus-hero-grid { grid-template-columns: 1fr; }
            .bus-routes { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 768px) {
            .bus-hero h1 { font-size: 32px; }
            .bus-routes { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content bus-wrap">
        <section class="bus-hero">
            <div class="bus-container bus-hero-grid">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Dịch vụ học đường</a></li>
                        <li class="breadcrumb-item active">Xe bus đưa đón</li>
                    </ol>
                    <h1>Xe bus đưa đón an toàn</h1>
                    <p>Hệ thống xe bus hiện đại, tuyến điểm linh hoạt và đội ngũ giám sát giúp học sinh di chuyển an toàn, đúng giờ mỗi ngày.</p>
                </div>
                <div>
                    <img src="storage/banner/ve-chung-toi-web.jpg" alt="Xe bus" style="width:100%;height:320px;object-fit:cover;border-radius:24px;box-shadow:0 18px 40px rgba(0,0,0,0.18);">
                </div>
            </div>

            <div class="bus-container">
                <div class="bus-routes">
                    <div class="route-card">
                        <h4>Tuyến Bắc - Nam</h4>
                        <p>Lộ trình phủ các khu dân cư đông học sinh, thời gian linh hoạt theo khung giờ học.</p>
                    </div>
                    <div class="route-card">
                        <h4>Tuyến Trung tâm</h4>
                        <p>Xe bus đón trả tại các điểm trung tâm, kết nối nhanh tới trường.</p>
                    </div>
                    <div class="route-card">
                        <h4>Tuyến mở rộng</h4>
                        <p>Phục vụ theo đăng ký, đảm bảo nhu cầu di chuyển của học sinh ở khu vực xa.</p>
                    </div>
                </div>

                <div class="bus-map">
                    <img src="storage/banner/trung-hoc.jpg" alt="Bản đồ tuyến xe">
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
