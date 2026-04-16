<?php
session_start();
require_once __DIR__ . '/dashboard/access.php';
dashboard_require_access('contact');
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$_sidebar_page = 'lien-he-admin.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Thông tin liên hệ | Meyschool Đoàn Thị Điểm</title>
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
            --purple: #8e44ad;
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
            box-shadow: 0 8px 24px rgba(0, 0, 0, .12);
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
            gap: 12px;
        }

        .page-header h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-d);
        }

        .toolbar {
            display: flex;
            gap: 12px;
            margin-bottom: 18px;
            flex-wrap: wrap;
            align-items: center;
        }

        .toolbar input[type="text"],
        .toolbar select {
            padding: 8px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 13px;
            background: #fff;
            color: var(--text);
            outline: none;
        }

        .toolbar input[type="text"] {
            width: 300px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13.5px;
        }

        th {
            text-align: left;
            padding: 12px 16px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
            background: var(--bg);
            border-bottom: 2px solid var(--border);
        }

        td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            vertical-align: top;
        }

        tr:last-child td {
            border: none;
        }

        tr:hover td {
            background: #f8fafc;
        }

        .msg {
            max-width: 340px;
            color: #3f556b;
            line-height: 1.5;
        }

        .status-cell {
            min-width: 170px;
        }

        .status-select {
            width: 100%;
            max-width: 150px;
            padding: 7px 10px;
            border: 1px solid var(--border);
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            outline: none;
            transition: border-color .2s, box-shadow .2s;
            background: #fff;
            color: #334a5f;
            cursor: pointer;
        }

        .status-select:focus {
            border-color: #6ba6d3;
            box-shadow: 0 0 0 3px rgba(67, 155, 212, .18);
        }

        .status-select.status-new {
            background: #ebf8ff;
            border-color: #b6dbf5;
            color: #2d6a9f;
        }

        .status-select.status-in_progress {
            background: #fff7e8;
            border-color: #f6d59f;
            color: #b06f00;
        }

        .status-select.status-resolved {
            background: #eafaf1;
            border-color: #bfe8cf;
            color: #1f8a4c;
        }

        .status-select.status-closed {
            background: #f1f3f5;
            border-color: #d8dde3;
            color: #5f6b76;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-danger {
            background: var(--red);
            color: #fff;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .btn-light {
            background: #ecf4fb;
            color: #2d6a9f;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
            padding: 18px;
        }

        .pagination button {
            padding: 6px 12px;
            border: 1px solid var(--border);
            border-radius: 6px;
            background: #fff;
            color: var(--text);
            font-size: 13px;
            cursor: pointer;
        }

        .pagination button.active {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        .pagination button:disabled {
            opacity: .4;
            cursor: default;
        }

        .page-info {
            font-size: 12px;
            color: var(--muted);
        }

        .empty-state {
            text-align: center;
            padding: 48px 20px;
            color: var(--muted);
            font-size: 14px;
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
            transition: opacity .3s, transform .3s;
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

        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .4);
            z-index: 300;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.open {
            display: flex;
        }

        .modal-box {
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            max-width: 560px;
            width: 92%;
            box-shadow: 0 12px 40px rgba(0, 0, 0, .18);
        }

        .modal-box h3 {
            font-size: 18px;
            margin-bottom: 12px;
            color: var(--primary-d);
        }

        .modal-body p {
            margin-bottom: 10px;
            color: #334a5f;
            line-height: 1.6;
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 14px;
        }

        tr.unread td {
            background: #f0f7ff !important;
            font-weight: 500;
        }

        tr:hover.unread td {
            background: #e6f2ff !important;
        }

        input[type="checkbox"].read-checkbox {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--primary);
        }

        @media (max-width: 900px) {
            .main {
                margin-left: 0;
                width: 100%;
            }

            .topbar {
                padding: 0 12px 0 58px;
                min-height: 56px;
                height: auto;
                gap: 8px;
            }

            .topbar-title {
                font-size: 15px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .topbar-right {
                gap: 8px;
                min-width: 0;
            }

            .topbar-time {
                display: none;
            }

            .user-info {
                display: none;
            }

            .avatar {
                width: 32px;
                height: 32px;
                font-size: 13px;
            }

            .content {
                padding: 12px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 6px;
                margin-bottom: 14px;
            }

            .page-header h2 {
                font-size: 19px;
            }

            .toolbar {
                gap: 10px;
                margin-bottom: 14px;
            }

            .toolbar input[type="text"],
            .toolbar select {
                width: 100%;
            }

            .card {
                width: 100%;
                min-width: 0;
                overflow-x: auto;
                border-radius: 12px;
            }

            .card table {
                min-width: 980px;
            }

            th,
            td {
                padding: 10px 12px;
                white-space: nowrap;
            }

            .msg {
                max-width: 180px;
            }

            .pagination {
                flex-wrap: wrap;
                gap: 6px;
                padding: 14px 12px;
                justify-content: center;
            }

            .pagination button {
                min-width: 36px;
            }
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Thông tin liên hệ</div>
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
            <div class="page-header">
                <h2>Liên hệ từ website</h2>
            </div>

            <div class="toolbar">
                <input type="text" id="searchInput" placeholder="Tìm theo tên, SĐT, email, nội dung...">
                <select id="statusFilter">
                    <option value="">Tất cả trạng thái</option>
                    <option value="new">Mới</option>
                    <option value="in_progress">Đang xử lý</option>
                    <option value="resolved">Đã xử lý</option>
                    <option value="closed">Đóng</option>
                </select>
            </div>

            <div class="card">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Họ tên</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Loại</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                            <th>Đã đọc</th>
                            <th>Ngày gửi</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="contactTable">
                        <tr>
                            <td colspan="10" class="empty-state">Đang tải...</td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination" id="pagination"></div>
            </div>
        </div>
    </div>

    <div class="modal-overlay" id="viewModal">
        <div class="modal-box">
            <h3>Nội dung liên hệ</h3>
            <div class="modal-body" id="viewContent"></div>
            <div class="modal-actions">
                <button class="btn btn-light" onclick="closeViewModal()">Đóng</button>
            </div>
        </div>
    </div>

    <div class="toast" id="toast"></div>

    <script>
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

        document.getElementById('userMenu').addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('userDropdown').classList.toggle('open');
        });
        document.addEventListener('click', function() {
            document.getElementById('userDropdown').classList.remove('open');
        });

        let currentPage = 1;

        function escHtml(s) {
            const d = document.createElement('div');
            d.textContent = s == null ? '' : s;
            return d.innerHTML;
        }

        function formatDate(s) {
            if (!s) return '—';
            const d = new Date(s);
            const dd = String(d.getDate()).padStart(2, '0');
            const mm = String(d.getMonth() + 1).padStart(2, '0');
            const yy = d.getFullYear();
            const hh = String(d.getHours()).padStart(2, '0');
            const mi = String(d.getMinutes()).padStart(2, '0');
            return dd + '/' + mm + '/' + yy + ' ' + hh + ':' + mi;
        }

        function audienceLabel(v) {
            const map = {
                parent: 'Phụ huynh',
                student: 'Học sinh',
                partner: 'Đối tác',
                other: 'Khác'
            };
            return map[v] || v;
        }

        function statusOptions(currentStatus) {
            return '' +
                '<option value="new"' + (currentStatus === 'new' ? ' selected' : '') + '>Mới</option>' +
                '<option value="in_progress"' + (currentStatus === 'in_progress' ? ' selected' : '') + '>Đang xử lý</option>' +
                '<option value="resolved"' + (currentStatus === 'resolved' ? ' selected' : '') + '>Đã xử lý</option>' +
                '<option value="closed"' + (currentStatus === 'closed' ? ' selected' : '') + '>Đóng</option>';
        }

        function loadContacts(page) {
            currentPage = page || 1;
            const search = document.getElementById('searchInput').value;
            const status = document.getElementById('statusFilter').value;
            const params = new URLSearchParams({
                page: currentPage,
                search,
                status
            });

            fetch('api/contact-submissions.php?' + params)
                .then(r => r.json())
                .then(res => {
                    if (!res.success) {
                        showToast(res.message || 'Không tải được dữ liệu', 'error');
                        return;
                    }
                    renderTable(res.data, res.total, res.page, res.totalPages);
                })
                .catch(() => showToast('Lỗi kết nối server', 'error'));
        }

        function renderTable(rows, total, page, totalPages) {
            const tbody = document.getElementById('contactTable');
            if (!rows.length) {
                tbody.innerHTML = '<tr><td colspan="10" class="empty-state">Chưa có liên hệ nào.</td></tr>';
                document.getElementById('pagination').innerHTML = '';
                return;
            }

            const offset = (page - 1) * 10;
            tbody.innerHTML = rows.map((r, i) => {
                const shortMsg = (r.submission_type === 'consultation' ? (r.consultation_need || '') : (r.message || '')).length > 60 ? (r.submission_type === 'consultation' ? (r.consultation_need || '') : (r.message || '')).slice(0, 60) + '...' : (r.submission_type === 'consultation' ? (r.consultation_need || '') : (r.message || ''));
                const statusClass = 'status-' + (r.status || 'new');
                const unreadClass = !r.is_read ? 'unread' : '';
                const typeLabel = r.submission_type === 'consultation' ? '<span style="background:#e8f4f8;color:#0277bd;padding:3px 8px;border-radius:4px;font-size:12px;font-weight:600;">TƯ VẤN</span>' : '<span style="background:#f3e5f5;color:#6a1b9a;padding:3px 8px;border-radius:4px;font-size:12px;font-weight:600;">LIÊN HỆ</span>';
                return '<tr class="' + unreadClass + '">' +
                    '<td>' + (offset + i + 1) + '</td>' +
                    '<td>' + escHtml(r.full_name) + '</td>' +
                    '<td>' + escHtml(r.phone) + '</td>' +
                    '<td>' + escHtml(r.email || '—') + '</td>' +
                    '<td>' + typeLabel + '</td>' +
                    '<td class="msg">' + escHtml(shortMsg) + '</td>' +
                    '<td class="status-cell">' +
                    '<select class="status-select ' + statusClass + '" onchange="updateStatus(' + r.id + ', this.value, this)">' +
                    statusOptions(r.status) +
                    '</select>' +
                    '</td>' +
                    '<td style="text-align:center;padding:8px 16px;">' +
                    '<input type="checkbox" class="read-checkbox" ' + (r.is_read ? 'checked' : '') + ' onchange="markRead(' + r.id + ', this.checked)">' +
                    '</td>' +
                    '<td>' + escHtml(formatDate(r.created_at)) + '</td>' +
                    '<td>' +
                    '<button class="btn btn-light" onclick="viewMessage(' + r.id + ')">Xem</button> ' +
                    '<button class="btn btn-danger" onclick="deleteContact(' + r.id + ')">Xóa</button>' +
                    '</td>' +
                    '</tr>';
            }).join('');

            let pagHtml = '<span class="page-info">' + total + ' liên hệ</span>';
            pagHtml += '<button ' + (page <= 1 ? 'disabled' : '') + ' onclick="loadContacts(' + (page - 1) + ')">&laquo;</button>';
            for (let p = 1; p <= totalPages; p++) {
                pagHtml += '<button class="' + (p === page ? 'active' : '') + '" onclick="loadContacts(' + p + ')">' + p + '</button>';
            }
            pagHtml += '<button ' + (page >= totalPages ? 'disabled' : '') + ' onclick="loadContacts(' + (page + 1) + ')">&raquo;</button>';
            document.getElementById('pagination').innerHTML = pagHtml;
        }

        function updateStatus(id, status, selectEl) {
            const fd = new FormData();
            fd.append('id', id);
            fd.append('status', status);

            if (selectEl) {
                selectEl.className = 'status-select status-' + status;
            }

            fetch('api/contact-submissions.php?_method=PUT', {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast('Đã cập nhật trạng thái', 'success');
                    } else {
                        showToast(res.message || 'Cập nhật thất bại', 'error');
                        loadContacts(currentPage);
                    }
                })
                .catch(() => {
                    showToast('Lỗi kết nối', 'error');
                    loadContacts(currentPage);
                });
        }

        function deleteContact(id) {
            if (!confirm('Bạn có chắc muốn xóa liên hệ này?')) return;
            const fd = new FormData();
            fd.append('id', id);

            fetch('api/contact-submissions.php?_method=DELETE', {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast('Đã xóa liên hệ', 'success');
                        loadContacts(currentPage);
                    } else {
                        showToast(res.message || 'Xóa thất bại', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        function markRead(id, isChecked) {
            const fd = new FormData();
            fd.append('id', id);
            if (isChecked) fd.append('is_read', '1');

            fetch('api/contact-submissions.php?_method=PATCH', {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(isChecked ? 'Đánh dấu đã đọc' : 'Đánh dấu chưa đọc', 'success');
                        if (window.refreshContactBadge) window.refreshContactBadge();
                        loadContacts(currentPage);
                    } else {
                        showToast(res.message || 'Cập nhật thất bại', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        function viewMessage(id) {
            fetch('api/contact-submissions.php?id=' + id)
                .then(r => r.json())
                .then(res => {
                    if (!res.success || !res.data) {
                        showToast('Không lấy được nội dung', 'error');
                        return;
                    }
                    const d = res.data;
                    let html = '<p><b>Họ tên:</b> ' + escHtml(d.full_name) + '</p>' +
                        '<p><b>Điện thoại:</b> ' + escHtml(d.phone) + '</p>' +
                        '<p><b>Email:</b> ' + escHtml(d.email || '—') + '</p>' +
                        '<p><b>Đối tượng:</b> ' + escHtml(audienceLabel(d.audience_type)) + '</p>';

                    if (d.submission_type === 'consultation') {
                        html += '<p><b>Loại:</b> Yêu cầu tư vấn</p>' +
                            '<p><b>Năm sinh:</b> ' + escHtml(d.school_year || '—') + '</p>' +
                            '<p><b>Lớp học:</b> ' + escHtml(d.grade || '—') + '</p>' +
                            '<p><b>Trường hiện tại:</b> ' + escHtml(d.school_name || '—') + '</p>' +
                            '<p><b>Nội dung cần tư vấn:</b><br>' + escHtml(d.consultation_need || '') + '</p>';
                    } else {
                        html += '<p><b>Nội dung:</b><br>' + escHtml(d.message || '') + '</p>';
                    }

                    document.getElementById('viewContent').innerHTML = html;
                    document.getElementById('viewModal').classList.add('open');
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        function closeViewModal() {
            document.getElementById('viewModal').classList.remove('open');
        }

        let searchTimer;
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(function() {
                loadContacts(1);
            }, 300);
        });
        document.getElementById('statusFilter').addEventListener('change', function() {
            loadContacts(1);
        });

        function showToast(msg, type) {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.className = 'toast toast-' + type + ' show';
            setTimeout(function() {
                t.classList.remove('show');
            }, 2800);
        }

        loadContacts(1);
    </script>
</body>

</html>