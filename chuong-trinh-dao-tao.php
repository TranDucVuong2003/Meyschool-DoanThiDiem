<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Chương trình đào tạo – Meyschool Đoàn Thị Điểm</title>
    <meta name="description" content="Chương trình đào tạo tại Meyschool Đoàn Thị Điểm Phú Quốc">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="olympia/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="olympia/css/reset.css">
    <link rel="stylesheet" href="olympia/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="olympia/css/fonts.css">
    <link rel="stylesheet" href="olympia/css/style.css">
    <link rel="stylesheet" href="olympia/css/styles-new.css">
    <link rel="stylesheet" type="text/css" href="olympia/css/slick.css">
    <link rel="stylesheet" type="text/css" href="olympia/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="olympia/css/jquery.toast.min.css">
    <script type="text/javascript" src="olympia/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="olympia/js/swiper-bundle.min.js"></script>
    <script src="olympia/js/slick.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        :root {
            --ct-navy: #1e3a5f;
            --ct-blue: #2b6cb0;
            --ct-sky: #439bd4;
            --ct-light: #eef6ff;
            --ct-white: #ffffff;
        }

        .ct-page {
            background: #f8fbff;
            color: #1f2a44;
            margin-bottom: 120px;
        }

        .ct-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ── Hero ── */
        .ct-hero {
            padding: 110px 0 50px;
            background: linear-gradient(130deg, rgba(30, 58, 95, .94), rgba(43, 108, 176, .88)),
                url('assets/img/chan-dung-hoc-sinh/thư viện.jpg') center/cover no-repeat;
        }

        .ct-hero h1 {
            color: #fff;
            font-family: 'EB Garamond', 'Garamond', serif;
            font-size: clamp(32px, 4vw, 52px);
            margin: 0 0 12px;
        }

        .ct-hero p {
            color: rgba(255, 255, 255, .92);
            font-size: 17px;
            line-height: 1.7;
            max-width: 760px;
            text-align: justify;
        }

        .ct-breadcrumb {
            display: inline-flex;
            gap: 6px;
            list-style: none;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .18);
            border: 1px solid rgba(255, 255, 255, .3);
            margin: 0 0 16px;
            font-size: 13px;
        }

        .ct-breadcrumb li,
        .ct-breadcrumb a {
            color: #fff;
            text-decoration: none;
        }

        .ct-breadcrumb li+li::before {
            content: "·";
            margin-right: 6px;
        }

        /* ── Section generic ── */
        .ct-section {
            padding: 56px 0;
        }

        .ct-section:nth-child(even) {
            background: var(--ct-light);
        }

        .ct-section-title {
            font-family: 'EB Garamond', 'Garamond', serif;
            font-size: 32px;
            color: var(--ct-navy);
            text-transform: uppercase;
            text-align: center;
            margin: 0 0 10px;
            position: relative;
        }

        .ct-section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--ct-sky);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .ct-section-sub {
            text-align: justify;
            color: #4a6785;
            font-size: 15px;
            line-height: 1.7;
            max-width: 700px;
            margin: 8px auto 32px;
            font-style: italic;
        }

        /* ── Card chung ── */
        .ct-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(16, 49, 79, .07);
            overflow: hidden;
            transition: transform .3s, box-shadow .3s;
        }

        .ct-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(16, 49, 79, .12);
        }

        /* ── Chương trình học tiêu chuẩn ── */
        .ct-standard {
            display: grid;
            grid-template-columns: .45fr .55fr;
            gap: 48px;
            align-items: start;
        }

        /* Collage ảnh */
        .ct-collage {
            position: relative;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            padding: 20px 0 20px 20px;
        }

        .ct-collage img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 14px;
            display: block;
        }

        .ct-collage img:nth-child(1) {
            border-radius: 14px 14px 14px 40px;
        }

        .ct-collage img:nth-child(4) {
            border-radius: 14px 14px 40px 14px;
        }

        .ct-collage-dots {
            position: absolute;
            bottom: -8px;
            left: 0;
            display: grid;
            grid-template-columns: repeat(5, 10px);
            gap: 6px;
        }

        .ct-collage-dots span {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--ct-sky);
            opacity: .35;
        }

        .ct-collage-dots span:nth-child(odd) {
            opacity: .6;
        }

        .ct-standard-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .ct-standard-body h2 {
            font-family: 'EB Garamond', 'Garamond', serif;
            font-size: 32px;
            color: var(--ct-navy);
            margin: 0 0 28px;
            text-transform: uppercase;
            line-height: 1.25;
        }

        /* Timeline items */
        .ct-timeline {
            position: relative;
            padding-left: 40px;
            margin: 0 0 24px;
        }

        .ct-timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            border-left: 2px dashed var(--ct-sky);
        }

        .ct-timeline-item {
            position: relative;
            margin-bottom: 28px;
        }

        .ct-timeline-item:last-child {
            margin-bottom: 0;
        }

        .ct-timeline-num {
            position: absolute;
            left: -40px;
            top: 0;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--ct-navy);
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .ct-timeline-item h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--ct-navy);
            margin: 4px 0 8px;
        }

        .ct-timeline-item p {
            font-size: 14px;
            color: #3b5068;
            line-height: 1.7;
            margin: 0 0 6px;
            text-align: justify;
        }

        .ct-btn {
            display: inline-block;
            padding: 10px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: .4px;
            transition: all .3s;
        }

        .ct-btn-outline {
            color: var(--ct-blue);
            border: 2px solid var(--ct-blue);
            background: transparent;
            width: 130px
        }

        .ct-btn-outline:hover {
            background: var(--ct-blue);
            color: #fff;
        }

        .ct-btn-primary {
            color: #fff;
            background: var(--ct-blue);
            border: 2px solid var(--ct-blue);
        }

        .ct-btn-primary:hover {
            background: #1d5a9e;
        }

        /* ── Grid 2-col cho ngoại ngữ / khác ── */
        .ct-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .ct-prog-card {
            display: grid;
            grid-template-columns: .4fr .6fr;
            overflow: hidden;
        }

        .ct-prog-card img {
            width: 100%;
            height: 100%;
            min-height: 200px;
            object-fit: cover;
            display: block;
        }

        .ct-prog-body {
            padding: 22px 24px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .ct-prog-body h3 {
            font-size: 18px;
            color: var(--ct-navy);
            margin: 0 0 8px;
            font-weight: 700;
        }

        .ct-prog-body p {
            font-size: 13px;
            color: #4a6785;
            line-height: 1.6;
            margin: 0 0 12px;
            text-align: justify;
        }

        /* ── Banner full-width ── */
        .ct-banner {
            position: relative;
            overflow: hidden;
            min-height: 320px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ct-banner img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ct-banner-overlay {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #fff;
            padding: 40px 20px;
        }

        .ct-banner-overlay h2 {
            font-family: 'EB Garamond', 'Garamond', serif;
            font-size: clamp(28px, 4vw, 48px);
            margin: 0 0 8px;
            text-shadow: 0 2px 12px rgba(0, 0, 0, .4);
        }

        .ct-banner-overlay p {
            font-size: 20px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, .3);
            text-align: justify;
        }

        /* ── STEM section ── */
        .ct-stem-layout {
            display: grid;
            grid-template-columns: .55fr .45fr;
            gap: 32px;
            align-items: start;
        }

        .ct-stem-layout h2 {
            font-family: 'EB Garamond', 'Garamond', serif;
            font-size: 26px;
            color: var(--ct-navy);
            text-transform: uppercase;
            margin: 0 0 14px;
        }

        .ct-stem-layout h3 {
            font-size: 16px;
            color: var(--ct-blue);
            margin: 18px 0 6px;
        }

        .ct-stem-layout p {
            font-size: 14px;
            color: #3b5068;
            line-height: 1.7;
            text-align: justify;
        }

        .ct-stem-img {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .1);
        }

        .ct-stem-img img {
            width: 100%;
            display: block;
        }

        /* ── Kỹ năng mềm banner ── */
        .ct-skills-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 8px;
            border-radius: 16px;
            overflow: hidden;
        }

        .ct-skills-grid>* {
            min-height: 0;
        }

        /* Cell 1: text box top-left */
        .ct-skills-text {
            background: linear-gradient(135deg, var(--ct-navy), #2c5282);
            color: #fff;
            padding: 36px 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 16px;
        }

        .ct-skills-text h2 {
            font-family: 'EB Garamond', 'Garamond', serif;
            font-size: 26px;
            margin: 0 0 14px;
            text-transform: uppercase;
        }

        .ct-skills-text p {
            font-size: 14px;
            line-height: 1.7;
            color: rgba(255, 255, 255, .9);
            margin: 0;
            text-align: justify;
        }

        /* Cell 2: big photo top-right */
        .ct-skills-big {
            border-radius: 16px;
            overflow: hidden;
        }

        .ct-skills-big img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            min-height: 280px;
        }

        /* Cell 3: medium photo bottom-left */
        .ct-skills-med {
            border-radius: 16px;
            overflow: hidden;
        }

        .ct-skills-med img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            min-height: 240px;
        }

        /* Cell 4: 2-photo sub-grid bottom-right */
        .ct-skills-small {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .ct-skills-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 16px;
            min-height: 120px;
        }

        /* ── Ngoại khóa ── */
        .ct-extra-wrap {
            display: grid;
            grid-template-columns: 1fr .4fr;
            gap: 0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(16, 49, 79, .06);
            background: #fff;
            border: 1px solid rgba(67, 155, 212, .16);
        }

        .ct-extra-box {
            padding: 28px 32px;
        }

        .ct-extra-box h3 {
            font-size: 18px;
            color: var(--ct-navy);
            margin: 0 0 10px;
            font-weight: 700;
        }

        .ct-extra-list {
            list-style: disc;
            padding-left: 20px;
            color: #3b5068;
            font-size: 14px;
            line-height: 1.8;
            text-align: justify;
        }

        .ct-extra-img {
            overflow: hidden;
        }

        .ct-extra-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ── CLB ── */
        .ct-clb-intro {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, .16);
            border-radius: 16px;
            padding: 24px 32px;
            box-shadow: 0 6px 20px rgba(16, 49, 79, .06);
            margin-bottom: 28px;
        }

        .ct-clb-intro p {
            margin: 0;
            font-size: 15px;
            line-height: 1.8;
            color: #3b5068;
            text-align: justify;
        }

        .ct-clb-intro .ct-clb-time {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 12px;
            background: var(--ct-blue-soft, #eef7ff);
            color: var(--ct-navy, #1a3a5c);
            border-radius: 999px;
            padding: 7px 16px;
            font-size: 13px;
            font-weight: 700;
        }

        .ct-clb-groups {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .ct-clb-group {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, .16);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 22px rgba(16, 49, 79, .08);
        }

        .ct-clb-group-header {
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .ct-clb-group-header .ct-clb-icon {
            font-size: 28px;
            line-height: 1;
        }

        .ct-clb-group-header h3 {
            margin: 0;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .04em;
            line-height: 1.3;
        }

        .ct-clb-group:nth-child(1) .ct-clb-group-header {
            background: linear-gradient(120deg, #1a3a5c, #2354a0);
            color: #fff;
        }

        .ct-clb-group:nth-child(2) .ct-clb-group-header {
            background: linear-gradient(120deg, #2354a0, #439bd4);
            color: #fff;
        }

        .ct-clb-group:nth-child(3) .ct-clb-group-header {
            background: linear-gradient(120deg, #439bd4, #4db0e4);
            color: #fff;
        }

        .ct-clb-group ul {
            list-style: none;
            padding: 16px 20px;
            margin: 0;
            display: grid;
            gap: 8px;
        }

        .ct-clb-group li {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #2c4963;
            font-weight: 600;
        }

        .ct-clb-group li::before {
            content: '';
            width: 7px;
            height: 7px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .ct-clb-group:nth-child(1) li::before {
            background: #2354a0;
        }

        .ct-clb-group:nth-child(2) li::before {
            background: #439bd4;
        }

        .ct-clb-group:nth-child(3) li::before {
            background: #4db0e4;
        }

        .ct-clb-note {
            background: #fffbeb;
            border: 1px solid #fcd34d;
            border-radius: 12px;
            padding: 14px 20px;
            font-size: 13px;
            color: #78350f;
            line-height: 1.7;
        }

        .ct-clb-note strong {
            color: #92400e;
        }

        @media (max-width: 900px) {
            .ct-clb-groups {
                grid-template-columns: 1fr;
            }
        }

        /* ── Tin tức slider ── */
        .ct-news-section {
            padding: 56px 0 40px;
            margin-bottom: 115px;
        }

        .ct-news-title {
            font-family: 'EB Garamond', 'Garamond', serif;
            font-size: 32px;
            font-weight: 700;
            color: var(--ct-navy);
            text-transform: uppercase;
            margin-bottom: 36px;
            text-align: center;
        }

        /* ── Slider cards ── */
        .ts-news-slider {
            margin: 0 -12px;
        }

        .ts-news-slider .slick-slide {
            padding: 0 12px;
        }

        .ts-news-slider .slick-list {
            overflow: hidden;
        }

        .ts-news-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(23, 52, 93, .08);
            transition: transform .3s, box-shadow .3s;
        }

        .ts-news-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 36px rgba(23, 52, 93, .14);
        }

        .ts-news-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .ts-news-card-body {
            padding: 20px 22px 24px;
        }

        .ts-news-card-body h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--ct-navy);
            line-height: 1.5;
            margin: 0 0 16px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .ts-news-link {
            font-size: 14px;
            font-weight: 600;
            color: var(--ct-sky);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .ts-news-link span {
            font-size: 18px;
        }

        .ts-news-slider .slick-prev,
        .ts-news-slider .slick-next {
            width: 44px;
            height: 44px;
            z-index: 2;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 2px 12px rgba(23, 52, 93, .15);
        }

        .ts-news-slider .slick-prev:hover,
        .ts-news-slider .slick-next:hover {
            background: var(--ct-sky);
        }

        .ts-news-slider .slick-prev {
            left: -22px;
        }

        .ts-news-slider .slick-next {
            right: -22px;
        }

        .ts-news-slider .slick-prev:before,
        .ts-news-slider .slick-next:before {
            color: var(--ct-navy);
            font-size: 20px;
            opacity: 1;
        }

        .ts-news-slider .slick-prev:hover:before,
        .ts-news-slider .slick-next:hover:before {
            color: #fff;
        }

        .ts-news-slider .slick-dots {
            bottom: -40px;
        }

        .ts-news-slider .slick-dots li button:before {
            font-size: 10px;
            color: #c5d3e0;
            opacity: 1;
        }

        .ts-news-slider .slick-dots li.slick-active button:before {
            color: var(--ct-sky);
        }

        /* ── Responsive ── */
        @media (max-width: 992px) {

            .ct-standard,
            .ct-stem-layout,
            .ct-extra-wrap {
                grid-template-columns: 1fr;
            }

            .ct-skills-grid {
                grid-template-columns: 1fr 1fr;
            }

            .ct-collage {
                max-width: 480px;
            }

            .ct-grid-2 {
                grid-template-columns: 1fr;
            }

            .ct-prog-card {
                grid-template-columns: .35fr .65fr;
            }

            .ct-cta-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .ct-cta-text>div {
                justify-content: center;
                flex-wrap: wrap;
            }

            .ct-cta-actions {
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .ct-prog-card {
                display: block;
            }

            .ct-prog-card img {
                height: auto;
                width: 100%;
                min-height: 180px;
            }

            .ct-prog-body {
                background: #fff;
                position: relative;
                z-index: 1;
            }

            .ct-collage img {
                height: 140px;
            }

            .ct-skills-grid {
                grid-template-columns: 1fr;
            }

            .ct-skills-small {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content ct-page">

        <!-- ═══ HERO ═══ -->
        <section class="ct-hero">
            <div class="ct-wrap" data-aos="fade-up">
                <ol class="ct-breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li>Chương trình đào tạo</li>
                </ol>
                <h1>Chương trình đào tạo</h1>
                <p>Chương trình giáo dục toàn diện, kết hợp chuẩn Bộ GD&ĐT với định hướng hội nhập quốc tế, giúp học
                    sinh phát triển cân bằng về tri thức, kỹ năng và nhân cách.</p>
            </div>
        </section>

        <!-- ═══ CHƯƠNG TRÌNH HỌC TIÊU CHUẨN ═══ -->
        <section class="ct-section">
            <div class="ct-wrap">
                <div class="ct-standard" data-aos="fade-up">
                    <div class="ct-collage">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09926.jpg" alt="Học sinh trong lớp">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09909.jpg" alt="Học sinh đọc sách">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09890.jpg" alt="Hoạt động nhóm">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09948.jpg" alt="Học sinh viết bài">
                        <div class="ct-collage-dots">
                            <span></span><span></span><span></span><span></span><span></span>
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                    <div class="ct-standard-body">
                        <h2>Chương trình học<br>tiêu chuẩn</h2>

                        <div class="ct-timeline">
                            <div class="ct-timeline-item">
                                <div class="ct-timeline-num">1</div>
                                <h3>Chương trình tiêu chuẩn theo bộ giáo dục</h3>
                                <p style="text-align:justify;">Các em học sinh có thể tự tin chuyên cấp trong hệ thống, hoặc thi vào các trường
                                    chuyên, công lập, ngoài công lập, song ngữ và quốc tế.</p>
                            </div>
                            <div class="ct-timeline-item">
                                <div class="ct-timeline-num">2</div>
                                <h3>Chương trình bổ trợ nâng cao Toán, Tiếng Việt</h3>
                                <p>Hệ thống bài tập bổ trợ, nâng cao môn Toán và Tiếng Việt từ lớp 1 đến lớp 5.</p>
                                <p style="text-align:justify;">Chương trình Toán online VioEdu của FPT tích hợp các nội dung cơ bản và nâng cao
                                    trong chương trình Toán của Bộ GD&ĐT thành các bài tập trắc nghiệm, trò chơi, các
                                    bài kiểm tra online giúp học sinh có thể học toán mọi nơi. Chương trình được triển
                                    khai đồng bộ cho các khối lớp 1-2-4-5.</p>
                                <p style="text-align:justify;">Chương trình Toán Tư duy Eduten Playground được xây dựng bởi các chuyên gia Phần Lan
                                    trên cơ sở chuẩn kiến thức kỹ năng của Toán Quốc tế được áp dụng rộng rãi trên thế
                                    giới. Chương trình được triển khai đồng bộ cho khối lớp 3.</p>
                            </div>
                        </div>

                        <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ CHƯƠNG TRÌNH NGOẠI NGỮ ═══ -->
        <section class="ct-section">
            <div class="ct-wrap">
                <h2 class="ct-section-title" data-aos="fade-up">Chương trình ngoại ngữ</h2>
                <p class="ct-section-sub" data-aos="fade-up">Chương trình tiêu chuẩn theo Bộ giáo dục</p>

                <div class="ct-grid-2" data-aos="fade-up">
                    <div class="ct-card ct-prog-card">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09890.jpg" alt="Chương trình Ngoại ngữ">
                        <div class="ct-prog-body">
                            <h3>Chương trình Ngoại ngữ</h3>
                            <p>Chương trình Ngoại ngữ tại trường Đoàn Thị Điểm – Hà Nội được xây dựng gắn liền với mục
                                tiêu của Chương trình giáo dục phổ thông với chuẩn đầu ra theo từng cấp lớp.</p>
                            <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                        </div>
                    </div>
                    <!-- <div class="ct-card ct-prog-card">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09909.jpg" alt="Chương trình tiếng Pháp tăng cường">
                        <div class="ct-prog-body">
                            <h3>Chương trình tiếng Pháp tăng cường</h3>
                            <p>Chương trình tiếng Pháp cung cấp đa dạng giảng viên, giảng dạy theo chuẩn trình độ Giáo
                                dục Đào Tạo.</p>
                            <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                        </div>
                    </div> -->
                    <div class="ct-card ct-prog-card">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09948.jpg" alt="Chương trình tiếng Anh tăng cường">
                        <div class="ct-prog-body">
                            <h3>Chương trình tiếng Anh tăng cường</h3>
                            <p>Chương trình tiếng Anh tăng cường được giảng dạy bởi các giáo viên người nước ngoài có
                                chứng chỉ trình độ quốc tế.</p>
                            <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                        </div>
                    </div>
                    <!-- <div class="ct-card ct-prog-card">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09961.jpg"
                            alt="Chương trình liên kết Việt Nam – Cambridge & Oxford">
                        <div class="ct-prog-body">
                            <h3>Chương trình liên kết Việt Nam – Cambridge &amp; Oxford</h3>
                            <p>Chương trình giúp các bậc phụ huynh mở ra cánh cửa hội nhập quốc tế cho con em mình.</p>
                            <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <!-- ═══ BANNER TÀI NĂNG NHÍ ═══ -->
        <section class="ct-banner" data-aos="zoom-in">
            <img src="assets/img/chan-dung-hoc-sinh/thư viện.jpg" alt="Tài năng nhí yêu khoa học">
            <div class="ct-banner-overlay">
                <h2>Tài năng nhí yêu khoa học<br>Chinh phục vũ trụ tương lai</h2>
            </div>
        </section>

        <!-- ═══ CHƯƠNG TRÌNH STEM ═══ -->
        <section class="ct-section">
            <div class="ct-wrap">
                <h2 class="ct-section-title" data-aos="fade-up">Chương trình STEM</h2>
                <div class="ct-stem-layout" data-aos="fade-up" style="margin-top:28px;">
                    <div>
                        <h3>Giáo dục STEM là gì?</h3>
                        <p style="text-align:justify;">Giáo dục STEM là cách tiếp cận liên ngành trong quá trình học, trong đó các khái niệm học
                            thuật mang tính nguyên tắc được lồng ghép với bài học trong thế giới thực. Bao Trùm giữa các
                            lĩnh vực khoa học, công nghệ, kỹ thuật và toán học.</p>

                        <h3>Chương trình Giáo dục STEM tại Tiểu học Đoàn Thị Điểm</h3>
                        <p style="text-align:justify;">Chương trình STEM tại trường được thực hiện theo phương pháp Giáo dục STEM với mục tiêu giúp
                            học sinh tiếp cận, tìm hiểu khoa học qua VR (thực tế ảo), làm thí nghiệm, quan sát, trải
                            nghiệm thực hành trong các lĩnh vực khoa học tự nhiên.</p>
                        <a href="javascript:void(0)" class="ct-btn ct-btn-outline" style="margin-top:14px;">Xem
                            thêm</a>
                    </div>
                    <div class="ct-stem-img">
                        <img src="assets/img/chuong-trinh-dao-tao/chuong-trinh-stem/stem.jpg" alt="STEM tại Meyschool">
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ CHƯƠNG TRÌNH KHÁC ═══ -->
        <section class="ct-section">
            <div class="ct-wrap">
                <h2 class="ct-section-title" data-aos="fade-up">Chương trình khác</h2>
                <div class="ct-grid-2" data-aos="fade-up" style="margin-top:28px;">
                    <div class="ct-card ct-prog-card">
                        <img src="assets/img/chuong-trinh-dao-tao/TUN09605.jpg" alt="Chương trình phát triển thể chất">
                        <div class="ct-prog-body">
                            <h3>Chương trình phát triển thể chất và năng khiếu nghệ thuật</h3>
                            <p>Chương trình phát triển thể chất và nghệ thuật được xây dựng với mục tiêu phát triển toàn
                                diện cho học sinh.</p>
                            <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                        </div>
                    </div>
                    <div class="ct-card ct-prog-card">
                        <img src="assets/img/TUN00142.jpg" alt="Chương trình Tin học và Công nghệ">
                        <div class="ct-prog-body">
                            <h3>Chương trình Tin học và Công nghệ (ICT)</h3>
                            <p>Tích hợp khoa học với các giá trị phát triển và ứng dụng công nghệ thông tin vào giáo
                                dục.</p>
                            <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                        </div>
                    </div>
                    <div class="ct-card ct-prog-card">
                        <img src="assets/img/chuong-trinh-dao-tao/chuong-trinh-LIM/TUN07466.jpg"
                            alt="Chương trình LiM – Leader in Me">
                        <div class="ct-prog-body">
                            <h3>Chương trình LiM – Leader in Me (Lãnh đạo Bản thân)</h3>
                            <p>Chương trình lãnh đạo bản thân giúp học sinh phát triển kỹ năng sống và tinh thần khởi
                                nghiệp.</p>
                            <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                        </div>
                    </div>
                    <div class="ct-card ct-prog-card">
                        <img src="assets/img/chuong-trinh-dao-tao/chuong-trinh-giao-lul-hop-tac-quoc-te/chuong-trinh-trai-he.jpeg"
                            alt="Chương trình Trại hè">
                        <div class="ct-prog-body">
                            <h3>Chương trình Trại hè, Trao đổi Giao lưu và Hợp tác Quốc tế</h3>
                            <p>Chương trình hợp tác quốc tế, đưa thanh thiếu niên ra thế giới và mang bạn bè quốc tế về
                                trường.</p>
                            <a href="javascript:void(0)" class="ct-btn ct-btn-outline">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ PHÁT TRIỂN KỸ NĂNG MỀM ═══ -->
        <section class="ct-section">
            <div class="ct-wrap">
                <div class="ct-skills-grid" data-aos="fade-up">
                    <!-- Top-left: text -->
                    <div class="ct-skills-text">
                        <h2>Phát triển kỹ năng mềm</h2>
                        <p style="text-align:justify;">Chương trình phát triển thể chất và nghệ thuật được xây dựng theo hệ thống với sự hỗ trợ của
                            các tổ chức thể thao uy tín như Liên đoàn bóng đá Nauy, Bóng đá cộng đồng Việt Nam, Nike,
                            các dự án phát triển chương trình và đào tạo giáo viên của bộ GD và ĐT</p>
                    </div>
                    <!-- Top-right: big photo -->
                    <div class="ct-skills-big">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09926.jpg" alt="Giáo viên và học sinh">
                    </div>
                    <!-- Bottom-left: medium photo -->
                    <div class="ct-skills-med">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09890.jpg" alt="Hoạt động thực hành">
                    </div>
                    <!-- Bottom-right: 2 small photos -->
                    <div class="ct-skills-small">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09909.jpg" alt="Hoạt động nhóm">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09948.jpg" alt="Lớp học tiếng Anh">
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ CHƯƠNG TRÌNH NGOẠI KHÓA ═══ -->
        <section class="ct-section">
            <div class="ct-wrap">
                <h2 class="ct-section-title" data-aos="fade-up">Chương trình ngoại khóa</h2>
                <div class="ct-extra-wrap" data-aos="fade-up" style="margin-top:28px;">
                    <div class="ct-extra-box">
                        <h3>Chương trình ngoại khóa, trải nghiệm, sáng tạo</h3>
                        <p style="font-size:14px;color:#3b5068;line-height:1.7;margin-bottom:14px; text-align:justify;">Hoạt động ngoại
                            khóa,
                            trải nghiệm và sáng tạo là một cấu phần quan trọng trong hoạt động giảng dạy của Nhà trường.
                            Các
                            hoạt động ngoại khóa giúp học sinh:</p>
                        <ul class="ct-extra-list">
                            <li>Trải nghiệm và khám phá thực tế để ứng dụng những kiến thức đã học trong chương trình và
                                nội dung môn học</li>
                            <li>Hiểu biết sâu rộng hơn về cộng đồng của mình</li>
                            <li>Phát triển những kỹ năng sống, kỹ năng sáng tạo, kỹ năng xã hội</li>
                            <li>Hình thành những phẩm chất và giá trị cá nhân của công dân thế kỷ 21</li>
                            <li>Xây dựng định hướng nghề nghiệp cho tương lai</li>
                        </ul>
                        <a href="javascript:void(0)" class="ct-btn ct-btn-outline" style="margin-top:16px;">Xem
                            thêm</a>
                    </div>
                    <div class="ct-extra-img">
                        <img src="assets/img/chan-dung-hoc-sinh/thư viện (1).jpg" alt="Hoạt động ngoại khóa">
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ CÂU LẠC BỘ NĂNG KHIẾU ═══ -->
        <section class="ct-section">
            <div class="ct-wrap">
                <h2 class="ct-section-title" data-aos="fade-up">Câu lạc bộ năng khiếu</h2>

                <div class="ct-clb-intro" data-aos="fade-up">
                    <p>Để phát huy tối đa năng khiếu và sở trường cá nhân, đồng thời tận dụng hiệu quả khoảng thời gian
                        cuối giờ học trong lúc chờ cha mẹ đón, nhà trường tổ chức đa dạng các <strong>Câu lạc bộ Năng
                            khiếu</strong>.</p>
                    <div class="ct-clb-time">🕐 Thời gian: 16:35 – 17:55 | Thứ Hai – Thứ Sáu hàng tuần</div>
                </div>

                <div class="ct-clb-gallery" data-aos="fade-up"
                    style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin:32px 0;">
                    <div style="border-radius:12px;overflow:hidden;aspect-ratio:4/3;">
                        <img src="assets/img/chuong-trinh-dao-tao/TUN09621.jpg" alt="CLB Năng khiếu"
                            style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                    <div style="border-radius:12px;overflow:hidden;aspect-ratio:4/3;">
                        <img src="assets/img/chuong-trinh-dao-tao/TUN02870.jpg" alt="CLB Năng khiếu"
                            style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                    <div style="border-radius:12px;overflow:hidden;aspect-ratio:4/3;">
                        <img src="assets/img/chuong-trinh-dao-tao/TUN09637.jpg" alt="CLB Năng khiếu"
                            style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                    <div style="border-radius:12px;overflow:hidden;aspect-ratio:4/3;">
                        <img src="assets/img/chuong-trinh-dao-tao/TUN02892.jpg" alt="CLB Năng khiếu"
                            style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                </div>

                <div class="ct-clb-groups" data-aos="fade-up">
                    <div class="ct-clb-group">
                        <div class="ct-clb-group-header">
                            <span class="ct-clb-icon">⚽</span>
                            <h3>Nhóm CLB<br>Thể thao</h3>
                        </div>
                        <ul>
                            <li>CLB Bóng rổ</li>
                            <li>CLB Bơi</li>
                            <li>CLB Khiêu vũ thể thao</li>
                            <li>CLB Bóng đá</li>
                            <li>CLB Pickleball</li>
                        </ul>
                    </div>
                    <div class="ct-clb-group">
                        <div class="ct-clb-group-header">
                            <span class="ct-clb-icon">🎨</span>
                            <h3>Nhóm CLB<br>Nghệ thuật</h3>
                        </div>
                        <ul>
                            <li>CLB Mĩ thuật</li>
                            <li>CLB Piano</li>
                            <li>CLB Thanh nhạc</li>
                        </ul>
                    </div>
                    <div class="ct-clb-group">
                        <div class="ct-clb-group-header">
                            <span class="ct-clb-icon">🤖</span>
                            <h3>Nhóm CLB Sáng tạo &amp;<br>Phát triển tư duy</h3>
                        </div>
                        <ul>
                            <li>CLB STEM Robotics</li>
                            <li>CLB Cờ vua</li>
                            <li>CLB Lập trình Scratch</li>
                            <li>CLB Toán Soroban Nhật Bản</li>
                        </ul>
                    </div>
                </div>

                <div class="ct-clb-note" data-aos="fade-up" style="text-align:justify;">
                    <strong>Lưu ý:</strong> Các câu lạc bộ được tổ chức theo khóa học. Nhà trường có thể tạm dừng nhận
                    học sinh hoặc hủy lớp nếu số lượng đăng ký không đủ để mở lớp hoặc vượt quá khả năng đáp ứng về cơ
                    sở vật chất và đội ngũ giáo viên.
                </div>
            </div>
        </section>

    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script>
        $(document).ready(function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 700,
                    once: true
                });
            }

            if ($('.ts-news-slider').length && typeof $.fn.slick === 'function') {
                $(".ts-news-slider").slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: true,
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    prevArrow: '<button class="slick-prev"><span>&#10094;</span></button>',
                    nextArrow: '<button class="slick-next"><span>&#10095;</span></button>',
                    responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }]
                });
            }
        });
    </script>
</body>

</html>