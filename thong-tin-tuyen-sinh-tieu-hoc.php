<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1">
    <link rel="shortcut icon" href="storage/favicon.png">
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
            margin-bottom: 170px;
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

        .tq-footer-consult-wrap {
            --tq-consult-half-height: 92px;
            position: relative;
            z-index: 5;
            margin: calc(-1 * var(--tq-consult-half-height)) 20px calc(-1 * var(--tq-consult-half-height));
            background: transparent;
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

            .tq-footer-consult-wrap {
                --tq-consult-half-height: 72px;
                margin: calc(-1 * var(--tq-consult-half-height)) 12px calc(-1 * var(--tq-consult-half-height));
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

        <section class="section">
            <div class="wrap">
                <div class="hero-card" data-aos="fade-up">
                    <div class="hero-photo">
                        <img src="assets/img/tuyensinh/tuyển sinh chung.jpg" alt="Meyschool Đoàn Thị Điểm Tuyển Sinh 2026-2027" style="width:100%;display:block;">
                    </div>
                </div>
                <div class="hero-card" data-aos="fade-up">
                    <div class="hero-photo">
                        <img src="assets/img/tuyensinh/thông tin tuyển sinh.jpg" alt="Thông tin tuyển sinh năm học 2026-2027" style="width:100%;display:block;">
                    </div>
                </div>
                <div class="hero-card" data-aos="fade-up">
                    <div class="hero-photo">
                        <img src="assets/img/tuyensinh/thông tin tuyển sinh 2.jpg" alt="Hướng dẫn đăng ký tuyển sinh" style="width:100%;display:block;">
                    </div>
                </div>
            </div>
        </section>


        <!-- section CTA đăng ký tư vấn -->
        <section id="lien-he" class="tq-footer-consult-wrap">
            <div class="tq-footer-consult-inner">
                <div class="tq-footer-consult-card" data-aos="zoom-in-up">
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

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script>
        $(document).ready(function() {
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