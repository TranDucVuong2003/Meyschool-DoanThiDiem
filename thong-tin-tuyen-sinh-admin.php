<?php
session_start();
require_once __DIR__ . '/dashboard/access.php';
dashboard_require_access('config');
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$_sidebar_page = 'thong-tin-tuyen-sinh-admin.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Thông tin tuyển sinh | Meyschool Admin</title>
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

        .cards-list {
            display: grid;
            gap: 16px;
        }

        .card-item {
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 16px;
            display: grid;
            grid-template-columns: 100px 1fr 200px 120px;
            gap: 16px;
            align-items: center;
            background: #fafbfc;
        }

        .card-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            background: var(--border);
        }

        .card-info h4 {
            font-size: 15px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 6px;
        }

        .card-info p {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-actions {
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
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

        .btn-danger {
            background: var(--red);
            color: #fff;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: var(--card);
            border-radius: 12px;
            width: 100%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            padding: 20px 24px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-d);
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--muted);
            padding: 0;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-close:hover {
            color: var(--red);
        }

        .modal-body {
            padding: 24px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 16px;
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
            min-height: 100px;
            resize: vertical;
            font-family: inherit;
        }

        .form-group small {
            font-size: 12px;
            color: var(--muted);
        }

        .modal-footer {
            padding: 16px 24px;
            border-top: 1px solid var(--border);
            display: flex;
            gap: 12px;
            justify-content: flex-end;
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

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: var(--muted);
        }

        .empty-state svg {
            width: 64px;
            height: 64px;
            margin-bottom: 16px;
            opacity: 0.5;
        }

        .preview-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            background: var(--border);
            margin-top: 8px;
        }

        @media (max-width: 768px) {
            .card-item {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .card-item img {
                width: 100%;
                height: 200px;
            }

            .card-actions {
                justify-content: flex-start;
            }
        }
    </style>
</head>

<body>
    <?php include 'dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Quản lý thông tin tuyển sinh</div>
            <div class="topbar-user">
                <span><?php echo $admin_name; ?></span>
            </div>
        </header>

        <div class="content">
            <div class="card">
                <div class="card-title">
                    Danh sách thẻ tuyển sinh
                    <button class="btn btn-primary" style="float: right;" onclick="openModal()">
                        + Thêm thẻ mới
                    </button>
                </div>

                <div id="alert" class="alert"></div>

                <div id="cards-list" class="cards-list">
                    <div class="empty-state">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                        </svg>
                        <p>Đang tải dữ liệu...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modal-title">Thêm thẻ tuyển sinh</h3>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <form id="card-form">
                    <input type="hidden" id="card-id">
                    
                    <div class="form-group">
                        <label>Tiêu đề *</label>
                        <input type="text" id="card-title" required placeholder="Nhập tiêu đề">
                    </div>

                    <div class="form-group">
                        <label>Mô tả *</label>
                        <textarea id="card-description" required placeholder="Nhập mô tả ngắn"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Ảnh *</label>
                        <input type="file" id="card-image-file" accept="image/*">
                        <input type="hidden" id="card-image" required>
                        <small>Chọn file ảnh (JPG, PNG, GIF, WebP - tối đa 5MB)</small>
                        <img id="image-preview" class="preview-img" src="" alt="Preview" style="display: none;">
                    </div>

                    <div class="form-group">
                        <label>Link nút *</label>
                        <input type="text" id="card-button-link" required placeholder="dang-ky-tham-quan.php">
                    </div>

                    <div class="form-group">
                        <label>Text nút</label>
                        <input type="text" id="card-button-text" value="Chi tiết" placeholder="Chi tiết">
                    </div>

                    <div class="form-group">
                        <label>Thứ tự hiển thị</label>
                        <input type="number" id="card-sort-order" value="0" min="0">
                        <small>Số nhỏ hơn hiển thị trước</small>
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="card-is-active" checked>
                            Hiển thị trên trang chủ
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal()">Hủy</button>
                <button class="btn btn-primary" onclick="saveCard()">Lưu</button>
            </div>
        </div>
    </div>

    <script>
        let cards = [];

        function showAlert(message, type = 'success') {
            const alert = document.getElementById('alert');
            alert.className = 'alert ' + type;
            alert.textContent = message;
            alert.style.display = 'block';
            setTimeout(() => {
                alert.style.display = 'none';
            }, 3000);
        }

        async function loadCards() {
            try {
                const response = await fetch('api/recruitment-cards.php');
                const result = await response.json();
                
                if (result.success) {
                    cards = result.data;
                    renderCards();
                } else {
                    showAlert('Lỗi khi tải dữ liệu', 'error');
                }
            } catch (error) {
                showAlert('Lỗi kết nối server', 'error');
            }
        }

        function renderCards() {
            const container = document.getElementById('cards-list');
            
            if (cards.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                        </svg>
                        <p>Chưa có thẻ nào. Nhấn "Thêm thẻ mới" để bắt đầu.</p>
                    </div>
                `;
                return;
            }

            container.innerHTML = cards.map(card => `
                <div class="card-item">
                    <img src="${card.image}" alt="${card.title}" onerror="this.src='assets/img/favicon.png'">
                    <div class="card-info">
                        <h4>${card.title}</h4>
                        <p>${card.description}</p>
                    </div>
                    <div class="card-meta">
                        <small>Thứ tự: ${card.sort_order}</small><br>
                        <small>Link: ${card.button_link}</small><br>
                        <small>${card.is_active ? '<span style="color: var(--green)">● Hiển thị</span>' : '<span style="color: var(--red)">● Ẩn</span>'}</small>
                    </div>
                    <div class="card-actions">
                        <button class="btn btn-sm btn-secondary" onclick="editCard(${card.id})">Sửa</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteCard(${card.id})">Xóa</button>
                    </div>
                </div>
            `).join('');
        }

        function openModal(card = null) {
            const modal = document.getElementById('modal');
            const title = document.getElementById('modal-title');

            if (card) {
                title.textContent = 'Sửa thẻ tuyển sinh';
                document.getElementById('card-id').value = card.id;
                document.getElementById('card-title').value = card.title;
                document.getElementById('card-description').value = card.description;
                document.getElementById('card-image').value = card.image;
                document.getElementById('card-button-link').value = card.button_link;
                document.getElementById('card-button-text').value = card.button_text || 'Chi tiết';
                document.getElementById('card-sort-order').value = card.sort_order;
                document.getElementById('card-is-active').checked = card.is_active;
                document.getElementById('card-image-file').value = '';
                updateImagePreview(card.image);
            } else {
                title.textContent = 'Thêm thẻ tuyển sinh';
                document.getElementById('card-form').reset();
                document.getElementById('card-id').value = '';
                document.getElementById('card-button-text').value = 'Chi tiết';
                document.getElementById('card-sort-order').value = cards.length;
                document.getElementById('card-is-active').checked = true;
                document.getElementById('card-image').value = '';
                document.getElementById('image-preview').style.display = 'none';
            }

            modal.classList.add('active');
        }

        function closeModal() {
            document.getElementById('modal').classList.remove('active');
        }

        function updateImagePreview(src) {
            const preview = document.getElementById('image-preview');
            if (src) {
                preview.src = src;
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }
        }

        document.getElementById('card-image-file').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    updateImagePreview(e.target.result);
                };
                reader.readAsDataURL(file);
            } else {
                const currentImage = document.getElementById('card-image').value;
                updateImagePreview(currentImage);
            }
        });

        function editCard(id) {
            const card = cards.find(c => c.id === id);
            if (card) {
                openModal(card);
            }
        }

        async function saveCard() {
            const id = document.getElementById('card-id').value;
            const fileInput = document.getElementById('card-image-file');
            let imagePath = document.getElementById('card-image').value;

            // Upload file if selected
            if (fileInput.files.length > 0) {
                const formData = new FormData();
                formData.append('image', fileInput.files[0]);

                try {
                    const uploadResponse = await fetch('api/upload-image.php', {
                        method: 'POST',
                        body: formData
                    });

                    const uploadResult = await uploadResponse.json();

                    if (uploadResult.success) {
                        imagePath = uploadResult.path;
                    } else {
                        showAlert(uploadResult.message, 'error');
                        return;
                    }
                } catch (error) {
                    showAlert('Lỗi upload ảnh', 'error');
                    return;
                }
            }

            const data = {
                title: document.getElementById('card-title').value,
                description: document.getElementById('card-description').value,
                image: imagePath,
                button_link: document.getElementById('card-button-link').value,
                button_text: document.getElementById('card-button-text').value,
                sort_order: parseInt(document.getElementById('card-sort-order').value),
                is_active: document.getElementById('card-is-active').checked ? 1 : 0
            };

            if (!data.title || !data.description || !data.image || !data.button_link) {
                showAlert('Vui lòng điền đầy đủ các trường bắt buộc', 'error');
                return;
            }

            try {
                const url = id ? `api/recruitment-cards.php?id=${id}` : 'api/recruitment-cards.php';
                const method = id ? 'PUT' : 'POST';

                const response = await fetch(url, {
                    method: method,
                    headers: { 'Content-Type': 'application/json' },
                    body: id ? JSON.stringify({...data, id: parseInt(id)}) : JSON.stringify(data)
                });

                const result = await response.json();

                if (result.success) {
                    showAlert(result.message);
                    closeModal();
                    loadCards();
                } else {
                    showAlert(result.message, 'error');
                }
            } catch (error) {
                showAlert('Lỗi kết nối server', 'error');
            }
        }

        async function deleteCard(id) {
            if (!confirm('Bạn có chắc chắn muốn xóa thẻ này?')) {
                return;
            }

            try {
                const response = await fetch(`api/recruitment-cards.php?id=${id}`, {
                    method: 'DELETE'
                });

                const result = await response.json();
                
                if (result.success) {
                    showAlert(result.message);
                    loadCards();
                } else {
                    showAlert(result.message, 'error');
                }
            } catch (error) {
                showAlert('Lỗi kết nối server', 'error');
            }
        }

        // Close modal on outside click
        document.getElementById('modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Load cards on page load
        loadCards();
    </script>
</body>
</html>
