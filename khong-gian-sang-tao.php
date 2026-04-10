<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=5, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Không gian sáng tạo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Không gian sáng tạo">
    <meta property="og:description" content="">
    <meta property="og:url" content="khong-gian-sang-tao.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="twitter:title" content="Không gian sáng tạo">
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

        .creative-wrap { background: #f7fbff; }
        .creative-container { max-width: 1260px; margin: 0 auto; padding: 0 20px; }

        .creative-hero {
            padding: 130px 0 70px;
            background: #fff;
        }

        .creative-hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 50px;
            align-items: center;
        }

        .creative-hero h1 {
            font-family: 'Garamond', serif;
            font-size: 42px;
            margin: 16px 0 18px;
            color: var(--blue-1);
        }

        .creative-hero p {
            font-size: 16px;
            line-height: 1.8;
            color: #40506c;
            max-width: 520px;
        }

        .creative-hero .breadcrumb {
            margin: 0 0 16px;
            background: var(--blue-soft);
            display: inline-flex;
            padding: 10px 18px;
            border-radius: 999px;
        }

        .creative-process {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-top: 30px;
        }

        .creative-step {
            background: #fff;
            border-radius: 18px;
            padding: 20px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(67, 155, 212, 0.14);
        }

        .creative-step span {
            display: inline-flex;
            background: var(--blue-2);
            color: #fff;
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }

        .creative-step h4 {
            color: var(--blue-1);
            font-size: 16px;
            margin-bottom: 8px;
        }

        .creative-step p {
            margin: 0;
            font-size: 13px;
            line-height: 1.7;
            color: #55657f;
        }

        .creative-wall {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 50px;
        }

        .creative-wall img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 22px;
        }

        .creative-highlight {
            margin-top: 60px;
            background: linear-gradient(120deg, var(--blue-1), var(--blue-2));
            color: #fff;
            border-radius: 24px;
            padding: 35px 40px;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 24px;
            align-items: center;
        }

        .creative-highlight h3 { font-size: 26px; margin-bottom: 12px; }
        .creative-highlight p { margin: 0; font-size: 15px; line-height: 1.7; }

        .creative-highlight img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            border-radius: 20px;
        }

        @media (max-width: 1100px) {
            .creative-hero-grid,
            .creative-highlight { grid-template-columns: 1fr; }
            .creative-process { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .creative-wall { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 768px) {
            .creative-hero h1 { font-size: 32px; }
            .creative-process { grid-template-columns: 1fr; }
            .creative-wall { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content creative-wrap">
        <section class="creative-hero">
            <div class="creative-container creative-hero-grid">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Cơ sở vật chất</a></li>
                        <li class="breadcrumb-item active">Không gian sáng tạo</li>
                    </ol>
                    <h1>Không gian sáng tạo Meyschool</h1>
                    <p>Không gian mở để học sinh thử nghiệm, phát triển ý tưởng và hợp tác theo dự án, thúc đẩy tư duy sáng tạo và tinh thần đổi mới.</p>
                </div>
                <div>
                    <img src="storage/banner/tieu-hoc.jpg" alt="Không gian sáng tạo" style="width:100%; height:340px; object-fit:cover; border-radius:24px; box-shadow:0 18px 40px rgba(0,0,0,0.12);">
                </div>
            </div>
            <div class="creative-container">
                <div class="creative-process">
                    <div class="creative-step">
                        <span>Bước 1</span>
                        <h4>Khơi mở ý tưởng</h4>
                        <p>Học sinh bắt đầu từ vấn đề thực tế và hình thành ý tưởng giải quyết.</p>
                    </div>
                    <div class="creative-step">
                        <span>Bước 2</span>
                        <h4>Thiết kế & thử nghiệm</h4>
                        <p>Thực hành mô hình, phác thảo, thử nghiệm và rút kinh nghiệm.</p>
                    </div>
                    <div class="creative-step">
                        <span>Bước 3</span>
                        <h4>Hợp tác & chia sẻ</h4>
                        <p>Làm việc nhóm, phản biện và hoàn thiện dự án cùng bạn bè.</p>
                    </div>
                    <div class="creative-step">
                        <span>Bước 4</span>
                        <h4>Trình bày & lan tỏa</h4>
                        <p>Thuyết trình, triển lãm ý tưởng và kết nối cộng đồng học tập.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="creative-section">
            <div class="creative-container">
                <h3 style="color: var(--blue-1); font-size: 28px; margin-bottom: 20px;">Idea Wall</h3>
                <div class="creative-wall">
                    <img src="olympia/images/0201.jpg" alt="Ý tưởng sáng tạo">
                    <img src="olympia/images/0202.jpg" alt="Làm dự án">
                    <img src="olympia/images/0206.jpg" alt="Thực nghiệm">
                </div>

                <div class="creative-highlight">
                    <div>
                        <h3>Không gian để thử, để sai và để tiến bộ</h3>
                        <p>Học sinh được khuyến khích thử nghiệm đa dạng vật liệu, công cụ và công nghệ để tạo ra sản phẩm học tập thực tế. Đây là nơi ươm mầm tinh thần dám nghĩ dám làm.</p>
                    </div>
                    <img src="storage/banner/trung-hoc.jpg" alt="Không gian dự án">
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
