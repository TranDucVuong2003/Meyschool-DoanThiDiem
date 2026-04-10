<?php
require_once __DIR__ . '/includes/site-settings.php';
$ss = load_site_settings();
?>

<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm</title>
    <meta name="description" content="Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm">
    <meta property="og:description" content="Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm">
    <meta property="og:url" content="ban-lanh-dao.html">
    <meta property="og:type" content="article">
    <meta name="twitter:title" content="Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm">
    <meta name="twitter:description" content="Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm">

    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">

    <link rel="alternate" href="en/leadership.html" hreflang="en" />
    <link rel="alternate" href="ban-lanh-dao.html" hreflang="vi" />

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

        body.show-admin-bar {
            margin-top: 0 !important;
        }

        :root {
            --ld-blue-1: #439bd4;
            --ld-blue-2: #4db0e4;
            --ld-blue-3: #eaf7ff;
            --ld-ink: #214762;
        }

        .ld-page {
            background: radial-gradient(circle at 0% 0%, #eaf7ff 0%, #f6fbff 46%, #ffffff 100%);
            color: var(--ld-ink);
        }

        .ld-wrap {
            width: min(95vw, 1520px);
            margin: 0 auto;
        }

        .ld-hero {
            position: relative;
            padding: 110px 0 58px;
            overflow: hidden;
            background: linear-gradient(132deg, rgba(67, 155, 212, 0.95) 0%, rgba(77, 176, 228, 0.92) 72%, rgba(77, 176, 228, 0.84) 100%), url('storage/banner/ve-chung-toi-web.jpg') center/cover no-repeat;
        }

        .ld-hero::before,
        .ld-hero::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
            pointer-events: none;
        }

        .ld-hero::before {
            width: 360px;
            height: 360px;
            top: -120px;
            right: -120px;
        }

        .ld-hero::after {
            width: 230px;
            height: 230px;
            left: -80px;
            bottom: -90px;
        }

        .ld-breadcrumb {
            position: relative;
            left: 0;
            margin: 0 auto 14px 0;
            align-self: flex-start;
            display: inline-flex;
            flex-wrap: wrap;
            gap: 8px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.38);
            border-radius: 999px;
            padding: 8px 16px;
            z-index: 10;
            max-width: 100%;
        }

        .ld-breadcrumb li,
        .ld-breadcrumb li a {
            color: #fff;
            font-size: 13px;
        }

        .ld-hero-grid>div:first-child {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .ld-hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(360px, 0.9fr);
            gap: 24px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .ld-hero h1 {
            margin: 0;
            color: #fff;
            font-family: 'Garamond', serif;
            font-size: clamp(34px, 4.6vw, 62px);
            line-height: 1.06;
            max-width: 860px;
        }

        .ld-hero p {
            margin: 16px 0 0;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.78;
            font-size: 17px;
            max-width: 820px;
        }

        .ld-chips {
            margin-top: 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .ld-chips span {
            display: inline-flex;
            align-items: center;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            padding: 8px 12px;
        }

        .ld-hero-card {
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(67, 155, 212, 0.24);
            border-radius: 22px;
            box-shadow: 0 16px 32px rgba(13, 54, 88, 0.22);
            padding: 12px;
            overflow: hidden;
        }

        .ld-hero-card img {
            width: 100%;
            height: 300px;
            border-radius: 14px;
            object-fit: cover;
            object-position: 50% 22%;
            display: block;
            margin-bottom: 0;
        }

        .ld-hero-metrics {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
        }

        .ld-hero-metrics div {
            border: 1px solid rgba(67, 155, 212, 0.2);
            border-radius: 12px;
            background: #fff;
            padding: 10px;
        }

        .ld-hero-metrics b {
            display: block;
            color: #2d7bb1;
            font-size: 23px;
            margin-bottom: 4px;
        }

        .ld-hero-metrics span {
            color: #4b6f8c;
            font-size: 12px;
            line-height: 1.45;
        }

        .ld-content {
            padding: 40px 0 72px;
            margin-bottom: 100px;
        }

        .ld-layout {
            display: grid;
            grid-template-columns: minmax(0, 1.35fr) minmax(290px, 0.65fr);
            gap: 24px;
        }

        .ld-main {
            display: grid;
            gap: 24px;
        }

        .ld-card,
        .ld-side-card {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.16);
            border-radius: 20px;
            box-shadow: 0 12px 24px rgba(16, 49, 79, 0.08);
            padding: 22px;
        }

        .ld-card h2,
        .ld-side-card h3 {
            margin: 0 0 12px;
            color: #236c9d;
            font-family: 'Garamond', serif;
            font-size: 33px;
            line-height: 1.2;
            padding: 0 !important;
        }

        .ld-card p,
        .ld-card li,
        .ld-side-card p,
        .ld-side-card li {
            color: #3f6686;
            font-size: 15px;
            line-height: 1.76;
        }

        .ld-feature {
            display: grid;
            grid-template-columns: 260px minmax(0, 1fr);
            gap: 16px;
            border: 1px solid rgba(67, 155, 212, 0.22);
            border-radius: 16px;
            padding: 14px;
            background: linear-gradient(120deg, #f4fbff 0%, #eaf7ff 100%);
        }

        .ld-feature img {
            width: 75%;
            height: 260px;
            border-radius: 12px;
            object-fit: contain;
            object-position: center;
            background: #eef5fb;
            display: block;
        }

        .ld-feature h4 {
            margin: 0 0 4px;
            font-size: 24px;
            color: #2d7bb1;
            font-family: 'Garamond', serif;
        }

        .ld-role {
            margin: 0 0 10px;
            color: #4f7a9c;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .ld-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }

        .ld-tags span {
            border-radius: 999px;
            border: 1px solid rgba(67, 155, 212, 0.26);
            background: #fff;
            color: #2d7bb1;
            font-size: 12px;
            font-weight: 700;
            padding: 6px 10px;
        }

        .ld-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 12px;
        }

        .ld-member {
            border: 1px solid rgba(67, 155, 212, 0.2);
            border-radius: 14px;
            overflow: hidden;
            background: #fff;
        }

        .ld-member img {
            width: 100%;
            height: 340px;
            object-fit: contain;
            object-position: center;
            background: #eef5fb;
            display: block;
        }

        .ld-member-body {
            padding: 12px;
        }

        .ld-member h5 {
            margin: 0 0 4px;
            color: #2f79ad;
            font-size: 18px;
            font-family: 'Garamond', serif;
        }

        .ld-member small {
            display: block;
            color: #5f7f99;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            margin-bottom: 6px;
        }

        .ld-member p {
            margin: 0;
            font-size: 14px;
            line-height: 1.65;
        }

        .ld-gallery {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            grid-auto-flow: dense;
            gap: 10px;
        }

        .ld-gallery figure {
            margin: 0;
            border-radius: 12px;
            overflow: hidden;
            min-height: 180px;
            position: relative;
            box-shadow: 0 10px 20px rgba(16, 49, 79, 0.12);
        }

        .ld-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .ld-gallery figure.tall {
            grid-column: span 2;
            grid-row: span 2;
            min-height: 370px;
        }

        .ld-gallery figure.wide {
            grid-column: span 4;
        }

        .ld-gallery figure.small {
            grid-column: span 2;
        }

        .ld-gallery figcaption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            padding: 10px 12px;
            background: linear-gradient(to top, rgba(20, 60, 92, 0.88), rgba(20, 60, 92, 0));
        }

        .ld-side {
            display: grid;
            gap: 16px;
            align-self: start;
        }

        .ld-links {
            display: grid;
            gap: 10px;
        }

        .ld-links a {
            display: block;
            text-decoration: none;
            color: #2f638f;
            border: 1px solid rgba(67, 155, 212, 0.18);
            border-radius: 12px;
            background: #f9fdff;
            padding: 10px 12px;
            font-size: 14px;
            line-height: 1.55;
        }

        .ld-links a:hover {
            background: #eaf7ff;
        }

        .ld-contact-item {
            background: #f7fcff;
            border: 1px solid rgba(67, 155, 212, 0.22);
            border-radius: 12px;
            padding: 10px 12px;
            margin-bottom: 10px;
        }

        .ld-contact-item b {
            display: block;
            color: #2d7bb1;
            font-size: 13px;
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .ld-contact-item span {
            color: #204c70;
            font-weight: 600;
            font-size: 14px;
            line-height: 1.5;
        }

        .ld-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 12px;
        }

        .ld-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 10px 16px;
            border-radius: 12px;
            text-decoration: none;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            font-weight: 700;
            border: 1px solid transparent;
        }

        .ld-btn-primary {
            color: #fff;
            background: linear-gradient(120deg, var(--ld-blue-1), var(--ld-blue-2));
            box-shadow: 0 10px 20px rgba(67, 155, 212, 0.24);
        }

        .ld-btn-light {
            color: #2b79af;
            background: #f7fcff;
            border-color: rgba(67, 155, 212, 0.25);
        }

        @media (max-width: 1180px) {

            .ld-hero-grid,
            .ld-layout {
                grid-template-columns: 1fr;
            }

            .ld-grid {
                grid-template-columns: 1fr;
            }

            .ld-gallery {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .ld-gallery figure.tall,
            .ld-gallery figure.wide,
            .ld-gallery figure.small {
                grid-column: span 1;
                grid-row: span 1;
                min-height: 220px;
            }
        }

        @media (max-width: 768px) {
            .ld-wrap {
                width: min(94vw, 1520px);
            }

            .ld-hero {
                padding: 94px 0 42px;
            }

            .ld-hero .ld-breadcrumb {
                position: static !important;
                left: auto !important;
                top: auto !important;
                bottom: auto !important;
                transform: none !important;
                float: none !important;
                clear: both;
                margin: 0 0 12px 0;
                padding: 7px 12px;
                gap: 6px;
            }

            .ld-hero .ld-breadcrumb li,
            .ld-hero .ld-breadcrumb li a {
                float: none !important;
                display: inline-flex;
                align-items: center;
                font-size: 12px;
                line-height: 1.3;
            }

            .ld-hero h1 {
                font-size: 34px;
                line-height: 1.12;
            }

            .ld-hero p {
                font-size: 15px;
                line-height: 1.65;
            }

            .ld-chips {
                margin-top: 14px;
                gap: 8px;
            }

            .ld-chips span {
                font-size: 12px;
                padding: 7px 10px;
            }

            .ld-hero-card img {
                height: 260px;
            }

            .ld-hero-metrics {
                grid-template-columns: 1fr;
            }

            .ld-card,
            .ld-side-card {
                padding: 16px;
                border-radius: 16px;
            }

            .ld-feature {
                grid-template-columns: 1fr;
            }

            .ld-feature img {
                height: 220px;
            }

            .ld-member img {
                height: 260px;
            }

            .ld-gallery {
                grid-template-columns: 1fr;
            }

            .ld-breadcrumb {
                padding: 6px 12px;
                gap: 4px;
                font-size: 12px;
            }

            .ld-breadcrumb li,
            .ld-breadcrumb li a {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content ld-page">
        <section class="ld-hero">
            <div class="ld-wrap" data-aos="fade-up">
                <div class="ld-hero-grid">
                    <div>
                        <ol class="breadcrumb ld-breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="ve-chung-toi.php">Về chúng tôi</a></li>
                            <li class="breadcrumb-item active">Ban lãnh đạo</li>
                        </ol>

                        <h1>Ban lãnh đạo Meyschool Đoàn Thị Điểm</h1>
                        <p>Đội ngũ lãnh đạo hội tụ chuyên môn sâu, kinh nghiệm quản lý giáo dục và tinh thần đổi mới,
                            cùng xây dựng môi trường học tập nhân văn, hiện đại và hội nhập cho học sinh.</p>

                        <div class="ld-chips">
                            <span>Lãnh đạo học thuật</span>
                            <span>Quản trị hiện đại</span>
                            <span>Đồng hành cùng phụ huynh</span>
                        </div>
                    </div>

                    <div class="ld-hero-card">
                        <img src="assets/img/hieu-truong-ba-hoc_sinh.jpg" alt="Ban lãnh đạo Meyschool Đoàn Thị Điểm">
                        <!-- <div class="ld-hero-metrics">
                            <div><b>04</b><span>Nhân sự nòng cốt</span></div>
                            <div><b>20+</b><span>Năm kinh nghiệm trung bình</span></div>
                            <div><b>100%</b><span>Sau đại học và chứng chỉ chuyên môn</span></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="ld-content">
            <div class="ld-wrap ld-layout">
                <div class="ld-main">
                    <article class="ld-card" data-aos="fade-up">
                        <h2>Về Ban lãnh đạo</h2>
                        <div class="ld-highlight"
                            style="border-left:4px solid var(--ld-blue-1);border-radius:14px;padding:16px 20px;background:linear-gradient(120deg,#f4fbff 0%,#eaf7ff 100%);margin-bottom:6px;">
                            <p style="margin:0 0 12px;">Ban lãnh đạo nhà trường là sự kết hợp giữa kinh nghiệm quản lý
                                giáo dục lâu năm từ Hệ thống giáo dục Đoàn Thị Điểm Hà Nội và tư duy đổi mới, hội nhập.
                            </p>
                            <p style="margin:0;">Với định hướng lấy học sinh làm trung tâm, Ban lãnh đạo không ngừng xây
                                dựng chiến lược phát triển bền vững, tiên phong trong ứng dụng công nghệ, nâng cao chất
                                lượng giảng dạy và kiến tạo môi trường giáo dục truyền cảm hứng.</p>
                        </div>
                    </article>

                    <article class="ld-card" data-aos="fade-up">
                        <h2>Chân dung lãnh đạo nổi bật</h2>
                        <div class="ld-feature">
                            <img src="assets/img/hieu-truong-ba-hoc_sinh.jpg" alt="Thầy Dương Văn Hùng">
                            <div>
                                <h4>ThS Dương Văn Hùng</h4>
                                <p class="ld-role">Hiệu Trưởng</p>
                                <p>Với hơn 25 năm kinh nghiệm trong lĩnh vực giáo dục, thầy Dương Văn Hùng theo đuổi
                                    triết lý
                                    lấy học sinh làm trung tâm, chú trọng phát triển toàn diện và đề cao năng lực học
                                    tập suốt đời. Định hướng của thầy là xây dựng một cộng đồng học tập giàu cảm hứng,
                                    nơi
                                    học sinh được khích lệ để tự tin khám phá thế mạnh cá nhân.</p>
                                <div class="ld-tags">
                                    <span>Quản lý giáo dục</span>
                                    <span>Phát triển chương trình</span>
                                    <span>Lãnh đạo trường học</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="ld-card" data-aos="fade-up">
                        <h2>Đội ngũ ban lãnh đạo</h2>
                        <div class="ld-grid">
                            <div class="ld-member">
                                <img src="assets/img/hieu-truong-ba-hoc_sinh.jpg" alt="Thầy Dương Văn Hùng">
                                <div class="ld-member-body">
                                    <h5>ThS Dương Văn Hùng</h5>
                                    <small>Hiệu Trưởng</small>
                                    <p>Với hơn 25 năm kinh nghiệm trong lĩnh vực giáo dục, thầy Dương Văn Hùng dẫn dắt
                                        nhà trường theo định hướng lấy học sinh làm trung tâm, xây dựng môi trường học
                                        tập nhân văn, hiện đại và hội nhập.</p>
                                </div>
                            </div>

                            <div class="ld-member">
                                <img src="assets/img/ban-lanh-dao/hiệu phó.png" alt="Cô Lê Kim Anh">
                                <div class="ld-member-body">
                                    <h5>ThS Lê Kim Anh</h5>
                                    <small>Hiệu Phó</small>
                                    <p>Dẫn dắt công tác học thuật, chuẩn hóa chất lượng giảng dạy và phát triển đội ngũ
                                        giáo viên theo định hướng đổi mới, đồng hành cùng học sinh và phụ huynh.</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="ld-card" data-aos="fade-up">
                        <h2>Khoảnh khắc lãnh đạo</h2>
                        <p style="color:#7a9ab5;font-style:italic;">Nội dung đang được cập nhật...</p>
                    </article>
                </div>

                <aside class="ld-side" data-aos="fade-up" data-aos-delay="120">
                    <div class="ld-side-card">
                        <h3>Khám phá thêm</h3>
                        <div class="ld-links">
                            <a href="thong-diep-nguoi-sang-lap.php">Thông điệp Nhà sáng lập</a>
                            <a href="tam-nhin-su-menh.php">Tầm nhìn - Sứ mệnh</a>
                            <a href="doi-ngu-giao-vien.php">Đội ngũ giáo viên</a>
                            <a href="chan-dung-hoc-sinh.php">Chân dung học sinh</a>
                        </div>
                    </div>

                    <div class="ld-side-card">
                        <h3>Thông tin nhanh</h3>
                        <p>Ban lãnh đạo duy trì đối thoại thường xuyên với giáo viên và phụ huynh nhằm đảm bảo các quyết
                            định quản trị luôn nhất quán với mục tiêu phát triển học sinh.</p>
                    </div>

                    <div class="ld-side-card">
                        <h3>Liên hệ</h3>
                        <div class="ld-contact-item">
                            <b>Hotline</b>
                            <span><?= htmlspecialchars($ss['hotline']) ?></span>
                        </div>
                        <div class="ld-contact-item">
                            <b>Email</b>
                            <span><?= htmlspecialchars($ss['email']) ?></span>
                        </div>
                        <div class="ld-contact-item" style="margin-bottom: 0;">
                            <b>Địa chỉ</b>
                            <span><?= htmlspecialchars($ss['address']) ?></span>
                        </div>
                        <div class="ld-actions">
                            <a href="dang-ky-tu-van.php" class="ld-btn ld-btn-primary">Đăng ký tư vấn</a>
                            <a href="lien-he.php" class="ld-btn ld-btn-light">Liên hệ ngay</a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
</body>

</html>