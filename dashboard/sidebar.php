<?php
// dashboard/sidebar.php — Sidebar component
// Dùng basename($_SERVER['PHP_SELF']) để tự động đánh dấu nav-item active
$_sidebar_page = basename($_SERVER['PHP_SELF']);
?>
<style>
    /* ── Sidebar ── */
    .sidebar {
        width: var(--sidebar-w);
        min-height: 100vh;
        background: var(--primary-d);
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
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

    .sidebar-nav {
        flex: 1;
        padding: 12px 0;
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
        .sidebar {
            transform: translateX(-100%);
        }
    }
</style>

<aside class="sidebar">
    <div class="sidebar-logo">
        <img src="storage/favicon.png" alt="Logo">
        <span>Meyschool<br>Đoàn Thị Điểm</span>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section">Quản lý</div>
        <a href="tin-tuc-admin.php" class="nav-item <?= ($_sidebar_page === 'tin-tuc-admin.php' || $_sidebar_page === 'them-tin-tuc.php') ? 'active' : '' ?>">
            Tin tức
        </a>
        <a href="thong-bao-admin.php" class="nav-item <?= ($_sidebar_page === 'thong-bao-admin.php' || $_sidebar_page === 'them-thong-bao.php') ? 'active' : '' ?>">
            Thông báo
        </a>
        <a href="su-kien-admin.php" class="nav-item <?= ($_sidebar_page === 'su-kien-admin.php' || $_sidebar_page === 'them-su-kien.php') ? 'active' : '' ?>">
            Sự kiện trường
        </a>
        <a href="thanh-tich-admin.php" class="nav-item <?= ($_sidebar_page === 'thanh-tich-admin.php' || $_sidebar_page === 'them-thanh-tich.php') ? 'active' : '' ?>">
            Thành tích
        </a>

        <div class="nav-section">Hệ thống</div>
        <a href="cau-hinh.php" class="nav-item <?= $_sidebar_page === 'cau-hinh.php' ? 'active' : '' ?>">
            Cấu hình
        </a>
    </nav>

    <div class="sidebar-footer">
        <a href="api/logout.php">Đăng xuất</a>
    </div>
</aside>