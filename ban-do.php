<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Bản đồ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Bản đồ">
    <meta property="og:description" content="">
    <meta property="og:url" content="ban-do.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Bản đồ">
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
            background-color: #471873;
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
        .map-container {
            margin-top: 40px;
            border-radius: 10px;
            overflow: hidden;
        }
        .map-container iframe {
            width: 100%;
            height: 500px;
            border: none;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content">
        <section class="about__header">
            <div class="standard__header-cover header_cover show-on-scroll" id="english-header-title">
                <div class="standard__header-img header-cover-img">
                    <div class="overlay_mark"></div>
                    <img class="img-cover pc-cover" src="storage/jnp2203-1-1920x1080.jpg" alt="">
                    <img class="img-cover mb-cover" src="storage/jnp2203-1-1180x720.jpg" alt="">
                </div>
                <div class="big-cover-title-box">
                    <ol class="breadcrumb container">
                        <li class="breadcrumb-item white"><a href="index.php" class="white">Trang chủ</a></li>
                        <li class="breadcrumb-item white"><a href="javascript:;" class="white">Liên hệ</a></li>
                        <li class="breadcrumb-item white"><a href="javascript:;" class="white">Bản đồ</a></li>
                    </ol>
                    <h1 class="big__header-title container font-garamond-bold white header-title">Bản đồ</h1>
                </div>
            </div>
        </section>

        <section class="program-content">
            <div class="container" style="padding: 60px 20px;">
                <h2 style="font-size: 32px; color: #471873; margin-bottom: 30px; font-weight: 600;">Bản đồ chỉ đường</h2>
                <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px;">
                    Trường Meyschool Đoàn Thị Điểm tọa lạc tại Khu đô thị Trung Văn, 
                    Nam Từ Liêm, Hà Nội. Vị trí thuận tiện, dễ dàng di chuyển từ 
                    các quận trung tâm của thành phố.
                </p>
                <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px;">
                    Phụ huynh có thể sử dụng bản đồ bên dưới để tìm đường đến trường. 
                    Nhà trường có bãi đỗ xe rộng rãi cho phụ huynh và khách đến tham quan.
                </p>
                <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px;">
                    <strong>Địa chỉ:</strong> Khu đô thị Trung Văn, Nam Từ Liêm, Hà Nội<br>
                    <strong>Hotline:</strong> 0934 525 889
                </p>

                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.296041924963!2d105.79331437582938!3d20.98148598065586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc508fd03ab%3A0x329f2eb08c404f27!2sThe%20Olympia%20Schools!5e0!3m2!1sen!2s!4v1709712345678!5m2!1sen!2s" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div style="margin-top: 30px; text-align: center;">
                    <a href="https://maps.app.goo.gl/ABC123" target="_blank" class="btn-dk" style="margin-right: 15px;">Mở trong Google Maps</a>
                    <a href="lien-he.php" class="btn-dk" style="background-color: #6c757d;">Liên hệ với chúng tôi</a>
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
</body>
</html>
