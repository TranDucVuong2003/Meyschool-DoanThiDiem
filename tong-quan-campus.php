<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="icon" type="image/png" href="storage/favicon.png?v=20260320-1">
    <link rel="shortcut icon" type="image/png" href="storage/favicon.png?v=20260320-1">
    <link rel="apple-touch-icon" href="storage/favicon.png?v=20260320-1">
    <title>Tổng quan campus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Tổng quan campus">
    <meta property="og:description" content="">
    <meta property="og:url" content="tong-quan-campus.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png?v=20260320-1">
    <meta name="twitter:title" content="Tổng quan campus">
    <meta name="twitter:description" content="">

    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
    <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="olympia/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="olympia/css/reset.css">
    <link rel="stylesheet" href="olympia/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="olympia/css/fonts.css">
    <link rel="stylesheet" href="olympia/css/style.css">
    <link rel="stylesheet" href="olympia/css/styles-new.css">

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
            --cp-blue-1: #439bd4;
            --cp-blue-2: #4db0e4;
            --cp-blue-3: #eaf7ff;
            --cp-ink: #214963;
        }

        .campus-page {
            background: radial-gradient(circle at 0% 0%, #eaf7ff 0%, #f7fcff 45%, #fff 100%);
            color: var(--cp-ink);
        }

        .campus-wrap {
            width: min(94vw, 1480px);
            margin: 0 auto;
        }

        .cp-hero {
            position: relative;
            overflow: hidden;
            padding: 112px 0 68px;
            background: linear-gradient(132deg, rgba(67, 155, 212, 0.95) 0%, rgba(77, 176, 228, 0.9) 72%, rgba(77, 176, 228, 0.84) 100%), url('olympia/images/csvc-cover-new.jpg') center/cover no-repeat;
        }

        .cp-hero::before,
        .cp-hero::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            background: rgba(255, 255, 255, 0.2);
        }

        .cp-hero::before {
            width: 340px;
            height: 340px;
            top: -120px;
            right: -100px;
        }

        .cp-hero::after {
            width: 210px;
            height: 210px;
            left: -70px;
            bottom: -85px;
        }

        .cp-hero-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(300px, 0.8fr);
            gap: 22px;
            align-items: center;
        }

        .cp-breadcrumb {
            margin: 0 0 14px;
            display: inline-flex;
            flex-wrap: wrap;
            gap: 8px;
            position: static !important;
            float: none !important;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.36);
            border-radius: 999px;
            padding: 8px 16px;
        }

        .cp-breadcrumb li,
        .cp-breadcrumb li a {
            color: #fff;
            font-size: 13px;
        }

        .cp-hero h1 {
            margin: 0;
            color: #fff;
            font-family: 'Garamond', serif;
            font-size: clamp(38px, 5vw, 66px);
            line-height: 1.03;
        }

        .cp-hero p {
            margin: 16px 0 0;
            color: rgba(255, 255, 255, 0.96);
            font-size: 17px;
            line-height: 1.75;
            max-width: 780px;
        }

        .cp-tags {
            margin-top: 16px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .cp-tags span {
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

        .cp-hero-panel {
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.34);
            background: rgba(255, 255, 255, 0.17);
            padding: 16px;
            color: #fff;
        }

        .cp-hero-panel h3 {
            margin: 0 0 10px;
            font-family: 'Garamond', serif;
            font-size: 30px;
            color: #fff;
        }

        .cp-hero-panel ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: grid;
            gap: 8px;
        }

        .cp-hero-panel li {
            padding: 10px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 14px;
            line-height: 1.6;
        }

        .cp-main {
            padding: 40px 0 72px;
        }

        .cp-grid {
            display: grid;
            gap: 16px;
        }

        .cp-card {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.2);
            border-radius: 20px;
            box-shadow: 0 12px 24px rgba(16, 49, 79, 0.08);
            padding: 22px;
        }

        .cp-card h2 {
            margin: 0 0 12px;
            color: #256f9f;
            font-family: 'Garamond', serif;
            font-size: 34px;
            line-height: 1.2;
            padding: 0 !important;
        }

        .cp-card p,
        .cp-card li {
            color: #416987;
            font-size: 15px;
            line-height: 1.75;
        }

        .cp-intro {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: 14px;
            align-items: center;
        }

        .cp-metrics {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
            margin-top: 12px;
        }

        .cp-metric {
            border: 1px solid rgba(67, 155, 212, 0.18);
            border-radius: 12px;
            background: #f9fdff;
            padding: 10px;
            text-align: center;
        }

        .cp-metric b {
            display: block;
            color: #2f79ad;
            font-size: 24px;
            line-height: 1;
            margin-bottom: 4px;
        }

        .cp-metric span {
            color: #4c7190;
            font-size: 13px;
            line-height: 1.45;
        }

        .cp-intro-image {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 14px 28px rgba(16, 49, 79, 0.15);
        }

        .cp-intro-image img {
            display: block;
            width: 100%;
            height: 360px;
            object-fit: cover;
        }

        .cp-features {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
        }

        .cp-feature {
            border: 1px solid rgba(67, 155, 212, 0.18);
            border-radius: 12px;
            background: linear-gradient(125deg, #f6fbff 0%, #edf8ff 100%);
            padding: 12px;
        }

        .cp-feature h3 {
            margin: 0 0 6px;
            color: #2f79ad;
            font-size: 23px;
            font-family: 'Garamond', serif;
        }

        .cp-mind-heart {
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            gap: 14px;
            align-items: center;
        }

        .cp-mind-heart img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 14px;
            box-shadow: 0 14px 28px rgba(16, 49, 79, 0.14);
        }

        .cp-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 12px;
        }

        .cp-btn {
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

        .cp-btn-primary {
            color: #fff;
            background: linear-gradient(120deg, var(--cp-blue-1), var(--cp-blue-2));
            box-shadow: 0 10px 20px rgba(67, 155, 212, 0.24);
        }

        .cp-btn-light {
            color: #2b79af;
            background: #f7fcff;
            border-color: rgba(67, 155, 212, 0.25);
        }

        .cp-banner {
            background: linear-gradient(120deg, #3f9ad3, #56b4e7);
            border-radius: 16px;
            padding: 18px;
            color: #fff;
        }

        .cp-banner h3 {
            margin: 0 0 8px;
            color: #fff;
            font-size: 30px;
            font-family: 'Garamond', serif;
        }

        .cp-banner p {
            color: rgba(255, 255, 255, 0.95);
            margin: 0;
            font-size: 15px;
            line-height: 1.7;
        }

        .cp-gallery {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
        }

        .cp-gallery img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
            display: block;
            box-shadow: 0 10px 20px rgba(16, 49, 79, 0.12);
        }

        @media (max-width: 1180px) {

            .cp-hero-grid,
            .cp-intro,
            .cp-mind-heart,
            .cp-features,
            .cp-gallery,
            .cp-metrics {
                grid-template-columns: 1fr;
            }

            .cp-intro-image img,
            .cp-mind-heart img,
            .cp-gallery img {
                height: 260px;
            }
        }

        @media (max-width: 768px) {
            .campus-wrap {
                width: min(94vw, 1480px);
            }

            .cp-hero {
                padding: 94px 0 42px;
            }

            .cp-hero p {
                font-size: 15px;
            }

            .cp-card {
                padding: 16px;
                border-radius: 16px;
            }

            .cp-intro-image img,
            .cp-mind-heart img,
            .cp-gallery img {
                height: 220px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content campus-page">
        <section class="cp-hero">
            <div class="campus-wrap">
                <div class="cp-hero-grid" data-aos="fade-up">
                    <div>
                        <ol class="breadcrumb cp-breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="co-so-vat-chat.php">Cơ sở vật chất</a></li>
                            <li class="breadcrumb-item active">Tổng quan campus</li>
                        </ol>

                        <h1>Tổng quan campus</h1>
                        <p>Không gian học tập mở với nhiều mảng xanh, ánh sáng tự nhiên và hệ thống phòng chức năng hiện đại, giúp học sinh học tập chủ động, kết nối cộng đồng và phát triển toàn diện.</p>

                        <div class="cp-tags">
                            <span>Khuôn viên gần 10.000 m²</span>
                            <span>Thiết kế mở - linh hoạt</span>
                            <span>Nhiều không gian trải nghiệm</span>
                        </div>
                    </div>

                    <aside class="cp-hero-panel">
                        <h3>Điểm nổi bật</h3>
                        <ul>
                            <li>Hai tòa Mind và Heart kết nối bởi sân trung tâm xanh.</li>
                            <li>Mỗi không gian đều có thể trở thành một lớp học mở.</li>
                            <li>Thiết kế ưu tiên an toàn, cảm xúc và tính khám phá.</li>
                        </ul>
                    </aside>
                </div>
            </div>
        </section>

        <section class="cp-main">
            <div class="campus-wrap cp-grid">
                <article class="cp-card" data-aos="fade-up">
                    <div class="cp-intro">
                        <div>
                            <h2>Không gian học tập mở</h2>
                            <p>Campus Olympia Đoàn Thị Điểm được tổ chức như một dòng chảy học tập liên tục, nơi hành lang, sân vườn, khu tự học và phòng chức năng cùng góp phần nuôi dưỡng năng lực học sinh.</p>
                            <p>Triết lý thiết kế hướng đến sự thân thuộc, an toàn và tự do khám phá, để mỗi ngày đến trường đều là một hành trình tích cực cả về trí tuệ lẫn cảm xúc.</p>

                            <div class="cp-metrics">
                                <div class="cp-metric">
                                    <b>10.000 m²</b>
                                    <span>Khuôn viên xanh</span>
                                </div>
                                <div class="cp-metric">
                                    <b>2 tòa</b>
                                    <span>Mind &amp; Heart</span>
                                </div>
                                <div class="cp-metric">
                                    <b>Đa dạng</b>
                                    <span>Không gian trải nghiệm</span>
                                </div>
                            </div>
                        </div>

                        <div class="cp-intro-image">
                            <img src="olympia/images/csvc-cover-new.jpg" alt="Tổng quan campus Meyschool">
                        </div>
                    </div>
                </article>

                <article class="cp-card" data-aos="fade-up">
                    <h2>Những không gian đặc trưng</h2>
                    <div class="cp-features">
                        <div class="cp-feature">
                            <h3>Phòng học hiện đại</h3>
                            <p>Linh hoạt cho học tập dự án, làm việc nhóm và nghiên cứu độc lập.</p>
                        </div>
                        <div class="cp-feature">
                            <h3>Hành lang trải nghiệm</h3>
                            <p>Không gian trưng bày sản phẩm học tập, nuôi dưỡng bản sắc cá nhân.</p>
                        </div>
                        <div class="cp-feature">
                            <h3>Khuôn viên xanh</h3>
                            <p>Điều hòa vi khí hậu, tạo môi trường học tập thư giãn và lành mạnh.</p>
                        </div>
                        <div class="cp-feature">
                            <h3>Không gian sáng tạo</h3>
                            <p>Phòng nghệ thuật, STEM và thực hành đa giác quan cho học sinh.</p>
                        </div>
                    </div>
                </article>

                <article class="cp-card" data-aos="fade-up">
                    <div class="cp-mind-heart">
                        <img src="olympia/images/csvc-cover-new.jpg" alt="Khuôn viên Mind and Heart">
                        <div>
                            <h2>Mind &amp; Heart - trung tâm học tập toàn diện</h2>
                            <p>Tòa Mind tập trung các không gian học thuật, thư viện và phòng thí nghiệm. Tòa Heart là nơi diễn ra hoạt động nghệ thuật, thể thao và giao lưu cộng đồng học sinh.</p>
                            <p>Hai tòa nhà được kết nối bởi sân trung tâm xanh, tạo thành một hệ sinh thái học tập liền mạch giữa học thuật, vận động và phát triển kỹ năng xã hội.</p>
                            <div class="cp-actions">
                                <a href="dang-ky-tham-quan.php" class="cp-btn cp-btn-primary">Đăng ký tham quan</a>
                                <a href="dang-ky-tu-van.php" class="cp-btn cp-btn-light">Đăng ký tư vấn</a>
                            </div>
                        </div>
                    </div>
                </article>

                <section class="cp-banner" data-aos="fade-up">
                    <h3>Campus dành cho trải nghiệm toàn diện</h3>
                    <p>Mỗi khu vực trong campus đều được thiết kế để học sinh học qua trải nghiệm thực tế: từ lớp học, thư viện, phòng lab đến sân chơi ngoài trời. Toàn bộ hệ không gian hướng đến một môi trường học tập hiện đại, an toàn và truyền cảm hứng.</p>
                </section>

                <article class="cp-card" data-aos="fade-up">
                    <h2>Góc nhìn từ campus</h2>
                    <p>Hình ảnh dưới đây phản ánh tinh thần rộng mở, sạch đẹp và hiện đại của khuôn viên. Khi có bộ ảnh thực tế đầy đủ, có thể thay thế nhanh để tăng tính chân thực cho trang.</p>
                    <div class="cp-gallery">
                        <img src="olympia/images/csvc-cover-new.jpg" alt="Không gian thực tế campus">
                        <img src="olympia/images/csvc-cover-new.jpg" alt="Khu vực học tập tại campus">
                        <img src="olympia/images/csvc-cover-new.jpg" alt="Hành lang campus">
                        <img src="olympia/images/csvc-cover-new.jpg" alt="Khuôn viên xanh campus">
                    </div>
                </article>
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
</body>

</html>