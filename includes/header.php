<section id="header">
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    function isActive($page, $current)
    {
        return ($page === $current) ? 'active' : '';
    }
    require_once __DIR__ . '/site-settings.php';
    $ss = load_site_settings();
    $ss_hotline_tel = site_phone_to_tel($ss['hotline']);
    ?>
    <style>
        .header-menu {
            justify-content: center !important;
            position: relative;
            padding-right: 132px;
        }

        .header-menu .menu-list {
            margin: 0 auto;
            justify-content: center;
        }

        .header-contact-quick {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #439bd4;
            color: #fff;
            text-decoration: none;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            border-radius: 999px;
            padding: 8px 14px;
            margin-right: 0;
            box-shadow: 0 8px 18px rgba(67, 155, 212, 0.25);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            white-space: nowrap;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .header-contact-quick:hover {
            transform: translateY(calc(-50% - 1px));
            box-shadow: 0 10px 20px rgba(67, 155, 212, 0.3);
        }

        .header-contact-quick .phone-ico {
            font-size: 14px;
            line-height: 1;
            color: #ffe08a;
        }

        @media (max-width: 1200px) {
            .header-pc {
                display: none;
            }

            .header-mb {
                display: block;
            }

            .header-menu {
                padding-right: 64px;
            }

            .header-contact-quick {
                padding: 8px;
                margin-right: 10px;
            }

            .header-contact-quick span {
                display: none;
            }
        }
    </style>
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
                </div>
            </div>
        </div>
        <!--===================MENU PC==========================-->
        <div class="header-pc">
            <div class="header-container-fluid">
                <div class="header-logo">
                    <a href="./">
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
                                    <a href="thong-diep-nguoi-sang-lap">
                                        <span>Thông điệp từ Nhà sáng lập</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tam-nhin-su-menh">
                                        <span>Tầm nhìn – Sứ mệnh – Giá trị cốt lõi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ban-lanh-dao">
                                        <span>Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm</span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="doi-ngu-meyschool">
                                        <span>Giới thiệu đội ngũ</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="chan-dung-hoc-sinh">
                                        <span>Chân dung học sinh Meyschool</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('doi-ngu-meyschool.php', $current_page); ?>">
                            <a href="doi-ngu-meyschool" title="" class="menu_link">Giới thiệu đội ngũ</a>
                        </li>
                        <li class="menu-item <?php echo isActive('tuyen-dung.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Tuyển sinh 2026 - 2027</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="thong-tin-tuyen-sinh-tieu-hoc">
                                        <span>Thông tin tuyển sinh tiền tiểu học và tiểu học</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="thong-tin-tuyen-sinh-thcs">
                                        <span>Thông tin tuyển sinh THCS</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="uu-dai-tuyen-sinh">
                                        <span>Ưu đãi tuyển sinh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="hoc-bong-2026-2027">
                                        <span>Học bổng 2026 - 2027</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cau-hoi-thuong-gap">
                                        <span>Câu hỏi thường gặp (FAQ)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dang-ky-tu-van">
                                        <span>Đăng ký tư vấn</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('chuong-trinh-dao-tao.php', $current_page); ?>">
                            <a href="chuong-trinh-dao-tao" title="" class="menu_link">Chương trình đào tạo</a>
                        </li>
                        <li class="menu-item <?php echo isActive('co-so-vat-chat.php', $current_page); ?>">
                            <a href="co-so-vat-chat" title="" class="menu_link">Cơ sở vật chất</a>
                        </li>
                        <li class="menu-item <?php echo isActive('dich-vu-xe-dua-don-hoc-sinh.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Dịch vụ học đường</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="dong-phuc-hoc-sinh">
                                        <span>Đồng phục học sinh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ban-tru">
                                        <span>Bán trú</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="xe-bus-dua-don">
                                        <span>Xe Bus đưa đón</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="y-te-va-tu-van-tam-ly">
                                        <span>Y tế và tư vấn tâm lý học đường</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('tin-tuc.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Tin tức</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="tin-tuc">
                                        <span>Tin tức</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="thanh-tich">
                                        <span>Thành tích</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="su-kien-truong">
                                        <span>Sự kiện trường</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="thong-bao">
                                        <span>Thông báo</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo isActive('lien-he.php', $current_page); ?>">
                            <a href="javascript:void(0)" title="" class="menu_link">Liên hệ</a>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="lien-he">
                                        <span>Thông tin liên hệ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ban-do">
                                        <span>Bản đồ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dang-ky-tham-quan">
                                        <span>Đăng ký tham quan trường</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <a href="lien-he" class="header-contact-quick" aria-label="Liên hệ">
                        <span class="phone-ico" aria-hidden="true">☎</span>
                        <span>Liên hệ</span>
                    </a>


                    <!-- <div class="header-info">
                        <ul class="header-info-list">
                        </ul>
                    </div> -->
                </div>
                <!--===========MENU MEGA========-->
            </div>
        </div>
        <!---===================MENU MOBILE=====================-->
        <div class="header-mb">
            <div class="header-mb-container" style="height: 70px !important;">
                <div class="header-mb-logo">
                    <a href="./"><img src="./assets/logo/logo.png" alt="Meyschool Đoàn Thị Điểm"
                            style="max-height: 60px !important; width: auto;"></a>
                </div>
                <div class="header-mb-menu">
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
                                            <li class="mb-sub-item"><a href="thong-diep-nguoi-sang-lap" title=""
                                                    class="mb-sub-link">Thông điệp từ Nhà sáng lập</a></li>
                                            <li class="mb-sub-item"><a href="tam-nhin-su-menh" title=""
                                                    class="mb-sub-link">Tầm nhìn – Sứ mệnh – Giá trị cốt lõi</a></li>
                                            <li class="mb-sub-item"><a href="ban-lanh-dao" title=""
                                                    class="mb-sub-link">Ban lãnh đạo Trường Meyschool Đoàn Thị Điểm</a>
                                            </li>
                                            <li class="mb-sub-item"><a href="doi-ngu-meyschool" title=""
                                                    class="mb-sub-link">Giới thiệu đội ngũ</a></li>
                                            <li class="mb-sub-item"><a href="chan-dung-hoc-sinh" title=""
                                                    class="mb-sub-link">Chân dung học sinh Meyschool</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item has-children">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="javascript:;">Tuyển sinh 2026 - 2027</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="thong-tin-tuyen-sinh-tieu-hoc" title=""
                                                    class="mb-sub-link">Thông tin tuyển sinh tiền tiểu học và tiểu
                                                    học</a></li>
                                            <li class="mb-sub-item"><a href="thong-tin-tuyen-sinh-thcs" title=""
                                                    class="mb-sub-link">Thông tin tuyển sinh THCS</a></li>
                                            <li class="mb-sub-item"><a href="uu-dai-tuyen-sinh" title=""
                                                    class="mb-sub-link">Ưu đãi tuyển sinh</a></li>
                                            <li class="mb-sub-item"><a href="hoc-bong-2026-2027" title=""
                                                    class="mb-sub-link">Học bổng 2026 - 2027</a></li>
                                            <li class="mb-sub-item"><a href="cau-hoi-thuong-gap" title=""
                                                    class="mb-sub-link">Câu hỏi thường gặp (FAQ)</a></li>
                                            <li class="mb-sub-item"><a href="dang-ky-tu-van" title=""
                                                    class="mb-sub-link">Đăng ký tư vấn</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="chuong-trinh-dao-tao">Chương trình đào tạo</a>
                                </div>
                            </li>
                            <li class="mb-menu-item">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="co-so-vat-chat">Cơ sở vật chất</a>
                                </div>
                            </li>
                            <li class="mb-menu-item has-children">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="javascript:;">Dịch vụ học đường</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="dong-phuc-hoc-sinh" title=""
                                                    class="mb-sub-link">Đồng phục học sinh</a></li>
                                            <li class="mb-sub-item"><a href="ban-tru" title=""
                                                    class="mb-sub-link">Bán trú</a></li>
                                            <li class="mb-sub-item"><a href="xe-bus-dua-don" title=""
                                                    class="mb-sub-link">Xe Bus đưa đón</a></li>
                                            <li class="mb-sub-item"><a href="y-te-va-tu-van-tam-ly" title=""
                                                    class="mb-sub-link">Y tế và tư vấn tâm lý học đường</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item has-children">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="javascript:;">Tin tức</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="tin-tuc" title=""
                                                    class="mb-sub-link">Tin tức</a></li>
                                            <li class="mb-sub-item"><a href="thanh-tich" title=""
                                                    class="mb-sub-link">Thành tích</a></li>
                                            <li class="mb-sub-item"><a href="su-kien-truong" title=""
                                                    class="mb-sub-link">Sự kiện trường</a></li>
                                            <li class="mb-sub-item"><a href="thong-bao" title=""
                                                    class="mb-sub-link">Thông báo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-menu-item has-children">
                                <div class="mb-menu-item-box">
                                    <a class="mb-menu-link" href="javascript:;">Liên hệ</a>
                                </div>
                                <div class="mb-menu-sub">
                                    <div class="mb-menu-body">
                                        <ul class="mb-menu-sub-list">
                                            <li class="mb-sub-item"><a href="lien-he" title=""
                                                    class="mb-sub-link">Thông tin liên hệ</a></li>
                                            <li class="mb-sub-item"><a href="ban-do" title=""
                                                    class="mb-sub-link">Bản đồ</a></li>
                                            <li class="mb-sub-item"><a href="dang-ky-tham-quan" title=""
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
                            <p class="model-text font-garamond-bold"><?= htmlspecialchars($ss['email']) ?></p>
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
                                    <a href="tel:<?= htmlspecialchars($ss_hotline_tel) ?>"
                                        class="phone-number font-garamond-bold"><?= htmlspecialchars($ss['hotline']) ?></a>
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
                            <p class="model-text font-garamond-bold"><?= htmlspecialchars($ss['address']) ?></p>
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