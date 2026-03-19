<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Đăng ký tham quan trường</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Đăng ký tham quan trường">
    <meta property="og:description" content="">
    <meta property="og:url" content="dang-ky-tham-quan.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Đăng ký tham quan trường">
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
            --tour-blue-1: #439bd4;
            --tour-blue-2: #4db0e4;
            --tour-blue-3: #eaf7ff;
            --tour-ink: #1f3f5d;
        }

        .tour-page {
            background: radial-gradient(circle at 0% 0%, #eaf7ff 0%, #f8fcff 44%, #ffffff 100%);
            color: var(--tour-ink);
        }

        .tour-wide {
            width: min(95vw, 1500px);
            margin: 0 auto;
        }

        .tour-hero {
            padding: 112px 0 58px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(130deg, rgba(67, 155, 212, 0.96) 0%, rgba(77, 176, 228, 0.9) 65%, rgba(77, 176, 228, 0.8) 100%), url('storage/olympia-schools-1-1180x720.jpg') center/cover no-repeat;
        }

        .tour-hero::before,
        .tour-hero::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .tour-hero::before {
            width: 360px;
            height: 360px;
            right: -120px;
            top: -140px;
            background: rgba(255, 255, 255, 0.2);
        }

        .tour-hero::after {
            width: 260px;
            height: 260px;
            left: -90px;
            bottom: -110px;
            background: rgba(255, 255, 255, 0.12);
        }

        .tour-breadcrumb {
            margin: 0 0 14px;
            display: inline-flex;
            flex-wrap: wrap;
            gap: 8px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 999px;
            padding: 8px 16px;
            position: static !important;
            transform: none !important;
            left: auto !important;
            right: auto !important;
            top: auto !important;
            bottom: auto !important;
        }

        .tour-breadcrumb li,
        .tour-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            position: static !important;
        }

        .tour-hero h1 {
            margin: 0;
            color: #fff;
            font-size: clamp(34px, 4.4vw, 58px);
            line-height: 1.08;
            font-family: 'Garamond', serif;
            max-width: 960px;
        }

        .tour-hero p {
            margin: 14px 0 0;
            max-width: 830px;
            color: rgba(255, 255, 255, 0.95);
            font-size: 17px;
            line-height: 1.75;
        }

        .tour-layout {
            padding: 42px 0 70px;
        }

        .tour-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.4fr) minmax(280px, 0.8fr);
            gap: 24px;
            align-items: start;
        }

        .tour-main,
        .tour-side-card {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.16);
            border-radius: 22px;
            box-shadow: 0 14px 30px rgba(16, 49, 79, 0.09);
        }

        .tour-main {
            padding: 24px;
        }

        .tour-intro {
            margin-bottom: 18px;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid rgba(67, 155, 212, 0.2);
            border-left: 4px solid var(--tour-blue-1);
            background: linear-gradient(120deg, #f3fbff 0%, #eaf7ff 100%);
            color: #295f87;
            line-height: 1.8;
            font-weight: 600;
        }

        .tour-form {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .form-group {
            margin: 0;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
            font-size: 14px;
            color: #275c86;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid rgba(67, 155, 212, 0.26);
            border-radius: 10px;
            font-size: 14px;
            color: #234866;
            background: #fbfeff;
            transition: all 0.2s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--tour-blue-2);
            box-shadow: 0 0 0 4px rgba(77, 176, 228, 0.18);
            background: #fff;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .tour-actions {
            grid-column: 1 / -1;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 6px;
        }

        .tour-submit,
        .tour-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 11px 20px;
            border-radius: 12px;
            font-size: 13px;
            letter-spacing: 0.45px;
            text-transform: uppercase;
            font-weight: 700;
            text-decoration: none;
            border: 1px solid transparent;
            cursor: pointer;
        }

        .tour-submit {
            background: linear-gradient(120deg, var(--tour-blue-1), var(--tour-blue-2));
            color: #fff;
            box-shadow: 0 10px 22px rgba(67, 155, 212, 0.25);
        }

        .tour-link {
            background: #f6fbff;
            color: #246b9d;
            border-color: rgba(67, 155, 212, 0.3);
        }

        .tour-note {
            grid-column: 1 / -1;
            margin: 0;
            color: #4a6f8d;
            font-size: 13px;
            line-height: 1.65;
        }

        .tour-side {
            display: grid;
            gap: 16px;
        }

        .tour-side-card {
            padding: 16px;
        }

        .tour-side-card h3 {
            margin: 0 0 12px;
            color: #236c9d;
            font-size: 28px;
            line-height: 1.2;
            font-family: 'Garamond', serif;
            padding: 0 !important;
        }

        .tour-side-card p,
        .tour-side-card li {
            color: #3f6686;
            line-height: 1.72;
            font-size: 15px;
        }

        .tour-side-card ul {
            margin: 0;
            padding-left: 18px;
            display: grid;
            gap: 8px;
        }

        .tour-contact-item {
            background: var(--tour-blue-3);
            border: 1px solid rgba(67, 155, 212, 0.2);
            border-radius: 12px;
            padding: 10px 12px;
            margin-bottom: 10px;
        }

        .tour-contact-item b {
            display: block;
            margin-bottom: 4px;
            color: #2c78ad;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .tour-contact-item span {
            color: #204a6d;
            font-weight: 600;
            font-size: 14px;
            line-height: 1.5;
        }

        .tour-gallery {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .tour-gallery figure {
            margin: 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(16, 49, 79, 0.12);
        }

        .tour-gallery img {
            width: 100%;
            height: 130px;
            object-fit: cover;
            display: block;
        }

        @media (max-width: 1080px) {
            .tour-grid {
                grid-template-columns: 1fr;
            }

            .tour-gallery img {
                height: 160px;
            }
        }

        @media (max-width: 768px) {
            .tour-wide {
                width: min(94vw, 1500px);
            }

            .tour-hero {
                padding: 96px 0 42px;
            }

            .tour-hero p {
                font-size: 15px;
            }

            .tour-main,
            .tour-side-card {
                padding: 16px;
                border-radius: 16px;
            }

            .tour-form {
                grid-template-columns: 1fr;
            }

            .tour-gallery {
                grid-template-columns: 1fr;
            }

            .tour-gallery img {
                height: 210px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content tour-page">
        <section class="tour-hero">
            <div class="tour-wide" data-aos="fade-up">
                <ol class="breadcrumb tour-breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="lien-he.php">Liên hệ</a></li>
                    <li class="breadcrumb-item active">Đăng ký tham quan trường</li>
                </ol>

                <h1>Đăng ký tham quan Meyschool Đoàn Thị Điểm</h1>
                <p>Mời quý phụ huynh trải nghiệm trực tiếp không gian học tập, chương trình giáo dục và môi trường sinh hoạt của học sinh. Nhà trường sẽ liên hệ xác nhận lịch phù hợp ngay sau khi nhận đăng ký.</p>
            </div>
        </section>

        <section class="tour-layout">
            <div class="tour-wide tour-grid">
                <article class="tour-main" data-aos="fade-up">
                    <div class="tour-intro">Vui lòng điền đầy đủ thông tin để đội ngũ tuyển sinh hỗ trợ nhanh nhất. Các trường có dấu * là bắt buộc.</div>

                    <form class="tour-form" action="#" method="post">
                        <div class="form-group">
                            <label>Họ và tên phụ huynh *</label>
                            <input type="text" name="parent_name" placeholder="Nhập họ và tên" required>
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại *</label>
                            <input type="tel" name="phone" placeholder="Nhập số điện thoại" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Nhập email">
                        </div>

                        <div class="form-group">
                            <label>Họ và tên học sinh *</label>
                            <input type="text" name="student_name" placeholder="Nhập họ và tên học sinh" required>
                        </div>

                        <div class="form-group">
                            <label>Năm sinh của học sinh *</label>
                            <select name="birth_year" required>
                                <option value="">Chọn năm sinh</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Cấp học quan tâm *</label>
                            <select name="grade_level" required>
                                <option value="">Chọn cấp học</option>
                                <option value="tieu-hoc">Tiểu học</option>
                                <option value="thcs">THCS</option>
                                <option value="thpt">THPT</option>
                            </select>
                        </div>

                        <div class="form-group full">
                            <label>Thời gian tham quan mong muốn</label>
                            <input type="text" name="preferred_time" placeholder="Ví dụ: Sáng thứ 7, tuần sau">
                        </div>

                        <div class="form-group full">
                            <label>Ghi chú thêm</label>
                            <textarea name="message" placeholder="Nhập ghi chú hoặc câu hỏi của quý phụ huynh"></textarea>
                        </div>

                        <div class="tour-actions">
                            <button type="submit" class="tour-submit">Gửi đăng ký tham quan</button>
                            <a href="ban-do.php" class="tour-link">Xem bản đồ trường</a>
                        </div>

                        <p class="tour-note">Bằng việc gửi thông tin, quý phụ huynh đồng ý để nhà trường liên hệ tư vấn và xác nhận lịch tham quan.</p>
                    </form>
                </article>

                <aside class="tour-side" data-aos="fade-up" data-aos-delay="120">
                    <div class="tour-side-card">
                        <h3>Quy trình tham quan</h3>
                        <ul>
                            <li>Nhà trường xác nhận thông tin trong vòng 24h làm việc.</li>
                            <li>Sắp xếp lịch tham quan theo khối lớp phụ huynh quan tâm.</li>
                            <li>Gặp gỡ tư vấn tuyển sinh và tham quan cơ sở vật chất.</li>
                        </ul>
                    </div>

                    <div class="tour-side-card">
                        <h3>Thông tin liên hệ</h3>
                        <div class="tour-contact-item">
                            <b>Hotline</b>
                            <span>0934 525 889</span>
                        </div>
                        <div class="tour-contact-item">
                            <b>Email</b>
                            <span>info@doanthidiem.edu.vn</span>
                        </div>
                        <div class="tour-contact-item" style="margin-bottom: 0;">
                            <b>Địa chỉ</b>
                            <span>Khu đô thị Trung Văn, Nam Từ Liêm, Hà Nội</span>
                        </div>
                    </div>

                    <div class="tour-side-card">
                        <h3>Không gian nhà trường</h3>
                        <p style="margin-bottom: 10px;">Một vài hình ảnh thực tế để phụ huynh có cái nhìn chân thực trước buổi tham quan.</p>
                        <div class="tour-gallery">
                            <figure><img src="storage/olympia-schools-1.jpg" alt="Toàn cảnh Meyschool Đoàn Thị Điểm"></figure>
                            <figure><img src="storage/olympia-hoc-sinh-tieu-hoc.jpg" alt="Hoạt động học sinh"></figure>
                            <figure><img src="storage/olympia-khai-truong-9-1180x720.jpg" alt="Không gian học tập hiện đại"></figure>
                            <figure><img src="storage/jnp2203-1-1180x720.jpg" alt="Khuôn viên trường xanh"></figure>
                        </div>
                    </div>
                </aside>
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