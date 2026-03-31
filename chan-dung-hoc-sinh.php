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

        body.show-admin-bar {
            margin-top: 0 !important;
        }

        :root {
            --sp-blue-1: #439bd4;
            --sp-blue-2: #4db0e4;
            --sp-blue-3: #eaf7ff;
            --sp-ink: #204661;
        }

        .student-page {
            background: radial-gradient(circle at 0% 0%, #eaf7ff 0%, #f7fcff 48%, #ffffff 100%);
            color: var(--sp-ink);
        }

        .student-wrap {
            width: min(95vw, 1520px);
            margin: 0 auto;
        }

        .sp-hero {
            position: relative;
            padding: 112px 0 64px;
            background: linear-gradient(132deg, rgba(67, 155, 212, 0.95) 0%, rgba(77, 176, 228, 0.9) 72%, rgba(77, 176, 228, 0.84) 100%), url('storage/banner/trung-hoc.jpg') center/cover no-repeat;
            overflow: hidden;
        }

        .sp-hero::before,
        .sp-hero::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            background: rgba(255, 255, 255, 0.2);
        }

        .sp-hero::before {
            width: 380px;
            height: 380px;
            top: -130px;
            right: -130px;
        }

        .sp-hero::after {
            width: 220px;
            height: 220px;
            left: -70px;
            bottom: -90px;
        }

        .sp-breadcrumb {
            margin: 0 0 14px;
            display: inline-flex;
            flex-wrap: wrap;
            gap: 8px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.38);
            border-radius: 999px;
            padding: 8px 16px;
            position: static !important;
            float: none !important;
            clear: both;
            z-index: 3;
        }

        .sp-breadcrumb li,
        .sp-breadcrumb li a {
            color: #fff;
            font-size: 13px;
        }

        .sp-breadcrumb.breadcrumb {
            top: auto !important;
            right: auto !important;
            bottom: auto !important;
            left: auto !important;
        }

        .sp-hero-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(300px, 0.8fr);
            gap: 24px;
            align-items: center;
        }

        .sp-hero h1 {
            margin: 0;
            color: #fff;
            font-family: 'Garamond', serif;
            font-size: clamp(36px, 4.8vw, 64px);
            line-height: 1.05;
            max-width: 860px;
        }

        .sp-hero p {
            margin: 16px 0 0;
            color: rgba(255, 255, 255, 0.96);
            font-size: 17px;
            line-height: 1.78;
            max-width: 820px;
            position: relative;
            z-index: 1;
        }

        .sp-hero-chips {
            margin-top: 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .sp-hero-chips span {
            display: inline-flex;
            align-items: center;
            padding: 8px 12px;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 13px;
            font-weight: 700;
        }

        .sp-hero-collage {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 18px;
            padding: 10px;
        }

        .sp-hero-collage img {
            width: 100%;
            height: 120px;
            border-radius: 12px;
            object-fit: cover;
            display: block;
        }

        .sp-main {
            padding: 40px 0 72px;
        }

        .sp-layout {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .sp-content {
            display: grid;
            gap: 24px;
        }

        .sp-card,
        .sp-side-card {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.16);
            border-radius: 20px;
            box-shadow: 0 12px 24px rgba(16, 49, 79, 0.08);
            padding: 22px;
        }

        .sp-card h2,
        .sp-side-card h3 {
            margin: 0 0 12px;
            color: #236c9d;
            font-family: 'Garamond', serif;
            font-size: 33px;
            line-height: 1.2;
            padding: 0 !important;
        }

        .sp-card p,
        .sp-card li,
        .sp-side-card p,
        .sp-side-card li {
            color: #3f6686;
            font-size: 15px;
            line-height: 1.76;
        }

        .sp-journey {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .sp-step {
            border: 1px solid rgba(67, 155, 212, 0.2);
            border-radius: 14px;
            background: linear-gradient(120deg, #f4fbff 0%, #ecf8ff 100%);
            padding: 12px;
        }

        .sp-step b {
            display: block;
            color: #2f79ad;
            margin-bottom: 4px;
            font-size: 14px;
        }

        .sp-stories {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .sp-story {
            border: 1px solid rgba(67, 155, 212, 0.2);
            border-radius: 14px;
            overflow: hidden;
            background: #fff;
        }

        .sp-story img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .sp-story-body {
            padding: 12px;
        }

        .sp-story h4 {
            margin: 0 0 4px;
            color: #2f79ad;
            font-size: 20px;
            font-family: 'Garamond', serif;
        }

        .sp-story small {
            display: block;
            color: #5f7f99;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 0.3px;
            margin-bottom: 6px;
        }

        .sp-values {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
        }

        .sp-value {
            border: 1px solid rgba(67, 155, 212, 0.22);
            border-radius: 12px;
            background: #f9fdff;
            padding: 10px;
            text-align: center;
        }

        .sp-value b {
            display: block;
            color: #2d7bb1;
            font-size: 24px;
            line-height: 1;
            margin-bottom: 4px;
        }

        .sp-value span {
            color: #4c7190;
            font-size: 13px;
            line-height: 1.45;
        }

        .sp-gallery {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            grid-auto-flow: dense;
            gap: 10px;
        }

        .sp-gallery figure {
            margin: 0;
            min-height: 180px;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 10px 20px rgba(16, 49, 79, 0.12);
        }

        .sp-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .sp-gallery figure.tall {
            grid-column: span 2;
            grid-row: span 2;
            min-height: 370px;
        }

        .sp-gallery figure.wide {
            grid-column: span 4;
        }

        .sp-gallery figure.small {
            grid-column: span 2;
        }

        .sp-gallery figcaption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 10px 12px;
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(to top, rgba(20, 60, 92, 0.88), rgba(20, 60, 92, 0));
        }

        .sp-side {
            display: grid;
            gap: 16px;
            align-self: start;
        }

        .sp-links {
            display: grid;
            gap: 10px;
        }

        .sp-links a {
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

        .sp-links a:hover {
            background: #eaf7ff;
        }

        .sp-contact-item {
            background: #f7fcff;
            border: 1px solid rgba(67, 155, 212, 0.22);
            border-radius: 12px;
            padding: 10px 12px;
            margin-bottom: 10px;
        }

        .sp-contact-item b {
            display: block;
            color: #2d7bb1;
            font-size: 13px;
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .sp-contact-item span {
            color: #204c70;
            font-weight: 600;
            font-size: 14px;
            line-height: 1.5;
        }

        .sp-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 12px;
        }

        .sp-btn {
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

        .sp-btn-primary {
            color: #fff;
            background: linear-gradient(120deg, var(--sp-blue-1), var(--sp-blue-2));
            box-shadow: 0 10px 20px rgba(67, 155, 212, 0.24);
        }

        .sp-btn-light {
            color: #2b79af;
            background: #f7fcff;
            border-color: rgba(67, 155, 212, 0.25);
        }

        @media (max-width: 1180px) {

            .sp-hero-grid,
            .sp-layout {
                grid-template-columns: 1fr;
            }

            .sp-stories,
            .sp-journey {
                grid-template-columns: 1fr;
            }

            .sp-values {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .sp-gallery {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .sp-gallery figure.tall,
            .sp-gallery figure.wide,
            .sp-gallery figure.small {
                grid-column: span 1;
                grid-row: span 1;
                min-height: 220px;
            }
        }

        @media (max-width: 768px) {
            .student-wrap {
                width: min(94vw, 1520px);
            }

            .sp-hero {
                padding: 94px 0 42px;
            }

            .sp-hero p {
                font-size: 15px;
            }

            .sp-card,
            .sp-side-card {
                padding: 16px;
                border-radius: 16px;
            }

            .sp-hero-collage {
                grid-template-columns: 1fr 1fr;
            }

            .sp-hero-collage img {
                height: 100px;
            }

            .sp-values {
                grid-template-columns: 1fr;
            }

            .sp-gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content student-page">
        <section class="sp-hero">
            <div class="student-wrap" data-aos="fade-up">
                <div class="sp-hero-grid">
                    <div>
                        <ol class="breadcrumb sp-breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="ve-chung-toi.php">Về chúng tôi</a></li>
                            <li class="breadcrumb-item active">Chân dung học sinh</li>
                        </ol>

                        <h1>Chân dung học sinh Meyschool Đoàn Thị Điểm</h1>
                        <p>Tại Meyschool Đoàn Thị Điểm Phú Quốc, mỗi học sinh là một cá thể duy nhất với những tiềm năng
                            vô hạn. Chúng tôi không chỉ dạy kiến thức, mà còn nuôi dưỡng để các em trở thành những Công
                            dân toàn cầu mang trong mình 5 giá trị cốt lõi.</p>

                        <div class="sp-hero-chips">
                            <span>Nhân ái</span>
                            <span>Chủ động</span>
                            <span>Sáng tạo</span>
                            <span>Trung thực</span>
                            <span>Hội nhập</span>
                        </div>
                    </div>

                    <div class="sp-hero-collage">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09890.jpg" alt="Học sinh Meyschool Đoàn Thị Điểm">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09909.jpg" alt="Học sinh trong hoạt động học tập">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09926.jpg" alt="Hoạt động trải nghiệm tại Meyschool">
                        <img src="assets/img/chan-dung-hoc-sinh/TUN09948.jpg" alt="Không gian học tập của học sinh">
                    </div>
                </div>
            </div>
        </section>

        <section class="sp-main">
            <div class="student-wrap sp-layout">
                <div class="sp-content">
                    <article class="sp-card" data-aos="fade-up">
                        <h2>Hành trình phát triển</h2>
                        <p>Tại Meyschool, học sinh không chỉ học để thi mà còn học để hiểu bản thân, kết nối cộng đồng
                            và tạo ra giá trị tích cực. Mỗi giai đoạn học tập được thiết kế theo hướng mở, liên môn và
                            giàu trải nghiệm thực tế.</p>
                        <div class="sp-journey">
                            <div class="sp-step">
                                <b>Bước 1: Khám phá</b>
                                <p>Nhận diện sở trường, sở thích, phong cách học tập của từng học sinh.</p>
                            </div>
                            <div class="sp-step">
                                <b>Bước 2: Bồi dưỡng</b>
                                <p>Rèn nền tảng học thuật, tư duy phản biện và kỹ năng hợp tác.</p>
                            </div>
                            <div class="sp-step">
                                <b>Bước 3: Thử thách</b>
                                <p>Tham gia dự án, cuộc thi và hoạt động lãnh đạo trong trường học.</p>
                            </div>
                            <div class="sp-step">
                                <b>Bước 4: Tỏa sáng</b>
                                <p>Tạo hồ sơ năng lực cá nhân và sẵn sàng cho hành trình hội nhập.</p>
                            </div>
                        </div>
                    </article>

                    <article class="sp-card" data-aos="fade-up">
                        <h2>Dấu ấn học sinh Meyschool</h2>
                        <div class="sp-values">
                            <div class="sp-value"><b>95%</b><span>Đỗ vào trường đại học mong muốn</span></div>
                            <div class="sp-value"><b>50+</b><span>Giải thưởng học thuật cấp quốc gia</span></div>
                            <div class="sp-value"><b>30+</b><span>Học bổng và cơ hội quốc tế</span></div>
                        </div>
                    </article>

                    <article class="sp-card" data-aos="fade-up">
                        <h2>Khoảnh khắc học sinh</h2>
                        <div class="sp-gallery">
                            <figure class="tall">
                                <img src="assets/img/chan-dung-hoc-sinh/TUN09961.jpg"
                                    alt="Học sinh trong hoạt động trải nghiệm">
                                <figcaption>Học qua trải nghiệm và dự án liên môn</figcaption>
                            </figure>
                            <figure class="small">
                                <img src="assets/img/chan-dung-hoc-sinh/TUN09890.jpg" alt="Học sinh tham gia hoạt động">
                                <figcaption>Phát triển năng lực từ sớm</figcaption>
                            </figure>
                            <figure class="small">
                                <img src="assets/img/chan-dung-hoc-sinh/TUN09909.jpg" alt="Không gian học tập sáng tạo">
                                <figcaption>Không gian học tập truyền cảm hứng</figcaption>
                            </figure>
                            <figure class="wide">
                                <img src="assets/img/chan-dung-hoc-sinh/thư viện.jpg" alt="Thư viện Meyschool">
                                <figcaption>Tự tin, chủ động, sẵn sàng hội nhập</figcaption>
                            </figure>
                            <figure class="small">
                                <img src="assets/img/chan-dung-hoc-sinh/thư viện (1).jpg" alt="Học sinh trong thư viện">
                                <figcaption>Học thuật vững vàng</figcaption>
                            </figure>
                            <figure class="small">
                                <img src="assets/img/chan-dung-hoc-sinh/thư viện (2).jpg" alt="Học sinh tương tác nhóm">
                                <figcaption>Hợp tác và lãnh đạo trong cộng đồng học tập</figcaption>
                            </figure>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section: Tin tức Tuyển sinh -->
        <section class="ts-news-section" style="padding:60px 0 40px; margin-bottom: 115px;">
            <div class="student-wrap" style="max-width:1100px;">
                <h2 class="ts-news-title"
                    style="font-family:'EB Garamond',serif;font-size:36px;font-weight:700;color:var(--sp-ink);text-transform:uppercase;margin-bottom:36px;text-align:center;">
                    Tuyển sinh</h2>
                <div class="ts-news-slider">
                    <div class="ts-news-card">
                        <a href="thong-tin-tuyen-sinh-tieu-hoc.php" style="display:block;">
                            <img src="assets/img/tuyensinh/banner4.jpg" alt="Thông báo lịch xét tuyển">
                        </a>
                        <div class="ts-news-card-body">
                            <h3>Thông báo lịch xét tuyển Lớp 1 năm học 2026-2027</h3>
                            <a href="thong-tin-tuyen-sinh-tieu-hoc.php" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="thong-tin-tuyen-sinh-tieu-hoc.php" style="display:block;">
                            <img src="assets/img/tuyensinh/banner5.jpg" alt="Mở cổng đăng ký tuyển sinh">
                        </a>
                        <div class="ts-news-card-body">
                            <h3>Mở cổng đăng ký tuyển sinh lớp 1: Hành trình khởi đầu cho con yêu</h3>
                            <a href="thong-tin-tuyen-sinh-tieu-hoc.php" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="hoc-bong-2026-2027.php" style="display:block;">
                            <img src="assets/img/tuyensinh/tuyển sinh chung.jpg" alt="Ưu đãi tuyển sinh">
                        </a>
                        <div class="ts-news-card-body">
                            <h3>Ưu đãi tuyển sinh và học bổng năm học 2026-2027</h3>
                            <a href="hoc-bong-2026-2027.php" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="thong-tin-tuyen-sinh-tieu-hoc.php" style="display:block;">
                            <img src="assets/img/tuyensinh/tiền tiểu học 1.jpg" alt="Chương trình tiền tiểu học">
                        </a>
                        <div class="ts-news-card-body">
                            <h3>Chương trình Tiền tiểu học – Sẵn sàng cho hành trình học tập mới</h3>
                            <a href="thong-tin-tuyen-sinh-tieu-hoc.php" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="thong-tin-tuyen-sinh-tieu-hoc.php" style="display:block;">
                            <img src="assets/img/tuyensinh/tiền tiểu học 2.jpg" alt="Lịch thi tuyển sinh">
                        </a>
                        <div class="ts-news-card-body">
                            <h3>Lịch thi và quy trình xét tuyển vào lớp 1 năm học 2026-2027</h3>
                            <a href="thong-tin-tuyen-sinh-tieu-hoc.php" class="ts-news-link">Xem thêm <span>→</span></a>
                        </div>
                    </div>
                    <div class="ts-news-card">
                        <a href="thong-tin-tuyen-sinh-tieu-hoc.php" style="display:block;">
                            <img src="assets/img/tuyensinh/thông tin tuyển sinh.jpg" alt="Ngày hội tuyển sinh">
                        </a>
                        <div class="ts-news-card-body">
                            <h3>Ngày hội trải nghiệm và tư vấn tuyển sinh Meyschool 2026</h3>
                            <a href="thong-tin-tuyen-sinh-tieu-hoc.php" class="ts-news-link">Xem thêm <span>→</span></a>
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
                    color: var(--sp-ink);
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
                    color: var(--sp-blue-1);
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
                    transition: background .25s, box-shadow .25s;
                }

                .ts-news-slider .slick-prev:hover,
                .ts-news-slider .slick-next:hover {
                    background: var(--sp-blue-1);
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
                    color: var(--sp-ink);
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

                .ts-news-slider .slick-dots li {
                    margin: 0 4px;
                }

                .ts-news-slider .slick-dots li button:before {
                    font-size: 10px;
                    color: #c5d3e0;
                    opacity: 1;
                }

                .ts-news-slider .slick-dots li.slick-active button:before {
                    color: var(--sp-blue-1);
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

        <!-- Section: CTA Đăng ký tư vấn -->
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
        <style>
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

            @media (max-width: 768px) {
                .tq-footer-consult-content {
                    grid-template-columns: 1fr;
                    text-align: center;
                }

                .tq-footer-consult-text>div {
                    justify-content: center;
                    flex-wrap: wrap;
                }

                .tq-footer-consult-actions {
                    text-align: center;
                }
            }
        </style>
    </main>

    <?php include 'includes/footer.php'; ?>

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
                }, {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>
</body>

</html>