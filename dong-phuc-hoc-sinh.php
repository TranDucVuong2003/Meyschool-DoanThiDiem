<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Đồng phục học sinh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Đồng phục học sinh">
    <meta property="og:description" content="">
    <meta property="og:url" content="dong-phuc-hoc-sinh.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="twitter:title" content="Đồng phục học sinh">
    <meta name="twitter:description" content="">

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

    .uniform-wrap {
        background: #f7fbff;
    }

    .uniform-container {
        max-width: 1260px;
        margin: 0 auto;
        padding: 0 20px;
        margin-bottom: 120px;
    }

    .uniform-hero {
        padding: 130px 0 70px;
        background: linear-gradient(120deg, rgba(35, 84, 160, 0.95) 0%, rgba(67, 155, 212, 0.9) 60%, rgba(77, 176, 228, 0.7) 100%);
        color: #fff;
    }

    .uniform-hero-grid {
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 50px;
        align-items: center;
    }

    .uniform-hero h1 {
        font-family: 'Garamond', serif;
        font-size: 42px;
        margin: 16px 0 18px;
    }

    .uniform-hero p {
        font-size: 16px;
        line-height: 1.8;
        max-width: 520px;
    }

    .uniform-hero .breadcrumb {
        margin: 0 0 16px;
        background: rgba(255, 255, 255, 0.15);
        display: inline-flex;
        padding: 10px 18px;
        border-radius: 999px;
    }

    .uniform-hero .breadcrumb-item a,
    .uniform-hero .breadcrumb-item.active {
        color: #fff;
    }

    .uniform-lookbook {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 16px;
    }

    .uniform-lookbook img,
    .uniform-lookbook .img-empty {
        width: 100%;
        height: 240px;
        object-fit: cover;
        border-radius: 18px;
        box-shadow: 0 16px 30px rgba(0, 0, 0, 0.18);
    }

    .uniform-section {
        padding: 70px 0;
    }

    .uniform-tabs {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
    }

    .uniform-tab {
        background: #fff;
        border-radius: 18px;
        padding: 24px;
        border: 1px solid rgba(67, 155, 212, 0.14);
        box-shadow: 0 14px 30px rgba(0, 0, 0, 0.08);
    }

    .uniform-tab h4 {
        color: var(--blue-1);
        margin-bottom: 8px;
    }

    .uniform-tab p {
        margin: 0;
        font-size: 14px;
        line-height: 1.7;
        color: #5b6a82;
    }

    .uniform-detail {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 32px;
        align-items: center;
        margin-top: 50px;
    }

    .uniform-detail img,
    .uniform-detail .img-empty {
        width: 100%;
        height: 320px;
        object-fit: cover;
        border-radius: 22px;
        box-shadow: 0 16px 35px rgba(0, 0, 0, 0.16);
    }

    .uniform-detail h3 {
        color: var(--blue-1);
        font-size: 28px;
        margin-bottom: 12px;
    }

    .uniform-detail p {
        margin: 0 0 12px;
        color: #51627c;
        line-height: 1.8;
    }

    .uniform-gallery {
        display: grid;
        grid-template-columns: repeat(6, minmax(0, 1fr));
        gap: 14px;
        margin-top: 32px;
    }

    .uniform-gallery img,
    .uniform-gallery .img-empty {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 18px;
    }

    .uniform-gallery .wide {
        grid-column: span 2;
    }

    .uniform-cta {
        margin-top: 50px;
        background: #fff;
        border-radius: 20px;
        padding: 30px 35px;
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        align-items: center;
        gap: 20px;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
    }

    .uniform-cta h3 {
        color: var(--blue-1);
        margin-bottom: 10px;
    }

    .uniform-cta p {
        margin: 0;
        color: #52647f;
    }

    @media (max-width: 1100px) {

        .uniform-hero-grid,
        .uniform-detail {
            grid-template-columns: 1fr;
        }

        .uniform-lookbook {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .uniform-gallery {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .uniform-cta {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .uniform-hero h1 {
            font-size: 32px;
        }

        .uniform-tabs {
            grid-template-columns: 1fr;
        }

        .uniform-gallery {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 520px) {
        .uniform-gallery {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content uniform-wrap">
        <section class="uniform-hero">
            <div class="uniform-container uniform-hero-grid">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Dịch vụ học đường</a></li>
                        <li class="breadcrumb-item active">Đồng phục học sinh</li>
                    </ol>
                    <h1>Bộ sưu tập đồng phục Meyschool</h1>
                    <p>Đồng phục được thiết kế trẻ trung, thanh lịch và dễ vận động, tạo sự tự tin cho học sinh trong
                        mọi hoạt động học tập, ngoại khóa.</p>
                </div>
                <div class="uniform-lookbook">
                    <div class="img-empty"></div>
                    <div class="img-empty"></div>
                    <div class="img-empty"></div>
                    <div class="img-empty"></div>
                </div>
            </div>
        </section>

        <section class="uniform-section">
            <div class="uniform-container">
                <div class="uniform-tabs">
                    <div class="uniform-tab">
                        <h4>Đồng phục thường ngày</h4>
                        <p>Thiết kế gọn gàng, thoáng mát, phù hợp học tập hàng ngày và hoạt động trong lớp.</p>
                    </div>
                    <div class="uniform-tab">
                        <h4>Đồng phục thể thao</h4>
                        <p>Chất liệu co giãn, thấm hút tốt, hỗ trợ tối ưu cho các giờ vận động và câu lạc bộ.</p>
                    </div>
                    <div class="uniform-tab">
                        <h4>Đồng phục dự lễ</h4>
                        <p>Trang trọng, lịch sự, phù hợp các sự kiện đặc biệt và ngày hội của nhà trường.</p>
                    </div>
                    <div class="uniform-tab">
                        <h4>Đồng phục mùa đông</h4>
                        <p>Giữ ấm tốt, thiết kế tinh tế, đồng bộ với nhận diện thương hiệu Meyschool.</p>
                    </div>
                </div>

                <div class="uniform-detail">
                    <div class="img-empty"></div>
                    <div>
                        <h3>Thiết kế đồng bộ, thoải mái cho mọi hoạt động</h3>
                        <p>Đồng phục Meyschool ưu tiên form dáng gọn gàng, chất liệu thấm hút tốt và bền màu, đảm bảo
                            học sinh luôn tự tin trong mọi hoạt động học tập lẫn ngoại khóa.</p>
                        <p>Bảng màu xanh chủ đạo giúp đồng bộ nhận diện thương hiệu và mang lại cảm giác trẻ trung, hiện
                            đại.</p>
                    </div>
                </div>

                <h3 style="color: var(--blue-1); font-size: 28px; margin: 40px 0 18px;">Bộ sưu tập đồng phục</h3>
                <div class="uniform-gallery">
                    <div class="img-empty wide"></div>
                    <div class="img-empty"></div>
                    <div class="img-empty"></div>
                    <div class="img-empty wide"></div>
                    <div class="img-empty"></div>
                    <div class="img-empty"></div>
                </div>

                <div class="uniform-cta">
                    <div>
                        <h3>Đồng hành cùng phong cách học đường</h3>
                        <p>Liên hệ tư vấn để nhận thông tin chi tiết về kích cỡ, quy định và lịch phát đồng phục.</p>
                    </div>
                    <div style="text-align:right;">
                        <a class="btn-dk" href="dang-ky-tu-van.php" style="width:auto; padding: 0 24px;">Đăng ký tư
                            vấn</a>
                    </div>
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