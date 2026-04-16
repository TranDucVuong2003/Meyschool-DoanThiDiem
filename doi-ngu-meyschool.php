<?php
$teacherImageDir = __DIR__ . '/assets/img/anh-giao-vien';
$teacherImageWebPath = 'assets/img/anh-giao-vien';
$teacherImages = [];

if (is_dir($teacherImageDir)) {
    $items = scandir($teacherImageDir);
    if ($items !== false) {
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $fullPath = $teacherImageDir . DIRECTORY_SEPARATOR . $item;
            if (!is_file($fullPath)) {
                continue;
            }

            $ext = strtolower(pathinfo($item, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'], true)) {
                $teacherImages[] = $item;
            }
        }
    }
}

natsort($teacherImages);
$teacherImages = array_values($teacherImages);

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

    <title>Đội ngũ Meyschool Đoàn Thị Điểm</title>
    <meta name="description" content="Đội ngũ Meyschool">
    <meta property="og:site_name" content="Meyschool Đoàn Thị Điểm">
    <meta property="og:title" content="Đội ngũ Meyschool">
    <meta property="og:description" content="Đội ngũ Meyschool">
    <meta property="og:url" content="doi-ngu-meyschool.php">
    <meta property="og:type" content="article">
    <meta name="twitter:title" content="Đội ngũ Meyschool">
    <meta name="twitter:description" content="Đội ngũ Meyschool">

    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">

    <link rel="alternate" href="en/our-people.html" hreflang="en" />
    <link rel="alternate" href="doi-ngu-meyschool.php" hreflang="vi" />

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
        --team-blue-1: #439bd4;
        --team-blue-2: #4db0e4;
        --team-blue-3: #eaf7ff;
        --team-blue-4: #1f6fa0;
        --team-ink: #1f3f59;
        --team-text: #395f7e;
        --team-border: rgba(67, 155, 212, 0.2);
        --team-shadow: 0 14px 30px rgba(16, 49, 79, 0.09);
    }

    .team-page {
        background: radial-gradient(circle at 0% 0%, #ecf9ff 0%, #f8fcff 45%, #ffffff 100%);
        color: var(--team-ink);
    }

    .team-wrap {
        width: min(95vw, 1520px);
        margin: 0 auto;
    }

    .team-hero {
        position: relative;
        overflow: hidden;
        padding: 112px 0 74px;
        background: linear-gradient(130deg, rgba(67, 155, 212, 0.95) 0%, rgba(77, 176, 228, 0.9) 70%, rgba(77, 176, 228, 0.82) 100%), url('olympia/images/banner-doi-ngu-olym.jpg') center/cover no-repeat;
    }

    .team-hero::before,
    .team-hero::after {
        content: '';
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        background: rgba(255, 255, 255, 0.18);
    }

    .team-hero::before {
        width: 420px;
        height: 420px;
        top: -150px;
        right: -150px;
    }

    .team-hero::after {
        width: 250px;
        height: 250px;
        bottom: -100px;
        left: -90px;
    }

    .team-breadcrumb {
        margin: 0 0 16px;
        display: inline-flex;
        flex-wrap: wrap;
        gap: 8px;
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.38);
        border-radius: 999px;
        padding: 8px 16px;
        position: static !important;
        transform: none !important;
    }

    .team-breadcrumb li,
    .team-breadcrumb li a {
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }

    .team-breadcrumb li.breadcrumb-item {
        margin-left: 0 !important;
    }

    .team-breadcrumb li.breadcrumb-item.active {
        color: #fff !important;
        opacity: 0.96;
    }

    .team-breadcrumb li.breadcrumb-item:before {
        content: none !important;
        display: none !important;
    }

    .team-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
        content: "\00b7" !important;
        display: inline-block !important;
        float: none !important;
        width: auto !important;
        height: auto !important;
        background: transparent !important;
        color: rgba(255, 255, 255, 0.92) !important;
        margin: 0 8px 0 2px;
        padding: 0 !important;
        position: static !important;
    }

    .team-hero-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: minmax(0, 1.2fr) minmax(280px, 0.8fr);
        gap: 24px;
        align-items: center;
    }

    .team-hero h1 {
        margin: 0;
        color: #fff;
        font-family: 'Garamond', serif;
        font-size: clamp(30px, 4vw, 54px);
        line-height: 1.05;
        max-width: 880px;
    }

    .team-hero p {
        margin: 16px 0 0;
        color: rgba(255, 255, 255, 0.96);
        font-size: 17px;
        line-height: 1.78;
        max-width: 820px;
    }

    .team-hero-tags {
        margin-top: 18px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .team-hero-tags span {
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

    .team-hero-card {
        background: rgba(255, 255, 255, 0.94);
        border-radius: 22px;
        border: 1px solid var(--team-border);
        box-shadow: 0 16px 32px rgba(13, 54, 88, 0.22);
        padding: 16px;
    }

    .team-hero-card img {
        width: 100%;
        height: auto;
        border-radius: 14px;
        object-fit: cover;
        display: block;
    }

    .team-metrics {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 10px;
    }

    .team-metrics div {
        border: 1px solid var(--team-border);
        border-radius: 12px;
        background: #fff;
        padding: 10px;
    }

    .team-metrics b {
        display: block;
        color: var(--team-blue-4);
        font-size: 24px;
        margin-bottom: 4px;
    }

    .team-metrics span {
        color: #4d7493;
        font-size: 12px;
        line-height: 1.45;
    }

    .team-main {
        margin-bottom: 100px;
        padding: 40px 0 74px;
    }

    .team-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.35fr) minmax(280px, 0.65fr);
        gap: 24px;
    }

    .team-content {
        display: grid;
        gap: 24px;
    }

    .team-card,
    .team-side-card {
        background: #fff;
        border: 1px solid var(--team-border);
        border-radius: 20px;
        box-shadow: var(--team-shadow);
        padding: 22px;
    }

    .team-card h2,
    .team-side-card h3 {
        margin: 0 0 12px;
        color: var(--team-blue-4);
        font-family: 'Garamond', serif;
        font-size: 34px;
        line-height: 1.2;
        padding: 0 !important;
    }

    .team-card p,
    .team-card li,
    .team-side-card p,
    .team-side-card li {
        color: var(--team-text);
        font-size: 15px;
        line-height: 1.76;
    }

    .team-highlight {
        border-left: 4px solid var(--team-blue-1);
        border-radius: 14px;
        padding: 14px 16px;
        background: linear-gradient(120deg, #f4fbff 0%, #eaf7ff 100%);
        margin-bottom: 12px;
    }

    .team-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 14px;
    }

    .team-filter button {
        border: 1px solid var(--team-border);
        background: #f2fbff;
        color: var(--team-blue-4);
        border-radius: 999px;
        min-height: 40px;
        padding: 8px 14px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.2px;
        transition: all 0.2s ease;
    }

    .team-filter button.active,
    .team-filter button:hover {
        color: #fff;
        border-color: transparent;
        background: linear-gradient(120deg, var(--team-blue-1), var(--team-blue-2));
        box-shadow: 0 8px 16px rgba(67, 155, 212, 0.22);
    }

    .team-people {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
        gap: 14px;
    }

    .team-person {
        border: 1px solid var(--team-border);
        border-radius: 14px;
        overflow: hidden;
        background: #fff;
        display: block;
    }

    .team-person img {
        width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
        background: #eef8ff;
    }

    .team-person-body {
        padding: 12px;
    }

    .team-person h4 {
        margin: 0 0 4px;
        color: #2e79ad;
        font-family: 'Garamond', serif;
        font-size: 21px;
        line-height: 1.2;
    }

    .team-person small {
        display: block;
        color: #5d7e98;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        margin-bottom: 6px;
    }

    .team-person p {
        margin: 0;
        font-size: 14px;
        line-height: 1.65;
    }

    .team-person[data-group] {
        transition: opacity 0.2s ease;
    }

    .team-person.is-hidden {
        display: none;
    }

    .team-stats {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }

    .team-stat {
        border: 1px solid var(--team-border);
        border-radius: 12px;
        background: #f9fdff;
        padding: 10px;
        text-align: center;
    }

    .team-stat b {
        display: block;
        color: #2d7bb1;
        font-size: 26px;
        line-height: 1;
    }

    .team-stat span {
        display: block;
        margin-top: 4px;
        color: #4c7190;
        font-size: 13px;
        line-height: 1.5;
    }

    .team-news-list {
        display: grid;
        gap: 10px;
    }

    .team-news-item {
        display: grid;
        grid-template-columns: 100px minmax(0, 1fr);
        gap: 10px;
        align-items: center;
        border: 1px solid var(--team-border);
        border-radius: 12px;
        overflow: hidden;
        text-decoration: none;
        background: #fbfeff;
    }

    .team-news-item img {
        width: 100%;
        height: 86px;
        object-fit: cover;
        display: block;
    }

    .team-news-item span {
        color: #2f638f;
        font-size: 14px;
        line-height: 1.45;
        font-weight: 700;
        padding-right: 10px;
    }

    .team-side-links {
        display: grid;
        gap: 10px;
    }

    .team-side-links a {
        display: block;
        text-decoration: none;
        color: #2f638f;
        border: 1px solid var(--team-border);
        border-radius: 12px;
        background: #f9fdff;
        padding: 10px 12px;
        font-size: 14px;
        line-height: 1.55;
    }

    .team-side-links a:hover {
        background: #eaf7ff;
    }

    .team-contact-item {
        background: #f7fcff;
        border: 1px solid var(--team-border);
        border-radius: 12px;
        padding: 10px 12px;
        margin-bottom: 10px;
    }

    .team-contact-item b {
        display: block;
        color: #2d7bb1;
        font-size: 13px;
        margin-bottom: 4px;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .team-contact-item span {
        color: #204c70;
        font-weight: 600;
        font-size: 14px;
        line-height: 1.5;
    }

    .team-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 12px;
    }

    .team-btn {
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

    .team-btn-primary {
        color: #fff;
        background: linear-gradient(120deg, var(--team-blue-1), var(--team-blue-2));
        box-shadow: 0 10px 20px rgba(67, 155, 212, 0.24);
    }

    .team-btn-light {
        color: #2b79af;
        background: #f7fcff;
        border-color: var(--team-border);
    }

    @media (max-width: 1180px) {

        .team-hero-grid,
        .team-grid {
            grid-template-columns: 1fr;
        }

        .team-people {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 768px) {
        .team-wrap {
            width: min(94vw, 1520px);
        }

        .team-hero {
            padding: 94px 0 42px;
        }

        .team-hero p {
            font-size: 15px;
        }

        .team-metrics,
        .team-stats {
            grid-template-columns: 1fr;
        }

        .team-card,
        .team-side-card {
            padding: 16px;
            border-radius: 16px;
        }

        .team-people {
            grid-template-columns: 1fr;
        }

        .team-person img {
            height: 250px;
        }

        .team-news-item {
            grid-template-columns: 90px minmax(0, 1fr);
        }
    }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content team-page">
        <section class="team-hero">
            <div class="team-wrap" data-aos="fade-up">
                <div class="team-hero-grid">
                    <div>
                        <ol class="breadcrumb team-breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="ve-chung-toi.php">Về chúng tôi</a></li>
                            <li class="breadcrumb-item active">Đội ngũ Meyschool Đoàn Thị Điểm</li>
                        </ol>

                        <h1>Đội ngũ Meyschool Đoàn Thị Điểm</h1>
                        <p>Đội ngũ giáo viên và chuyên gia tại Meyschool Đoàn Thị Điểm được xây dựng theo mô hình liên
                            ngành: học thuật,
                            tư vấn tâm lý, hướng nghiệp và phát triển công dân toàn cầu, cùng đồng hành để mỗi học sinh
                            có lộ trình học tập phù hợp.</p>

                        <div class="team-hero-tags">
                            <span>Học thuật vững</span>
                            <span>Giàu trải nghiệm quốc tế</span>
                            <span>Đồng hành cá nhân hóa</span>
                        </div>
                    </div>

                    <div class="team-hero-card">
                        <img src="assets/img/anh-giao-vien/z7369054786972-1a0cb760778270bac2703d36eb1c4ce3 (1).jpg"
                            alt="Đội ngũ Meyschool Đoàn Thị Điểm">
                    </div>
                </div>
            </div>
        </section>

        <section class="team-main">
            <div class="team-wrap team-grid">
                <div class="team-content">
                    <article class="team-card" data-aos="fade-up">
                        <h2>Định vị đội ngũ</h2>
                        <div class="team-highlight">
                            <p>Meyschool Đoàn Thị Điểm xây dựng đội ngũ theo trục năng lực: chuyên môn bộ môn, năng lực
                                sư phạm hiện
                                đại, và khả năng dẫn dắt học sinh trong bối cảnh hội nhập.</p>
                        </div>
                        <div class="team-stats">
                            <div class="team-stat"><b>37%</b><span>Thạc sĩ</span></div>
                            <div class="team-stat"><b>27%</b><span>Đào tạo ở nước ngoài</span></div>
                            <div class="team-stat"><b>64</b><span>Chứng chỉ quốc tế</span></div>
                            <div class="team-stat"><b>10</b><span>Giáo viên có chứng chỉ IB</span></div>
                        </div>
                    </article>

                    <article class="team-card" data-aos="fade-up">
                        <h2>Danh bạ chuyên môn</h2>
                        <div class="team-people" id="teamPeople">
                            <?php foreach ($teacherImages as $teacherImage): ?>
                            <article class="team-person">
                                <img src="<?php echo $teacherImageWebPath . '/' . rawurlencode($teacherImage); ?>"
                                    alt="Ảnh giáo viên">
                            </article>
                            <?php endforeach; ?>
                        </div>
                    </article>

                    <article class="team-card" data-aos="fade-up">
                        <h2>Gặp gỡ đội ngũ Meyschool Đoàn Thị Điểm</h2>
                        <div class="team-news-list">
                            <a class="team-news-item" href="nhung-chuyen-xe-cho-binh-yen.html">
                                <img src="" alt="Những chuyến xe chở bình yên">
                                <span>Những chuyến xe chở bình yên</span>
                            </a>
                            <a class="team-news-item" ">
                                <img src="" alt=" Chúc mừng nhóm giáo viên tiểu học Olympia">
                                <span>Chúc mừng nhóm giáo viên tiểu học Olympia đạt giải toàn quốc</span>
                            </a>
                            <a class="team-news-item" ">
                                <img src="" alt=" Lễ trao giải dự án dạy học sáng tạo">
                                <span>Lễ trao giải cuộc thi thiết kế dự án dạy học sáng tạo trên nền tảng CNTT</span>
                            </a>
                        </div>
                    </article>
                </div>

                <aside class="team-side" data-aos="fade-up" data-aos-delay="120">
                    <div class="team-side-card">
                        <h3>Khám phá thêm</h3>
                        <div class="team-side-links">
                            <a href="thong-diep-nguoi-sang-lap.php">Thông điệp Nhà sáng lập</a>
                            <a href="tam-nhin-su-menh.php">Tầm nhìn - Sứ mệnh</a>
                            <a href="ban-lanh-dao.php">Ban lãnh đạo</a>
                            <a href="doi-ngu-giao-vien.php">Đội ngũ giáo viên</a>
                        </div>
                    </div>

                    <div class="team-side-card">
                        <h3>Liên hệ</h3>
                        <div class="team-contact-item">
                            <b>Hotline</b>
                            <span><?= htmlspecialchars($ss['hotline']) ?></span>
                        </div>
                        <div class="team-contact-item">
                            <b>Email</b>
                            <span><?= htmlspecialchars($ss['email']) ?></span>
                        </div>
                        <div class="team-contact-item" style="margin-bottom: 0;">
                            <b>Địa chỉ</b>
                            <span><?= htmlspecialchars($ss['address']) ?></span>
                        </div>
                        <div class="team-actions">
                            <a href="dang-ky-tu-van.php" class="team-btn team-btn-primary">Đăng ký tư vấn</a>
                            <a href="lien-he.php" class="team-btn team-btn-light">Liên hệ ngay</a>
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