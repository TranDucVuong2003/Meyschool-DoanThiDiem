<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Thành tích</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Thành tích">
    <meta property="og:description" content="">
    <meta property="og:url" content="thanh-tich.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Thành tích">
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

    .achievements-page {
        background: #fff;
        color: #222;
        padding-top: 120px;
        margin-bottom: 180px;
    }

    .ac-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* Breadcrumb */
    .ac-breadcrumb {
        padding: 20px 0 0;
    }

    .ac-breadcrumb ol {
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

    .ac-breadcrumb ol li+li::before {
        content: '>';
        margin-right: 6px;
        color: #aaa;
    }

    .ac-breadcrumb ol li a {
        color: #888;
        text-decoration: none;
    }

    .ac-breadcrumb ol li a:hover {
        color: #2d6a9f;
    }

    .ac-breadcrumb ol li:last-child {
        color: #555;
    }

    /* Heading */
    .ac-heading {
        padding: 16px 0 28px;
    }

    .ac-heading h1 {
        margin: 0;
        font-family: 'Garamond', 'Times New Roman', serif;
        font-size: 42px;
        font-weight: 700;
        color: #1a1a2e;
        line-height: 1.2;
    }

    /* KPI row */
    .ac-kpis {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        margin-bottom: 32px;
    }

    .ac-kpi {
        flex: 1;
        min-width: 160px;
        background: #f4fbff;
        border: 1px solid rgba(67,155,212,0.18);
        border-radius: 14px;
        padding: 18px 20px;
    }

    .ac-kpi strong {
        display: block;
        font-size: 30px;
        font-family: 'Garamond', serif;
        color: #2d7bb1;
        line-height: 1;
        margin-bottom: 6px;
    }

    .ac-kpi span {
        font-size: 13px;
        color: #4b6f8c;
        line-height: 1.5;
    }

    /* Filter tabs */
    .ac-tabs {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-bottom: 32px;
        border-bottom: 1px solid #e5e5e5;
        padding-bottom: 0;
    }

    .ac-tab {
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

    .ac-tab:hover {
        color: #2d6a9f;
    }

    .ac-tab.active {
        color: #2d6a9f;
        font-weight: 600;
        border-bottom-color: #2d6a9f;
    }

    /* Grid */
    .ac-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .ac-card {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .ac-card:hover .ac-card-img img {
        transform: scale(1.04);
    }

    .ac-card-img {
        width: 100%;
        aspect-ratio: 4/3;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 12px;
        position: relative;
    }

    .ac-card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .ac-item-year {
        position: absolute;
        top: 10px;
        left: 10px;
        padding: 4px 10px;
        border-radius: 999px;
        background: rgba(45,107,159,0.85);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
    }

    .ac-card-title {
        margin: 0 0 6px;
        font-size: 15px;
        font-weight: 600;
        color: #1a1a2e;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .ac-card-desc {
        margin: 0 0 8px;
        font-size: 13px;
        color: #666;
        line-height: 1.6;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .ac-card-link {
        font-size: 12px;
        font-weight: 700;
        color: #2d6a9f;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    @media (max-width: 1024px) {
        .ac-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .ac-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .ac-heading h1 {
            font-size: 30px;
        }

        .ac-kpis {
            gap: 10px;
        }

        .ac-kpi {
            min-width: 120px;
        }
    }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content achievements-page">
        <div class="ac-container">
            <div class="ac-breadcrumb">
                <ol>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="javascript:;">Tin tức</a></li>
                    <li>Thành tích</li>
                </ol>
            </div>

            <div class="ac-heading">
                <h1>Thành tích nổi bật của Meyschool Đoàn Thị Điểm</h1>
            </div>

            <div class="ac-tabs" id="ac-tabs">
                <button class="ac-tab active" data-year="all">Tất cả</button>
                <button class="ac-tab" data-year="2020-2021">2020 - 2021</button>
                <button class="ac-tab" data-year="2021-2022">2021 - 2022</button>
                <button class="ac-tab" data-year="2022-2023">2022 - 2023</button>
                <button class="ac-tab" data-year="2023-2024">2023 - 2024</button>
            </div>

            <div class="ac-grid" id="ac-grid">
                <p style="grid-column:1/-1;text-align:center;color:#999;padding:40px 0;">Chưa có thành tích nào.</p>
            </div>
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
    AOS.init({
        once: true,
        disable: function() {
            return window.innerWidth < 768;
        }
    });

    (function() {
        var tabs = document.querySelectorAll('#ac-tabs .ac-tab');
        var cards = document.querySelectorAll('#ac-grid .ac-card');

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                tabs.forEach(function(t) { t.classList.remove('active'); });
                tab.classList.add('active');
                var year = tab.getAttribute('data-year');
                cards.forEach(function(card) {
                    if (year === 'all' || card.getAttribute('data-year') === year) {
                        card.style.display = 'block';
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