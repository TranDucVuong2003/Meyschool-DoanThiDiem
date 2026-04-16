<?php
require_once __DIR__ . '/site-settings.php';
$ss = load_site_settings();
$ss_hotline_tel = site_phone_to_tel($ss['hotline']);
$ss_fanpage_encoded = urlencode($ss['fanpage']);
?>

<section id="footer" class="">
    <div class="footer footer-modern">
        <div class="container">
            <div class="footer-modern-grid">
                <div class="footer-modern-col footer-brand">
                    <a href="../index.php" title="" class="ft_logo_lg">
                        <img class="footer-logo-img" src="../assets/logo/logo.png" alt="Meyschool Đoàn Thị Điểm">
                    </a>
                    <div class="footer-social">
                        <a href="<?= htmlspecialchars($ss['fanpage']) ?>" target="_blank">
                            <img src="../olympia/images/facebook.svg" alt="Facebook">
                        </a>
                        <a href="<?= htmlspecialchars($ss['tiktok']) ?>" target="_blank">
                            <img src="../olympia/images/tiktok.svg" alt="Tiktok">
                        </a>
                    </div>
                </div>
                <div class="footer-modern-col">
                    <span class="footer-modern-title">Thông tin liên hệ</span>
                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <p class="contact-item-value">Địa chỉ: <?= htmlspecialchars($ss['address']) ?></p>
                        </li>
                        <li class="footer-contact-item">
                            <p class="contact-item-value">Hotline: <a
                                    href="tel:<?= htmlspecialchars($ss_hotline_tel) ?>"
                                    class="address-phone-number"><?= htmlspecialchars($ss['hotline']) ?></a></p>
                        </li>
                        <li class="footer-contact-item">
                            <p class="contact-item-value">Email: <?= htmlspecialchars($ss['email']) ?></p>
                        </li>
                        <li class="footer-contact-item">
                            <p class="contact-item-value">Website: <?= htmlspecialchars($ss['website']) ?></p>
                        </li>
                    </ul>
                    <span class="footer-modern-title">Thời gian làm việc</span>
                    <p class="footer-time"><?= htmlspecialchars($ss['work_time_weekdays']) ?></p>
                    <p class="footer-time"><?= htmlspecialchars($ss['work_time_saturday']) ?></p>
                </div>
                <div class="footer-modern-col">
                    <span class="footer-modern-title">Fanpage</span>
                    <div class="footer-embed">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=<?= $ss_fanpage_encoded ?>&tabs=timeline&width=360&height=220&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true"
                            width="360" height="220" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
                <div class="footer-modern-col">
                    <span class="footer-modern-title">Bản đồ</span>
                    <div class="footer-embed">
                        <iframe
                            src="https://www.google.com/maps?q=Meyhomes%20Capital%20Ph%C3%BA%20Qu%E1%BB%91c&output=embed"
                            width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="footer-copyright-text">© 2026 Meyschool Đoàn Thị Điểm Phú Quốc. All rights reserved.</div>
            </div>
        </div>
    </div>
</section>

<?php
$chatBasePath = '../';
include __DIR__ . '/../chat/widget.php';
?>