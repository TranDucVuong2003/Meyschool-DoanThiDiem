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
            grid-template-columns: minmax(0, 1.35fr) minmax(290px, 0.65fr);
            gap: 24px;
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

                        <h1>Chân dung học sinh Meyschool</h1>
                        <p>Nơi mỗi học sinh được nhìn nhận như một cá thể độc đáo, có ước mơ riêng, năng lực riêng và hành trình riêng để trưởng thành thành công dân toàn cầu tự tin, nhân ái và sáng tạo.</p>

                        <div class="sp-hero-chips">
                            <span>Bản lĩnh học thuật</span>
                            <span>Hành động vì cộng đồng</span>
                            <span>Tư duy toàn cầu</span>
                        </div>
                    </div>

                    <div class="sp-hero-collage">
                        <img src="storage/banner/tieu-hoc.jpg" alt="Học sinh tiểu học Meyschool">
                        <img src="storage/banner/trung-hoc.jpg" alt="Học sinh trung học Meyschool">
                        <img src="olympia/images/0201.jpg" alt="Hoạt động học tập tại Meyschool">
                        <img src="olympia/images/0208.jpg" alt="Không gian trải nghiệm của học sinh">
                    </div>
                </div>
            </div>
        </section>

        <section class="sp-main">
            <div class="student-wrap sp-layout">
                <div class="sp-content">
                    <article class="sp-card" data-aos="fade-up">
                        <h2>Hành trình phát triển</h2>
                        <p>Tại Meyschool, học sinh không chỉ học để thi mà còn học để hiểu bản thân, kết nối cộng đồng và tạo ra giá trị tích cực. Mỗi giai đoạn học tập được thiết kế theo hướng mở, liên môn và giàu trải nghiệm thực tế.</p>
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
                                <img src="storage/banner/ve-chung-toi-web.jpg" alt="Học sinh trong hoạt động trải nghiệm">
                                <figcaption>Học qua trải nghiệm và dự án liên môn</figcaption>
                            </figure>
                            <figure class="small">
                                <img src="storage/banner/tieu-hoc.jpg" alt="Học sinh tiểu học tham gia hoạt động">
                                <figcaption>Phát triển năng lực từ sớm</figcaption>
                            </figure>
                            <figure class="small">
                                <img src="olympia/images/0201.jpg" alt="Không gian học tập sáng tạo">
                                <figcaption>Không gian học tập truyền cảm hứng</figcaption>
                            </figure>
                            <figure class="wide">
                                <img src="storage/banner/trung-hoc.jpg" alt="Học sinh trung học tại Meyschool">
                                <figcaption>Tự tin, chủ động, sẵn sàng hội nhập</figcaption>
                            </figure>
                            <figure class="small">
                                <img src="olympia/images/0202.jpg" alt="Học sinh trong lớp học">
                                <figcaption>Học thuật vững vàng</figcaption>
                            </figure>
                            <figure class="small">
                                <img src="olympia/images/0206.jpg" alt="Học sinh tương tác nhóm">
                                <figcaption>Hợp tác và lãnh đạo trong cộng đồng học tập</figcaption>
                            </figure>
                        </div>
                    </article>
                </div>

                <aside class="sp-side" data-aos="fade-up" data-aos-delay="120">
                    <div class="sp-side-card">
                        <h3>Khám phá thêm</h3>
                        <div class="sp-links">
                            <a href="thong-diep-nguoi-sang-lap.php">Thông điệp Nhà sáng lập</a>
                            <a href="tam-nhin-su-menh.php">Tầm nhìn - Sứ mệnh</a>
                            <a href="ban-lanh-dao.php">Ban lãnh đạo</a>
                            <a href="doi-ngu-giao-vien.php">Đội ngũ giáo viên</a>
                        </div>
                    </div>

                    <div class="sp-side-card">
                        <h3>Giá trị nổi bật</h3>
                        <p>Học sinh Meyschool được rèn luyện trên 4 trục: tri thức học thuật, năng lực cảm xúc xã hội, bản lĩnh công dân và khả năng thích ứng với bối cảnh toàn cầu.</p>
                    </div>

                    <div class="sp-side-card">
                        <h3>Liên hệ tư vấn</h3>
                        <div class="sp-contact-item">
                            <b>Hotline</b>
                            <span>0934 525 889</span>
                        </div>
                        <div class="sp-contact-item">
                            <b>Email</b>
                            <span>tuyensinh@meyschool.edu.vn</span>
                        </div>
                        <div class="sp-contact-item" style="margin-bottom: 0;">
                            <b>Địa chỉ</b>
                            <span>KĐT Trung Văn, Nam Từ Liêm, Hà Nội</span>
                        </div>
                        <div class="sp-actions">
                            <a href="dang-ky-tu-van.php" class="sp-btn sp-btn-primary">Đăng ký tư vấn</a>
                            <a href="lien-he.php" class="sp-btn sp-btn-light">Liên hệ ngay</a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
</body>

</html>