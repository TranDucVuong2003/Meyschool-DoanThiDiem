<?php
session_start();
require_once __DIR__ . '/dashboard/access.php';
dashboard_require_access('contact');
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$_sidebar_page = 'thong-tin-lien-he-admin.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Thông tin liên hệ | Meyschool Admin</title>
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
            --red: #e74c3c;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .main {
            margin-left: var(--sidebar-w);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            min-width: 0;
        }

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

        .topbar-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .content {
            flex: 1;
            padding: 28px;
        }

        .card {
            background: var(--card);
            border-radius: 12px;
            border: 1px solid var(--border);
            padding: 24px;
            margin-bottom: 24px;
        }

        .card-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-d);
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--border);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
        }

        .form-group input,
        .form-group textarea {
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(67, 155, 212, 0.1);
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
            font-family: inherit;
        }

        .form-group small {
            font-size: 12px;
            color: var(--muted);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--primary-d);
        }

        .btn-secondary {
            background: var(--bg);
            color: var(--text);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background: var(--border);
        }

        .actions {
            display: flex;
            gap: 12px;
            margin-top: 24px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            display: none;
        }

        .alert.success {
            display: block;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert.error {
            display: block;
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .info-box {
            background: #e7f3ff;
            border: 1px solid #b3d9ff;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 20px;
            font-size: 13px;
            line-height: 1.6;
        }

        .info-box strong {
            color: var(--primary-d);
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php include 'dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Quản lý thông tin liên hệ</div>
            <div class="topbar-user">
                <span><?php echo $admin_name; ?></span>
            </div>
        </header>

        <main class="content">
            <div id="alert" class="alert"></div>

            <div class="card">
                <div class="card-title">Thông tin cơ bản</div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Địa chỉ chính</label>
                        <input type="text" id="address" placeholder="Nhập địa chỉ">
                    </div>
                    <div class="form-group">
                        <label>Hotline chính</label>
                        <input type="text" id="hotline" placeholder="Ví dụ: 0846.179.888">
                    </div>
                    <div class="form-group">
                        <label>Email chính</label>
                        <input type="email" id="email" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" id="website" placeholder="Nhập website">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-title">Thông tin liên hệ chi tiết <span style="font-weight:400;color:var(--muted);">(Hiển thị ở trang Liên hệ)</span></div>
                
                <div class="info-box">
                    <strong>Hướng dẫn:</strong><br>
                    • Hotlines: Mỗi dòng một số, định dạng: "Tên văn phòng: Số điện thoại"<br>
                    • Emails: Mỗi dòng một email, định dạng: "Mục đích: email@domain.com"<br>
                    • Địa chỉ: Mỗi dòng một địa chỉ, định dạng: "Tên cơ sở: Địa chỉ"
                </div>

                <div class="form-grid">
                    <div class="form-group full-width">
                        <label>Danh sách Hotlines</label>
                        <textarea id="contact_hotlines" rows="5" placeholder="Văn phòng THCS cơ sở 1: 0246.2872.448&#10;Văn phòng THCS cơ sở 2: 0246.265.2709&#10;Văn phòng THPT: 0246.675.2216"></textarea>
                        <small>Mỗi dòng một số điện thoại với định dạng: "Tên: Số điện thoại"</small>
                    </div>
                    <div class="form-group full-width">
                        <label>Danh sách Emails</label>
                        <textarea id="contact_emails" rows="5" placeholder="Góp ý phụ huynh: ykphdoanthidiem@gmail.com&#10;Ban giám hiệu: bghdoanthidiem@gmail.com&#10;Ban biên tập website: bbtdoanthidiem@gmail.com"></textarea>
                        <small>Mỗi dòng một email với định dạng: "Mục đích: email@domain.com"</small>
                    </div>
                    <div class="form-group full-width">
                        <label>Danh sách Địa chỉ</label>
                        <textarea id="contact_addresses" rows="4" placeholder="Cơ sở 1: Số 64 Lưu Hữu Phước, phường Từ Liêm, TP Hà Nội&#10;Cơ sở 2: Phố Nguyễn Đình Tứ, KĐT Bắc Cổ Nhuế, phường Đông Ngạc, TP Hà Nội"></textarea>
                        <small>Mỗi dòng một địa chỉ với định dạng: "Tên cơ sở: Địa chỉ"</small>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-title">Bản đồ Google Maps</div>
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label>Mã nhúng iframe Google Maps</label>
                        <textarea id="map_iframe" rows="4" placeholder='<iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'></textarea>
                        <small>Sao chép mã nhúng từ Google Maps (Chia sẻ &gt; Nhúng bản đồ &gt; Sao chép HTML)</small>
                    </div>
                    <div class="form-group full-width">
                        <label>Link Google Maps (URL)</label>
                        <input type="text" id="map_link" placeholder="https://maps.app.goo.gl/... hoặc https://www.google.com/maps/...">
                        <small>Link để mở Google Maps khi click "Mở Google Maps"</small>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-title">Thời gian làm việc</div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Thứ 2 - Thứ 6</label>
                        <input type="text" id="work_time_weekdays" placeholder="7:30 - 17:00 (Thứ 2 - Thứ 6)">
                    </div>
                    <div class="form-group">
                        <label>Thứ 7</label>
                        <input type="text" id="work_time_saturday" placeholder="7:30 - 11:30 (Thứ 7)">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-title">Mạng xã hội</div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Fanpage Facebook</label>
                        <input type="url" id="fanpage" placeholder="https://www.facebook.com/...">
                    </div>
                    <div class="form-group">
                        <label>TikTok</label>
                        <input type="url" id="tiktok" placeholder="https://www.tiktok.com/...">
                    </div>
                </div>
            </div>

            <div class="actions">
                <button class="btn btn-primary" onclick="saveSettings()">
                    <span>Lưu thay đổi</span>
                </button>
                <button class="btn btn-secondary" onclick="loadSettings()">
                    <span>Làm mới</span>
                </button>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', loadSettings);

        function loadSettings() {
            fetch('api/site-settings.php')
                .then(res => res.json())
                .then(data => {
                    if (data.success && data.data) {
                        const s = data.data;
                        document.getElementById('address').value = s.address || '';
                        document.getElementById('hotline').value = s.hotline || '';
                        document.getElementById('email').value = s.email || '';
                        document.getElementById('website').value = s.website || '';
                        document.getElementById('fanpage').value = s.fanpage || '';
                        document.getElementById('tiktok').value = s.tiktok || '';
                        document.getElementById('work_time_weekdays').value = s.work_time_weekdays || '';
                        document.getElementById('work_time_saturday').value = s.work_time_saturday || '';
                        document.getElementById('contact_hotlines').value = s.contact_hotlines || '';
                        document.getElementById('contact_emails').value = s.contact_emails || '';
                        document.getElementById('contact_addresses').value = s.contact_addresses || '';
                        document.getElementById('map_iframe').value = s.map_iframe || '';
                        document.getElementById('map_link').value = s.map_link || '';
                    }
                })
                .catch(err => {
                    showAlert('error', 'Lỗi khi tải dữ liệu: ' + err.message);
                });
        }

        function saveSettings() {
            const payload = {
                address: document.getElementById('address').value.trim(),
                hotline: document.getElementById('hotline').value.trim(),
                email: document.getElementById('email').value.trim(),
                website: document.getElementById('website').value.trim(),
                fanpage: document.getElementById('fanpage').value.trim(),
                tiktok: document.getElementById('tiktok').value.trim(),
                work_time_weekdays: document.getElementById('work_time_weekdays').value.trim(),
                work_time_saturday: document.getElementById('work_time_saturday').value.trim(),
                contact_hotlines: document.getElementById('contact_hotlines').value.trim(),
                contact_emails: document.getElementById('contact_emails').value.trim(),
                contact_addresses: document.getElementById('contact_addresses').value.trim(),
                map_iframe: document.getElementById('map_iframe').value.trim(),
                map_link: document.getElementById('map_link').value.trim(),
            };

            fetch('api/site-settings.php?_method=PUT', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload)
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', data.message || 'Đã lưu thay đổi thành công!');
                } else {
                    showAlert('error', data.message || 'Có lỗi xảy ra khi lưu.');
                }
            })
            .catch(err => {
                showAlert('error', 'Lỗi kết nối: ' + err.message);
            });
        }

        function showAlert(type, message) {
            const alert = document.getElementById('alert');
            alert.className = 'alert ' + type;
            alert.textContent = message;
            
            if (type === 'success') {
                setTimeout(() => {
                    alert.className = 'alert';
                }, 3000);
            }
        }
    </script>
</body>

</html>
