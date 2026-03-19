<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Chân dung học sinh Meyschool</title>
    <meta name="description" content="Chân dung học sinh tại Meyschool - Những công dân toàn cầu tương lai">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Chân dung học sinh Meyschool">
    <meta property="og:description" content="Chân dung học sinh tại Meyschool - Những công dân toàn cầu tương lai">
    <meta property="og:url" content="chan-dung-hoc-sinh.html">
    <meta property="og:type" content="article">
    <meta name="twitter:title" content="Chân dung học sinh Meyschool">
    <meta name="twitter:description" content="Chân dung học sinh tại Meyschool - Những công dân toàn cầu tương lai">

    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">

    <link rel="alternate" href="en/student-profile.html" hreflang="en" />
    <link rel="alternate" href="chan-dung-hoc-sinh.html" hreflang="vi" />

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
        nav#admin_bar {
            display: none;
        }

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
            background-color: #1e6f8c;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            border: none;
            color: #fff;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-full {
            text-align: center;
            line-height: 60px;
        }

        body.show-admin-bar {
            margin-top: 0px !important;
        }

        /* Student Portraits - Masonry Gallery Design */
        .student-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero with Gallery Grid */
        .student-hero {
            position: relative;
            min-height: 500px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #1a0a2e 0%, #1e6f8c 50%, #7b2cbf 100%);
        }

        .student-hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 60%;
            height: 100%;
            background: linear-gradient(90deg, transparent 0%, rgba(255, 255, 255, 0.05) 100%);
        }

        .student-hero-content {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 60px 40px;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 50px;
            align-items: center;
        }

        .student-hero-text h1 {
            font-family: 'Garamond', serif;
            font-size: 48px;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .student-hero-text p {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.7;
        }

        .student-hero-badge {
            display: inline-block;
            background: #f1cc1f;
            color: #1e6f8c;
            padding: 10px 25px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        /* Masonry Hero Gallery */
        .student-hero-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 15px;
        }

        .student-hero-gallery-item {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .student-hero-gallery-item:nth-child(1) {
            grid-row: span 2;
        }

        .student-hero-gallery-item:nth-child(3) {
            grid-column: span 1;
            grid-row: span 2;
        }

        .student-hero-gallery-item img {
            width: 100%;
            height: 100%;
            min-height: 120px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .student-hero-gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Main Layout */
        .student-main-layout {
            display: grid;
            grid-template-columns: 280px 1fr 300px;
            gap: 35px;
            padding: 50px 0;
        }

        /* Left Sidebar */
        .student-sidebar-left {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .student-nav-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 30px rgba(71, 24, 115, 0.1);
            margin-bottom: 25px;
        }

        .student-nav-card h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e6f8c;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #f1cc1f;
        }

        .student-nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .student-nav-menu li {
            margin-bottom: 12px;
        }

        .student-nav-link {
            display: flex;
            align-items: center;
            padding: 12px;
            color: #555;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 13px;
            font-weight: 500;
            background: #f8f7fa;
        }

        .student-nav-link:hover,
        .student-nav-link.active {
            background: linear-gradient(135deg, #1e6f8c 0%, #5a2a8a 100%);
            color: #fff;
            transform: translateX(8px);
            box-shadow: 0 4px 15px rgba(71, 24, 115, 0.3);
        }

        .student-nav-thumb {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            overflow: hidden;
            margin-right: 12px;
            flex-shrink: 0;
            border: 2px solid #f1cc1f;
        }

        .student-nav-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Quick Stats */
        .student-quick-stats {
            background: linear-gradient(135deg, #1e6f8c 0%, #6a1b9a 100%);
            border-radius: 20px;
            padding: 25px;
            color: #fff;
        }

        .student-quick-stats h5 {
            font-family: 'Garamond', serif;
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
            color: #f1cc1f;
        }

        .quick-stat-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 13px;
        }

        .quick-stat-row:last-child {
            border-bottom: none;
        }

        .quick-stat-value {
            font-weight: 700;
            color: #f1cc1f;
        }

        /* Center Content - Enhanced Testimonials */
        .student-content-center {
            background: #fff;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 8px 40px rgba(71, 24, 115, 0.08);
        }

        /* Enhanced Testimonials */
        .testimonials-section {
            margin-bottom: 50px;
        }

        .testimonials-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .testimonials-header h3 {
            font-family: 'Garamond', serif;
            font-size: 32px;
            color: #1e6f8c;
            margin-bottom: 15px;
        }

        .testimonials-header p {
            font-size: 16px;
            color: #666;
        }

        .testimonial-cards {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .testimonial-card-enhanced {
            display: grid;
            grid-template-columns: 180px 1fr;
            gap: 30px;
            background: linear-gradient(135deg, #faf9fb 0%, #f5f3f7 100%);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid #f0eef2;
            transition: all 0.4s ease;
        }

        .testimonial-card-enhanced:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(71, 24, 115, 0.15);
        }

        .testimonial-card-image {
            border-radius: 16px;
            overflow: hidden;
            height: 180px;
        }

        .testimonial-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .testimonial-card-enhanced:hover .testimonial-card-image img {
            transform: scale(1.1);
        }

        .testimonial-card-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .testimonial-quote-mark {
            font-size: 48px;
            color: #f1cc1f;
            line-height: 1;
            margin-bottom: 10px;
            font-family: Georgia, serif;
        }

        .testimonial-quote-text {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
            font-style: italic;
        }

        .testimonial-card-info h4 {
            font-family: 'Garamond', serif;
            font-size: 20px;
            color: #1e6f8c;
            margin-bottom: 5px;
        }

        .testimonial-card-detail {
            font-size: 13px;
            color: #888;
            line-height: 1.6;
        }

        .testimonial-achievement-badge {
            display: inline-block;
            background: #f1cc1f;
            color: #1e6f8c;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 600;
            margin-top: 10px;
        }

        /* Qualities Section - Image Cards */
        .qualities-new-section {
            margin-bottom: 50px;
        }

        .qualities-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 2px solid #f0eef2;
        }

        .qualities-header h2 {
            font-family: 'Garamond', serif;
            font-size: 32px;
            color: #1e6f8c;
            margin-bottom: 15px;
        }

        .qualities-header p {
            font-size: 16px;
            color: #666;
            line-height: 1.8;
            max-width: 700px;
            margin: 0 auto;
        }

        .qualities-masonry {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .quality-card-new {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 1px solid #f0eef2;
        }

        .quality-card-new:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(71, 24, 115, 0.2);
        }

        .quality-card-new.featured {
            grid-row: span 2;
        }

        .quality-card-image {
            height: 160px;
            overflow: hidden;
        }

        .quality-card-new.featured .quality-card-image {
            height: 240px;
        }

        .quality-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .quality-card-new:hover .quality-card-image img {
            transform: scale(1.1);
        }

        .quality-card-content {
            padding: 25px;
        }

        .quality-card-content h3 {
            font-family: 'Garamond', serif;
            font-size: 22px;
            color: #1e6f8c;
            margin-bottom: 8px;
        }

        .quality-en {
            font-size: 12px;
            color: #f1cc1f;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }

        .quality-desc {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        /* Achievements Bar */
        .achievements-bar {
            background: linear-gradient(135deg, #1e6f8c 0%, #6a1b9a 100%);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            color: #fff;
        }

        .achievements-bar h4 {
            font-family: 'Garamond', serif;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .achievements-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .achievement-stat-box {
            padding: 20px;
        }

        .achievement-stat-number {
            font-family: 'Garamond', serif;
            font-size: 36px;
            font-weight: 700;
            color: #f1cc1f;
            margin-bottom: 8px;
        }

        .achievement-stat-label {
            font-size: 13px;
            opacity: 0.9;
        }

        /* Right Sidebar */
        .student-sidebar-right {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .student-cta-card {
            background: linear-gradient(135deg, #f1cc1f 0%, #e5b81a 100%);
            border-radius: 20px;
            padding: 30px 25px;
            text-align: center;
            margin-bottom: 25px;
        }

        .student-cta-card h5 {
            font-family: 'Garamond', serif;
            font-size: 22px;
            color: #1e6f8c;
            margin-bottom: 15px;
        }

        .student-cta-card p {
            font-size: 14px;
            color: #1e6f8c;
            margin-bottom: 20px;
            line-height: 1.6;
            opacity: 0.9;
        }

        .student-cta-btn {
            display: inline-block;
            background: #1e6f8c;
            color: #fff;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .student-cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(71, 24, 115, 0.4);
        }

        .student-gallery-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 30px rgba(71, 24, 115, 0.1);
        }

        .student-gallery-card h5 {
            font-family: 'Garamond', serif;
            font-size: 16px;
            color: #1e6f8c;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #f1cc1f;
        }

        .student-gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .student-gallery-item {
            border-radius: 12px;
            overflow: hidden;
            aspect-ratio: 1;
        }

        .student-gallery-item.featured {
            grid-column: span 2;
            aspect-ratio: 16/9;
        }

        .student-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .student-gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .student-main-layout {
                grid-template-columns: 240px 1fr 240px;
                gap: 25px;
            }
        }

        @media (max-width: 991px) {
            .student-hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                padding: 40px 20px;
            }

            .student-hero-text h1 {
                font-size: 36px;
            }

            .student-hero-gallery {
                max-width: 500px;
                margin: 0 auto;
            }

            .student-main-layout {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .student-sidebar-left,
            .student-sidebar-right {
                position: static;
            }

            .testimonial-card-enhanced {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .testimonial-card-image {
                height: 200px;
                max-width: 200px;
                margin: 0 auto;
            }

            .qualities-masonry {
                grid-template-columns: 1fr;
            }

            .quality-card-new.featured {
                grid-row: span 1;
            }

            .quality-card-new.featured .quality-card-image {
                height: 160px;
            }

            .achievements-stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .student-gallery-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .student-gallery-item.featured {
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .student-hero {
                min-height: 400px;
            }

            .student-hero-text h1 {
                font-size: 28px;
            }

            .student-content-center {
                padding: 25px 20px;
            }

            .testimonial-card-image {
                height: 160px;
            }

            .achievements-stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .achievement-stat-number {
                font-size: 28px;
            }

            .student-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content">
        <!-- Hero Section -->
        <section class="student-hero">
            <div class="student-hero-content student-container">
                <div class="student-hero-text">
                    <span class="student-hero-badge">Về chúng tôi</span>
                    <h1>Chân dung học sinh</h1>
                    <p>"Công dân toàn cầu tương lai - Những phẩm chất và kỹ năng của học sinh Meyschool trong thế kỷ 21"</p>
                </div>
                <div class="student-hero-gallery">
                    <div class="student-hero-gallery-item">
                        <img src="storage/banner/tieu-hoc.jpg" alt="Học sinh Meyschool">
                    </div>
                    <div class="student-hero-gallery-item">
                        <img src="storage/banner/trung-hoc.jpg" alt="Học sinh Meyschool">
                    </div>
                    <div class="student-hero-gallery-item">
                        <img src="storage/banner/ve-chung-toi-web.jpg" alt="Học sinh Meyschool">
                    </div>
                    <div class="student-hero-gallery-item">
                        <img src="olympia/images/0201.jpg" alt="Học sinh Meyschool">
                    </div>
                    <div class="student-hero-gallery-item">
                        <img src="olympia/images/0208.jpg" alt="Học sinh Meyschool">
                    </div>
                </div>
            </div>
        </section>

        <!-- Breadcrumb -->
        <div class="student-container" style="padding-top: 20px;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="ve-chung-toi.php">Về chúng tôi</a></li>
                <li class="breadcrumb-item active">Chân dung học sinh</li>
            </ol>
        </div>

        <!-- Main Layout -->
        <div class="student-container">
            <div class="student-main-layout">
                <!-- Left Sidebar -->
                <aside class="student-sidebar-left">
                    <div class="student-nav-card">
                        <h4>Khám phá thêm</h4>
                        <ul class="student-nav-menu">
                            <li>
                                <a href="thong-diep-nguoi-sang-lap.php" class="student-nav-link">
                                    <span class="student-nav-thumb">
                                        <img src="storage/doi-ngu-olym/nguyen-thi-thu-thao.png" alt="">
                                    </span>
                                    Thông điệp Nhà sáng lập
                                </a>
                            </li>
                            <li>
                                <a href="tam-nhin-su-menh.php" class="student-nav-link">
                                    <span class="student-nav-thumb">
                                        <img src="storage/banner/ve-chung-toi-web.jpg" alt="">
                                    </span>
                                    Tầm nhìn - Sứ mệnh
                                </a>
                            </li>
                            <li>
                                <a href="ban-lanh-dao.php" class="student-nav-link">
                                    <span class="student-nav-thumb">
                                        <img src="storage/doi-ngu-olym/dang-thu-huong-2.jpg" alt="">
                                    </span>
                                    Ban lãnh đạo
                                </a>
                            </li>
                            <li>
                                <a href="doi-ngu-giao-vien.php" class="student-nav-link">
                                    <span class="student-nav-thumb">
                                        <img src="storage/doi-ngu-olym/nguyen-hanh-chi-ucc.png" alt="">
                                    </span>
                                    Đội ngũ giáo viên
                                </a>
                            </li>
                            <li>
                                <a href="chan-dung-hoc-sinh.php" class="student-nav-link active">
                                    <span class="student-nav-thumb">
                                        <img src="storage/banner/trung-hoc.jpg" alt="">
                                    </span>
                                    Chân dung học sinh
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="student-quick-stats">
                        <h5>Thống kê học sinh</h5>
                        <div class="quick-stat-row">
                            <span>Tổng số học sinh</span>
                            <span class="quick-stat-value">2000+</span>
                        </div>
                        <div class="quick-stat-row">
                            <span>Học sinh giỏi cấp Thành</span>
                            <span class="quick-stat-value">100+</span>
                        </div>
                        <div class="quick-stat-row">
                            <span>Giải thi đấu Quốc gia</span>
                            <span class="quick-stat-value">50+</span>
                        </div>
                        <div class="quick-stat-row">
                            <span>Học bổng Quốc tế</span>
                            <span class="quick-stat-value">30+</span>
                        </div>
                    </div>
                </aside>

                <!-- Center Content -->
                <div class="student-content-center">
                    <!-- Testimonials Section -->
                    <div class="testimonials-section">
                        <div class="testimonials-header">
                            <h3 class="font-garamond-bold">Học sinh tiêu biểu</h3>
                            <p>Những câu chuyện truyền cảm hứng từ học sinh Meyschool</p>
                        </div>
                        <div class="testimonial-cards">
                            <div class="testimonial-card-enhanced">
                                <div class="testimonial-card-image">
                                    <img src="storage/doi-ngu-olym/nguyen-thi-thu-thao.png" alt="Nguyễn Thị Anh Thư">
                                </div>
                                <div class="testimonial-card-content">
                                    <span class="testimonial-quote-mark">"</span>
                                    <p class="testimonial-quote-text">Tôi rất tự hào khi được học tại Meyschool. Trường đã giúp tôi phát hiện và phát triển niềm đam mê Toán học. Huy chương Vàng Olympic Toán Quốc tế và học bổng Stanford là những thành quả từ sự đồng hành của thầy cô.</p>
                                    <div class="testimonial-card-info">
                                        <h4>Nguyễn Thị Anh Thư</h4>
                                        <p class="testimonial-card-detail">Lớp 12 - Chuyên Toán</p>
                                        <span class="testimonial-achievement-badge">Huy chương Vàng Olympic Toán 2024 - Thủ khoa Stanford</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-card-enhanced">
                                <div class="testimonial-card-image">
                                    <img src="storage/doi-ngu-olym/tran-quoc-dan-2.png" alt="Trần Minh Khôi">
                                </div>
                                <div class="testimonial-card-content">
                                    <span class="testimonial-quote-mark">"</span>
                                    <p class="testimonial-quote-text">Meyschool đã cho tôi cơ hội thực hiện đam mê nghiên cứu khoa học. Dự án 'Hệ thống lọc nước biển' của tôi được đề cử giải thưởng quốc tế nhờ sự hướng dẫn tận tâm của thầy cô.</p>
                                    <div class="testimonial-card-info">
                                        <h4>Trần Minh Khôi</h4>
                                        <p class="testimonial-card-detail">Lớp 11 - Chuyên Lý</p>
                                        <span class="testimonial-achievement-badge">Giải Nhất Khoa học Kỹ thuật Quốc gia</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-card-enhanced">
                                <div class="testimonial-card-image">
                                    <img src="storage/doi-ngu-olym/do-thi-bao-linh-2.jpg" alt="Lê Ngọc Bảo An">
                                </div>
                                <div class="testimonial-card-content">
                                    <span class="testimonial-quote-mark">"</span>
                                    <p class="testimonial-quote-text">Nhờ môi trường song ngữ tại Meyschool, tôi tự tin giao tiếp và đại diện cho thanh niên Việt Nam tại hội nghị ASEAN. Đây là trải nghiệm quý giá mà tôi không thể có ở nơi khác.</p>
                                    <div class="testimonial-card-info">
                                        <h4>Lê Ngọc Bảo An</h4>
                                        <p class="testimonial-card-detail">Lớp 10 - Song ngữ</p>
                                        <span class="testimonial-achievement-badge">Giải Nhất Hùng biện tiếng Anh toàn quốc - Đại sứ văn hóa ASEAN</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-card-enhanced">
                                <div class="testimonial-card-image">
                                    <img src="storage/doi-ngu-olym/hoang-diep-trinh-2.png" alt="Phạm Quang Vinh">
                                </div>
                                <div class="testimonial-card-content">
                                    <span class="testimonial-quote-mark">"</span>
                                    <p class="testimonial-quote-text">Meyschool không chỉ dạy tôi kiến thức mà còn dạy cách tư duy khoa học. 3 bài báo quốc tế và Huy chương Bạc Olympic Hóa học Châu Á là minh chứng cho phương pháp giáo dục xuất sắc tại đây.</p>
                                    <div class="testimonial-card-info">
                                        <h4>Phạm Quang Vinh</h4>
                                        <p class="testimonial-card-detail">Lớp 12 - Chuyên Hóa</p>
                                        <span class="testimonial-achievement-badge">Huy chương Bạc Olympic Hóa học Châu Á - Tác giả 3 bài báo quốc tế</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Qualities Section - Masonry Grid -->
                    <div class="qualities-new-section">
                        <div class="qualities-header">
                            <h2 class="font-garamond-bold">Học sinh Meyschool - Công dân toàn cầu tương lai</h2>
                            <p>Tại Meyschool, chúng tôi không chỉ đào tạo học sinh giỏi về kiến thức mà còn chú trọng phát triển toàn diện các phẩm chất và năng lực cần thiết để trở thành công dân toàn cầu trong thế kỷ 21.</p>
                        </div>
                        <div class="qualities-masonry">
                            <div class="quality-card-new featured">
                                <div class="quality-card-image">
                                    <img src="storage/banner/ve-chung-toi-web.jpg" alt="Tự hào">
                                </div>
                                <div class="quality-card-content">
                                    <h3 class="font-garamond-bold">Tự hào</h3>
                                    <span class="quality-en">Proud Global Citizens</span>
                                    <p class="quality-desc">Tự hào và hành động theo những truyền thống và giá trị tốt đẹp của nền văn hóa, của trường học và của bản thân. Cân bằng giữa truyền thống và hiện đại.</p>
                                </div>
                            </div>

                            <div class="quality-card-new">
                                <div class="quality-card-image">
                                    <img src="olympia/images/0201.jpg" alt="Thấu cảm">
                                </div>
                                <div class="quality-card-content">
                                    <h3 class="font-garamond-bold">Thấu cảm</h3>
                                    <span class="quality-en">Empathetic</span>
                                    <p class="quality-desc">Nỗ lực thấu hiểu, quan tâm đến suy nghĩ, cảm xúc của người khác. Hợp tác trong sự hiểu biết lẫn nhau.</p>
                                </div>
                            </div>

                            <div class="quality-card-new">
                                <div class="quality-card-image">
                                    <img src="olympia/images/0202.jpg" alt="Giao tiếp tôn trọng">
                                </div>
                                <div class="quality-card-content">
                                    <h3 class="font-garamond-bold">Giao tiếp tôn trọng</h3>
                                    <span class="quality-en">Respectful Communicators</span>
                                    <p class="quality-desc">Thể hiện bản thân rõ ràng và tự tin. Giao tiếp và đối xử mọi người với sự tôn trọng và bình đẳng.</p>
                                </div>
                            </div>

                            <div class="quality-card-new">
                                <div class="quality-card-image">
                                    <img src="olympia/images/0206.jpg" alt="Kiên định">
                                </div>
                                <div class="quality-card-content">
                                    <h3 class="font-garamond-bold">Kiên định</h3>
                                    <span class="quality-en">Perseverant</span>
                                    <p class="quality-desc">Đặt ra mục tiêu và nỗ lực bền bỉ để đạt được mục tiêu, dù công việc có thử thách đến đâu đi nữa.</p>
                                </div>
                            </div>

                            <div class="quality-card-new">
                                <div class="quality-card-image">
                                    <img src="storage/banner/tieu-hoc.jpg" alt="Trách nhiệm">
                                </div>
                                <div class="quality-card-content">
                                    <h3 class="font-garamond-bold">Trách nhiệm</h3>
                                    <span class="quality-en">Responsible</span>
                                    <p class="quality-desc">Hoàn thành những việc được giao cho cá nhân và trong đội nhóm, chịu trách nhiệm với kết quả.</p>
                                </div>
                            </div>

                            <div class="quality-card-new featured">
                                <div class="quality-card-image">
                                    <img src="storage/banner/trung-hoc.jpg" alt="Công dân toàn cầu">
                                </div>
                                <div class="quality-card-content">
                                    <h3 class="font-garamond-bold">Công dân toàn cầu</h3>
                                    <span class="quality-en">Global Citizens</span>
                                    <p class="quality-desc">Có kiến thức và kỹ năng để hoạt động hiệu quả trong môi trường quốc tế. Tôn trọng đa dạng văn hóa và đóng góp tích cực cho cộng đồng toàn cầu.</p>
                                </div>
                            </div>

                            <div class="quality-card-new">
                                <div class="quality-card-image">
                                    <img src="olympia/images/noibat_2.jpg" alt="Thích ứng, ham học hỏi">
                                </div>
                                <div class="quality-card-content">
                                    <h3 class="font-garamond-bold">Thích ứng, ham học hỏi</h3>
                                    <span class="quality-en">Agile Inquirers</span>
                                    <p class="quality-desc">Nuôi dưỡng trí tò mò thông qua học hỏi và nghiên cứu. Cởi mở trước cơ hội học tập. Bình tĩnh và lạc quan trước khó khăn.</p>
                                </div>
                            </div>

                            <div class="quality-card-new">
                                <div class="quality-card-image">
                                    <img src="olympia/images/noibat_5.png" alt="Tư duy và sáng tạo">
                                </div>
                                <div class="quality-card-content">
                                    <h3 class="font-garamond-bold">Tư duy và sáng tạo xuất sắc</h3>
                                    <span class="quality-en">Excellent Thinkers & Creators</span>
                                    <p class="quality-desc">Tiếp nhận kiến thức từ nhiều góc nhìn. Tiếp cận vấn đề bằng tư duy phản biện và sáng tạo. Kiến tạo giải pháp cho những vấn đề của cộng đồng.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Achievements Bar -->
                    <div class="achievements-bar">
                        <h4 class="font-garamond-bold">Thành tựu nổi bật của học sinh Meyschool</h4>
                        <div class="achievements-stats">
                            <div class="achievement-stat-box">
                                <div class="achievement-stat-number">95%</div>
                                <div class="achievement-stat-label">Đỗ vào trường TOP</div>
                            </div>
                            <div class="achievement-stat-box">
                                <div class="achievement-stat-number">50+</div>
                                <div class="achievement-stat-label">Giải thi đấu Quốc gia</div>
                            </div>
                            <div class="achievement-stat-box">
                                <div class="achievement-stat-number">100+</div>
                                <div class="achievement-stat-label">Học sinh giỏi cấp Thành</div>
                            </div>
                            <div class="achievement-stat-box">
                                <div class="achievement-stat-number">30+</div>
                                <div class="achievement-stat-label">Học bổng Quốc tế</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <aside class="student-sidebar-right">
                    <div class="student-cta-card">
                        <h5>Trở thành học sinh Meyschool</h5>
                        <p>Đăng ký tư vấn để tìm hiểu thêm về chương trình học và cơ hội nhập học</p>
                        <a href="dang-ky-tu-van.php" class="student-cta-btn">Đăng ký ngay</a>
                    </div>

                    <div class="student-gallery-card">
                        <h5>Khoảnh khắc đáng nhớ</h5>
                        <div class="student-gallery-grid">
                            <div class="student-gallery-item featured">
                                <img src="storage/banner/tieu-hoc.jpg" alt="">
                            </div>
                            <div class="student-gallery-item">
                                <img src="olympia/images/0201.jpg" alt="">
                            </div>
                            <div class="student-gallery-item">
                                <img src="olympia/images/0202.jpg" alt="">
                            </div>
                            <div class="student-gallery-item">
                                <img src="storage/banner/trung-hoc.jpg" alt="">
                            </div>
                            <div class="student-gallery-item">
                                <img src="olympia/images/0208.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
</body>

</html>