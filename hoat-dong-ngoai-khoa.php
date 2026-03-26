<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Hoạt động ngoại khóa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Hoạt động ngoại khóa">
    <meta property="og:description" content="">
    <meta property="og:url" content="hoat-dong-ngoai-khoa.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Hoạt động ngoại khóa">
    <meta name="twitter:description" content="">

    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
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
           PAGE 4: NGOẠI KHÓA - ENERGETIC & VIBRANT STYLE
           Màu xanh #1e4a7e + cam năng động #f59e0b
           ============================================ */
        .nk-container {
            background: linear-gradient(180deg, #fff 0%, #fefce8 50%, #fffbeb 100%);
            min-height: 100vh;
        }

        /* Hero with Real Image Background */
        .nk-hero {
            position: relative;
            height: 600px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .nk-hero-bg {
            position: absolute;
            inset: 0;
            background: url('olympia/images/noibat_2.jpg') center/cover;
        }

        .nk-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(30, 74, 126, 0.95) 0%, rgba(30, 74, 126, 0.7) 50%, rgba(245, 158, 11, 0.6) 100%);
        }

        .nk-hero-content {
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

        .nk-hero-text h1 {
            font-family: 'Garamond', serif;
            font-size: 56px;
            color: #fff;
            margin: 0 0 20px 0;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .nk-hero-text p {
            font-size: 22px;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.6;
            margin: 0;
        }

        .nk-hero-badge {
            display: inline-block;
            background: #fbbf24;
            color: #1e4a7e;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .nk-hero-images {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .nk-hero-img {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            border: 4px solid rgba(255, 255, 255, 0.3);
            aspect-ratio: 3/4;
        }

        .nk-hero-img:nth-child(2) {
            transform: translateY(30px);
        }

        .nk-hero-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .nk-hero-img:hover img {
            transform: scale(1.08);
        }

        /* Main Layout with Sidebars */
        .nk-main-layout {
            max-width: 1400px;
            margin: 40px auto 0;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 260px 1fr 260px;
            gap: 35px;
            position: relative;
            z-index: 10;
            margin-bottom: 150px;
        }

        /* Left Sidebar */
        .nk-sidebar-left {
            display: flex;
            flex-direction: column;
            gap: 20px;
            position: sticky;
            top: 90px;
            align-self: start;
            max-height: calc(100vh - 110px);
            overflow-y: auto;
        }

        .nk-nav-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px 20px;
            box-shadow: 0 8px 30px rgba(30, 74, 126, 0.1);
        }

        .nk-nav-card h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #fef3c7;
        }

        .nk-nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nk-nav-item {
            margin-bottom: 10px;
        }

        .nk-nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            background: #fefce8;
            border-radius: 12px;
            color: #1e4a7e;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nk-nav-link:hover,
        .nk-nav-link.active {
            background: linear-gradient(135deg, #1e4a7e 0%, #2563eb 100%);
            color: #fff;
            transform: translateX(5px);
        }

        .nk-nav-thumb {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .nk-nav-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Stats Card */
        .nk-stats-card {
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
            border-radius: 20px;
            padding: 25px 20px;
            box-shadow: 0 8px 30px rgba(245, 158, 11, 0.3);
        }

        .nk-stats-card h5 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 20px;
            text-align: center;
        }

        .nk-stat-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .nk-stat-item:last-child {
            border-bottom: none;
        }

        .nk-stat-label {
            font-size: 13px;
            color: #1e4a7e;
        }

        .nk-stat-value {
            font-family: 'Garamond', serif;
            font-size: 22px;
            font-weight: 700;
            color: #1e4a7e;
        }

        /* Center Content */
        .nk-content-center {
            background: #fff;
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 10px 40px rgba(30, 74, 126, 0.08);
        }

        .nk-section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .nk-section-header h2 {
            font-family: 'Garamond', serif;
            font-size: 42px;
            color: #1e4a7e;
            margin-bottom: 15px;
        }

        .nk-section-header p {
            font-size: 16px;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Intro Banner */
        .nk-intro {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .nk-intro-text h3 {
            font-family: 'Garamond', serif;
            font-size: 28px;
            color: #1e4a7e;
            margin-bottom: 15px;
        }

        .nk-intro-text p {
            font-size: 15px;
            color: #555;
            line-height: 1.8;
        }

        .nk-intro-text strong {
            color: #1e4a7e;
        }

        .nk-intro-image {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .nk-intro-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        /* Activity Cards - Image Focused */
        .nk-activities {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin: 40px 0;
        }

        .nk-activity-card {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
        }

        .nk-activity-card:nth-child(1) {
            grid-row: span 2;
        }

        .nk-activity-card:nth-child(4) {
            grid-row: span 2;
        }

        .nk-activity-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(30, 74, 126, 0.2);
        }

        .nk-activity-img {
            position: relative;
            overflow: hidden;
            height: 200px;
        }

        .nk-activity-card:nth-child(1) .nk-activity-img,
        .nk-activity-card:nth-child(4) .nk-activity-img {
            height: 300px;
        }

        .nk-activity-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .nk-activity-card:hover .nk-activity-img img {
            transform: scale(1.1);
        }

        .nk-activity-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #f59e0b;
            color: #fff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
        }

        .nk-activity-content {
            padding: 25px;
        }

        .nk-activity-content h3 {
            font-family: 'Garamond', serif;
            font-size: 22px;
            color: #1e4a7e;
            margin-bottom: 12px;
        }

        .nk-activity-content p {
            font-size: 14px;
            color: #64748b;
            line-height: 1.7;
        }

        .nk-activity-tags {
            display: flex;
            gap: 8px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .nk-tag {
            background: #fef3c7;
            color: #92400e;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        /* Gallery Grid */
        .nk-gallery-section {
            margin-top: 60px;
        }

        .nk-gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .nk-gallery-item {
            border-radius: 16px;
            overflow: hidden;
            aspect-ratio: 4/3;
            position: relative;
        }

        .nk-gallery-item:first-child {
            grid-row: span 2;
            aspect-ratio: auto;
        }

        .nk-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .nk-gallery-item:hover img {
            transform: scale(1.1);
        }

        .nk-gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(30, 74, 126, 0.9), transparent);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .nk-gallery-item:hover .nk-gallery-overlay {
            opacity: 1;
        }

        .nk-gallery-overlay span {
            color: #fff;
            font-weight: 600;
            font-size: 14px;
        }

        /* Right Sidebar */
        .nk-sidebar-right {
            display: flex;
            flex-direction: column;
            gap: 20px;
            position: sticky;
            top: 90px;
            align-self: start;
            max-height: calc(100vh - 110px);
            overflow-y: auto;
        }

        .nk-event-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .nk-event-card-img {
            height: 120px;
            overflow: hidden;
        }

        .nk-event-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .nk-event-card-content {
            padding: 20px;
        }

        .nk-event-card-content h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 15px;
        }

        .nk-event-item {
            display: flex;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .nk-event-item:last-child {
            border-bottom: none;
        }

        .nk-event-date {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #1e4a7e;
            flex-shrink: 0;
        }

        .nk-event-date .day {
            font-size: 18px;
            font-weight: 700;
            line-height: 1;
        }

        .nk-event-date .month {
            font-size: 10px;
            text-transform: uppercase;
        }

        .nk-event-text {
            flex: 1;
        }

        .nk-event-text span {
            display: block;
            font-size: 12px;
            color: #f59e0b;
            margin-bottom: 3px;
        }

        .nk-event-text p {
            font-size: 14px;
            color: #444;
            font-weight: 500;
            margin: 0;
        }

        /* CTA Box */
        .nk-cta-box {
            background: linear-gradient(135deg, #1e4a7e 0%, #2563eb 100%);
            border-radius: 24px;
            padding: 30px 20px;
            text-align: center;
            color: #fff;
        }

        .nk-cta-box h4 {
            font-family: 'Garamond', serif;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .nk-cta-box p {
            font-size: 13px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .nk-cta-btn {
            display: inline-block;
            padding: 12px 28px;
            background: #fbbf24;
            color: #1e4a7e;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .nk-cta-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Photo Card */
        .nk-photo-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .nk-photo-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .nk-photo-card-content {
            padding: 20px;
        }

        .nk-photo-card-content h5 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e4a7e;
            margin-bottom: 8px;
        }

        .nk-photo-card-content p {
            font-size: 13px;
            color: #64748b;
        }


        .tq-footer-consult-wrap {
            --tq-consult-half-height: 92px;
            position: relative;
            z-index: 5;
            margin: calc(-1 * var(--tq-consult-half-height)) 20px calc(-1 * var(--tq-consult-half-height));
            background: transparent;
        }

        .tq-footer-consult-spacer {
            height: var(--tq-consult-half-height);
        }

        .tq-footer-consult-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        .tq-footer-consult-card {
            width: min(100%, 1020px);
            min-height: calc(var(--tq-consult-half-height) * 2);
            border-radius: 26px;
            overflow: hidden;
            position: relative;
            background: url('olympia/images/noibat_1.jpg') center/cover no-repeat;
            box-shadow: 0 20px 40px rgba(16, 52, 92, 0.3);
            color: #fff;
            padding: 24px 32px;
        }

        .tq-footer-consult-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(110deg, rgba(17, 64, 114, 0.93) 0%, rgba(28, 89, 153, 0.9) 52%, rgba(44, 121, 190, 0.82) 100%);
        }

        .tq-footer-consult-content {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 24px;
        }

        .tq-footer-consult-text>div {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 6px;
            flex-wrap: nowrap;
        }

        .tq-footer-consult-text small {
            display: inline-block;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.18);
            margin-bottom: 0;
        }

        .tq-footer-consult-text h3 {
            font-family: 'Garamond', serif;
            font-size: clamp(30px, 2.6vw, 40px);
            margin: 0;
            color: #fff;
        }

        .tq-footer-consult-text p {
            font-size: 24px;
            line-height: 1.35;
            margin: 0;
            color: rgba(255, 255, 255, 0.96);
        }

        .tq-footer-consult-actions {
            text-align: right;
        }

        .tq-footer-consult-note {
            margin-top: 10px;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.88);
        }

        .tq-footer-consult-btn {
            display: inline-block;
            min-width: 188px;
            padding: 13px 28px;
            border-radius: 999px;
            background: #fff;
            color: #1d4f87;
            font-weight: 700;
            font-size: 17px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tq-footer-consult-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.22);
        }

        #footer,
        #footer .footer {
            margin-top: 0;
        }

        #footer .footer {
            padding-top: 128px;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .nk-main-layout {
                grid-template-columns: 1fr;
                max-width: 900px;
            }

            .nk-sidebar-left,
            .nk-sidebar-right {
                display: none;
            }

            .nk-hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .nk-hero-images {
                display: none;
            }

            .nk-intro {
                grid-template-columns: 1fr;
            }

            .nk-activities {
                grid-template-columns: repeat(2, 1fr);
            }

            .nk-activity-card:nth-child(1),
            .nk-activity-card:nth-child(4) {
                grid-row: span 1;
            }

            .nk-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .nk-gallery-item:first-child {
                grid-row: span 1;
            }
        }

        @media (max-width: 768px) {
            .nk-hero-text h1 {
                font-size: 36px;
            }

            .nk-activities {
                grid-template-columns: 1fr;
            }

            .nk-gallery-grid {
                grid-template-columns: 1fr;
            }

            .tq-footer-consult-wrap {
                --tq-consult-half-height: 72px;
                margin: calc(-1 * var(--tq-consult-half-height)) 12px calc(-1 * var(--tq-consult-half-height));
            }

            .tq-footer-consult-spacer {
                height: var(--tq-consult-half-height);
            }

            .tq-footer-consult-card {
                padding: 20px 16px;
            }

            .tq-footer-consult-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 16px;
            }

            .tq-footer-consult-text>div {
                justify-content: center;
                flex-wrap: wrap;
            }

            .tq-footer-consult-text p {
                font-size: 20px;
            }

            .tq-footer-consult-actions {
                text-align: center;
            }

            #footer {
                padding-top: 32px;
            }

            #footer .footer {
                padding-top: 96px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content nk-container">
        <!-- Hero Section with Images -->
        <section class="nk-hero">
            <div class="nk-hero-bg"></div>
            <div class="nk-hero-overlay"></div>
            <div class="nk-hero-content">
                <div class="nk-hero-text">
                    <span class="nk-hero-badge">Năng động - Sáng tạo</span>
                    <h1>Hoạt động ngoại khóa</h1>
                    <p>"Phát triển toàn diện - Khám phá đam mê - Tỏa sáng tài năng"</p>
                </div>
                <div class="nk-hero-images">
                    <div class="nk-hero-img">
                        <img src="olympia/images/noibat_2.jpg" alt="Thể thao">
                    </div>
                    <div class="nk-hero-img">
                        <img src="olympia/images/noibat_4.jpg" alt="Nghệ thuật">
                    </div>
                    <div class="nk-hero-img">
                        <img src="olympia/images/noibat_5.png" alt="STEM">
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Layout with Sidebars -->
        <div class="nk-main-layout">
            <!-- Left Sidebar -->
            <aside class="nk-sidebar-left">
                <div class="nk-nav-card">
                    <h4>Chương trình</h4>
                    <ul class="nk-nav-menu">
                        <li class="nk-nav-item">
                            <a href="tong-quan-chuong-trinh.php" class="nk-nav-link">
                                <span class="nk-nav-thumb"><img src="storage/banner/ve-chung-toi-web.jpg" alt=""></span>
                                Tổng quan
                            </a>
                        </li>
                        <li class="nk-nav-item">
                            <a href="chuong-trinh-tieu-hoc.php" class="nk-nav-link">
                                <span class="nk-nav-thumb"><img src="storage/banner/tieu-hoc.jpg" alt=""></span>
                                Tiểu học
                            </a>
                        </li>
                        <li class="nk-nav-item">
                            <a href="chuong-trinh-thcs.php" class="nk-nav-link">
                                <span class="nk-nav-thumb"><img src="storage/banner/trung-hoc.jpg" alt=""></span>
                                THCS
                            </a>
                        </li>
                        <li class="nk-nav-item">
                            <a href="hoat-dong-ngoai-khoa.php" class="nk-nav-link active">
                                <span class="nk-nav-thumb"><img src="olympia/images/noibat_2.jpg" alt=""></span>
                                Ngoại khóa
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nk-stats-card">
                    <h5>Thống kê ngoại khóa</h5>
                    <div class="nk-stat-item">
                        <span class="nk-stat-label">Câu lạc bộ</span>
                        <span class="nk-stat-value">20+</span>
                    </div>
                    <div class="nk-stat-item">
                        <span class="nk-stat-label">Hoạt động/năm</span>
                        <span class="nk-stat-value">50+</span>
                    </div>
                    <div class="nk-stat-item">
                        <span class="nk-stat-label">HS tham gia</span>
                        <span class="nk-stat-value">100%</span>
                    </div>
                    <div class="nk-stat-item">
                        <span class="nk-stat-label">Lĩnh vực</span>
                        <span class="nk-stat-value">15+</span>
                    </div>
                </div>
            </aside>

            <!-- Center Content -->
            <div class="nk-content-center">
                <!-- Intro Section -->
                <div class="nk-section-header">
                    <h2>Khám phá thế giới ngoại khóa</h2>
                    <p>Giáo dục không chỉ diễn ra trong lớp học. Các hoạt động ngoại khóa giúp học sinh phát triển toàn
                        diện nhân cách, kỹ năng sống và tài năng.</p>
                </div>

                <div class="nk-intro">
                    <div class="nk-intro-text">
                        <h3>Tại sao chọn ngoại khóa tại Olympia?</h3>
                        <p>Chúng tôi cung cấp <strong>đa dạng các hoạt động</strong> từ thể thao, nghệ thuật, khoa học
                            đến các hoạt động cộng đồng. Mỗi học sinh đều có thể tìm thấy đam mê và phát triển tiềm năng
                            của bản thân.</p>
                    </div>
                    <div class="nk-intro-image">
                        <img src="olympia/images/about-us-1.jpg" alt="Hoạt động ngoại khóa">
                    </div>
                </div>

                <!-- Activities Grid -->
                <div class="nk-section-header" style="margin-top: 70px;">
                    <h2>Các câu lạc bộ và hoạt động</h2>
                    <p>Đa dạng lựa chọn cho mọi sở thích và năng khiếu</p>
                </div>

                <div class="nk-activities">
                    <div class="nk-activity-card">
                        <div class="nk-activity-img">
                            <img src="olympia/images/noibat_2.jpg" alt="Thể thao">
                            <span class="nk-activity-badge">Thể thao</span>
                        </div>
                        <div class="nk-activity-content">
                            <h3>Thể thao</h3>
                            <p>Bóng đá, bóng rổ, bơi lội, cầu lông và nhiều môn thể thao khác giúp học sinh phát triển
                                thể chất và tinh thần đồng đội.</p>
                            <div class="nk-activity-tags">
                                <span class="nk-tag">Bóng đá</span>
                                <span class="nk-tag">Bơi lội</span>
                                <span class="nk-tag">Cầu lông</span>
                            </div>
                        </div>
                    </div>

                    <div class="nk-activity-card">
                        <div class="nk-activity-img">
                            <img src="olympia/images/noibat_4.jpg" alt="Nghệ thuật">
                            <span class="nk-activity-badge">Nghệ thuật</span>
                        </div>
                        <div class="nk-activity-content">
                            <h3>Nghệ thuật</h3>
                            <p>Âm nhạc, hội họa, múa và kịch nghệ giúp học sinh phát triển sự sáng tạo và thẩm mỹ.</p>
                            <div class="nk-activity-tags">
                                <span class="nk-tag">Âm nhạc</span>
                                <span class="nk-tag">Hội họa</span>
                                <span class="nk-tag">Múa</span>
                            </div>
                        </div>
                    </div>

                    <div class="nk-activity-card">
                        <div class="nk-activity-img">
                            <img src="olympia/images/noibat_5.png" alt="STEM">
                            <span class="nk-activity-badge">STEM</span>
                        </div>
                        <div class="nk-activity-content">
                            <h3>STEM & Công nghệ</h3>
                            <p>Khoa học, Công nghệ, Kỹ thuật và Toán học - nơi học sinh khám phá và sáng tạo với
                                robotics, lập trình.</p>
                            <div class="nk-activity-tags">
                                <span class="nk-tag">Robotics</span>
                                <span class="nk-tag">Lập trình</span>
                                <span class="nk-tag">AI</span>
                            </div>
                        </div>
                    </div>

                    <div class="nk-activity-card">
                        <div class="nk-activity-img">
                            <img src="olympia/images/noibat_1.jpg" alt="Cộng đồng">
                            <span class="nk-activity-badge">Cộng đồng</span>
                        </div>
                        <div class="nk-activity-content">
                            <h3>Cộng đồng</h3>
                            <p>Các dự án tình nguyện và hoạt động xã hội giúp học sinh phát triển lòng nhân ái và trách
                                nhiệm công dân.</p>
                            <div class="nk-activity-tags">
                                <span class="nk-tag">Tình nguyện</span>
                                <span class="nk-tag">Môi trường</span>
                            </div>
                        </div>
                    </div>

                    <div class="nk-activity-card">
                        <div class="nk-activity-img">
                            <img src="olympia/images/noibat_3.jpg" alt="Kỹ năng">
                            <span class="nk-activity-badge">Kỹ năng</span>
                        </div>
                        <div class="nk-activity-content">
                            <h3>Kỹ năng sống</h3>
                            <p>Workshops và chương trình phát triển kỹ năng giao tiếp, lãnh đạo và quản lý thời gian.
                            </p>
                            <div class="nk-activity-tags">
                                <span class="nk-tag">Lãnh đạo</span>
                                <span class="nk-tag">Giao tiếp</span>
                            </div>
                        </div>
                    </div>

                    <div class="nk-activity-card">
                        <div class="nk-activity-img">
                            <img src="olympia/images/noibat_7.jpg" alt="Ngoại ngữ">
                            <span class="nk-activity-badge">Ngoại ngữ</span>
                        </div>
                        <div class="nk-activity-content">
                            <h3>Ngoại ngữ</h3>
                            <p>Tiếng Anh, tiếng Trung và các ngôn ngữ khác - mở rộng tầm nhìn văn hóa toàn cầu.</p>
                            <div class="nk-activity-tags">
                                <span class="nk-tag">Tiếng Anh</span>
                                <span class="nk-tag">Tiếng Trung</span>
                                <span class="nk-tag">Debate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Section -->
                <div class="nk-gallery-section">
                    <div class="nk-section-header">
                        <h2>Khoảnh khắc đáng nhớ</h2>
                        <p>Những hình ảnh sinh động từ các hoạt động ngoại khóa</p>
                    </div>
                    <div class="nk-gallery-grid">
                        <div class="nk-gallery-item">
                            <img src="olympia/images/noibat_1.jpg" alt="">
                            <div class="nk-gallery-overlay"><span>Hội thao</span></div>
                        </div>
                        <div class="nk-gallery-item">
                            <img src="olympia/images/noibat_2.jpg" alt="">
                            <div class="nk-gallery-overlay"><span>Thi đấu</span></div>
                        </div>
                        <div class="nk-gallery-item">
                            <img src="olympia/images/noibat_3.jpg" alt="">
                            <div class="nk-gallery-overlay"><span>Biểu diễn</span></div>
                        </div>
                        <div class="nk-gallery-item">
                            <img src="olympia/images/noibat_4.jpg" alt="">
                            <div class="nk-gallery-overlay"><span>Tình nguyện</span></div>
                        </div>
                        <div class="nk-gallery-item">
                            <img src="olympia/images/noibat_5.png" alt="">
                            <div class="nk-gallery-overlay"><span>STEM</span></div>
                        </div>
                        <div class="nk-gallery-item">
                            <img src="olympia/images/noibat_7.jpg" alt="">
                            <div class="nk-gallery-overlay"><span>Văn nghệ</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <aside class="nk-sidebar-right">
                <div class="nk-event-card">
                    <div class="nk-event-card-img">
                        <img src="olympia/images/noibat_2.jpg" alt="">
                    </div>
                    <div class="nk-event-card-content">
                        <h4>Sự kiện sắp tới</h4>
                        <div class="nk-event-item">
                            <div class="nk-event-date">
                                <span class="day">10</span>
                                <span class="month">TH 10</span>
                            </div>
                            <div class="nk-event-text">
                                <span>Hội thao Olympia</span>
                                <p>Giải thể thao học sinh</p>
                            </div>
                        </div>
                        <div class="nk-event-item">
                            <div class="nk-event-date">
                                <span class="day">25</span>
                                <span class="month">TH 11</span>
                            </div>
                            <div class="nk-event-text">
                                <span>Olympiad STEM</span>
                                <p>Cuộc thi khoa học</p>
                            </div>
                        </div>
                        <div class="nk-event-item">
                            <div class="nk-event-date">
                                <span class="day">05</span>
                                <span class="month">TH 12</span>
                            </div>
                            <div class="nk-event-text">
                                <span>Lễ hội nghệ thuật</span>
                                <p>Biểu diễn tài năng</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="nk-cta-box">
                    <h4>Tham gia cùng chúng tôi!</h4>
                    <p>Đăng ký tư vấn để tìm hiểu các hoạt động phù hợp với sở thích của con bạn</p>
                    <a href="lien-he.php" class="nk-cta-btn">Đăng ký ngay</a>
                </div> -->

                <div class="nk-photo-card">
                    <img src="olympia/images/about-us-2.jpg" alt="Thành tích">
                    <div class="nk-photo-card-content">
                        <h5>Thành tích ngoại khóa</h5>
                        <p>Học sinh Olympia đạt nhiều giải thưởng trong các cuộc thi thể thao, nghệ thuật và STEM quốc
                            gia.</p>
                    </div>
                </div>
            </aside>
        </div>

        <div class="tq-footer-consult-spacer"></div>
        <!-- section CTA đăng ký tư vấn -->
        <section class="tq-footer-consult-wrap">
            <div class="tq-footer-consult-inner">
                <div class="tq-footer-consult-card">
                    <div class="tq-footer-consult-content">
                        <div class="tq-footer-consult-text">
                            <div>
                                <small>Tuyển sinh 2026 - 2027</small>
                                <h3>Đăng ký tư vấn</h3>
                            </div>
                            <p>Liên hệ ngay để được tư vấn chi tiết lộ trình học phù hợp cho con.</p>
                        </div>
                        <div class="tq-footer-consult-actions">
                            <a href="lien-he.php" class="tq-footer-consult-btn">Liên hệ ngay</a>
                            <div class="tq-footer-consult-note">Phản hồi trong vòng 24 giờ làm việc</div>
                        </div>
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