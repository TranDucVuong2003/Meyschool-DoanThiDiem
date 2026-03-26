<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Chương trình Tiểu học</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Chương trình Tiểu học">
    <meta property="og:description" content="">
    <meta property="og:url" content="chuong-trinh-tieu-hoc.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Chương trình Tiểu học">
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
            background-color: #471873;
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

        /* ============================================
           PAGE 2: TIỂU HỌC - WARM & INVITING STYLE
           Màu xanh #1e4a7e + vàng ấm #f59e0b
           ============================================ */
        .th-container {
            background: linear-gradient(180deg, #fefce8 0%, #fffbeb 50%, #fff 100%);
            min-height: 100vh;
        }

        /* Hero with Real Images - Warm Split Design */
        .th-hero {
            position: relative;
            height: 600px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #1e4a7e 0%, #2d6da8 100%);
        }

        .th-hero-bg {
            position: absolute;
            inset: 0;
            background: url('storage/banner/tieu-hoc.jpg') center/cover;
            opacity: 0.4;
        }

        .th-hero-content {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 60px;
            align-items: center;
        }

        .th-hero-text {
            color: #fff;
        }

        .th-hero-badge {
            display: inline-block;
            background: #fbbf24;
            color: #1e4a7e;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .th-hero h1 {
            font-family: 'Garamond', serif;
            font-size: 52px;
            font-weight: 700;
            margin: 0 0 20px 0;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .th-hero p {
            font-size: 20px;
            margin: 0;
            opacity: 0.95;
            font-style: italic;
        }

        .th-hero-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .th-hero-img {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            border: 4px solid rgba(255, 255, 255, 0.3);
            aspect-ratio: 3/4;
        }

        .th-hero-img:first-child {
            transform: translateY(20px);
        }

        .th-hero-img:last-child {
            transform: translateY(-20px);
        }

        .th-hero-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .th-hero-img:hover img {
            transform: scale(1.08);
        }

        /* Main Layout - Wide with Side Content */
        .th-main-layout {
            max-width: 1400px;
            margin: 40px auto 0;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 260px 1fr 260px;
            gap: 35px;
            position: relative;
            z-index: 10;
        }

        /* Left Sidebar - Photo Navigation */
        .th-sidebar-left {
            display: flex;
            flex-direction: column;
            gap: 20px;
            position: sticky;
            top: 90px;
            align-self: start;
            max-height: calc(100vh - 110px);
            overflow-y: auto;
        }

        .th-nav-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px 20px;
            box-shadow: 0 8px 30px rgba(30, 74, 126, 0.1);
        }

        .th-nav-card h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #fef3c7;
        }

        .th-nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .th-nav-item {
            margin-bottom: 10px;
        }

        .th-nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            background: #f8fafc;
            border-radius: 12px;
            color: #1e4a7e;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .th-nav-link:hover,
        .th-nav-link.active {
            background: linear-gradient(135deg, #1e4a7e 0%, #2d6da8 100%);
            color: #fff;
            transform: translateX(5px);
        }

        .th-nav-thumb {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .th-nav-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Info Card with Photo */
        .th-info-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(30, 74, 126, 0.1);
        }

        .th-info-card-img {
            height: 120px;
            overflow: hidden;
        }

        .th-info-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .th-info-card-content {
            padding: 20px;
        }

        .th-info-card-content h5 {
            font-size: 14px;
            color: #1e4a7e;
            margin-bottom: 15px;
        }

        .th-info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .th-info-list li {
            padding: 8px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 13px;
            color: #555;
        }

        .th-info-list li:last-child {
            border-bottom: none;
        }

        .th-info-list strong {
            color: #1e4a7e;
            display: block;
            font-size: 12px;
            margin-bottom: 2px;
        }

        /* Center Content */
        .th-content-center {
            background: #fff;
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 10px 40px rgba(30, 74, 126, 0.08);
        }

        .th-section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .th-section-header h2 {
            font-family: 'Garamond', serif;
            font-size: 38px;
            color: #1e4a7e;
            margin-bottom: 15px;
        }

        .th-section-header p {
            font-size: 16px;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Feature Cards with Images */
        .th-features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin: 40px 0;
        }

        .th-feature-card {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .th-feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(30, 74, 126, 0.15);
        }

        .th-feature-img {
            height: 180px;
            overflow: hidden;
            position: relative;
        }

        .th-feature-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .th-feature-card:hover .th-feature-img img {
            transform: scale(1.1);
        }

        .th-feature-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #fbbf24;
            color: #1e4a7e;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .th-feature-content {
            padding: 25px;
        }

        .th-feature-content h3 {
            font-family: 'Garamond', serif;
            font-size: 24px;
            color: #1e4a7e;
            margin-bottom: 12px;
        }

        .th-feature-content p {
            font-size: 14px;
            color: #555;
            line-height: 1.7;
        }

        .th-highlight {
            background: linear-gradient(120deg, #fef3c7 0%, #fef3c7 100%);
            padding: 2px 8px;
            border-radius: 4px;
            color: #1e4a7e;
            font-weight: 600;
        }

        /* Subject Cards - Image Style */
        .th-subjects-section {
            margin-top: 60px;
        }

        .th-subjects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin: 40px 0;
        }

        .th-subject-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .th-subject-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(30, 74, 126, 0.15);
        }

        .th-subject-img {
            height: 140px;
            overflow: hidden;
        }

        .th-subject-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .th-subject-card:hover .th-subject-img img {
            transform: scale(1.1);
        }

        .th-subject-content {
            padding: 20px;
            text-align: center;
        }

        .th-subject-content h4 {
            font-family: 'Garamond', serif;
            font-size: 20px;
            color: #1e4a7e;
            margin-bottom: 8px;
        }

        .th-subject-content p {
            font-size: 13px;
            color: #666;
            line-height: 1.6;
        }

        /* Gallery Grid */
        .th-gallery-section {
            margin-top: 50px;
        }

        .th-gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .th-gallery-item {
            border-radius: 16px;
            overflow: hidden;
            aspect-ratio: 1;
            position: relative;
        }

        .th-gallery-item:first-child {
            grid-column: span 2;
            grid-row: span 2;
        }

        .th-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .th-gallery-item:hover img {
            transform: scale(1.1);
        }

        .th-gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(30, 74, 126, 0.9), transparent);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .th-gallery-item:hover .th-gallery-overlay {
            opacity: 1;
        }

        .th-gallery-overlay span {
            color: #fff;
            font-weight: 600;
            font-size: 14px;
        }

        /* Right Sidebar */
        .th-sidebar-right {
            display: flex;
            flex-direction: column;
            gap: 20px;
            position: sticky;
            top: 90px;
            align-self: start;
            max-height: calc(100vh - 110px);
            overflow-y: auto;
        }

        .th-event-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .th-event-card-img {
            height: 100px;
            overflow: hidden;
        }

        .th-event-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .th-event-card-content {
            padding: 20px;
        }

        .th-event-card-content h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 15px;
        }

        .th-event-item {
            display: flex;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .th-event-item:last-child {
            border-bottom: none;
        }

        .th-event-date {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #1e4a7e 0%, #3a8bc8 100%);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
            flex-shrink: 0;
        }

        .th-event-date .day {
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
        }

        .th-event-date .month {
            font-size: 10px;
            text-transform: uppercase;
        }

        .th-event-text {
            flex: 1;
        }

        .th-event-text span {
            display: block;
            font-size: 12px;
            color: #3a8bc8;
            margin-bottom: 3px;
        }

        .th-event-text p {
            font-size: 14px;
            color: #444;
            font-weight: 500;
            margin: 0;
        }

        /* CTA Box */
        .th-cta-box {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            border-radius: 24px;
            padding: 30px 20px;
            text-align: center;
            color: #1e4a7e;
        }

        .th-cta-box h4 {
            font-family: 'Garamond', serif;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .th-cta-box p {
            font-size: 13px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .th-cta-btn {
            display: inline-block;
            padding: 12px 28px;
            background: #1e4a7e;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .th-cta-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(30, 74, 126, 0.3);
        }

        /* Photo Card */
        .th-photo-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .th-photo-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .th-photo-card-content {
            padding: 20px;
        }

        .th-photo-card-content h5 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 8px;
        }

        .th-photo-card-content p {
            font-size: 13px;
            color: #666;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .th-main-layout {
                grid-template-columns: 1fr;
                max-width: 900px;
            }

            .th-sidebar-left,
            .th-sidebar-right {
                display: none;
            }

            .th-hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .th-hero-gallery {
                display: none;
            }

            .th-features-grid {
                grid-template-columns: 1fr;
            }

            .th-subjects-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .th-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .th-gallery-item:first-child {
                grid-column: span 1;
                grid-row: span 1;
            }
        }

        @media (max-width: 768px) {
            .th-hero h1 {
                font-size: 32px;
            }

            .th-subjects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content th-container">
        <!-- Hero Section with Images -->
        <section class="th-hero">
            <div class="th-hero-bg"></div>
            <div class="th-hero-content">
                <div class="th-hero-text">
                    <span class="th-hero-badge">Lớp 1-5</span>
                    <h1>Chương trình Tiểu học</h1>
                    <p>"Nền tảng vững chắc cho hành trình học tập"</p>
                </div>
                <div class="th-hero-gallery">
                    <div class="th-hero-img">
                        <img src="olympia/images/about-us-1.jpg" alt="Học sinh tiểu học">
                    </div>
                    <div class="th-hero-img">
                        <img src="storage/banner/tieu-hoc.jpg" alt="Hoạt động tiểu học">
                    </div>
                    <div class="th-hero-img">
                        <img src="olympia/images/about-us-2.jpg" alt="Lớp học tiểu học">
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Layout -->
        <div class="th-main-layout">
            <!-- Left Sidebar with Photos -->
            <aside class="th-sidebar-left">
                <div class="th-nav-card">
                    <h4>Chương trình</h4>
                    <ul class="th-nav-menu">
                        <li class="th-nav-item">
                            <a href="tong-quan-chuong-trinh.php" class="th-nav-link">
                                <span class="th-nav-thumb"><img src="storage/banner/ve-chung-toi-web.jpg" alt=""></span>
                                Tổng quan
                            </a>
                        </li>
                        <li class="th-nav-item">
                            <a href="chuong-trinh-tieu-hoc.php" class="th-nav-link active">
                                <span class="th-nav-thumb"><img src="storage/banner/tieu-hoc.jpg" alt=""></span>
                                Tiểu học
                            </a>
                        </li>
                        <li class="th-nav-item">
                            <a href="chuong-trinh-thcs.php" class="th-nav-link">
                                <span class="th-nav-thumb"><img src="storage/banner/trung-hoc.jpg" alt=""></span>
                                THCS
                            </a>
                        </li>
                        <li class="th-nav-item">
                            <a href="hoat-dong-ngoai-khoa.php" class="th-nav-link">
                                <span class="th-nav-thumb"><img src="olympia/images/noibat_2.jpg" alt=""></span>
                                Ngoại khóa
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="th-info-card">
                    <div class="th-info-card-img">
                        <img src="olympia/images/about-us-3.jpg" alt="Cơ sở vật chất">
                    </div>
                    <div class="th-info-card-content">
                        <h5>Thông tin nhanh</h5>
                        <ul class="th-info-list">
                            <li><strong>Độ tuổi</strong>6-11 tuổi</li>
                            <li><strong>Sĩ số</strong>25-30 học sinh/lớp</li>
                            <li><strong>Thời gian</strong>7:30 - 16:30</li>
                            <li><strong>Bữa ăn</strong>2 bữa chính + phụ</li>
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- Center Content -->
            <div class="th-content-center">
                <div class="th-section-header">
                    <h2>Giới thiệu chương trình</h2>
                    <p>Chương trình Tiểu học được thiết kế vui tươi, sáng tạo, giúp các em yêu thích việc học</p>
                </div>

                <!-- Feature Cards with Images -->
                <div class="th-features-grid">
                    <div class="th-feature-card">
                        <div class="th-feature-img">
                            <img src="olympia/images/about-us-1.jpg" alt="Học qua trải nghiệm">
                            <span class="th-feature-badge">Học qua chơi</span>
                        </div>
                        <div class="th-feature-content">
                            <h3>Học tập qua trải nghiệm</h3>
                            <p>Chúng tôi tin rằng <span class="th-highlight">trẻ em học tốt nhất khi vui chơi</span>. Chương trình được thiết kế với nhiều hoạt động tương tác, giúp các em phát triển toàn diện.</p>
                        </div>
                    </div>
                    <div class="th-feature-card">
                        <div class="th-feature-img">
                            <img src="storage/banner/tieu-hoc.jpg" alt="Nền tảng vững chắc">
                            <span class="th-feature-badge">Phát triển tư duy</span>
                        </div>
                        <div class="th-feature-content">
                            <h3>Nền tảng vững chắc</h3>
                            <p>Chương trình tập trung xây dựng <span class="th-highlight">nền tảng kiến thức vững chắc</span> về ngôn ngữ, toán học, khoa học qua các hoạt động sinh động.</p>
                        </div>
                    </div>
                </div>

                <!-- Subjects Section -->
                <div class="th-subjects-section">
                    <div class="th-section-header">
                        <h2>Môn học chính</h2>
                        <p>Chương trình đa dạng giúp học sinh phát triển toàn diện</p>
                    </div>

                    <div class="th-subjects-grid">
                        <div class="th-subject-card">
                            <div class="th-subject-img">
                                <img src="olympia/images/noibat_3.jpg" alt="Tiếng Việt">
                            </div>
                            <div class="th-subject-content">
                                <h4>Tiếng Việt</h4>
                                <p>Phát triển kỹ năng đọc, viết và giao tiếp</p>
                            </div>
                        </div>
                        <div class="th-subject-card">
                            <div class="th-subject-img">
                                <img src="olympia/images/noibat_5.png" alt="Toán học">
                            </div>
                            <div class="th-subject-content">
                                <h4>Toán học</h4>
                                <p>Tư duy logic qua trò chơi số học</p>
                            </div>
                        </div>
                        <div class="th-subject-card">
                            <div class="th-subject-img">
                                <img src="olympia/images/noibat_1.jpg" alt="Khoa học">
                            </div>
                            <div class="th-subject-content">
                                <h4>Khoa học</h4>
                                <p>Khám phá thế giới tự nhiên thú vị</p>
                            </div>
                        </div>
                        <div class="th-subject-card">
                            <div class="th-subject-img">
                                <img src="olympia/images/noibat_4.jpg" alt="Nghệ thuật">
                            </div>
                            <div class="th-subject-content">
                                <h4>Nghệ thuật</h4>
                                <p>Âm nhạc, hội họa phát triển sáng tạo</p>
                            </div>
                        </div>
                        <div class="th-subject-card">
                            <div class="th-subject-img">
                                <img src="olympia/images/noibat_7.jpg" alt="Tiếng Anh">
                            </div>
                            <div class="th-subject-content">
                                <h4>Tiếng Anh</h4>
                                <p>Giao tiếp tiếng Anh tự nhiên</p>
                            </div>
                        </div>
                        <div class="th-subject-card">
                            <div class="th-subject-img">
                                <img src="olympia/images/noibat_2.jpg" alt="Thể chất">
                            </div>
                            <div class="th-subject-content">
                                <h4>Thể chất</h4>
                                <p>Vận động phát triển toàn diện</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Section -->
                <div class="th-gallery-section">
                    <div class="th-section-header">
                        <h2>Khoảnh khắc tại trường</h2>
                    </div>
                    <div class="th-gallery-grid">
                        <div class="th-gallery-item">
                            <img src="olympia/images/noibat_1.jpg" alt="">
                            <div class="th-gallery-overlay"><span>Hoạt động ngoài trời</span></div>
                        </div>
                        <div class="th-gallery-item">
                            <img src="olympia/images/noibat_2.jpg" alt="">
                            <div class="th-gallery-overlay"><span>Thể thao</span></div>
                        </div>
                        <div class="th-gallery-item">
                            <img src="olympia/images/noibat_3.jpg" alt="">
                            <div class="th-gallery-overlay"><span>Nghệ thuật</span></div>
                        </div>
                        <div class="th-gallery-item">
                            <img src="olympia/images/noibat_4.jpg" alt="">
                            <div class="th-gallery-overlay"><span>Học nhóm</span></div>
                        </div>
                        <div class="th-gallery-item">
                            <img src="olympia/images/noibat_5.png" alt="">
                            <div class="th-gallery-overlay"><span>STEM</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar with Events -->
            <aside class="th-sidebar-right">
                <div class="th-event-card">
                    <div class="th-event-card-img">
                        <img src="olympia/images/noibat_2.jpg" alt="">
                    </div>
                    <div class="th-event-card-content">
                        <h4>Hoạt động nổi bật</h4>
                        <div class="th-event-item">
                            <div class="th-event-date">
                                <span class="day">15</span>
                                <span class="month">TH 9</span>
                            </div>
                            <div class="th-event-text">
                                <span>Thứ 2 hàng tuần</span>
                                <p>CLB STEM - Robotics</p>
                            </div>
                        </div>
                        <div class="th-event-item">
                            <div class="th-event-date">
                                <span class="day">17</span>
                                <span class="month">TH 9</span>
                            </div>
                            <div class="th-event-text">
                                <span>Thứ 4 hàng tuần</span>
                                <p>Nghệ thuật - Múa & Hát</p>
                            </div>
                        </div>
                        <div class="th-event-item">
                            <div class="th-event-date">
                                <span class="day">19</span>
                                <span class="month">TH 9</span>
                            </div>
                            <div class="th-event-text">
                                <span>Thứ 6 hàng tuần</span>
                                <p>Thể thao - Bơi lội</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="th-cta-box">
                    <h4>Đăng ký tham quan</h4>
                    <p>Trải nghiệm môi trường học tập vui vẻ cùng con bạn</p>
                    <a href="lien-he.php" class="th-cta-btn">Đăng ký ngay</a>
                </div>

                <div class="th-photo-card">
                    <img src="olympia/images/about-us-2.jpg" alt="Cơ sở vật chất">
                    <div class="th-photo-card-content">
                        <h5>Lịch học năm 2025-2026</h5>
                        <p>Khai giảng: 05/09/2025<br>Học kỳ 1: 05/09 - 17/01<br>Học kỳ 2: 03/02 - 30/05</p>
                    </div>
                </div>
            </aside>
        </div>
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