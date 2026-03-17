<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <link rel="shortcut icon" href="storage/favicon.png">

    <title>Chân dung học sinh Meyschool</title>
    <meta name="description" content="Chân dung học sinh tại Meyschool - Những công dân toàn cầu tương lai">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="The Olympia Schools">
    <meta property="og:title" content="Chân dung học sinh Meyschool">
    <meta property="og:description" content="Chân dung học sinh tại Meyschool - Những công dân toàn cầu tương lai">
    <meta property="og:url" content="chan-dung-hoc-sinh.html">
    <meta property="og:type" content="article">
    <meta name="twitter:title" content="Chân dung học sinh Meyschool">
    <meta name="twitter:description" content="Chân dung học sinh tại Meyschool - Những công dân toàn cầu tương lai">

    <link media="all" type="text/css" rel="stylesheet"
        href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">

    <link rel="alternate" href="en/student-profile.html" hreflang="en" />
    <link rel="alternate" href="chan-dung-hoc-sinh.html" hreflang="vi" />

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

        .student-profile-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .profile-intro {
            text-align: center;
            margin-bottom: 60px;
        }

        .profile-intro h2 {
            font-size: 36px;
            color: #471873;
            margin-bottom: 20px;
        }

        .profile-intro p {
            font-size: 16px;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            color: #555;
        }

        .qualities-section {
            margin-bottom: 60px;
        }

        .qualities-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .quality-card {
            padding: 40px;
            background: #f9f9f9;
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .quality-card:hover {
            transform: translateY(-5px);
            background: #471873;
            color: white;
        }

        .quality-card:hover .quality-title,
        .quality-card:hover .quality-subtitle,
        .quality-card:hover .quality-desc {
            color: white;
        }

        .quality-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .quality-title {
            font-size: 24px;
            color: #471873;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .quality-subtitle {
            font-size: 14px;
            color: #888;
            font-style: italic;
            margin-bottom: 15px;
        }

        .quality-desc {
            font-size: 14px;
            line-height: 1.6;
            color: #666;
        }

        .student-showcase {
            margin-bottom: 60px;
            padding: 40px 0;
            background: #f9f9f9;
        }

        .testimonial-swiper {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            gap: 60px;
            padding: 40px;
        }

        .testimonial-content {
            flex: 1;
        }

        .testimonial-quote {
            font-size: 22px;
            color: #333;
            line-height: 1.6;
            margin-bottom: 20px;
            font-style: italic;
        }

        .testimonial-name {
            font-size: 20px;
            color: #471873;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .testimonial-info {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        .testimonial-image {
            flex: 0 0 300px;
            text-align: center;
        }

        .testimonial-image img {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 10px 30px rgba(71, 24, 115, 0.3);
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #ddd;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background: #471873;
        }

        .showcase-title {
            font-size: 32px;
            color: #471873;
            text-align: center;
            margin-bottom: 40px;
        }

        .student-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .student-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .student-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            background: linear-gradient(135deg, #471873 0%, #6a1b9a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 64px;
        }

        .student-info {
            padding: 25px;
        }

        .student-name {
            font-size: 18px;
            color: #471873;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .student-class {
            font-size: 14px;
            color: #888;
            margin-bottom: 15px;
        }

        .student-achievement {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
            font-style: italic;
        }

        .achievements-banner {
            background: linear-gradient(135deg, #471873 0%, #6a1b9a 100%);
            color: white;
            padding: 60px 40px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 60px;
        }

        .achievements-banner h3 {
            font-size: 28px;
            margin-bottom: 30px;
        }

        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 30px;
        }

        .stat-box {
            text-align: center;
        }

        .stat-number-white {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .stat-label-white {
            font-size: 14px;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .qualities-grid {
                grid-template-columns: 1fr;
            }

            .stats-row {
                grid-template-columns: repeat(2, 1fr);
            }

            .testimonial-swiper .swiper-slide {
                flex-direction: column-reverse;
                gap: 30px;
                padding: 20px;
            }

            .testimonial-image {
                flex: none;
            }

            .testimonial-image img {
                width: 200px;
                height: 200px;
            }

            .testimonial-quote {
                font-size: 18px;
                text-align: center;
            }

            .testimonial-name {
                text-align: center;
            }

            .testimonial-info {
                text-align: center;
            }
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
                        <li class="breadcrumb-item white"><a href="javascript:;" class="white">Chân dung học sinh</a></li>
                    </ol>
                    <h1 class="big__header-title container font-garamond-bold white header-title">
                        Chân dung học sinh Meyschool</h1>
                </div>
            </div>
        </section>

        <section class="student-showcase">
            <h3 class="showcase-title font-garamond-bold">Học sinh tiêu biểu</h3>
            <div class="testimonial-swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <p class="testimonial-quote">"Tôi rất tự hào khi được học tại Meyschool. Trường đã giúp tôi phát hiện và phát triển niềm đam mê Toán học. Huy chương Vàng Olympic Toán Quốc tế và học bổng Stanford là những thành quả từ sự đồng hành của thầy cô."</p>
                            <p class="testimonial-name font-garamond-bold">Nguyễn Thị Anh Thư</p>
                            <p class="testimonial-info">Lớp 12 - Chuyên Toán<br>Huy chương Vàng Olympic Toán 2024 - Thủ khoa Stanford</p>
                        </div>
                        <div class="testimonial-image">
                            <img src="storage/doi-ngu-olym/nguyen-thi-thu-thao.png" alt="Nguyễn Thị Anh Thư">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <p class="testimonial-quote">"Meyschool đã cho tôi cơ hội thực hiện đam mê nghiên cứu khoa học. Dự án 'Hệ thống lọc nước biển' của tôi được đề cử giải thưởng quốc tế nhờ sự hướng dẫn tận tâm của thầy cô."</p>
                            <p class="testimonial-name font-garamond-bold">Trần Minh Khôi</p>
                            <p class="testimonial-info">Lớp 11 - Chuyên Lý<br>Giải Nhất Khoa học Kỹ thuật Quốc gia</p>
                        </div>
                        <div class="testimonial-image">
                            <img src="storage/doi-ngu-olym/tran-quoc-dan-2.png" alt="Trần Minh Khôi">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <p class="testimonial-quote">"Nhờ môi trường song ngữ tại Meyschool, tôi tự tin giao tiếp và đại diện cho thanh niên Việt Nam tại hội nghị ASEAN. Đây là trải nghiệm quý giá mà tôi không thể có ở nơi khác."</p>
                            <p class="testimonial-name font-garamond-bold">Lê Ngọc Bảo An</p>
                            <p class="testimonial-info">Lớp 10 - Song ngữ<br>Giải Nhất Hùng biện tiếng Anh toàn quốc - Đại sứ văn hóa ASEAN</p>
                        </div>
                        <div class="testimonial-image">
                            <img src="storage/doi-ngu-olym/do-thi-bao-linh-2.jpg" alt="Lê Ngọc Bảo An">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <p class="testimonial-quote">"Meyschool không chỉ dạy tôi kiến thức mà còn dạy cách tư duy khoa học. 3 bài báo quốc tế và Huy chương Bạc Olympic Hóa học Châu Á là minh chứng cho phương pháp giáo dục xuất sắc tại đây."</p>
                            <p class="testimonial-name font-garamond-bold">Phạm Quang Vinh</p>
                            <p class="testimonial-info">Lớp 12 - Chuyên Hóa<br>Huy chương Bạc Olympic Hóa học Châu Á - Tác giả 3 bài báo quốc tế</p>
                        </div>
                        <div class="testimonial-image">
                            <img src="storage/doi-ngu-olym/hoang-diep-trinh-2.png" alt="Phạm Quang Vinh">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <p class="testimonial-quote">"Nhờ sự phát hiện và bồi dưỡng của thầy cô Meyschool, tôi được biểu diễn tại Nhà hát Lớn và đoạt giải Piano quốc tế Steinway. Đây là ước mơ thành hiện thực."</p>
                            <p class="testimonial-name font-garamond-bold">Hoàng Thảo Vy</p>
                            <p class="testimonial-info">Lớp 9 - Năng khiếu<br>Nghệ sĩ Piano trẻ tuổi nhất Nhà hát Lớn - Giải Nhất Steinway</p>
                        </div>
                        <div class="testimonial-image">
                            <img src="storage/doi-ngu-olym/pham-hai-ha.png" alt="Hoàng Thảo Vy">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-content">
                            <p class="testimonial-quote">"Meyschool đã trang bị cho tôi tư duy lập trình và tinh thần sáng tạo. Huy chương Vàng IOI 2024 và dự án EduTech giúp học sinh vùng cao là niềm tự hào của tôi."</p>
                            <p class="testimonial-name font-garamond-bold">Vũ Hoàng Long</p>
                            <p class="testimonial-info">Lớp 12 - Chuyên Tin<br>Huy chương Vàng IOI 2024 - Founder EduTech</p>
                        </div>
                        <div class="testimonial-image">
                            <img src="storage/doi-ngu-olym/nguyen-mai-phuong.png" alt="Vũ Hoàng Long">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="student-profile-content">
            <div class="profile-intro">
                <h2 class="font-garamond-bold">Học sinh Meyschool - Công dân toàn cầu tương lai</h2>
                <p>Tại Meyschool, chúng tôi không chỉ đào tạo học sinh giỏi về kiến thức mà còn chú trọng phát triển toàn diện các phẩm chất và năng lực cần thiết để trở thành công dân toàn cầu trong thế kỷ 21. Mỗi học sinh Meyschool đều mang trong mình những giá trị cốt lõi và kỹ năng vượt trội.</p>
            </div>

            <div class="qualities-section">
                <div class="qualities-grid">
                    <div class="quality-card">
                        <div class="quality-icon">🎓</div>
                        <h3 class="quality-title font-garamond-bold">Tự hào</h3>
                        <p class="quality-subtitle">Proud Global Citizens</p>
                        <p class="quality-desc">Tự hào và hành động theo những truyền thống và giá trị tốt đẹp của nền văn hóa, của trường học và của bản thân. Cân bằng giữa truyền thống và hiện đại.</p>
                    </div>

                    <div class="quality-card">
                        <div class="quality-icon">💝</div>
                        <h3 class="quality-title font-garamond-bold">Thấu cảm</h3>
                        <p class="quality-subtitle">Empathetic</p>
                        <p class="quality-desc">Nỗ lực thấu hiểu, quan tâm đến suy nghĩ, cảm xúc của người khác. Hợp tác trong sự hiểu biết lẫn nhau để làm cho thế giới tốt đẹp hơn.</p>
                    </div>

                    <div class="quality-card">
                        <div class="quality-icon">🤝</div>
                        <h3 class="quality-title font-garamond-bold">Giao tiếp tôn trọng</h3>
                        <p class="quality-subtitle">Respectful Communicators</p>
                        <p class="quality-desc">Thể hiện bản thân rõ ràng và tự tin. Giao tiếp và đối xử mọi người với sự tôn trọng và bình đẳng, bất kể bối cảnh cá nhân, giới tính, địa vị.</p>
                    </div>

                    <div class="quality-card">
                        <div class="quality-icon">💪</div>
                        <h3 class="quality-title font-garamond-bold">Kiên định</h3>
                        <p class="quality-subtitle">Perseverant</p>
                        <p class="quality-desc">Đặt ra mục tiêu và nỗ lực bền bỉ để đạt được mục tiêu, dù công việc có thử thách đến đâu đi nữa. Không bỏ cuộc trước khó khăn.</p>
                    </div>

                    <div class="quality-card">
                        <div class="quality-icon">⭐</div>
                        <h3 class="quality-title font-garamond-bold">Trách nhiệm</h3>
                        <p class="quality-subtitle">Responsible</p>
                        <p class="quality-desc">Hoàn thành những việc được giao cho cá nhân và trong đội nhóm, chịu trách nhiệm với kết quả mà không vội vàng đổ lỗi cho người khác.</p>
                    </div>

                    <div class="quality-card">
                        <div class="quality-icon">🔍</div>
                        <h3 class="quality-title font-garamond-bold">Thích ứng, ham học hỏi</h3>
                        <p class="quality-subtitle">Agile Inquirers</p>
                        <p class="quality-desc">Nuôi dưỡng trí tò mò thông qua học hỏi và nghiên cứu. Cởi mở trước cơ hội học tập. Bình tĩnh và lạc quan trước khó khăn, sẵn sàng điều chỉnh, thích ứng.</p>
                    </div>

                    <div class="quality-card">
                        <div class="quality-icon">💡</div>
                        <h3 class="quality-title font-garamond-bold">Tư duy và sáng tạo xuất sắc</h3>
                        <p class="quality-subtitle">Excellent Thinkers & Creators</p>
                        <p class="quality-desc">Tiếp nhận kiến thức từ nhiều góc nhìn. Tiếp cận vấn đề bằng tư duy phản biện và sáng tạo. Kiến tạo giải pháp cho những vấn đề của cộng đồng.</p>
                    </div>

                    <div class="quality-card">
                        <div class="quality-icon">🌍</div>
                        <h3 class="quality-title font-garamond-bold">Công dân toàn cầu</h3>
                        <p class="quality-subtitle">Global Citizens</p>
                        <p class="quality-desc">Có kiến thức và kỹ năng để hoạt động hiệu quả trong môi trường quốc tế. Tôn trọng đa dạng văn hóa và đóng góp tích cực cho cộng đồng toàn cầu.</p>
                    </div>
                </div>
            </div>

            <div class="achievements-banner">
                <h3 class="font-garamond-bold">Thành tựu nổi bật của học sinh Meyschool</h3>
                <div class="stats-row">
                    <div class="stat-box">
                        <div class="stat-number-white font-garamond-bold">95%</div>
                        <div class="stat-label-white">Đỗ vào trường TOP</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number-white font-garamond-bold">50+</div>
                        <div class="stat-label-white">Giải thi đấu Quốc gia</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number-white font-garamond-bold">100+</div>
                        <div class="stat-label-white">Học sinh giỏi cấp Thành</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number-white font-garamond-bold">30+</div>
                        <div class="stat-label-white">Học bổng Quốc tế</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script type="text/javascript" src="olympia/js/jquery.toast.min.js"></script>
    <script type="text/javascript" src="olympia/js/jquery.validate.min.js"></script>
    <script src="olympia/js/main.js"></script>
    <script>
        // Initialize Swiper for testimonial slider
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.testimonial-swiper', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                grabCursor: true,
                touchRatio: 1,
                simulateTouch: true,
                allowTouchMove: true,
                threshold: 10,
                touchStartPreventDefault: false,
            });
        });
    </script>
</body>

</html>