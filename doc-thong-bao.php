<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title id="pageTitle">Chi tiết thông báo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Meyschool Đoàn Thị Điểm">
    <meta property="og:type" content="article">

    <link media="all" type="text/css" rel="stylesheet"
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

    <style>
        nav#admin_bar {
            display: none;
        }

        body.show-admin-bar {
            margin-top: 0 !important;
        }

        .jq-toast-wrap {
            display: block;
            position: fixed;
            width: 250px;
            pointer-events: none !important;
            letter-spacing: normal;
            z-index: 9000999999999 !important;
        }

        .detail-page {
            background: #fff;
            color: #333;
            margin-bottom: 120px;
        }

        .detail-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            box-sizing: border-box;
        }

        .detail-top {
            padding: 120px 0 18px;
        }

        .detail-breadcrumb {
            margin: 0 0 14px;
            padding: 0;
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #7f8ea1;
        }

        .detail-breadcrumb li+li::before {
            content: '>';
            margin-right: 6px;
            color: #b0bcc8;
        }

        .detail-breadcrumb li a {
            color: #597288;
            text-decoration: none;
        }

        .detail-breadcrumb li a:hover {
            color: #2a5e86;
            text-decoration: underline;
        }

        .detail-breadcrumb li:last-child {
            color: #2a5e86;
            opacity: 1;
        }

        .detail-title {
            margin: 0 0 16px;
            font-size: 36px;
            font-weight: 700;
            line-height: 1.25;
            max-width: 700px;
            color: #1a1a2e;
        }

        .detail-top-date {
            font-size: 13px;
            color: #58758d;
            opacity: 1;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Layout */
        .detail-layout {
            padding: 40px 0 60px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 300px;
            gap: 40px;
            align-items: start;
            overflow: hidden;
        }

        /* Article content */
        .detail-article {
            min-width: 0;
            max-width: 100%;
            overflow: hidden;
            box-sizing: border-box;
        }

        .detail-content {
            font-size: 15px;
            line-height: 1.85;
            color: #444;
            overflow-wrap: break-word;
            word-wrap: break-word;
            overflow: hidden;
            max-width: 100%;
        }

        .detail-content * {
            max-width: 100% !important;
            box-sizing: border-box;
        }

        .detail-content img {
            width: 100% !important;
            max-width: 100% !important;
            height: auto !important;
            border-radius: 6px;
            margin: 16px 0;
            display: block;
        }

        .detail-content p {
            margin: 0 0 16px;
        }

        .detail-content a {
            color: #2980b9;
        }

        .detail-content h2,
        .detail-content h3 {
            color: #1a1a2e;
            margin: 24px 0 12px;
        }

        /* Share */
        .detail-share {
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid #e5e5e5;
            font-size: 13px;
            color: #666;
        }

        /* Sidebar */
        .detail-sidebar {
            position: sticky;
            top: 100px;
        }

        .sidebar-box {
            margin-bottom: 24px;
        }

        .sidebar-box-title {
            font-size: 14px;
            font-weight: 700;
            color: #1a1a2e;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 0 0 16px;
            padding-bottom: 10px;
            border-bottom: 2px solid #2980b9;
        }

        /* Latest list */
        .latest-news-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .latest-news-item {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            text-decoration: none;
            color: inherit;
        }

        .latest-news-item:last-child {
            border-bottom: none;
        }

        .latest-news-item:hover .latest-news-title {
            color: #2980b9;
        }

        .latest-news-title {
            font-size: 13px;
            line-height: 1.45;
            color: #333;
            flex: 1;
            transition: color 0.15s;
        }

        .latest-news-time {
            font-size: 12px;
            color: #2980b9;
            font-weight: 600;
            white-space: nowrap;
            flex-shrink: 0;
        }

        /* See all link */
        .sidebar-see-all {
            display: block;
            margin-top: 12px;
            font-size: 13px;
            color: #2980b9;
            text-decoration: none;
            font-weight: 600;
        }

        .sidebar-see-all:hover {
            text-decoration: underline;
        }

        /* Bottom related section */
        .detail-more {
            padding: 40px 0 60px;
            background: #f9f9f9;
        }

        .detail-more h2 {
            font-size: 28px;
            font-weight: 700;
            color: #2980b9;
            margin: 0 0 28px;
            font-style: italic;
        }

        .more-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .more-card {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .more-card:hover .more-card-title {
            color: #2980b9;
        }

        .more-card-img {
            width: 100%;
            aspect-ratio: 16/10;
            overflow: hidden;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .more-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .more-card-title {
            font-size: 13px;
            line-height: 1.5;
            color: #333;
            font-weight: 500;
            transition: color 0.15s;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .more-card-date {
            font-size: 11px;
            color: #999;
            margin-top: 4px;
        }

        @media (max-width: 1024px) {
            .detail-grid {
                grid-template-columns: 1fr;
            }

            .detail-sidebar {
                position: static;
            }

            .more-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .detail-top {
                padding: 96px 0 16px;
            }

            .detail-title {
                font-size: 26px;
            }

            .more-grid {
                grid-template-columns: 1fr 1fr;
                gap: 14px;
            }
        }
    </style>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content detail-page">
        <section class="detail-top">
            <div class="detail-container">
                <ol class="detail-breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="thong-bao.php">Thông báo</a></li>
                    <li id="breadcrumbTitle">Đang tải...</li>
                </ol>
                <h1 class="detail-title" id="pageTitleMain">Đang tải...</h1>
                <div class="detail-top-date">
                    <span>📅</span>
                    <span id="publishDate"></span>
                </div>
            </div>
        </section>

        <!-- Content -->
        <section class="detail-layout">
            <div class="detail-container detail-grid">
                <!-- Left: Article -->
                <div class="detail-article">
                    <div class="detail-content" id="articleContent">
                        <p style="color:#999;text-align:center;padding:40px 0;">Đang tải nội dung...</p>
                    </div>

                    <div class="detail-share">
                        Chia sẻ:
                    </div>
                </div>

                <!-- Right: Sidebar -->
                <aside class="detail-sidebar">
                    <div class="sidebar-box">
                        <h3 class="sidebar-box-title">Thông báo mới nhất</h3>
                        <div class="latest-news-list" id="latestList">
                            <p style="font-size:13px;color:#999;">Đang tải...</p>
                        </div>
                        <a href="thong-bao.php" class="sidebar-see-all">TẤT CẢ THÔNG BÁO ►</a>
                    </div>
                </aside>
            </div>
        </section>

        <!-- Related bottom -->
        <section class="detail-more" id="moreSection" style="display:none;">
            <div class="detail-container">
                <h2>Thông báo khác</h2>
                <div class="more-grid" id="moreGrid"></div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer-dangkytuvan.php'; ?>

    <script src="olympia/js/bootstrap.min.js"></script>
    <script src="olympia/js/jquery.toast.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script src="olympia/js/contact.js"></script>
    <script src="olympia/js/custom.js"></script>

    <script>
        (function() {
            var params = new URLSearchParams(window.location.search);
            var slug = params.get('slug');
            if (!slug) {
                document.getElementById('pageTitleMain').textContent = 'Không tìm thấy thông báo';
                document.getElementById('articleContent').innerHTML =
                    '<p style="text-align:center;color:#999;">Thông báo không tồn tại hoặc đã bị xóa.</p>';
                return;
            }

            function escHtml(str) {
                var d = document.createElement('div');
                d.textContent = str || '';
                return d.innerHTML;
            }

            function formatDate(dateStr) {
                var d = new Date(dateStr);
                var day = String(d.getDate()).padStart(2, '0');
                var month = String(d.getMonth() + 1).padStart(2, '0');
                var year = d.getFullYear();
                return day + '/' + month + '/' + year;
            }

            function formatTime(dateStr) {
                var d = new Date(dateStr);
                var h = String(d.getHours()).padStart(2, '0');
                var m = String(d.getMinutes()).padStart(2, '0');
                return h + ':' + m;
            }

            function normalizeTitle(text) {
                return String(text || '')
                    .toLowerCase()
                    .replace(/[^a-z0-9\u00C0-\u024F\u1E00-\u1EFF\s]/g, ' ')
                    .replace(/\s+/g, ' ')
                    .trim();
            }

            function removeDuplicateContentHeading(pageTitle) {
                var contentEl = document.getElementById('articleContent');
                var firstHeading = contentEl.querySelector('h1, h2, h3');
                if (!firstHeading) return;

                var headingText = normalizeTitle(firstHeading.textContent);
                var titleText = normalizeTitle(pageTitle);
                if (!headingText || !titleText) return;

                if (headingText === titleText || headingText.indexOf(titleText) === 0 || titleText.indexOf(headingText) === 0) {
                    firstHeading.remove();
                }
            }

            // Load article
            $.getJSON('api/notifications-public.php?slug=' + encodeURIComponent(slug), function(res) {
                if (!res.success || !res.data) {
                    document.getElementById('pageTitleMain').textContent = 'Không tìm thấy thông báo';
                    document.getElementById('articleContent').innerHTML =
                        '<p style="text-align:center;color:#999;">Thông báo không tồn tại hoặc đã bị xóa.</p>';
                    return;
                }
                var a = res.data;
                document.title = a.title + ' - Meyschool Đoàn Thị Điểm';
                document.getElementById('pageTitle').textContent = a.title + ' - Meyschool Đoàn Thị Điểm';
                document.getElementById('pageTitleMain').textContent = a.title;
                document.getElementById('breadcrumbTitle').textContent = a.title;
                document.getElementById('publishDate').textContent = formatDate(a.created_at);
                document.getElementById('articleContent').innerHTML = a.content || '<p>Chưa có nội dung.</p>';
                removeDuplicateContentHeading(a.title);
            });

            // Load latest notifications for sidebar
            $.getJSON('api/notifications-public.php?page=1', function(res) {
                if (res.success && res.data && res.data.length) {
                    var html = '';
                    res.data.slice(0, 6).forEach(function(r) {
                        html += '<a class="latest-news-item" href="doc-thong-bao.php?slug=' +
                            encodeURIComponent(r.slug) + '">';
                        html += '<span class="latest-news-title">' + escHtml(r.title) + '</span>';
                        html += '<span class="latest-news-time">' + formatTime(r.created_at) +
                            '</span>';
                        html += '</a>';
                    });
                    document.getElementById('latestList').innerHTML = html;
                }
            });

            // Load more notifications for bottom section
            $.getJSON('api/notifications-public.php?page=1', function(res) {
                if (res.success && res.data && res.data.length > 1) {
                    var items = res.data.filter(function(r) {
                        return r.slug !== slug;
                    }).slice(0, 4);
                    if (items.length) {
                        var html = '';
                        items.forEach(function(r) {
                            var thumb = r.thumbnail || 'assets/img/favicon.png';
                            html += '<a class="more-card" href="doc-thong-bao.php?slug=' +
                                encodeURIComponent(r.slug) + '">';
                            html += '<div class="more-card-img"><img src="' + escHtml(thumb) +
                                '" alt="' + escHtml(r.title) + '"></div>';
                            html += '<p class="more-card-title">' + escHtml(r.title) + '</p>';
                            html += '<p class="more-card-date">' + formatDate(r.created_at) + '</p>';
                            html += '</a>';
                        });
                        document.getElementById('moreGrid').innerHTML = html;
                        document.getElementById('moreSection').style.display = '';
                    }
                }
            });
        })();
    </script>
</body>

</html>