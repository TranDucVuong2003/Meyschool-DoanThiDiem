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
                <div class="footer-modern-col footer-brand" style="text-align:center; padding: 15px 0px 0px 0px;">
                    <a href="index.php" title="" class="ft_logo_lg" style="display:inline-block;">
                        <img class="footer-logo-img" src="assets/logo/logo.png" alt="Meyschool Đoàn Thị Điểm" style="display:block;margin:0 auto;">
                    </a>
                    <div class="footer-social" style="display:flex;justify-content:center;gap:12px;margin-top:16px;">
                        <a href="<?= htmlspecialchars($ss['fanpage']) ?>" target="_blank">
                            <img src="olympia/images/facebook.svg" alt="Facebook">
                        </a>
                        <a href="<?= htmlspecialchars($ss['tiktok']) ?>" target="_blank">
                            <img src="olympia/images/tiktok.svg" alt="Tiktok">
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
                        <li class="footer-contact-item">
                            <p class="contact-item-value">Tiktok: <a href="<?= htmlspecialchars($ss['tiktok']) ?>"
                                    target="_blank"><?= htmlspecialchars($ss['tiktok']) ?></a></p>
                        </li>
                        <li class="footer-contact-item">
                            <p class="contact-item-value">Fanpage: <a href="<?= htmlspecialchars($ss['fanpage']) ?>"
                                    target="_blank"><?= htmlspecialchars($ss['fanpage']) ?></a></p>
                        </li>
                    </ul>
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
                            src="https://www.google.com/maps?q=K%C4%90T%20Meyhomes%20Capital%20Ph%C3%BA%20Qu%E1%BB%91c%20-%20P.%20An%20Th%E1%BB%9Bi%20-%20TP.%20Ph%C3%BA%20Qu%E1%BB%91c&output=embed"
                            width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="footer-copyright-text" style="color: white;">© 2026 Meyschool Đoàn Thị Điểm Phú Quốc. All rights reserved.</div>
            </div>
        </div>
    </div>
</section>

<?php
$chatBasePath = '';
include __DIR__ . '/../chat/widget.php';
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 700,
            once: true
        });
    }
});
</script>