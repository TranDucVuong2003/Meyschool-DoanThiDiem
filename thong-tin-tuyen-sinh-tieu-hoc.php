<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1">
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Tuyển sinh Tiểu học - Meyschool Đoàn Thị Điểm</title>
    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
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
    <style>
        nav#admin_bar {
            display: none;
        }

        .jq-toast-wrap {
            display: block;
            position: fixed;
            width: 250px;
            pointer-events: none !important;
            z-index: 9000999999999 !important;
        }

        body.show-admin-bar {
            margin-top: 0 !important;
        }

        .primary-page {
            --navy: #17345d;
            --blue: #1f4b8f;
            --sky: #53a7d8;
            --gold: #f2bf4b;
            --ink: #23374a;
            --muted: #627586;
            --line: rgba(23, 52, 93, 0.1);
            padding-top: 70px;
            background: linear-gradient(180deg, #f4fbff 0%, #fffdf8 100%);
            color: var(--ink);
        }

        .wrap {
            width: min(1180px, calc(100vw - 32px));
            margin: 0 auto;
        }

        .section {
            padding: 36px 0;
        }

        .kicker {
            display: inline-block;
            padding: 9px 15px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .85);
            color: var(--blue);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .12em;
        }

        .hero {
            position: relative;
            overflow: hidden;
            padding: 34px 0 44px;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0 0 auto;
            height: 520px;
            border-radius: 0 0 40px 40px;
            background: linear-gradient(135deg, rgba(23, 52, 93, .94), rgba(31, 75, 143, .9) 55%, rgba(83, 167, 216, .88)), url('assets/banner/banner1.jpeg') center/cover no-repeat;
            box-shadow: 0 24px 60px rgba(15, 38, 67, .22);
        }

        .hero-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 24px;
            align-items: end;
        }

        .hero-copy {
            color: #fff;
            padding: 42px 0 8px;
        }

        .hero-breadcrumb {
            margin: 0 0 14px;
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, .35);
            background: rgba(255, 255, 255, .2);
            position: static !important;
            float: none !important;
            z-index: 2;
        }

        .hero-breadcrumb li,
        .hero-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .3px;
            text-transform: uppercase;
        }

        .hero-breadcrumb li.breadcrumb-item {
            margin-left: 0 !important;
        }

        .hero-breadcrumb li.breadcrumb-item.active {
            color: #fff !important;
            opacity: .96;
        }

        .hero-breadcrumb li.breadcrumb-item:before {
            content: none !important;
            display: none !important;
        }

        .hero-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "\00b7" !important;
            display: inline-block !important;
            float: none !important;
            width: auto !important;
            height: auto !important;
            background: transparent !important;
            color: rgba(255, 255, 255, .92) !important;
            margin: 0 8px 0 2px;
            padding: 0 !important;
            position: static !important;
        }

        .hero-copy h1 {
            margin: 16px 0 14px;
            font-family: 'Garamond', serif;
            font-size: clamp(42px, 5vw, 74px);
            line-height: .98;
            color: #fff;
        }

        .hero-copy p {
            max-width: 700px;
            font-size: 17px;
            line-height: 1.8;
            color: rgba(255, 255, 255, .88);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 26px;
        }

        .btn-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 52px;
            padding: 0 22px;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
        }

        .btn-gold {
            color: var(--navy);
            background: var(--gold);
        }

        .btn-outline {
            color: #fff;
            border: 1px solid rgba(255, 255, 255, .34);
            background: rgba(255, 255, 255, .08);
        }

        .hero-card,
        .card,
        .quote,
        .cta-panel {
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 38px rgba(23, 52, 93, .1);
        }

        .hero-card {
            background: rgba(255, 255, 255, .9);
            padding: 20px;
        }

        .hero-photo {
            border-radius: 22px;
            overflow: hidden;
            min-height: 280px;
        }

        .hero-photo img,
        .media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-mini {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 14px;
        }

        .hero-mini div {
            padding: 16px 14px;
            border-radius: 18px;
            background: #fff;
            border: 1px solid var(--line);
        }

        .hero-mini b {
            display: block;
            margin-bottom: 8px;
            font-size: 26px;
            color: var(--blue);
        }

        .hero-mini span {
            font-size: 13px;
            line-height: 1.6;
            color: var(--muted);
        }

        .anchor-bar {
            position: sticky;
            top: 78px;
            z-index: 20;
            margin-top: -8px;
        }

        .anchor-inner {
            display: flex;
            gap: 10px;
            padding: 12px;
            overflow-x: auto;
            border-radius: 22px;
            background: rgba(255, 255, 255, .9);
            border: 1px solid var(--line);
            box-shadow: 0 12px 28px rgba(23, 52, 93, .08);
        }

        .anchor-inner a {
            flex: 0 0 auto;
            padding: 10px 15px;
            border-radius: 999px;
            background: #eef4fb;
            color: var(--blue);
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
        }

        .split {
            display: grid;
            grid-template-columns: .95fr 1.05fr;
            gap: 24px;
            align-items: stretch;
        }

        .media {
            min-height: 100%;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 18px 34px rgba(23, 52, 93, .12);
        }

        .quote {
            padding: 34px;
            background: linear-gradient(180deg, #ffffff, #f8fbfd);
            border: 1px solid var(--line);
        }

        .quote h2,
        .section-head h2,
        .cta-panel h2 {
            margin: 12px 0 14px;
            font-family: 'Garamond', serif;
            font-size: clamp(34px, 4vw, 52px);
            line-height: 1.05;
            color: var(--navy);
        }

        .quote p,
        .section-head p,
        .step p,
        .info-card li,
        .capability p,
        .cta-panel p {
            font-size: 15px;
            line-height: 1.8;
            color: var(--muted);
        }

        .signature {
            margin-top: 24px;
            padding-top: 18px;
            border-top: 1px solid var(--line);
            font-size: 14px;
            color: var(--navy);
        }

        .section-head {
            max-width: 760px;
            margin-bottom: 24px;
        }

        .story-grid,
        .info-grid,
        .steps,
        .capability-grid,
        .gallery {
            display: grid;
            gap: 18px;
        }

        .story-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .story {
            position: relative;
            min-height: 350px;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 18px 34px rgba(18, 41, 69, .12);
        }

        .story::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(20, 43, 74, .05), rgba(20, 43, 74, .84));
        }

        .story img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .story-copy {
            position: absolute;
            inset: auto 0 0;
            z-index: 1;
            padding: 24px;
            color: #fff;
        }

        .story-copy span {
            display: inline-block;
            margin-bottom: 10px;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .16);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
        }

        .story-copy h3 {
            margin: 0 0 10px;
            font-family: 'Garamond', serif;
            font-size: 28px;
            color: #fff;
        }

        .story-copy p {
            color: rgba(255, 255, 255, .84);
        }

        .info-grid {
            grid-template-columns: repeat(4, 1fr);
        }

        .info-card,
        .step,
        .capability,
        .policy-box,
        .gallery .card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 26px;
            box-shadow: 0 16px 30px rgba(23, 52, 93, .07);
        }

        .info-card {
            padding: 24px;
        }

        .info-card em {
            display: inline-flex;
            width: 46px;
            height: 46px;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            font-style: normal;
            font-size: 21px;
            color: var(--blue);
            background: #edf4fb;
        }

        .info-card h3,
        .step h3,
        .capability h3,
        .policy-box h3,
        .contact-card h3 {
            margin: 18px 0 10px;
            font-family: 'Garamond', serif;
            font-size: 24px;
            color: var(--navy);
        }

        .info-card ul {
            margin: 0;
            padding-left: 18px;
        }

        .capability-wrap,
        .policy-grid,
        .cta-grid {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 22px;
        }

        .capability-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .capability {
            padding: 24px;
            background: linear-gradient(180deg, #fff, #f7fbff);
        }

        .capability-label {
            display: inline-block;
            margin-bottom: 14px;
            padding: 7px 11px;
            border-radius: 999px;
            background: #edf5fb;
            color: var(--blue);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .steps {
            grid-template-columns: repeat(4, 1fr);
            position: relative;
        }

        .step {
            padding: 24px;
            position: relative;
        }

        .step-number {
            display: inline-flex;
            width: 58px;
            height: 58px;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            background: linear-gradient(135deg, var(--blue), var(--sky));
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .policy-box {
            padding: 28px;
        }

        .policy-box ul {
            margin: 16px 0 0;
            padding-left: 18px;
        }

        .policy-table {
            display: grid;
            gap: 12px;
            margin-top: 16px;
        }

        .policy-row {
            display: grid;
            grid-template-columns: 142px 1fr;
            gap: 12px;
            padding: 16px 18px;
            border-radius: 18px;
            background: #f6f9fc;
        }

        .policy-row strong {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: .04em;
            color: var(--blue);
        }

        .policy-row span {
            font-size: 14px;
            line-height: 1.8;
            color: var(--muted);
        }

        .gallery {
            grid-template-columns: 1.05fr .95fr;
        }

        .gallery-main,
        .gallery-stack {
            display: grid;
            gap: 18px;
        }

        .gallery-main .card {
            min-height: 360px;
        }

        .gallery-stack {
            grid-template-columns: repeat(2, 1fr);
        }

        .gallery-stack .card:first-child {
            grid-column: span 2;
            min-height: 220px;
        }

        .gallery-stack .card:nth-child(2),
        .gallery-stack .card:nth-child(3) {
            min-height: 190px;
        }

        .gallery .card {
            overflow: hidden;
        }

        .cta-panel {
            padding: 34px;
            background: linear-gradient(135deg, rgba(23, 52, 93, .96), rgba(31, 75, 143, .95) 56%, rgba(83, 167, 216, .9)), url('assets/banner/banner2.jpeg') center/cover no-repeat;
        }

        .cta-panel .kicker,
        .cta-panel h2,
        .cta-panel p {
            color: #fff;
        }

        .cta-panel .kicker {
            background: rgba(255, 255, 255, .12);
            border: 1px solid rgba(255, 255, 255, .18);
        }

        .cta-grid {
            grid-template-columns: 1.05fr .95fr;
            align-items: end;
        }

        .contact-grid {
            display: grid;
            gap: 14px;
        }

        .contact-card {
            padding: 20px 22px;
            border-radius: 24px;
            background: rgba(255, 255, 255, .12);
            border: 1px solid rgba(255, 255, 255, .16);
        }

        .contact-card span {
            display: block;
            margin-bottom: 8px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: rgba(255, 255, 255, .68);
        }

        .contact-card h3 {
            margin-top: 0;
            color: #fff;
        }

        .contact-card p {
            color: rgba(255, 255, 255, .86);
            margin: 0;
        }

        @media (max-width: 1100px) {

            .hero-grid,
            .split,
            .capability-wrap,
            .policy-grid,
            .cta-grid,
            .gallery {
                grid-template-columns: 1fr;
            }

            .story-grid {
                grid-template-columns: 1fr;
            }

            .info-grid,
            .steps {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 860px) {
            .hero::before {
                height: 600px;
                border-radius: 0 0 28px 28px;
            }

            .hero-mini,
            .info-grid,
            .steps,
            .capability-grid,
            .gallery-stack {
                grid-template-columns: 1fr;
            }

            .policy-row {
                grid-template-columns: 1fr;
            }

            .anchor-bar {
                top: 70px;
            }
        }

        @media (max-width: 640px) {
            .primary-page {
                padding-top: 64px;
            }

            .section {
                padding: 28px 0;
            }

            .hero-copy p,
            .quote p,
            .section-head p {
                font-size: 14px;
            }

            .story {
                min-height: 300px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content primary-page">
        <section class="hero">
            <div class="wrap hero-grid">
                <div class="hero-copy" data-aos="fade-up">
                    <ol class="breadcrumb hero-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="thong-tin-tuyen-sinh-tieu-hoc.php">Tuyển sinh 2026-2027</a></li>
                        <li class="breadcrumb-item active">Khối Tiểu học</li>
                    </ol>
                    <h1>Một khởi đầu đẹp, đủ ấm áp để trẻ tự tin lớn lên.</h1>
                    <p>Chương trình Tiểu học tại Meyschool Đoàn Thị Điểm chú trọng nền nếp học tập, năng lực tự học, kỹ
                        năng sống và sự đồng hành chặt chẽ với gia đình. Thông tin tuyển sinh được trình bày rõ ràng để
                        phụ huynh dễ theo dõi và đăng ký.</p>
                    <div class="hero-actions">
                        <a class="btn-pill btn-gold" href="dang-ky-tu-van.php">Đăng ký tư vấn</a>
                        <a class="btn-pill btn-outline" href="dang-ky-tham-quan.php">Đăng ký tham quan</a>
                    </div>
                </div>

                <div class="hero-card" data-aos="fade-left">
                    <div class="hero-photo">
                        <img src="storage/banner/tieu-hoc.jpg" alt="Tuyển sinh Tiểu học">
                    </div>
                    <div class="hero-mini">
                        <div><b>4</b><span>bước trong quy trình tuyển sinh</span></div>
                        <div><b>1:1</b><span>tư vấn riêng cho từng gia đình</span></div>
                        <div><b>2026</b><span>mùa tuyển sinh lớp 1 và chuyển cấp</span></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="wrap anchor-bar">
            <nav class="anchor-inner">
                <a href="#tam-nhin">Tầm nhìn</a>
                <a href="#hanh-trinh">Một ngày ở trường</a>
                <a href="#thong-tin">Thông tin</a>
                <a href="#quy-trinh">Quy trình</a>
                <a href="#ho-so">Hồ sơ</a>
                <a href="#lien-he">Liên hệ</a>
            </nav>
        </div>

        <section id="tam-nhin" class="section">
            <div class="wrap split">
                <div class="media" data-aos="fade-right">
                    <img src="assets/img/Gemini_Generated_Image_ft1vwvft1vwvft1v.png" alt="Học sinh Tiểu học Meyschool">
                </div>
                <div class="quote" data-aos="fade-left">
                    <span class="kicker">Thông điệp từ nhà trường</span>
                    <h2>Mỗi em nhỏ đều cần một môi trường vừa có kỷ luật, vừa có sự dịu dàng.</h2>
                    <p>Ở bậc Tiểu học, điều phụ huynh tìm kiếm không chỉ là chương trình học tốt mà còn là nơi con cảm
                        thấy an toàn, được tôn trọng và được dẫn dắt mỗi ngày. Meyschool Đoàn Thị Điểm theo đuổi sự cân
                        bằng giữa học thuật, trải nghiệm và phát triển nhân cách.</p>
                    <p>Nhà trường xây dựng lộ trình học tập theo từng giai đoạn, giúp học sinh hình thành thói quen học
                        chủ động, khả năng hợp tác và sự tự tin trong giao tiếp ngay từ những năm đầu.</p>
                    <div class="signature"><strong>Meyschool Đoàn Thị Điểm</strong> Khối Tiểu học hướng tới một khởi đầu
                        học tập nền nếp, hạnh phúc và bền vững.</div>
                </div>
            </div>
        </section>

        <section id="hanh-trinh" class="section">
            <div class="wrap">
                <div class="section-head" data-aos="fade-up">
                    <span class="kicker">Trải nghiệm học đường</span>
                    <h2>Một ngày học của học sinh Tiểu học được tổ chức nhịp nhàng và cân bằng.</h2>
                    <p>Học sinh học tập theo dự án nhỏ, tăng cường vận động và phát triển kỹ năng xã hội. Gia đình luôn
                        được cập nhật tiến bộ để đồng hành cùng con sát sao.</p>
                </div>
                <div class="story-grid">
                    <article class="story" data-aos="fade-up">
                        <img src="assets/img/banner/banner1.jpeg" alt="Buổi sáng học tập">
                        <div class="story-copy">
                            <span>Buổi sáng</span>
                            <h3>Học bằng sự chủ động</h3>
                            <p>Trẻ đặt câu hỏi, trình bày ý tưởng và học theo nhịp độ phù hợp với lứa tuổi.</p>
                        </div>
                    </article>
                    <article class="story" data-aos="fade-up" data-aos-delay="120">
                        <img src="olympia/images/0206.jpg" alt="Vận động và nghệ thuật">
                        <div class="story-copy">
                            <span>Giữa ngày</span>
                            <h3>Nhịp sống có chuyển động</h3>
                            <p>Âm nhạc, thể chất và hoạt động trải nghiệm giúp trẻ cân bằng cảm xúc.</p>
                        </div>
                    </article>
                    <article class="story" data-aos="fade-up" data-aos-delay="240">
                        <img src="assets/img/banner/banner3.jpeg" alt="Kết nối gia đình">
                        <div class="story-copy">
                            <span>Cuối ngày</span>
                            <h3>Gia đình luôn đồng hành</h3>
                            <p>Thông tin tiến bộ được phản hồi rõ ràng để phụ huynh theo sát hành trình học tập của con.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="thong-tin" class="section">
            <div class="wrap">
                <div class="section-head" data-aos="fade-up">
                    <span class="kicker">Thông tin cốt lõi</span>
                    <h2>Thông tin tuyển sinh được trình bày ngắn gọn, minh bạch và dễ tra cứu.</h2>
                    <p>Phụ huynh có thể xem nhanh đối tượng tuyển sinh, mốc thời gian, hồ sơ cần chuẩn bị và chính sách
                        học phí trong cùng một khu vực.</p>
                </div>
                <div class="info-grid">
                    <article class="info-card" data-aos="fade-up">
                        <em>01</em>
                        <h3>Đối tượng</h3>
                        <ul>
                            <li>Học sinh vào lớp 1, sinh năm 2019, đủ 6 tuổi trong năm học 2026-2027.</li>
                            <li>Học sinh lớp 2-5 có nhu cầu chuyển cấp, chuyển trường.</li>
                            <li>Nhà trường tư vấn riêng theo từng nhóm học sinh.</li>
                        </ul>
                    </article>
                    <article class="info-card" data-aos="fade-up" data-aos-delay="90">
                        <em>02</em>
                        <h3>Thời gian</h3>
                        <ul>
                            <li>Đợt 1: 15/02/2026 - 30/03/2026.</li>
                            <li>Đợt 2: 01/04/2026 - 30/06/2026.</li>
                            <li>Đợt bổ sung: 01/07/2026 - 15/08/2026 nếu còn chỉ tiêu.</li>
                        </ul>
                    </article>
                    <article class="info-card" data-aos="fade-up" data-aos-delay="180">
                        <em>03</em>
                        <h3>Hồ sơ</h3>
                        <ul>
                            <li>Đơn đăng ký theo mẫu của nhà trường.</li>
                            <li>Bản sao giấy khai sinh và giấy tờ cư trú hợp lệ.</li>
                            <li>02 ảnh 3x4 và học bạ gần nhất nếu chuyển cấp.</li>
                        </ul>
                    </article>
                    <article class="info-card" data-aos="fade-up" data-aos-delay="270">
                        <em>04</em>
                        <h3>Học phí</h3>
                        <ul>
                            <li>Học phí cơ bản: 85.000.000 VND/năm học.</li>
                            <li>Phí bán trú: 15.000.000 VND/năm học.</li>
                            <li>Giảm 5% cho anh chị em và 10% khi đóng theo năm.</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="wrap capability-wrap">
                <div class="media" data-aos="fade-right">
                    <img src="assets/img/banner/banner2.jpeg" alt="Năng lực học sinh tiểu học">
                </div>
                <div class="capability-grid">
                    <article class="capability" data-aos="fade-up">
                        <span class="capability-label">Năng lực 01</span>
                        <h3>Tự học có hướng dẫn</h3>
                        <p>Học sinh được rèn thói quen chuẩn bị bài, hoàn thành nhiệm vụ và chủ động hơn từng ngày.</p>
                    </article>
                    <article class="capability" data-aos="fade-up" data-aos-delay="90">
                        <span class="capability-label">Năng lực 02</span>
                        <h3>Ngôn ngữ và biểu đạt</h3>
                        <p>Khả năng nói, viết và trình bày được nuôi dưỡng qua nhiều hoạt động học tập nhỏ.</p>
                    </article>
                    <article class="capability" data-aos="fade-up" data-aos-delay="180">
                        <span class="capability-label">Năng lực 03</span>
                        <h3>Cân bằng cảm xúc</h3>
                        <p>Không gian học tập an toàn tâm lý giúp trẻ cảm thấy được lắng nghe và tôn trọng.</p>
                    </article>
                    <article class="capability" data-aos="fade-up" data-aos-delay="270">
                        <span class="capability-label">Năng lực 04</span>
                        <h3>Kết nối với đời sống</h3>
                        <p>Dự án và trải nghiệm giúp trẻ hiểu rằng việc học luôn gắn với thế giới thực.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="quy-trinh" class="section">
            <div class="wrap">
                <div class="section-head" data-aos="fade-up">
                    <span class="kicker">Quy trình tuyển sinh</span>
                    <h2>Lộ trình ngắn gọn, minh bạch và thân thiện với phụ huynh.</h2>
                    <p>Quy trình gồm 4 bước rõ ràng, có hướng dẫn chi tiết ở từng giai đoạn.</p>
                </div>
                <div class="steps">
                    <article class="step" data-aos="fade-up">
                        <div class="step-number">1</div>
                        <h3>Đăng ký tư vấn</h3>
                        <p>Phụ huynh điền form online hoặc gọi hotline để nhận tư vấn phù hợp.</p>
                    </article>
                    <article class="step" data-aos="fade-up" data-aos-delay="90">
                        <div class="step-number">2</div>
                        <h3>Nộp hồ sơ</h3>
                        <p>Nhà trường tiếp nhận hồ sơ cơ bản và hẹn lịch trao đổi hoặc đánh giá.</p>
                    </article>
                    <article class="step" data-aos="fade-up" data-aos-delay="180">
                        <div class="step-number">3</div>
                        <h3>Đánh giá phù hợp</h3>
                        <p>Học sinh tham gia buổi làm quen, quan sát năng lực và trao đổi cùng phụ huynh.</p>
                    </article>
                    <article class="step" data-aos="fade-up" data-aos-delay="270">
                        <div class="step-number">4</div>
                        <h3>Hoàn tất nhập học</h3>
                        <p>Gia đình nhận thông báo và hoàn thiện các bước thủ tục nhập học.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="ho-so" class="section">
            <div class="wrap policy-grid">
                <div class="policy-box" data-aos="fade-right">
                    <span class="kicker">Gia đình cần chuẩn bị</span>
                    <h3>Hồ sơ tuyển sinh</h3>
                    <ul>
                        <li>Đơn đăng ký tuyển sinh theo biểu mẫu của nhà trường.</li>
                        <li>Bản sao giấy khai sinh có công chứng hoặc đối chiếu bản gốc.</li>
                        <li>Giấy tờ cư trú của học sinh và phụ huynh.</li>
                        <li>02 ảnh 3x4 chụp trong 6 tháng gần nhất.</li>
                        <li>Học bạ hoặc nhận xét học tập đối với học sinh chuyển cấp.</li>
                    </ul>
                </div>
                <div class="policy-box" data-aos="fade-left">
                    <span class="kicker">Thông tin tài chính</span>
                    <h3>Chính sách học phí</h3>
                    <div class="policy-table">
                        <div class="policy-row"><strong>Học phí</strong><span>85.000.000 VND/năm học cho chương trình cơ
                                bản.</span></div>
                        <div class="policy-row"><strong>Bán trú</strong><span>15.000.000 VND/năm học, áp dụng theo chính
                                sách hiện hành.</span></div>
                        <div class="policy-row"><strong>Ưu đãi</strong><span>Giảm 5% cho anh chị em cùng học và giảm 10%
                                khi đóng học phí cả năm.</span></div>
                        <div class="policy-row"><strong>Hỗ trợ</strong><span>Bộ phận tuyển sinh tư vấn trực tiếp các
                                khoản
                                phí và lộ trình thanh toán.</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="wrap">
                <div class="section-head" data-aos="fade-up">
                    <span class="kicker">Không khí học đường</span>
                    <h2>Hình ảnh lớp học và hoạt động thực tế của khối Tiểu học.</h2>
                    <p>Phụ huynh có thể tham khảo thêm các khoảnh khắc học tập, vận động và trải nghiệm của học sinh tại
                        trường.
                    </p>
                </div>
                <div class="gallery">
                    <div class="gallery-main">
                        <div class="card" data-aos="fade-right"><img src="assets/img/banner/banner3.jpeg"
                                alt="Hoạt động tại trường"></div>
                    </div>
                    <div class="gallery-stack">
                        <div class="card" data-aos="fade-left"><img src="olympia/images/0201.jpg" alt="Lớp học"></div>
                        <div class="card" data-aos="fade-up" data-aos-delay="80"><img src="olympia/images/0202.jpg"
                                alt="Vận động"></div>
                        <div class="card" data-aos="fade-up" data-aos-delay="160"><img src="olympia/images/0208.jpg"
                                alt="Trải nghiệm"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="lien-he" class="section">
            <div class="wrap">
                <div class="cta-panel" data-aos="zoom-in-up">
                    <div class="cta-grid">
                        <div>
                            <span class="kicker">Liên hệ tuyển sinh</span>
                            <h2>Sẵn sàng cho một buổi tư vấn cụ thể, rõ ràng và đúng nhu cầu của gia đình.</h2>
                            <p>Nếu phụ huynh muốn xem thực tế môi trường học tập, tìm hiểu hồ sơ hoặc cần lộ trình phù
                                hợp
                                cho con, đội ngũ tuyển sinh có thể hỗ trợ trực tiếp mỗi ngày.</p>
                            <div class="hero-actions">
                                <a class="btn-pill btn-gold" href="dang-ky-tu-van.php">Đăng ký tư vấn</a>
                                <a class="btn-pill btn-outline" href="tel:0934525889">Gọi 0934 525 889</a>
                            </div>
                        </div>
                        <div class="contact-grid">
                            <div class="contact-card">
                                <span>Hotline</span>
                                <h3>0934 525 889</h3>
                                <p>Tư vấn tuyển sinh và đặt lịch tham quan trường.</p>
                            </div>
                            <div class="contact-card">
                                <span>Email</span>
                                <h3>tuyensinh@doanthidiem.edu.vn</h3>
                                <p>Tiếp nhận câu hỏi về hồ sơ, học phí và chỉ tiêu tuyển sinh.</p>
                            </div>
                            <div class="contact-card">
                                <span>Địa chỉ</span>
                                <h3>KĐT Trung Văn</h3>
                                <p>Nam Từ Liêm, Hà Nội.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
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