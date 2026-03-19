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
            --notice-blue-1: #439bd4;
            --notice-blue-2: #4db0e4;
            --notice-blue-3: #eaf7ff;
            --notice-text: #1f3a56;
        }

        .notice-page {
            background: #f5fbff;
            color: var(--notice-text);
        }

        .notice-wide {
            width: min(96vw, 1520px);
            margin: 0 auto;
        }

        .notice-hero {
            padding: 116px 0 54px;
            background: linear-gradient(120deg, rgba(67, 155, 212, 0.96) 0%, rgba(77, 176, 228, 0.9) 60%, rgba(77, 176, 228, 0.72) 100%);
            position: relative;
            overflow: hidden;
        }

        .notice-hero::before {
            content: '';
            position: absolute;
            width: 360px;
            height: 360px;
            right: -120px;
            top: -130px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
        }

        .notice-hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 24px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .notice-breadcrumb {
            margin: 0 0 16px;
            display: inline-flex;
            gap: 8px;
            flex-wrap: wrap;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.42);
            border-radius: 999px;
            padding: 8px 16px;
            position: static !important;
            transform: none !important;
            left: auto !important;
            right: auto !important;
            top: auto !important;
            bottom: auto !important;
        }

        .notice-breadcrumb li,
        .notice-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            position: static !important;
        }

        .notice-hero h1 {
            margin: 0 0 12px;
            color: #fff;
            font-size: clamp(34px, 4.1vw, 58px);
            font-family: 'Garamond', serif;
            line-height: 1.08;
        }

        .notice-hero p {
            margin: 0;
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.85;
            font-size: 16px;
            max-width: 760px;
        }

        .notice-top-card {
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.35);
            box-shadow: 0 18px 36px rgba(16, 56, 90, 0.2);
        }

        .notice-top-card img {
            width: 100%;
            height: 230px;
            object-fit: cover;
        }

        .notice-top-card .cap {
            padding: 14px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 14px;
            line-height: 1.6;
        }

        .notice-section {
            padding: 52px 0 62px;
        }

        .notice-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 16px;
            margin-bottom: 20px;
        }

        .notice-head h2 {
            margin: 0;
            font-family: 'Garamond', serif;
            color: #2475ac;
            font-size: clamp(30px, 3vw, 44px);
            line-height: 1.2;
        }

        .notice-head p {
            margin: 0;
            color: #4b6580;
            font-size: 14px;
        }

        .notice-grid {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 14px;
        }

        .notice-card {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.17);
            box-shadow: 0 12px 24px rgba(13, 47, 77, 0.08);
            border-radius: 16px;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            aspect-ratio: 1 / 1;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .notice-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 30px rgba(14, 49, 79, 0.15);
        }

        .notice-card-thumb {
            height: 46%;
            min-height: 110px;
        }

        .notice-card-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .notice-card-body {
            padding: 10px 12px 12px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1;
        }

        .notice-badge {
            display: inline-flex;
            align-self: flex-start;
            padding: 5px 10px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.3px;
            text-transform: uppercase;
            background: var(--notice-blue-3);
            color: #277eb7;
            line-height: 1.2;
        }

        .notice-title {
            margin: 0;
            font-size: 15px;
            line-height: 1.45;
            color: #225d89;
            font-family: 'Garamond', serif;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .notice-date {
            margin-top: auto;
            font-size: 12px;
            color: #66819d;
            font-weight: 600;
        }

        .notice-pagination {
            margin-top: 26px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .page-btn {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            border: 1px solid rgba(67, 155, 212, 0.24);
            background: #fff;
            color: #2d7fb7;
            font-weight: 700;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .page-btn:hover {
            background: #eef8ff;
        }

        .page-btn.active {
            background: linear-gradient(140deg, #439bd4, #4db0e4);
            color: #fff;
            border-color: transparent;
        }

        .page-btn.disabled {
            opacity: 0.45;
            pointer-events: none;
        }

        @media (max-width: 1280px) {
            .notice-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }

        @media (max-width: 1100px) {
            .notice-hero-grid {
                grid-template-columns: 1fr;
            }

            .notice-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 768px) {
            .notice-wide {
                width: min(94vw, 1520px);
            }

            .notice-hero {
                padding: 96px 0 40px;
            }

            .notice-head {
                flex-direction: column;
                align-items: flex-start;
            }

            .notice-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 480px) {
            .notice-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content notice-page">
        <section class="notice-hero">
            <div class="notice-wide notice-hero-grid">
                <div>
                    <ol class="breadcrumb notice-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Tin tức</a></li>
                        <li class="breadcrumb-item active">Thông báo</li>
                    </ol>
                    <h1>Thông báo từ Nhà trường</h1>
                    <p>Cập nhật chính thức các thông báo về lịch học, lịch thi, sự kiện quan trọng và các nội dung điều chỉnh trong năm học. Phụ huynh và học sinh vui lòng theo dõi thường xuyên để nắm bắt thông tin kịp thời.</p>
                </div>
                <div class="notice-top-card">
                    <img src="storage/jnp2203-1-1920x1080.jpg" alt="Thông báo mới nhất">
                    <div class="cap">Cập nhật liên tục theo tuần để đảm bảo mọi thông tin đến phụ huynh và học sinh nhanh chóng, chính xác.</div>
                </div>
            </div>
        </section>

        <section class="notice-section">
            <div class="notice-wide">
                <div class="notice-head">
                    <h2>Danh sách thông báo</h2>
                    <p>Hiển thị dạng ô vuông, mỗi hàng 5 thông báo.</p>
                </div>

                <div class="notice-grid" id="notice-grid">
                    <a class="notice-card" href="javascript:;" data-page="1"><div class="notice-card-thumb"><img src="assets/banner/banner1.jpeg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Lịch học</span><h3 class="notice-title">Thông báo điều chỉnh lịch học tuần 1 tháng 4</h3><span class="notice-date">19/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="1"><div class="notice-card-thumb"><img src="assets/banner/banner2.jpeg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Tuyển sinh</span><h3 class="notice-title">Mở đăng ký tham quan campus đợt tháng 4</h3><span class="notice-date">18/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="1"><div class="notice-card-thumb"><img src="assets/banner/banner3.jpeg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Sự kiện</span><h3 class="notice-title">Lịch Ngày hội STEAM dành cho khối THCS</h3><span class="notice-date">17/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="1"><div class="notice-card-thumb"><img src="olympia/images/noibat_2.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Hành chính</span><h3 class="notice-title">Hướng dẫn cập nhật thông tin học sinh trên cổng phụ huynh</h3><span class="notice-date">16/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="1"><div class="notice-card-thumb"><img src="olympia/images/noibat_4.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Bán trú</span><h3 class="notice-title">Thực đơn tuần mới và lưu ý dinh dưỡng theo cấp học</h3><span class="notice-date">15/03/2026</span></div></a>

                    <a class="notice-card" href="javascript:;" data-page="2"><div class="notice-card-thumb"><img src="olympia/images/noibat_6.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Xe bus</span><h3 class="notice-title">Điều chỉnh tuyến xe bus khu vực Nam Từ Liêm</h3><span class="notice-date">14/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="2"><div class="notice-card-thumb"><img src="olympia/images/noibat_7.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Học bổng</span><h3 class="notice-title">Thông báo thời gian nộp hồ sơ xét học bổng 2026 - 2027</h3><span class="notice-date">13/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="2"><div class="notice-card-thumb"><img src="storage/banner/tieu-hoc.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Tiểu học</span><h3 class="notice-title">Kế hoạch kiểm tra định kỳ học kỳ II khối Tiểu học</h3><span class="notice-date">12/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="2"><div class="notice-card-thumb"><img src="storage/banner/trung-hoc.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">THCS</span><h3 class="notice-title">Lịch ôn tập và tư vấn chọn môn học lớp 9</h3><span class="notice-date">11/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="2"><div class="notice-card-thumb"><img src="storage/banner/tien-tieu-hoc.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Y tế</span><h3 class="notice-title">Thông báo khám sức khỏe định kỳ học sinh toàn trường</h3><span class="notice-date">10/03/2026</span></div></a>

                    <a class="notice-card" href="javascript:;" data-page="3"><div class="notice-card-thumb"><img src="storage/thanh-tich/tt-9.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Khẩn</span><h3 class="notice-title">Cập nhật kế hoạch học tập trong điều kiện thời tiết xấu</h3><span class="notice-date">09/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="3"><div class="notice-card-thumb"><img src="storage/thanh-tich/tt-10.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Tài chính</span><h3 class="notice-title">Thời hạn hoàn tất học phí học kỳ II năm học 2025 - 2026</h3><span class="notice-date">08/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="3"><div class="notice-card-thumb"><img src="storage/thanh-tich/tt-11.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">CLB</span><h3 class="notice-title">Mở đăng ký câu lạc bộ Robotics và Tranh biện</h3><span class="notice-date">07/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="3"><div class="notice-card-thumb"><img src="storage/thanh-tich/tt-12.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">Phụ huynh</span><h3 class="notice-title">Lịch họp phụ huynh toàn trường đợt cuối tháng 3</h3><span class="notice-date">06/03/2026</span></div></a>
                    <a class="notice-card" href="javascript:;" data-page="3"><div class="notice-card-thumb"><img src="storage/thanh-tich/tt-13.jpg" alt=""></div><div class="notice-card-body"><span class="notice-badge">An toàn</span><h3 class="notice-title">Khuyến cáo an toàn giao thông cho học sinh khi đến trường</h3><span class="notice-date">05/03/2026</span></div></a>
                </div>

                <div class="notice-pagination" id="notice-pagination">
                    <button class="page-btn" data-page="prev">‹</button>
                    <button class="page-btn active" data-page="1">1</button>
                    <button class="page-btn" data-page="2">2</button>
                    <button class="page-btn" data-page="3">3</button>
                    <button class="page-btn" data-page="next">›</button>
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

        (function() {
            var cards = document.querySelectorAll('#notice-grid .notice-card');
            var buttons = document.querySelectorAll('#notice-pagination .page-btn');
            var totalPages = 3;
            var currentPage = 1;

            function renderPagination() {
                buttons.forEach(function(btn) {
                    var page = btn.getAttribute('data-page');
                    btn.classList.remove('active', 'disabled');

                    if (String(currentPage) === page) {
                        btn.classList.add('active');
                    }

                    if (page === 'prev' && currentPage === 1) {
                        btn.classList.add('disabled');
                    }

                    if (page === 'next' && currentPage === totalPages) {
                        btn.classList.add('disabled');
                    }
                });
            }

            function renderCards() {
                cards.forEach(function(card) {
                    var page = Number(card.getAttribute('data-page'));
                    card.style.display = (page === currentPage) ? 'flex' : 'none';
                });
            }

            function setPage(page) {
                if (page < 1 || page > totalPages) {
                    return;
                }
                currentPage = page;
                renderCards();
                renderPagination();
                window.scrollTo({ top: document.querySelector('.notice-section').offsetTop - 90, behavior: 'smooth' });
            }

            buttons.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var page = btn.getAttribute('data-page');

                    if (page === 'prev') {
                        setPage(currentPage - 1);
                        return;
                    }

                    if (page === 'next') {
                        setPage(currentPage + 1);
                        return;
                    }

                    setPage(Number(page));
                });
            });

            renderCards();
            renderPagination();
        })();
    </script>
</body>

</html>
