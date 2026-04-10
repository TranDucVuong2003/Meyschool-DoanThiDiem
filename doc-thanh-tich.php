<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title id="pageTitle">Chi tiết thành tích</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Meyschool Đoàn Thị Điểm">
    <meta property="og:type" content="article">

    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
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
            padding: 120px 0 20px;
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
            max-width: 760px;
            color: #1a1a2e;
        }

        .detail-top-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px 14px;
            font-size: 13px;
            color: #58758d;
        }

        .detail-top-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 10px;
            border: 1px solid #d7e3ee;
            border-radius: 999px;
            background: #f3f8fc;
            font-weight: 600;
            color: #2f5f86;
        }

        .detail-layout {
            padding: 40px 0 60px;
        }

        .detail-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 320px;
            gap: 40px;
            align-items: start;
            overflow: hidden;
        }

        .detail-article {
            min-width: 0;
            max-width: 100%;
            overflow: hidden;
            box-sizing: border-box;
        }

        .detail-summary-box {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
            margin-bottom: 22px;
        }

        .detail-summary-item {
            border: 1px solid #e6edf3;
            border-radius: 10px;
            background: #f8fcff;
            padding: 10px 12px;
        }

        .detail-summary-item b {
            display: block;
            font-size: 12px;
            color: #2d6a9f;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            margin-bottom: 4px;
        }

        .detail-summary-item span {
            color: #2f3e4d;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 600;
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

        .detail-tags {
            margin-top: 22px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .detail-tag {
            display: inline-block;
            padding: 6px 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 12px;
            color: #555;
            text-decoration: none;
            background: #f9f9f9;
        }

        .detail-tag:hover {
            background: #eee;
        }

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

        .latest-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .latest-item {
            display: block;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            text-decoration: none;
        }

        .latest-item:last-child {
            border-bottom: none;
        }

        .latest-item:hover .latest-title {
            color: #2980b9;
        }

        .latest-title {
            display: block;
            font-size: 13px;
            line-height: 1.45;
            color: #333;
            transition: color 0.15s;
            margin-bottom: 4px;
        }

        .latest-meta {
            font-size: 12px;
            color: #2d6a9f;
            font-weight: 600;
        }

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

        .more-card-meta {
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

        @media (max-width: 640px) {
            .detail-top {
                padding: 100px 0 16px;
            }

            .detail-title {
                font-size: 26px;
            }

            .detail-summary-box {
                grid-template-columns: 1fr;
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
                    <li><a href="thanh-tich.php">Thành tích</a></li>
                    <li id="breadcrumbTitle">Đang tải...</li>
                </ol>
                <h1 class="detail-title" id="pageTitleMain">Đang tải...</h1>
                <div class="detail-top-meta" id="topMeta">
                    <span class="detail-top-badge" id="topYear" style="display:none;"></span>
                    <span class="detail-top-badge" id="topAward" style="display:none;"></span>
                    <span class="detail-top-badge" id="topDate">📅 Đang tải...</span>
                </div>
            </div>
        </section>

        <section class="detail-layout">
            <div class="detail-container detail-grid">
                <div class="detail-article">
                    <div class="detail-summary-box" id="summaryBox" style="display:none;">
                        <div class="detail-summary-item" id="summaryAward" style="display:none;">
                            <b>Giải thưởng</b>
                            <span></span>
                        </div>
                        <div class="detail-summary-item" id="summaryStudent" style="display:none;">
                            <b>Học sinh</b>
                            <span></span>
                        </div>
                    </div>

                    <div class="detail-content" id="articleContent">
                        <p style="color:#999;text-align:center;padding:40px 0;">Đang tải nội dung...</p>
                    </div>

                    <div class="detail-tags" id="articleTags"></div>
                </div>

                <aside class="detail-sidebar">
                    <div class="sidebar-box">
                        <h3 class="sidebar-box-title">Thành tích mới nhất</h3>
                        <div class="latest-list" id="latestList">
                            <p style="font-size:13px;color:#999;">Đang tải...</p>
                        </div>
                        <a href="thanh-tich.php" class="sidebar-see-all">TẤT CẢ THÀNH TÍCH ►</a>
                    </div>
                </aside>
            </div>
        </section>

        <section class="detail-more" id="moreSection" style="display:none;">
            <div class="detail-container">
                <h2>Thành tích khác</h2>
                <div class="more-grid" id="moreGrid"></div>
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
        (function() {
            var params = new URLSearchParams(window.location.search);
            var slug = params.get('slug');
            if (!slug) {
                document.getElementById('pageTitleMain').textContent = 'Không tìm thấy thành tích';
                document.getElementById('breadcrumbTitle').textContent = 'Không tìm thấy';
                document.getElementById('articleContent').innerHTML = '<p style="text-align:center;color:#999;">Thành tích không tồn tại hoặc đã bị xóa.</p>';
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

            function buildTopBadges(a) {
                if (a.year) {
                    var y = document.getElementById('topYear');
                    y.textContent = 'Năm ' + a.year;
                    y.style.display = 'inline-flex';
                }
                if (a.award_level) {
                    var aw = document.getElementById('topAward');
                    aw.textContent = '🏆 ' + a.award_level;
                    aw.style.display = 'inline-flex';
                }
                document.getElementById('topDate').textContent = '📅 ' + formatDate(a.created_at);
            }

            function buildSummary(a) {
                var hasSummary = false;
                if (a.award_level) {
                    var sAward = document.querySelector('#summaryAward span');
                    sAward.textContent = a.award_level;
                    document.getElementById('summaryAward').style.display = 'block';
                    hasSummary = true;
                }
                if (a.student_name) {
                    var sStudent = document.querySelector('#summaryStudent span');
                    sStudent.textContent = a.student_name;
                    document.getElementById('summaryStudent').style.display = 'block';
                    hasSummary = true;
                }
                if (hasSummary) {
                    document.getElementById('summaryBox').style.display = 'grid';
                }
            }

            $.getJSON('api/achievements-public.php?slug=' + encodeURIComponent(slug), function(res) {
                if (!res.success || !res.data) {
                    document.getElementById('pageTitleMain').textContent = 'Không tìm thấy thành tích';
                    document.getElementById('breadcrumbTitle').textContent = 'Không tìm thấy';
                    document.getElementById('articleContent').innerHTML = '<p style="text-align:center;color:#999;">Thành tích không tồn tại hoặc đã bị xóa.</p>';
                    return;
                }

                var a = res.data;
                var contentHtml = a.content || '';
                if (!contentHtml && a.excerpt) {
                    contentHtml = '<p>' + escHtml(a.excerpt) + '</p>';
                }
                if (!contentHtml) {
                    contentHtml = '<p>Chưa có nội dung chi tiết.</p>';
                }

                document.title = (a.title || 'Chi tiết thành tích') + ' - Meyschool Đoàn Thị Điểm';
                document.getElementById('pageTitle').textContent = document.title;
                document.getElementById('pageTitleMain').textContent = a.title || 'Chi tiết thành tích';
                document.getElementById('breadcrumbTitle').textContent = a.title || 'Chi tiết thành tích';
                document.getElementById('articleContent').innerHTML = contentHtml;

                buildTopBadges(a);
                buildSummary(a);

                var tags = [];
                if (a.year) {
                    tags.push('<a class="detail-tag" href="thanh-tich.php?year=' + encodeURIComponent(a.year) + '">Năm ' + escHtml(String(a.year)) + '</a>');
                }
                if (a.award_level) {
                    tags.push('<a class="detail-tag" href="thanh-tich.php">' + escHtml(a.award_level) + '</a>');
                }
                if (a.student_name) {
                    tags.push('<a class="detail-tag" href="thanh-tich.php">' + escHtml(a.student_name) + '</a>');
                }
                document.getElementById('articleTags').innerHTML = tags.join('');
            });

            $.getJSON('api/achievements-public.php?page=1', function(res) {
                if (res.success && res.data && res.data.length) {
                    var listHtml = '';
                    res.data.slice(0, 6).forEach(function(item) {
                        listHtml += '<a class="latest-item" href="doc-thanh-tich.php?slug=' + encodeURIComponent(item.slug) + '">';
                        listHtml += '<span class="latest-title">' + escHtml(item.title) + '</span>';
                        listHtml += '<span class="latest-meta">' + (item.year ? ('Năm ' + escHtml(String(item.year))) : 'Meyschool Đoàn Thị Điểm') + '</span>';
                        listHtml += '</a>';
                    });
                    document.getElementById('latestList').innerHTML = listHtml;
                }
            });

            $.getJSON('api/achievements-public.php?page=1', function(res) {
                if (res.success && res.data && res.data.length > 1) {
                    var items = res.data.filter(function(r) {
                        return r.slug !== slug;
                    }).slice(0, 4);

                    if (items.length) {
                        var html = '';
                        items.forEach(function(r) {
                            var thumb = r.thumbnail || 'assets/img/favicon.png';
                            html += '<a class="more-card" href="doc-thanh-tich.php?slug=' + encodeURIComponent(r.slug) + '">';
                            html += '<div class="more-card-img"><img src="' + escHtml(thumb) + '" alt="' + escHtml(r.title) + '"></div>';
                            html += '<p class="more-card-title">' + escHtml(r.title) + '</p>';
                            html += '<p class="more-card-meta">' + (r.award_level ? ('🏆 ' + escHtml(r.award_level)) : (r.year ? ('Năm ' + escHtml(String(r.year))) : 'Thành tích')) + '</p>';
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