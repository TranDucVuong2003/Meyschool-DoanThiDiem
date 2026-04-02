<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Thư viện</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Thư viện">
    <meta property="og:description" content="">
    <meta property="og:url" content="thu-vien.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Thư viện">
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

        .library-wrap { background: #f8fbff; }
        .library-container { max-width: 1260px; margin: 0 auto; padding: 0 20px; }

        .library-hero {
            padding: 130px 0 60px;
            background: linear-gradient(120deg, rgba(35, 84, 160, 0.95) 0%, rgba(67, 155, 212, 0.9) 60%, rgba(77, 176, 228, 0.7) 100%);
            color: #fff;
        }

        .library-hero-grid {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 50px;
            align-items: center;
        }

        .library-hero h1 {
            font-family: 'Garamond', serif;
            font-size: 44px;
            margin: 16px 0 18px;
        }

        .library-hero p {
            font-size: 16px;
            line-height: 1.8;
            max-width: 520px;
        }

        .library-hero .breadcrumb {
            margin: 0 0 16px;
            background: rgba(255, 255, 255, 0.15);
            display: inline-flex;
            padding: 10px 18px;
            border-radius: 999px;
        }

        .library-hero .breadcrumb-item a,
        .library-hero .breadcrumb-item.active { color: #fff; }

        .library-hero-frame {
            background: #fff;
            border-radius: 24px;
            padding: 14px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .library-hero-frame img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 18px;
        }

        .library-section { padding: 70px 0; }

        .library-journey {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .library-step {
            background: #fff;
            border-radius: 18px;
            padding: 24px;
            border: 1px solid rgba(67, 155, 212, 0.16);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.08);
        }

        .library-step h4 {
            color: var(--blue-1);
            margin-bottom: 8px;
            font-size: 18px;
        }

        .library-step p {
            margin: 0;
            font-size: 14px;
            line-height: 1.7;
            color: #5a6a84;
        }

        .library-quote {
            margin: 50px 0;
            background: linear-gradient(120deg, var(--blue-1), var(--blue-2));
            padding: 35px 40px;
            border-radius: 22px;
            color: #fff;
        }

        .library-quote h3 {
            font-family: 'Garamond', serif;
            font-size: 26px;
            margin-bottom: 10px;
        }

        .library-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .library-card {
            background: #fff;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }

        .library-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 14px;
            margin-bottom: 14px;
        }

        .library-card h4 {
            font-size: 18px;
            color: var(--blue-1);
            margin-bottom: 8px;
        }

        .library-card p {
            margin: 0;
            font-size: 14px;
            line-height: 1.7;
            color: #5b6a82;
        }

        .library-strip {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 12px;
            margin-top: 30px;
        }

        .library-strip img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: 18px;
        }

        @media (max-width: 1100px) {
            .library-hero-grid,
            .library-journey {
                grid-template-columns: 1fr;
            }
            .library-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .library-strip { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        }

        @media (max-width: 768px) {
            .library-hero h1 { font-size: 34px; }
            .library-grid { grid-template-columns: 1fr; }
            .library-strip { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 520px) {
            .library-strip { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content library-wrap">
        <section class="library-hero">
            <div class="library-container library-hero-grid">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Cơ sở vật chất</a></li>
                        <li class="breadcrumb-item active">Thư viện</li>
                    </ol>
                    <h1>Thư viện Olympus</h1>
                    <p>Không gian đọc mở với hàng ngàn đầu sách, khu đọc yên tĩnh và khu làm việc nhóm, truyền cảm hứng nghiên cứu và nuôi dưỡng văn hóa đọc mỗi ngày.</p>
                </div>
                <div class="library-hero-frame">
                    <img src="storage/banner/ve-chung-toi-web.jpg" alt="Thư viện">
                </div>
            </div>
        </section>

        <section class="library-section">
            <div class="library-container">
                <div class="library-journey">
                    <div class="library-step">
                        <h4>Bắt đầu với niềm yêu thích đọc</h4>
                        <p>Học sinh được dẫn dắt làm quen với sách bằng hoạt động đọc sáng, tủ sách lớp học và các buổi kể chuyện theo chủ đề.</p>
                    </div>
                    <div class="library-step">
                        <h4>Khơi mở tư duy nghiên cứu</h4>
                        <p>Khu tư liệu và kho sách ngoại văn hỗ trợ học sinh luyện kỹ năng tìm kiếm, trích dẫn và viết bài nghiên cứu.</p>
                    </div>
                    <div class="library-step">
                        <h4>Không gian kết nối</h4>
                        <p>Khu làm việc nhóm và phòng đọc đa phương tiện giúp học sinh thảo luận, chia sẻ và cùng tạo dự án học tập.</p>
                    </div>
                    <div class="library-step">
                        <h4>Trải nghiệm cộng đồng đọc</h4>
                        <p>Các CLB sách, workshop kỹ năng đọc và ngày hội sách giúp lan tỏa tinh thần học hỏi lâu dài.</p>
                    </div>
                </div>

                <div class="library-quote">
                    <h3>“Một cuốn sách mở ra, một thế giới bắt đầu.”</h3>
                    <p>Meyschool Đoàn Thị Điểm nuôi dưỡng văn hóa đọc như một nền tảng để học sinh trưởng thành trong tri thức và cảm hứng.</p>
                </div>

                <div class="library-grid">
                    <div class="library-card">
                        <img src="storage/banner/tieu-hoc.jpg" alt="Khu đọc yên tĩnh">
                        <h4>Khu đọc yên tĩnh</h4>
                        <p>Không gian mở, ánh sáng tự nhiên, phù hợp cho việc đọc sách và suy ngẫm cá nhân.</p>
                    </div>
                    <div class="library-card">
                        <img src="storage/banner/trung-hoc.jpg" alt="Khu làm việc nhóm">
                        <h4>Khu làm việc nhóm</h4>
                        <p>Thiết kế linh hoạt để thảo luận, nghiên cứu, làm dự án và trình bày ý tưởng.</p>
                    </div>
                    <div class="library-card">
                        <img src="olympia/images/0208.jpg" alt="Kho sách ngoại văn">
                        <h4>Kho sách ngoại văn</h4>
                        <p>Bộ sưu tập sách quốc tế và tài liệu tham khảo cập nhật liên tục.</p>
                    </div>
                </div>

                <div class="library-strip">
                    <img src="olympia/images/0201.jpg" alt="Góc đọc">
                    <img src="olympia/images/0202.jpg" alt="Tủ sách">
                    <img src="storage/banner/tien-tieu-hoc.jpg" alt="Hoạt động đọc">
                    <img src="storage/banner/pho-thogn.jpg" alt="Không gian mở">
                    <img src="olympia/images/0206.jpg" alt="Kết nối">
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
