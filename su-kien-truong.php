<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Sự kiện trường</title>
    <meta name="description" content="Cập nhật các sự kiện mới nhất của Meyschool Đoàn Thị Điểm">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Meyschool Đoàn Thị Điểm">
    <meta property="og:title" content="Sự kiện trường">
    <meta property="og:description" content="Cập nhật các sự kiện mới nhất của Meyschool Đoàn Thị Điểm">
    <meta property="og:url" content="su-kien-truong.php">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Sự kiện trường">
    <meta name="twitter:description" content="Cập nhật các sự kiện mới nhất của Meyschool Đoàn Thị Điểm">

    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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

        /* ── Events Page ── */
        .events-page {
            background: #fff;
            color: #222;
            padding-top: 120px;
            margin-bottom: 180px;
        }

        .events-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Breadcrumb */
        .events-breadcrumb {
            padding: 20px 0 0;
        }

        .events-breadcrumb ol {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
            font-size: 12px;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .events-breadcrumb ol li+li::before {
            content: '>';
            margin-right: 6px;
            color: #aaa;
        }

        .events-breadcrumb ol li a {
            color: #888;
            text-decoration: none;
        }

        .events-breadcrumb ol li a:hover {
            color: #2d6a9f;
        }

        .events-breadcrumb ol li:last-child {
            color: #555;
        }

        /* Heading */
        .events-heading {
            padding: 16px 0 28px;
        }

        .events-heading h1 {
            margin: 0;
            font-family: 'Garamond', 'Times New Roman', serif;
            font-size: 42px;
            font-weight: 700;
            font-style: normal;
            color: #1a1a2e;
            line-height: 1.2;
        }

        /* Category tabs */
        .events-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 32px;
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 0;
        }

        .events-cat-btn {
            background: none;
            border: none;
            padding: 8px 16px 12px;
            font-size: 14px;
            color: #555;
            cursor: pointer;
            position: relative;
            font-weight: 500;
            transition: color 0.2s;
            border-bottom: 2px solid transparent;
            margin-bottom: -1px;
        }

        .events-cat-btn:hover {
            color: #2d6a9f;
        }

        .events-cat-btn.active {
            color: #2d6a9f;
            font-weight: 600;
            border-bottom-color: #2d6a9f;
        }

        /* Events grid */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .events-card {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .events-card:hover .events-card-img img {
            transform: scale(1.04);
        }

        .events-card-img {
            width: 100%;
            aspect-ratio: 4/3;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .events-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .events-card-title {
            margin: 0;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Pagination */
        .events-pagination {
            margin: 44px 0 60px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 6px;
        }

        .pg-btn {
            min-width: 36px;
            height: 36px;
            border-radius: 50%;
            border: none;
            background: none;
            color: #555;
            font-size: 14px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.15s, color 0.15s;
        }

        .pg-btn:hover:not(.active):not(.disabled) {
            background: #f0f0f0;
        }

        .pg-btn.active {
            background: #2d6a9f;
            color: #fff;
        }

        .pg-btn.disabled {
            opacity: 0.35;
            pointer-events: none;
        }

        .pg-dots {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 36px;
            height: 36px;
            font-size: 14px;
            color: #999;
            letter-spacing: 2px;
        }

        @media (max-width: 1024px) {
            .events-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .events-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .events-heading h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content events-page">
        <div class="events-container">
            <div class="events-breadcrumb">
                <ol>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="javascript:;">Tin tức &amp; sự kiện</a></li>
                    <li>Sự kiện trường</li>
                </ol>
            </div>

            <div class="events-heading">
                <h1>Sự kiện trường</h1>
            </div>

            <div class="events-categories" id="events-filters">
                <button class="events-cat-btn active" data-cate="">Tất cả</button>
            </div>

            <div class="events-grid" id="events-grid">
                <p style="grid-column:1/-1;text-align:center;color:#999;padding:40px 0;">Đang tải...</p>
            </div>

            <div class="events-pagination" id="events-pagination"></div>
        </div>
    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

    <script src="olympia/js/bootstrap.min.js"></script>
    <script src="olympia/js/jquery.toast.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script src="vendor/core/plugins/language/js/language-publice209.js?v=1.0.0"></script>
    <script src="olympia/js/contact.js"></script>
    <script src="olympia/js/custom.js"></script>

    <script>
        if (typeof AOS !== 'undefined') {
            AOS.init({
                once: true,
                disable: function() {
                    return window.innerWidth < 768;
                }
            });
        }

        (function() {
            var grid = document.getElementById('events-grid');
            var paginationEl = document.getElementById('events-pagination');
            var filtersEl = document.getElementById('events-filters');
            var currentPage = 1;
            var currentCate = '';

            // Load danh mục từ DB
            $.getJSON('api/event-categories.php', function(res) {
                if (res.success && res.data) {
                    res.data.forEach(function(c) {
                        if (c.status === 'active') {
                            var btn = $('<button class="events-cat-btn"></button>');
                            btn.attr('data-cate', c.id);
                            btn.text(c.name);
                            $(filtersEl).append(btn);
                        }
                    });
                    bindFilterEvents();
                }
            });

            function bindFilterEvents() {
                $(filtersEl).on('click', '.events-cat-btn', function() {
                    $(filtersEl).find('.events-cat-btn').removeClass('active');
                    $(this).addClass('active');
                    currentCate = $(this).data('cate');
                    currentPage = 1;
                    loadEvents();
                });
            }

            function escHtml(str) {
                var div = document.createElement('div');
                div.textContent = str;
                return div.innerHTML;
            }

            function loadEvents() {
                var params = 'page=' + currentPage + '&status=xuat-ban';
                if (currentCate) params += '&category_id=' + currentCate;

                grid.innerHTML =
                    '<p style="grid-column:1/-1;text-align:center;color:#999;padding:40px 0;">Đang tải...</p>';

                $.getJSON('api/events-public.php?' + params, function(res) {
                    if (!res.success || !res.data.length) {
                        grid.innerHTML =
                            '<p style="grid-column:1/-1;text-align:center;color:#999;padding:40px 0;">Chưa có sự kiện nào.</p>';
                        paginationEl.innerHTML = '';
                        return;
                    }

                    var html = '';
                    res.data.forEach(function(r) {
                        var thumb = r.thumbnail || 'storage/favicon.png';
                        var link = 'doc-su-kien.php?slug=' + encodeURIComponent(r.slug);

                        html += '<a class="events-card" href="' + link + '">';
                        html += '<div class="events-card-img"><img src="' + escHtml(thumb) + '" alt="' + escHtml(r.title) + '"></div>';
                        html += '<p class="events-card-title">' + escHtml(r.title) + '</p>';
                        html += '</a>';
                    });
                    grid.innerHTML = html;

                    // Pagination
                    var totalPages = res.totalPages || 1;
                    if (totalPages <= 1) {
                        paginationEl.innerHTML = '';
                        return;
                    }
                    var pages = buildPageNumbers(currentPage, totalPages);
                    var pagHtml = '';
                    pages.forEach(function(p) {
                        if (p === '...') {
                            pagHtml += '<span class="pg-dots">...</span>';
                        } else {
                            pagHtml += '<button class="pg-btn' + (p === currentPage ? ' active' : '') +
                                '" data-page="' + p + '">' + p + '</button>';
                        }
                    });
                    paginationEl.innerHTML = pagHtml;
                });
            }

            function buildPageNumbers(current, total) {
                var pages = [];
                if (total <= 10) {
                    for (var i = 1; i <= total; i++) pages.push(i);
                    return pages;
                }
                var left = Math.max(2, current - 2);
                var right = Math.min(total - 1, current + 2);
                pages.push(1);
                if (left > 2) pages.push('...');
                for (var j = left; j <= right; j++) pages.push(j);
                if (right < total - 1) pages.push('...');
                pages.push(total);
                return pages;
            }

            $(paginationEl).on('click', '.pg-btn', function() {
                currentPage = Number($(this).data('page'));
                loadEvents();
                window.scrollTo({
                    top: document.querySelector('.events-categories').offsetTop - 80,
                    behavior: 'smooth'
                });
            });

            // Init
            loadEvents();
        })();
    </script>
</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:site_name" content="The Olympia Schools">
<meta property="og:title" content="Sự kiện trường">
<meta property="og:description" content="">
<meta property="og:url" content="su-kien-truong.html">
<meta property="og:type" content="article">
<meta property="og:image" content="storage/favicon.png">
<meta name="twitter:title" content="Sự kiện trường">
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
                        <li class="breadcrumb-item active">Sự kiện trường</li>
                    </ol>
                    <h1>Sự kiện nổi bật tại Meyschool Đoàn Thị Điểm</h1>
                    <p>Tổng hợp các sự kiện quan trọng trong năm học: lễ khai giảng, ngày hội gia đình, hội thảo chuyên
                        đề, chương trình giao lưu quốc tế và những dấu mốc đáng nhớ của cộng đồng Meyschool.</p>
                </div>
                <div class="ac-highlight">
                    <img src="storage/jnp2203-1-1920x1080.jpg" alt="Sự kiện nổi bật">
                    <p>Mỗi sự kiện là cơ hội để học sinh trải nghiệm, kết nối và phát triển bản thân trong môi trường
                        giáo dục hiện đại và nhân văn.</p>
                </div>
            </div>
        </section>

        <section class="ac-section">
            <div class="ac-wide">
                <div class="ac-intro">
                    <article class="ac-card" data-aos="fade-up">
                        <h2>Điểm lại các sự kiện trong năm học</h2>
                        <p>Meyschool tổ chức đa dạng các sự kiện nhằm tạo không gian phát triển toàn diện cho học sinh,
                            kết nối gia đình và nhà trường, đồng thời mở rộng quan hệ đối tác giáo dục trong và ngoài
                            nước. Mỗi sự kiện đều được thiết kế theo định hướng giáo dục trải nghiệm.</p>
                    </article>
                    <div class="ac-kpis" data-aos="fade-up" data-aos-delay="100">
                        <div class="ac-kpi"><strong>40+</strong><span>Sự kiện lớn được tổ chức mỗi năm học</span></div>
                        <div class="ac-kpi"><strong>10+</strong><span>Chương trình giao lưu quốc tế và hội thảo chuyên
                                đề</span></div>
                        <div class="ac-kpi"><strong>5000+</strong><span>Lượt phụ huynh và học sinh tham gia sự kiện mỗi
                                năm</span></div>
                        <div class="ac-kpi"><strong>100%</strong><span>Sự kiện được tổ chức theo tiêu chuẩn giáo dục
                                trải nghiệm</span></div>
                    </div>
                </div>

                <div class="ac-tabs" id="ac-tabs">
                    <button class="ac-tab active" data-year="all">Tất cả</button>
                    <button class="ac-tab" data-year="2023-2024">2023 - 2024</button>
                    <button class="ac-tab" data-year="2024-2025">2024 - 2025</button>
                    <button class="ac-tab" data-year="2025-2026">2025 - 2026</button>
                </div>

                <div class="ac-grid" id="ac-grid">
                    <article class="ac-item" data-year="2025-2026" data-aos="fade-up">
                        <img src="assets/banner/banner1.jpeg" alt="Lễ khai giảng">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2025 - 2026</span>
                            <h3>Lễ khai giảng năm học mới: Khởi đầu hành trình mới</h3>
                            <p>Toàn trường chào đón năm học mới với chương trình khai giảng trang trọng, truyền cảm hứng
                                cho học sinh và gia đình.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2025-2026" data-aos="fade-up" data-aos-delay="80">
                        <img src="assets/banner/banner2.jpeg" alt="Ngày hội gia đình">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2025 - 2026</span>
                            <h3>Ngày hội gia đình Meyschool: Gắn kết yêu thương</h3>
                            <p>Sân chơi dành cho cả gia đình với các hoạt động vui nhộn, gian hàng sáng tạo và chương
                                trình biểu diễn đặc sắc.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2024-2025" data-aos="fade-up" data-aos-delay="140">
                        <img src="assets/banner/banner3.jpeg" alt="Hội thảo giáo dục">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2024 - 2025</span>
                            <h3>Hội thảo chuyên đề: Giáo dục trong thời đại số</h3>
                            <p>Diễn đàn quy tụ chuyên gia giáo dục trong và ngoài nước, chia sẻ phương pháp giảng dạy
                                hiện đại và xu hướng đổi mới.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2024-2025" data-aos="fade-up">
                        <img src="olympia/images/noibat_2.jpg" alt="Giao lưu quốc tế">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2024 - 2025</span>
                            <h3>Chương trình giao lưu quốc tế với đoàn học sinh Singapore</h3>
                            <p>Hai tuần trải nghiệm xuyên văn hóa, học sinh hai nước cùng tham gia các dự án học tập và
                                hoạt động ngoại khóa.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2023-2024" data-aos="fade-up" data-aos-delay="80">
                        <img src="olympia/images/noibat_4.jpg" alt="Lễ tốt nghiệp">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2023 - 2024</span>
                            <h3>Lễ tốt nghiệp và tri ân: Cánh cửa mới rộng mở</h3>
                            <p>Buổi lễ trang trọng vinh danh thành quả học tập của các em, ghi nhận nỗ lực của thầy cô
                                và sự đồng hành của phụ huynh.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>

                    <article class="ac-item" data-year="2023-2024" data-aos="fade-up" data-aos-delay="140">
                        <img src="olympia/images/noibat_6.jpg" alt="Open Day">
                        <div class="ac-item-content">
                            <span class="ac-item-year">2023 - 2024</span>
                            <h3>Open Day: Trải nghiệm một ngày làm học sinh Meyschool</h3>
                            <p>Chương trình tham quan trường dành cho phụ huynh và học sinh quan tâm, trực tiếp trải
                                nghiệm môi trường học tập.</p>
                            <a href="javascript:;">Xem chi tiết ›</a>
                        </div>
                    </article>
                </div>

                <div class="ac-gallery" data-aos="fade-up">
                    <img class="g1" src="olympia/images/noibat_6.jpg" alt="Sự kiện 1">
                    <img class="g2" src="olympia/images/noibat_2.jpg" alt="Sự kiện 2">
                    <img class="g3" src="olympia/images/noibat_4.jpg" alt="Sự kiện 3">
                    <img class="g4" src="olympia/images/noibat_7.jpg" alt="Sự kiện 4">
                    <img class="g5" src="storage/banner/tieu-hoc.jpg" alt="Sự kiện 5">
                    <img class="g6" src="storage/banner/trung-hoc.jpg" alt="Sự kiện 6">
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