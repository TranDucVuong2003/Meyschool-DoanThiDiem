<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Thông báo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Thông báo">
    <meta property="og:description" content="">
    <meta property="og:url" content="thong-bao.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Thông báo">
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
            --ac-blue-1: #439bd4;
            --ac-blue-2: #4db0e4;
            --ac-blue-3: #e7f6ff;
            --ac-text: #1e3953;
        }

        .achievements-page {
            background: #f5fbff;
            color: var(--ac-text);
        }

        .ac-wide {
            width: min(96vw, 1520px);
            margin: 0 auto;
        }

        .ac-hero {
            padding: 118px 0 58px;
            background: linear-gradient(120deg, rgba(67, 155, 212, 0.97) 0%, rgba(77, 176, 228, 0.9) 65%, rgba(77, 176, 228, 0.72) 100%);
            position: relative;
            overflow: hidden;
        }

        .ac-hero::before {
            content: '';
            position: absolute;
            width: 380px;
            height: 380px;
            border-radius: 50%;
            right: -120px;
            top: -120px;
            background: rgba(255, 255, 255, 0.18);
        }

        .ac-hero-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 24px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .ac-breadcrumb {
            margin: 0 0 16px;
            display: inline-flex;
            gap: 8px;
            flex-wrap: wrap;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 999px;
            padding: 8px 16px;
            position: static !important;
            left: auto !important;
            right: auto !important;
            top: auto !important;
            bottom: auto !important;
            transform: none !important;
        }

        .ac-breadcrumb li,
        .ac-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            position: static !important;
        }

        .ac-hero h1 {
            color: #fff;
            font-size: clamp(36px, 4.1vw, 60px);
            line-height: 1.1;
            margin: 0 0 14px;
            font-family: 'Garamond', serif;
        }

        .ac-hero p {
            margin: 0;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.85;
            font-size: 17px;
            max-width: 760px;
        }

        .ac-highlight {
            display: grid;
            gap: 12px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.42);
            border-radius: 24px;
            padding: 16px;
            box-shadow: 0 20px 40px rgba(14, 55, 91, 0.22);
        }

        .ac-highlight img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 14px;
        }

        .ac-highlight p {
            margin: 0;
            font-size: 14px;
            color: #fff;
        }

        .ac-section {
            padding: 56px 0;
        }

        .ac-intro {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 24px;
        }

        .ac-card {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.14);
            box-shadow: 0 16px 32px rgba(13, 51, 85, 0.08);
            border-radius: 22px;
            padding: 24px;
        }

        .ac-card h2 {
            margin: 0 0 12px;
            color: #2476ac;
            font-family: 'Garamond', serif;
            font-size: clamp(28px, 3vw, 42px);
            line-height: 1.2;
        }

        .ac-card p {
            margin: 0;
            color: #445d78;
            font-size: 16px;
            line-height: 1.85;
        }

        .ac-kpis {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .ac-kpi {
            background: linear-gradient(145deg, #439bd4 0%, #4db0e4 100%);
            border-radius: 18px;
            min-height: 115px;
            padding: 16px;
            color: #fff;
            box-shadow: 0 14px 28px rgba(67, 155, 212, 0.3);
        }

        .ac-kpi strong {
            display: block;
            font-size: 34px;
            font-family: 'Garamond', serif;
            line-height: 1;
            margin-bottom: 6px;
        }

        .ac-kpi span {
            font-size: 13px;
            line-height: 1.55;
            display: block;
        }

        .ac-tabs {
            margin-top: 28px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .ac-tab {
            border: none;
            background: #dff3ff;
            color: #2c7fb7;
            padding: 10px 14px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 0.4px;
            cursor: pointer;
        }

        .ac-tab.active {
            background: linear-gradient(145deg, #439bd4, #4db0e4);
            color: #fff;
        }

        .ac-grid {
            margin-top: 22px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .ac-item {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.15);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 14px 30px rgba(15, 48, 78, 0.08);
            display: flex;
            flex-direction: column;
        }

        .ac-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .ac-item-content {
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1;
        }

        .ac-item-year {
            display: inline-flex;
            align-self: flex-start;
            padding: 6px 10px;
            border-radius: 999px;
            background: #ebf8ff;
            color: #2a7db5;
            font-size: 12px;
            font-weight: 700;
        }

        .ac-item h3 {
            margin: 0;
            font-size: 22px;
            line-height: 1.35;
            font-family: 'Garamond', serif;
            color: #235f8d;
        }

        .ac-item p {
            margin: 0;
            font-size: 14px;
            line-height: 1.7;
            color: #4c6580;
            flex: 1;
        }

        .ac-item a {
            text-decoration: none;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 700;
            color: #2a88c1;
            letter-spacing: 0.5px;
        }

        .ac-gallery {
            margin-top: 28px;
            display: grid;
            grid-template-columns: repeat(12, minmax(0, 1fr));
            gap: 12px;
        }

        .ac-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: 0 12px 24px rgba(15, 42, 70, 0.1);
        }

        .ac-gallery .g1 {
            grid-column: span 4;
            height: 310px;
        }

        .ac-gallery .g2 {
            grid-column: span 4;
            height: 150px;
        }

        .ac-gallery .g3 {
            grid-column: span 4;
            height: 150px;
        }

        .ac-gallery .g4 {
            grid-column: span 4;
            height: 150px;
        }

        .ac-gallery .g5 {
            grid-column: span 4;
            height: 150px;
        }

        .ac-gallery .g6 {
            grid-column: span 4;
            height: 310px;
        }

        @media (max-width: 1200px) {
            .ac-hero-grid,
            .ac-intro {
                grid-template-columns: 1fr;
            }

            .ac-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 900px) {
            .ac-gallery {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .ac-gallery .g1,
            .ac-gallery .g2,
            .ac-gallery .g3,
            .ac-gallery .g4,
            .ac-gallery .g5,
            .ac-gallery .g6 {
                grid-column: auto;
                height: 210px;
            }
        }

        @media (max-width: 768px) {
            .ac-wide {
                width: min(94vw, 1520px);
            }

            .ac-hero {
                padding: 96px 0 40px;
            }

            .ac-grid,
            .ac-kpis {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content achievements-page">
        <section class="ac-hero">
            <div class="ac-wide ac-hero-grid">
                <div>
                    <ol class="breadcrumb ac-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Tin tức</a></li>
                        <li class="breadcrumb-item active">Thông báo</li>
                    </ol>
                    <h1>Thông báo từ Nhà trường</h1>
                    <p>Cập nhật chính thức các thông báo về lịch học, lịch thi, sự kiện quan trọng và các nội dung điều chỉnh trong năm học. Phụ huynh và học sinh vui lòng theo dõi thường xuyên để nắm bắt thông tin kịp thời.</p>
                </div>
                <div class="ac-highlight">
                    <img src="storage/jnp2203-1-1920x1080.jpg" alt="Thông báo mới nhất">
                    <p>Cập nhật liên tục theo tuần để đảm bảo mọi thông tin đến phụ huynh và học sinh nhanh chóng, chính xác.</p>
                </div>
            </div>
        </section>

        <section class="ac-section">
            <div class="ac-wide">
                <div class="ac-intro">
                    <article class="ac-card" data-aos="fade-up">
                        <h2>Danh sách thông báo mới nhất</h2>
                        <p>Trang thông báo tổng hợp toàn bộ các nội dung chính thức từ nhà trường bao gồm lịch học, lịch thi, thay đổi chế độ, sự kiện đặc biệt và các hướng dẫn dành cho phụ huynh, học sinh trong suốt năm học.</p>
                    </article>
                    <div class="ac-kpis" data-aos="fade-up" data-aos-delay="100">
                        <div class="ac-kpi"><strong>50+</strong><span>Thông báo chính thức được phát hành mỗi năm học</span></div>
                        <div class="ac-kpi"><strong>24h</strong><span>Cập nhật nhanh chóng mọi thay đổi quan trọng</span></div>
                        <div class="ac-kpi"><strong>100%</strong><span>Phụ huynh được thông tin đầy đủ qua đa kênh</span></div>
                        <div class="ac-kpi"><strong>5+</strong><span>Danh mục: Lịch học, Tuyển sinh, Sự kiện, Hành chính, Y tế</span></div>
                    </div>
                </div>

                <div class="ac-tabs" id="ac-tabs">
                    <button class="ac-tab active" data-year="all">Tất cả</button>
                    <button class="ac-tab" data-year="lich-hoc">Lịch học</button>
                    <button class="ac-tab" data-year="tuyen-sinh">Tuyển sinh</button>
                    <button class="ac-tab" data-year="su-kien">Sự kiện</button>
                    <button class="ac-tab" data-year="hanh-chinh">Hành chính</button>
                </div>

                <div class="ac-grid" id="ac-grid">
                    <article class="ac-item" data-year="lich-hoc" data-aos="fade-up">
                        <img src="assets/banner/banner1.jpeg" alt="Lịch học">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Lịch học</span>
                            <h3>Thông báo điều chỉnh lịch học tuần 1 tháng 4</h3>
                            <p>Nhà trường thông báo lịch học điều chỉnh áp dụng từ tuần đầu tháng 4 cho toàn bộ các cấp học.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="tuyen-sinh" data-aos="fade-up" data-aos-delay="80">
                        <img src="assets/banner/banner2.jpeg" alt="Tuyển sinh">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Tuyển sinh</span>
                            <h3>Mở đăng ký tham quan campus đợt tháng 4</h3>
                            <p>Phụ huynh có thể đăng ký tham quan trực tiếp cơ sở vật chất và tìm hiểu chương trình đào tạo của nhà trường.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="su-kien" data-aos="fade-up" data-aos-delay="140">
                        <img src="assets/banner/banner3.jpeg" alt="Sự kiện">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Sự kiện</span>
                            <h3>Lịch Ngày hội STEAM dành cho khối THCS</h3>
                            <p>Sự kiện STEAM quy mô lớn với các hoạt động thực nghiệm khoa học, lập trình và sáng tạo công nghệ.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="hanh-chinh" data-aos="fade-up">
                        <img src="olympia/images/noibat_2.jpg" alt="Hành chính">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Hành chính</span>
                            <h3>Hướng dẫn cập nhật thông tin học sinh trên cổng phụ huynh</h3>
                            <p>Phụ huynh vui lòng cập nhật thông tin cá nhân và liên lạc trên hệ thống quản lý học sinh theo hướng dẫn.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="lich-hoc" data-aos="fade-up" data-aos-delay="80">
                        <img src="olympia/images/noibat_4.jpg" alt="Bán trú">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Lịch học</span>
                            <h3>Thực đơn tuần mới và lưu ý dinh dưỡng theo cấp học</h3>
                            <p>Thực đơn bán trú được cập nhật hàng tuần, đảm bảo dinh dưỡng cân đối và an toàn vệ sinh thực phẩm.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="hanh-chinh" data-aos="fade-up" data-aos-delay="140">
                        <img src="olympia/images/noibat_6.jpg" alt="Xe bus">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Hành chính</span>
                            <h3>Điều chỉnh tuyến xe bus khu vực Nam Từ Liêm</h3>
                            <p>Thông báo thay đổi lộ trình xe bus phục vụ học sinh khu vực Nam Từ Liêm từ tuần tiếp theo.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>
                </div>

                <div class="ac-gallery" data-aos="fade-up">
                    <img class="g1" src="olympia/images/noibat_6.jpg" alt="Ảnh 1">
                    <img class="g2" src="olympia/images/noibat_2.jpg" alt="Ảnh 2">
                    <img class="g3" src="olympia/images/noibat_4.jpg" alt="Ảnh 3">
                    <img class="g4" src="olympia/images/noibat_7.jpg" alt="Ảnh 4">
                    <img class="g5" src="storage/banner/tieu-hoc.jpg" alt="Ảnh 5">
                    <img class="g6" src="storage/banner/trung-hoc.jpg" alt="Ảnh 6">
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="olympia/js/bootstrap.min.js"></script>
    <script src="olympia/js/jquery.toast.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script src="vendor/core/plugins/language/js/language-publice209.js?v=1.0.0"></script>
    <script src="olympia/js/contact.js"></script>
    <script src="olympia/js/custom.js"></script>

    <script>
        AOS.init({
            once: true,
            disable: function() {
                return window.innerWidth < 768;
            }
        });

        (function() {
            var tabs = document.querySelectorAll('#ac-tabs .ac-tab');
            var cards = document.querySelectorAll('#ac-grid .ac-item');

            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    tabs.forEach(function(t) {
                        t.classList.remove('active');
                    });
                    tab.classList.add('active');

                    var year = tab.getAttribute('data-year');
                    cards.forEach(function(card) {
                        if (year === 'all' || card.getAttribute('data-year') === year) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        })();
    </script>
</body>

</html>