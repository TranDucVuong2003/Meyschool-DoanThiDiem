<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Tin hoạt động</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Tin hoạt động">
    <meta property="og:description" content="">
    <meta property="og:url" content="tin-hoat-dong.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Tin hoạt động">
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

        body.show-admin-bar {
            margin-top: 0 !important;
        }

        :root {
            --news-blue-1: #439bd4;
            --news-blue-2: #4db0e4;
            --news-blue-3: #dff3ff;
            --news-text: #1f3147;
        }

        .activity-news-page {
            background: #f6fbff;
            color: var(--news-text);
        }

        .activity-wide {
            width: min(96vw, 1520px);
            margin: 0 auto;
        }

        .activity-hero {
            padding: 118px 0 56px;
            background: linear-gradient(120deg, rgba(67, 155, 212, 0.95) 0%, rgba(77, 176, 228, 0.9) 55%, rgba(77, 176, 228, 0.72) 100%);
            position: relative;
            overflow: hidden;
        }

        .activity-hero::before,
        .activity-hero::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
            filter: blur(2px);
        }

        .activity-hero::before {
            width: 380px;
            height: 380px;
            top: -120px;
            right: -90px;
        }

        .activity-hero::after {
            width: 240px;
            height: 240px;
            bottom: -90px;
            left: -30px;
        }

        .activity-hero-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 28px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .activity-breadcrumb {
            margin: 0 0 18px;
            display: inline-flex;
            gap: 10px;
            flex-wrap: wrap;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.36);
            border-radius: 999px;
            padding: 8px 16px;
            position: static !important;
            left: auto !important;
            right: auto !important;
            top: auto !important;
            bottom: auto !important;
            transform: none !important;
            z-index: 1;
        }

        .activity-breadcrumb li,
        .activity-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            line-height: 1.3;
            position: static !important;
        }

        .activity-hero h1 {
            color: #fff;
            font-size: clamp(34px, 4vw, 56px);
            line-height: 1.12;
            margin: 0 0 18px;
            font-family: 'Garamond', serif;
            font-weight: 700;
            max-width: 720px;
        }

        .activity-hero p {
            color: rgba(255, 255, 255, 0.95);
            font-size: 17px;
            line-height: 1.85;
            max-width: 780px;
            margin: 0;
        }

        .activity-hero-highlight {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.45);
            border-radius: 24px;
            padding: 16px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 14px;
            box-shadow: 0 20px 40px rgba(16, 57, 94, 0.2);
        }

        .activity-hero-highlight img {
            width: 100%;
            height: 170px;
            object-fit: cover;
            border-radius: 16px;
        }

        .activity-hero-highlight p {
            font-size: 14px;
            line-height: 1.7;
            margin: 0;
            color: #fff;
        }

        .activity-section {
            padding: 56px 0;
        }

        .activity-intro {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 26px;
        }

        .activity-intro-card {
            background: #fff;
            border-radius: 24px;
            padding: 26px;
            box-shadow: 0 18px 36px rgba(18, 63, 102, 0.08);
            border: 1px solid rgba(67, 155, 212, 0.16);
        }

        .activity-intro-card h2 {
            font-size: clamp(26px, 2.8vw, 38px);
            color: #2b7fb8;
            margin: 0 0 14px;
            font-family: 'Garamond', serif;
        }

        .activity-intro-card p {
            margin: 0;
            line-height: 1.9;
            color: #3f5873;
            font-size: 16px;
        }

        .activity-kpi-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        .activity-kpi {
            background: linear-gradient(155deg, #439bd4 0%, #4db0e4 100%);
            border-radius: 20px;
            padding: 18px;
            color: #fff;
            min-height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 14px 28px rgba(67, 155, 212, 0.3);
        }

        .activity-kpi strong {
            font-size: 34px;
            line-height: 1;
            margin-bottom: 8px;
            display: block;
            font-family: 'Garamond', serif;
        }

        .activity-kpi span {
            font-size: 14px;
            line-height: 1.5;
            opacity: 0.96;
        }

        .activity-listing {
            margin-top: 14px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .activity-item {
            background: #fff;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid rgba(67, 155, 212, 0.15);
            box-shadow: 0 16px 30px rgba(16, 48, 79, 0.08);
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .activity-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .activity-item-content {
            padding: 18px 18px 22px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 1;
        }

        .activity-tag {
            display: inline-flex;
            align-self: flex-start;
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.4px;
            background: var(--news-blue-3);
            color: #2576ad;
            text-transform: uppercase;
        }

        .activity-item h3 {
            font-size: 22px;
            line-height: 1.35;
            color: #245986;
            margin: 0;
            font-family: 'Garamond', serif;
        }

        .activity-item p {
            margin: 0;
            font-size: 14px;
            line-height: 1.75;
            color: #4a647f;
            flex: 1;
        }

        .activity-item a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-transform: uppercase;
            color: #2f8ec6;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.6px;
            text-decoration: none;
        }

        .activity-timeline-wrap {
            margin-top: 26px;
            background: #fff;
            border-radius: 24px;
            padding: 24px;
            border: 1px solid rgba(67, 155, 212, 0.15);
            box-shadow: 0 18px 34px rgba(16, 48, 79, 0.08);
        }

        .activity-section-title {
            margin: 0 0 18px;
            font-family: 'Garamond', serif;
            color: #236ea4;
            font-size: clamp(30px, 3vw, 42px);
            line-height: 1.2;
        }

        .activity-timeline {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .activity-step {
            background: #f4fbff;
            border: 1px solid rgba(67, 155, 212, 0.16);
            border-radius: 18px;
            padding: 16px;
        }

        .activity-step b {
            width: 34px;
            height: 34px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: linear-gradient(145deg, #439bd4, #4db0e4);
            color: #fff;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .activity-step h4 {
            margin: 0 0 8px;
            color: #256594;
            font-size: 18px;
            font-family: 'Garamond', serif;
        }

        .activity-step p {
            margin: 0;
            font-size: 13px;
            line-height: 1.65;
            color: #4f6780;
        }

        .activity-gallery {
            margin-top: 24px;
            display: grid;
            grid-template-columns: repeat(12, minmax(0, 1fr));
            gap: 12px;
        }

        .activity-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 18px;
            box-shadow: 0 12px 26px rgba(12, 44, 77, 0.1);
        }

        .activity-gallery .g1 {
            grid-column: span 4;
            height: 320px;
        }

        .activity-gallery .g2 {
            grid-column: span 3;
            height: 155px;
        }

        .activity-gallery .g3 {
            grid-column: span 5;
            height: 155px;
        }

        .activity-gallery .g4 {
            grid-column: span 3;
            height: 155px;
        }

        .activity-gallery .g5 {
            grid-column: span 5;
            height: 155px;
        }

        .activity-gallery .g6 {
            grid-column: span 4;
            height: 320px;
        }

        .activity-cta {
            margin-top: 28px;
            border-radius: 24px;
            background: linear-gradient(130deg, #439bd4 0%, #4db0e4 100%);
            padding: 34px;
            color: #fff;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 20px;
            align-items: center;
            box-shadow: 0 18px 36px rgba(67, 155, 212, 0.35);
        }

        .activity-cta h3 {
            margin: 0 0 8px;
            font-size: clamp(28px, 2.8vw, 40px);
            line-height: 1.15;
            font-family: 'Garamond', serif;
            color: #fff;
        }

        .activity-cta p {
            margin: 0;
            font-size: 15px;
            line-height: 1.75;
            color: rgba(255, 255, 255, 0.96);
            max-width: 700px;
        }

        .activity-cta-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .activity-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border-radius: 999px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            font-size: 12px;
            font-weight: 700;
            transition: all 0.25s ease;
        }

        .activity-btn-light {
            background: #fff;
            color: #2a7fb7;
        }

        .activity-btn-light:hover {
            background: #eef9ff;
            color: #1f6f9f;
        }

        .activity-btn-outline {
            border: 1px solid rgba(255, 255, 255, 0.8);
            color: #fff;
        }

        .activity-btn-outline:hover {
            background: rgba(255, 255, 255, 0.14);
            color: #fff;
        }

        @media (max-width: 1200px) {
            .activity-hero-grid,
            .activity-intro,
            .activity-cta {
                grid-template-columns: 1fr;
            }

            .activity-cta-actions {
                justify-content: flex-start;
            }

            .activity-listing {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .activity-timeline {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 900px) {
            .activity-gallery {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .activity-gallery .g1,
            .activity-gallery .g2,
            .activity-gallery .g3,
            .activity-gallery .g4,
            .activity-gallery .g5,
            .activity-gallery .g6 {
                grid-column: auto;
                height: 220px;
            }
        }

        @media (max-width: 768px) {
            .activity-hero {
                padding: 98px 0 42px;
            }

            .activity-wide {
                width: min(94vw, 1520px);
            }

            .activity-listing,
            .activity-timeline,
            .activity-kpi-grid {
                grid-template-columns: 1fr;
            }

            .activity-item img {
                height: 206px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content activity-news-page">
        <section class="activity-hero">
            <div class="activity-wide activity-hero-grid">
                <div>
                    <ol class="breadcrumb activity-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Tin tức</a></li>
                        <li class="breadcrumb-item active">Tin hoạt động</li>
                    </ol>
                    <h1>Nhịp sống Meyschool qua các hoạt động học tập - sáng tạo - kết nối cộng đồng</h1>
                    <p>Cập nhật liên tục các chương trình nổi bật tại Meyschool Đoàn Thị Điểm: dự án học tập liên môn, hoạt động ngoại khóa, ngày hội trải nghiệm, các sự kiện hợp tác quốc tế và hành trình phát triển toàn diện của học sinh trong từng giai đoạn.</p>
                </div>
                <div class="activity-hero-highlight">
                    <img src="storage/jnp2203-1-1920x1080.jpg" alt="Hoạt động nổi bật">
                    <p>Mỗi tuần, nhà trường triển khai chuỗi hoạt động đa dạng nhằm nuôi dưỡng tri thức, cảm xúc tích cực và kỹ năng hội nhập cho học sinh ở mọi cấp học.</p>
                </div>
            </div>
        </section>

        <section class="activity-section">
            <div class="activity-wide">
                <div class="activity-intro">
                    <article class="activity-intro-card" data-aos="fade-up">
                        <h2>Điểm tin hoạt động mới nhất</h2>
                        <p>Trang tin hoạt động được xây dựng theo định hướng trực quan - chi tiết - cập nhật nhanh, giúp phụ huynh và học sinh theo dõi toàn bộ hành trình học đường qua từng sự kiện cụ thể. Nội dung tập trung vào trải nghiệm thực tế, sản phẩm học tập và những khoảnh khắc giàu cảm hứng trong đời sống Meyschool.</p>
                    </article>
                    <div class="activity-kpi-grid" data-aos="fade-up" data-aos-delay="120">
                        <div class="activity-kpi">
                            <strong>120+</strong>
                            <span>Hoạt động học thuật và ngoại khóa mỗi năm học</span>
                        </div>
                        <div class="activity-kpi">
                            <strong>30+</strong>
                            <span>Sự kiện hợp tác - kết nối cộng đồng và đối tác giáo dục</span>
                        </div>
                        <div class="activity-kpi">
                            <strong>4</strong>
                            <span>Nhóm chủ đề chính: Học thuật, Nghệ thuật, Thể thao, Dự án xã hội</span>
                        </div>
                        <div class="activity-kpi">
                            <strong>100%</strong>
                            <span>Học sinh được tham gia ít nhất một hoạt động trải nghiệm mỗi tháng</span>
                        </div>
                    </div>
                </div>

                <div class="activity-listing">
                    <article class="activity-item" data-aos="fade-up">
                        <img src="assets/banner/banner1.jpeg" alt="Ngày hội STEAM">
                        <div class="activity-item-content">
                            <span class="activity-tag">Học thuật</span>
                            <h3>Ngày hội STEAM: Khám phá khoa học qua dự án thực hành</h3>
                            <p>Học sinh trình bày mô hình sáng tạo, vận dụng kiến thức Toán - Khoa học - Công nghệ để giải quyết vấn đề thực tiễn trong đời sống.</p>
                            <a href="javascript:;">Xem chi tiết <span>›</span></a>
                        </div>
                    </article>

                    <article class="activity-item" data-aos="fade-up" data-aos-delay="120">
                        <img src="assets/banner/banner2.jpeg" alt="Lễ hội văn hóa">
                        <div class="activity-item-content">
                            <span class="activity-tag">Văn hóa</span>
                            <h3>Tuần lễ văn hóa quốc tế và hành trình công dân toàn cầu</h3>
                            <p>Không gian đa văn hóa với các workshop ngôn ngữ, nghệ thuật và giao lưu chuyên đề giúp học sinh mở rộng góc nhìn quốc tế.</p>
                            <a href="javascript:;">Xem chi tiết <span>›</span></a>
                        </div>
                    </article>

                    <article class="activity-item" data-aos="fade-up" data-aos-delay="220">
                        <img src="assets/banner/banner3.jpeg" alt="Hoạt động thể thao">
                        <div class="activity-item-content">
                            <span class="activity-tag">Thể thao</span>
                            <h3>Giải thể thao liên cấp: Năng lượng tích cực - tinh thần đồng đội</h3>
                            <p>Các môn thi đấu đa dạng từ bóng rổ, bơi lội đến điền kinh, giúp học sinh phát triển thể chất, bản lĩnh và tinh thần fair-play.</p>
                            <a href="javascript:;">Xem chi tiết <span>›</span></a>
                        </div>
                    </article>
                </div>

                <div class="activity-timeline-wrap" data-aos="fade-up">
                    <h2 class="activity-section-title">Lịch hoạt động theo tháng</h2>
                    <div class="activity-timeline">
                        <article class="activity-step">
                            <b>01</b>
                            <h4>Tháng hội nhập</h4>
                            <p>Chuỗi hoạt động kết nối đầu năm, định hướng mục tiêu học tập và xây dựng văn hóa lớp học tích cực.</p>
                        </article>
                        <article class="activity-step">
                            <b>02</b>
                            <h4>Tháng trải nghiệm</h4>
                            <p>Field-trip, hoạt động dự án và trải nghiệm liên môn giúp học sinh học qua thực hành và phản biện.</p>
                        </article>
                        <article class="activity-step">
                            <b>03</b>
                            <h4>Tháng bứt phá</h4>
                            <p>Thi đấu học thuật, sân chơi tài năng và hoạt động thể thao liên cấp nhằm phát huy năng lực cá nhân.</p>
                        </article>
                        <article class="activity-step">
                            <b>04</b>
                            <h4>Tháng lan tỏa</h4>
                            <p>Dự án cộng đồng, chương trình thiện nguyện và showcase sản phẩm học tập cuối kỳ của học sinh.</p>
                        </article>
                    </div>
                </div>

                <div class="activity-gallery" data-aos="fade-up">
                    <img class="g1" src="olympia/images/noibat_6.jpg" alt="Hoạt động học sinh 1">
                    <img class="g2" src="olympia/images/noibat_2.jpg" alt="Hoạt động học sinh 2">
                    <img class="g3" src="olympia/images/noibat_4.jpg" alt="Hoạt động học sinh 3">
                    <img class="g4" src="olympia/images/noibat_7.jpg" alt="Hoạt động học sinh 4">
                    <img class="g5" src="storage/banner/tieu-hoc.jpg" alt="Hoạt động học sinh 5">
                    <img class="g6" src="storage/banner/trung-hoc.jpg" alt="Hoạt động học sinh 6">
                </div>

                <div class="activity-cta" data-aos="fade-up">
                    <div>
                        <h3>Đăng ký nhận bản tin hoạt động định kỳ</h3>
                        <p>Nhận thông tin mới về sự kiện, workshop, ngày hội trải nghiệm và các hoạt động nổi bật của học sinh Meyschool Đoàn Thị Điểm.</p>
                    </div>
                    <div class="activity-cta-actions">
                        <a class="activity-btn activity-btn-light" href="dang-ky-tu-van.php">Đăng ký tư vấn</a>
                        <a class="activity-btn activity-btn-outline" href="dang-ky-tham-quan.php">Đăng ký tham quan</a>
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
