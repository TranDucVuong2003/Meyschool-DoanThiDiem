<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Bán trú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Bán trú">
    <meta property="og:description" content="">
    <meta property="og:url" content="ban-tru.html">
    <meta property="og:type" content="article">
    <meta property="og:image" content="assets/img/favicon.png">
    <meta name="twitter:title" content="Bán trú">
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
        margin-bottom: 110px;
    }

    .boarding-content .boarding-text-card {
        background: #fff;
        border-radius: 22px;
        box-shadow: 0 14px 30px rgba(23, 52, 93, .08);
        border: 1px solid rgba(67, 155, 212, .14);
        padding: 36px 40px;
    }

    .boarding-content .boarding-text-card>p:first-child {
        font-size: 16px;
        line-height: 1.85;
        color: #2c4963;
        margin: 0 0 28px;
    }

    .boarding-content h3 {
        font-family: 'Garamond', serif;
        font-size: 22px;
        color: var(--blue-1);
        margin: 28px 0 12px;
        padding-bottom: 8px;
        border-bottom: 2px solid var(--blue-soft);
    }

    .boarding-content h3:first-of-type {
        margin-top: 0;
    }

    .boarding-content ul {
        list-style: none;
        padding: 0;
        margin: 0 0 8px;
    }

    .boarding-content li {
        position: relative;
        padding-left: 20px;
        font-size: 15px;
        line-height: 1.8;
        color: #3f6686;
        margin-bottom: 6px;
    }

    .boarding-content li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 11px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--blue-2);
    }

    .boarding-content ol {
        padding-left: 20px;
        margin: 0 0 8px;
    }

    .boarding-content ol li {
        padding-left: 6px;
        list-style: decimal;
    }

    .boarding-content ol li::before {
        display: none;
    }

    .boarding-content .boarding-note {
        margin-top: 28px;
        background: #fffbeb;
        border: 1px solid #fcd34d;
        border-radius: 14px;
        padding: 18px 22px;
        font-size: 14px;
        color: #78350f;
        line-height: 1.75;
    }

    .boarding-content .boarding-note strong {
        color: #92400e;
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
                        <li class="breadcrumb-item active">Bán trú</li>
                    </ol>
                    <h1>Dịch vụ bán trú</h1>
                    <p>Không gian bán trú an toàn, thoáng mát với lịch sinh hoạt khoa học giúp học sinh nghỉ ngơi và tái
                        tạo năng lượng sau giờ học. Thực đơn dinh dưỡng được xây dựng bởi chuyên gia, đảm bảo sức khỏe
                        toàn diện cho trẻ.</p>
                    <div class="boarding-highlights">
                        <span>Thực đơn dinh dưỡng cân bằng</span>
                        <span>Giám sát an toàn thực phẩm</span>
                        <span>Nghỉ trưa khoa học</span>
                    </div>
                </div>
                <div class="boarding-card">
                    <img src="assets/img/ban-tru/anh-ban-tru.png" alt="Bán trú Meyschool">
                    <div class="boarding-metrics">
                        <div><b>2</b><span>Bữa ăn mỗi ngày</span></div>
                        <div><b>100%</b><span>Thực phẩm sạch</span></div>
                        <div><b>30'</b><span>Nghỉ trưa phục hồi</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="boarding-content">
            <div class="boarding-container">
                <div class="boarding-text-card" data-aos="fade-up">
                    <p>Trường TH, THCS Meyschool Đoàn Thị Điểm cung cấp dịch vụ bán trú phục vụ học sinh học 2
                        buổi/ngày, đảm bảo dinh dưỡng và vệ sinh an toàn thực phẩm.</p>

                    <h3>1.1. Cơ sở vật chất và quy trình</h3>
                    <ul>
                        <li>Bếp ăn tập thể được thiết kế theo nguyên tắc bếp một chiều đảm bảo vệ sinh an toàn thực
                            phẩm.</li>
                        <li>Toàn bộ quy trình từ khâu nhập nguyên liệu đến chế biến và phục vụ đều được kiểm soát nghiêm
                            ngặt để đảm bảo an toàn tối đa.</li>
                    </ul>

                    <h3>1.2. Nguồn thực phẩm và thực đơn</h3>
                    <ul>
                        <li>Thực phẩm được cung cấp bởi các đơn vị uy tín, có giấy chứng nhận an toàn thực phẩm và được
                            truy xuất nguồn gốc rõ ràng.</li>
                        <li>Thực đơn đa dạng, dinh dưỡng được cân đối trên phần mềm dinh dưỡng, xây dựng theo độ tuổi,
                            được công khai hàng tuần để cha mẹ học sinh dễ dàng theo dõi.</li>
                    </ul>

                    <h3>1.3. Phục vụ bán trú</h3>
                    <ol>
                        <li>100% học sinh ăn trưa tại trường, ngoài bữa ăn chính học sinh được phục vụ 2 bữa ăn phụ vào
                            giờ ra chơi buổi sáng và buổi chiều. Nhà trường có cung cấp bữa sáng cho toàn thể học sinh
                            các lớp theo nhu cầu của học sinh và cha mẹ học sinh. Toàn trường đều sử dụng nước uống
                            Lavie, nước lọc.</li>
                        <li>Học sinh ăn tại phòng ăn và ngủ trưa tại lớp. Mỗi lớp có cán bộ bán trú phụ trách để quản lý
                            nền nếp trong giờ ăn, giờ ngủ, đảm bảo học sinh được nghỉ ngơi an toàn. Lớp học được trang
                            bị đầy đủ đồ dùng bán trú cần thiết, đảm bảo chăm sóc tốt nhất cho học sinh.</li>
                        <li>Rèn luyện thói quen: Các hoạt động bán trú được lồng ghép để rèn cho học sinh thói quen tự
                            phục vụ, tự giác trong ăn uống, và hình thành nếp sống văn minh lành mạnh.</li>
                    </ol>

                    <div class="boarding-note">
                        <strong>Lưu ý:</strong> Để Nhà trường có thể kiểm soát vấn đề vệ sinh an toàn thực phẩm, cũng
                        như phòng tránh các nguy cơ ngộ độc thực phẩm từ nguồn thức ăn bên ngoài và vấn nạn thực phẩm
                        không rõ nguồn gốc trên thị trường, Trường TH, THCS Meyschool Đoàn Thị Điểm quy định học sinh và
                        cha mẹ học sinh không mang bất kỳ loại thức ăn, đồ uống từ bên ngoài vào trường.<br><br>
                        Trường hợp học sinh phải ăn kiêng, điều trị bệnh,... Đề nghị cha mẹ học sinh liên hệ với Nhà
                        trường để có phương án tốt nhất cho học sinh.
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