<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    header('Location: log-in.php');
    exit;
}
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Quản lý Sự kiện | Meyschool Đoàn Thị Điểm</title>
    <link rel="shortcut icon" href="storage/favicon.png">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --sidebar-w: 220px; --top-h: 60px;
            --primary: #2d6a9f; --primary-d: #1f3f5d; --accent: #439bd4;
            --bg: #f4f6f9; --card: #ffffff; --text: #2c3e50;
            --muted: #7a8fa6; --border: #e2e8f0;
            --green: #27ae60; --yellow: #f39c12; --purple: #8e44ad; --red: #e74c3c;
        }

        body { font-family: 'Segoe UI', Arial, sans-serif; background: var(--bg); color: var(--text); display: flex; min-height: 100vh; }
        .main { margin-left: var(--sidebar-w); flex: 1; display: flex; flex-direction: column; min-height: 100vh; }

        .topbar { height: var(--top-h); background: var(--card); border-bottom: 1px solid var(--border); display: flex; align-items: center; justify-content: space-between; padding: 0 28px; position: sticky; top: 0; z-index: 50; }
        .topbar-title { font-size: 17px; font-weight: 700; color: var(--primary-d); }
        .topbar-right { display: flex; align-items: center; gap: 16px; }
        .topbar-time { font-size: 12px; color: var(--muted); }
        .topbar-user { display: flex; align-items: center; gap: 10px; cursor: pointer; position: relative; }
        .avatar { width: 36px; height: 36px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 15px; }
        .user-info { text-align: right; line-height: 1.3; }
        .user-info .name { font-size: 13px; font-weight: 600; }
        .user-info .role { font-size: 11px; color: var(--muted); }
        .user-dropdown { display: none; position: absolute; top: calc(100% + 8px); right: 0; background: #fff; border: 1px solid var(--border); border-radius: 10px; box-shadow: 0 8px 24px rgba(0,0,0,.12); min-width: 160px; overflow: hidden; z-index: 200; }
        .user-dropdown.open { display: block; }
        .user-dropdown a { display: flex; align-items: center; gap: 8px; padding: 11px 16px; font-size: 13px; color: var(--text); text-decoration: none; }
        .user-dropdown a:hover { background: var(--bg); }
        .user-dropdown a.logout { color: var(--red); }

        .content { flex: 1; padding: 28px; }
        .page-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; flex-wrap: wrap; gap: 12px; }
        .page-header h2 { font-size: 22px; font-weight: 700; color: var(--primary-d); }

        .btn { display: inline-flex; align-items: center; gap: 6px; padding: 9px 18px; border-radius: 8px; font-size: 13px; font-weight: 600; border: none; cursor: pointer; text-decoration: none; transition: background .2s; }
        .btn-primary { background: var(--primary); color: #fff; }
        .btn-primary:hover { background: var(--primary-d); }
        .btn-danger { background: var(--red); color: #fff; }
        .btn-danger:hover { background: #c0392b; }
        .btn-sm { padding: 5px 12px; font-size: 12px; }
        .btn-outline { background: transparent; border: 1px solid var(--border); color: var(--text); }
        .btn-outline:hover { background: var(--bg); }

        .toolbar { display: flex; gap: 12px; margin-bottom: 18px; flex-wrap: wrap; align-items: center; }
        .toolbar input[type="text"], .toolbar select { padding: 8px 14px; border: 1px solid var(--border); border-radius: 8px; font-size: 13px; background: #fff; color: var(--text); outline: none; }
        .toolbar input[type="text"] { width: 280px; }
        .toolbar input:focus, .toolbar select:focus { border-color: var(--accent); }

        .card { background: var(--card); border: 1px solid var(--border); border-radius: 12px; overflow: hidden; }
        table { width: 100%; border-collapse: collapse; font-size: 13.5px; }
        th { text-align: left; padding: 12px 16px; color: var(--muted); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .5px; background: var(--bg); border-bottom: 2px solid var(--border); }
        td { padding: 12px 16px; border-bottom: 1px solid var(--border); vertical-align: middle; }
        tr:last-child td { border: none; }
        tr:hover td { background: #f8fafc; }

        .thumb-cell img { width: 72px; height: 48px; object-fit: cover; border-radius: 6px; }
        .thumb-placeholder { width: 72px; height: 48px; border-radius: 6px; background: var(--bg); display: flex; align-items: center; justify-content: center; color: var(--muted); font-size: 18px; }
        .title-cell { max-width: 280px; }
        .title-cell a { color: var(--primary-d); text-decoration: none; font-weight: 600; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .title-cell a:hover { color: var(--accent); }

        .event-date-cell { font-size: 13px; color: var(--text); white-space: nowrap; }
        .event-date-cell .date { font-weight: 600; }
        .event-date-cell .location { font-size: 12px; color: var(--muted); margin-top: 2px; }

        .badge { display: inline-flex; align-items: center; padding: 3px 10px; border-radius: 30px; font-size: 11px; font-weight: 600; }
        .badge-pub  { background: #eafaf1; color: #27ae60; }
        .badge-draft{ background: #fef9e7; color: #f39c12; }
        .badge-hidden{ background: #f0f0f0; color: #7f8c8d; }
        .badge-feat { background: #f5eef8; color: #8e44ad; }

        .actions { display: flex; gap: 6px; }
        .empty-state { text-align: center; padding: 48px 20px; color: var(--muted); font-size: 14px; }

        .pagination { display: flex; justify-content: center; align-items: center; gap: 6px; padding: 18px; }
        .pagination button { padding: 6px 12px; border: 1px solid var(--border); border-radius: 6px; background: #fff; color: var(--text); font-size: 13px; cursor: pointer; }
        .pagination button:hover { background: var(--bg); }
        .pagination button.active { background: var(--primary); color: #fff; border-color: var(--primary); }
        .pagination button:disabled { opacity: .4; cursor: default; }
        .page-info { font-size: 12px; color: var(--muted); }

        .modal-overlay { display: none; position: fixed; inset: 0; background: rgba(0,0,0,.4); z-index: 300; align-items: center; justify-content: center; }
        .modal-overlay.open { display: flex; }
        .modal-box { background: #fff; border-radius: 14px; padding: 28px; max-width: 420px; width: 90%; text-align: center; box-shadow: 0 12px 40px rgba(0,0,0,.18); }
        .modal-box h3 { font-size: 18px; margin-bottom: 10px; color: var(--primary-d); }
        .modal-box p { font-size: 14px; color: var(--muted); margin-bottom: 22px; }
        .modal-actions { display: flex; gap: 10px; justify-content: center; }

        .toast { position: fixed; top: 20px; right: 20px; padding: 12px 22px; border-radius: 10px; color: #fff; font-size: 14px; font-weight: 500; z-index: 500; opacity: 0; transform: translateY(-10px); transition: opacity .3s, transform .3s; pointer-events: none; }
        .toast.show { opacity: 1; transform: translateY(0); }
        .toast-success { background: var(--green); }
        .toast-error   { background: var(--red); }

        @media (max-width: 700px) { .main { margin-left: 0; } .toolbar input[type="text"] { width: 100%; } }
    </style>
</head>
<body>
    <?php include __DIR__ . '/dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Quản lý Sự kiện</div>
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
                <h2>Sự kiện trường</h2>
                <a href="them-su-kien.php" class="btn btn-primary">+ Thêm sự kiện</a>
            </div>

            <div class="toolbar">
                <input type="text" id="searchInput" placeholder="Tìm kiếm tiêu đề...">
                <select id="statusFilter">
                    <option value="">Tất cả trạng thái</option>
                    <option value="xuat-ban">Xuất bản</option>
                    <option value="nhap">Nháp</option>
                    <option value="an">Ẩn</option>
                </select>
            </div>

            <div class="card">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ảnh</th>
                            <th>Tên sự kiện</th>
                            <th>Ngày & Địa điểm</th>
                            <th>Trạng thái</th>
                            <th>Nổi bật</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="eventTable">
                        <tr><td colspan="7" class="empty-state">Đang tải...</td></tr>
                    </tbody>
                </table>
                <div class="pagination" id="pagination"></div>
            </div>
        </div>
    </div>

    <div class="modal-overlay" id="deleteModal">
        <div class="modal-box">
            <h3>Xác nhận xóa</h3>
            <p>Bạn có chắc muốn xóa sự kiện này? Hành động không thể hoàn tác.</p>
            <div class="modal-actions">
                <button class="btn btn-outline" onclick="closeDeleteModal()">Hủy</button>
                <button class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
            </div>
        </div>
    </div>

    <div class="toast" id="toast"></div>

    <script>
        (function clock() {
            function pad(n) { return String(n).padStart(2, '0'); }
            function tick() {
                var d = new Date();
                document.getElementById('clock').textContent =
                    pad(d.getHours()) + ':' + pad(d.getMinutes()) + ':' + pad(d.getSeconds()) +
                    '  ' + d.getDate() + '/' + (d.getMonth()+1) + '/' + d.getFullYear();
            }
            tick(); setInterval(tick, 1000);
        })();

        document.getElementById('userMenu').addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('userDropdown').classList.toggle('open');
        });
        document.addEventListener('click', function() {
            document.getElementById('userDropdown').classList.remove('open');
        });

        let currentPage = 1;
        let deleteId    = null;

        function loadEvents(page) {
            currentPage = page || 1;
            const search = document.getElementById('searchInput').value;
            const status = document.getElementById('statusFilter').value;
            const params = new URLSearchParams({ page: currentPage, search, status });

            fetch('api/events.php?' + params)
                .then(r => r.json())
                .then(res => { if (res.success) renderTable(res.data, res.total, res.page, res.totalPages); })
                .catch(() => showToast('Lỗi kết nối server', 'error'));
        }

        function renderTable(rows, total, page, totalPages) {
            const tbody = document.getElementById('eventTable');
            if (!rows.length) {
                tbody.innerHTML = '<tr><td colspan="7" class="empty-state">Chưa có sự kiện nào.</td></tr>';
                document.getElementById('pagination').innerHTML = '';
                return;
            }

            const offset    = (page - 1) * 10;
            const statusMap = {
                'xuat-ban': '<span class="badge badge-pub">Xuất bản</span>',
                'nhap':     '<span class="badge badge-draft">Nháp</span>',
                'an':       '<span class="badge badge-hidden">Ẩn</span>'
            };

            tbody.innerHTML = rows.map((r, i) => `
                <tr>
                    <td>${offset + i + 1}</td>
                    <td class="thumb-cell">
                        ${r.thumbnail ? `<img src="${escHtml(r.thumbnail)}" alt="">` : '<div class="thumb-placeholder">&#128247;</div>'}
                    </td>
                    <td class="title-cell">
                        <a href="them-su-kien.php?id=${r.id}">${escHtml(r.title)}</a>
                    </td>
                    <td class="event-date-cell">
                        <div class="date">${r.event_date ? formatDate(r.event_date) : '—'}</div>
                        <div class="location">${r.event_location ? escHtml(r.event_location) : ''}</div>
                    </td>
                    <td>${statusMap[r.status] || r.status}</td>
                    <td>${r.is_featured == 1 ? '<span class="badge badge-feat">&#9733; Nổi bật</span>' : '—'}</td>
                    <td class="actions">
                        <a href="them-su-kien.php?id=${r.id}" class="btn btn-sm btn-outline">Sửa</a>
                        <button class="btn btn-sm btn-danger" onclick="openDeleteModal(${r.id})">Xóa</button>
                    </td>
                </tr>
            `).join('');

            let pagHtml = `<span class="page-info">${total} sự kiện</span>`;
            pagHtml += `<button ${page <= 1 ? 'disabled' : ''} onclick="loadEvents(${page-1})">&laquo;</button>`;
            for (let p = 1; p <= totalPages; p++) {
                pagHtml += `<button class="${p===page?'active':''}" onclick="loadEvents(${p})">${p}</button>`;
            }
            pagHtml += `<button ${page >= totalPages ? 'disabled' : ''} onclick="loadEvents(${page+1})">&raquo;</button>`;
            document.getElementById('pagination').innerHTML = pagHtml;
        }

        function openDeleteModal(id) { deleteId = id; document.getElementById('deleteModal').classList.add('open'); }
        function closeDeleteModal() { deleteId = null; document.getElementById('deleteModal').classList.remove('open'); }

        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            if (!deleteId) return;
            const fd = new FormData(); fd.append('id', deleteId);
            fetch('api/events.php?_method=DELETE', { method: 'POST', body: fd })
                .then(r => r.json())
                .then(res => {
                    closeDeleteModal();
                    if (res.success) { showToast('Đã xóa sự kiện', 'success'); loadEvents(currentPage); }
                    else showToast(res.message, 'error');
                })
                .catch(() => showToast('Lỗi kết nối', 'error'));
        });

        let searchTimer;
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(searchTimer); searchTimer = setTimeout(() => loadEvents(1), 350);
        });
        document.getElementById('statusFilter').addEventListener('change', () => loadEvents(1));

        function escHtml(s) { const d = document.createElement('div'); d.textContent = s; return d.innerHTML; }
        function formatDate(str) {
            if (!str) return '—';
            const p = str.split('-');
            return p[2] + '/' + p[1] + '/' + p[0];
        }
        function showToast(msg, type) {
            const t = document.getElementById('toast');
            t.textContent = msg; t.className = 'toast toast-' + type + ' show';
            setTimeout(() => t.classList.remove('show'), 3000);
        }

        loadEvents(1);
    </script>
</body>
</html>
