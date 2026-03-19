<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />

    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Tin tức</title>
    <meta name="description" content="Tin tức">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Tin tức">
    <meta property="og:description" content="Tin tức">
    <meta property="og:url" content="tin-tuc.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Tin tức">
    <meta name="twitter:description" content="Tin tức">

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
            --news-blue-1: #439bd4;
            --news-blue-2: #4db0e4;
            --news-blue-3: #e8f7ff;
            --news-text: #1e3b57;
        }

        .news-page {
            background: #f5fbff;
            color: var(--news-text);
        }

        .news-wide {
            width: min(96vw, 1520px);
            margin: 0 auto;
        }

        /* Creative banner (different from other pages) */
        .news-hero {
            padding: 112px 0 58px;
            background: radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.32) 0%, rgba(255, 255, 255, 0) 40%),
                radial-gradient(circle at 85% 15%, rgba(255, 255, 255, 0.26) 0%, rgba(255, 255, 255, 0) 35%),
                linear-gradient(135deg, #439bd4 0%, #4db0e4 100%);
            position: relative;
            overflow: hidden;
        }

        .news-hero-wave {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -2px;
            height: 90px;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.96), rgba(255, 255, 255, 0.8));
            clip-path: polygon(0 52%, 12% 44%, 24% 54%, 36% 40%, 49% 55%, 62% 43%, 74% 56%, 86% 45%, 100% 58%, 100% 100%, 0 100%);
        }

        .news-hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 26px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .news-breadcrumb {
            margin: 0 0 16px;
            display: inline-flex;
            flex-wrap: wrap;
            gap: 8px;
            background: rgba(255, 255, 255, 0.22);
            border: 1px solid rgba(255, 255, 255, 0.44);
            border-radius: 999px;
            padding: 8px 15px;
            position: static !important;
            transform: none !important;
            left: auto !important;
            right: auto !important;
            top: auto !important;
            bottom: auto !important;
        }

        .news-breadcrumb li,
        .news-breadcrumb li a {
            color: #fff;
            font-size: 13px;
            position: static !important;
        }

        .news-hero h1 {
            margin: 0 0 12px;
            color: #fff;
            font-size: clamp(36px, 4.2vw, 62px);
            line-height: 1.08;
            font-family: 'Garamond', serif;
        }

        .news-hero p {
            margin: 0;
            max-width: 760px;
            color: rgba(255, 255, 255, 0.95);
            font-size: 16px;
            line-height: 1.82;
        }

        .news-floating-cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            transform: rotate(-2deg);
        }

        .news-floating-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 18px 34px rgba(12, 44, 75, 0.18);
        }

        .news-floating-card:nth-child(2) {
            transform: translateY(22px);
        }

        .news-floating-card img {
            width: 100%;
            height: 145px;
            object-fit: cover;
        }

        .news-floating-card p {
            margin: 0;
            color: #235d89;
            font-size: 12px;
            line-height: 1.55;
            padding: 10px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .news-section {
            padding: 42px 0 60px;
        }

        .news-filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .news-chip {
            border: none;
            padding: 9px 14px;
            border-radius: 999px;
            background: #e7f5ff;
            color: #2d7fb7;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .news-chip.active {
            background: linear-gradient(145deg, #439bd4, #4db0e4);
            color: #fff;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .news-card {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.16);
            border-radius: 16px;
            overflow: hidden;
            text-decoration: none;
            box-shadow: 0 12px 24px rgba(16, 51, 81, 0.08);
            color: inherit;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
            display: flex;
            flex-direction: column;
        }

        .news-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 32px rgba(14, 52, 84, 0.14);
        }

        .news-card img {
            width: 100%;
            height: 170px;
            object-fit: cover;
        }

        .news-card-body {
            padding: 10px 12px 12px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 6px;
            flex: 1;
        }

        .news-meta {
            display: flex;
            justify-content: space-between;
            gap: 8px;
            font-size: 11px;
            color: #67839f;
            font-weight: 700;
            text-transform: uppercase;
        }

        .news-title {
            margin: 0 !important;
            padding: 0 !important;
            color: #235b86;
            font-family: 'Garamond', serif;
            font-size: 20px;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-desc {
            margin: 0 !important;
            padding: 0 !important;
            color: #4a637d;
            font-size: 13px;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-link {
            margin-top: 2px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #2b89c0;
            text-transform: uppercase;
        }

        .news-pagination {
            margin-top: 26px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
        }

        .page-btn {
            min-width: 38px;
            height: 38px;
            border-radius: 10px;
            border: 1px solid rgba(67, 155, 212, 0.24);
            background: #fff;
            color: #2e82ba;
            font-weight: 700;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .page-btn.active {
            background: linear-gradient(145deg, #439bd4, #4db0e4);
            color: #fff;
            border-color: transparent;
        }

        .page-btn.disabled {
            opacity: 0.45;
            pointer-events: none;
        }

        @media (max-width: 1280px) {
            .news-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 1024px) {
            .news-hero-grid {
                grid-template-columns: 1fr;
            }

            .news-floating-cards {
                transform: none;
            }
        }

        @media (max-width: 768px) {
            .news-wide {
                width: min(94vw, 1520px);
            }

            .news-hero {
                padding: 96px 0 46px;
            }

            .news-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 520px) {
            .news-grid,
            .news-floating-cards {
                grid-template-columns: 1fr;
            }

            .news-floating-card:nth-child(2) {
                transform: none;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content news-page">
        <section class="news-hero">
            <div class="news-wide news-hero-grid">
                <div>
                    <ol class="breadcrumb news-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Tin tức</a></li>
                        <li class="breadcrumb-item active">Tin tức</li>
                    </ol>
                    <h1>Góc nhìn mới về nhịp sống Meyschool</h1>
                    <p>Tổng hợp những câu chuyện nổi bật về hoạt động học tập, sáng tạo và hành trình phát triển của học sinh. Cập nhật liên tục các bài viết chuyên đề, sự kiện và hợp tác giáo dục trong nước - quốc tế.</p>
                </div>
                <div class="news-floating-cards">
                    <article class="news-floating-card">
                        <img src="storage/565657460-1266642185500964-7927902821603982118-n-300x300.jpg" alt="Tin nổi bật 1">
                        <p>SỰ KIỆN CỘNG ĐỒNG & GIA ĐÌNH</p>
                    </article>
                    <article class="news-floating-card">
                        <img src="storage/560513330-1261797065985476-882756936417265788-n-300x300.jpg" alt="Tin nổi bật 2">
                        <p>HỢP TÁC QUỐC TẾ & KẾT NỐI VĂN HÓA</p>
                    </article>
                </div>
            </div>
            <div class="news-hero-wave"></div>
        </section>

        <section class="news-section">
            <div class="news-wide">
                <div class="news-filter-row" id="news-filters">
                    <button class="news-chip active" data-cate="all">Tất cả</button>
                    <button class="news-chip" data-cate="mam-non">Mầm non</button>
                    <button class="news-chip" data-cate="tieu-hoc">Tiểu học</button>
                    <button class="news-chip" data-cate="thcs">THCS</button>
                    <button class="news-chip" data-cate="thpt">THPT</button>
                    <button class="news-chip" data-cate="viet-my">Tích hợp Việt - Mỹ</button>
                </div>

                <div class="news-grid" id="news-grid">
                    <a class="news-card" href="doc-tin-tuc.php" data-page="1" data-cate="all"><img src="storage/olympia-schools-1-300x300.jpg" alt=""><div class="news-card-body"><div class="news-meta"><span>Tin nhà trường</span><span>19/03/2026</span></div><h3 class="news-title">Báo cáo thường niên năm 2025 của Olympia</h3><p class="news-desc">Nhìn lại các cột mốc nổi bật trong năm học với những đổi mới về chương trình, cơ sở vật chất và chất lượng đầu ra.</p><span class="news-link">Đọc tiếp ›</span></div></a>
                    <a class="news-card" href="hoc-bong-griffin-2026-khac-biet-ban-sac-dan-loi-tuong-lai.html" data-page="1" data-cate="thpt"><img src="storage/anh-vuong-kv-300x300.jpg" alt=""><div class="news-card-body"><div class="news-meta"><span>Học bổng</span><span>18/03/2026</span></div><h3 class="news-title">Học bổng Griffin 2026 - Khác biệt bản sắc, dẫn lối tương lai</h3><p class="news-desc">Cơ hội học bổng dành cho học sinh có năng lực học thuật và phẩm chất lãnh đạo nổi bật.</p><span class="news-link">Đọc tiếp ›</span></div></a>
                    <a class="news-card" href="olympia-ky-ket-hop-tac-chien-luoc-voi-benh-vien-da-khoa-hong-ngoc.html" data-page="1" data-cate="all"><img src="storage/img-8272-300x300.jpg" alt=""><div class="news-card-body"><div class="news-meta"><span>Hợp tác</span><span>17/03/2026</span></div><h3 class="news-title">Olympia ký kết hợp tác chiến lược với Bệnh viện Đa khoa Hồng Ngọc</h3><p class="news-desc">Nâng cao hệ thống chăm sóc sức khỏe học đường theo chuẩn toàn diện cho học sinh.</p><span class="news-link">Đọc tiếp ›</span></div></a>
                    <a class="news-card" href="nhung-tieng-cuoi-gion-tan-trong-ngay-dai-hoi-the-thao-cua-cac-olympians-nhi.html" data-page="1" data-cate="tieu-hoc"><img src="storage/562452043-1264643732367476-6011133221642088308-n-1-300x300.jpg" alt=""><div class="news-card-body"><div class="news-meta"><span>Tiểu học</span><span>16/03/2026</span></div><h3 class="news-title">Đại hội thể thao và những tiếng cười giòn tan của Olympians nhí</h3><p class="news-desc">Ngày hội vận động giúp học sinh rèn thể chất, tinh thần đồng đội và sự tự tin.</p><span class="news-link">Đọc tiếp ›</span></div></a>
                    <a class="news-card" href="olympia-sport-family-2025-550-gia-dinh-cung-tham-gia-buoc-chay-hoa-no-cho-sach-ra-khoi.html" data-page="2" data-cate="all"><img src="storage/565657460-1266642185500964-7927902821603982118-n-300x300.jpg" alt=""><div class="news-card-body"><div class="news-meta"><span>Cộng đồng</span><span>15/03/2026</span></div><h3 class="news-title">Olympia Sport Family 2025: 550 gia đình cùng tham gia</h3><p class="news-desc">Sự kiện gắn kết phụ huynh - học sinh với thông điệp sống tích cực, sẻ chia và phát triển bền vững.</p><span class="news-link">Đọc tiếp ›</span></div></a>
                    <a class="news-card" href="glocal-connect-olympians-khoi-9-cung-chuyen-gia-kham-pha-bai-toan-nang-luong-va-phat-trien-ben-vung-cho-tuong-lai.html" data-page="2" data-cate="thcs"><img src="storage/565713196-1265460488952467-739452362513210151-n-300x300.jpg" alt=""><div class="news-card-body"><div class="news-meta"><span>THCS</span><span>14/03/2026</span></div><h3 class="news-title">Olympians khối 9 khám phá bài toán năng lượng và phát triển bền vững</h3><p class="news-desc">Chuỗi hoạt động glocal connect giúp học sinh tiếp cận các vấn đề toàn cầu bằng góc nhìn thực tiễn.</p><span class="news-link">Đọc tiếp ›</span></div></a>
                    <a class="news-card" href="olympians-tieu-hoc-dung-toan-hoc-de-bao-ve-moi-truong.html" data-page="2" data-cate="tieu-hoc"><img src="storage/561716387-1265512768947239-7388861688706131424-n-300x300.jpg" alt=""><div class="news-card-body"><div class="news-meta"><span>Tiểu học</span><span>13/03/2026</span></div><h3 class="news-title">Olympians Tiểu học dùng toán học để bảo vệ môi trường</h3><p class="news-desc">Học sinh ứng dụng tư duy định lượng để xây dựng giải pháp bảo vệ môi trường xung quanh.</p><span class="news-link">Đọc tiếp ›</span></div></a>
                    <a class="news-card" href="olympia-moment-le-chao-co-ban-sac-viet-trong-ngoi-truong-song-ngu-hien-dai.html" data-page="2" data-cate="all"><img src="storage/558896620-1256634899835026-2702230381535881475-n-300x300.jpg" alt=""><div class="news-card-body"><div class="news-meta"><span>Olympia moment</span><span>12/03/2026</span></div><h3 class="news-title">Lễ chào cờ – Bản sắc Việt trong ngôi trường song ngữ hiện đại</h3><p class="news-desc">Không gian nghi lễ truyền thống được gìn giữ và làm mới trong môi trường học tập hội nhập.</p><span class="news-link">Đọc tiếp ›</span></div></a>
                </div>

                <div class="news-pagination" id="news-pagination">
                    <button class="page-btn" data-page="prev">‹</button>
                    <button class="page-btn active" data-page="1">1</button>
                    <button class="page-btn" data-page="2">2</button>
                    <button class="page-btn" data-page="next">›</button>
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
            var cards = document.querySelectorAll('#news-grid .news-card');
            var pageBtns = document.querySelectorAll('#news-pagination .page-btn');
            var filterBtns = document.querySelectorAll('#news-filters .news-chip');

            var totalPages = 2;
            var currentPage = 1;
            var currentCate = 'all';

            function applyFilterAndPage() {
                cards.forEach(function(card) {
                    var cardPage = Number(card.getAttribute('data-page'));
                    var cardCate = card.getAttribute('data-cate');
                    var cateMatch = (currentCate === 'all') || (cardCate === currentCate) || (cardCate === 'all');
                    var pageMatch = cardPage === currentPage;
                    card.style.display = cateMatch && pageMatch ? 'flex' : 'none';
                });
            }

            function updatePagination() {
                pageBtns.forEach(function(btn) {
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

            function setPage(page) {
                if (page < 1 || page > totalPages) {
                    return;
                }
                currentPage = page;
                applyFilterAndPage();
                updatePagination();
            }

            pageBtns.forEach(function(btn) {
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

            filterBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    filterBtns.forEach(function(f) { f.classList.remove('active'); });
                    btn.classList.add('active');
                    currentCate = btn.getAttribute('data-cate');
                    currentPage = 1;
                    applyFilterAndPage();
                    updatePagination();
                });
            });

            applyFilterAndPage();
            updatePagination();
        })();
    </script>
</body>

</html>
