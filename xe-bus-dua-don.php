<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Xe bus đưa đón</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Xe bus đưa đón">
    <meta property="og:description" content="">
    <meta property="og:url" content="xe-bus-dua-don.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="twitter:title" content="Xe bus đưa đón">
    <meta name="twitter:description" content="">

    <!-- <link media="all" type="text/css" rel="stylesheet" <link href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        rel="stylesheet"> -->
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
    }

    .boarding-wrap {
        background: #f7fbff;
        margin-bottom: 120px;
    }

    .boarding-container {
        max-width: 1260px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .boarding-hero {
        padding: 120px 0 60px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(130deg, rgba(35, 84, 160, 0.94) 0%, rgba(67, 155, 212, 0.9) 60%, rgba(77, 176, 228, 0.84) 100%), url('storage/banner/ve-chung-toi-web.jpg') center/cover no-repeat;
    }

    .boarding-hero::before,
    .boarding-hero::after {
        content: '';
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .boarding-hero::before {
        width: 380px;
        height: 380px;
        right: -140px;
        top: -130px;
        background: rgba(255, 255, 255, 0.18);
    }

    .boarding-hero::after {
        width: 270px;
        height: 270px;
        left: -100px;
        bottom: -120px;
        background: rgba(255, 255, 255, 0.1);
    }

    .boarding-hero-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.2fr) minmax(280px, 0.8fr);
        gap: 28px;
        align-items: center;
    }

    .boarding-hero h1 {
        font-family: 'Garamond', serif;
        font-size: clamp(34px, 4.2vw, 52px);
        margin: 14px 0 16px;
        color: #fff;
        line-height: 1.1;
    }

    .boarding-hero p {
        font-size: 16px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.93);
        max-width: 540px;
        margin: 0;
        text-align: justify;
    }

    .boarding-hero .breadcrumb {
        margin: 0 0 14px;
        background: rgba(255, 255, 255, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.38);
        display: inline-flex;
        flex-wrap: wrap;
        padding: 8px 16px;
        border-radius: 999px;
        position: static !important;
        transform: none !important;
    }

    .boarding-hero .breadcrumb-item a,
    .boarding-hero .breadcrumb-item.active {
        color: #fff;
        font-size: 13px;
    }

    .boarding-highlights {
        margin-top: 18px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .boarding-highlights span {
        display: inline-flex;
        align-items: center;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.18);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        border: 1px solid rgba(255, 255, 255, 0.32);
    }

    .boarding-card {
        background: rgba(255, 255, 255, 0.93);
        border-radius: 22px;
        border: 1px solid rgba(67, 155, 212, 0.16);
        box-shadow: 0 16px 32px rgba(20, 55, 100, 0.26);
        padding: 16px;
    }

    .boarding-card img {
        width: 100%;
        height: 220px;
        border-radius: 16px;
        object-fit: cover;
        display: block;
        margin-bottom: 12px;
    }

    .boarding-metrics {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 10px;
    }

    .boarding-metrics div {
        background: #fff;
        border: 1px solid rgba(67, 155, 212, 0.2);
        border-radius: 12px;
        padding: 10px;
        text-align: center;
    }

    .boarding-metrics b {
        display: block;
        color: #2354a0;
        font-size: 22px;
        margin-bottom: 3px;
    }

    .boarding-metrics span {
        color: #436b8b;
        font-size: 12px;
        line-height: 1.4;
    }

    .boarding-content {
        padding: 40px 0 60px;
    }

    .boarding-content .boarding-text-card {
        background: #fff;
        border-radius: 22px;
        box-shadow: 0 14px 30px rgba(23, 52, 93, .08);
        border: 1px solid rgba(67, 155, 212, .14);
        padding: 36px 40px;
    }

    .boarding-content .boarding-text-card p {
        font-size: 16px;
        line-height: 1.85;
        color: #2c4963;
        margin: 0 0 20px;
        text-align: justify;
    }

    .boarding-content .boarding-text-card p:last-child {
        margin-bottom: 0;
    }

    @media (max-width: 1100px) {
        .boarding-hero-grid {
            grid-template-columns: 1fr;
        }

        .boarding-card {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .boarding-hero {
            padding: 96px 0 44px;
        }
    }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content boarding-wrap">
        <section class="boarding-hero">
            <div class="boarding-container boarding-hero-grid" data-aos="fade-up">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Dịch vụ học đường</a></li>
                        <li class="breadcrumb-item active">Xe đưa đón</li>
                    </ol>
                    <h1>Dịch vụ xe đưa đón</h1>
                    <p>Nhà trường cung cấp dịch vụ xe đưa đón học sinh theo các tuyến cố định, đảm bảo an toàn, thuận
                        tiện và giúp phụ huynh yên tâm trong việc di chuyển hằng ngày của con.</p>
                    <div class="boarding-highlights">
                        <span>Tuyến cố định, đúng giờ</span>
                        <span>Cán bộ phụ trách đi kèm</span>
                        <span>Theo dõi qua ứng dụng</span>
                    </div>
                </div>
                <div class="boarding-card">
                    <img src="storage/banner/ve-chung-toi-web.jpg" alt="Xe đưa đón Meyschool">
                    <div class="boarding-metrics">
                        <div><b>GPS</b><span>Theo dõi lộ trình</span></div>
                        <div><b>100%</b><span>An toàn tối đa</span></div>
                        <div><b>2 ca</b><span>Đưa & Đón mỗi ngày</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="boarding-content">
            <div class="boarding-container">
                <div class="boarding-text-card" data-aos="fade-up">
                    <p>Nhà trường cung cấp dịch vụ xe đưa đón học sinh theo các tuyến cố định, đảm bảo an toàn, thuận
                        tiện và giúp phụ huynh yên tâm trong việc di chuyển hằng ngày của con.</p>
                    <p>Mỗi xe đều có cán bộ phụ trách đi kèm để hỗ trợ, chăm sóc và quản lý học sinh trong suốt hành
                        trình. Lộ trình di chuyển được theo dõi liên tục thông qua ứng dụng quản lý, giúp phụ huynh dễ
                        dàng cập nhật thời gian và vị trí xe.</p>
                    <p>Dịch vụ được tổ chức khoa học, đúng giờ, đảm bảo an toàn tối đa, đồng thời hình thành cho học
                        sinh thói quen sinh hoạt nề nếp, chủ động và kỷ luật.</p>
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