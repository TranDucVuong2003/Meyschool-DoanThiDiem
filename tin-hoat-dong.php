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
                        <li class="breadcrumb-item active">Tin hoạt động</li>
                    </ol>
                    <h1>Nhịp sống Meyschool qua các hoạt động học tập - sáng tạo - kết nối</h1>
                    <p>Cập nhật liên tục các chương trình nổi bật tại Meyschool Đoàn Thị Điểm: dự án học tập liên môn, hoạt động ngoại khóa, ngày hội trải nghiệm, các sự kiện hợp tác quốc tế và hành trình phát triển toàn diện của học sinh trong từng giai đoạn.</p>
                </div>
                <div class="ac-highlight">
                    <img src="storage/jnp2203-1-1920x1080.jpg" alt="Hoạt động nổi bật">
                    <p>Mỗi tuần, nhà trường triển khai chuỗi hoạt động đa dạng nhằm nuôi dưỡng tri thức, cảm xúc tích cực và kỹ năng hội nhập cho học sinh ở mọi cấp học.</p>
                </div>
            </div>
        </section>

        <section class="ac-section">
            <div class="ac-wide">
                <div class="ac-intro">
                    <article class="ac-card" data-aos="fade-up">
                        <h2>Điểm tin hoạt động mới nhất</h2>
                        <p>Trang tin hoạt động được xây dựng theo định hướng trực quan - chi tiết - cập nhật nhanh, giúp phụ huynh và học sinh theo dõi toàn bộ hành trình học đường qua từng sự kiện cụ thể. Nội dung tập trung vào trải nghiệm thực tế, sản phẩm học tập và những khoảnh khắc giàu cảm hứng trong đời sống Meyschool.</p>
                    </article>
                    <div class="ac-kpis" data-aos="fade-up" data-aos-delay="100">
                        <div class="ac-kpi"><strong>120+</strong><span>Hoạt động học thuật và ngoại khóa mỗi năm học</span></div>
                        <div class="ac-kpi"><strong>30+</strong><span>Sự kiện hợp tác - kết nối cộng đồng và đối tác giáo dục</span></div>
                        <div class="ac-kpi"><strong>4</strong><span>Nhóm chủ đề: Học thuật, Nghệ thuật, Thể thao, Dự án xã hội</span></div>
                        <div class="ac-kpi"><strong>100%</strong><span>Học sinh tham gia ít nhất một hoạt động trải nghiệm mỗi tháng</span></div>
                    </div>
                </div>

                <div class="ac-tabs" id="ac-tabs">
                    <button class="ac-tab active" data-year="all">Tất cả</button>
                    <button class="ac-tab" data-year="hoc-thuat">Học thuật</button>
                    <button class="ac-tab" data-year="van-hoa">Văn hóa</button>
                    <button class="ac-tab" data-year="the-thao">Thể thao</button>
                </div>

                <div class="ac-grid" id="ac-grid">
                    <article class="ac-item" data-year="hoc-thuat" data-aos="fade-up">
                        <img src="assets/banner/banner1.jpeg" alt="Ngày hội STEAM">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Học thuật</span>
                            <h3>Ngày hội STEAM: Khám phá khoa học qua dự án thực hành</h3>
                            <p>Học sinh trình bày mô hình sáng tạo, vận dụng kiến thức Toán - Khoa học - Công nghệ để giải quyết vấn đề thực tiễn trong đời sống.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="van-hoa" data-aos="fade-up" data-aos-delay="80">
                        <img src="assets/banner/banner2.jpeg" alt="Tuần lễ văn hóa">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Văn hóa</span>
                            <h3>Tuần lễ văn hóa quốc tế và hành trình công dân toàn cầu</h3>
                            <p>Không gian đa văn hóa với các workshop ngôn ngữ, nghệ thuật và giao lưu chuyên đề giúp học sinh mở rộng góc nhìn quốc tế.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="the-thao" data-aos="fade-up" data-aos-delay="140">
                        <img src="assets/banner/banner3.jpeg" alt="Hoạt động thể thao">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Thể thao</span>
                            <h3>Giải thể thao liên cấp: Năng lượng tích cực - tinh thần đồng đội</h3>
                            <p>Các môn thi đấu đa dạng từ bóng rổ, bơi lội đến điền kinh, giúp học sinh phát triển thể chất, bản lĩnh và tinh thần fair-play.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="hoc-thuat" data-aos="fade-up">
                        <img src="olympia/images/noibat_2.jpg" alt="Dự án liên môn">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Học thuật</span>
                            <h3>Dự án học tập liên môn: Kết nối lý thuyết với thực tiễn</h3>
                            <p>Học sinh nghiên cứu theo nhóm, tổng hợp kiến thức từ nhiều môn học để tạo ra sản phẩm học tập có giá trị ứng dụng thực tế.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="van-hoa" data-aos="fade-up" data-aos-delay="80">
                        <img src="olympia/images/noibat_4.jpg" alt="Giao lưu nghệ thuật">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Văn hóa</span>
                            <h3>Chương trình giao lưu nghệ thuật và văn hóa đọc</h3>
                            <p>Tạo không gian sáng tạo cho học sinh thể hiện năng khiếu âm nhạc, hội họa và chia sẻ đam mê với sách.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="the-thao" data-aos="fade-up" data-aos-delay="140">
                        <img src="olympia/images/noibat_6.jpg" alt="Hội thao">
                        <div class="ac-item-content">
                            <span class="ac-item-year">Thể thao</span>
                            <h3>Hội thao toàn trường: Vượt qua giới hạn bản thân</h3>
                            <p>Sân chơi thể thao lành mạnh với đa dạng bộ môn, rèn luyện sức khỏe và tinh thần thể thao cao thượng cho học sinh mọi cấp học.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>
                </div>

                <div class="ac-gallery" data-aos="fade-up">
                    <img class="g1" src="olympia/images/noibat_6.jpg" alt="Hoạt động 1">
                    <img class="g2" src="olympia/images/noibat_2.jpg" alt="Hoạt động 2">
                    <img class="g3" src="olympia/images/noibat_4.jpg" alt="Hoạt động 3">
                    <img class="g4" src="olympia/images/noibat_7.jpg" alt="Hoạt động 4">
                    <img class="g5" src="storage/banner/tieu-hoc.jpg" alt="Hoạt động 5">
                    <img class="g6" src="storage/banner/trung-hoc.jpg" alt="Hoạt động 6">
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