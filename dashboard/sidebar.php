<?php
// dashboard/sidebar.php — Sidebar component
// Dùng basename($_SERVER['PHP_SELF']) để tự động đánh dấu nav-item active
$_sidebar_page = basename($_SERVER['PHP_SELF']);
require_once __DIR__ . '/access.php';
?>
<style>
    .sidebar-toggle-btn {
        display: none;
        position: fixed;
        top: 10px;
        left: 10px;
        width: 38px;
        height: 38px;
        border: 0;
        border-radius: 10px;
        background: var(--primary-d);
        color: #fff;
        font-size: 22px;
        line-height: 1;
        align-items: center;
        justify-content: center;
        z-index: 160;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .sidebar-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.35);
        z-index: 140;
    }

    body.sidebar-open .sidebar-overlay {
        display: block;
    }

    body.sidebar-open .sidebar-toggle-btn {
        display: none;
    }

    /* ── Sidebar ── */
    .sidebar {
        width: var(--sidebar-w);
        min-width: var(--sidebar-w);
        min-height: 100vh;
        background: var(--primary-d);
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        transition: transform 0.25s ease;
    }

    .sidebar-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 18px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar-logo img {
        height: 36px;
        border-radius: 6px;
    }

    .sidebar-logo span {
        font-size: 13px;
        font-weight: 700;
        color: #fff;
        line-height: 1.3;
    }

    .sidebar-module {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 2px;
        padding: 10px 20px;
        color: rgba(255, 255, 255, 0.75);
        text-decoration: none;
        font-size: 14px;
        transition: background 0.15s, color 0.15s;
        border-left: 3px solid transparent;
        cursor: pointer;
    }

    .sidebar-module:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #fff;
    }

    .sidebar-module.active {
        background: rgba(67, 155, 212, 0.2);
        color: #fff;
        border-left-color: var(--accent);
        font-weight: 600;
    }

    .sidebar-module-label {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.35);
        margin: 0 0 6px;
    }

    .sidebar-module-title {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.3;
    }

    .sidebar-module-desc {
        display: none;
    }

    .sidebar-nav {
        flex: 1;
        padding: 4px 0 12px;
        overflow-y: auto;
    }

    .nav-section {
        font-size: 10px;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.35);
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 14px 20px 6px;
    }

    .nav-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 20px;
        color: rgba(255, 255, 255, 0.75);
        text-decoration: none;
        font-size: 14px;
        transition: background 0.15s, color 0.15s;
        border-left: 3px solid transparent;
        cursor: pointer;
    }

    .nav-item:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #fff;
    }

    .nav-item.active {
        background: rgba(67, 155, 212, 0.2);
        color: #fff;
        border-left-color: var(--accent);
        font-weight: 600;
    }

    .nav-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 20px;
        height: 20px;
        padding: 0 5px;
        margin-left: auto;
        border-radius: 50%;
        font-size: 11px;
        font-weight: 700;
        background: #e74c3c;
        color: #fff;
        white-space: nowrap;
    }

    .sidebar-footer {
        padding: 16px 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar-footer a {
        display: flex;
        align-items: center;
        gap: 8px;
        color: rgba(255, 255, 255, 0.6);
        font-size: 13px;
        text-decoration: none;
    }

    .sidebar-footer a:hover {
        color: #fff;
    }

    @media (max-width: 700px) {
        .sidebar-toggle-btn {
            display: inline-flex;
        }

        .sidebar {
            transform: translateX(-100%);
            z-index: 150;
            width: min(280px, 84vw);
            box-shadow: 12px 0 30px rgba(0, 0, 0, 0.18);
        }

        .sidebar-logo {
            padding: 16px;
        }

        .sidebar-logo span {
            font-size: 12px;
        }

        .sidebar-module {
            margin: 0 0 2px;
            padding: 10px 16px;
            font-size: 13px;
        }

        .sidebar-module-title {
            font-size: 13px;
        }

        .sidebar-module-desc {
            font-size: 11px;
        }

        .nav-section {
            padding: 12px 16px 6px;
        }

        .nav-item {
            padding: 12px 16px;
            font-size: 13px;
        }

        .sidebar-footer {
            padding: 14px 16px;
        }

        body.sidebar-open .sidebar {
            transform: translateX(0);
        }

        body.sidebar-open {
            overflow: hidden;
        }
    }
</style>

<button class="sidebar-toggle-btn" id="sidebarToggle" aria-label="Mở menu" aria-expanded="false">&#9776;</button>
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<aside class="sidebar">
    <div class="sidebar-logo">
        <img src="assets/img/favicon.png" alt="Logo">
        <span>Meyschool<br>Đoàn Thị Điểm</span>
    </div>

    <a href="dashboard.php" class="sidebar-module <?= $_sidebar_page === 'dashboard.php' ? 'active' : '' ?>"
        aria-label="Đi tới trang dashboard">
        Trang quản trị
    </a>

    <nav class="sidebar-nav">
        <div class="nav-section">Quản lý</div>
        <?php if (dashboard_can_access('news')): ?>
            <a href="tin-tuc-admin.php"
                class="nav-item <?= ($_sidebar_page === 'tin-tuc-admin.php' || $_sidebar_page === 'them-tin-tuc.php') ? 'active' : '' ?>">
                Tin tức
            </a>
        <?php endif; ?>
        <?php if (dashboard_can_access('notifications')): ?>
            <a href="thong-bao-admin.php"
                class="nav-item <?= ($_sidebar_page === 'thong-bao-admin.php' || $_sidebar_page === 'them-thong-bao.php') ? 'active' : '' ?>">
                Thông báo
            </a>
        <?php endif; ?>
        <?php if (dashboard_can_access('events')): ?>
            <a href="su-kien-admin.php"
                class="nav-item <?= ($_sidebar_page === 'su-kien-admin.php' || $_sidebar_page === 'them-su-kien.php') ? 'active' : '' ?>">
                Sự kiện trường
            </a>
        <?php endif; ?>
        <?php if (dashboard_can_access('achievements')): ?>
            <a href="thanh-tich-admin.php"
                class="nav-item <?= ($_sidebar_page === 'thanh-tich-admin.php' || $_sidebar_page === 'them-thanh-tich.php') ? 'active' : '' ?>">
                Thành tích
            </a>
        <?php endif; ?>
        <?php if (dashboard_can_access('contact')): ?>
            <a href="lien-he-admin.php" class="nav-item <?= $_sidebar_page === 'lien-he-admin.php' ? 'active' : '' ?>">
                Thông tin liên hệ
                <span class="nav-badge" id="contactBadge" style="display:none;">0</span>
            </a>
        <?php endif; ?>
        <?php if (dashboard_can_access('tour')): ?>
            <a href="dang-ky-tham-quan-admin.php"
                class="nav-item <?= $_sidebar_page === 'dang-ky-tham-quan-admin.php' ? 'active' : '' ?>">
                Đăng ký tham quan
                <span class="nav-badge" id="tourBadge" style="display:none;">0</span>
            </a>
        <?php endif; ?>
        <?php if (dashboard_can_access('chat')): ?>
            <a href="chat-admin.php" class="nav-item <?= $_sidebar_page === 'chat-admin.php' ? 'active' : '' ?>">
                Chat trực tuyến
                <span class="nav-badge" id="chatBadge" style="display:none;">0</span>
            </a>
        <?php endif; ?>

        <?php if (dashboard_can_access('users') || dashboard_can_access('config')): ?>
            <div class="nav-section">Hệ thống</div>
        <?php endif; ?>
        <?php if (dashboard_can_access('users')): ?>
            <a href="users-admin.php" class="nav-item <?= $_sidebar_page === 'users-admin.php' ? 'active' : '' ?>">
                Quản lý người dùng
            </a>
        <?php endif; ?>
        <?php if (dashboard_can_access('config')): ?>
            <a href="cau-hinh.php" class="nav-item <?= $_sidebar_page === 'cau-hinh.php' ? 'active' : '' ?>">
                Cấu hình
            </a>
        <?php endif; ?>
    </nav>

    <div class="sidebar-footer">
        <a href="api/logout.php">Đăng xuất</a>
    </div>
</aside>

<script>
    function updateContactBadge() {
        const badge = document.getElementById('contactBadge');
        if (!badge) return;

        fetch('api/contact-unread-count.php')
            .then(r => r.json())
            .then(res => {
                if (res.success && res.count > 0) {
                    badge.textContent = res.count > 99 ? '99+' : res.count;
                    badge.style.display = 'inline-flex';
                } else {
                    badge.style.display = 'none';
                }
            })
            .catch(() => {});
    }

    function updateTourBadge() {
        const badge = document.getElementById('tourBadge');
        if (!badge) return;

        fetch('api/tour-submissions.php')
            .then(r => r.json())
            .then(res => {
                if (res.success && res.unreadCount > 0) {
                    badge.textContent = res.unreadCount > 99 ? '99+' : res.unreadCount;
                    badge.style.display = 'inline-flex';
                } else {
                    badge.style.display = 'none';
                }
            })
            .catch(() => {});
    }

    function updateChatBadge() {
        const badge = document.getElementById('chatBadge');
        if (!badge) return;

        fetch('admin/chat/unread_count.php')
            .then(r => r.json())
            .then(res => {
                if (res.success && res.count > 0) {
                    badge.textContent = res.count > 99 ? '99+' : res.count;
                    badge.style.display = 'inline-flex';
                } else {
                    badge.style.display = 'none';
                }
            })
            .catch(() => {});
    }

    updateContactBadge();
    updateTourBadge();
    updateChatBadge();
    setInterval(updateContactBadge, 30000);
    setInterval(updateTourBadge, 30000);
    setInterval(updateChatBadge, 30000);

    window.refreshContactBadge = updateContactBadge;
    window.refreshTourBadge = updateTourBadge;
    window.refreshChatBadge = updateChatBadge;

    (function setupMobileSidebar() {
        var toggle = document.getElementById('sidebarToggle');
        var overlay = document.getElementById('sidebarOverlay');
        var sidebar = document.querySelector('.sidebar');
        if (!toggle || !overlay || !sidebar) {
            return;
        }

        function setOpen(open) {
            document.body.classList.toggle('sidebar-open', open);
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        }

        toggle.addEventListener('click', function() {
            setOpen(!document.body.classList.contains('sidebar-open'));
        });

        overlay.addEventListener('click', function() {
            setOpen(false);
        });

        sidebar.querySelectorAll('.nav-item, .sidebar-footer a').forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 700) {
                    setOpen(false);
                }
            });
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth > 700) {
                setOpen(false);
            }
        });
    })();
</script>