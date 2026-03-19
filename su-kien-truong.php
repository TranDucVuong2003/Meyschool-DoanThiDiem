<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Sự kiện trường</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Sự kiện trường">
    <meta property="og:description" content="">
    <meta property="og:url" content="su-kien-truong.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Sự kiện trường">
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
            --ev-blue-1: #439bd4;
            --ev-blue-2: #4db0e4;
            --ev-blue-3: #e9f7ff;
            --ev-text: #1e3c5a;
        }

        .events-page {
            background: #f7fcff;
            color: var(--ev-text);
        }

        .ev-wide {
            width: min(96vw, 1520px);
            margin: 0 auto;
        }

        .ev-hero {
            padding: 116px 0 48px;
            background: linear-gradient(125deg, rgba(67, 155, 212, 0.97) 0%, rgba(77, 176, 228, 0.9) 55%, rgba(77, 176, 228, 0.72) 100%);
            position: relative;
            overflow: hidden;
        }

        .ev-hero::before {
            content: '';
            position: absolute;
            width: 340px;
            height: 340px;
            left: -80px;
            top: -120px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
        }

        .ev-hero::after {
            content: '';
            position: absolute;
            width: 250px;
            height: 250px;
            right: -70px;
            bottom: -90px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.14);
        }

        .ev-hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            align-items: end;
            position: relative;
            z-index: 2;
        }

        .ev-breadcrumb {
            margin: 0 0 15px;
            display: inline-flex;
            gap: 8px;
            flex-wrap: wrap;
            padding: 8px 16px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.42);
            position: static !important;
            left: auto !important;
            right: auto !important;
            top: auto !important;
            bottom: auto !important;
            transform: none !important;
        }

        .ev-breadcrumb li,
        .ev-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            position: static !important;
        }

        .ev-hero h1 {
            margin: 0 0 12px;
            color: #fff;
            font-size: clamp(36px, 4vw, 58px);
            line-height: 1.1;
            font-family: 'Garamond', serif;
        }

        .ev-hero p {
            margin: 0;
            max-width: 760px;
            color: rgba(255, 255, 255, 0.95);
            font-size: 17px;
            line-height: 1.8;
        }

        .ev-hero-media {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 22px;
            padding: 12px;
            box-shadow: 0 20px 36px rgba(15, 58, 97, 0.23);
        }

        .ev-hero-media img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: 12px;
        }

        .ev-content {
            padding: 54px 0;
        }

        .ev-schedule {
            display: grid;
            grid-template-columns: 0.92fr 1.08fr;
            gap: 22px;
            margin-bottom: 22px;
        }

        .ev-panel {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.14);
            border-radius: 22px;
            padding: 22px;
            box-shadow: 0 14px 30px rgba(13, 47, 80, 0.08);
        }

        .ev-panel h2 {
            margin: 0 0 12px;
            font-family: 'Garamond', serif;
            font-size: clamp(30px, 3vw, 42px);
            line-height: 1.2;
            color: #2475ac;
        }

        .ev-panel p {
            margin: 0;
            font-size: 15px;
            line-height: 1.8;
            color: #4a627d;
        }

        .ev-upcoming {
            display: grid;
            gap: 10px;
        }

        .ev-upcoming-item {
            border: 1px solid rgba(67, 155, 212, 0.16);
            border-radius: 16px;
            padding: 12px;
            display: grid;
            grid-template-columns: 72px 1fr;
            gap: 12px;
            align-items: center;
            background: #f5fbff;
        }

        .ev-date {
            border-radius: 12px;
            background: linear-gradient(145deg, #439bd4, #4db0e4);
            color: #fff;
            text-align: center;
            padding: 8px 4px;
        }

        .ev-date b {
            display: block;
            font-size: 24px;
            line-height: 1;
            font-family: 'Garamond', serif;
        }

        .ev-date small {
            font-size: 12px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .ev-upcoming-item h3 {
            margin: 0 0 4px;
            font-size: 17px;
            color: #235f8d;
            font-family: 'Garamond', serif;
        }

        .ev-upcoming-item p {
            margin: 0;
            font-size: 13px;
            line-height: 1.6;
            color: #4f6881;
        }

        .ev-feature-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 20px;
            margin-bottom: 22px;
        }

        .ev-feature-main {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            min-height: 360px;
            box-shadow: 0 18px 36px rgba(12, 47, 78, 0.14);
        }

        .ev-feature-main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ev-feature-overlay {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 24px;
            background: linear-gradient(to top, rgba(8, 33, 56, 0.86), rgba(8, 33, 56, 0));
            color: #fff;
        }

        .ev-feature-overlay span {
            display: inline-flex;
            font-size: 12px;
            padding: 6px 10px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.22);
            margin-bottom: 8px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .ev-feature-overlay h3 {
            margin: 0 0 8px;
            font-family: 'Garamond', serif;
            font-size: 28px;
            line-height: 1.25;
            color: #fff;
        }

        .ev-feature-overlay p {
            margin: 0;
            font-size: 14px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.96);
        }

        .ev-feature-side {
            display: grid;
            gap: 12px;
        }

        .ev-mini {
            border-radius: 18px;
            overflow: hidden;
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.15);
            box-shadow: 0 12px 28px rgba(12, 47, 78, 0.08);
            display: grid;
            grid-template-columns: 118px 1fr;
        }

        .ev-mini img {
            width: 100%;
            height: 100%;
            min-height: 120px;
            object-fit: cover;
        }

        .ev-mini-content {
            padding: 12px;
        }

        .ev-mini-content h4 {
            margin: 0 0 6px;
            font-size: 18px;
            line-height: 1.35;
            color: #245e8b;
            font-family: 'Garamond', serif;
        }

        .ev-mini-content p {
            margin: 0;
            font-size: 13px;
            line-height: 1.6;
            color: #526b84;
        }

        .ev-gallery {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 12px;
        }

        .ev-gallery img {
            width: 100%;
            height: 165px;
            object-fit: cover;
            border-radius: 14px;
            box-shadow: 0 10px 22px rgba(12, 47, 78, 0.1);
        }

        .ev-gallery .wide {
            grid-column: span 2;
        }

        @media (max-width: 1200px) {
            .ev-hero-grid,
            .ev-schedule,
            .ev-feature-grid {
                grid-template-columns: 1fr;
            }

            .ev-gallery {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 900px) {
            .ev-hero-media {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .ev-gallery {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .ev-gallery .wide {
                grid-column: auto;
            }
        }

        @media (max-width: 768px) {
            .ev-wide {
                width: min(94vw, 1520px);
            }

            .ev-hero {
                padding: 96px 0 38px;
            }

            .ev-feature-main {
                min-height: 300px;
            }

            .ev-mini {
                grid-template-columns: 1fr;
            }

            .ev-mini img {
                min-height: 160px;
            }

            .ev-gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content events-page">
        <section class="ev-hero">
            <div class="ev-wide ev-hero-grid">
                <div>
                    <ol class="breadcrumb ev-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Tin tức</a></li>
                        <li class="breadcrumb-item active">Sự kiện trường</li>
                    </ol>
                    <h1>Lịch sự kiện học đường nổi bật tại Meyschool</h1>
                    <p>Tổng hợp các sự kiện trọng điểm trong năm học: lễ hội, ngày hội học thuật, workshop chuyên đề, hoạt động trải nghiệm và chương trình kết nối cộng đồng dành cho học sinh - phụ huynh.</p>
                </div>
                <div class="ev-hero-media">
                    <img src="assets/banner/banner1.jpeg" alt="Sự kiện 1">
                    <img src="assets/banner/banner2.jpeg" alt="Sự kiện 2">
                    <img src="assets/banner/banner3.jpeg" alt="Sự kiện 3">
                    <img src="storage/jnp2203-1-1180x720.jpg" alt="Sự kiện 4">
                </div>
            </div>
        </section>

        <section class="ev-content">
            <div class="ev-wide">
                <div class="ev-schedule">
                    <article class="ev-panel" data-aos="fade-up">
                        <h2>Không gian sự kiện đa trải nghiệm</h2>
                        <p>Các sự kiện tại Meyschool được thiết kế theo định hướng học qua trải nghiệm, giúp học sinh phát triển tri thức, năng lực hợp tác và bản lĩnh thể hiện bản thân. Từng chương trình đều có mục tiêu rõ ràng, nội dung thực tiễn và tạo cơ hội để học sinh kết nối với cộng đồng trong và ngoài nhà trường.</p>
                    </article>

                    <div class="ev-panel ev-upcoming" data-aos="fade-up" data-aos-delay="100">
                        <div class="ev-upcoming-item">
                            <div class="ev-date"><b>22</b><small>MAR</small></div>
                            <div>
                                <h3>Ngày hội STEM toàn trường</h3>
                                <p>Trưng bày dự án liên môn và thử thách sáng tạo theo nhóm.</p>
                            </div>
                        </div>
                        <div class="ev-upcoming-item">
                            <div class="ev-date"><b>05</b><small>APR</small></div>
                            <div>
                                <h3>Lễ hội văn hóa quốc tế</h3>
                                <p>Giao lưu ngôn ngữ, nghệ thuật và trải nghiệm đa văn hóa.</p>
                            </div>
                        </div>
                        <div class="ev-upcoming-item">
                            <div class="ev-date"><b>20</b><small>APR</small></div>
                            <div>
                                <h3>Career Day - Định hướng nghề nghiệp</h3>
                                <p>Diễn giả khách mời và workshop kỹ năng cho học sinh THCS.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ev-feature-grid">
                    <article class="ev-feature-main" data-aos="fade-up">
                        <img src="storage/banner/trung-hoc.jpg" alt="Sự kiện nổi bật">
                        <div class="ev-feature-overlay">
                            <span>Sự kiện tiêu điểm</span>
                            <h3>Festival học sinh: Trí tuệ - Sáng tạo - Hội nhập</h3>
                            <p>Chuỗi hoạt động quy mô lớn kết hợp học thuật, thể thao, nghệ thuật và trải nghiệm cộng đồng dành cho toàn bộ học sinh.</p>
                        </div>
                    </article>

                    <div class="ev-feature-side">
                        <article class="ev-mini" data-aos="fade-up" data-aos-delay="80">
                            <img src="storage/banner/tieu-hoc.jpg" alt="Workshop phụ huynh">
                            <div class="ev-mini-content">
                                <h4>Workshop phụ huynh đồng hành</h4>
                                <p>Chia sẻ phương pháp đồng hành cùng con trong từng giai đoạn phát triển.</p>
                            </div>
                        </article>
                        <article class="ev-mini" data-aos="fade-up" data-aos-delay="140">
                            <img src="storage/banner/tien-tieu-hoc.jpg" alt="Ngày hội thể thao">
                            <div class="ev-mini-content">
                                <h4>Ngày hội thể thao liên cấp</h4>
                                <p>Tăng cường thể chất, xây dựng tinh thần fair-play và gắn kết tập thể.</p>
                            </div>
                        </article>
                        <article class="ev-mini" data-aos="fade-up" data-aos-delay="200">
                            <img src="olympia/images/noibat_6.jpg" alt="Triển lãm học sinh">
                            <div class="ev-mini-content">
                                <h4>Triển lãm sản phẩm học sinh</h4>
                                <p>Trưng bày các dự án cá nhân và dự án nhóm nổi bật trong năm học.</p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="ev-gallery" data-aos="fade-up">
                    <img class="wide" src="olympia/images/noibat_2.jpg" alt="Hình sự kiện 1">
                    <img src="olympia/images/noibat_4.jpg" alt="Hình sự kiện 2">
                    <img src="olympia/images/noibat_7.jpg" alt="Hình sự kiện 3">
                    <img class="wide" src="storage/jnp2203-1-1920x1080.jpg" alt="Hình sự kiện 4">
                    <img src="storage/banner/tieu-hoc.jpg" alt="Hình sự kiện 5">
                    <img src="storage/banner/trung-hoc.jpg" alt="Hình sự kiện 6">
                    <img src="storage/banner/tien-tieu-hoc.jpg" alt="Hình sự kiện 7">
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
