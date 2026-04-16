<!DOCTYPE html>
<html lang="vi">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />


    <link rel="icon" type="image/png" href="assets/img/favicon.png?v=20260320-1">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png?v=20260320-1">
    <link rel="apple-touch-icon" href="assets/img/favicon.png?v=20260320-1">

    <title>Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Meyschool Đoàn Thị Điểm">
    <meta property="og:title" content="Trang chủ">
    <meta property="og:description" content="">
    <meta property="og:url" content="trang-chu.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="assets/img/favicon.png?v=20260320-1">
    <meta name="twitter:title" content="Trang chủ">
    <meta name="twitter:description" content="">

    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">




    <link rel="alternate" href="en.html" hreflang="en" />
    <link rel="alternate" href="index.html" hreflang="vi" />


    <link href="../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="olympia/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="olympia/css/reset.css">
    <link rel="stylesheet" href="olympia/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="olympia/css/fonts.css">
    <link rel="stylesheet" href="olympia/css/style.css">
    <link rel="stylesheet" href="olympia/css/styles-new.css">

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
        /* position: relative; */
    }

    /* Offset fixed header so it doesn't cover homepage banner */
    .body-content {
        padding-top: 70px !important;
    }

    #pc_slider_cover,
    #mb_slider_cover {
        margin-top: 0 !important;
    }

    .slider-item {
        position: relative;
    }

    .slider-title-box {
        position: absolute !important;
        top: auto !important;
        bottom: 24px !important;
        right: 20px !important;
        left: auto !important;
        width: auto !important;
        opacity: 1 !important;
        transform: none !important;
        z-index: 20;
    }

    .banner-cta {
        display: inline-flex;
        align-items: stretch;
        background: #1f4b8f;
        border-radius: 0;
        overflow: hidden;
        box-shadow: 0 18px 36px rgba(0, 0, 0, 0.28);
        height: 100px;
        margin-top: 0;
    }

    .banner-cta a {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 18px 26px;
        min-width: 210px;
        flex: 0 0 auto;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.9px;
        text-decoration: none;
        white-space: nowrap;
        background: transparent;
        color: #fff;
        border-right: 1px solid rgba(255, 255, 255, 0.25);
    }

    .banner-cta a:last-child {
        border-right: none;
    }

    .banner-cta a::after {
        content: '›';
        font-size: 18px;
        line-height: 1;
        color: #f6c343;
    }

    @media (max-width: 768px) {
        .body-content {
            padding-top: 70px !important;
        }

        /* Ẩn CTA trên banner khi ở mobile */
        .slider-title-box,
        .banner-cta,
        .banner-cta-fixed {
            display: none !important;
        }

        /* Mũi tên slider mobile */
        #mb_slider_cover .slick-prev,
        #mb_slider_cover .slick-next {
            display: flex !important;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 50%;
            z-index: 10;
            font-size: 16px;
            color: #1f5f8e;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
        }

        #mb_slider_cover .slick-prev {
            left: 10px;
        }

        #mb_slider_cover .slick-next {
            right: 10px;
        }

        #mb_slider_cover .slick-prev:before,
        #mb_slider_cover .slick-next:before {
            display: none;
        }

        /* Hiển thị section Hiểu rõ hơn về trường học trên mobile */
        #principal-welcome .principal-message {
            opacity: 1 !important;
            transform: none !important;
        }

        #principal-welcome .container-fluid {
            padding: 0 15px !important;
        }

        #principal-welcome h2 {
            font-size: 28px !important;
        }
    }

    /* Hiệu ứng fade-in cho Lời chào Hiệu trưởng */
    .principal-image {
        opacity: 0;
        transform: translateY(5em);
        transition: all 0.8s ease-in-out;
    }

    .principal-message {
        opacity: 0;
        transform: translateY(5em);
        transition: all 0.8s ease-in-out 0.2s;
    }

    .is-visible .principal-image,
    .is-visible .principal-message {
        opacity: 1;
        transform: none;
    }
    </style>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5SS24C7N');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GDK27ZMYYW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GDK27ZMYYW');
    </script>
    <meta property="fb:admins" content="100003174617936" />
    <meta property="fb:admins" content="100000009019012" />
    <script type="text/javascript"
        src="../platform-api.sharethis.com/js/sharethis.js#property=65b715d1dce46a00126a9bb7&product=inline-share-buttons&source=platform"
        async="async"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SS24C7N" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '1759201507895169',
            xfbml: true,
            version: 'v19.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "../connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content">

        <!-- Section: Banner/Slider Mobile - Fixed CTA -->
        <section class="mobile slider show-on-scroll home-page" data-sizes="50vw" id="mb_slider_cover">
            <a href="./index.php" class="slider-item" title="">
                <img src="assets/img/banner/banner1.jpeg" alt="">
            </a>
            <a href="./index.php" class="slider-item" title="">
                <img src="assets/img/banner/banner2.jpeg" alt="">
            </a>
            <a href="./index.php" class="slider-item" title="">
                <img src="assets/img/banner/banner3.jpeg" alt="">
            </a>
        </section>

        <!-- Fixed CTA Buttons (outside slider) -->
        <div class="mobile banner-cta-fixed">
            <a class="primary" href="dang-ky-tu-van.php">Đăng ký tuyển sinh</a>
            <a class="secondary" href="dang-ky-tham-quan.php">Đăng ký tham quan</a>
            <a class="secondary" href="hoc-bong-2026-2027.php">Đăng ký ngày học trải nghiệm</a>
        </div>

        <!-- Section: Banner/Slider PC -->
        <section class="pc slider show-on-scroll home-page" data-sizes="50vw" id="pc_slider_cover">
            <div class="slider-item">
                <a href="./index.php" title="">
                    <img src="assets/img/banner/banner1.jpeg" alt="">
                </a>
                <div class="slider-title-box" style="opacity:1;transform:none;">
                    <div class="banner-cta">
                        <a class="primary" href="dang-ky-tu-van.php">Đăng ký tư vấn</a>
                        <a class="secondary" href="dang-ky-tham-quan.php">Đăng ký tham quan</a>
                        <a class="secondary" href="hoc-bong-2026-2027.php">Đăng ký học bổng</a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <a href="./index.php" title="">
                    <img src="assets/img/banner/banner2.jpeg" alt="">
                </a>
                <div class="slider-title-box">
                    <div class="banner-cta">
                        <a class="primary" href="dang-ky-tu-van.php">Đăng ký tư vấn</a>
                        <a class="secondary" href="dang-ky-tham-quan.php">Đăng ký tham quan</a>
                        <a class="secondary" href="hoc-bong-2026-2027.php">Đăng ký học bổng</a>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <a href="./index.php" title="">
                    <img src="assets/img/banner/banner3.jpeg" alt="">
                </a>
                <div class="slider-title-box">
                    <div class="banner-cta">
                        <a class="primary" href="dang-ky-tu-van.php">Đăng ký tư vấn</a>
                        <a class="secondary" href="dang-ky-tham-quan.php">Đăng ký tham quan</a>
                        <a class="secondary" href="hoc-bong-2026-2027.php">Đăng ký học bổng</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero Action Buttons -->
        <!-- <div class="hero-actions-bar">
            <a href="dang-ky-tu-van.php" class="hero-action-btn">
                <span class="label-1">Đăng ký</span>
                <span class="label-2">Tuyển sinh</span>
                <span class="arrow">›</span>
            </a>
            <a href="#" class="hero-action-btn" onclick="alert('Vui lòng gọi hotline 0934 525 889 để đặt lịch tham quan'); return false;">
                <span class="label-1">Đăng ký</span>
                <span class="label-2">Tham quan</span>
                <span class="arrow">›</span>
            </a>
            <a href="#" class="hero-action-btn" onclick="alert('Vui lòng gọi hotline 0934 525 889 để đăng ký ngày học trải nghiệm'); return false;">
                <span class="label-1">Đăng ký</span>
                <span class="label-2">Ngày học trải nghiệm</span>
                <span class="arrow">›</span>
            </a>
        </div> -->

        <!-- Section: Clip giới thiệu về trường -->
        <section id="principal-welcome" class="show-on-scroll home-page">
            <div class="container-fluid" style="padding: 0 40px;">
                <div class="principal-welcome-wrapper" style="padding: 20px 0 60px  0;">
                    <div class="principal-message text-center" style="max-width: 1400px; margin: 0 auto; width: 100%;">
                        <h2 class="font-garamond-bold color-471873" style="font-size: 42px; margin-bottom: 30px;">
                            Hiểu rõ hơn về trường học
                        </h2>
                        <div
                            style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 16px; box-shadow: 0 10px 30px rgba(71, 24, 115, 0.2);">
                            <iframe src="https://drive.google.com/file/d/15ooKZnmIPhTUymJR2lkzK9euVjBJQTs0/preview"
                                title="Clip giới thiệu về trường Meyschool" allow="autoplay"
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Mayschool qua những con số -->
        <div class="container text-center olympia-number-box home-index"
            style="display: flex; justify-content: space-between; max-width: 1200px;">
            <div class="olympia-number-left olympia-number-left-pc text-left show-on-scroll home-page"
                id="olympia-number" style="width: 48%; margin-right: 0;">
                <h1 class="olympia-number-title font-garamond-bold color-21"
                    style="margin-bottom: 20px; text-align: justify; text-align-last: justify; font-size: 30.5px; line-height: 1.5; font-weight: bold; width: 100%;">
                    Trường Tiểu học & THCS<br>Meyschool Đoàn Thị Điểm</h1>

                <p class="olympia-number-content font-avenir-regular size-14 color-3a" style="text-align: justify;">
                    Meyschool Đoàn Thị Điểm là sự kết
                    tinh của hợp tác chiến lược giữa Meygroup và Hệ thống Giáo dục Đoàn Thị Điểm Hà Nội - ngôi trường từ
                    thực tiễn đào tạo hàng nghìn học sinh học tại Anh bằng chương trình quốc tế.
                    Kế thừa nền tảng truyền thống và triết lý giáo dục nhân văn của Đoàn Thị Điểm, nhà trường đề cao kỷ
                    cương - chất lượng - sáng tạo, hướng tới mục tiêu đào tạo những thế hệ học sinh không chỉ vững vàng
                    về tri thức mà còn giàu bản lĩnh, kỹ năng và tinh thần trách nhiệm với cộng đồng, sẵn sàng hội nhập
                    và phát triển trong tương lai.
                </p>

                <ul class="olym-index_list">
                    <li><span>1</span>Trường Tiểu học Đoàn Thị Điểm Hà Nội là trường đầu tiên được phong tặng danh
                        hiệu Anh hùng Lao động thời kỳ đổi mới vào ngày 27/12/2025
                    </li>
                    <!-- <li><span>1</span>Trường song ngữ đầu tiên tại Việt Nam trở thành IB World School</li> -->
                </ul>
            </div>
            <div class="olympia-number-right pc-device show-on-scroll" style="width: 50%; margin-left: 0;">
                <div class="number-item text-right">
                    <div class="olympia-number-block-img number-img1 ">
                        <img src="assets/img/co-so-vat-chat/thư viện.jpg" alt="">
                    </div>
                    <div class="olympia-number-block-img number-img2">
                        <div class="flex-center-center number-blck number-blck-t"
                            style="width: 160px; background-color: #314d9b;">
                            <div class="number-cnt text-center">

                                <span>Cơ sở vật chất hiện đại</span>
                                <p>Chương trình leader in me bản quyền</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="number-item text-left">
                    <div class="olympia-number-block-img number-img3">
                        <img src="assets/img/co-so-vat-chat/phòng học.JPG" alt="">
                    </div>
                    <div class="olympia-number-block-img number-img4">
                        <div class="flex-center-center number-blck number-blck-v" style="background-color: #00a0e4;">
                            <div class="number-cnt text-center" style="color: #471873;">
                                <span style="color: #471873;">30</span>
                                <p>năm phát triển giáo dục tại Thủ đô Hà Nội</p>
                            </div>
                        </div>
                    </div>
                    <div class="olympia-number-block-img number-img5">
                        <img src="assets/img/co-so-vat-chat/sân bóng rổ.jpg" alt="">
                    </div>
                </div>
                <div class="number-item text-left">
                    <div class="olympia-number-block-img number-img7">
                        <div class="flex-center-center number-blck number-blck-t" style="background-color: #314d9b;">
                            <div class="number-cnt text-center">
                                <span>2</span>
                                <p>Cấp học</p>
                            </div>
                        </div>
                    </div>
                    <div class="olympia-number-block-img number-img8">
                        <img src="assets/img/co-so-vat-chat/phòng nhạc.jpg" alt="">
                    </div>
                    <div class="olympia-number-block-img number-img9">
                        <div class="flex-center-center number-blck number-blck-t"
                            style="width: 190px; background-color: #314d9b;">
                            <div class="number-cnt text-center">
                                <span style="display: inline-flex">100<sup
                                        style="font-size: 30px; margin-top: 5px">%</sup></span>
                                <p>Giáo viên được đào tạo tại <br> Đại học Sư Phạm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="olympia-number-right mobile-device show-on-scroll">
                <h3 class="olympia-number-title font-garamond-bold color-21">Meyschool qua những con số</h3>
                <p class="olympia-number-content font-avenir-regular size-14 color-3a">Không chỉ đi tiên phong trong xây
                    dựng và đổi mới chương trình giáo dục theo định hướng phát triển năng lực tại Việt Nam, trường
                    Meyschool tự hào là đơn vị dẫn đầu trong tiếp cận và vận dụng các nội dung và phương pháp giáo dục
                    hiện đại của thế giới để học sinh Meyschool tự tin bước ra thế giới với tri thức, kĩ năng, phẩm chất
                    và năng lực của những công dân thế kỷ 21.</p>
                <a class="link-button font-avenir-demibold  color-471873 text-uppercase" href="page/ve-chung-toi.html"
                    title="" target="_blank">về chúng tôi</a>
                <div class="mobile-item mobile-item-top">
                    <div class="mobile-item-top-left text-right">
                        <div class="mobile-item-img mobile-item-img1">
                            <img src="assets/img/co-so-vat-chat/phòng học.JPG" alt="" class="mobile1">
                        </div>
                        <div class="mobile-item-img mobile-item-img2">
                            <div class="flex-center-center number-blck number-blck-v">
                                <div class="number-cnt text-center">
                                    <span>100</span>
                                    <p>100% giáo viên có trình độ Thạc sĩ - Tiến sĩ</p>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-item-img mobile-item-img3">
                            <img src="assets/img/co-so-vat-chat/sân bóng rổ.jpg" alt="" class="mobile10">
                        </div>
                    </div>
                    <div class="mobile-item-top-right text-left">
                        <div class="mobile-item-img mobile-item-img4">
                            <div class="flex-center-center number-blck number-blck-t">
                                <div class="number-cnt text-center">
                                    <span>7.0</span>
                                    <p>Điểm IELTS trung bình của học sinh lớp 12 khi tốt nghiệp</p>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-item-img mobile-item-img5">
                            <img src="olympia/images/mobile5.jpg" alt="" class="mobile5">
                        </div>
                    </div>
                </div>
                <div class="mobile-item mobile-item-bottom">
                    <div class="mobile-item-top-left text-right">
                        <div class="mobile-item-img mobile-item-img6">
                            <div class="flex-center-center number-blck number-blck-t"
                                style="background-color: #314d9b;">
                                <div class="number-cnt text-center">
                                    <span>2</span>
                                    <p>Cấp học</p>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-item-img mobile-item-img7">
                            <img src="olympia/images/mobile3.jpg" alt="" class="mobile3">
                        </div>
                    </div>
                    <div class="mobile-item-top-right text-left">
                        <div class="mobile-item-img mobile-item-img8">
                            <div class="flex-center-center number-blck number-blck-v">
                                <div class="number-cnt text-center">
                                    <span>20</span>
                                    <p>Cơ sở vật chất hiện đại</p>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-item-img mobile-item-img9">
                            <div class="flex-center-center number-blck number-blck-t"
                                style="background-color: #314d9b;">
                                <div class="number-cnt text-center">
                                    <span>100%</span>
                                    <p>100% giáo viên được đào tạo tại <br> đại học sư phạm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: 2 cấp đào tạo -->
        <section id="olympia-level-training" class="show-on-scroll home-page" style="position: relative; z-index: 1;">
            <div class="olympia-level-training">
                <div class="olympia-level-left olympia-level-left-pc text-left">
                    <div class="olympia-level level-2 bg-F1CC1F" style="opacity: 0; background-color: #00a0e4;">
                        <h6><a href="chuong-trinh-tieu-hoc-olympia.html" class="white">Tiểu học (lớp 1 - 4)</a></h6>
                        <div class="level-img-box">
                            <a href="chuong-trinh-tieu-hoc-olympia.html" title="">
                                <img src="assets/img/chuong-trinh-dao-tao/TUN06677.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="olympia-level level-3" style="opacity: 0; background-color: #314d9b;">
                        <h6><a href="chuong-trinh-trung-hoc-co-so-olympia.html" class="white">Trung học cơ sở (lớp 5 -
                                8)</a></h6>
                        <div class="level-img-box">
                            <a href="chuong-trinh-trung-hoc-co-so-olympia.html" title="">
                                <img src="assets/img/chuong-trinh-dao-tao/TUN09634.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="olympia-level-right olympia-level-right-pc text-left"
                    style="opacity: 0; padding-bottom: 100px;">
                    <h3 class="olympia-number-title font-garamond-bold color-471873">2 cấp đào tạo tại <br> Meyschool
                        Schools</h3>
                    <p class="olympia-level-content font-avenir-regular">Gia nhập cộng đồng Meyschool để trải nghiệm môi
                        trường học tập thân thiện, tích cực, hiện đại bậc nhất và cùng kiến tạo những giá trị tốt đẹp
                        cho bản thân và cộng đồng</p>
                    <a href="lo-trinh-hoc-tap.html" title="" class="link-button-bg white bg-471873 ltht-btn"
                        style="margin-bottom: 20px;">Khám phá lộ
                        trình học<img class="white" src="olympia/images/button-1-3.svg" alt="">
                    </a>
                </div>
            </div>
        </section>
        <!-- Section: Hoạt động tại Olympia (Tin tức + Sự kiện) -->
        <section id="olympia-event" class="bg-471873"
            style="background-color: #314d9b; position: relative; z-index: 2;">
            <div class="olympia-event">
                <!-- <h2 class="color-f font-garamond-bold">Hoạt động tại Meyschool</h2> -->

                <!-- <div class="flex-center-between mgb-30">
                    <div class="olympia-event-entry-title font-24 text-underline font-weight-bold mgb-0">Tin tức</div>
                    <a href="tin-tuc.php" title="" class="link-button righthover color-f">Tất cả tin tức
                        <img class="white" src="olympia/images/button-1-3.svg" alt=""></a>
                </div>

                <div class="olym_news mgb-30">
                    <div class="row" id="home-news-row">
                        <div class="col-md-12" style="text-align:center;color:rgba(255,255,255,0.6);padding:40px 0;">
                            Đang tải...</div>
                    </div>
                </div>

                <div class="olym_events mgb-30">
                    <div class="row" id="home-news-row-2"></div>
                </div> -->

                <section class="ts-news-section" style="padding:20px 0 10px; margin-bottom: 10px;">
                    <div class="flex-center-between mgb-30">
                        <div class="olympia-event-entry-title font-24 text-underline font-weight-bold mgb-0">Tin tức
                        </div>
                        <!-- <a href="tin-tuc.php" title="" class="link-button righthover color-f">Tất cả tin tức -->
                        <!-- <img class="white" src="olympia/images/button-1-3.svg" alt=""></a> -->
                    </div>

                    <div class="ts-news-slider">
                        <div class="ts-news-card">
                            <a href="https://hanoimoi.vn/truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-731567.html"
                                target="_blank" rel="noopener" style="display:block;">
                                <img src="assets/img/tin-tuc/ede751688b0805565c19.jpg"
                                    alt="Trường TH Đoàn Thị Điểm Hà Nội đón nhận danh hiệu Anh hùng Lao động">
                            </a>
                            <div class="ts-news-card-body">
                                <h3><a href="https://hanoimoi.vn/truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-731567.html"
                                        target="_blank" rel="noopener">Trường TH Đoàn Thị Điểm - Hà Nội đón nhận danh
                                        hiệu Anh hùng Lao động</a></h3>
                                <a href="https://hanoimoi.vn/truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-731567.html"
                                    target="_blank" rel="noopener" class="ts-news-link">Xem thêm <span>→</span></a>
                            </div>
                        </div>
                        <div class="ts-news-card">
                            <a href="https://giaoduc.net.vn/30-nam-tien-phong-doi-moi-truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-post257603.gd"
                                target="_blank" rel="noopener" style="display:block;">
                                <img src="assets/img/tin-tuc/images.jpg"
                                    alt="30 năm tiên phong đổi mới Trường TH Đoàn Thị Điểm">
                            </a>
                            <div class="ts-news-card-body">
                                <h3><a href="https://giaoduc.net.vn/30-nam-tien-phong-doi-moi-truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-post257603.gd"
                                        target="_blank" rel="noopener">30 năm tiên phong đổi mới, Trường TH Đoàn Thị
                                        Điểm - Hà Nội đón nhận danh hiệu Anh hùng Lao động</a></h3>
                                <a href="https://giaoduc.net.vn/30-nam-tien-phong-doi-moi-truong-th-doan-thi-diem-ha-noi-don-nhan-danh-hieu-anh-hung-lao-dong-post257603.gd"
                                    target="_blank" rel="noopener" class="ts-news-link">Xem thêm <span>→</span></a>
                            </div>
                        </div>
                        <div class="ts-news-card">
                            <a href="https://nhandan.vn/anh-ngoi-truong-tieu-hoc-anh-hung-lao-dong-o-thu-do-ha-noi-post933413.html"
                                target="_blank" rel="noopener" style="display:block;">
                                <img src="assets/img/tin-tuc/z7369054786972-1a0cb760778270bac2703d36eb1c4ce3.jpg"
                                    alt="Ngôi trường tiểu học Anh hùng Lao động ở thủ đô Hà Nội">
                            </a>
                            <div class="ts-news-card-body">
                                <h3><a href="https://nhandan.vn/anh-ngoi-truong-tieu-hoc-anh-hung-lao-dong-o-thu-do-ha-noi-post933413.html"
                                        target="_blank" rel="noopener">Ngôi trường tiểu học "Anh hùng Lao động" ở thủ đô
                                        Hà Nội</a></h3>
                                <a href="https://nhandan.vn/anh-ngoi-truong-tieu-hoc-anh-hung-lao-dong-o-thu-do-ha-noi-post933413.html"
                                    target="_blank" rel="noopener" class="ts-news-link">Xem thêm <span>→</span></a>
                            </div>
                        </div>
                        <div class="ts-news-card">
                            <a href="#" style="display:block;">
                                <img src="assets/img/tin-tuc/z7672862397810-589fba3abb7ad0d4017e09b5151bc656.jpg"
                                    alt="Trường THCS Đoàn Thị Điểm đón nhận Huân chương Lao động Hạng Nhì">
                            </a>
                            <div class="ts-news-card-body">
                                <h3><a href="#">Trường THCS Đoàn Thị Điểm đón nhận Huân chương Lao động Hạng Nhì</a>
                                </h3>
                                <a href="#" class="ts-news-link">Xem thêm <span>→</span></a>
                            </div>
                        </div>
                        <div class="ts-news-card">
                            <a href="#" style="display:block;">
                                <img src="assets/img/tin-tuc/3.jpg"
                                    alt="Meyschool Đoàn Thị Điểm Phú Quốc tuyển sinh lớp 1 - 8">
                            </a>
                            <div class="ts-news-card-body">
                                <h3><a href="#">Meyschool Đoàn Thị Điểm Phú Quốc tuyển sinh lớp 1 - 8, nhiều học bổng
                                        hấp dẫn</a></h3>
                                <a href="#" class="ts-news-link">Xem thêm <span>→</span></a>
                            </div>
                        </div>
                    </div>

                    <style>
                    #olympia-event .ts-news-slider {
                        margin: 0;
                        padding: 0 46px;
                    }

                    #olympia-event .ts-news-slider .slick-slide {
                        padding: 0 12px;
                    }

                    #olympia-event .ts-news-slider .slick-list {
                        overflow: hidden;
                    }

                    #olympia-event .ts-news-card {
                        background: #fff;
                        border-radius: 16px;
                        overflow: hidden;
                        box-shadow: 0 4px 24px rgba(23, 52, 93, .08);
                        transition: transform .3s, box-shadow .3s;
                    }

                    #olympia-event .ts-news-card:hover {
                        transform: translateY(-6px);
                        box-shadow: 0 12px 36px rgba(23, 52, 93, .14);
                    }

                    #olympia-event .ts-news-card img {
                        width: 100%;
                        height: 220px;
                        object-fit: cover;
                        display: block;
                    }

                    #olympia-event .ts-news-card-body {
                        padding: 20px 22px 24px;
                    }

                    #olympia-event .ts-news-card-body h3 {
                        font-size: 16px;
                        font-weight: 700;
                        line-height: 1.5;
                        margin: 0 0 16px;
                        display: -webkit-box;
                        -webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                    }

                    #olympia-event .ts-news-card-body h3 a {
                        color: #23336b;
                        text-decoration: none;
                    }

                    #olympia-event .ts-news-link {
                        font-size: 14px;
                        font-weight: 600;
                        color: #4aa6d9;
                        text-decoration: none;
                        display: inline-flex;
                        align-items: center;
                        gap: 4px;
                    }

                    #olympia-event .ts-news-link span {
                        font-size: 18px;
                    }

                    #olympia-event .ts-news-slider .slick-prev,
                    #olympia-event .ts-news-slider .slick-next {
                        width: 44px;
                        height: 44px;
                        z-index: 20;
                        background: #fff;
                        border-radius: 50%;
                        box-shadow: 0 2px 12px rgba(23, 52, 93, .15);
                    }

                    #olympia-event .ts-news-slider .slick-prev {
                        left: 4px;
                    }

                    #olympia-event .ts-news-slider .slick-next {
                        right: 4px;
                    }

                    #olympia-event .ts-news-slider .slick-prev:before,
                    #olympia-event .ts-news-slider .slick-next:before {
                        color: #23336b;
                        font-size: 20px;
                        opacity: 1;
                    }

                    #olympia-event .ts-news-slider .slick-dots {
                        bottom: -40px;
                    }

                    #olympia-event .ts-news-slider .slick-dots li button:before {
                        font-size: 10px;
                        color: #c5d3e0;
                        opacity: 1;
                    }

                    #olympia-event .ts-news-slider .slick-dots li.slick-active button:before {
                        color: #4aa6d9;
                    }

                    @media(max-width:1220px) {
                        #olympia-event .ts-news-slider {
                            padding: 0 38px;
                        }

                        #olympia-event .ts-news-slider .slick-prev {
                            left: 2px;
                        }

                        #olympia-event .ts-news-slider .slick-next {
                            right: 2px;
                        }
                    }

                    @media(max-width:768px) {
                        #olympia-event .ts-news-slider {
                            padding: 0 30px;
                        }

                        #olympia-event .ts-news-card img {
                            height: 180px;
                        }

                        #olympia-event .ts-news-slider .slick-prev,
                        #olympia-event .ts-news-slider .slick-next {
                            width: 36px;
                            height: 36px;
                        }

                        #olympia-event .ts-news-slider .slick-prev {
                            left: 0;
                        }

                        #olympia-event .ts-news-slider .slick-next {
                            right: 0;
                        }

                        #olympia-event .ts-news-slider .slick-prev:before,
                        #olympia-event .ts-news-slider .slick-next:before {
                            font-size: 16px;
                        }
                    }
                    </style>
                </section>
            </div>
        </section>
        <!-- Section: Cảm nhận của phụ huynh và học sinh -->
        <section id="olympia-testimonial">
            <h2 class="font-garamond-bold" style="font-size: 50px; margin: 0 auto 60px auto; max-width: 1043px">Cảm nhận
                của phụ huynh và học sinh của Meyschool</h2>
            <div class="olympia-testimonial slide-customs-dot show-on-scroll home-page" id="testimonial">
                <div class="slide-item testimonial-item">
                    <div class="olympia-testimonial-entry" style="opacity: 0">
                        <!-- <h5 class="font-garamond-bold">“Ngay cả khi mình đi học ở Mỹ ở Harvard, thì mình vẫn thấy rằng
                            triết lý giáo dục của họ không hề khác quá với cách làm của Meyschool đâu”</h5> -->
                        <p class="olympia-testimonial-content font-avenir-regular size-14 color-3a">Điều mình ấn tượng
                            nhất là cách nhà trường đưa AI và Toán Eduten vào giảng dạy. Ở Phú Quốc hiện tại hiếm có
                            trường nào chú trọng kỹ năng số sớm như vậy. Dù là trường mới nhưng quy trình vận hành rất
                            chuyên nghiệp, từ xe đưa đón đến việc cập nhật tình hình học tập hàng ngày cho phụ huynh.
                        </p>
                        <p class="olympia-testimonial-name font-garamond-bold">Anh Quốc Bảo</p>
                        <!-- <p class="olympia-testimonial-po4 font-avenir-regular size-14">Tốt nghiệp Thạc sỹ Đại học
                            Harvard, Hoa Kỳ, cựu học sinh Meyschool niên khóa 2013.</p> -->
                    </div>
                    <div class="olympia-testimonial-photo" style="opacity: 0"><img src="assets/img/anh-phu-huynh/5.jpg"
                            alt="">
                    </div>
                </div>
                <div class="slide-item testimonial-item">
                    <div class="olympia-testimonial-entry" style="opacity: 0">
                        <!-- <h5 class="font-garamond-bold">“Tôi rất tự hào vì con được học tại trường Meyschool.”</h5> -->
                        <p class="olympia-testimonial-content font-avenir-regular size-14 color-3a">Lúc đầu mình cũng
                            khá đắn đo vì Meyschool là trường mới tại Phú Quốc. nhưng sau khi cho con theo học khóa Tiền
                            tiểu học, mình hoàn toàn bị thuyết phục. Con không còn sợ đi học mà lúc nào cũng hào hứng kể
                            về các tiết học STEM và thầy cô. Cơ sở vật chất quá hiện đại, cảm giác con được chăm sóc rất
                            kỹ lưỡng.</p>
                        <p class="olympia-testimonial-name font-garamond-bold">Chị Minh Anh</p>
                        <!-- <p class="olympia-testimonial-po4 font-avenir-regular size-14">Phụ huynh học sinh Thảo Anh tốt
                            nghiệp khóa 2019.</p> -->
                    </div>
                    <div class="olympia-testimonial-photo" style="opacity: 0"><img src="storage/chi-phuong-ha-ph.jpg"
                            alt="">
                    </div>
                </div>
                <div class="slide-item testimonial-item">
                    <div class="olympia-testimonial-entry" style="opacity: 0">
                        <!-- <h5 class="font-garamond-bold">“Mình nghĩ rằng bản thân đã lựa chọn đúng đắn khi quyết định gửi
                            gắm những hoài bão ước mơ tuổi học trò của mình tại Meyschool.”</h5> -->
                        <p class="olympia-testimonial-content font-avenir-regular size-14 color-3a">Không gian xanh và
                            rộng rãi của trường là điểm cộng lớn nhất với gia đình mình. Con được chạy nhảy, học Piano
                            và chơi thể thao trong môi trường trong lành của Meyhomes. Nhìn con tự tin và năng động hơn
                            hẳn sau một học kỳ, mình biết mình đã đặt niềm tin đúng chỗ</p>
                        <p class="olympia-testimonial-name font-garamond-bold">Chị Thu Thủy </p>
                        <!-- <p class="olympia-testimonial-po4 font-avenir-regular size-14">Học sinh lớp 11.</p> -->
                    </div>
                    <div class="olympia-testimonial-photo" style="opacity: 0; aspect-ratio: 1 / 1; overflow: hidden;">
                        <img src="assets/img/anh-phu-huynh/2.jpg" alt=""
                            style="width: 100%; height: 100%; object-fit: cover; object-position: center top;">
                    </div>
                </div>
                <!-- <div class="slide-item testimonial-item">
                    <div class="olympia-testimonial-entry" style="opacity: 0">
                        <h5 class="font-garamond-bold">&quot;Tôi rất yên tâm khi cho con theo học Meyschool&quot;</h5>
                        <p class="olympia-testimonial-content font-avenir-regular size-14 color-3a">Khi học ở Meyschool,
                            con tỏ ra rất vui vẻ với các bạn, thầy cô và trường học. Tôi thấy môi trường học tập ở đây
                            thân thiện, các thầy cô tâm huyết, tận tâm, chương trình học cũng thú vị, không nặng nề đồng
                            thời giúp con phát triển nhiều kỹ năng.</p>
                        <p class="olympia-testimonial-name font-garamond-bold">Chị Lâm Hồng Anh</p>
                        <p class="olympia-testimonial-po4 font-avenir-regular size-14">Phụ huynh học sinh V.H.N Khối 7
                        </p>
                    </div>
                    <div class="olympia-testimonial-photo" style="opacity: 0"><img src="storage/me-van-hai-nam-1.png"
                            alt="">
                    </div>
                </div> -->
                <div class="slide-item testimonial-item">
                    <div class="olympia-testimonial-entry" style="opacity: 0">
                        <!-- <h5 class="font-garamond-bold">&quot;Meyschool Đoàn Thị Điểm là một môi trường tốt cho con
                            tôi&quot;</h5> -->
                        <p class="olympia-testimonial-content font-avenir-regular size-14 color-3a">Gia đình mình vốn
                            biết tiếng trường Đoàn Thị Điểm ở Hà Nội nên khi Meyschool mở tại Phú Quốc là mình đăng ký
                            ngay. Chất lượng đào tạo và đội ngũ giáo viên đúng như kỳ vọng: tận tâm, chuyên môn cao và
                            rất hiểu tâm lý học sinh. Một khởi đầu tuyệt vời cho các con tại Đảo Ngọc.</p>
                        <p class="olympia-testimonial-name font-garamond-bold">Anh Hoàng Nam</p>
                        <!-- <p class="olympia-testimonial-po4 font-avenir-regular size-14">Phụ huynh học sinh Lê Việt Anh
                            lớp 7H2</p> -->
                    </div>
                    <div class="olympia-testimonial-photo" style="opacity: 0"><img src="assets/img/anh-phu-huynh/3.jpg"
                            alt="">
                    </div>
                </div>

            </div>
        </section>
        <!-- Section: Thông tin tuyển sinh + Video -->
        <!-- <section id="olympia-readmore">
            <div class="olympia-readmore">
                <div class="olympia-readmore-entry bg-F1CC1F">
                    <h5 class="font-garamond-bold color-f">Hiểu rõ hơn về trường học & quy chế <br /> tuyển sinh</h5>
                    <div class="hotline">
                        <p class="hotline-label">HOTLINE</p>
                        <p class="hotline-number">
                            <a href="tel:+84934525889" title="" class="hotline-number">0934 525 889</a>
                        </p>
                    </div>
                    <div class="email">
                        <p class="email-label">EMAIL</p>
                        <p class="email-contact">tuyensinh@Meyschool.edu.vn</p>
                    </div>
                    <a href="lien-he.html" title=""
                        class="link-button-bg bg-white color-471873 olympia-readmore-btn">Tìm hiểu thêm<img
                            class="cl-471873" src="images/button-1-3.html" alt=""></a>
                </div>
                <iframe id="video-embed" width="779" height="480" src="https://www.youtube.com/embed/qcT-TxCrTJ8"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </section> -->
    </main>
    <?php include 'includes/footer.php'; ?>
    <section id="callnow" class="hotline mobile__none">
        <div class="hotline-phone-ring-wrap">
            <div class="hotline-phone-ring" id="call-now-1">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle">
                    <a href="tel:0934525889" class="pps-btn-img"> <img
                            src="data:image/webp;base64,UklGRswAAABXRUJQVlA4TMAAAAAvMUAMECcw//M//2raNmBTAdOrhFaAC0dguIokSbEODCycABSAAqj9m1qqe/Af0X8FbtsoOWZoX1H9UzC2hqmXZsgtHbBPkljzCjS0LXW0DSf2EQeETlxi2he8aGA83qirUAi71oznrahYPNg4sahVz5cZ8YlPGOATWz4wv3MhdZtnLFwmo7S4i9teSdGXj+sTL9zSjMzuVuKhRXEArzdPGstdaw6hYUZfarCuLkC6kPImRCiW2ZJEwrCPIf17qAA="
                            alt="Gọi điện thoại">
                    </a>
                </div>
            </div>
            <div class="hotline-bar">
                <a href="tel:0934525889"> <span class="text-hotline" id="call-now-1">024 6267 7999</span> </a>
            </div>
        </div>
    </section>
    <script>
    AOS.init({
        once: true,

        disable: function() {
            var maxWidth = 767;
            return window.innerWidth < maxWidth;
        }
    });
    </script>
    <script src="olympia/js/bootstrap.min.js"></script>
    <script src="olympia/js/jquery.toast.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script src="vendor/core/plugins/language/js/language-publice209.js?v=1.0.0"></script>





    <script src="olympia/js/contact.js"></script>
    <script src="olympia/js/custom.js"></script>

    <script>
    (function() {
        function escHtml(str) {
            var d = document.createElement('div');
            d.textContent = str || '';
            return d.innerHTML;
        }
        $.getJSON('api/news-public.php?page=1', function(res) {
            var row = document.getElementById('home-news-row');
            if (!res.success || !res.data || !res.data.length) {
                row.innerHTML =
                    '<div class="col-md-12" style="text-align:center;color:rgba(255,255,255,0.6);padding:40px 0;">Chưa có bài viết nào.</div>';
                return;
            }
            var items = res.data.slice(0, 8);
            var row1Items = items.slice(0, 4);
            var row2Items = items.slice(4, 8);

            function buildCards(arr) {
                var html = '';
                arr.forEach(function(r) {
                    var thumb = r.thumbnail || 'assets/img/favicon.png';
                    var link = 'doc-tin-tuc.php?slug=' + encodeURIComponent(r.slug);
                    html += '<div class="col-md-3">';
                    html += '<div class="olympia-event-post slide-item">';
                    html += '<a href="' + link + '" title=""><img src="' + escHtml(thumb) +
                        '" alt="' + escHtml(r.title) + '"></a>';
                    html += '<p class="post-title"><a href="' + link + '">' + escHtml(r.title) +
                        '</a></p>';
                    html += '</div></div>';
                });
                return html;
            }
            row.innerHTML = buildCards(row1Items);
            var row2 = document.getElementById('home-news-row-2');
            if (row2 && row2Items.length) {
                row2.innerHTML = buildCards(row2Items);
            }
        });
    })();
    </script>
</body>

</html>

<script type="text/javascript">
$(document).on('ready', function() {
    $('.olympia-testimonial').slick({
        initialSlide: 0,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 10200,
        customPaging: function(slider, i) {
            return '<div class="pager__item" id=' + i + "></div>";
        },
        prevArrow: false,
        nextArrow: false,
        // autoplaySpeed: 5000,
        responsive: [{
            breakpoint: 1024,
            settings: {
                dots: false,
                autoplay: true,
            }
        }]
    });
    // effect for slider olympia-testimonial
    var slider = $('.olympia-testimonial');
    slider.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

        var slick_slide = document.getElementsByClassName('olympia-testimonial')[0];
        var slick_item = slick_slide.getElementsByClassName('slick-slide');

        for (var i = 0; i < slick_item.length; i++) {
            var slick_item_info = slick_item[i].getElementsByClassName('olympia-testimonial-entry')[0];
            var slick_item_img = slick_item[i].getElementsByClassName('olympia-testimonial-photo')[0];

            if (slick_item[i].classList.contains('slick-active')) {
                opacityEffect(slick_item_img, 0, 1, 500, 10);
                translateEffect(slick_item_img, 80, 0, 500, 10, 'y');

                opacityEffect(slick_item_info, 0, 1, 500, 10, 700);
                translateEffect(slick_item_info, 65, 0, 500, 10, 'y', 700);
            } else {
                // opacityEffect(slick_item_img, 1, 0, 500, 10);
                // translateEffect(slick_item_img, 0, 80, 500, 10, 'y');
                slick_item_img.style.opacity = 0;
                slick_item_img.style.transform = 'translate3d(0px, 80px, 0px)';

                // opacityEffect(slick_item_info, 1, 0, 500, 10);
                // translateEffect( slick_item_info, 0, 80, 500, 10, 'y');
                slick_item_info.style.opacity = 0;
                slick_item_info.style.transform = 'translate3d(0px, 80px, 0px)';
            }
        }
    });

    $(".mobile").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
        nextArrow: '<button type="button" class="slick-next">&#10095;</button>',
        arrows: true,
        infinite: true,
        fade: false,
        swipe: true,
        touchMove: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
    });
    // effect for slider pc
    var slider = $('.mobile');
    slider.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

        var slick_slide = document.getElementsByClassName('mobile')[0];
        var slick_item = slick_slide.getElementsByClassName('slick-slide');

        for (var i = 0; i < slick_item.length; i++) {
            var slick_item_info = slick_item[i].getElementsByClassName('slider-title-box')[0];

            if (slick_item[i].classList.contains('slick-active')) {

                opacityEffect(slick_item_info, 0, 1, 500, 10);
                translateEffect(slick_item_info, 65, 0, 500, 10, 'y');
            } else {
                opacityEffect(slick_item_info, 1, 0, 500, 10);
                translateEffect(slick_item_info, 0, 80, 500, 10, 'y');
            }
        }
    });

    $(".pc").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="rcl-prev"><img src="https://theolympiaschools.edu.vn/olympia/images/button-1-3.svg"></div>',
        nextArrow: '<div class="rcl-next"><img src="https://theolympiaschools.edu.vn/olympia/images/button-1-3.svg"></div>',
        infinite: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
    });
    // effect for slider pc
    var slider = $('.pc');
    slider.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

        // effect for the first time.
        var pc_slider = document.getElementById('pc_slider_cover');

        if (pc_slider.classList.contains('appear is-visible')) {
            var slick_slide = document.getElementsByClassName('pc')[0];
            var slick_item = slick_slide.getElementsByClassName('slick-slide');

            for (var i = 0; i < slick_item.length; i++) {
                var slick_item_info = slick_item[i].getElementsByClassName('slider-title-box')[0];

                if (slick_item[i].classList.contains('slick-active')) {

                    opacityEffect(slick_item_info, 0, 1, 500, 10);
                    translateEffect(slick_item_info, 65, 0, 500, 10, 'y');
                } else {
                    opacityEffect(slick_item_info, 1, 0, 500, 10);
                    translateEffect(slick_item_info, 0, 80, 500, 10, 'y');
                }
            }
        }

        var slick_slide = document.getElementsByClassName('pc')[0];
        var slick_item = slick_slide.getElementsByClassName('slick-slide');

        for (var i = 0; i < slick_item.length; i++) {
            var slick_item_info = slick_item[i].getElementsByClassName('slider-title-box')[0];

            if (slick_item[i].classList.contains('slick-active')) {

                opacityEffect(slick_item_info, 0, 1, 500, 10);
                translateEffect(slick_item_info, 65, 0, 500, 10, 'y');
            } else {
                opacityEffect(slick_item_info, 1, 0, 500, 10);
                translateEffect(slick_item_info, 0, 80, 500, 10, 'y');
            }
        }
    });


    var mb_slider = document.getElementById('mb_slider_cover');

    if (mb_slider.classList.contains('appear is-visible')) {
        var slick_slide = document.getElementsByClassName('mobile')[0];
        var slick_item = slick_slide.getElementsByClassName('slick-slide');

        for (var i = 0; i < slick_item.length; i++) {
            var slick_item_info = slick_item[i].getElementsByClassName('slider-title-box')[0];

            if (slick_item[i].classList.contains('slick-active')) {

                opacityEffect(slick_item_info, 0, 1, 500, 10);
                translateEffect(slick_item_info, 65, 0, 500, 10, 'y');
            } else {
                opacityEffect(slick_item_info, 1, 0, 500, 10);
                translateEffect(slick_item_info, 0, 80, 500, 10, 'y');
            }
        }
    }

    function newSlick() {
        $('.olympia-event-posts').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            prevArrow: false,
            nextArrow: false,
            autoplaySpeed: 2000,
            cssEase: 'linear',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        variableWidth: true,
                        autoplay: true,
                        prevArrow: '<div class="rcl-prev"><img class="disable" src="https://theolympiaschools.edu.vn/olympia/images/button-1-3.svg" alt=""></div>',
                        nextArrow: '<div class="rcl-next"><img class="disable" src="https://theolympiaschools.edu.vn/olympia/images/button-1-3.svg" alt=""></div>'
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        variableWidth: true,
                        slidesToScroll: 1,
                        autoplay: true,
                        prevArrow: '<div class="rcl-prev"><img class="disable" src="https://theolympiaschools.edu.vn/olympia/images/button-1-3.svg" alt=""></div>',
                        nextArrow: '<div class="rcl-next"><img class="disable" src="https://theolympiaschools.edu.vn/olympia/images/button-1-3.svg" alt=""></div>'
                    }
                }
            ]
        });
    }

    newSlick()

    if ($('.ts-news-slider').length) {
        if ($('.ts-news-slider').hasClass('slick-initialized')) {
            $('.ts-news-slider').slick('unslick');
        }
        $('.ts-news-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '<button class="slick-prev"><span>&#10094;</span></button>',
            nextArrow: '<button class="slick-next"><span>&#10095;</span></button>',
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    }
})
</script>

<!-- Popup Tuyển sinh -->
<!-- 
<div id="tuyensinh-popup"
    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); z-index: 999999; justify-content: center; align-items: center; padding: 20px;">
    <div
        style="position: relative; width: 750px; max-width: 96vw; max-height: 90vh; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
        <button onclick="closeTuyenSinhPopup()"
            style="position: absolute; top: 10px; right: 10px; width: 35px; height: 35px; background: rgba(255,255,255,0.9); border: none; border-radius: 50%; font-size: 20px; cursor: pointer; z-index: 100; display: flex; justify-content: center; align-items: center;">×</button>
        <div style="position: relative; width: 100%; height: 100%; overflow: auto;">
            <a href="dang-ky-tu-van.php" style="display: block; line-height: 0;">
                <img src="assets/img/banner/popup-tuyensinh.jpg" alt="Tuyển sinh 2026-2027"
                    style="width: 100%; height: auto; display: block; cursor: pointer;">
            </a>
            <a href="tuyen-dung.php"
                style="position: absolute; bottom: 15%; left: 50%; transform: translateX(-50%); display: inline-block; padding: 12px 35px; background: #ff6b35; color: white; text-decoration: none; font-weight: bold; font-size: 16px; border-radius: 30px; text-transform: uppercase; box-shadow: 0 5px 15px rgba(255,107,53,0.4); white-space: nowrap;">Đăng
                ký ngay</a>
        </div>
    </div>
</div> -->


<style>
body.popup-open {
    overflow: hidden !important;
    height: 100% !important;
}
</style>

<script>
// Xóa localStorage để test (có thể comment dòng này sau khi test xong)
localStorage.removeItem('tuyensinhPopupShown');

// Hiện popup sau 10 giây khi DOM ready, sau khi tắt thì 3 phút lại hiện lại
document.addEventListener('DOMContentLoaded', function() {
    function showPopup() {
        var popup = document.getElementById('tuyensinh-popup');
        if (popup) {
            popup.style.display = 'flex';
            document.body.classList.add('popup-open');
        }
    }

    // Lần đầu: hiện sau 10 giây
    setTimeout(showPopup, 10000);
});

function closeTuyenSinhPopup() {
    var popup = document.getElementById('tuyensinh-popup');
    if (popup) {
        popup.style.display = 'none';
        document.body.classList.remove('popup-open');
        // Sau 3 phút (180000ms) hiện lại popup
        setTimeout(function() {
            popup.style.display = 'flex';
            document.body.classList.add('popup-open');
        }, 180000);
    }
}

// Đóng popup khi click ra ngoài
document.addEventListener('DOMContentLoaded', function() {
    var popup = document.getElementById('tuyensinh-popup');
    if (popup) {
        popup.addEventListener('click', function(e) {
            if (e.target === this) {
                closeTuyenSinhPopup();
            }
        });
    }
});
</script>