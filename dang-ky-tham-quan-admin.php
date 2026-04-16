<?php
session_start();
require_once __DIR__ . '/dashboard/access.php';
dashboard_require_access('tour');
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$_sidebar_page = 'dang-ky-tham-quan-admin.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Đăng ký tham quan | Meyschool Đoàn Thị Điểm</title>
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
            --bg: #f4f6f9;
            --card: #ffffff;
            --text: #2c3e50;
            --muted: #7a8fa6;
            --border: #e2e8f0;
            --green: #27ae60;
            --yellow: #f39c12;
            --blue: #439bd4;
            --red: #e74c3c;
            --gray: #5f6b76;
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
            margin-bottom: 18px;
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
            width: 340px;
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

        .status-select {
            width: 100%;
            max-width: 150px;
            padding: 7px 10px;
            border: 1px solid var(--border);
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            outline: none;
            background: #fff;
            color: #334a5f;
            cursor: pointer;
        }

        .status-select.status-moi {
            background: #ebf8ff;
            border-color: #b6dbf5;
            color: #2d6a9f;
        }

        .status-select.status-da_lien_he {
            background: #fff7e8;
            border-color: #f6d59f;
            color: #b06f00;
        }

        .status-select.status-da_xep_lich {
            background: #e8f7ff;
            border-color: #b7dcf0;
            color: #10608a;
        }

        .status-select.status-da_tham_quan {
            background: #eafaf1;
            border-color: #bfe8cf;
            color: #1f8a4c;
        }

        .status-select.status-huy {
            background: #f1f3f5;
            border-color: #d8dde3;
            color: var(--gray);
        }

        .read-checkbox {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--primary);
        }

        tr.unread td {
            background: #f0f7ff !important;
            font-weight: 500;
        }

        tr:hover.unread td {
            background: #e6f2ff !important;
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

        .action-cell {
            white-space: nowrap;
            vertical-align: middle;
        }

        .action-wrap {
            display: inline-flex;
            align-items: center;
            gap: 8px;
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
            max-width: 640px;
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

        .msg-col {
            max-width: 260px;
            color: #3f556b;
            line-height: 1.5;
            word-break: break-word;
        }

        .grade-badge {
            display: inline-block;
            background: #e8f4f8;
            color: #0277bd;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }

        @media (max-width: 900px) {
            .main {
                margin-left: 0;
            }

            .toolbar input[type="text"] {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Đăng ký tham quan</div>
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
                <h2>Danh sách đăng ký tham quan</h2>
            </div>

            <div class="toolbar">
                <input type="text" id="searchInput" placeholder="Tìm theo phụ huynh, SĐT, email, học sinh...">
                <select id="statusFilter">
                    <option value="">Tất cả trạng thái</option>
                    <option value="moi">Mới</option>
                    <option value="da_lien_he">Đã liên hệ</option>
                    <option value="da_xep_lich">Đã xếp lịch</option>
                    <option value="da_tham_quan">Đã tham quan</option>
                    <option value="huy">Đã hủy</option>
                </select>
            </div>

            <div class="card">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Phụ huynh</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Học sinh</th>
                            <th>Cấp học</th>
                            <th>Ghi chú</th>
                            <th>Trạng thái</th>
                            <th>Đã đọc</th>
                            <th>Ngày gửi</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="tourTable">
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
            <h3>Chi tiết đăng ký tham quan</h3>
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

        function gradeLabel(v) {
            const map = {
                'tieu-hoc': 'Tiểu học',
                'thcs': 'THCS',
                'thpt': 'THPT'
            };
            return map[v] || v;
        }

        function statusLabel(v) {
            const map = {
                'moi': 'Mới',
                'da_lien_he': 'Đã liên hệ',
                'da_xep_lich': 'Đã xếp lịch',
                'da_tham_quan': 'Đã tham quan',
                'huy': 'Đã hủy'
            };
            return map[v] || v;
        }

        function statusOptions(currentStatus) {
            return '' +
                '<option value="moi"' + (currentStatus === 'moi' ? ' selected' : '') + '>Mới</option>' +
                '<option value="da_lien_he"' + (currentStatus === 'da_lien_he' ? ' selected' : '') +
                '>Đã liên hệ</option>' +
                '<option value="da_xep_lich"' + (currentStatus === 'da_xep_lich' ? ' selected' : '') +
                '>Đã xếp lịch</option>' +
                '<option value="da_tham_quan"' + (currentStatus === 'da_tham_quan' ? ' selected' : '') +
                '>Đã tham quan</option>' +
                '<option value="huy"' + (currentStatus === 'huy' ? ' selected' : '') + '>Đã hủy</option>';
        }

        function loadTours(page) {
            currentPage = page || 1;
            const search = document.getElementById('searchInput').value;
            const status = document.getElementById('statusFilter').value;
            const params = new URLSearchParams({
                page: currentPage,
                search,
                status
            });

            fetch('api/tour-submissions.php?' + params)
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
            const tbody = document.getElementById('tourTable');
            if (!rows.length) {
                tbody.innerHTML = '<tr><td colspan="11" class="empty-state">Chưa có đăng ký tham quan nào.</td></tr>';
                document.getElementById('pagination').innerHTML = '';
                return;
            }

            const offset = (page - 1) * 10;
            tbody.innerHTML = rows.map((r, i) => {
                const shortMsg = (r.message || '').length > 45 ? (r.message || '').slice(0, 45) + '...' : (r
                    .message || '—');
                const unreadClass = !Number(r.is_read) ? 'unread' : '';
                return '<tr class="' + unreadClass + '">' +
                    '<td>' + (offset + i + 1) + '</td>' +
                    '<td>' + escHtml(r.parent_name) + '</td>' +
                    '<td>' + escHtml(r.phone) + '</td>' +
                    '<td>' + escHtml(r.email || '—') + '</td>' +
                    '<td>' + escHtml(r.student_name) + ' (' + escHtml(r.birth_year) + ')</td>' +
                    '<td><span class="grade-badge">' + escHtml(gradeLabel(r.grade_level)) + '</span></td>' +
                    '<td class="msg-col">' + escHtml(shortMsg) + '</td>' +
                    '<td>' +
                    '<select class="status-select status-' + (r.status || 'moi') + '" onchange="updateStatus(' + r
                    .id + ', this.value, this)">' +
                    statusOptions(r.status || 'moi') +
                    '</select>' +
                    '</td>' +
                    '<td style="text-align:center;padding:16px 16px;">' +
                    '<input type="checkbox" class="read-checkbox" ' + (Number(r.is_read) ? 'checked' : '') +
                    ' onchange="markRead(' + r.id + ', this.checked)">' +
                    '</td>' +
                    '<td>' + escHtml(formatDate(r.created_at)) + '</td>' +
                    '<td class="action-cell">' +
                    '<div class="action-wrap">' +
                    '<button class="btn btn-light" onclick="viewTour(' + r.id + ')">Xem</button>' +
                    '<button class="btn btn-danger" onclick="deleteTour(' + r.id + ')">Xóa</button>' +
                    '</div>' +
                    '</td>' +
                    '</tr>';
            }).join('');

            let pagHtml = '<span class="page-info">' + total + ' đăng ký</span>';
            pagHtml += '<button ' + (page <= 1 ? 'disabled' : '') + ' onclick="loadTours(' + (page - 1) +
                ')">&laquo;</button>';
            for (let p = 1; p <= totalPages; p++) {
                pagHtml += '<button class="' + (p === page ? 'active' : '') + '" onclick="loadTours(' + p + ')">' + p +
                    '</button>';
            }
            pagHtml += '<button ' + (page >= totalPages ? 'disabled' : '') + ' onclick="loadTours(' + (page + 1) +
                ')">&raquo;</button>';
            document.getElementById('pagination').innerHTML = pagHtml;
        }

        function updateStatus(id, status, selectEl) {
            const fd = new FormData();
            fd.append('id', id);
            fd.append('status', status);

            if (selectEl) {
                selectEl.className = 'status-select status-' + status;
            }

            fetch('api/tour-submissions.php?_method=PUT', {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast('Đã cập nhật trạng thái', 'success');
                    } else {
                        showToast(res.message || 'Cập nhật thất bại', 'error');
                        loadTours(currentPage);
                    }
                })
                .catch(() => {
                    showToast('Lỗi kết nối', 'error');
                    loadTours(currentPage);
                });
        }

        function markRead(id, isChecked) {
            const fd = new FormData();
            fd.append('id', id);
            if (isChecked) fd.append('is_read', '1');

            fetch('api/tour-submissions.php?_method=PATCH', {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast(isChecked ? 'Đã đánh dấu đã đọc' : 'Đã đánh dấu chưa đọc', 'success');
                        if (window.refreshTourBadge) window.refreshTourBadge();
                        loadTours(currentPage);
                    } else {
                        showToast(res.message || 'Cập nhật thất bại', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        function deleteTour(id) {
            if (!confirm('Bạn có chắc muốn xóa đăng ký này?')) return;
            const fd = new FormData();
            fd.append('id', id);

            fetch('api/tour-submissions.php?_method=DELETE', {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(res => {
                    if (res.success) {
                        showToast('Đã xóa đăng ký', 'success');
                        loadTours(currentPage);
                    } else {
                        showToast(res.message || 'Xóa thất bại', 'error');
                    }
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        function viewTour(id) {
            fetch('api/tour-submissions.php?id=' + id)
                .then(r => r.json())
                .then(res => {
                    if (!res.success || !res.data) {
                        showToast('Không lấy được chi tiết', 'error');
                        return;
                    }
                    const d = res.data;
                    let html = '' +
                        '<p><b>Phụ huynh:</b> ' + escHtml(d.parent_name) + '</p>' +
                        '<p><b>Điện thoại:</b> ' + escHtml(d.phone) + '</p>' +
                        '<p><b>Email:</b> ' + escHtml(d.email || '—') + '</p>' +
                        '<p><b>Học sinh:</b> ' + escHtml(d.student_name) + '</p>' +
                        '<p><b>Năm sinh:</b> ' + escHtml(d.birth_year) + '</p>' +
                        '<p><b>Cấp học:</b> ' + escHtml(gradeLabel(d.grade_level)) + '</p>' +
                        '<p><b>Thời gian mong muốn:</b> ' + escHtml(d.preferred_time || '—') + '</p>' +
                        '<p><b>Ghi chú phụ huynh:</b><br>' + escHtml(d.message || '—') + '</p>' +
                        '<p><b>Trạng thái:</b> ' + escHtml(statusLabel(d.status || 'moi')) + '</p>' +
                        '<p><b>Ngày gửi:</b> ' + escHtml(formatDate(d.created_at)) + '</p>';

                    document.getElementById('viewContent').innerHTML = html;
                    document.getElementById('viewModal').classList.add('open');
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        }

        function closeViewModal() {
            document.getElementById('viewModal').classList.remove('open');
        }

        function showToast(msg, type) {
            const el = document.getElementById('toast');
            el.textContent = msg;
            el.className = 'toast ' + (type === 'success' ? 'toast-success' : 'toast-error') + ' show';
            clearTimeout(showToast._t);
            showToast._t = setTimeout(() => {
                el.classList.remove('show');
            }, 2200);
        }

        let _debounce;
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(_debounce);
            _debounce = setTimeout(() => loadTours(1), 350);
        });
        document.getElementById('statusFilter').addEventListener('change', function() {
            loadTours(1);
        });

        document.getElementById('viewModal').addEventListener('click', function(e) {
            if (e.target.id === 'viewModal') closeViewModal();
        });

        loadTours(1);
    </script>
</body>

</html>