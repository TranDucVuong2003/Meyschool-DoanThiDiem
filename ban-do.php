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
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Bản đồ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Bản đồ">
    <meta property="og:description" content="">
    <meta property="og:url" content="ban-do.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Bản đồ">
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

    body.show-admin-bar {
        margin-top: 0px !important;
    }

    :root {
        --map-blue-1: #439bd4;
        --map-blue-2: #4db0e4;
        --map-blue-3: #eaf7ff;
        --map-ink: #1f3f5f;
    }

    .map-page {
        background: radial-gradient(circle at 10% 0%, #eef9ff 0%, #f8fcff 44%, #ffffff 100%);
        color: var(--map-ink);
        margin-bottom: 120px;
    }

    .map-wide {
        width: min(95vw, 1500px);
        margin: 0 auto;
    }

    .map-hero {
        position: relative;
        padding: 112px 0 58px;
        overflow: hidden;
        background: linear-gradient(125deg, rgba(67, 155, 212, 0.97) 0%, rgba(77, 176, 228, 0.93) 72%, rgba(77, 176, 228, 0.85) 100%);
    }

    .map-hero::before,
    .map-hero::after {
        content: '';
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .map-hero::before {
        width: 340px;
        height: 340px;
        right: -70px;
        top: -120px;
        background: rgba(255, 255, 255, 0.18);
    }

    .map-hero::after {
        width: 280px;
        height: 280px;
        left: -120px;
        bottom: -110px;
        background: rgba(255, 255, 255, 0.12);
    }

    .map-hero .breadcrumb {
        margin: 0 0 18px;
        position: static !important;
        transform: none !important;
        display: inline-flex;
        flex-wrap: wrap;
        gap: 8px;
        padding: 8px 16px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.35);
        left: auto !important;
        right: auto !important;
        top: auto !important;
        bottom: auto !important;
    }

    .map-hero .breadcrumb li,
    .map-hero .breadcrumb li a {
        color: #fff;
        font-size: 13px;
        position: static !important;
    }

    .map-hero-title {
        margin: 0;
        font-size: clamp(34px, 4.5vw, 56px);
        line-height: 1.08;
        color: #fff;
        font-family: 'Garamond', serif;
        max-width: 920px;
    }

    .map-hero-sub {
        margin: 14px 0 0;
        max-width: 760px;
        font-size: 17px;
        line-height: 1.75;
        color: rgba(255, 255, 255, 0.95);
    }

    .map-content {
        padding: 42px 0 70px;
    }

    .map-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.3fr) minmax(280px, 0.7fr);
        gap: 24px;
        align-items: start;
    }

    .map-card {
        background: #fff;
        border: 1px solid rgba(67, 155, 212, 0.15);
        border-radius: 22px;
        box-shadow: 0 16px 32px rgba(24, 72, 115, 0.1);
        padding: 24px;
    }

    .map-card h2,
    .map-card h3 {
        margin: 0 0 14px;
        color: #236c9d;
        font-family: 'Garamond', serif;
        font-size: clamp(30px, 3vw, 38px);
        line-height: 1.15;
        padding: 0 !important;
    }

    .map-card p {
        margin: 0 0 13px;
        line-height: 1.85;
        color: #396487;
        font-size: 16px;
    }

    .map-meta {
        display: grid;
        gap: 12px;
        margin: 16px 0 0;
    }

    .map-meta-item {
        background: var(--map-blue-3);
        border: 1px solid rgba(67, 155, 212, 0.2);
        border-radius: 14px;
        padding: 12px 14px;
    }

    .map-meta-item b {
        display: block;
        font-size: 13px;
        letter-spacing: 0.4px;
        text-transform: uppercase;
        color: #2b7eb7;
        margin-bottom: 5px;
    }

    .map-meta-item span {
        color: #204b6f;
        font-weight: 600;
        line-height: 1.55;
        font-size: 15px;
    }

    .map-embed {
        margin-top: 20px;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 14px 28px rgba(22, 64, 101, 0.16);
        border: 1px solid rgba(67, 155, 212, 0.2);
    }

    .map-embed iframe {
        width: 100%;
        height: 510px;
        border: none;
    }

    .map-actions {
        margin-top: 22px;
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .map-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 190px;
        min-height: 48px;
        padding: 10px 18px;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 0.45px;
        border: 1px solid transparent;
        transition: all 0.2s ease;
    }

    .map-btn-primary {
        background: linear-gradient(120deg, var(--map-blue-1), var(--map-blue-2));
        color: #fff;
        box-shadow: 0 10px 22px rgba(67, 155, 212, 0.24);
    }

    .map-btn-primary:hover {
        opacity: 0.94;
    }

    .map-btn-ghost {
        background: #f6fbff;
        color: #246b9d;
        border-color: rgba(67, 155, 212, 0.28);
    }

    .map-btn-ghost:hover {
        background: #eaf7ff;
    }

    .map-side {
        display: grid;
        gap: 16px;
    }

    .map-side-card {
        background: #fff;
        border: 1px solid rgba(67, 155, 212, 0.15);
        border-radius: 18px;
        padding: 16px;
        box-shadow: 0 12px 24px rgba(22, 64, 101, 0.08);
    }

    .map-side-card h4 {
        margin: 0 0 10px;
        color: #236c9d;
        font-family: 'Garamond', serif;
        font-size: 28px;
        line-height: 1.15;
        padding: 0 !important;
    }

    .map-side-card p {
        margin: 0;
        color: #416a8b;
        line-height: 1.72;
        font-size: 15px;
    }

    .map-gallery {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
        margin-top: 12px;
    }

    .map-gallery figure {
        margin: 0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(22, 64, 101, 0.14);
    }

    .map-gallery img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        display: block;
    }

    @media (max-width: 1080px) {
        .map-grid {
            grid-template-columns: 1fr;
        }

        .map-gallery img {
            height: 150px;
        }
    }

    @media (max-width: 768px) {
        .map-wide {
            width: min(94vw, 1500px);
        }

        .map-hero {
            padding: 95px 0 44px;
        }

        .map-hero-sub {
            font-size: 15px;
        }

        .map-card,
        .map-side-card {
            padding: 16px;
            border-radius: 16px;
        }

        .map-embed iframe {
            height: 380px;
        }

        .map-gallery {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content map-page">
        <section class="map-hero">
            <div class="map-wide" data-aos="fade-up">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="lien-he.php">Liên hệ</a></li>
                    <li class="breadcrumb-item active">Bản đồ</li>
                </ol>

                <h1 class="map-hero-title">Bản đồ chỉ đường đến Meyschool Đoàn Thị Điểm</h1>
                <p class="map-hero-sub">Định vị nhanh khuôn viên trường, chọn lộ trình thuận tiện cho phụ huynh và học
                    sinh, đồng thời xem thêm các góc hình ảnh chân thực về không gian học tập.</p>
            </div>
        </section>

        <section class="map-content">
            <div class="map-wide map-grid">
                <article class="map-card" data-aos="fade-up">
                    <h2>Đến trường dễ dàng, đón con thuận tiện</h2>
                    <p>Trường Meyschool Đoàn Thị Điểm tọa lạc tại Khu đô thị Trung Văn, Nam Từ Liêm, Hà Nội. Vị trí kết
                        nối tốt với các trục đường chính, phù hợp cho phụ huynh di chuyển vào giờ cao điểm.</p>
                    <p>Phụ huynh có thể mở trực tiếp bản đồ để lựa chọn cung đường tối ưu theo thời gian thực. Khu vực
                        trường có bãi đỗ xe cho phụ huynh và khách đến tham quan.</p>

                    <div class="map-meta">
                        <div class="map-meta-item">
                            <b>Địa chỉ</b>
                            <span><?= htmlspecialchars($ss['address']) ?></span>
                        </div>
                        <div class="map-meta-item">
                            <b>Hotline</b>
                            <span><?= htmlspecialchars($ss['hotline']) ?></span>
                        </div>
                        <div class="map-meta-item">
                            <b>Khung giờ hỗ trợ</b>
                            <span><?= htmlspecialchars($ss['work_time_weekdays']) ?></span>
                        </div>
                    </div>

                    <div class="map-embed">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.296041924963!2d105.79331437582938!3d20.98148598065586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc508fd03ab%3A0x329f2eb08c404f27!2sThe%20Olympia%20Schools!5e0!3m2!1sen!2s!4v1709712345678!5m2!1sen!2s"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="map-actions">
                        <a href="https://maps.app.goo.gl/ABC123" target="_blank" class="map-btn map-btn-primary">Mở
                            Google Maps</a>
                        <a href="lien-he.php" class="map-btn map-btn-ghost">Liên hệ tư vấn</a>
                    </div>
                </article>

                <aside class="map-side" data-aos="fade-up" data-aos-delay="120">
                    <div class="map-side-card">
                        <h4>Hướng dẫn nhanh</h4>
                        <p>Gợi ý tìm kiếm trên bản đồ: Meyschool Đoàn Thị Điểm hoặc The Olympia Schools. Khi đến cổng
                            trường, phụ huynh có thể liên hệ bảo vệ để được hướng dẫn khu vực đỗ xe và đón học sinh.</p>
                    </div>

                    <!-- <div class="map-side-card">
                        <h4>Hình ảnh khuôn viên</h4>
                        <p>Không gian học tập xanh, thoáng và hiện đại, tạo cảm giác an toàn, thân thiện cho học sinh
                            mỗi ngày.</p>
                        <div class="map-gallery">
                            <figure><img src="storage/jnp2203-1-1920x1080.jpg" alt="Toàn cảnh khuôn viên trường">
                            </figure>
                            <figure><img src="storage/olympia-schools-1.jpg" alt="Không gian hoạt động của học sinh">
                            </figure>
                            <figure><img src="storage/olympia-khai-truong-9-1180x720.jpg" alt="Khu vực sinh hoạt chung">
                            </figure>
                            <figure><img src="storage/olympia-hoc-sinh-tieu-hoc.jpg"
                                    alt="Học sinh tại Meyschool Đoàn Thị Điểm"></figure>
                        </div>
                    </div> -->
                </aside>
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