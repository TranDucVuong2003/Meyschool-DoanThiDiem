<?php
session_start();
require_once __DIR__ . '/dashboard/access.php';
dashboard_require_access('config');
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$admin_username = htmlspecialchars($_SESSION['admin_username'] ?? '');
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Cấu hình | Meyschool Đoàn Thị Điểm</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --sidebar-w: 220px;
            --top-h: 60px;
            --primary: #2d6a9f;
            --primary-d: #1f3f5d;
            --accent: #439bd4;
            --bg: #f4f6f9;
            --card: #ffffff;
            --text: #2c3e50;
            --muted: #7a8fa6;
            --border: #e2e8f0;
            --green: #27ae60;
            --yellow: #f39c12;
            --red: #e74c3c;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            display: flex;
            min-height: 100vh;
        }

        .main {
            margin-left: var(--sidebar-w);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ── Topbar ── */
        .topbar {
            height: var(--top-h);
            background: var(--card);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .topbar-title {
            font-size: 17px;
            font-weight: 700;
            color: var(--primary-d);
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .topbar-time {
            font-size: 12px;
            color: var(--muted);
        }

        .topbar-user {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            position: relative;
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 15px;
        }

        .user-info {
            text-align: right;
            line-height: 1.3;
        }

        .user-info .name {
            font-size: 13px;
            font-weight: 600;
        }

        .user-info .role {
            font-size: 11px;
            color: var(--muted);
        }

        .user-dropdown {
            display: none;
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            min-width: 160px;
            overflow: hidden;
            z-index: 200;
        }

        .user-dropdown.open {
            display: block;
        }

        .user-dropdown a {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 11px 16px;
            font-size: 13px;
            color: var(--text);
            text-decoration: none;
        }

        .user-dropdown a:hover {
            background: var(--bg);
        }

        .user-dropdown a.logout {
            color: var(--red);
        }

        .content {
            flex: 1;
            padding: 28px;
        }

        /* ── Tabs ── */
        .tabs-bar {
            display: flex;
            gap: 0;
            border-bottom: 2px solid var(--border);
            margin-bottom: 24px;
            overflow-x: auto;
        }

        .tab-btn {
            padding: 12px 22px;
            font-size: 14px;
            font-weight: 500;
            color: var(--muted);
            background: none;
            border: none;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            margin-bottom: -2px;
            white-space: nowrap;
            transition: color 0.2s, border-color 0.2s;
        }

        .tab-btn:hover {
            color: var(--text);
        }

        .tab-btn.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
            font-weight: 600;
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.active {
            display: block;
        }

        /* ── Card ── */
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 24px;
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .card-header h3 {
            font-size: 17px;
            font-weight: 700;
            color: var(--primary-d);
        }

        /* ── Search ── */
        .search-box {
            position: relative;
            max-width: 400px;
            width: 100%;
            margin-bottom: 18px;
        }

        .search-box input {
            width: 100%;
            padding: 10px 14px 10px 38px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            color: var(--text);
        }

        .search-box input:focus {
            border-color: var(--accent);
        }

        .search-box::before {
            content: '\1F50D';
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 14px;
        }

        /* ── Buttons ── */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 9px 18px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--primary-d);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text);
        }

        .btn-outline:hover {
            background: var(--bg);
        }

        .btn-sm {
            padding: 6px 10px;
            font-size: 12px;
        }

        .btn-icon {
            width: 32px;
            height: 32px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            border: 1px solid var(--border);
            background: #fff;
            cursor: pointer;
            font-size: 15px;
            transition: background 0.15s;
        }

        .btn-icon:hover {
            background: var(--bg);
        }

        .btn-icon.delete:hover {
            background: #fdeaea;
            border-color: var(--red);
            color: var(--red);
        }

        /* ── Table ── */
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th {
            text-align: left;
            font-size: 11px;
            font-weight: 700;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 10px 14px;
            border-bottom: 1px solid var(--border);
        }

        .data-table td {
            padding: 12px 14px;
            font-size: 14px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }

        .data-table tbody tr:hover {
            background: #f8fafc;
        }

        .data-table .actions {
            display: flex;
            gap: 6px;
        }

        /* ── Status badge ── */
        .badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-active {
            background: #e8f8ef;
            color: var(--green);
        }

        .badge-inactive {
            background: #fef3e2;
            color: var(--yellow);
        }

        .empty-row td {
            text-align: center;
            color: var(--muted);
            padding: 32px;
            font-size: 14px;
        }

        .settings-form {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .settings-form .form-group {
            margin: 0;
        }

        .settings-form .form-group.full {
            grid-column: 1 / -1;
        }

        .settings-form label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
            color: var(--text);
        }

        .settings-form input,
        .settings-form textarea {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            color: var(--text);
            font-family: inherit;
        }

        .settings-form input:focus,
        .settings-form textarea:focus {
            border-color: var(--accent);
        }

        .settings-form textarea {
            min-height: 92px;
            resize: vertical;
        }

        .settings-actions {
            grid-column: 1 / -1;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 8px;
        }

        .home-banner-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
        }

        .home-banner-item {
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 14px;
            background: #fff;
        }

        .home-banner-item h4 {
            font-size: 14px;
            color: var(--primary-d);
            margin-bottom: 10px;
        }

        .home-banner-preview {
            width: 100%;
            aspect-ratio: 16 / 9;
            border-radius: 8px;
            border: 1px solid var(--border);
            overflow: hidden;
            background: #f8fafc;
            margin-bottom: 10px;
        }

        .home-banner-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .home-banner-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .home-banner-note {
            margin-top: 12px;
            font-size: 12px;
            color: var(--muted);
        }

        .popup-settings-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .popup-settings-form {
            display: grid;
            gap: 12px;
        }

        .popup-switch {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 600;
            color: var(--text);
        }

        .popup-switch input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .popup-fields {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .popup-fields .full {
            grid-column: 1 / -1;
        }

        .popup-field label {
            display: block;
            margin-bottom: 6px;
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
        }

        .popup-field input {
            width: 100%;
            height: 38px;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 0 12px;
            font-size: 14px;
            outline: none;
        }

        .popup-field input:focus {
            border-color: var(--accent);
        }

        .popup-preview {
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 12px;
            background: #fff;
        }

        .popup-preview img {
            width: 100%;
            max-width: 520px;
            border-radius: 8px;
            border: 1px solid var(--border);
            display: block;
        }

        .popup-actions {
            margin-top: 12px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        @media (max-width: 900px) {
            .popup-fields {
                grid-template-columns: 1fr;
            }
        }

        /* ── Modal ── */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 300;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.open {
            display: flex;
        }

        .modal {
            background: #fff;
            border-radius: 14px;
            padding: 28px;
            width: 440px;
            max-width: 90vw;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .modal h3 {
            font-size: 17px;
            margin-bottom: 16px;
            color: var(--primary-d);
        }

        .modal .form-group {
            margin-bottom: 16px;
        }

        .modal .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
            color: var(--text);
        }

        .modal .form-group label .req {
            color: var(--red);
        }

        .modal .form-group input,
        .modal .form-group select {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            color: var(--text);
        }

        .modal .form-group input:focus,
        .modal .form-group select:focus {
            border-color: var(--accent);
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        /* ── Confirm modal ── */
        .confirm-text {
            font-size: 14px;
            color: var(--text);
            line-height: 1.6;
            margin-bottom: 4px;
        }

        .btn-danger {
            background: var(--red);
            color: #fff;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        /* ── Toast ── */
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px 22px;
            border-radius: 10px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            z-index: 500;
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s, transform 0.3s;
            pointer-events: none;
        }

        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        .toast-success {
            background: var(--green);
        }

        .toast-error {
            background: var(--red);
        }

        @media (max-width: 700px) {
            .main {
                margin-left: 0;
            }

            .content {
                padding: 16px;
            }
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Cấu hình</div>
            <div class="topbar-right">
                <span class="topbar-time" id="clock"></span>
                <div class="topbar-user" id="userMenu">
                    <div class="user-info">
                        <div class="name"><?= $admin_name ?></div>
                        <div class="role">Quản trị viên</div>
                    </div>
                    <div class="avatar"><?= strtoupper(mb_substr($admin_name, 0, 1)) ?></div>
                    <div class="user-dropdown" id="userDropdown">
                        <a href="#">&#9881;&#65039; Cài đặt</a>
                        <a href="api/logout.php" class="logout">&#128682; Đăng xuất</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="content">
            <!-- Tabs bar -->
            <div class="tabs-bar">
                <button class="tab-btn active" data-tab="danh-muc">Danh mục tin tức</button>
                <button class="tab-btn" data-tab="danh-muc-thongbao">Danh mục thông báo</button>
                <button class="tab-btn" data-tab="banner-index">Banner trang chủ</button>
                <button class="tab-btn" data-tab="popup-index">Popup trang chủ</button>
                <button class="tab-btn" data-tab="thong-tin-chung">Chỉnh sửa thông tin</button>
            </div>

            <!-- Tab: Danh mục tin tức -->
            <div class="tab-panel active" id="tab-danh-muc">
                <div class="card">
                    <div class="card-header">
                        <h3>Quản lý danh mục tin tức</h3>
                        <button class="btn btn-primary" onclick="openModal()">+ Thêm mới</button>
                    </div>

                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Tìm kiếm danh mục...">
                    </div>

                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width:60px">ID</th>
                                <th>Tên danh mục</th>
                                <th>Slug</th>
                                <th style="width:110px">Trạng thái</th>
                                <th style="width:100px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="categoryBody">
                            <tr class="empty-row">
                                <td colspan="5">Đang tải...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab: Danh mục thông báo -->
            <div class="tab-panel" id="tab-danh-muc-thongbao">
                <div class="card">
                    <div class="card-header">
                        <h3>Quản lý danh mục thông báo</h3>
                        <button class="btn btn-primary" onclick="openNotifModal()">+ Thêm mới</button>
                    </div>

                    <div class="search-box">
                        <input type="text" id="notifSearchInput" placeholder="Tìm kiếm danh mục...">
                    </div>

                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width:60px">ID</th>
                                <th>Tên danh mục</th>
                                <th>Slug</th>
                                <th style="width:110px">Trạng thái</th>
                                <th style="width:100px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="notifCategoryBody">
                            <tr class="empty-row">
                                <td colspan="5">Đang tải...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab: Banner trang chủ -->
            <div class="tab-panel" id="tab-banner-index">
                <div class="card">
                    <div class="card-header">
                        <h3>Quản lý ảnh banner cho trang index.php</h3>
                    </div>

                    <div class="home-banner-grid" id="homeBannerGrid">
                        <div class="home-banner-item" data-slot="1">
                            <h4>Banner 1</h4>
                            <div class="home-banner-preview">
                                <img id="homeBannerPreview1" src="assets/img/banner/banner1.jpeg" alt="Banner 1">
                            </div>
                            <form class="home-banner-form" data-slot="1">
                                <input type="file" name="banner" accept="image/jpeg,image/png,image/gif,image/webp" required>
                                <div class="home-banner-actions" style="margin-top:10px;">
                                    <button type="submit" class="btn btn-primary btn-sm">Cập nhật</button>
                                    <button type="button" class="btn btn-outline btn-sm" onclick="resetHomeBanner(1)">Về mặc định</button>
                                </div>
                            </form>
                        </div>

                        <div class="home-banner-item" data-slot="2">
                            <h4>Banner 2</h4>
                            <div class="home-banner-preview">
                                <img id="homeBannerPreview2" src="assets/img/banner/banner2.jpeg" alt="Banner 2">
                            </div>
                            <form class="home-banner-form" data-slot="2">
                                <input type="file" name="banner" accept="image/jpeg,image/png,image/gif,image/webp" required>
                                <div class="home-banner-actions" style="margin-top:10px;">
                                    <button type="submit" class="btn btn-primary btn-sm">Cập nhật</button>
                                    <button type="button" class="btn btn-outline btn-sm" onclick="resetHomeBanner(2)">Về mặc định</button>
                                </div>
                            </form>
                        </div>

                        <div class="home-banner-item" data-slot="3">
                            <h4>Banner 3</h4>
                            <div class="home-banner-preview">
                                <img id="homeBannerPreview3" src="assets/img/banner/banner3.jpeg" alt="Banner 3">
                            </div>
                            <form class="home-banner-form" data-slot="3">
                                <input type="file" name="banner" accept="image/jpeg,image/png,image/gif,image/webp" required>
                                <div class="home-banner-actions" style="margin-top:10px;">
                                    <button type="submit" class="btn btn-primary btn-sm">Cập nhật</button>
                                    <button type="button" class="btn btn-outline btn-sm" onclick="resetHomeBanner(3)">Về mặc định</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <p class="home-banner-note">Tab này chỉ thay đổi ảnh banner hiển thị ở trang chủ index.php.</p>
                </div>
            </div>

            <!-- Tab: Popup trang chủ -->
            <div class="tab-panel" id="tab-popup-index">
                <div class="card">
                    <div class="card-header">
                        <h3>Quản lý popup hiển thị ở trang index.php</h3>
                    </div>

                    <div class="popup-settings-grid">
                        <form id="homePopupForm" class="popup-settings-form">
                            <label class="popup-switch">
                                <input type="checkbox" id="popupEnabled">
                                Bật popup trang chủ
                            </label>

                            <div class="popup-fields">
                                <div class="popup-field full">
                                    <label for="popupCtaUrl">Đường dẫn khi click popup</label>
                                    <input type="text" id="popupCtaUrl" placeholder="vd: dang-ky-tu-van.php">
                                </div>
                                <div class="popup-field">
                                    <label for="popupDelay">Thời gian hiện lần đầu (giây)</label>
                                    <input type="number" id="popupDelay" min="1" max="600" value="10">
                                </div>
                                <div class="popup-field">
                                    <label for="popupRepeat">Chu kỳ hiện lại (giây)</label>
                                    <input type="number" id="popupRepeat" min="30" max="7200" value="180">
                                </div>
                                <div class="popup-field full">
                                    <label for="popupImageFile">Ảnh popup mới</label>
                                    <input type="file" id="popupImageFile" accept="image/jpeg,image/png,image/gif,image/webp">
                                </div>
                            </div>

                            <div class="popup-actions">
                                <button type="submit" class="btn btn-primary">Lưu popup</button>
                                <button type="button" class="btn btn-outline" id="btnResetPopupImage">Đưa ảnh về mặc định</button>
                            </div>
                        </form>

                        <div class="popup-preview">
                            <img id="popupPreviewImage" src="assets/img/banner/popup-tuyensinh.jpg" alt="Popup preview">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab: Chỉnh sửa thông tin -->
            <div class="tab-panel" id="tab-thong-tin-chung">
                <div class="card">
                    <div class="card-header">
                        <h3>Thông tin liên hệ hiển thị ngoài website</h3>
                    </div>

                    <form id="siteSettingsForm" class="settings-form">
                        <div class="form-group full">
                            <label for="stAddress">Địa chỉ</label>
                            <input type="text" id="stAddress" required>
                        </div>

                        <div class="form-group">
                            <label for="stHotline">Hotline</label>
                            <input type="text" id="stHotline" required>
                        </div>

                        <div class="form-group">
                            <label for="stEmail">Email</label>
                            <input type="email" id="stEmail" required>
                        </div>

                        <div class="form-group">
                            <label for="stWebsite">Website</label>
                            <input type="text" id="stWebsite" required>
                        </div>

                        <div class="form-group">
                            <label for="stTiktok">Tiktok</label>
                            <input type="url" id="stTiktok" required>
                        </div>

                        <div class="form-group full">
                            <label for="stFanpage">Fanpage</label>
                            <input type="url" id="stFanpage" required>
                        </div>

                        <div class="form-group">
                            <label for="stWorkWeekdays">Thời gian làm việc (Thứ 2 - Thứ 6)</label>
                            <input type="text" id="stWorkWeekdays" required>
                        </div>

                        <div class="form-group">
                            <label for="stWorkSaturday">Thời gian làm việc (Thứ 7)</label>
                            <input type="text" id="stWorkSaturday" required>
                        </div>

                        <div class="settings-actions">
                            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal thêm / sửa -->
    <div class="modal-overlay" id="formModal">
        <div class="modal">
            <h3 id="modalTitle">Thêm danh mục</h3>
            <form id="categoryForm">
                <input type="hidden" id="catId" value="">
                <div class="form-group">
                    <label>Tên danh mục <span class="req">*</span></label>
                    <input type="text" id="catName" placeholder="VD: Hoạt động, Tuyển sinh..." required>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" id="catSlug" placeholder="Tự động tạo nếu để trống">
                </div>
                <div class="form-group">
                    <label>Trạng thái</label>
                    <select id="catStatus">
                        <option value="active">Hoạt động</option>
                        <option value="inactive">Không hoạt động</option>
                    </select>
                </div>
                <div class="modal-actions">
                    <button type="button" class="btn btn-outline" onclick="closeModal()">Hủy</button>
                    <button type="submit" class="btn btn-primary" id="modalSaveBtn">Lưu</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal thêm / sửa danh mục thông báo -->
    <div class="modal-overlay" id="notifFormModal">
        <div class="modal">
            <h3 id="notifModalTitle">Thêm danh mục thông báo</h3>
            <form id="notifCategoryForm">
                <input type="hidden" id="notifCatId" value="">
                <div class="form-group">
                    <label>Tên danh mục <span class="req">*</span></label>
                    <input type="text" id="notifCatName" placeholder="VD: Học vụ, Học phí, Tuyển sinh..." required>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" id="notifCatSlug" placeholder="Tự động tạo nếu để trống">
                </div>
                <div class="form-group">
                    <label>Trạng thái</label>
                    <select id="notifCatStatus">
                        <option value="active">Hoạt động</option>
                        <option value="inactive">Không hoạt động</option>
                    </select>
                </div>
                <div class="modal-actions">
                    <button type="button" class="btn btn-outline" onclick="closeNotifModal()">Hủy</button>
                    <button type="submit" class="btn btn-primary" id="notifModalSaveBtn">Lưu</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal xác nhận xóa -->
    <div class="modal-overlay" id="deleteModal">
        <div class="modal">
            <h3>Xác nhận xóa</h3>
            <p class="confirm-text">Bạn có chắc muốn xóa danh mục "<strong id="deleteName"></strong>"?</p>
            <p class="confirm-text" style="font-size:12px;color:var(--muted);">Các bài viết thuộc danh mục này sẽ không bị xóa, chỉ mất liên kết danh mục.</p>
            <div class="modal-actions">
                <button class="btn btn-outline" onclick="closeDeleteModal()">Hủy</button>
                <button class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
            </div>
        </div>
    </div>

    <div class="toast" id="toast"></div>

    <script>
        // ── Clock ──
        (function() {
            function pad(n) {
                return String(n).padStart(2, '0');
            }

            function tick() {
                var d = new Date();
                document.getElementById('clock').textContent =
                    pad(d.getHours()) + ':' + pad(d.getMinutes()) + ':' + pad(d.getSeconds()) +
                    '  ' + d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
            }
            tick();
            setInterval(tick, 1000);
        })();

        // ── User dropdown ──
        document.getElementById('userMenu').addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('userDropdown').classList.toggle('open');
        });
        document.addEventListener('click', function() {
            document.getElementById('userDropdown').classList.remove('open');
        });

        // ── Tabs ──
        document.querySelectorAll('.tab-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.tab-btn').forEach(function(b) {
                    b.classList.remove('active');
                });
                document.querySelectorAll('.tab-panel').forEach(function(p) {
                    p.classList.remove('active');
                });
                btn.classList.add('active');
                document.getElementById('tab-' + btn.dataset.tab).classList.add('active');
            });
        });

        // ── API ──
        const API = 'api/news-categories.php';
        const SETTINGS_API = 'api/site-settings.php';
        const HOME_BANNER_API = 'api/home-banners.php';
        const HOME_POPUP_API = 'api/home-popup.php';

        function loadCategories(search) {
            let url = API + '?t=' + Date.now();
            if (search) url += '&search=' + encodeURIComponent(search);

            fetch(url)
                .then(r => r.json())
                .then(res => {
                    const tbody = document.getElementById('categoryBody');
                    if (!res.success || !res.data.length) {
                        tbody.innerHTML = '<tr class="empty-row"><td colspan="5">Không có danh mục nào</td></tr>';
                        return;
                    }
                    tbody.innerHTML = res.data.map(c => `
                        <tr>
                            <td>${c.id}</td>
                            <td><strong>${escHtml(c.name)}</strong></td>
                            <td style="color:var(--muted);font-size:13px;">${escHtml(c.slug || '')}</td>
                            <td>
                                <span class="badge badge-${c.status === 'active' ? 'active' : 'inactive'}">
                                    ${c.status === 'active' ? 'Hoạt động' : 'Không hoạt động'}
                                </span>
                            </td>
                            <td>
                                <div class="actions">
                                    <button class="btn-icon" title="Sửa" onclick='editCat(${JSON.stringify(c)})'>&#9998;</button>
                                    <button class="btn-icon delete" title="Xóa" onclick='deleteCat(${c.id}, ${JSON.stringify(escHtml(c.name))})'>&#128465;</button>
                                </div>
                            </td>
                        </tr>
                    `).join('');
                });
        }

        function escHtml(str) {
            var d = document.createElement('div');
            d.textContent = str;
            return d.innerHTML;
        }

        // ── Search ──
        let searchTimer;
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(() => loadCategories(this.value.trim()), 300);
        });

        // ── Modal thêm / sửa ──
        function openModal(data) {
            document.getElementById('catId').value = data ? data.id : '';
            document.getElementById('catName').value = data ? data.name : '';
            document.getElementById('catSlug').value = data ? (data.slug || '') : '';
            document.getElementById('catStatus').value = data ? data.status : 'active';
            document.getElementById('modalTitle').textContent = data ? 'Sửa danh mục' : 'Thêm danh mục';
            document.getElementById('modalSaveBtn').textContent = data ? 'Cập nhật' : 'Lưu';
            document.getElementById('formModal').classList.add('open');
        }

        function closeModal() {
            document.getElementById('formModal').classList.remove('open');
        }

        function editCat(data) {
            openModal(data);
        }

        document.getElementById('categoryForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const id = document.getElementById('catId').value;
            const payload = {
                name: document.getElementById('catName').value.trim(),
                slug: document.getElementById('catSlug').value.trim(),
                status: document.getElementById('catStatus').value
            };

            if (!payload.name) return showToast('Vui lòng nhập tên danh mục', 'error');

            let url = API;
            let method = 'POST';

            if (id) {
                url += '?_method=PUT';
                payload.id = id;
            }

            fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(payload)
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(res.message, 'success');
                        closeModal();
                        loadCategories();
                    } else {
                        showToast(res.message || 'Có lỗi xảy ra', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        });

        // ── Delete ──
        let deleteId = null;

        function deleteCat(id, name) {
            deleteId = id;
            document.getElementById('deleteName').textContent = name;
            document.getElementById('deleteModal').classList.add('open');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.remove('open');
            deleteId = null;
        }

        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            if (!deleteId) return;
            fetch(API + '?_method=DELETE', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        id: deleteId
                    })
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(res.message, 'success');
                        loadCategories();
                    } else {
                        showToast(res.message || 'Lỗi', 'error');
                    }
                    closeDeleteModal();
                })
                .catch(() => {
                    showToast('Lỗi kết nối', 'error');
                    closeDeleteModal();
                });
        });

        // ── Toast ──
        function showToast(msg, type) {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.className = 'toast toast-' + type + ' show';
            setTimeout(() => t.classList.remove('show'), 3000);
        }

        // ── Init ──
        loadCategories();

        // ════════════════════════════════════
        // Danh mục thông báo
        // ════════════════════════════════════
        const NOTIF_API = 'api/notification-categories.php';

        function loadNotifCategories(search) {
            let url = NOTIF_API + '?t=' + Date.now();
            if (search) url += '&search=' + encodeURIComponent(search);

            fetch(url)
                .then(r => r.json())
                .then(res => {
                    const tbody = document.getElementById('notifCategoryBody');
                    if (!res.success || !res.data.length) {
                        tbody.innerHTML = '<tr class="empty-row"><td colspan="5">Không có danh mục nào</td></tr>';
                        return;
                    }
                    tbody.innerHTML = res.data.map(c => `
                        <tr>
                            <td>${c.id}</td>
                            <td><strong>${escHtml(c.name)}</strong></td>
                            <td style="color:var(--muted);font-size:13px;">${escHtml(c.slug || '')}</td>
                            <td>
                                <span class="badge badge-${c.status === 'active' ? 'active' : 'inactive'}">
                                    ${c.status === 'active' ? 'Hoạt động' : 'Không hoạt động'}
                                </span>
                            </td>
                            <td>
                                <div class="actions">
                                    <button class="btn-icon" title="Sửa" onclick='editNotifCat(${JSON.stringify(c)})'>&#9998;</button>
                                    <button class="btn-icon delete" title="Xóa" onclick='deleteNotifCat(${c.id}, ${JSON.stringify(escHtml(c.name))})'>&#128465;</button>
                                </div>
                            </td>
                        </tr>
                    `).join('');
                });
        }

        // Search
        let notifSearchTimer;
        document.getElementById('notifSearchInput').addEventListener('input', function() {
            clearTimeout(notifSearchTimer);
            notifSearchTimer = setTimeout(() => loadNotifCategories(this.value.trim()), 300);
        });

        // Modal
        function openNotifModal(data) {
            document.getElementById('notifCatId').value = data ? data.id : '';
            document.getElementById('notifCatName').value = data ? data.name : '';
            document.getElementById('notifCatSlug').value = data ? (data.slug || '') : '';
            document.getElementById('notifCatStatus').value = data ? data.status : 'active';
            document.getElementById('notifModalTitle').textContent = data ? 'Sửa danh mục' : 'Thêm danh mục thông báo';
            document.getElementById('notifModalSaveBtn').textContent = data ? 'Cập nhật' : 'Lưu';
            document.getElementById('notifFormModal').classList.add('open');
        }

        function closeNotifModal() {
            document.getElementById('notifFormModal').classList.remove('open');
        }

        function editNotifCat(data) {
            openNotifModal(data);
        }

        document.getElementById('notifCategoryForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const id = document.getElementById('notifCatId').value;
            const payload = {
                name: document.getElementById('notifCatName').value.trim(),
                slug: document.getElementById('notifCatSlug').value.trim(),
                status: document.getElementById('notifCatStatus').value
            };

            if (!payload.name) return showToast('Vui lòng nhập tên danh mục', 'error');

            let url = NOTIF_API;
            let method = 'POST';
            if (id) {
                url += '?_method=PUT';
                payload.id = id;
            }

            fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(payload)
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(res.message, 'success');
                        closeNotifModal();
                        loadNotifCategories();
                    } else {
                        showToast(res.message || 'Có lỗi xảy ra', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        });

        // Delete danh mục thông báo
        let deleteNotifId = null;

        function deleteNotifCat(id, name) {
            deleteNotifId = id;
            document.getElementById('deleteName').textContent = name;
            document.getElementById('deleteModal').classList.add('open');
            // Gán lại handler cho nút xóa
            document.getElementById('confirmDeleteBtn').onclick = function() {
                fetch(NOTIF_API + '?_method=DELETE', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            id: deleteNotifId
                        })
                    })
                    .then(r => r.json())
                    .then(res => {
                        if (res.success) {
                            showToast(res.message, 'success');
                            loadNotifCategories();
                        } else {
                            showToast(res.message || 'Lỗi', 'error');
                        }
                        closeDeleteModal();
                    })
                    .catch(() => {
                        showToast('Lỗi kết nối', 'error');
                        closeDeleteModal();
                    });
            };
        }

        // Reset delete handler cho danh mục tin tức khi dùng deleteCat
        var _origDeleteCat = deleteCat;
        deleteCat = function(id, name) {
            deleteId = id;
            document.getElementById('deleteName').textContent = name;
            document.getElementById('deleteModal').classList.add('open');
            document.getElementById('confirmDeleteBtn').onclick = function() {
                fetch(API + '?_method=DELETE', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            id: deleteId
                        })
                    })
                    .then(r => r.json())
                    .then(res => {
                        if (res.success) {
                            showToast(res.message, 'success');
                            loadCategories();
                        } else {
                            showToast(res.message || 'Lỗi', 'error');
                        }
                        closeDeleteModal();
                    })
                    .catch(() => {
                        showToast('Lỗi kết nối', 'error');
                        closeDeleteModal();
                    });
            };
        };

        // Load khi tab được click
        document.querySelectorAll('.tab-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                if (btn.dataset.tab === 'danh-muc-thongbao') {
                    loadNotifCategories();
                }
                if (btn.dataset.tab === 'banner-index') {
                    loadHomeBanners();
                }
                if (btn.dataset.tab === 'popup-index') {
                    loadHomePopupSettings();
                }
                if (btn.dataset.tab === 'thong-tin-chung') {
                    loadSiteSettings();
                }
            });
        });

        // ════════════════════════════════════
        // Thông tin liên hệ chung
        // ════════════════════════════════════
        function loadSiteSettings() {
            fetch(SETTINGS_API + '?t=' + Date.now())
                .then(r => r.json())
                .then(res => {
                    if (!res.success || !res.data) {
                        showToast('Không tải được thông tin', 'error');
                        return;
                    }

                    const d = res.data;
                    document.getElementById('stAddress').value = d.address || '';
                    document.getElementById('stHotline').value = d.hotline || '';
                    document.getElementById('stEmail').value = d.email || '';
                    document.getElementById('stWebsite').value = d.website || '';
                    document.getElementById('stTiktok').value = d.tiktok || '';
                    document.getElementById('stFanpage').value = d.fanpage || '';
                    document.getElementById('stWorkWeekdays').value = d.work_time_weekdays || '';
                    document.getElementById('stWorkSaturday').value = d.work_time_saturday || '';
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        document.getElementById('siteSettingsForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const payload = {
                address: document.getElementById('stAddress').value.trim(),
                hotline: document.getElementById('stHotline').value.trim(),
                email: document.getElementById('stEmail').value.trim(),
                website: document.getElementById('stWebsite').value.trim(),
                tiktok: document.getElementById('stTiktok').value.trim(),
                fanpage: document.getElementById('stFanpage').value.trim(),
                work_time_weekdays: document.getElementById('stWorkWeekdays').value.trim(),
                work_time_saturday: document.getElementById('stWorkSaturday').value.trim()
            };

            fetch(SETTINGS_API + '?_method=PUT', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(payload)
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(res.message || 'Đã lưu thông tin', 'success');
                        loadSiteSettings();
                    } else {
                        showToast(res.message || 'Có lỗi xảy ra', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        });

        // ════════════════════════════════════
        // Banner trang chủ (index.php)
        // ════════════════════════════════════
        function loadHomeBanners() {
            fetch(HOME_BANNER_API + '?t=' + Date.now())
                .then(r => r.json())
                .then(res => {
                    if (!res.success || !Array.isArray(res.data)) {
                        showToast('Không tải được dữ liệu banner', 'error');
                        return;
                    }

                    res.data.forEach(function(item) {
                        const slot = Number(item.slot || 0);
                        if (slot < 1 || slot > 3) return;
                        const img = document.getElementById('homeBannerPreview' + slot);
                        if (!img) return;
                        img.src = item.image_url || item.default_url || img.src;
                    });
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        document.querySelectorAll('.home-banner-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const slot = Number(form.dataset.slot || 0);
                const fileInput = form.querySelector('input[type="file"]');
                const file = fileInput && fileInput.files ? fileInput.files[0] : null;

                if (!slot || !file) {
                    showToast('Vui lòng chọn ảnh để cập nhật', 'error');
                    return;
                }

                const fd = new FormData();
                fd.append('slot', String(slot));
                fd.append('banner', file);

                fetch(HOME_BANNER_API, {
                        method: 'POST',
                        body: fd
                    })
                    .then(r => r.json())
                    .then(res => {
                        if (res.success) {
                            showToast(res.message || 'Đã cập nhật banner', 'success');
                            fileInput.value = '';
                            loadHomeBanners();
                        } else {
                            showToast(res.message || 'Không cập nhật được banner', 'error');
                        }
                    })
                    .catch(() => showToast('Lỗi kết nối', 'error'));
            });
        });

        function resetHomeBanner(slot) {
            fetch(HOME_BANNER_API + '?_method=DELETE', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        slot: slot
                    })
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(res.message || 'Đã đưa về mặc định', 'success');
                        loadHomeBanners();
                    } else {
                        showToast(res.message || 'Không thể đặt lại banner', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        // ════════════════════════════════════
        // Popup trang chủ (index.php)
        // ════════════════════════════════════
        function loadHomePopupSettings() {
            fetch(HOME_POPUP_API + '?t=' + Date.now())
                .then(r => r.json())
                .then(res => {
                    if (!res.success || !res.data) {
                        showToast('Không tải được cấu hình popup', 'error');
                        return;
                    }

                    const d = res.data;
                    document.getElementById('popupEnabled').checked = !!d.is_enabled;
                    document.getElementById('popupCtaUrl').value = d.cta_url || '';
                    document.getElementById('popupDelay').value = d.show_delay_seconds || 10;
                    document.getElementById('popupRepeat').value = d.repeat_interval_seconds || 180;
                    document.getElementById('popupPreviewImage').src = d.image_url || d.default_image_url || 'assets/img/banner/popup-tuyensinh.jpg';
                    document.getElementById('popupImageFile').value = '';
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        document.getElementById('homePopupForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const fd = new FormData();
            const enabled = document.getElementById('popupEnabled').checked ? '1' : '0';
            const ctaUrl = document.getElementById('popupCtaUrl').value.trim();
            const delay = document.getElementById('popupDelay').value;
            const repeat = document.getElementById('popupRepeat').value;
            const fileInput = document.getElementById('popupImageFile');
            const file = fileInput.files ? fileInput.files[0] : null;

            fd.append('is_enabled', enabled);
            fd.append('cta_url', ctaUrl);
            fd.append('show_delay_seconds', delay);
            fd.append('repeat_interval_seconds', repeat);
            if (file) {
                fd.append('image', file);
            }

            fetch(HOME_POPUP_API, {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(res.message || 'Đã lưu cấu hình popup', 'success');
                        loadHomePopupSettings();
                    } else {
                        showToast(res.message || 'Không lưu được popup', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        });

        document.getElementById('btnResetPopupImage').addEventListener('click', function() {
            fetch(HOME_POPUP_API + '?_method=DELETE', {
                    method: 'POST'
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(res.message || 'Đã đưa ảnh popup về mặc định', 'success');
                        loadHomePopupSettings();
                    } else {
                        showToast(res.message || 'Không thể reset ảnh popup', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        });
    </script>
</body>

</html>