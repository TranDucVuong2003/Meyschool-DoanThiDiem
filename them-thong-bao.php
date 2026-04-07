<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    header('Location: log-in.php');
    exit;
}
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$admin_username = htmlspecialchars($_SESSION['admin_username'] ?? '');

$editId = (int) ($_GET['id'] ?? 0);
$isEdit = $editId > 0;
$pageTitle = $isEdit ? 'Sửa thông báo' : 'Thêm thông báo mới';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title><?= $pageTitle ?> | Meyschool Đoàn Thị Điểm</title>
    <link rel="shortcut icon" href="storage/favicon.png">
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
            --purple: #8e44ad;
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

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 12px;
        }

        .page-header h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-d);
        }

        .breadcrumb {
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 6px;
        }

        .breadcrumb a {
            color: var(--accent);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

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

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 22px;
            align-items: start;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 24px;
        }

        .card-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--primary-d);
            margin-bottom: 18px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 6px;
        }

        .form-group label .req {
            color: var(--red);
        }

        .form-group input[type="text"],
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            color: var(--text);
            background: #fff;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--accent);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .slug-row {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .slug-row input {
            flex: 1;
        }

        .slug-row button {
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--bg);
            cursor: pointer;
            font-size: 12px;
            color: var(--muted);
            white-space: nowrap;
        }

        .slug-row button:hover {
            background: var(--border);
        }

        .char-count {
            font-size: 11px;
            color: var(--muted);
            text-align: right;
            margin-top: 4px;
        }

        .thumb-upload {
            border: 2px dashed var(--border);
            border-radius: 10px;
            padding: 24px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
            position: relative;
        }

        .thumb-upload:hover {
            border-color: var(--accent);
            background: #f8fbfe;
        }

        .thumb-upload input[type="file"] {
            position: absolute;
            inset: 0;
            opacity: 0;
            cursor: pointer;
        }

        .thumb-upload .upload-icon {
            font-size: 36px;
            color: var(--muted);
            margin-bottom: 8px;
        }

        .thumb-upload .upload-text {
            font-size: 13px;
            color: var(--muted);
        }

        .thumb-preview {
            margin-top: 12px;
            position: relative;
            display: none;
        }

        .thumb-preview img {
            width: 100%;
            border-radius: 8px;
            max-height: 200px;
            object-fit: cover;
        }

        .thumb-remove {
            position: absolute;
            top: 6px;
            right: 6px;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(231, 76, 60, 0.9);
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .check-group {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .check-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--accent);
        }

        .check-group label {
            font-size: 13px;
            margin: 0;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 22px;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }

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

        .saving-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(255, 255, 255, 0.6);
            z-index: 400;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: var(--primary-d);
            font-weight: 600;
        }

        .saving-overlay.show {
            display: flex;
        }

        @media (max-width: 900px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
            .main {
                margin-left: 0;
            }
        }
    </style>
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <?php include __DIR__ . '/dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title"><?= $pageTitle ?></div>
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
            <div class="breadcrumb">
                <a href="thong-bao-admin.php">Thông báo</a> &rsaquo; <?= $pageTitle ?>
            </div>
            <div class="page-header">
                <h2><?= $pageTitle ?></h2>
            </div>

            <form id="notifForm" enctype="multipart/form-data">
                <input type="hidden" name="id" id="notifId" value="<?= $editId ?>">
                <div class="form-grid">
                    <!-- Cột chính -->
                    <div>
                        <div class="card">
                            <div class="card-title">Nội dung thông báo</div>
                            <div class="form-group">
                                <label>Tiêu đề <span class="req">*</span></label>
                                <input type="text" name="title" id="titleInput" placeholder="Nhập tiêu đề thông báo..." required>
                            </div>
                            <div class="form-group">
                                <label>Slug (URL)</label>
                                <div class="slug-row">
                                    <input type="text" name="slug" id="slugInput" placeholder="tu-dong-tao-tu-tieu-de">
                                    <button type="button" onclick="generateSlug()">Tạo slug</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea name="excerpt" id="excerptInput" rows="3" placeholder="Mô tả ngắn hiển thị ở danh sách..."></textarea>
                                <div class="char-count"><span id="excerptCount">0</span>/300 ký tự</div>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="content" id="contentInput"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Cột phụ -->
                    <div>
                        <!-- Xuất bản -->
                        <div class="card" style="margin-bottom:18px;">
                            <div class="card-title">Xuất bản</div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select name="status" id="statusSelect">
                                    <option value="nhap">Nháp</option>
                                    <option value="xuat-ban">Xuất bản</option>
                                    <option value="an">Ẩn</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="check-group">
                                    <input type="checkbox" name="is_featured" id="featuredCheck" value="1">
                                    <label for="featuredCheck">Thông báo nổi bật</label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <a href="thong-bao-admin.php" class="btn btn-outline">Hủy</a>
                                <button type="submit" class="btn btn-primary" id="saveBtn">
                                    <?= $isEdit ? 'Cập nhật' : 'Tạo thông báo' ?>
                                </button>
                            </div>
                        </div>

                        <!-- Thumbnail -->
                        <div class="card">
                            <div class="card-title">Ảnh đại diện</div>
                            <div class="thumb-upload" id="thumbUpload">
                                <input type="file" name="thumbnail" id="thumbFile" accept="image/*">
                                <div class="upload-icon">&#128247;</div>
                                <div class="upload-text">Kéo thả hoặc click để chọn ảnh<br><small>JPG, PNG, GIF, WebP — tối đa 5MB</small></div>
                            </div>
                            <div class="thumb-preview" id="thumbPreview">
                                <img id="thumbImg" src="" alt="Preview">
                                <button type="button" class="thumb-remove" onclick="removeThumbnail()">&#10005;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="saving-overlay" id="savingOverlay">Đang lưu...</div>
    <div class="toast" id="toast"></div>

    <script>
        const isEdit = <?= $isEdit ? 'true' : 'false' ?>;
        const editId = <?= $editId ?>;

        // ── CKEditor 4 ──
        CKEDITOR.config.versionCheck = false;
        var editorInstance = CKEDITOR.replace('contentInput', {
            language: 'vi',
            height: 400,
            removePlugins: 'elementspath',
            toolbar: [{
                    name: 'clipboard',
                    items: ['Undo', 'Redo']
                },
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar']
                },
                '/',
                {
                    name: 'styles',
                    items: ['Format', 'Font', 'FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'tools',
                    items: ['Maximize', 'Source']
                }
            ]
        });

        // ── Clock ──
        (function clock() {
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

        // ── Slug generator ──
        function generateSlug() {
            const title = document.getElementById('titleInput').value;
            if (!title) return;
            const map = {
                'à': 'a',
                'á': 'a',
                'ả': 'a',
                'ã': 'a',
                'ạ': 'a',
                'ă': 'a',
                'ằ': 'a',
                'ắ': 'a',
                'ẳ': 'a',
                'ẵ': 'a',
                'ặ': 'a',
                'â': 'a',
                'ầ': 'a',
                'ấ': 'a',
                'ẩ': 'a',
                'ẫ': 'a',
                'ậ': 'a',
                'đ': 'd',
                'è': 'e',
                'é': 'e',
                'ẻ': 'e',
                'ẽ': 'e',
                'ẹ': 'e',
                'ê': 'e',
                'ề': 'e',
                'ế': 'e',
                'ể': 'e',
                'ễ': 'e',
                'ệ': 'e',
                'ì': 'i',
                'í': 'i',
                'ỉ': 'i',
                'ĩ': 'i',
                'ị': 'i',
                'ò': 'o',
                'ó': 'o',
                'ỏ': 'o',
                'õ': 'o',
                'ọ': 'o',
                'ô': 'o',
                'ồ': 'o',
                'ố': 'o',
                'ổ': 'o',
                'ỗ': 'o',
                'ộ': 'o',
                'ơ': 'o',
                'ờ': 'o',
                'ớ': 'o',
                'ở': 'o',
                'ỡ': 'o',
                'ợ': 'o',
                'ù': 'u',
                'ú': 'u',
                'ủ': 'u',
                'ũ': 'u',
                'ụ': 'u',
                'ư': 'u',
                'ừ': 'u',
                'ứ': 'u',
                'ử': 'u',
                'ữ': 'u',
                'ự': 'u',
                'ỳ': 'y',
                'ý': 'y',
                'ỷ': 'y',
                'ỹ': 'y',
                'ỵ': 'y'
            };
            let slug = title.toLowerCase();
            for (const [k, v] of Object.entries(map)) slug = slug.replaceAll(k, v);
            slug = slug.replace(/[^a-z0-9\s-]/g, '').replace(/[\s-]+/g, '-').replace(/^-|-$/g, '');
            document.getElementById('slugInput').value = slug;
        }

        document.getElementById('titleInput').addEventListener('blur', function() {
            if (!document.getElementById('slugInput').value) generateSlug();
        });

        // ── Excerpt counter ──
        document.getElementById('excerptInput').addEventListener('input', function() {
            document.getElementById('excerptCount').textContent = this.value.length;
        });

        // ── Thumbnail preview ──
        document.getElementById('thumbFile').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('thumbImg').src = e.target.result;
                    document.getElementById('thumbPreview').style.display = 'block';
                    document.getElementById('thumbUpload').style.display = 'none';
                };
                reader.readAsDataURL(this.files[0]);
            }
        });

        function removeThumbnail() {
            document.getElementById('thumbFile').value = '';
            document.getElementById('thumbPreview').style.display = 'none';
            document.getElementById('thumbUpload').style.display = 'block';
            document.getElementById('thumbImg').src = '';
        }

        // ── Load data for edit ──
        if (isEdit) {
            fetch('api/notifications.php?id=' + editId)
                .then(r => r.json())
                .then(res => {
                    if (!res.success) {
                        showToast('Không tìm thấy thông báo', 'error');
                        return;
                    }
                    const d = res.data;
                    document.getElementById('titleInput').value = d.title || '';
                    document.getElementById('slugInput').value = d.slug || '';
                    document.getElementById('excerptInput').value = d.excerpt || '';
                    editorInstance.setData(d.content || '');
                    document.getElementById('statusSelect').value = d.status || 'nhap';
                    document.getElementById('featuredCheck').checked = d.is_featured == 1;
                    document.getElementById('excerptCount').textContent = (d.excerpt || '').length;

                    if (d.thumbnail) {
                        document.getElementById('thumbImg').src = d.thumbnail;
                        document.getElementById('thumbPreview').style.display = 'block';
                        document.getElementById('thumbUpload').style.display = 'none';
                    }
                });
        }

        // ── Submit form ──
        document.getElementById('notifForm').addEventListener('submit', function(e) {
            e.preventDefault();
            editorInstance.updateElement();
            const fd = new FormData(this);

            if (!document.getElementById('featuredCheck').checked) {
                fd.set('is_featured', '0');
            }

            let url = 'api/notifications.php';
            if (isEdit) {
                url += '?_method=PUT';
                fd.set('id', editId);
            }

            document.getElementById('savingOverlay').classList.add('show');
            document.getElementById('saveBtn').disabled = true;

            fetch(url, {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(res => {
                    document.getElementById('savingOverlay').classList.remove('show');
                    document.getElementById('saveBtn').disabled = false;

                    if (res.success) {
                        showToast(res.message, 'success');
                        if (!isEdit) {
                            setTimeout(() => window.location.href = 'thong-bao-admin.php', 1000);
                        }
                    } else {
                        showToast(res.message || 'Có lỗi xảy ra', 'error');
                    }
                })
                .catch(() => {
                    document.getElementById('savingOverlay').classList.remove('show');
                    document.getElementById('saveBtn').disabled = false;
                    showToast('Lỗi kết nối server', 'error');
                });
        });

        function showToast(msg, type) {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.className = 'toast toast-' + type + ' show';
            setTimeout(() => t.classList.remove('show'), 3000);
        }
    </script>
</body>

</html>