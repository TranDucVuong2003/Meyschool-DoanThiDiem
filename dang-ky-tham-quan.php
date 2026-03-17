<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <link rel="shortcut icon" href="storage/favicon.png">
    <title>Đăng ký tham quan trường</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Đăng ký tham quan trường">
    <meta property="og:description" content="">
    <meta property="og:url" content="dang-ky-tham-quan.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="storage/favicon.png">
    <meta name="twitter:title" content="Đăng ký tham quan trường">
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
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
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
                        <li class="breadcrumb-item white"><a href="javascript:;" class="white">Đăng ký tham quan trường</a></li>
                    </ol>
                    <h1 class="big__header-title container font-garamond-bold white header-title">Đăng ký tham quan trường</h1>
                </div>
            </div>
        </section>

        <section class="program-content">
            <div class="container" style="padding: 60px 20px;">
                <h2 style="font-size: 32px; color: #471873; margin-bottom: 30px; font-weight: 600; text-align: center;">Đăng ký tham quan trường</h2>
                <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 30px; text-align: center; max-width: 800px; margin-left: auto; margin-right: auto;">
                    Quý phụ huynh vui lòng điền thông tin vào form bên dưới để đăng ký tham quan trường. 
                    Nhà trường sẽ liên hệ xác nhận và sắp xếp lịch tham quan phù hợp.
                </p>

                <form class="contact-form">
                    <div class="form-group">
                        <label>Họ và tên phụ huynh *</label>
                        <input type="text" name="parent_name" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại *</label>
                        <input type="tel" name="phone" placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <label>Họ và tên học sinh *</label>
                        <input type="text" name="student_name" placeholder="Nhập họ và tên học sinh" required>
                    </div>
                    <div class="form-group">
                        <label>Năm sinh của học sinh *</label>
                        <select name="birth_year" required>
                            <option value="">Chọn năm sinh</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cấp học quan tâm *</label>
                        <select name="grade_level" required>
                            <option value="">Chọn cấp học</option>
                            <option value="tieu-hoc">Tiểu học</option>
                            <option value="thcs">THCS</option>
                            <option value="thpt">THPT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Thời gian tham quan mong muốn</label>
                        <input type="text" name="preferred_time" placeholder="Ví dụ: Sáng thứ 7, tuần sau">
                    </div>
                    <div class="form-group">
                        <label>Ghi chú thêm</label>
                        <textarea name="message" placeholder="Nhập ghi chú hoặc câu hỏi của quý phụ huynh"></textarea>
                    </div>
                    <div style="text-align: center; margin-top: 30px;">
                        <button type="submit" class="btn-dk" style="cursor: pointer;">Gửi đăng ký</button>
                    </div>
                </form>

                <div style="margin-top: 40px; padding: 30px; background: #f9f9f9; border-radius: 10px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    <h3 style="font-size: 20px; color: #471873; margin-bottom: 15px;">Thông tin liên hệ</h3>
                    <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 10px;">
                        <strong>Hotline:</strong> 0934 525 889
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 10px;">
                        <strong>Email:</strong> info@doanthidiem.edu.vn
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #333;">
                        <strong>Địa chỉ:</strong> Khu đô thị Trung Văn, Nam Từ Liêm, Hà Nội
                    </p>
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
