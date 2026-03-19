<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Chương trình THCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Chương trình THCS">
    <meta property="og:description" content="">
    <meta property="og:url" content="chuong-trinh-thcs.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Chương trình THCS">
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
           PAGE 3: THCS - MODERN ACADEMIC STYLE
           Màu xanh #1e4a7e - chuyên nghiệp, trưởng thành
           ============================================ */
        .thcs-container {
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
        }

        /* Hero with Image Background */
        .thcs-hero {
            position: relative;
            height: 580px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .thcs-hero-bg {
            position: absolute;
            inset: 0;
            background: url('storage/banner/trung-hoc.jpg') center/cover;
        }

        .thcs-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(30, 74, 126, 0.95) 0%, rgba(30, 74, 126, 0.8) 50%, rgba(15, 23, 42, 0.7) 100%);
        }

        .thcs-hero-content {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
            width: 100%;
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .thcs-hero-text h1 {
            font-family: 'Garamond', serif;
            font-size: 54px;
            color: #fff;
            margin: 0 0 20px 0;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
            line-height: 1.2;
        }

        .thcs-hero-text p {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.6;
            margin: 0;
        }

        .thcs-hero-badge {
            display: inline-block;
            background: #fbbf24;
            color: #1e4a7e;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .thcs-hero-images {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .thcs-hero-img {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            border: 3px solid rgba(255, 255, 255, 0.2);
        }

        .thcs-hero-img:first-child {
            grid-row: span 2;
        }

        .thcs-hero-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .thcs-hero-img:hover img {
            transform: scale(1.05);
        }

        /* Main Layout with Sidebars */
        .thcs-main-layout {
            max-width: 1400px;
            margin: 40px auto 0;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 260px 1fr 260px;
            gap: 35px;
            position: relative;
            z-index: 10;
        }

        /* Left Sidebar */
        .thcs-sidebar-left {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .thcs-nav-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px 20px;
            box-shadow: 0 8px 30px rgba(30, 74, 126, 0.1);
        }

        .thcs-nav-card h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e2e8f0;
        }

        .thcs-nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .thcs-nav-item {
            margin-bottom: 10px;
        }

        .thcs-nav-link {
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

        .thcs-nav-link:hover,
        .thcs-nav-link.active {
            background: linear-gradient(135deg, #1e4a7e 0%, #2563eb 100%);
            color: #fff;
            transform: translateX(5px);
        }

        .thcs-nav-thumb {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .thcs-nav-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Stats Card */
        .thcs-stats-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(30, 74, 126, 0.1);
        }

        .thcs-stats-header {
            background: linear-gradient(135deg, #1e4a7e 0%, #2563eb 100%);
            padding: 20px;
            text-align: center;
        }

        .thcs-stats-header h5 {
            color: #fff;
            font-size: 16px;
            margin: 0;
        }

        .thcs-stats-body {
            padding: 20px;
        }

        .thcs-stat-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .thcs-stat-row:last-child {
            border-bottom: none;
        }

        .thcs-stat-label {
            font-size: 13px;
            color: #64748b;
        }

        .thcs-stat-value {
            font-family: 'Garamond', serif;
            font-size: 20px;
            font-weight: 700;
            color: #1e4a7e;
        }

        /* Center Content */
        .thcs-content-center {
            background: #fff;
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 10px 40px rgba(30, 74, 126, 0.08);
        }

        .thcs-section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .thcs-section-header h2 {
            font-family: 'Garamond', serif;
            font-size: 40px;
            color: #1e4a7e;
            margin-bottom: 15px;
        }

        .thcs-section-header p {
            font-size: 16px;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Feature Cards with Images */
        .thcs-features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin: 50px 0;
        }

        .thcs-feature-card {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .thcs-feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(30, 74, 126, 0.15);
        }

        .thcs-feature-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .thcs-feature-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .thcs-feature-card:hover .thcs-feature-img img {
            transform: scale(1.1);
        }

        .thcs-feature-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #1e4a7e;
            color: #fff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .thcs-feature-content {
            padding: 25px;
        }

        .thcs-feature-content h3 {
            font-family: 'Garamond', serif;
            font-size: 24px;
            color: #1e4a7e;
            margin-bottom: 12px;
        }

        .thcs-feature-content p {
            font-size: 14px;
            color: #64748b;
            line-height: 1.7;
        }

        /* Skills Grid */
        .thcs-skills-section {
            margin-top: 60px;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 24px;
            padding: 40px;
        }

        .thcs-skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 30px;
        }

        .thcs-skill-item {
            background: #fff;
            border-radius: 16px;
            padding: 25px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .thcs-skill-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(30, 74, 126, 0.1);
        }

        .thcs-skill-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 15px;
            border: 3px solid #e2e8f0;
        }

        .thcs-skill-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .thcs-skill-item h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 8px;
        }

        .thcs-skill-item p {
            font-size: 13px;
            color: #64748b;
            line-height: 1.6;
        }

        /* Gallery */
        .thcs-gallery-section {
            margin-top: 60px;
        }

        .thcs-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .thcs-gallery-item {
            border-radius: 16px;
            overflow: hidden;
            aspect-ratio: 4/3;
            position: relative;
        }

        .thcs-gallery-item:first-child {
            grid-row: span 2;
            aspect-ratio: auto;
        }

        .thcs-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .thcs-gallery-item:hover img {
            transform: scale(1.1);
        }

        .thcs-gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(30, 74, 126, 0.9), transparent);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .thcs-gallery-item:hover .thcs-gallery-overlay {
            opacity: 1;
        }

        .thcs-gallery-overlay span {
            color: #fff;
            font-weight: 600;
            font-size: 14px;
        }

        /* Right Sidebar */
        .thcs-sidebar-right {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .thcs-event-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .thcs-event-card-img {
            height: 120px;
            overflow: hidden;
        }

        .thcs-event-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .thcs-event-card-content {
            padding: 20px;
        }

        .thcs-event-card-content h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 15px;
        }

        .thcs-event-item {
            display: flex;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .thcs-event-item:last-child {
            border-bottom: none;
        }

        .thcs-event-date {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #1e4a7e 0%, #2563eb 100%);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
            flex-shrink: 0;
        }

        .thcs-event-date .day {
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
        }

        .thcs-event-date .month {
            font-size: 10px;
            text-transform: uppercase;
        }

        .thcs-event-text {
            flex: 1;
        }

        .thcs-event-text span {
            display: block;
            font-size: 12px;
            color: #3b82f6;
            margin-bottom: 3px;
        }

        .thcs-event-text p {
            font-size: 14px;
            color: #444;
            font-weight: 500;
            margin: 0;
        }

        /* CTA Box */
        .thcs-cta-box {
            background: linear-gradient(135deg, #1e4a7e 0%, #2563eb 100%);
            border-radius: 24px;
            padding: 30px 20px;
            text-align: center;
            color: #fff;
        }

        .thcs-cta-box h4 {
            font-family: 'Garamond', serif;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .thcs-cta-box p {
            font-size: 13px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .thcs-cta-btn {
            display: inline-block;
            padding: 12px 28px;
            background: #fff;
            color: #1e4a7e;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .thcs-cta-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Photo Card */
        .thcs-photo-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .thcs-photo-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .thcs-photo-card-content {
            padding: 20px;
        }

        .thcs-photo-card-content h5 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 8px;
        }

        .thcs-photo-card-content p {
            font-size: 13px;
            color: #64748b;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .thcs-main-layout {
                grid-template-columns: 1fr;
                max-width: 900px;
            }

            .thcs-sidebar-left,
            .thcs-sidebar-right {
                display: none;
            }

            .thcs-hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .thcs-hero-images {
                display: none;
            }

            .thcs-features-grid {
                grid-template-columns: 1fr;
            }

            .thcs-skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .thcs-hero-text h1 {
                font-size: 36px;
            }

            .thcs-skills-grid {
                grid-template-columns: 1fr;
            }

            .thcs-gallery {
                grid-template-columns: 1fr;
            }

            .thcs-gallery-item:first-child {
                grid-row: span 1;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content thcs-container">
        <!-- Hero Section with Images -->
        <section class="thcs-hero">
            <div class="thcs-hero-bg"></div>
            <div class="thcs-hero-overlay"></div>
            <div class="thcs-hero-content">
                <div class="thcs-hero-text">
                    <span class="thcs-hero-badge">Lớp 6-9</span>
                    <h1>Chương trình THCS</h1>
                    <p>"Phát triển tư duy phản biện và chuẩn bị nền tảng vững chắc cho tương lai"</p>
                </div>
                <div class="thcs-hero-images">
                    <div class="thcs-hero-img">
                        <img src="storage/banner/trung-hoc.jpg" alt="Học sinh THCS">
                    </div>
                    <div class="thcs-hero-img">
                        <img src="olympia/images/about-us-2.jpg" alt="Hoạt động THCS">
                    </div>
                    <div class="thcs-hero-img">
                        <img src="olympia/images/noibat_5.png" alt="Thí nghiệm khoa học">
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Layout with Sidebars -->
        <div class="thcs-main-layout">
            <!-- Left Sidebar -->
            <aside class="thcs-sidebar-left">
                <div class="thcs-nav-card">
                    <h4>Chương trình</h4>
                    <ul class="thcs-nav-menu">
                        <li class="thcs-nav-item">
                            <a href="tong-quan-chuong-trinh.php" class="thcs-nav-link">
                                <span class="thcs-nav-thumb"><img src="storage/banner/ve-chung-toi-web.jpg" alt=""></span>
                                Tổng quan
                            </a>
                        </li>
                        <li class="thcs-nav-item">
                            <a href="chuong-trinh-tieu-hoc.php" class="thcs-nav-link">
                                <span class="thcs-nav-thumb"><img src="storage/banner/tieu-hoc.jpg" alt=""></span>
                                Tiểu học
                            </a>
                        </li>
                        <li class="thcs-nav-item">
                            <a href="chuong-trinh-thcs.php" class="thcs-nav-link active">
                                <span class="thcs-nav-thumb"><img src="storage/banner/trung-hoc.jpg" alt=""></span>
                                THCS
                            </a>
                        </li>
                        <li class="thcs-nav-item">
                            <a href="hoat-dong-ngoai-khoa.php" class="thcs-nav-link">
                                <span class="thcs-nav-thumb"><img src="olympia/images/noibat_2.jpg" alt=""></span>
                                Ngoại khóa
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="thcs-stats-card">
                    <div class="thcs-stats-header">
                        <h5>Thống kê chương trình</h5>
                    </div>
                    <div class="thcs-stats-body">
                        <div class="thcs-stat-row">
                            <span class="thcs-stat-label">Năm học</span>
                            <span class="thcs-stat-value">4</span>
                        </div>
                        <div class="thcs-stat-row">
                            <span class="thcs-stat-label">Môn học</span>
                            <span class="thcs-stat-value">12+</span>
                        </div>
                        <div class="thcs-stat-row">
                            <span class="thcs-stat-label">Câu lạc bộ</span>
                            <span class="thcs-stat-value">20+</span>
                        </div>
                        <div class="thcs-stat-row">
                            <span class="thcs-stat-label">Vào THPT chuyên</span>
                            <span class="thcs-stat-value">95%</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Center Content -->
            <div class="thcs-content-center">
                <div class="thcs-section-header">
                    <h2>Định hướng phát triển</h2>
                    <p>Chương trình THCS tập trung vào việc phát triển toàn diện học sinh, chuẩn bị cho giai đoạn học tập nâng cao</p>
                </div>

                <!-- Feature Cards with Images -->
                <div class="thcs-features-grid">
                    <div class="thcs-feature-card">
                        <div class="thcs-feature-img">
                            <img src="olympia/images/about-us-1.jpg" alt="Tư duy phản biện">
                            <span class="thcs-feature-badge">Tư duy</span>
                        </div>
                        <div class="thcs-feature-content">
                            <h3>Tư duy phản biện</h3>
                            <p>Phát triển khả năng phân tích, đánh giá và giải quyết vấn đề phức tạp thông qua các dự án học thuật.</p>
                        </div>
                    </div>
                    <div class="thcs-feature-card">
                        <div class="thcs-feature-img">
                            <img src="olympia/images/noibat_5.png" alt="Nghiên cứu khoa học">
                            <span class="thcs-feature-badge">STEM</span>
                        </div>
                        <div class="thcs-feature-content">
                            <h3>Nghiên cứu khoa học</h3>
                            <p>Khuyến khích tự học, nghiên cứu và khám phá kiến thức mới với phòng lab hiện đại.</p>
                        </div>
                    </div>
                    <div class="thcs-feature-card">
                        <div class="thcs-feature-img">
                            <img src="olympia/images/noibat_2.jpg" alt="Làm việc nhóm">
                            <span class="thcs-feature-badge">Kỹ năng mềm</span>
                        </div>
                        <div class="thcs-feature-content">
                            <h3>Làm việc nhóm</h3>
                            <p>Phát triển kỹ năng hợp tác, giao tiếp và lãnh đạo trong nhóm qua các hoạt động tập thể.</p>
                        </div>
                    </div>
                    <div class="thcs-feature-card">
                        <div class="thcs-feature-img">
                            <img src="olympia/images/about-us-3.jpg" alt="Định hướng nghề nghiệp">
                            <span class="thcs-feature-badge">Tương lai</span>
                        </div>
                        <div class="thcs-feature-content">
                            <h3>Định hướng nghề nghiệp</h3>
                            <p>Giúp học sinh khám phá sở thích và định hướng tương lai sớm từ cấp THCS.</p>
                        </div>
                    </div>
                </div>

                <!-- Skills Section -->
                <div class="thcs-skills-section">
                    <div class="thcs-section-header" style="margin-bottom: 0;">
                        <h2>Kỹ năng phát triển</h2>
                        <p>Bên cạnh kiến thức học thuật, học sinh được rèn luyện các kỹ năng mềm quan trọng</p>
                    </div>
                    <div class="thcs-skills-grid">
                        <div class="thcs-skill-item">
                            <div class="thcs-skill-img">
                                <img src="olympia/images/noibat_3.jpg" alt="Học tập">
                            </div>
                            <h4>Kỹ năng học tập</h4>
                            <p>Phương pháp học tập hiệu quả và quản lý thời gian</p>
                        </div>
                        <div class="thcs-skill-item">
                            <div class="thcs-skill-img">
                                <img src="olympia/images/noibat_4.jpg" alt="Thuyết trình">
                            </div>
                            <h4>Thuyết trình</h4>
                            <p>Kỹ năng thuyết trình chuyên nghiệp trước đám đông</p>
                        </div>
                        <div class="thcs-skill-item">
                            <div class="thcs-skill-img">
                                <img src="olympia/images/noibat_7.jpg" alt="Tư duy toàn cầu">
                            </div>
                            <h4>Tư duy toàn cầu</h4>
                            <p>Hiểu biết văn hóa quốc tế và kỹ năng đa văn hóa</p>
                        </div>
                        <div class="thcs-skill-item">
                            <div class="thcs-skill-img">
                                <img src="olympia/images/noibat_1.jpg" alt="Sáng tạo">
                            </div>
                            <h4>Sáng tạo & Đổi mới</h4>
                            <p>Tư duy sáng tạo và khởi nghiệp từ sớm</p>
                        </div>
                        <div class="thcs-skill-item">
                            <div class="thcs-skill-img">
                                <img src="olympia/images/noibat_2.jpg" alt="Lãnh đạo">
                            </div>
                            <h4>Lãnh đạo</h4>
                            <p>Phát triển kỹ năng lãnh đạo và quản lý nhóm</p>
                        </div>
                        <div class="thcs-skill-item">
                            <div class="thcs-skill-img">
                                <img src="olympia/images/noibat_5.png" alt="Giải quyết vấn đề">
                            </div>
                            <h4>Giải quyết vấn đề</h4>
                            <p>Phương pháp giải quyết vấn đề có hệ thống</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Section -->
                <div class="thcs-gallery-section">
                    <div class="thcs-section-header">
                        <h2>Hoạt động THCS</h2>
                        <p>Những khoảnh khắc trong hành trình học tập và trưởng thành</p>
                    </div>
                    <div class="thcs-gallery">
                        <div class="thcs-gallery-item">
                            <img src="olympia/images/noibat_1.jpg" alt="">
                            <div class="thcs-gallery-overlay"><span>Hội thảo khoa học</span></div>
                        </div>
                        <div class="thcs-gallery-item">
                            <img src="olympia/images/noibat_2.jpg" alt="">
                            <div class="thcs-gallery-overlay"><span>Thể thao</span></div>
                        </div>
                        <div class="thcs-gallery-item">
                            <img src="olympia/images/noibat_3.jpg" alt="">
                            <div class="thcs-gallery-overlay"><span>Nghệ thuật</span></div>
                        </div>
                        <div class="thcs-gallery-item">
                            <img src="olympia/images/noibat_4.jpg" alt="">
                            <div class="thcs-gallery-overlay"><span>Tình nguyện</span></div>
                        </div>
                        <div class="thcs-gallery-item">
                            <img src="olympia/images/noibat_5.png" alt="">
                            <div class="thcs-gallery-overlay"><span>Công nghệ</span></div>
                        </div>
                        <div class="thcs-gallery-item">
                            <img src="olympia/images/noibat_7.jpg" alt="">
                            <div class="thcs-gallery-overlay"><span>Văn nghệ</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <aside class="thcs-sidebar-right">
                <div class="thcs-event-card">
                    <div class="thcs-event-card-img">
                        <img src="olympia/images/noibat_2.jpg" alt="">
                    </div>
                    <div class="thcs-event-card-content">
                        <h4>Lịch sự kiện sắp tới</h4>
                        <div class="thcs-event-item">
                            <div class="thcs-event-date">
                                <span class="day">20</span>
                                <span class="month">TH 9</span>
                            </div>
                            <div class="thcs-event-text">
                                <span>Khai giảng CLB</span>
                                <p>Khởi động năm học mới</p>
                            </div>
                        </div>
                        <div class="thcs-event-item">
                            <div class="thcs-event-date">
                                <span class="day">15</span>
                                <span class="month">TH 10</span>
                            </div>
                            <div class="thcs-event-text">
                                <span>Hội thao học sinh</span>
                                <p>Thi đấu thể thao</p>
                            </div>
                        </div>
                        <div class="thcs-event-item">
                            <div class="thcs-event-date">
                                <span class="day">25</span>
                                <span class="month">TH 11</span>
                            </div>
                            <div class="thcs-event-text">
                                <span>Hội nghị khoa học</span>
                                <p>Trình bày dự án STEM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="thcs-cta-box">
                    <h4>Tìm hiểu thêm</h4>
                    <p>Đăng ký tư vấn để nhận thông tin chi tiết về chương trình</p>
                    <a href="lien-he.php" class="thcs-cta-btn">Liên hệ ngay</a>
                </div>

                <div class="thcs-photo-card">
                    <img src="olympia/images/about-us-1.jpg" alt="Thành tích">
                    <div class="thcs-photo-card-content">
                        <h5>Thành tích nổi bật</h5>
                        <p>Học sinh Olympia đạt nhiều giải thưởng quốc gia và quốc tế trong các kỳ thi học thuật.</p>
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