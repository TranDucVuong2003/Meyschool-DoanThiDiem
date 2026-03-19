<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />

    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Liên hệ</title>
    <meta name="description" content="Liên hệ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Meyschool Đoàn Thị Điểm">
    <meta property="og:title" content="Liên hệ">
    <meta property="og:description" content="Liên hệ">
    <meta property="og:url" content="lien-he.php">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Liên hệ">
    <meta name="twitter:description" content="Liên hệ">

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

        :root {
            --ct-blue-1: #439bd4;
            --ct-blue-2: #4db0e4;
            --ct-blue-3: #eaf7ff;
            --ct-text: #1f3c58;
        }

        .contact-page {
            background: #f6fbff;
            color: var(--ct-text);
        }

        .ct-wide {
            width: min(96vw, 1520px);
            margin: 0 auto;
        }

        .contact-top {
            padding: 112px 0 26px;
        }

        .ct-breadcrumb {
            margin: 0 0 14px;
            display: inline-flex;
            flex-wrap: wrap;
            gap: 8px;
            border-radius: 999px;
            padding: 7px 14px;
            background: #ebf8ff;
            border: 1px solid rgba(67, 155, 212, 0.22);
        }

        .ct-breadcrumb li,
        .ct-breadcrumb li a {
            color: #2a7fb7;
            font-size: 13px;
            position: static !important;
        }

        .contact-top h1 {
            margin: 0 0 10px;
            font-family: 'Garamond', serif;
            color: #236ea4;
            font-size: clamp(34px, 4vw, 56px);
            line-height: 1.08;
        }

        .contact-top p {
            margin: 0;
            color: #48617c;
            line-height: 1.8;
            max-width: 980px;
        }

        .contact-layout {
            padding-bottom: 32px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 22px;
            align-items: start;
        }

        .ct-card {
            background: #fff;
            border: 1px solid rgba(67, 155, 212, 0.16);
            border-radius: 20px;
            box-shadow: 0 14px 28px rgba(14, 49, 79, 0.08);
            padding: 22px;
        }

        .ct-card h2 {
            margin: 0 0 6px;
            color: #2472a8;
            font-family: 'Garamond', serif;
            font-size: clamp(28px, 2.6vw, 40px);
            line-height: 1.2;
            padding: 0 !important;
        }

        .ct-card h3 {
            margin: 0 0 10px;
            color: #286d9d;
            font-family: 'Garamond', serif;
            font-size: 26px;
            line-height: 1.2;
            padding: 0 !important;
        }

        .ct-sub {
            margin: 0 0 18px;
            color: #58718d;
            font-size: 14px;
            line-height: 1.75;
        }

        .ct-form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-bottom: 12px;
        }

        .ct-field {
            display: grid;
            gap: 7px;
        }

        .ct-field label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #4a6886;
            letter-spacing: 0.4px;
        }

        .ct-field input,
        .ct-field textarea,
        .ct-field select {
            width: 100%;
            border: 1px solid rgba(67, 155, 212, 0.24);
            border-radius: 12px;
            padding: 11px 12px;
            font-size: 14px;
            color: #284761;
            outline: none;
            background: #fff;
        }

        .ct-field textarea {
            min-height: 130px;
            resize: vertical;
        }

        .ct-full {
            grid-column: 1 / -1;
        }

        .ct-radio-box {
            border: 1px solid rgba(67, 155, 212, 0.2);
            background: #f8fcff;
            border-radius: 12px;
            padding: 10px 12px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .ct-radio-item {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            color: #3e5c79;
        }

        .ct-submit {
            margin-top: 2px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border: 0;
            border-radius: 999px;
            background: linear-gradient(140deg, #439bd4, #4db0e4);
            color: #fff;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            text-decoration: none;
        }

        .ct-info-list {
            display: grid;
            gap: 12px;
        }

        .ct-info-block {
            border: 1px solid rgba(67, 155, 212, 0.18);
            border-radius: 14px;
            padding: 12px;
            background: #f9fdff;
        }

        .ct-info-block b {
            display: block;
            margin: 0 0 7px;
            color: #2a78ae;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.4px;
        }

        .ct-info-block p {
            margin: 0 0 6px;
            font-size: 14px;
            line-height: 1.65;
            color: #42607e;
        }

        .ct-info-block a {
            color: #2f85bc;
            text-decoration: none;
        }

        .ct-action-row {
            margin-top: 14px;
            display: grid;
            gap: 10px;
        }

        .ct-action {
            border: 1px solid rgba(67, 155, 212, 0.24);
            background: #ebf7ff;
            color: #2b7db4;
            border-radius: 12px;
            padding: 10px 12px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .ct-social {
            margin-top: 14px;
            display: flex;
            gap: 8px;
        }

        .ct-social a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #ecf8ff;
            border: 1px solid rgba(67, 155, 212, 0.22);
        }

        .ct-social img {
            width: 18px;
            height: 18px;
        }

        .ct-map-wrap {
            margin: 18px 0 0;
            width: 100vw;
            margin-left: calc(50% - 50vw);
            margin-right: calc(50% - 50vw);
            border-radius: 0;
            overflow: hidden;
            border: 0;
            box-shadow: none;
        }

        .ct-map-wrap iframe {
            width: 100%;
            height: 520px;
            border: 0;
            display: block;
        }

        @media (max-width: 1100px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .ct-wide {
                width: min(94vw, 1520px);
            }

            .contact-top {
                padding: 96px 0 18px;
            }

            .ct-form-grid {
                grid-template-columns: 1fr;
            }

            .ct-map-wrap iframe {
                height: 360px;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="overlay_mark_search" style="display:none;"></div>

    <main class="body-content contact-page">
        <section class="contact-top">
            <div class="ct-wide" data-aos="fade-up">
                <ol class="breadcrumb ct-breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Liên hệ</li>
                </ol>
                <h1>Liên hệ với Meyschool Đoàn Thị Điểm</h1>
                <p>Trang liên hệ được tối ưu theo chức năng chính: gửi yêu cầu nhanh, tìm đúng đầu mối phụ trách và tra cứu địa điểm thuận tiện. Phụ huynh, học sinh và đối tác có thể liên hệ trực tiếp qua biểu mẫu hoặc các thông tin bên cạnh.</p>
            </div>
        </section>

        <section class="contact-layout">
            <div class="ct-wide contact-grid">
                <article class="ct-card" data-aos="fade-up">
                    <h2>Gửi lời nhắn</h2>
                    <p class="ct-sub">Vui lòng điền thông tin chính xác để nhà trường phản hồi nhanh nhất.</p>

                    <form id="contact-form" action="https://theolympiaschools.edu.vn/send-contact" method="POST">
                        <input type="hidden" name="_token" value="Xp0QD4AXEKvVFRQgq6zl6ESvt4HEk1o59HIf5UOU">

                        <div class="ct-form-grid">
                            <div class="ct-field">
                                <label for="name">Họ tên *</label>
                                <input type="text" name="name" id="name" placeholder="Nguyễn Ngọc Anh" class="input-name">
                            </div>

                            <div class="ct-field">
                                <label for="phone">Điện thoại</label>
                                <input type="text" name="phone" id="phone" placeholder="09xxxxxxxx" class="input-phone">
                            </div>

                            <div class="ct-field">
                                <label for="email">Email *</label>
                                <input type="text" name="email" id="email" placeholder="ngocanh@gmail.com" class="input-email">
                            </div>

                            <div class="ct-field">
                                <label>Anh/chị là</label>
                                <div class="ct-radio-box">
                                    <label class="ct-radio-item"><input type="radio" value="parents" checked id="parents" name="ct-position"> Phụ huynh</label>
                                    <label class="ct-radio-item"><input type="radio" value="students" id="students" name="ct-position"> Học sinh</label>
                                    <label class="ct-radio-item"><input type="radio" value="vendor" id="vendor" name="ct-position"> Đối tác</label>
                                </div>
                            </div>

                            <div class="ct-field ct-full">
                                <label for="ct-mess">Lời nhắn</label>
                                <textarea name="ct-mess" id="ct-mess" class="input-mess" placeholder="Nhập nội dung cần hỗ trợ..."></textarea>
                            </div>
                        </div>

                        <button type="submit" class="ct-submit btn-submit-js">Gửi thông tin</button>
                        <input type="hidden" name="url" value="lien-he.php">
                        <input type="hidden" name="type" value="contact">
                    </form>
                </article>

                <aside class="ct-card" data-aos="fade-up" data-aos-delay="120">
                    <h3>Thông tin liên hệ</h3>

                    <div class="ct-info-list">
                        <div class="ct-info-block">
                            <b>Hotline</b>
                            <p>Văn phòng THCS cơ sở 1: <a href="tel:+842462872448">0246.2872.448</a> – <a href="tel:+842466744699">0246.6744.699</a></p>
                            <p>Văn phòng THCS cơ sở 2: <a href="tel:+842462652709">0246.265.2709</a></p>
                            <p>Văn phòng THPT: <a href="tel:+842466752216">0246.675.2216</a></p>
                        </div>

                        <div class="ct-info-block">
                            <b>Email</b>
                            <p>Góp ý phụ huynh: <a href="mailto:ykphdoanthidiem@gmail.com">ykphdoanthidiem@gmail.com</a></p>
                            <p>Ban giám hiệu: <a href="mailto:bghdoanthidiem@gmail.com">bghdoanthidiem@gmail.com</a></p>
                            <p>Ban biên tập website: <a href="mailto:bbtdoanthidiem@gmail.com">bbtdoanthidiem@gmail.com</a></p>
                        </div>

                        <div class="ct-info-block">
                            <b>Địa chỉ</b>
                            <p>Cơ sở 1: Số 64 Lưu Hữu Phước, phường Từ Liêm, TP Hà Nội</p>
                            <p>Cơ sở 2: Phố Nguyễn Đình Tứ, KĐT Bắc Cổ Nhuế, phường Đông Ngạc, TP Hà Nội</p>
                            <p>Website: <a href="https://www.thcs-doanthidiem.edu.vn" target="_blank" rel="noopener">www.thcs-doanthidiem.edu.vn</a></p>
                        </div>
                    </div>

                    <div class="ct-action-row">
                        <a class="ct-action" href="faq.php" target="_blank">Câu hỏi thường gặp</a>
                        <a class="ct-action download_multiple_file" href="#" style="cursor:pointer;">Tải về tài liệu Đoàn Thị Điểm</a>
                    </div>

                    <div class="ct-social">
                        <a href="https://www.facebook.com/theolympiaschools/" target="_blank"><img src="olympia/images/facebook.svg" alt="Facebook"></a>
                        <a href="https://www.instagram.com/theolympiaschools/" target="_blank"><img src="olympia/images/instagram.svg" alt="Instagram"></a>
                        <a href="https://www.youtube.com/user/Olympiaschools" target="_blank"><img src="olympia/images/youtube.svg" alt="Youtube"></a>
                    </div>
                </aside>
            </div>

            <div class="ct-wide ct-map-wrap" data-aos="fade-up">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.438051721944!2d105.7992801759767!3d21.01515148824447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab001745cb03%3A0x5512842ae90b2dd7!2zVHLGsOG7nW5nIFRow6BuaCBXZWI!5e0!3m2!1svi!2s!4v1768911025495!5m2!1svi!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <div class="csvc_main">
            <div class="modal" id="submit_modal" tabindex="-1">
                <div class="modal-inner">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="register-suceess" class="text-center">
                                <img src="olympia/images/success-icon.png" alt="success">
                                <p>Yêu cầu của anh/chị đã được gửi tới đội ngũ Meyschool Đoàn Thị Điểm. Chúng tôi sẽ phản hồi trong thời gian sớm nhất.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <section id="callnow" class="hotline mobile__none">
        <div class="hotline-phone-ring-wrap">
            <div class="hotline-phone-ring" id="call-now-1">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle">
                    <a href="tel:0934525889" class="pps-btn-img"><img src="data:image/webp;base64,UklGRswAAABXRUJQVlA4TMAAAAAvMUAMECcw//M//2raNmBTAdOrhFaAC0dguIokSbEODCycABSAAqj9m1qqe/Af0X8FbtsoOWZoX1H9UzC2hqmXZsgtHbBPkljzCjS0LXW0DSf2EQeETlxi2he8aGA83qirUAi71oznrahYPNg4sahVz5cZ8YlPGOATWz4wv3MhdZtnLFwmo7S4i9teSdGXj+sTL9zSjMzuVuKhRXEArzdPGstdaw6hYUZfarCuLkC6kPImRCiW2ZJEwrCPIf17qAA=" alt="Gọi điện thoại"></a>
                </div>
            </div>
            <div class="hotline-bar">
                <a href="tel:0934525889"><span class="text-hotline" id="call-now-1">024 6267 7999</span></a>
            </div>
        </div>
    </section>

    <script>
        AOS.init({
            once: true,
            disable: function() {
                return window.innerWidth < 768;
            }
        });
    </script>

    <script src="olympia/js/bootstrap.min.js"></script>
    <script src="olympia/js/jquery.toast.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script src="vendor/core/plugins/language/js/language-publice209.js?v=1.0.0"></script>
    <script src="olympia/js/contact.js"></script>
    <script src="olympia/js/custom.js"></script>
</body>

</html>
