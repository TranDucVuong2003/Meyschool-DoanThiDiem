<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Tuyển sinh Tiểu học - Meyschool Đoàn Thị Điểm</title>
    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
    <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
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
    <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>
    <style>
        nav#admin_bar {
            display: none;
        }

        .jq-toast-wrap {
            display: block;
            position: fixed;
            width: 250px;
            pointer-events: none !important;
            z-index: 9000999999999 !important;
        }

        body.show-admin-bar {
            margin-top: 0 !important;
        }

        .primary-page {
            --navy: #17345d;
            --blue: #1f4b8f;
            --sky: #53a7d8;
            --gold: #f2bf4b;
            --ink: #23374a;
            --muted: #627586;
            --line: rgba(23, 52, 93, 0.1);
            padding-top: 70px;
            background: linear-gradient(180deg, #f4fbff 0%, #fffdf8 100%);
            color: var(--ink);
        }

        .wrap {
            width: min(1180px, calc(100vw - 32px));
            margin: 0 auto;
        }

        .section {
            padding: 36px 0;
        }

        .kicker {
            display: inline-block;
            padding: 9px 15px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .85);
            color: var(--blue);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .12em;
        }

        .hero {
            position: relative;
            overflow: hidden;
            padding: 34px 0 44px;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0 0 auto;
            height: 520px;
            border-radius: 0 0 40px 40px;
            background: linear-gradient(135deg, rgba(23, 52, 93, .94), rgba(31, 75, 143, .9) 55%, rgba(83, 167, 216, .88)), url('assets/banner/banner1.jpeg') center/cover no-repeat;
            box-shadow: 0 24px 60px rgba(15, 38, 67, .22);
        }

        .hero-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 24px;
            align-items: start;
        }

        .hero-copy {
            color: #fff;
            padding: 12px 0 8px;
        }

        .hero-breadcrumb {
            margin: 0 0 14px;
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, .35);
            background: rgba(255, 255, 255, .2);
            position: static !important;
            float: none !important;
            z-index: 2;
        }

        .hero-breadcrumb li,
        .hero-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .3px;
            text-transform: uppercase;
        }

        .hero-breadcrumb li.breadcrumb-item {
            margin-left: 0 !important;
        }

        .hero-breadcrumb li.breadcrumb-item.active {
            color: #fff !important;
            opacity: .96;
        }

        .hero-breadcrumb li.breadcrumb-item:before {
            content: none !important;
            display: none !important;
        }

        .hero-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "\00b7" !important;
            display: inline-block !important;
            float: none !important;
            width: auto !important;
            height: auto !important;
            background: transparent !important;
            color: rgba(255, 255, 255, .92) !important;
            margin: 0 8px 0 2px;
            padding: 0 !important;
            position: static !important;
        }

        .hero-copy h1 {
            margin: 16px 0 14px;
            font-family: 'Garamond', serif;
            font-size: clamp(42px, 5vw, 74px);
            line-height: .98;
            color: #fff;
        }

        .hero-copy p {
            max-width: 700px;
            font-size: 17px;
            line-height: 1.8;
            color: rgba(255, 255, 255, .88);
        }


        .ad-hero {
            position: relative;
            overflow: hidden;
            padding: 96px 0 58px;
            background: linear-gradient(130deg, rgba(67, 155, 212, 0.95) 0%, rgba(77, 176, 228, 0.9) 68%, rgba(77, 176, 228, 0.84) 100%), url('assets/img/tuyensinh/tuyển sinh chung.jpg') center/cover no-repeat;
        }

        .ad-hero::before,
        .ad-hero::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .ad-hero::before {
            width: 360px;
            height: 360px;
            right: -130px;
            top: -120px;
            background: rgba(255, 255, 255, 0.2);
        }

        .ad-hero::after {
            width: 260px;
            height: 260px;
            left: -90px;
            bottom: -110px;
            background: rgba(255, 255, 255, 0.12);
        }

        .ad-hero-inner {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(280px, 0.8fr);
            gap: 24px;
            align-items: start;
        }

        .ad-breadcrumb {
            margin: 0 0 14px;
            display: inline-flex;
            flex-wrap: wrap;
            gap: 8px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 999px;
            padding: 8px 16px;
            position: static !important;
        }

        .ad-breadcrumb li,
        .ad-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            position: static !important;
        }

        .ad-hero h1 {
            margin: 0;
            color: #fff;
            font-size: clamp(34px, 4.2vw, 58px);
            line-height: 1.08;
            font-family: 'Garamond', serif;
            max-width: 980px;
        }

        .ad-hero-visual {
            position: relative;
            min-height: 320px;
        }

        .ad-photo {
            position: absolute;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 16px 30px rgba(20, 61, 95, 0.35);
            border: 2px solid rgba(255, 255, 255, 0.45);
            animation: heroFloat 6s ease-in-out infinite;
        }

        .ad-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .ad-photo.main {
            width: 270px;
            height: 210px;
            right: 20px;
            top: 18px;
            z-index: 3;
        }

        .ad-photo.sub-1 {
            width: 210px;
            height: 160px;
            left: 18px;
            bottom: 24px;
            transform: rotate(-6deg);
            z-index: 2;
            animation-delay: 1.1s;
        }

        .ad-photo.sub-2 {
            width: 160px;
            height: 120px;
            right: 12px;
            bottom: 8px;
            transform: rotate(7deg);
            z-index: 4;
            animation-delay: 2s;
        }

        .hero-pill {
            position: absolute;
            top: -4px;
            left: 0;
            z-index: 5;
            background: rgba(255, 255, 255, 0.9);
            color: #2b7eb6;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.35px;
            text-transform: uppercase;
            padding: 8px 12px;
            box-shadow: 0 10px 18px rgba(20, 61, 95, 0.22);
        }

        @keyframes heroFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 26px;
        }

        .btn-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 52px;
            padding: 0 22px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
        }

        .btn-gold {
            color: var(--navy);
            background: var(--gold);
        }

        .btn-outline {
            color: #fff;
            border: 1px solid rgba(255, 255, 255, .34);
            background: rgba(255, 255, 255, .08);
        }

        .hero-card,
        .card,
        .quote,
        .cta-panel {
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 38px rgba(23, 52, 93, .1);
        }

        .hero-card {
            background: rgba(255, 255, 255, .9);
            padding: 20px;
        }

        .hero-photo {
            border-radius: 22px;
            overflow: hidden;
            min-height: 280px;
        }

        .hero-photo img,
        .media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-mini {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 14px;
        }

        .hero-mini div {
            padding: 16px 14px;
            border-radius: 18px;
            background: #fff;
            border: 1px solid var(--line);
        }

        .hero-mini b {
            display: block;
            margin-bottom: 8px;
            font-size: 26px;
            color: var(--blue);
        }

        .hero-mini span {
            font-size: 13px;
            line-height: 1.6;
            color: var(--muted);
        }

        .anchor-bar {
            position: sticky;
            top: 78px;
            z-index: 20;
            margin-top: -8px;
        }

        .anchor-inner {
            display: flex;
            gap: 10px;
            padding: 12px;
            overflow-x: auto;
            border-radius: 22px;
            background: rgba(255, 255, 255, .9);
            border: 1px solid var(--line);
            box-shadow: 0 12px 28px rgba(23, 52, 93, .08);
        }

        .anchor-inner a {
            flex: 0 0 auto;
            padding: 10px 15px;
            border-radius: 999px;
            background: #eef4fb;
            color: var(--blue);
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
        }

        .split {
            display: grid;
            grid-template-columns: .95fr 1.05fr;
            gap: 24px;
            align-items: stretch;
        }

        .media {
            min-height: 100%;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 18px 34px rgba(23, 52, 93, .12);
        }

        .quote {
            padding: 34px;
            background: linear-gradient(180deg, #ffffff, #f8fbfd);
            border: 1px solid var(--line);
        }

        .quote h2,
        .section-head h2,
        .cta-panel h2 {
            margin: 12px 0 14px;
            font-family: 'Garamond', serif;
            font-size: clamp(34px, 4vw, 52px);
            line-height: 1.05;
            color: var(--navy);
        }

        .quote p,
        .section-head p,
        .step p,
        .info-card li,
        .capability p,
        .cta-panel p {
            font-size: 15px;
            line-height: 1.8;
            color: var(--muted);
        }

        .signature {
            margin-top: 24px;
            padding-top: 18px;
            border-top: 1px solid var(--line);
            font-size: 14px;
            color: var(--navy);
        }

        .section-head {
            max-width: 760px;
            margin-bottom: 24px;
        }

        .story-grid,
        .info-grid,
        .steps,
        .capability-grid,
        .gallery {
            display: grid;
            gap: 18px;
        }

        .story-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .story {
            position: relative;
            min-height: 350px;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 18px 34px rgba(18, 41, 69, .12);
        }

        .story::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(20, 43, 74, .05), rgba(20, 43, 74, .84));
        }

        .story img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .story-copy {
            position: absolute;
            inset: auto 0 0;
            z-index: 1;
            padding: 24px;
            color: #fff;
        }

        .story-copy span {
            display: inline-block;
            margin-bottom: 10px;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .16);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
        }

        .story-copy h3 {
            margin: 0 0 10px;
            font-family: 'Garamond', serif;
            font-size: 28px;
            color: #fff;
        }

        .story-copy p {
            color: rgba(255, 255, 255, .84);
        }

        .info-grid {
            grid-template-columns: repeat(4, 1fr);
        }

        .info-card,
        .step,
        .capability,
        .policy-box,
        .gallery .card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 26px;
            box-shadow: 0 16px 30px rgba(23, 52, 93, .07);
        }

        .info-card {
            padding: 24px;
        }

        .info-card em {
            display: inline-flex;
            width: 46px;
            height: 46px;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-style: normal;
            font-size: 21px;
            color: var(--blue);
            background: #edf4fb;
        }

        .info-card h3,
        .step h3,
        .capability h3,
        .policy-box h3,
        .contact-card h3 {
            margin: 18px 0 10px;
            font-family: 'Garamond', serif;
            font-size: 24px;
            color: var(--navy);
        }

        .info-card ul {
            margin: 0;
            padding-left: 18px;
        }

        .capability-wrap,
        .policy-grid,
        .cta-grid {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 22px;
        }

        .capability-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .capability {
            padding: 24px;
            background: linear-gradient(180deg, #fff, #f7fbff);
        }

        .capability-label {
            display: inline-block;
            margin-bottom: 14px;
            padding: 7px 11px;
            border-radius: 999px;
            background: #edf5fb;
            color: var(--blue);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .steps {
            grid-template-columns: repeat(4, 1fr);
            position: relative;
        }

        .step {
            padding: 24px;
            position: relative;
        }

        .step-number {
            display: inline-flex;
            width: 58px;
            height: 58px;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            background: linear-gradient(135deg, var(--blue), var(--sky));
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .policy-box {
            padding: 28px;
        }

        .policy-box ul {
            margin: 16px 0 0;
            padding-left: 18px;
        }

        .policy-table {
            display: grid;
            gap: 12px;
            margin-top: 16px;
        }

        .policy-row {
            display: grid;
            grid-template-columns: 142px 1fr;
            gap: 12px;
            padding: 16px 18px;
            border-radius: 18px;
            background: #f6f9fc;
        }

        .policy-row strong {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: .04em;
            color: var(--blue);
        }

        .policy-row span {
            font-size: 14px;
            line-height: 1.8;
            color: var(--muted);
        }

        .gallery {
            grid-template-columns: 1.05fr .95fr;
        }

        .gallery-main,
        .gallery-stack {
            display: grid;
            gap: 18px;
        }

        .gallery-main .card {
            min-height: 360px;
        }

        .gallery-stack {
            grid-template-columns: repeat(2, 1fr);
        }

        .gallery-stack .card:first-child {
            grid-column: span 2;
            min-height: 220px;
        }

        .gallery-stack .card:nth-child(2),
        .gallery-stack .card:nth-child(3) {
            min-height: 190px;
        }

        .gallery .card {
            overflow: hidden;
        }

        #footer,
        #footer .footer {
            margin-top: 0;
        }

        @media (max-width: 1100px) {

            .hero-grid,
            .ad-hero-inner,
            .split,
            .capability-wrap,
            .policy-grid,
            .gallery {
                grid-template-columns: 1fr;
            }

            .ad-hero {
                padding: 84px 0 54px;
            }

            .ad-hero-visual {
                margin-top: 18px;
            }

            .story-grid {
                grid-template-columns: 1fr;
            }

            .info-grid,
            .steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 860px) {
            .hero::before {
                height: 600px;
                border-radius: 0 0 28px 28px;
            }

            .ad-hero {
                padding: 65px 0 46px;
            }

            .ad-hero-visual {
                min-height: 280px;
            }

            .ad-photo.main {
                width: 240px;
                height: 190px;
                right: 8px;
            }

            .ad-photo.sub-1 {
                width: 180px;
                height: 138px;
                left: 8px;
            }

            .ad-photo.sub-2 {
                width: 136px;
                height: 100px;
            }

            .hero-mini,
            .info-grid,
            .steps,
            .capability-grid,
            .gallery-stack {
                grid-template-columns: 1fr;
            }

            .policy-row {
                grid-template-columns: 1fr;
            }

            .anchor-bar {
                top: 70px;
            }

            #footer {
                padding-top: 32px;
            }

            #footer .footer {
                padding-top: 96px;
            }
        }

        @media (max-width: 640px) {
            .primary-page {
                padding-top: 64px;
            }

            .section {
                padding: 28px 0;
            }

            .hero-copy p,
            .quote p,
            .section-head p {
                font-size: 14px;
            }

            .story {
                min-height: 300px;
            }
        }

        .ts-banner-slider {
            position: relative;
            padding-top: 18px;
        }

        .ts-banner-slider img {
            width: 100%;
            display: block;
        }

        .ts-banner-slider .rcl-prev,
        .ts-banner-slider .rcl-next {
            top: 50%;
            transform: translateY(-50%);
        }

        .ts-banner-slider .rcl-prev {
            left: 15px;
            transform: translateY(-50%) scaleX(-1);
        }

        .ts-banner-slider .rcl-next {
            right: 15px;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content primary-page">
        <section class="ts-banner-slider">
            <div class="ts-banner-slide"><img src="assets/img/tuyensinh/banner5.jpg"
                    alt="Mey School Đoàn Thị Điểm Phú Quốc Tuyển Sinh 2026-2027"></div>
            <div class="ts-banner-slide"><img src="assets/img/tuyensinh/banner4.jpg"
                    alt="Câu Lạc Bộ Tuổi Thơ - Hành Trang Vào Lớp 1"></div>
        </section>

        <!-- Giới thiệu Chương trình Tiểu học -->
        <section style="padding:52px 0 40px;background:linear-gradient(180deg,#f4fbff 0%,#fff 100%);">
            <div class="wrap" style="max-width:1100px;margin:0 auto;padding:0 20px;">
                <div data-aos="fade-up" style="background:#fff;border-radius:20px;border:1px solid rgba(67,155,212,.18);box-shadow:0 12px 28px rgba(16,49,79,.08);padding:32px 36px 28px;">
                    <h2 style="font-family:'Garamond',serif;font-size:32px;color:#1f5f8e;margin:0 0 14px;">Giới thiệu Chương trình Tiểu học Meyschool Đoàn Thị Điểm</h2>
                    <p style="font-size:16px;line-height:1.8;color:#3f6070;margin:0 0 24px;">Chương trình Tiểu học Meyschool Đoàn Thị Điểm được xây dựng theo định hướng hiện đại, kết hợp Chương trình GDPT 2018 với chương trình nhà trường, mang đến môi trường học tập cân bằng giữa kiến thức – kỹ năng – trải nghiệm. Học sinh được nuôi dưỡng nền tảng vững chắc, phát triển tư duy, sự tự tin và niềm yêu thích học tập ngay từ những năm đầu đời.</p>

                    <h3 style="font-size:20px;font-weight:700;color:#1f5f8e;margin:0 0 16px;">Các hệ học Tiểu học</h3>
                    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;">
                        <div style="border:1px solid rgba(67,155,212,.22);border-radius:14px;padding:20px 22px;background:linear-gradient(120deg,#f4fbff 0%,#eaf7ff 100%);">
                            <div style="display:inline-flex;align-items:center;gap:8px;margin-bottom:10px;">
                                <span style="background:#439bd4;color:#fff;font-size:12px;font-weight:700;padding:4px 12px;border-radius:999px;text-transform:uppercase;letter-spacing:.4px;">Hệ 1</span>
                                <strong style="font-size:16px;color:#1f5f8e;">Tăng cường Tiếng Anh</strong>
                            </div>
                            <p style="margin:0;font-size:14px;line-height:1.75;color:#3f607a;">Chương trình chuẩn của Bộ GD&amp;ĐT kết hợp tăng cường Tiếng Anh và các hoạt động kỹ năng. Học sinh phát triển nền tảng kiến thức vững vàng, khả năng giao tiếp và sự tự tin trong học tập.</p>
                        </div>
                        <div style="border:1px solid rgba(67,155,212,.22);border-radius:14px;padding:20px 22px;background:linear-gradient(120deg,#f4fbff 0%,#eaf7ff 100%);">
                            <div style="display:inline-flex;align-items:center;gap:8px;margin-bottom:10px;">
                                <span style="background:#2354a0;color:#fff;font-size:12px;font-weight:700;padding:4px 12px;border-radius:999px;text-transform:uppercase;letter-spacing:.4px;">Hệ 2</span>
                                <strong style="font-size:16px;color:#1f5f8e;">Tích hợp Quốc tế (Cambridge)</strong>
                            </div>
                            <p style="margin:0;font-size:14px;line-height:1.75;color:#3f607a;">Kết hợp chương trình Việt Nam với chương trình quốc tế Cambridge, giúp học sinh phát triển tư duy song ngữ, năng lực học tập toàn cầu và khả năng hội nhập sớm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="wrap">
                <div class="hero-card" data-aos="fade-up">
                    <div class="hero-photo">
                        <img src="assets/img/tuyensinh/tuyển sinh chung.jpg"
                            alt="Meyschool Đoàn Thị Điểm Tuyển Sinh 2026-2027" style="width:100%;display:block;">
                    </div>
                </div>
                <div class="hero-card" data-aos="fade-up">
                    <div class="hero-photo">
                        <img src="assets/img/tuyensinh/thông tin tuyển sinh.jpg"
                            alt="Thông tin tuyển sinh năm học 2026-2027" style="width:100%;display:block;">
                    </div>
                </div>
                <div class="hero-card" data-aos="fade-up">
                    <div class="hero-photo">
                        <img src="assets/img/tuyensinh/thông tin tuyển sinh 2.jpg" alt="Hướng dẫn đăng ký tuyển sinh"
                            style="width:100%;display:block;">
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Tin tức Tuyển sinh -->
        <section class="ts-news-section" style="padding:60px 0 40px; margin-bottom: 115px;">
            <div class="wrap">
                <h2 class="ts-news-title"
                    style="font-family:'EB Garamond',serif;font-size:36px;font-weight:700;color:var(--navy);text-transform:uppercase;margin-bottom:36px;text-align:center;">
                    Tin Tức</h2>
                <div class="ts-news-slider">
                    <div class="ts-news-card">
                        <a href="https://hanoimoi.vn/truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-731567.html" target="_blank" rel="noopener" style="display:block;">
                            <img src="assets/img/tin-tuc/ede751688b0805565c19.jpg" alt="Trường TH Đoàn Thị Điểm Hà Nội đón nhận danh hiệu Anh hùng Lao động">
                        </a>
                        <div class="ts-news-card-body">
                            <h3><a href="https://hanoimoi.vn/truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-731567.html" target="_blank" rel="noopener">Trường TH Đoàn Thị Điểm - Hà Nội đón nhận danh hiệu Anh hùng Lao động</a></h3>
                            <a href="https://hanoimoi.vn/truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-731567.html" target="_blank" rel="noopener" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="https://giaoduc.net.vn/30-nam-tien-phong-doi-moi-truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-post257603.gd" target="_blank" rel="noopener" style="display:block;">
                            <img src="assets/img/tin-tuc/images.jpg" alt="30 năm tiên phong đổi mới Trường TH Đoàn Thị Điểm">
                        </a>
                        <div class="ts-news-card-body">
                            <h3><a href="https://giaoduc.net.vn/30-nam-tien-phong-doi-moi-truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-post257603.gd" target="_blank" rel="noopener">30 năm tiên phong đổi mới, Trường TH Đoàn Thị Điểm - Hà Nội đón nhận danh hiệu Anh hùng Lao động</a></h3>
                            <a href="https://giaoduc.net.vn/30-nam-tien-phong-doi-moi-truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-post257603.gd" target="_blank" rel="noopener" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="https://nhandan.vn/anh-ngoi-truong-tieu-hoc-anh-hung-lao-dong-o-thu-do-ha-noi-post933413.html" target="_blank" rel="noopener" style="display:block;">
                            <img src="assets/img/tin-tuc/z7369054786972-1a0cb760778270bac2703d36eb1c4ce3.jpg" alt="Ngôi trường tiểu học Anh hùng Lao động ở thủ đô Hà Nội">
                        </a>
                        <div class="ts-news-card-body">
                            <h3><a href="https://nhandan.vn/anh-ngoi-truong-tieu-hoc-anh-hung-lao-dong-o-thu-do-ha-noi-post933413.html" target="_blank" rel="noopener">Ngôi trường tiểu học "Anh hùng Lao động" ở thủ đô Hà Nội</a></h3>
                            <a href="https://nhandan.vn/anh-ngoi-truong-tieu-hoc-anh-hung-lao-dong-o-thu-do-ha-noi-post933413.html" target="_blank" rel="noopener" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="#" style="display:block;">
                            <img src="assets/img/tin-tuc/z7672862397810-589fba3abb7ad0d4017e09b5151bc656.jpg" alt="Trường THCS Đoàn Thị Điểm đón nhận Huân chương Lao động Hạng Nhì">
                        </a>
                        <div class="ts-news-card-body">
                            <h3><a href="#">Trường THCS Đoàn Thị Điểm đón nhận Huân chương Lao động Hạng Nhì</a></h3>
                            <a href="#" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="#" style="display:block;">
                            <img src="assets/img/tin-tuc/3.jpg" alt="Meyschool Đoàn Thị Điểm Phú Quốc tuyển sinh lớp 1 - 8">
                        </a>
                        <div class="ts-news-card-body">
                            <h3><a href="#">Meyschool Đoàn Thị Điểm Phú Quốc tuyển sinh lớp 1 - 8, nhiều học bổng hấp dẫn</a></h3>
                            <a href="#" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <style>
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
                    color: var(--navy);
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
                    color: var(--sky);
                    text-decoration: none;
                    display: inline-flex;
                    align-items: center;
                    gap: 4px;
                }

                .ts-news-link span {
                    font-size: 18px;
                }

                /* Arrows */
                .ts-news-slider .slick-prev,
                .ts-news-slider .slick-next {
                    width: 44px;
                    height: 44px;
                    z-index: 2;
                    background: #fff;
                    border-radius: 50%;
                    box-shadow: 0 2px 12px rgba(23, 52, 93, .15);
                    transition: background .25s, box-shadow .25s;
                }

                .ts-news-slider .slick-prev:hover,
                .ts-news-slider .slick-next:hover {
                    background: var(--sky);
                    box-shadow: 0 4px 18px rgba(83, 167, 216, .35);
                }

                .ts-news-slider .slick-prev {
                    left: -22px;
                }

                .ts-news-slider .slick-next {
                    right: -22px;
                }

                .ts-news-slider .slick-prev:before,
                .ts-news-slider .slick-next:before {
                    color: var(--navy);
                    font-size: 20px;
                    opacity: 1;
                }

                .ts-news-slider .slick-prev:hover:before,
                .ts-news-slider .slick-next:hover:before {
                    color: #fff;
                }

                /* Dots */
                .ts-news-slider .slick-dots {
                    bottom: -40px;
                }

                .ts-news-slider .slick-dots li {
                    margin: 0 4px;
                }

                .ts-news-slider .slick-dots li button:before {
                    font-size: 10px;
                    color: #c5d3e0;
                    opacity: 1;
                }

                .ts-news-slider .slick-dots li.slick-active button:before {
                    color: var(--sky);
                }

                @media(max-width:1220px) {
                    .ts-news-slider .slick-prev {
                        left: 4px;
                    }

                    .ts-news-slider .slick-next {
                        right: 4px;
                    }
                }

                @media(max-width:768px) {
                    .ts-news-title {
                        font-size: 28px !important;
                    }

                    .ts-news-card img {
                        height: 180px;
                    }

                    .ts-news-slider .slick-prev,
                    .ts-news-slider .slick-next {
                        width: 36px;
                        height: 36px;
                    }

                    .ts-news-slider .slick-prev:before,
                    .ts-news-slider .slick-next:before {
                        font-size: 16px;
                    }
                }
            </style>
        </section>
    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script>
        $(document).ready(function() {
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
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            $(".ts-banner-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: '<div class="rcl-prev"><img src="olympia/images/button-1-3.svg"></div>',
                nextArrow: '<div class="rcl-next"><img src="olympia/images/button-1-3.svg"></div>',
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                fade: true,
                cssEase: 'linear'
            });
        });
    </script>
    <script>
        AOS.init({
            once: true,
            disable: function() {
                return window.innerWidth < 768;
            }
        });
    </script>
</body>

</html>