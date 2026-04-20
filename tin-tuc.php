<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Tin tức</title>
    <meta name="description" content="Cập nhật tin tức, hoạt động và sự kiện mới nhất của Meyschool Đoàn Thị Điểm">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Meyschool Đoàn Thị Điểm">
    <meta property="og:title" content="Tin tức">
    <meta property="og:description"
        content="Cập nhật tin tức, hoạt động và sự kiện mới nhất của Meyschool Đoàn Thị Điểm">
    <meta property="og:url" content="tin-tuc.php">
    <meta property="og:type" content="article">
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="twitter:title" content="Tin tức">
    <meta name="twitter:description"
        content="Cập nhật tin tức, hoạt động và sự kiện mới nhất của Meyschool Đoàn Thị Điểm">

    <link media="all" type="text/css" rel="stylesheet"
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

        /* ── News Page ── */
        .news-page {
            background: #fff;
            color: #222;
            padding-top: 120px;
            margin-bottom: 180px;
        }

        .news-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Breadcrumb */
        .news-breadcrumb {
            padding: 20px 0 0;
        }

        .news-breadcrumb ol {
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

        .news-breadcrumb ol li+li::before {
            content: '>';
            margin-right: 6px;
            color: #aaa;
        }

        .news-breadcrumb ol li a {
            color: #888;
            text-decoration: none;
        }

        .news-breadcrumb ol li a:hover {
            color: #2d6a9f;
        }

        .news-breadcrumb ol li:last-child {
            color: #555;
        }

        /* Heading */
        .news-heading {
            padding: 16px 0 28px;
        }

        .news-heading h1 {
            margin: 0;
            font-family: 'Garamond', 'Times New Roman', serif;
            font-size: 42px;
            font-weight: 700;
            font-style: normal;
            color: #1a1a2e;
            line-height: 1.2;
        }

        /* Category tabs */
        .news-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 32px;
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 0;
        }

        .news-cat-btn {
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

        .news-cat-btn:hover {
            color: #2d6a9f;
        }

        .news-cat-btn.active {
            color: #2d6a9f;
            font-weight: 600;
            border-bottom-color: #2d6a9f;
        }

        /* News grid */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .news-card {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .news-card:hover .news-card-img img {
            transform: scale(1.04);
        }

        .news-card-img {
            width: 100%;
            aspect-ratio: 4/3;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .news-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .news-card-title {
            margin: 0;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Pagination */
        .news-pagination {
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
            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .news-page {
                padding-top: 60px;
            }

            .news-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .news-heading h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content news-page">
        <div class="news-container">
            <div class="news-breadcrumb">
                <ol>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li>Tin tức</li>
                </ol>
            </div>

            <div class="news-heading">
                <h1>Tin tức</h1>
            </div>

            <div class="news-categories" id="news-filters">
                <button class="news-cat-btn active" data-cate="">Tất cả</button>
            </div>

            <div class="news-grid" id="news-grid">
                <p style="grid-column:1/-1;text-align:center;color:#999;padding:40px 0;">Đang tải...</p>
            </div>

            <div class="news-pagination" id="news-pagination"></div>
        </div>
    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

    <script src="olympia/js/bootstrap.min.js"></script>
    <script src="olympia/js/jquery.toast.min.js"></script>
    <script src="olympia/js/main.js"></script>
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
            var grid = document.getElementById('news-grid');
            var paginationEl = document.getElementById('news-pagination');
            var filtersEl = document.getElementById('news-filters');
            var currentPage = 1;
            var currentCate = '';

            // Load danh mục từ DB
            $.getJSON('api/news-categories.php', function(res) {
                if (res.success && res.data) {
                    res.data.forEach(function(c) {
                        if (c.status === 'active') {
                            var btn = $('<button class="news-cat-btn"></button>');
                            btn.attr('data-cate', c.id);
                            btn.text(c.name);
                            $(filtersEl).append(btn);
                        }
                    });
                    bindFilterEvents();
                }
            });

            function bindFilterEvents() {
                $(filtersEl).on('click', '.news-cat-btn', function() {
                    $(filtersEl).find('.news-cat-btn').removeClass('active');
                    $(this).addClass('active');
                    currentCate = $(this).data('cate');
                    currentPage = 1;
                    loadNews();
                });
            }

            function escHtml(str) {
                var div = document.createElement('div');
                div.textContent = str;
                return div.innerHTML;
            }

            function loadNews() {
                var params = 'page=' + currentPage + '&status=xuat-ban';
                if (currentCate) params += '&category_id=' + currentCate;

                grid.innerHTML =
                    '<p style="grid-column:1/-1;text-align:center;color:#999;padding:40px 0;">Đang tải...</p>';

                $.getJSON('api/news-public.php?' + params, function(res) {
                    if (!res.success || !res.data.length) {
                        grid.innerHTML =
                            '<p style="grid-column:1/-1;text-align:center;color:#999;padding:40px 0;">Chưa có bài viết nào.</p>';
                        paginationEl.innerHTML = '';
                        return;
                    }

                    var html = '';
                    res.data.forEach(function(r) {
                        var thumb = r.thumbnail || 'assets/img/favicon.png';
                        var link = 'doc-tin-tuc.php?slug=' + encodeURIComponent(r.slug);

                        html += '<a class="news-card" href="' + link + '">';
                        html += '<div class="news-card-img"><img src="' + escHtml(thumb) + '" alt="' +
                            escHtml(r.title) + '"></div>';
                        html += '<p class="news-card-title">' + escHtml(r.title) + '</p>';
                        html += '</a>';
                    });
                    grid.innerHTML = html;

                    // Pagination with ellipsis
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
                // Always show first few, last few, and around current
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
                var page = $(this).data('page');
                currentPage = Number(page);
                loadNews();
                window.scrollTo({
                    top: document.querySelector('.news-categories').offsetTop - 80,
                    behavior: 'smooth'
                });
            });

            // Init
            loadNews();
        })();
    </script>
</body>

</html>