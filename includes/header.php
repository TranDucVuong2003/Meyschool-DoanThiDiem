<section id="header">
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    function isActive($page, $current)
    {
        return ($page === $current) ? 'active' : '';
    }
    ?>
    <div class="wrap header" id="header-navbar">
        <!--===================TOP BAR==========================-->
        <div class="header-top-bar">
            <div class="top-bar-container">
                <div class="top-bar-date">
                    <span class="date-icon">🕐</span>
                    <span class="date-text">Day 20 Month 01 Year 2026</span>
                </div>
                <div class="top-bar-right">
                    <button class="top-bar-btn parent-info-btn">
                        <span class="btn-icon envelope-icon">✉</span>
                        <span class="btn-text">Phụ huynh cần biết gì ?</span>
                    </button>
                    <button class="top-bar-btn search-btn" id="btn-search-top"
                        onclick="document.getElementById('btn-search').click();">
                        <span class="btn-icon search-icon">🔍</span>
                    </button>
                </div>
            </div>
        </div>
        <!--===================MENU PC==========================-->
        <div class="header-pc">
            <div class="header-container-fluid">
                <div class="header-logo">
                    <a href="./index.php">
                        <img src="./assets/logo/logo.png" alt="Đoàn Thị Điểm">
                    </a>
                </div>
                <!--===========HEADER=========-->
                <div class="header-menu">
                    <ul class="menu-list">
                        <li class="menu-item <?php echo isActive('thong-diep-nguoi-sang-lap.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Giới thiệu</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="thong-diep-nguoi-sang-lap.php">
                                        <span>Thông điệp từ Nhà sáng lập</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tam-nhin-su-menh.php">
                                        <span>Tầm nhìn – Sứ mệnh – Giá trị cốt lõi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ban-lanh-dao.php">
                                        <span>Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="doi-ngu-olympia.php">
                                        <span>Đội ngũ giáo viên</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chan-dung-hoc-sinh.php">
                                        <span>Chân dung học sinh Meyschool</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('tuyen-dung.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Tuyển sinh 2026 - 2027</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="thong-tin-tuyen-sinh-tieu-hoc.php">
                                        <span>Thông tin tuyển sinh tiền tiểu học và tiểu học</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="thong-tin-tuyen-sinh-thcs.php">
                                        <span>Thông tin tuyển sinh THCS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="uu-dai-tuyen-sinh.php">
                                        <span>Ưu đãi tuyển sinh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="hoc-bong-2026-2027.php">
                                        <span>Học bổng 2026 - 2027</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cau-hoi-thuong-gap.php">
                                        <span>Câu hỏi thường gặp (FAQ)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dang-ky-tu-van.php">
                                        <span>Đăng ký tư vấn</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('lo-trinh-hoc-tap.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Chương trình đào tạo</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="tong-quan-chuong-trinh.php">
                                        <span>Tổng quan chương trình</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chuong-trinh-tieu-hoc.php">
                                        <span>Chương trình Tiểu học</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chuong-trinh-thcs.php">
                                        <span>Chương trình THCS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="hoat-dong-ngoai-khoa.php">
                                        <span>Hoạt động ngoại khóa</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('co-so-vat-chat.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Cơ sở vật chất</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="tong-quan-campus.php">
                                        <span>Tổng quan campus</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="phong-hoc.php">
                                        <span>Phòng học</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="khu-the-thao.php">
                                        <span>Khu thể thao</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="thu-vien.php">
                                        <span>Thư viện</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="khong-gian-sang-tao.php">
                                        <span>Không gian sáng tạo/ Trò chơi dân gian</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="nha-truyen-thong.php">
                                        <span>Nhà truyền thống</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('dich-vu-xe-dua-don-hoc-sinh.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Dịch vụ học đường</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="dong-phuc-hoc-sinh.php">
                                        <span>Đồng phục học sinh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ban-tru.php">
                                        <span>Bán trú</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="xe-bus-dua-don.php">
                                        <span>Xe Bus đưa đón</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tu-van-tam-ly.php">
                                        <span>Tư vấn tâm lý học đường</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('tin-tuc.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Tin tức</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="tin-hoat-dong.php">
                                        <span>Tin hoạt động</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="thanh-tich.php">
                                        <span>Thành tích</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="su-kien-truong.php">
                                        <span>Sự kiện trường</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="thong-bao.php">
                                        <span>Thông báo</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('lien-he.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Liên hệ</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="lien-he.php">
                                        <span>Thông tin liên hệ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ban-do.php">
                                        <span>Bản đồ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dang-ky-tham-quan.php">
                                        <span>Đăng ký tham quan trường</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    <div class="header-info">
                        <ul class="header-info-list">
                            <li class="info-item"><a href="#" title="" class="search" id="btn-search">
                                    <img src="./olympia/images/pc-header-search.svg" alt=""></a>
                            </li>
                            <li class="info-item">
                                <a href="#" title="Login Canvas" class="account" target="_blank"><img
                                        src="./olympia/images/pc-header-login.svg" alt=""></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--===========MENU MEGA========-->
            </div>
        </div>
        <!---===================MENU MOBILE=====================-->
        <div class="header-mb">
            <div class="header-mb-container" style="height: 70px !important;">
                <div class="header-mb-logo">
                    <a href="./index.php"><img src="./assets/logo/logo.png" alt="Meyschool Đoàn Thị Điểm"
                            style="max-height: 60px !important; width: auto;"></a>
                </div>
                <div class="header-mb-menu">
                    <div class="mb-search">
                        <img src="olympia/images/mb-header-search.svg" alt="">
                    </div>
                    <div class="mb-menu" id="mb-menu-collapse">
                        <img src="olympia/images/mb-header-menu.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="mb-menu-container" id="mb-menu-container">
                <div class="mb-menu-content">
                    <div class="sub-btn-close">
                        <button id="btn-back" class="btn-back">
                            <img src="olympia/images/button-1-3.svg" alt="">
                        </button>
                        <span class="text-uppercase label-menu-sub"></span>
                        <button id="btn-close">
                            <img src="olympia/images/btn-close.svg" alt="">
                        </button>
                    </div>
                    <div class="mb-menu-body">
                        <ul class="mb-menu-list">
                            <li class="mb-menu-item has-children">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="javascript:;">Giới thiệu</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="thong-diep-nguoi-sang-lap.php" title=""
                                                    class="mb-sub-link">Thông điệp từ Nhà sáng lập</a></li>
                                            <li class="mb-sub-item"><a href="tam-nhin-su-menh.php" title=""
                                                    class="mb-sub-link">Tầm nhìn – Sứ mệnh – Giá trị cốt lõi</a></li>
                                            <li class="mb-sub-item"><a href="ban-lanh-dao.php" title=""
                                                    class="mb-sub-link">Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm</a>
                                            </li>
                                            <li class="mb-sub-item"><a href="doi-ngu-olympia.php" title=""
                                                    class="mb-sub-link">Đội ngũ giáo viên</a></li>
                                            <li class="mb-sub-item"><a href="chan-dung-hoc-sinh.php" title=""
                                                    class="mb-sub-link">Chân dung học sinh Meyschool</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="tien-tieu-hoc.php">Tiền tiểu học & Tiểu học</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="tien-tieu-hoc.php" title=""
                                                    class="mb-sub-link">GIỚI THIỆU TIỀN TIỂU HỌC</a></li>
                                            <li class="mb-sub-item"><a href="tieu-hoc.php" title=""
                                                    class="mb-sub-link">GIỚI THIỆU TIỂU HỌC</a></li>
                                            <li class="mb-sub-item"><a href="chuong-trinh-tien-tieu-hoc.php" title=""
                                                    class="mb-sub-link">CHƯƠNG TRÌNH HỌC</a></li>
                                            <li class="mb-sub-item"><a href="hoat-dong-tien-tieu-hoc.php" title=""
                                                    class="mb-sub-link">HOẠT ĐỘNG NGOẠI KHÓA</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="tieu-bieu.php">Olympian tiêu biểu</a>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="lo-trinh-hoc-tap.php"> Chương trình đào tạo</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="tong-quan-chuong-trinh.php" title=""
                                                    class="mb-sub-link">Tổng quan chương trình</a></li>
                                            <li class="mb-sub-item"><a href="chuong-trinh-tieu-hoc.php" title=""
                                                    class="mb-sub-link">Chương trình Tiểu học</a></li>
                                            <li class="mb-sub-item"><a href="chuong-trinh-thcs.php" title=""
                                                    class="mb-sub-link">Chương trình THCS</a></li>
                                            <li class="mb-sub-item"><a href="hoat-dong-ngoai-khoa.php" title=""
                                                    class="mb-sub-link">Hoạt động ngoại khóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="co-so-vat-chat.php">Cơ sở vật chất</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="tong-quan-campus.php" title=""
                                                    class="mb-sub-link">Tổng quan campus</a></li>
                                            <li class="mb-sub-item"><a href="phong-hoc.php" title=""
                                                    class="mb-sub-link">Phòng học</a></li>
                                            <li class="mb-sub-item"><a href="khu-the-thao.php" title=""
                                                    class="mb-sub-link">Khu thể thao</a></li>
                                            <li class="mb-sub-item"><a href="thu-vien.php" title=""
                                                    class="mb-sub-link">Thư viện</a></li>
                                            <li class="mb-sub-item"><a href="khong-gian-sang-tao.php" title=""
                                                    class="mb-sub-link">Không gian sáng tạo/ Trò chơi dân gian</a></li>
                                            <li class="mb-sub-item"><a href="nha-truyen-thong.php" title=""
                                                    class="mb-sub-link">Nhà truyền thống</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="dich-vu-xe-dua-don-hoc-sinh.php">Dịch vụ học đường</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="dong-phuc-hoc-sinh.php" title=""
                                                    class="mb-sub-link">Đồng phục học sinh</a></li>
                                            <li class="mb-sub-item"><a href="ban-tru.php" title=""
                                                    class="mb-sub-link">Bán trú</a></li>
                                            <li class="mb-sub-item"><a href="xe-bus-dua-don.php" title=""
                                                    class="mb-sub-link">Xe Bus đưa đón</a></li>
                                            <li class="mb-sub-item"><a href="tu-van-tam-ly.php" title=""
                                                    class="mb-sub-link">Tư vấn tâm lý học đường</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="tuyen-dung.php">Tuyển sinh 2026 - 2027</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="thong-tin-tuyen-sinh-tieu-hoc.php" title=""
                                                    class="mb-sub-link">Thông tin tuyển sinh tiền tiểu học và tiểu
                                                    học</a></li>
                                            <li class="mb-sub-item"><a href="thong-tin-tuyen-sinh-thcs.php" title=""
                                                    class="mb-sub-link">Thông tin tuyển sinh THCS</a></li>
                                            <li class="mb-sub-item"><a href="uu-dai-tuyen-sinh.php" title=""
                                                    class="mb-sub-link">Ưu đãi tuyển sinh</a></li>
                                            <li class="mb-sub-item"><a href="hoc-bong-2026-2027.php" title=""
                                                    class="mb-sub-link">Học bổng 2026 - 2027</a></li>
                                            <li class="mb-sub-item"><a href="cau-hoi-thuong-gap.php" title=""
                                                    class="mb-sub-link">Câu hỏi thường gặp (FAQ)</a></li>
                                            <li class="mb-sub-item"><a href="dang-ky-tu-van.php" title=""
                                                    class="mb-sub-link">Đăng ký tư vấn</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="index.php">Học bổng - Giải thưởng</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="category/goc-nhin-chuyen-gia.php" title=""
                                                    class="mb-sub-link">HỢP TÁC QUỐC TẾ</a></li>
                                            <li class="mb-sub-item"><a href="thong-tin-du-hoc.php" title=""
                                                    class="mb-sub-link">THÔNG TIN DU HỌC</a></li>
                                            <li class="mb-sub-item"><a href="category/goc-nhin-chuyen-gia.php" title=""
                                                    class="mb-sub-link">THI TÀI NĂNG QUỐC TẾ</a></li>
                                            <li class="mb-sub-item"><a href="category/goc-nhin-chuyen-gia.php" title=""
                                                    class="mb-sub-link">HOẠT ĐỘNG KHỐI SONG NGỮ</a></li>
                                        </ul>


                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="mot-ngay-o-olympia.php">Cuộc sống học đường</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="su-kien.php" title=""
                                                    class="mb-sub-link">THÔNG BÁO</a></li>
                                            <li class="mb-sub-item"><a href="dich-vu-xe-dua-don-hoc-sinh.php" title=""
                                                    class="mb-sub-link">LỊCH HOẠT ĐỘNG</a></li>
                                            <li class="mb-sub-item"><a href="dinh-duong-truong-hoc.php" title=""
                                                    class="mb-sub-link">CÂU CHUYỆN HỌC ĐƯỜNG</a></li>
                                            <li class="mb-sub-item"><a href="dong-phuc-va-hoc-pham.php" title=""
                                                    class="mb-sub-link">DỊCH VỤ BÁN TRÚ - XE BUÝT</a></li>
                                            <li class="mb-sub-item"><a href="dich-vu-y-te.php" title=""
                                                    class="mb-sub-link">THƯ VIỆN ẢNH/VIDEO</a></li>
                                        </ul>


                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="tin-tuc-va-su-kien.php">Hoạt động Olympia</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="tin-tuc.php" title=""
                                                    class="mb-sub-link">Tin tức Olympia</a></li>
                                            <li class="mb-sub-item"><a href="su-kien.php" title=""
                                                    class="mb-sub-link">Sự kiện Olympia</a></li>
                                            <li class="mb-sub-item"><a href="category/goc-nhin-chuyen-gia.php" title=""
                                                    class="mb-sub-link">Góc nhìn chuyên gia</a></li>
                                            <li class="mb-sub-item"><a href="tuyen-dung.php" title=""
                                                    class="mb-sub-link">Tuyển dụng</a></li>
                                        </ul>


                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="faq.php">Góc phụ huynh</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="faq.php" title="" class="mb-sub-link">Câu
                                                    hỏi thường gặp</a></li>
                                            <li class="mb-sub-item"><a href="#" title="" class="mb-sub-link">Canvas</a>
                                            </li>
                                            <li class="mb-sub-item"><a href="category/talkshow.php" title=""
                                                    class="mb-sub-link">Talkshow</a></li>
                                            <li class="mb-sub-item"><a href="https://onepay.vn/olympia/" title=""
                                                    class="mb-sub-link">Thanh toán trực tuyến</a></li>
                                        </ul>


                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="tin-tuc.php">Tin tức</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="tin-hoat-dong.php" title=""
                                                    class="mb-sub-link">Tin hoạt động</a></li>
                                            <li class="mb-sub-item"><a href="thanh-tich.php" title=""
                                                    class="mb-sub-link">Thành tích</a></li>
                                            <li class="mb-sub-item"><a href="su-kien-truong.php" title=""
                                                    class="mb-sub-link">Sự kiện trường</a></li>
                                            <li class="mb-sub-item"><a href="thong-bao.php" title=""
                                                    class="mb-sub-link">Thông báo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item  has-children ">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="lien-he.php">Liên hệ</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="lien-he.php" title=""
                                                    class="mb-sub-link">Thông tin liên hệ</a></li>
                                            <li class="mb-sub-item"><a href="ban-do.php" title=""
                                                    class="mb-sub-link">Bản đồ</a></li>
                                            <li class="mb-sub-item"><a href="dang-ky-tham-quan.php" title=""
                                                    class="mb-sub-link">Đăng ký tham quan trường</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>


                    </div>
                    <div class="mb-info-modal" id="info-email" style="display: none">
                        <div class="modal-content">
                            <p class="modal-title text-center text-uppercase">Email</p>
                            <p class="model-text font-garamond-bold">info@doanthidiem.edu.vn</p>
                            <a href="#" class="link-button righthover link-big  purple">Gửi email
                                <img src="olympia/images/button-1-3.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mb-info-modal modal" id="info-phone" style="display: none">
                        <div class="modal-content">
                            <p class="modal-title text-center text-uppercase">hotline</p>
                            <div class="number-phone-box">
                                <p class="phone-title"> Tuyển sinh</p>
                                <p class="phone-number font-garamond-bold">
                                    <a href="tel:+84934525889" class="phone-number font-garamond-bold">0934 525
                                        889</a>
                                </p>
                            </div>
                            <div class="number-phone-box">
                                <p class="phone-title"> Đối tác</p>
                                <p class="phone-number font-garamond-bold">0246 2677 999</p>
                            </div>
                            <a href="#" title="" class="link-button righthover link-big  purple">Đăng kí tư vấn
                                <img src="olympia/images/button-1-3.svg" alt="">
                            </a>
                            <a href="#" title="" class="link-button righthover link-big  purple">Cơ hội nghề nghiệp
                                <img src="olympia/images/button-1-3.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="mb-info-modal" id="info-address" style="display: none">
                        <div class="modal-content">
                            <p class="modal-title text-center text-uppercase">Địa chỉ</p>
                            <p class="model-text font-garamond-bold">KĐT Trung Văn, Nam Từ Liêm, Hà Nội</p>
                            <a href="#" class="link-button righthover link-big  purple">Chỉ đường
                                <img src="olympia/images/button-1-3.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mb-menu-info">
                    <span class="mb-info-icon" id="icon-email"><img class="icon-email"
                            src="olympia/images/icon-email.svg" alt=""></span>
                    <span class="mb-info-icon" id="icon-phone"><img class="icon-call" src="olympia/images/icon-call.svg"
                            alt=""></span>
                    <span class="mb-info-icon" id="icon-address"><img class="icon-location"
                            src="olympia/images/icon-location.svg" alt=""></span>
                </div>
            </div>
        </div>
        <!--===========SEARCH PAGE========-->
        <div class="search-pc">
            <div class="search-header">
                <div class="search-toolbar">
                    <div class="icon-logo"><img src="olympia/images/pc-00-search-logo.svg" alt=""></div>
                    <div class="btn-search-close" id="btn-search-close"><img src="olympia/images/pc-00-search-close.svg"
                            alt="">
                    </div>
                </div>
                <div class="form-search-lp">
                    <form action="./search" id="form-search">
                        <p class="title-search size-13 color-f8f0ff text-uppercase">Tìm kiếm</p>
                        <div class="search-input">
                            <input type="text" name="q" class="search-input-lp pc-input-search" id="search-key"
                                placeholder="Nhập từ khoá tìm kiếm">
                            <img class="icon-search icon-search-js" src="olympia/images/pc-00-search-search.svg" alt="">
                        </div>
                    </form>
                </div>
            </div>
            <div class="no-result">

            </div>
        </div>
    </div>

</section>