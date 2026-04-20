<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Tổng quan chương trình</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Tổng quan chương trình">
    <meta property="og:description" content="">
    <meta property="og:url" content="tong-quan-chuong-trinh.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="twitter:title" content="Tổng quan chương trình">
    <meta name="twitter:description" content="">

    <link media="all" type="text/css" rel="stylesheet"
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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

    body.show-admin-bar {
        margin-top: 0px !important;
    }

    /* ============================================
           PAGE 1: TONG QUAN - MODERN OVERVIEW STYLE
           Màu xanh chủ đạo #1e4a7e
           ============================================ */
    .tq-container {
        background: linear-gradient(180deg, #f8fafc 0%, #eef4f8 100%);
        min-height: 100vh;
    }

    /* Hero Section with Real Image */
    .tq-hero {
        position: relative;
        height: 650px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .tq-hero-bg {
        position: absolute;
        inset: 0;
        background: url('storage/banner/ve-chung-toi-web.jpg') center/cover;
    }

    .tq-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(30, 74, 126, 0.92) 0%, rgba(30, 74, 126, 0.7) 50%, rgba(245, 158, 11, 0.5) 100%);
    }

    .tq-hero-content {
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

    .tq-hero-text {
        color: #fff;
        padding: 20px 0;
    }

    .tq-hero-text ol {
        margin: 0 0 20px 0;
        padding: 0;
        list-style: none;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
    }

    .tq-hero-text ol a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .tq-hero-text ol a:hover {
        color: #fff;
    }

    .tq-hero-text h1 {
        font-family: 'Garamond', serif;
        font-size: 52px;
        font-weight: 700;
        margin: 0 0 20px 0;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
        line-height: 1.2;
        color: #fff;
    }

    .tq-hero-text p {
        font-size: 20px;
        margin: 0;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.95);
    }

    .tq-hero-images {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .tq-hero-img {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        border: 3px solid rgba(255, 255, 255, 0.2);
    }

    .tq-hero-img:first-child {
        grid-row: span 2;
    }

    .tq-hero-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .tq-hero-img:hover img {
        transform: scale(1.05);
    }

    /* Program Cards with Images */
    .tq-programs-float {
        display: flex;
        justify-content: center;
        gap: 25px;
        margin-top: -60px;
        padding: 0 40px;
        position: relative;
        z-index: 10;
    }

    .tq-program-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        width: 270px;
        box-shadow: 0 20px 60px rgba(30, 74, 126, 0.15);
        transition: all 0.4s ease;
        text-decoration: none;
    }

    .tq-program-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 30px 80px rgba(30, 74, 126, 0.25);
    }

    .tq-program-card-img {
        height: 140px;
        overflow: hidden;
    }

    .tq-program-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .tq-program-card:hover .tq-program-card-img img {
        transform: scale(1.1);
    }

    .tq-program-card-content {
        padding: 25px;
        text-align: center;
    }

    .tq-program-card.active .tq-program-card-content {
        background: linear-gradient(135deg, #1e4a7e 0%, #2d6da8 100%);
    }

    .tq-program-card h3 {
        font-family: 'Garamond', serif;
        font-size: 22px;
        color: #1e4a7e;
        margin-bottom: 8px;
    }

    .tq-program-card.active h3 {
        color: #fff;
    }

    .tq-program-card p {
        font-size: 13px;
        color: #666;
        line-height: 1.5;
    }

    .tq-program-card.active p {
        color: rgba(255, 255, 255, 0.9);
    }

    /* Main Layout with Side Content */
    .tq-main-layout {
        max-width: 1400px;
        margin: 60px auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: 250px 1fr 250px;
        gap: 40px;
    }

    /* Left Sidebar with Gallery */
    .tq-sidebar-left {
        display: flex;
        flex-direction: column;
        gap: 20px;
        position: sticky;
        top: 90px;
        align-self: start;
        max-height: calc(100vh - 110px);
        overflow-y: auto;
    }

    .tq-sidebar-card {
        background: #fff;
        border-radius: 16px;
        padding: 25px 20px;
        box-shadow: 0 4px 20px rgba(30, 74, 126, 0.08);
    }

    .tq-sidebar-card h4 {
        font-family: 'Garamond', serif;
        font-size: 18px;
        color: #1e4a7e;
        margin-bottom: 15px;
        padding-bottom: 12px;
        border-bottom: 2px solid #e8f0f8;
    }

    .tq-mini-gallery {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
    }

    .tq-mini-img {
        border-radius: 10px;
        overflow: hidden;
        aspect-ratio: 1;
    }

    .tq-mini-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .tq-mini-img:hover img {
        transform: scale(1.1);
    }

    .tq-info-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .tq-info-list li {
        padding: 12px 0;
        border-bottom: 1px solid #f0f4f8;
        font-size: 13px;
        color: #555;
    }

    .tq-info-list li:last-child {
        border-bottom: none;
    }

    .tq-info-list strong {
        color: #1e4a7e;
        display: block;
        font-size: 14px;
        margin-bottom: 3px;
    }

    /* Center Content */
    .tq-content-center {
        background: #fff;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 4px 30px rgba(30, 74, 126, 0.08);
    }

    .tq-section-title {
        font-family: 'Garamond', serif;
        font-size: 36px;
        color: #1e4a7e;
        margin-bottom: 30px;
        text-align: center;
        position: relative;
        padding-bottom: 20px;
    }

    .tq-section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #1e4a7e, #3a8bc8);
        border-radius: 2px;
    }

    .tq-intro-text {
        font-size: 16px;
        line-height: 2;
        color: #444;
        text-align: center;
        margin-bottom: 40px;
    }

    .tq-intro-text strong {
        color: #1e4a7e;
    }

    /* Feature Items with Images */
    .tq-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin: 40px 0;
    }

    .tq-feature-item {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(30, 74, 126, 0.08);
        transition: all 0.3s ease;
    }

    .tq-feature-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(30, 74, 126, 0.15);
    }

    .tq-feature-img {
        height: 140px;
        overflow: hidden;
    }

    .tq-feature-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .tq-feature-item:hover .tq-feature-img img {
        transform: scale(1.1);
    }

    .tq-feature-content {
        padding: 20px;
        border-top: 3px solid #1e4a7e;
    }

    .tq-feature-item h4 {
        font-family: 'Garamond', serif;
        font-size: 18px;
        color: #1e4a7e;
        margin-bottom: 8px;
    }

    .tq-feature-item p {
        font-size: 13px;
        color: #666;
        line-height: 1.6;
    }

    /* Right Sidebar - CTA & News */
    .tq-sidebar-right {
        display: flex;
        flex-direction: column;
        gap: 25px;
        position: sticky;
        top: 90px;
        align-self: start;
        max-height: calc(100vh - 110px);
        overflow-y: auto;
    }

    .tq-cta-box {
        background: linear-gradient(135deg, #1e4a7e 0%, #2d6da8 100%);
        border-radius: 16px;
        padding: 30px 20px;
        text-align: center;
        color: #fff;
    }

    .tq-cta-box h4 {
        font-family: 'Garamond', serif;
        font-size: 22px;
        margin-bottom: 15px;
    }

    .tq-cta-box p {
        font-size: 14px;
        opacity: 0.9;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .tq-cta-btn {
        display: inline-block;
        padding: 12px 30px;
        background: #fff;
        color: #1e4a7e;
        text-decoration: none;
        border-radius: 25px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .tq-cta-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .tq-news-box {
        background: #fff;
        border-radius: 16px;
        padding: 25px 20px;
        box-shadow: 0 4px 20px rgba(30, 74, 126, 0.08);
    }

    .tq-news-box h4 {
        font-family: 'Garamond', serif;
        font-size: 18px;
        color: #1e4a7e;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #e8f0f8;
    }

    .tq-news-item {
        padding: 15px 0;
        border-bottom: 1px solid #f0f4f8;
    }

    .tq-news-item:last-child {
        border-bottom: none;
    }

    .tq-news-date {
        font-size: 12px;
        color: #3a8bc8;
        margin-bottom: 5px;
    }

    .tq-news-title {
        font-size: 14px;
        color: #444;
        line-height: 1.5;
        text-decoration: none;
        display: block;
        transition: color 0.3s ease;
    }

    .tq-news-title:hover {
        color: #1e4a7e;
    }

    /* Stats Banner */
    .tq-stats-banner {
        background: linear-gradient(90deg, #5f86b3 0%, #78a6ce 50%, #95c2e1 100%);
        padding: 130px 20px 165px;
        margin-top: 60px;
    }

    .tq-stats-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        text-align: center;
    }

    #footer,
    #footer .footer {
        margin-top: 0;
    }

    #footer .footer {
        padding-top: 128px;
    }

    .tq-stat-item {
        color: #fff;
    }

    .tq-stat-number {
        font-family: 'Garamond', serif;
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .tq-stat-label {
        font-size: 16px;
        opacity: 0.9;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .tq-main-layout {
            grid-template-columns: 1fr;
            max-width: 900px;
        }

        .tq-sidebar-left,
        .tq-sidebar-right {
            display: none;
        }

        .tq-programs-float {
            flex-wrap: wrap;
            padding: 0 20px;
        }

        .tq-program-card {
            width: calc(50% - 15px);
        }
    }

    @media (max-width: 768px) {
        .tq-hero h1 {
            font-size: 32px;
        }

        .tq-program-card {
            width: 100%;
        }

        .tq-features {
            grid-template-columns: 1fr;
        }

        .tq-stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .tq-stats-banner {
            padding-bottom: 136px;
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

    <main class="body-content tq-container">
        <!-- Hero Section -->
        <section class="tq-hero">
            <div class="tq-hero-bg"></div>
            <div class="tq-hero-overlay"></div>
            <div class="tq-hero-content">
                <div class="tq-hero-text">
                    <ol>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li style="color: rgba(255,255,255,0.5);">/</li>
                        <li style="color: #fff;">Tổng quan chương trình</li>
                    </ol>
                    <h1>Tổng quan chương trình</h1>
                    <p>"Nền tảng giáo dục toàn diện cho thế hệ tương lai"</p>
                </div>
                <div class="tq-hero-images">
                    <div class="tq-hero-img">
                        <img src="olympia/images/about-us-1.jpg" alt="Học sinh Olympia">
                    </div>
                    <div class="tq-hero-img">
                        <img src="olympia/images/about-us-2.jpg" alt="Hoạt động trường">
                    </div>
                    <div class="tq-hero-img">
                        <img src="olympia/images/about-us-3.jpg" alt="Cơ sở vật chất">
                    </div>
                </div>
            </div>
        </section>

        <!-- Floating Program Cards with Images -->
        <div class="tq-programs-float">
            <a href="tong-quan-chuong-trinh.php" class="tq-program-card active">
                <div class="tq-program-card-img">
                    <img src="storage/banner/ve-chung-toi-web.jpg" alt="Tổng quan">
                </div>
                <div class="tq-program-card-content">
                    <h3>Tổng quan</h3>
                    <p>Tổng quan chương trình đào tạo</p>
                </div>
            </a>
            <a href="chuong-trinh-tieu-hoc.php" class="tq-program-card">
                <div class="tq-program-card-img">
                    <img src="storage/banner/tieu-hoc.jpg" alt="Tiểu học">
                </div>
                <div class="tq-program-card-content">
                    <h3>Tiểu học</h3>
                    <p>Chương trình lớp 1-5</p>
                </div>
            </a>
            <a href="chuong-trinh-thcs.php" class="tq-program-card">
                <div class="tq-program-card-img">
                    <img src="olympia/images/noibat_1.jpg" alt="THCS">
                </div>
                <div class="tq-program-card-content">
                    <h3>THCS</h3>
                    <p>Chương trình lớp 6-9</p>
                </div>
            </a>
            <a href="hoat-dong-ngoai-khoa.php" class="tq-program-card">
                <div class="tq-program-card-img">
                    <img src="olympia/images/noibat_2.jpg" alt="Ngoại khóa">
                </div>
                <div class="tq-program-card-content">
                    <h3>Ngoại khóa</h3>
                    <p>Hoạt động phát triển kỹ năng</p>
                </div>
            </a>
        </div>

        <!-- Main Layout with Sidebars -->
        <div class="tq-main-layout">
            <!-- Left Sidebar with Gallery -->
            <aside class="tq-sidebar-left">
                <div class="tq-sidebar-card">
                    <h4>Khoảnh khắc tại trường</h4>
                    <div class="tq-mini-gallery">
                        <div class="tq-mini-img"><img src="olympia/images/noibat_1.jpg" alt=""></div>
                        <div class="tq-mini-img"><img src="olympia/images/noibat_2.jpg" alt=""></div>
                        <div class="tq-mini-img"><img src="olympia/images/noibat_3.jpg" alt=""></div>
                        <div class="tq-mini-img"><img src="olympia/images/noibat_4.jpg" alt=""></div>
                    </div>
                </div>
                <div class="tq-sidebar-card">
                    <h4>Thông tin liên hệ</h4>
                    <ul class="tq-info-list">
                        <li><strong>Hotline</strong>024 3333 8888</li>
                        <li><strong>Email</strong>tuyensinh@meyschool.edu.vn</li>
                        <li><strong>Địa chỉ</strong>Khu đô thị Mỹ Đình, Nam Từ Liêm, Hà Nội</li>
                        <li><strong>Giờ làm việc</strong>Thứ 2 - Thứ 6: 8:00 - 17:00</li>
                    </ul>
                </div>
            </aside>

            <!-- Center Content -->
            <div class="tq-content-center">
                <h2 class="tq-section-title">Giới thiệu chương trình</h2>
                <p class="tq-intro-text">
                    Meyschool Đoàn Thị Điểm tự hào mang đến <strong>chương trình giáo dục toàn diện</strong>,
                    kết hợp giữa chương trình chuẩn của Bộ Giáo dục và Đào tạo Việt Nam với các phương pháp
                    giáo dục tiên tiến từ các nền giáo dục hàng đầu thế giới.
                </p>

                <div class="tq-features">
                    <div class="tq-feature-item">
                        <div class="tq-feature-img">
                            <img src="olympia/images/noibat_3.jpg" alt="Chương trình chuẩn">
                        </div>
                        <div class="tq-feature-content">
                            <h4>Chương trình chuẩn</h4>
                            <p>Theo chuẩn Bộ GD&ĐT Việt Nam, đảm bảo kiến thức nền tảng vững chắc.</p>
                        </div>
                    </div>
                    <div class="tq-feature-item">
                        <div class="tq-feature-img">
                            <img src="olympia/images/noibat_4.jpg" alt="Hội nhập quốc tế">
                        </div>
                        <div class="tq-feature-content">
                            <h4>Hội nhập quốc tế</h4>
                            <p>Tiếp cận phương pháp giáo dục tiên tiến từ các nền giáo dục hàng đầu.</p>
                        </div>
                    </div>
                    <div class="tq-feature-item">
                        <div class="tq-feature-img">
                            <img src="olympia/images/noibat_5.png" alt="Phát triển tư duy">
                        </div>
                        <div class="tq-feature-content">
                            <h4>Phát triển tư duy</h4>
                            <p>Tập trung tư duy phản biện, sáng tạo và kỹ năng giải quyết vấn đề.</p>
                        </div>
                    </div>
                    <div class="tq-feature-item">
                        <div class="tq-feature-img">
                            <img src="olympia/images/noibat_7.jpg" alt="Kỹ năng toàn diện">
                        </div>
                        <div class="tq-feature-content">
                            <h4>Kỹ năng toàn diện</h4>
                            <p>Phát triển kỹ năng sống, giao tiếp và làm việc nhóm hiệu quả.</p>
                        </div>
                    </div>
                </div>

                <p class="tq-intro-text" style="margin-top: 40px;">
                    Chúng tôi tin rằng mỗi học sinh đều có <strong>tiềm năng độc đáo</strong> và cần được
                    phát triển toàn diện về trí tuệ, thể chất, tình cảm và kỹ năng xã hội.
                    Với đội ngũ giáo viên giàu kinh nghiệm và cơ sở vật chất hiện đại,
                    chúng tôi cam kết mang đến <strong>môi trường học tập tốt nhất</strong>.
                </p>
            </div>

            <!-- Right Sidebar -->
            <aside class="tq-sidebar-right">
                <div class="tq-news-box">
                    <h4>Tin tức nổi bật</h4>
                    <div class="tq-news-item">
                        <div class="tq-news-date">18/03/2026</div>
                        <a href="#" class="tq-news-title">Lễ khai giảng năm học 2025-2026</a>
                    </div>
                    <div class="tq-news-item">
                        <div class="tq-news-date">15/03/2026</div>
                        <a href="#" class="tq-news-title">Chương trình học bổng năm học mới</a>
                    </div>
                    <div class="tq-news-item">
                        <div class="tq-news-date">10/03/2026</div>
                        <a href="#" class="tq-news-title">Chứng nhận quốc tế ACS WASC</a>
                    </div>
                </div>

                <div class="tq-sidebar-card" style="padding: 0; overflow: hidden;">
                    <img src="olympia/images/about-us-2.jpg" alt=""
                        style="width: 100%; height: 150px; object-fit: cover;">
                    <div style="padding: 20px;">
                        <h4 style="font-size: 16px; margin-bottom: 8px;">Cơ sở vật chất hiện đại</h4>
                        <p style="font-size: 13px; color: #666;">Phòng học, thư viện, phòng lab đạt chuẩn quốc tế</p>
                    </div>
                </div>
            </aside>
        </div>

        <!-- Stats Banner -->
        <section class="tq-stats-banner">
            <div class="tq-stats-grid">
                <div class="tq-stat-item">
                    <div class="tq-stat-number">20+</div>
                    <div class="tq-stat-label">Năm kinh nghiệm</div>
                </div>
                <div class="tq-stat-item">
                    <div class="tq-stat-number">4</div>
                    <div class="tq-stat-label">Cấp học</div>
                </div>
                <div class="tq-stat-item">
                    <div class="tq-stat-number">5000+</div>
                    <div class="tq-stat-label">Học sinh</div>
                </div>
                <div class="tq-stat-item">
                    <div class="tq-stat-number">95%</div>
                    <div class="tq-stat-label">Tốt nghiệp đại học</div>
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