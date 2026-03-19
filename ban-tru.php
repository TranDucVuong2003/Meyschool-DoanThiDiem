<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Bán trú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Bán trú">
    <meta property="og:description" content="">
    <meta property="og:url" content="ban-tru.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Bán trú">
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

        .boarding-wrap { background: #f7fbff; }
        .boarding-container { max-width: 1260px; margin: 0 auto; padding: 0 20px; }

        .boarding-hero {
            padding: 130px 0 70px;
            background: #fff;
        }

        .boarding-hero-grid {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 50px;
            align-items: center;
        }

        .boarding-hero h1 {
            font-family: 'Garamond', serif;
            font-size: 42px;
            margin: 16px 0 18px;
            color: var(--blue-1);
        }

        .boarding-hero p {
            font-size: 16px;
            line-height: 1.8;
            color: #40506c;
            max-width: 520px;
        }

        .boarding-hero .breadcrumb {
            margin: 0 0 16px;
            background: var(--blue-soft);
            display: inline-flex;
            padding: 10px 18px;
            border-radius: 999px;
        }

        .boarding-frame {
            background: linear-gradient(120deg, var(--blue-1), var(--blue-2));
            padding: 18px;
            border-radius: 24px;
        }

        .boarding-frame img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 18px;
        }

        .boarding-schedule {
            margin-top: 50px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .schedule-card {
            background: #fff;
            border-radius: 18px;
            padding: 24px;
            border: 1px solid rgba(67, 155, 212, 0.16);
            box-shadow: 0 14px 30px rgba(0,0,0,0.08);
        }

        .schedule-card h4 { color: var(--blue-1); margin-bottom: 10px; }
        .schedule-card p { margin: 0; color: #5b6a82; font-size: 14px; line-height: 1.7; }

        .boarding-strip {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 12px;
            margin-top: 40px;
        }

        .boarding-strip img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 18px;
        }

        @media (max-width: 1100px) {
            .boarding-hero-grid { grid-template-columns: 1fr; }
            .boarding-schedule { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .boarding-strip { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        }

        @media (max-width: 768px) {
            .boarding-hero h1 { font-size: 32px; }
            .boarding-schedule { grid-template-columns: 1fr; }
            .boarding-strip { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 520px) {
            .boarding-strip { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content boarding-wrap">
        <section class="boarding-hero">
            <div class="boarding-container boarding-hero-grid">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Dịch vụ học đường</a></li>
                        <li class="breadcrumb-item active">Bán trú</li>
                    </ol>
                    <h1>Chương trình bán trú</h1>
                    <p>Không gian bán trú an toàn, thoáng mát với lịch sinh hoạt khoa học giúp học sinh nghỉ ngơi và tái tạo năng lượng sau giờ học.</p>
                </div>
                <div class="boarding-frame">
                    <img src="storage/banner/ve-chung-toi-web.jpg" alt="Bán trú">
                </div>
            </div>

            <div class="boarding-container">
                <div class="boarding-schedule">
                    <div class="schedule-card">
                        <h4>Dinh dưỡng cân bằng</h4>
                        <p>Thực đơn được thiết kế theo tiêu chuẩn dinh dưỡng, đa dạng món ăn và phù hợp với từng độ tuổi.</p>
                    </div>
                    <div class="schedule-card">
                        <h4>Giờ nghỉ hợp lý</h4>
                        <p>Khu nghỉ trưa yên tĩnh, sạch sẽ, đảm bảo học sinh ngủ đủ và phục hồi năng lượng.</p>
                    </div>
                    <div class="schedule-card">
                        <h4>Hoạt động chiều</h4>
                        <p>Hoạt động nhẹ nhàng sau giờ học giúp học sinh thư giãn và chuẩn bị cho các câu lạc bộ.</p>
                    </div>
                </div>

                <div class="boarding-strip">
                    <img src="storage/banner/tieu-hoc.jpg" alt="Dinh dưỡng">
                    <img src="olympia/images/0201.jpg" alt="Không gian nghỉ">
                    <img src="olympia/images/0202.jpg" alt="Hoạt động chiều">
                    <img src="storage/banner/trung-hoc.jpg" alt="Bữa ăn">
                    <img src="olympia/images/0206.jpg" alt="Chăm sóc">
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
