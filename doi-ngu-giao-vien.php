<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Đội ngũ giáo viên Meyschool</title>
    <meta name="description" content="Đội ngũ giáo viên chất lượng cao tại Meyschool">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Đội ngũ giáo viên Meyschool">
    <meta property="og:description" content="Đội ngũ giáo viên chất lượng cao tại Meyschool">
    <meta property="og:url" content="doi-ngu-giao-vien.html">
    <meta property="og:type" content="article">
    <meta name="twitter:title" content="Đội ngũ giáo viên Meyschool">
    <meta name="twitter:description" content="Đội ngũ giáo viên chất lượng cao tại Meyschool">

    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">

    <link rel="alternate" href="en/teachers.html" hreflang="en" />
    <link rel="alternate" href="doi-ngu-giao-vien.html" hreflang="vi" />

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

        .btn-dk {
            width: 210px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background-color: #1e6f8c;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            border: none;
            color: #fff;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-full {
            text-align: center;
            line-height: 60px;
        }

        body.show-admin-bar {
            margin-top: 0px !important;
        }

        /* Teachers Page - Modern Grid Design */
        .teachers-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero with Floating Images */
        .teachers-hero {
            position: relative;
            min-height: 480px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #2d1b4e 0%, #1e6f8c 50%, #6b2c91 100%);
        }

        .teachers-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('storage/doi-ngu-olym/nguyen-hanh-chi-ucc.png') center/cover no-repeat;
            opacity: 0.2;
        }

        .teachers-hero-content {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 50px 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .teachers-hero-text h1 {
            font-family: 'Garamond', serif;
            font-size: 48px;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .teachers-hero-text p {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.7;
            max-width: 500px;
        }

        .teachers-hero-badge {
            display: inline-block;
            background: #f1cc1f;
            color: #1e6f8c;
            padding: 10px 25px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .teachers-hero-images {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .teachers-hero-img {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .teachers-hero-img img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .teachers-hero-img:hover img {
            transform: scale(1.1);
        }

        .teachers-hero-img:nth-child(2) {
            transform: translateY(20px);
        }

        /* Main Layout */
        .teachers-main-layout {
            display: grid;
            grid-template-columns: 280px 1fr 300px;
            gap: 35px;
            padding: 50px 0;
        }

        /* Left Sidebar */
        .teachers-sidebar-left {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .teachers-nav-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 30px rgba(71, 24, 115, 0.1);
            margin-bottom: 25px;
        }

        .teachers-nav-card h4 {
            font-family: 'Garamond', serif;
            font-size: 18px;
            color: #1e6f8c;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #f1cc1f;
        }

        .teachers-nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .teachers-nav-menu li {
            margin-bottom: 12px;
        }

        .teachers-nav-link {
            display: flex;
            align-items: center;
            padding: 12px;
            color: #555;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 13px;
            font-weight: 500;
            background: #f8f7fa;
        }

        .teachers-nav-link:hover,
        .teachers-nav-link.active {
            background: linear-gradient(135deg, #1e6f8c 0%, #5a2a8a 100%);
            color: #fff;
            transform: translateX(8px);
            box-shadow: 0 4px 15px rgba(71, 24, 115, 0.3);
        }

        .teachers-nav-thumb {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            overflow: hidden;
            margin-right: 12px;
            flex-shrink: 0;
            border: 2px solid #f1cc1f;
        }

        .teachers-nav-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Subject Filter */
        .teachers-filter-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 30px rgba(71, 24, 115, 0.1);
        }

        .teachers-filter-card h5 {
            font-family: 'Garamond', serif;
            font-size: 16px;
            color: #1e6f8c;
            margin-bottom: 20px;
        }

        .filter-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .filter-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px dashed #e8e5ec;
            font-size: 14px;
            color: #555;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-item:last-child {
            border-bottom: none;
        }

        .filter-item:hover,
        .filter-item.active {
            color: #1e6f8c;
        }

        .filter-thumb {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            overflow: hidden;
            margin-right: 12px;
        }

        .filter-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Center Content */
        .teachers-content-center {
            background: #fff;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 8px 40px rgba(71, 24, 115, 0.08);
        }

        .teachers-intro {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 2px solid #f0eef2;
        }

        .teachers-intro h2 {
            font-family: 'Garamond', serif;
            font-size: 36px;
            color: #1e6f8c;
            margin-bottom: 15px;
        }

        .teachers-intro p {
            font-size: 16px;
            color: #666;
            line-height: 1.8;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Stats Bar */
        .teachers-stats-bar {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .teachers-stat-box {
            background: linear-gradient(135deg, #faf9fb 0%, #f5f3f7 100%);
            border-radius: 16px;
            padding: 25px 15px;
            text-align: center;
            border: 1px solid #f0eef2;
        }

        .teachers-stat-number {
            font-family: 'Garamond', serif;
            font-size: 36px;
            color: #1e6f8c;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .teachers-stat-label {
            font-size: 13px;
            color: #888;
        }

        /* Teachers Grid */
        .teachers-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .teacher-card-enhanced {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 1px solid #f0eef2;
        }

        .teacher-card-enhanced:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(71, 24, 115, 0.2);
        }

        .teacher-card-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .teacher-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .teacher-card-enhanced:hover .teacher-card-image img {
            transform: scale(1.1);
        }

        .teacher-subject-badge {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: #f1cc1f;
            color: #1e6f8c;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .teacher-card-info {
            padding: 25px;
        }

        .teacher-card-info h4 {
            font-family: 'Garamond', serif;
            font-size: 22px;
            color: #1e6f8c;
            margin-bottom: 8px;
        }

        .teacher-role {
            font-size: 14px;
            color: #888;
            margin-bottom: 12px;
        }

        .teacher-awards {
            font-size: 13px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .teacher-badge {
            display: inline-block;
            background: linear-gradient(135deg, #1e6f8c 0%, #5a2a8a 100%);
            color: #fff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        /* Right Sidebar */
        .teachers-sidebar-right {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .teachers-cta-card {
            background: linear-gradient(135deg, #1e6f8c 0%, #6a1b9a 100%);
            border-radius: 20px;
            padding: 30px 25px;
            text-align: center;
            color: #fff;
            margin-bottom: 25px;
        }

        .teachers-cta-card h5 {
            font-family: 'Garamond', serif;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .teachers-cta-card p {
            font-size: 14px;
            margin-bottom: 20px;
            opacity: 0.9;
            line-height: 1.6;
        }

        .teachers-cta-btn {
            display: inline-block;
            background: #f1cc1f;
            color: #1e6f8c;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .teachers-cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(241, 204, 31, 0.4);
        }

        .teachers-gallery-card {
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 30px rgba(71, 24, 115, 0.1);
        }

        .teachers-gallery-card h5 {
            font-family: 'Garamond', serif;
            font-size: 16px;
            color: #1e6f8c;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #f1cc1f;
        }

        .teachers-gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .teachers-gallery-item {
            border-radius: 12px;
            overflow: hidden;
            aspect-ratio: 1;
        }

        .teachers-gallery-item.featured {
            grid-column: span 2;
            aspect-ratio: 16/9;
        }

        .teachers-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .teachers-gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .teachers-main-layout {
                grid-template-columns: 240px 1fr 240px;
                gap: 25px;
            }
        }

        @media (max-width: 991px) {
            .teachers-hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                padding: 40px 20px;
            }

            .teachers-hero-text h1 {
                font-size: 36px;
            }

            .teachers-hero-images {
                max-width: 500px;
                margin: 0 auto;
            }

            .teachers-main-layout {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .teachers-sidebar-left,
            .teachers-sidebar-right {
                position: static;
            }

            .teachers-stats-bar {
                grid-template-columns: repeat(2, 1fr);
            }

            .teachers-grid {
                grid-template-columns: 1fr;
            }

            .teachers-gallery-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .teachers-gallery-item.featured {
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .teachers-hero {
                min-height: 400px;
            }

            .teachers-hero-text h1 {
                font-size: 28px;
            }

            .teachers-content-center {
                padding: 25px 20px;
            }

            .teachers-stats-bar {
                grid-template-columns: repeat(2, 1fr);
            }

            .teacher-card-image {
                height: 200px;
            }

            .teachers-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content">
        <!-- Hero Section -->
        <section class="teachers-hero">
            <div class="teachers-hero-bg"></div>
            <div class="teachers-hero-content teachers-container">
                <div class="teachers-hero-text">
                    <span class="teachers-hero-badge">Về chúng tôi</span>
                    <h1>Đội ngũ giáo viên</h1>
                    <p>"Những người truyền cảm hứng - Đội ngũ giáo viên tận tâm, giàu kinh nghiệm và đầy nhiệt huyết"</p>
                </div>
                <div class="teachers-hero-images">
                    <div class="teachers-hero-img">
                        <img src="storage/doi-ngu-olym/nguyen-hanh-chi-ucc.png" alt="Giáo viên">
                    </div>
                    <div class="teachers-hero-img">
                        <img src="storage/doi-ngu-olym/tran-quoc-dan-2.png" alt="Giáo viên">
                    </div>
                    <div class="teachers-hero-img">
                        <img src="storage/doi-ngu-olym/do-thi-bao-linh-2.jpg" alt="Giáo viên">
                    </div>
                    <div class="teachers-hero-img">
                        <img src="storage/doi-ngu-olym/hoang-diep-trinh-2.png" alt="Giáo viên">
                    </div>
                    <div class="teachers-hero-img">
                        <img src="storage/doi-ngu-olym/pham-hai-ha.png" alt="Giáo viên">
                    </div>
                    <div class="teachers-hero-img">
                        <img src="storage/doi-ngu-olym/nguyen-mai-phuong.png" alt="Giáo viên">
                    </div>
                </div>
            </div>
        </section>

        <!-- Breadcrumb -->
        <div class="teachers-container" style="padding-top: 20px;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="ve-chung-toi.php">Về chúng tôi</a></li>
                <li class="breadcrumb-item active">Đội ngũ giáo viên</li>
            </ol>
        </div>

        <!-- Main Layout -->
        <div class="teachers-container">
            <div class="teachers-main-layout">
                <!-- Left Sidebar -->
                <aside class="teachers-sidebar-left">
                    <div class="teachers-nav-card">
                        <h4>Khám phá thêm</h4>
                        <ul class="teachers-nav-menu">
                            <li>
                                <a href="thong-diep-nguoi-sang-lap.php" class="teachers-nav-link">
                                    <span class="teachers-nav-thumb">
                                        <img src="storage/doi-ngu-olym/nguyen-thi-thu-thao.png" alt="">
                                    </span>
                                    Thông điệp Nhà sáng lập
                                </a>
                            </li>
                            <li>
                                <a href="tam-nhin-su-menh.php" class="teachers-nav-link">
                                    <span class="teachers-nav-thumb">
                                        <img src="storage/banner/ve-chung-toi-web.jpg" alt="">
                                    </span>
                                    Tầm nhìn - Sứ mệnh
                                </a>
                            </li>
                            <li>
                                <a href="ban-lanh-dao.php" class="teachers-nav-link">
                                    <span class="teachers-nav-thumb">
                                        <img src="storage/doi-ngu-olym/dang-thu-huong-2.jpg" alt="">
                                    </span>
                                    Ban lãnh đạo
                                </a>
                            </li>
                            <li>
                                <a href="doi-ngu-giao-vien.php" class="teachers-nav-link active">
                                    <span class="teachers-nav-thumb">
                                        <img src="storage/doi-ngu-olym/nguyen-hanh-chi-ucc.png" alt="">
                                    </span>
                                    Đội ngũ giáo viên
                                </a>
                            </li>
                            <li>
                                <a href="chan-dung-hoc-sinh.php" class="teachers-nav-link">
                                    <span class="teachers-nav-thumb">
                                        <img src="storage/banner/trung-hoc.jpg" alt="">
                                    </span>
                                    Chân dung học sinh
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="teachers-filter-card">
                        <h5>Bộ môn</h5>
                        <ul class="filter-list">
                            <li class="filter-item active">
                                <span class="filter-thumb"><img src="storage/banner/tieu-hoc.jpg" alt=""></span>
                                Tất cả
                            </li>
                            <li class="filter-item">
                                <span class="filter-thumb"><img src="olympia/images/0201.jpg" alt=""></span>
                                Tiếng Anh
                            </li>
                            <li class="filter-item">
                                <span class="filter-thumb"><img src="olympia/images/0202.jpg" alt=""></span>
                                Toán - Khoa học
                            </li>
                            <li class="filter-item">
                                <span class="filter-thumb"><img src="olympia/images/0206.jpg" alt=""></span>
                                Ngữ văn
                            </li>
                            <li class="filter-item">
                                <span class="filter-thumb"><img src="olympia/images/0208.jpg" alt=""></span>
                                Nghệ thuật
                            </li>
                        </ul>
                    </div>
                </aside>

                <!-- Center Content -->
                <div class="teachers-content-center">
                    <div class="teachers-intro">
                        <h2 class="font-garamond-bold">Đội ngũ giáo viên chất lượng cao</h2>
                        <p>Đội ngũ giáo viên tại Meyschool được tuyển chọn kỹ lưỡng, 100% có bằng cấp chuẩn và chứng chỉ sư phạm. Chúng tôi tự hào có đội ngũ giáo viên tận tâm, giàu kinh nghiệm và luôn đổi mới trong phương pháp giảng dạy.</p>
                    </div>

                    <!-- Stats Bar -->
                    <div class="teachers-stats-bar">
                        <div class="teachers-stat-box">
                            <div class="teachers-stat-number">100+</div>
                            <div class="teachers-stat-label">Giáo viên chính quy</div>
                        </div>
                        <div class="teachers-stat-box">
                            <div class="teachers-stat-number">95%</div>
                            <div class="teachers-stat-label">Có thạc sĩ trở lên</div>
                        </div>
                        <div class="teachers-stat-box">
                            <div class="teachers-stat-number">15+</div>
                            <div class="teachers-stat-label">Giáo viên quốc tế</div>
                        </div>
                        <div class="teachers-stat-box">
                            <div class="teachers-stat-number">10</div>
                            <div class="teachers-stat-label">Năm kinh nghiệm TB</div>
                        </div>
                    </div>

                    <!-- Teachers Grid -->
                    <div class="teachers-grid">
                        <div class="teacher-card-enhanced">
                            <div class="teacher-card-image">
                                <img src="storage/doi-ngu-olym/nguyen-hanh-chi-ucc.png" alt="Giáo viên">
                                <span class="teacher-subject-badge">Tiếng Anh</span>
                            </div>
                            <div class="teacher-card-info">
                                <h4>Cô Nguyễn Hạnh Chi</h4>
                                <p class="teacher-role">Giáo viên Tiếng Anh - UCC</p>
                                <p class="teacher-awards">Thạc sĩ Ngôn ngữ học<br>Chứng chỉ TESOL</p>
                                <span class="teacher-badge">Giáo viên xuất sắc 2023</span>
                            </div>
                        </div>

                        <div class="teacher-card-enhanced">
                            <div class="teacher-card-image">
                                <img src="storage/doi-ngu-olym/tran-quoc-dan-2.png" alt="Giáo viên">
                                <span class="teacher-subject-badge">Toán - Lý</span>
                            </div>
                            <div class="teacher-card-info">
                                <h4>Thầy Trần Quốc Dân</h4>
                                <p class="teacher-role">Giáo viên Toán - Vật lý</p>
                                <p class="teacher-awards">Thạc sĩ Toán học<br>12 năm kinh nghiệm</p>
                                <span class="teacher-badge">Giải Nhà giáo trẻ tiêu biểu</span>
                            </div>
                        </div>

                        <div class="teacher-card-enhanced">
                            <div class="teacher-card-image">
                                <img src="storage/doi-ngu-olym/do-thi-bao-linh-2.jpg" alt="Giáo viên">
                                <span class="teacher-subject-badge">Ngữ văn</span>
                            </div>
                            <div class="teacher-card-info">
                                <h4>Cô Đỗ Thị Bảo Linh</h4>
                                <p class="teacher-role">Giáo viên Ngữ văn</p>
                                <p class="teacher-awards">Thạc sĩ Văn học<br>Chuyên gia văn học dân gian</p>
                                <span class="teacher-badge">Bài giảng đạt giải Quốc gia</span>
                            </div>
                        </div>

                        <div class="teacher-card-enhanced">
                            <div class="teacher-card-image">
                                <img src="storage/doi-ngu-olym/hoang-diep-trinh-2.png" alt="Giáo viên">
                                <span class="teacher-subject-badge">Khoa học</span>
                            </div>
                            <div class="teacher-card-info">
                                <h4>Cô Hoàng Diệp Trinh</h4>
                                <p class="teacher-role">Giáo viên Khoa học</p>
                                <p class="teacher-awards">Thạc sĩ Sinh học<br>Chứng chỉ IB Science</p>
                                <span class="teacher-badge">Nghiên cứu khoa học cấp Bộ</span>
                            </div>
                        </div>

                        <div class="teacher-card-enhanced">
                            <div class="teacher-card-image">
                                <img src="storage/doi-ngu-olym/pham-hai-ha.png" alt="Giáo viên">
                                <span class="teacher-subject-badge">Tiểu học</span>
                            </div>
                            <div class="teacher-card-info">
                                <h4>Cô Phạm Hải Hà</h4>
                                <p class="teacher-role">Giáo viên Tiểu học</p>
                                <p class="teacher-awards">Cử nhân Sư phạm Mầm non<br>Chuyên gia Montessori</p>
                                <span class="teacher-badge">10 năm liền giáo viên giỏi</span>
                            </div>
                        </div>

                        <div class="teacher-card-enhanced">
                            <div class="teacher-card-image">
                                <img src="storage/doi-ngu-olym/nguyen-mai-phuong.png" alt="Giáo viên">
                                <span class="teacher-subject-badge">Âm nhạc</span>
                            </div>
                            <div class="teacher-card-info">
                                <h4>Cô Nguyễn Mai Phương</h4>
                                <p class="teacher-role">Giáo viên Âm nhạc</p>
                                <p class="teacher-awards">Thạc sĩ Âm nhạc<br>Pianist chuyên nghiệp</p>
                                <span class="teacher-badge">Giải A Giáo viên dạy giỏi</span>
                            </div>
                        </div>

                        <div class="teacher-card-enhanced">
                            <div class="teacher-card-image">
                                <img src="storage/doi-ngu-olym/tran-xuan-huong-2.png" alt="Giáo viên">
                                <span class="teacher-subject-badge">Thể dục</span>
                            </div>
                            <div class="teacher-card-info">
                                <h4>Thầy Trần Xuân Hương</h4>
                                <p class="teacher-role">Giáo viên Thể dục</p>
                                <p class="teacher-awards">Cử nhân TDTT<br>Huấn luyện viên bóng đá</p>
                                <span class="teacher-badge">VĐV Quốc gia</span>
                            </div>
                        </div>

                        <div class="teacher-card-enhanced">
                            <div class="teacher-card-image">
                                <img src="storage/doi-ngu-olym/nguyen-thi-minh-hanh.png" alt="Giáo viên">
                                <span class="teacher-subject-badge">Mỹ thuật</span>
                            </div>
                            <div class="teacher-card-info">
                                <h4>Cô Nguyễn Thị Minh Anh</h4>
                                <p class="teacher-role">Giáo viên Mỹ thuật</p>
                                <p class="teacher-awards">Thạc sĩ Mỹ thuật<br>Họa sĩ chuyên nghiệp</p>
                                <span class="teacher-badge">Triển lãm quốc tế</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <aside class="teachers-sidebar-right">
                    <div class="teachers-cta-card">
                        <h5>Tham gia đội ngũ</h5>
                        <p>Meyschool luôn tìm kiếm những giáo viên tài năng, tận tâm với nghề giáo</p>
                        <a href="tuyen-dung.php" class="teachers-cta-btn">Ứng tuyển ngay</a>
                    </div>

                    <div class="teachers-gallery-card">
                        <h5>Hoạt động giảng dạy</h5>
                        <div class="teachers-gallery-grid">
                            <div class="teachers-gallery-item featured">
                                <img src="storage/banner/tieu-hoc.jpg" alt="">
                            </div>
                            <div class="teachers-gallery-item">
                                <img src="olympia/images/0201.jpg" alt="">
                            </div>
                            <div class="teachers-gallery-item">
                                <img src="olympia/images/0202.jpg" alt="">
                            </div>
                            <div class="teachers-gallery-item">
                                <img src="storage/banner/trung-hoc.jpg" alt="">
                            </div>
                            <div class="teachers-gallery-item">
                                <img src="olympia/images/0208.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
</body>

</html>