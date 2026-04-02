<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Phòng học</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Phòng học">
    <meta property="og:description" content="">
    <meta property="og:url" content="phong-hoc.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Phòng học">
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
        nav#admin_bar { display: none; }
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
            background-color: #2354a0;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            border: none;
            color: #fff;
            display: inline-block;
            margin-top: 20px;
            border-radius: 10px;
        }
        .btn-full {
            text-align: center;
            line-height: 60px;
        }
        body.show-admin-bar {
            margin-top: 0px !important;
        }

        :root {
            --blue-1: #2354a0;
            --blue-2: #439bd4;
            --blue-3: #4db0e4;
            --blue-soft: #eef7ff;
            --text-dark: #1f2a44;
        }

        .classroom-wrap {
            background: linear-gradient(180deg, #ffffff 0%, #f7fbff 100%);
        }

        .classroom-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .classroom-hero {
            padding: 140px 0 40px;
        }

        .classroom-hero .classroom-tag {
            margin-top: 10px;
        }

        .classroom-hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 50px;
            align-items: center;
        }

        .classroom-tag {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(67, 155, 212, 0.15);
            padding: 8px 16px;
            border-radius: 999px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            color: var(--blue-1);
        }

        .classroom-title {
            font-family: 'Garamond', serif;
            font-size: 40px;
            margin: 16px 0 14px;
            color: var(--blue-1);
        }

        .classroom-desc {
            font-size: 16px;
            line-height: 1.8;
            color: #40506c;
            max-width: 520px;
        }

        .classroom-actions {
            margin-top: 24px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .classroom-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            border: 1px solid transparent;
        }

        .classroom-btn.primary {
            background: var(--blue-1);
            color: #fff;
        }

        .classroom-btn.ghost {
            border-color: rgba(35, 84, 160, 0.3);
            color: var(--blue-1);
        }

        .classroom-collage {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            grid-auto-rows: 150px;
            gap: 16px;
        }

        .classroom-collage img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 16px 28px rgba(0, 0, 0, 0.12);
        }

        .classroom-collage .wide {
            grid-column: span 2;
        }

        .classroom-section {
            padding: 60px 0;
        }

        .classroom-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .classroom-card {
            background: #fff;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(67, 155, 212, 0.12);
        }

        .classroom-card h4 {
            color: var(--blue-1);
            font-size: 18px;
            margin-bottom: 10px;
        }

        .classroom-card p {
            margin: 0;
            font-size: 14px;
            color: #5b6a82;
            line-height: 1.7;
        }

        .classroom-feature {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 40px;
            align-items: center;
            margin-top: 50px;
        }

        .classroom-feature img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 22px;
        }

        .classroom-feature h3 {
            color: var(--blue-1);
            font-size: 28px;
            margin-bottom: 16px;
        }

        .classroom-feature p {
            font-size: 15px;
            line-height: 1.8;
            color: #4d5e79;
        }

        .classroom-stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .classroom-stat {
            background: var(--blue-soft);
            border-radius: 16px;
            padding: 20px;
            text-align: center;
        }

        .classroom-stat h3 {
            margin: 0 0 6px;
            font-size: 26px;
            color: var(--blue-1);
        }

        .classroom-stat p {
            margin: 0;
            font-size: 13px;
            color: #50607a;
        }

        .classroom-gallery {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 14px;
        }

        .classroom-gallery img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 18px;
        }

        .classroom-cta {
            margin-top: 60px;
            background: linear-gradient(120deg, var(--blue-1), var(--blue-2));
            border-radius: 22px;
            padding: 35px 40px;
            color: #fff;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 20px;
        }

        .classroom-cta h3 {
            font-size: 26px;
            margin: 0 0 10px;
        }

        .classroom-cta p {
            margin: 0;
            font-size: 15px;
            line-height: 1.7;
        }

        .classroom-cta .cta-actions {
            text-align: right;
        }

        @media (max-width: 1100px) {
            .classroom-hero-grid,
            .classroom-feature,
            .classroom-cta {
                grid-template-columns: 1fr;
            }

            .classroom-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .classroom-stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .classroom-gallery {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .classroom-cta .cta-actions {
                text-align: left;
            }
        }

        @media (max-width: 768px) {
            .classroom-title {
                font-size: 32px;
            }

            .classroom-grid {
                grid-template-columns: 1fr;
            }

            .classroom-gallery {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 520px) {
            .classroom-stats {
                grid-template-columns: 1fr;
            }

            .classroom-gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content classroom-wrap">
        <section class="classroom-hero">
            <div class="classroom-container classroom-hero-grid">
                <div>
                    <span class="classroom-tag">Cơ sở vật chất</span>
                    <h1 class="classroom-title">Không gian phòng học truyền cảm hứng</h1>
                    <p class="classroom-desc">Phòng học tại Meyschool Đoàn Thị Điểm được thiết kế theo chuẩn hiện đại, lấy học sinh làm trung tâm. Mỗi không gian đều tràn ngập ánh sáng tự nhiên, linh hoạt trong bố trí và sẵn sàng cho các phương pháp học tập sáng tạo.</p>
                    <div class="classroom-actions">
                        <a class="classroom-btn primary" href="#tong-quan">Khám phá phòng học</a>
                        <a class="classroom-btn ghost" href="#gallery">Xem hình ảnh</a>
                    </div>
                </div>
                <div class="classroom-collage">
                    <img class="wide" src="storage/banner/tieu-hoc.jpg" alt="Không gian lớp học">
                    <img src="olympia/images/0201.jpg" alt="Hoạt động học tập">
                    <img src="olympia/images/0202.jpg" alt="Trải nghiệm học tập">
                </div>
            </div>
        </section>

        <section class="classroom-section" id="tong-quan">
            <div class="classroom-container">
                <div class="classroom-grid">
                    <div class="classroom-card">
                        <h4>Thiết kế linh hoạt</h4>
                        <p>Không gian mở cho phép sắp xếp bàn ghế theo nhiều mô hình học tập: thảo luận nhóm, làm việc cá nhân hoặc thuyết trình sáng tạo.</p>
                    </div>
                    <div class="classroom-card">
                        <h4>Ánh sáng tự nhiên</h4>
                        <p>Hệ thống cửa sổ rộng, trần cao giúp lớp học luôn thông thoáng, tiết kiệm năng lượng và tạo cảm hứng mỗi ngày.</p>
                    </div>
                    <div class="classroom-card">
                        <h4>Công nghệ hiện đại</h4>
                        <p>Máy chiếu, màn hình tương tác, wifi tốc độ cao và các thiết bị số hỗ trợ học sinh tiếp cận kiến thức đa chiều.</p>
                    </div>
                </div>

                <div class="classroom-feature">
                    <img src="olympia/images/0206.jpg" alt="Không gian học tập">
                    <div>
                        <h3>Không gian học tập truyền cảm hứng</h3>
                        <p>Chúng tôi tạo nên môi trường học tập an toàn, thân thiện và giàu trải nghiệm. Hệ thống điều hòa trung tâm, tủ đồ cá nhân ngoài lớp và các khu vực thư giãn giúp học sinh luôn thoải mái trong suốt ngày học.</p>
                        <p>Mỗi phòng học được thiết kế để thúc đẩy sự sáng tạo, khả năng tự học và tương tác tích cực giữa học sinh – giáo viên.</p>
                    </div>
                </div>

                <div class="classroom-stats">
                    <div class="classroom-stat">
                        <h3>50+</h3>
                        <p>Phòng học hiện đại</p>
                    </div>
                    <div class="classroom-stat">
                        <h3>100%</h3>
                        <p>Phòng học có ánh sáng tự nhiên</p>
                    </div>
                    <div class="classroom-stat">
                        <h3>24/7</h3>
                        <p>Hệ thống điều hòa trung tâm</p>
                    </div>
                    <div class="classroom-stat">
                        <h3>1:1</h3>
                        <p>Tủ đồ cá nhân cho học sinh</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="classroom-section" id="gallery">
            <div class="classroom-container">
                <h3 style="color: var(--blue-1); font-size: 28px; margin-bottom: 24px;">Hình ảnh phòng học</h3>
                <div class="classroom-gallery">
                    <img src="olympia/images/0208.jpg" alt="Phòng học 1">
                    <img src="storage/banner/trung-hoc.jpg" alt="Phòng học 2">
                    <img src="storage/banner/tien-tieu-hoc.jpg" alt="Phòng học 3">
                    <img src="olympia/images/0201.jpg" alt="Phòng học 4">
                    <img src="olympia/images/0202.jpg" alt="Phòng học 5">
                </div>

                <div class="classroom-cta">
                    <div>
                        <h3>Sẵn sàng tham quan phòng học?</h3>
                        <p>Đăng ký lịch tham quan để trải nghiệm thực tế không gian học tập và cơ sở vật chất hiện đại của Meyschool Đoàn Thị Điểm.</p>
                    </div>
                    <div class="cta-actions">
                        <a class="classroom-btn primary" href="dang-ky-tu-van.php">Đăng ký tham quan</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

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
