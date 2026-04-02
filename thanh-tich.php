<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Thành tích</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Thành tích">
    <meta property="og:description" content="">
    <meta property="og:url" content="thanh-tich.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Thành tích">
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
        margin-bottom: 120px;

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
                        <li class="breadcrumb-item active">Thành tích</li>
                    </ol>
                    <h1>Thành tích nổi bật của Meyschool Đoàn Thị Điểm</h1>
                    <p>Hành trình ghi dấu những cột mốc học thuật, hợp tác quốc tế và phát triển toàn diện của nhà
                        trường qua từng năm học. Mỗi thành tựu là kết quả của nỗ lực bền bỉ từ học sinh, giáo viên và
                        cộng đồng phụ huynh.</p>
                </div>
                <div class="ac-highlight">
                    <img src="storage/thanh-tich/chung-nhan-wasc.jpg" alt="Thành tích nổi bật">
                    <p>Nhà trường liên tục mở rộng hợp tác chiến lược, chuẩn hóa chất lượng đào tạo và khẳng định vị thế
                        trong hệ sinh thái giáo dục song ngữ hội nhập.</p>
                </div>
            </div>
        </section>

        <section class="ac-section">
            <div class="ac-wide">
                <div class="ac-intro">
                    <article class="ac-card" data-aos="fade-up">
                        <h2>Bức tranh thành tích theo giai đoạn phát triển</h2>
                        <p>Từ các chứng nhận kiểm định quốc tế đến các chương trình hợp tác giáo dục toàn cầu, Meyschool
                            liên tục xây dựng nền tảng học thuật vững chắc cho học sinh. Trên hành trình này, nhà trường
                            chú trọng đồng thời chất lượng đào tạo, năng lực hội nhập và trải nghiệm cá nhân hóa của
                            người học.</p>
                    </article>
                    <div class="ac-kpis" data-aos="fade-up" data-aos-delay="100">
                        <div class="ac-kpi"><strong>20+</strong><span>Năm phát triển liên tục đổi mới mô hình giáo
                                dục</span></div>
                        <div class="ac-kpi"><strong>50+</strong><span>Dự án hợp tác, trao đổi và kết nối học thuật quốc
                                tế</span></div>
                        <div class="ac-kpi"><strong>1000+</strong><span>Học sinh tốt nghiệp tiếp tục học tập tại các
                                trường đại học chất lượng</span></div>
                        <div class="ac-kpi"><strong>Top</strong><span>Đơn vị tiên phong về chương trình song ngữ hội
                                nhập tại Hà Nội</span></div>
                    </div>
                </div>

                <div class="ac-tabs" id="ac-tabs">
                    <button class="ac-tab active" data-year="all">Tất cả</button>
                    <button class="ac-tab" data-year="2020-2021">2020 - 2021</button>
                    <button class="ac-tab" data-year="2021-2022">2021 - 2022</button>
                    <button class="ac-tab" data-year="2022-2023">2022 - 2023</button>
                    <button class="ac-tab" data-year="2023-2024">2023 - 2024</button>
                </div>

                <div class="ac-grid" id="ac-grid">
                    <article class="ac-item" data-year="2021-2022" data-aos="fade-up">
                        <img src="storage/thanh-tich/chung-nhan-wasc.jpg" alt="WASC công nhận">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2021 - 2022</span>
                            <h3>WASC công nhận đạt chuẩn kiểm định toàn diện</h3>
                            <p>Đánh dấu bước tiến quan trọng trong chiến lược nâng cao chất lượng giáo dục theo chuẩn
                                quốc tế.</p>
                            <a href="wasc-chinh-thuc-cong-nhan-olympia-dat-chuan-kiem-dinh-toan-dien.html">Xem chi tiết
                                ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2022-2023" data-aos="fade-up" data-aos-delay="80">
                        <img src="storage/thanh-tich/ib-world-school.png" alt="IB World School">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2022 - 2023</span>
                            <h3>Chính thức trở thành IB World School</h3>
                            <p>Nhà trường được Tổ chức Tú tài Quốc tế (IB) chính thức công nhận là Trường học IB.</p>
                            <a href="olympia-chinh-thuc-tro-thanh-truong-hoc-ib-ib-world-school.html">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2022-2023" data-aos="fade-up" data-aos-delay="140">
                        <img src="storage/anh-dang-1.jpg" alt="Hợp tác Portland">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2022 - 2023</span>
                            <h3>Hợp tác giáo dục với hệ thống trường công lập Portland</h3>
                            <p>Mở rộng cơ hội giao lưu học thuật và tăng trải nghiệm quốc tế cho học sinh.</p>
                            <a href="olympia-hop-tac-giao-duc-voi-he-thong-cac-truong-cong-lap-portland-hoa-ky.html">Xem
                                chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2023-2024" data-aos="fade-up">
                        <img src="storage/375858674-702828201882368-5966117559020271070-n.jpg"
                            alt="Microsoft Showcase School">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2023 - 2024</span>
                            <h3>Được công nhận Trường học điển hình Microsoft</h3>
                            <p>Khẳng định năng lực triển khai công nghệ và chuyển đổi số trong dạy học toàn trường.</p>
                            <a href="olympia-tiep-tuc-duoc-cong-nhan-la-truong-hoc-dien-hinh-microsoft.html">Xem chi
                                tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2023-2024" data-aos="fade-up" data-aos-delay="80">
                        <img src="storage/z4838899140265-f68c68a84f8e8562b2f1c02adf81ef02-2.png"
                            alt="Hợp tác Singapore">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2023 - 2024</span>
                            <h3>Ký kết hợp tác quốc tế với đối tác Singapore</h3>
                            <p>Mở rộng mạng lưới trường đối tác nhằm đa dạng hóa trải nghiệm học tập xuyên văn hóa.</p>
                            <a href="olympia-hop-tac-cung-guangyang.html">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2020-2021" data-aos="fade-up" data-aos-delay="140">
                        <img src="storage/thanh-tich/tt-10.jpg" alt="IELTS tại trường">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2020 - 2021</span>
                            <h3>Ký kết với Hội đồng Anh là địa điểm thi IELTS</h3>
                            <p>Gia tăng cơ hội tiếp cận các chuẩn đánh giá ngôn ngữ quốc tế ngay tại trường học.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>
                </div>

                <div class="ac-gallery" data-aos="fade-up">
                    <img class="g1" src="storage/thanh-tich/tt-13.jpg" alt="Ảnh thành tích 1">
                    <img class="g2" src="storage/thanh-tich/tt-11.jpg" alt="Ảnh thành tích 2">
                    <img class="g3" src="storage/thanh-tich/tt-12.jpg" alt="Ảnh thành tích 3">
                    <img class="g4" src="storage/thanh-tich/tt-14.jpg" alt="Ảnh thành tích 4">
                    <img class="g5" src="storage/thanh-tich/tt-7.jpg" alt="Ảnh thành tích 5">
                    <img class="g6" src="storage/thanh-tich/tt-9.jpg" alt="Ảnh thành tích 6">
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

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