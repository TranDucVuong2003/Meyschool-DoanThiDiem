<?php
session_start();
require_once __DIR__ . '/dashboard/access.php';
dashboard_require_access('users');
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$admin_username = htmlspecialchars($_SESSION['admin_username'] ?? '');
$admin_id = (int) ($_SESSION['admin_id'] ?? 0);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Quản lý người dùng | Meyschool Đoàn Thị Điểm</title>
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
            transition: background 0.15s;
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

        .toolbar {
            display: flex;
            gap: 12px;
            margin-bottom: 18px;
            flex-wrap: wrap;
        }

        .toolbar input[type="text"] {
            padding: 9px 14px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 13px;
            width: 280px;
            outline: none;
        }

        .toolbar input:focus {
            border-color: var(--accent);
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

        .btn-danger {
            background: var(--red);
            color: #fff;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .btn-sm {
            padding: 5px 12px;
            font-size: 12px;
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
            letter-spacing: 0.5px;
            background: var(--bg);
            border-bottom: 2px solid var(--border);
        }

        td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }

        tr:last-child td {
            border: none;
        }

        tr:hover td {
            background: #f8fafc;
        }

        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .empty {
            text-align: center;
            color: var(--muted);
            padding: 36px 0;
        }

        .pagination {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 8px;
            padding: 14px 16px;
            border-top: 1px solid var(--border);
        }

        .pagination .info {
            font-size: 12px;
            color: var(--muted);
            margin-right: 6px;
        }

        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(31, 63, 93, 0.55);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 999;
            padding: 16px;
        }

        .modal-overlay.open {
            display: flex;
        }

        .modal {
            width: 100%;
            max-width: 460px;
            background: #fff;
            border-radius: 12px;
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
        }

        .modal-head {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-d);
        }

        .modal-body {
            padding: 16px;
            display: grid;
            gap: 12px;
        }

        .field label {
            display: block;
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 6px;
        }

        .field input,
        .field select {
            width: 100%;
            height: 38px;
            padding: 0 12px;
            border: 1px solid var(--border);
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            background: #fff;
        }

        .field input:focus,
        .field select:focus {
            border-color: var(--accent);
        }

        .field .help {
            margin-top: 6px;
            font-size: 11px;
            color: var(--muted);
        }

        .modal-foot {
            padding: 12px 16px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 8px;
        }

        .alert {
            margin-bottom: 14px;
            padding: 10px 12px;
            border-radius: 8px;
            font-size: 13px;
            display: none;
        }

        .alert.show {
            display: block;
        }

        .alert.success {
            background: #eaf9ef;
            color: #1f7a3b;
            border: 1px solid #b8e7c8;
        }

        .alert.error {
            background: #fff1f1;
            color: #c0392b;
            border: 1px solid #f2c0bb;
        }

        @media (max-width: 860px) {
            .main {
                margin-left: 0;
            }

            .content {
                padding: 16px;
            }

            .toolbar input[type="text"] {
                width: 100%;
            }

            table {
                min-width: 680px;
            }

            .card {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/dashboard/sidebar.php'; ?>

    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Quản lý người dùng</div>
            <div class="topbar-right">
                <div class="topbar-time" id="currentTime"></div>
                <div class="topbar-user" id="userToggle">
                    <div class="user-info">
                        <div class="name"><?= $admin_name ?></div>
                        <div class="role">Quản trị viên</div>
                    </div>
                    <div class="avatar"><?= strtoupper(mb_substr($admin_name, 0, 1)) ?></div>
                    <div class="user-dropdown" id="userDropdown">
                        <a href="dashboard.php">Dashboard</a>
                        <a href="api/logout.php" class="logout">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </header>

        <main class="content">
            <div class="page-header">
                <h2>Danh sách người dùng</h2>
                <button class="btn btn-primary" id="btnCreate">+ Thêm người dùng</button>
            </div>

            <div id="alertBox" class="alert"></div>

            <div class="toolbar">
                <input id="searchInput" type="text" placeholder="Tìm theo tên đăng nhập hoặc tên hiển thị">
                <button class="btn btn-outline" id="btnSearch">Tìm</button>
                <button class="btn btn-outline" id="btnReset">Đặt lại</button>
            </div>

            <div class="card">
                <table>
                    <thead>
                        <tr>
                            <th style="width:72px">ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Tên hiển thị</th>
                            <th>Vai trò</th>
                            <th>Ngày tạo</th>
                            <th>Cập nhật</th>
                            <th style="width:210px">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="userTbody">
                        <tr>
                            <td colspan="7" class="empty">Đang tải dữ liệu...</td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <div class="info" id="pageInfo"></div>
                    <button class="btn btn-outline btn-sm" id="prevPage">Trước</button>
                    <button class="btn btn-outline btn-sm" id="nextPage">Sau</button>
                </div>
            </div>
        </main>
    </div>

    <div class="modal-overlay" id="userModal">
        <div class="modal">
            <div class="modal-head" id="modalTitle">Thêm người dùng</div>
            <div class="modal-body">
                <input type="hidden" id="userId">
                <div class="field">
                    <label for="usernameInput">Tên đăng nhập</label>
                    <input type="text" id="usernameInput" maxlength="100" placeholder="vd: admin01">
                </div>
                <div class="field">
                    <label for="nameInput">Tên hiển thị</label>
                    <input type="text" id="nameInput" maxlength="120" placeholder="vd: Nguyễn Văn A">
                </div>
                <div class="field">
                    <label for="roleInput">Vai trò</label>
                    <select id="roleInput"></select>
                </div>
                <div class="field">
                    <label for="passwordInput">Mật khẩu</label>
                    <input type="password" id="passwordInput" maxlength="200" placeholder="Ít nhất 6 ký tự">
                    <div class="help" id="passwordHelp">Khi tạo mới: bắt buộc nhập mật khẩu.</div>
                </div>
            </div>
            <div class="modal-foot">
                <button class="btn btn-outline" id="btnCancel">Hủy</button>
                <button class="btn btn-primary" id="btnSave">Lưu</button>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const state = {
                page: 1,
                totalPages: 1,
                search: '',
                editingId: null,
                roles: [],
            };

            const currentAdminUsername = <?= json_encode($admin_username, JSON_UNESCAPED_UNICODE) ?>;
            const currentAdminId = <?= (int) $admin_id ?>;
            const tbody = document.getElementById('userTbody');
            const pageInfo = document.getElementById('pageInfo');
            const alertBox = document.getElementById('alertBox');
            const userModal = document.getElementById('userModal');
            const modalTitle = document.getElementById('modalTitle');
            const userIdInput = document.getElementById('userId');
            const usernameInput = document.getElementById('usernameInput');
            const nameInput = document.getElementById('nameInput');
            const roleInput = document.getElementById('roleInput');
            const passwordInput = document.getElementById('passwordInput');
            const passwordHelp = document.getElementById('passwordHelp');
            const btnSave = document.getElementById('btnSave');

            function escapeHtml(text) {
                const div = document.createElement('div');
                div.textContent = String(text ?? '');
                return div.innerHTML;
            }

            function showAlert(message, type) {
                alertBox.className = 'alert show ' + (type === 'success' ? 'success' : 'error');
                alertBox.textContent = message;
                window.clearTimeout(showAlert._timer);
                showAlert._timer = window.setTimeout(() => {
                    alertBox.className = 'alert';
                    alertBox.textContent = '';
                }, 3000);
            }

            function formatDate(dateText) {
                if (!dateText) return '-';
                const d = new Date(String(dateText).replace(' ', 'T'));
                if (Number.isNaN(d.getTime())) return dateText;
                return d.toLocaleString('vi-VN');
            }

            function renderRoleOptions(selectedRoleId) {
                if (!Array.isArray(state.roles) || state.roles.length === 0) {
                    roleInput.innerHTML = '<option value="">Chưa có vai trò</option>';
                    return;
                }

                roleInput.innerHTML = state.roles.map(role => {
                    const selected = Number(role.id) === Number(selectedRoleId) ? ' selected' : '';
                    return '<option value="' + role.id + '"' + selected + '>' + escapeHtml(role.name) + '</option>';
                }).join('');
            }

            function loadRoles() {
                return fetch('api/roles.php', {
                        credentials: 'same-origin'
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (!data.success) {
                            throw new Error(data.message || 'Không thể tải vai trò.');
                        }
                        state.roles = Array.isArray(data.data) ? data.data : [];
                        renderRoleOptions(state.roles[0] ? state.roles[0].id : '');
                    });
            }

            function loadUsers() {
                const params = new URLSearchParams();
                params.set('page', String(state.page));
                if (state.search) {
                    params.set('search', state.search);
                }

                fetch('api/users.php?' + params.toString(), {
                        credentials: 'same-origin'
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (!data.success) {
                            throw new Error(data.message || 'Không thể tải danh sách người dùng.');
                        }

                        const rows = Array.isArray(data.data) ? data.data : [];
                        state.totalPages = Number(data.totalPages || 1);

                        if (!rows.length) {
                            tbody.innerHTML = '<tr><td colspan="7" class="empty">Không có người dùng nào.</td></tr>';
                        } else {
                            tbody.innerHTML = rows.map(row => {
                                const isCurrent = Number(row.id) === Number(currentAdminId);
                                return '' +
                                    '<tr>' +
                                    '<td>' + escapeHtml(row.id) + '</td>' +
                                    '<td>' + escapeHtml(row.username) + (isCurrent ? ' <span style="font-size:11px;color:#2d6a9f;">(Bạn)</span>' : '') + '</td>' +
                                    '<td>' + escapeHtml(row.name || '-') + '</td>' +
                                    '<td>' + escapeHtml(row.role_name || '-') + '</td>' +
                                    '<td>' + escapeHtml(formatDate(row.created_at)) + '</td>' +
                                    '<td>' + escapeHtml(formatDate(row.updated_at)) + '</td>' +
                                    '<td>' +
                                    '<div class="actions">' +
                                    '<button class="btn btn-outline btn-sm" data-action="edit" data-id="' + row.id + '">Sửa</button>' +
                                    '<button class="btn btn-danger btn-sm" data-action="delete" data-id="' + row.id + '">Xóa</button>' +
                                    '</div>' +
                                    '</td>' +
                                    '</tr>';
                            }).join('');
                        }

                        pageInfo.textContent = 'Trang ' + state.page + ' / ' + state.totalPages;
                    })
                    .catch(err => {
                        tbody.innerHTML = '<tr><td colspan="7" class="empty">Không thể tải dữ liệu.</td></tr>';
                        showAlert(err.message || 'Không thể tải dữ liệu.', 'error');
                    });
            }

            function openCreateModal() {
                state.editingId = null;
                userIdInput.value = '';
                usernameInput.value = '';
                nameInput.value = '';
                passwordInput.value = '';
                renderRoleOptions(state.roles[0] ? state.roles[0].id : '');
                modalTitle.textContent = 'Thêm người dùng';
                passwordHelp.textContent = 'Khi tạo mới: bắt buộc nhập mật khẩu.';
                userModal.classList.add('open');
                usernameInput.focus();
            }

            function openEditModal(id) {
                fetch('api/users.php?id=' + encodeURIComponent(id), {
                        credentials: 'same-origin'
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (!data.success || !data.data) {
                            throw new Error(data.message || 'Không thể lấy thông tin người dùng.');
                        }
                        state.editingId = Number(data.data.id);
                        userIdInput.value = String(data.data.id);
                        usernameInput.value = String(data.data.username || '');
                        nameInput.value = String(data.data.name || '');
                        renderRoleOptions(data.data.role_id || '');
                        passwordInput.value = '';
                        modalTitle.textContent = 'Cập nhật người dùng';
                        passwordHelp.textContent = 'Để trống nếu không đổi mật khẩu.';
                        userModal.classList.add('open');
                        usernameInput.focus();
                    })
                    .catch(err => showAlert(err.message || 'Không thể lấy dữ liệu.', 'error'));
            }

            function closeModal() {
                userModal.classList.remove('open');
            }

            function saveUser() {
                const username = usernameInput.value.trim();
                const name = nameInput.value.trim();
                const roleId = roleInput.value;
                const password = passwordInput.value;

                if (!username) {
                    showAlert('Vui lòng nhập tên đăng nhập.', 'error');
                    usernameInput.focus();
                    return;
                }

                if (!name) {
                    showAlert('Vui lòng nhập tên hiển thị.', 'error');
                    nameInput.focus();
                    return;
                }

                if (!roleId) {
                    showAlert('Vui lòng chọn vai trò.', 'error');
                    roleInput.focus();
                    return;
                }

                if (!state.editingId && password.length < 6) {
                    showAlert('Mật khẩu phải có ít nhất 6 ký tự.', 'error');
                    passwordInput.focus();
                    return;
                }

                const body = new URLSearchParams();
                body.set('username', username);
                body.set('name', name);
                body.set('role_id', roleId);
                if (password !== '') {
                    body.set('password', password);
                }

                let url = 'api/users.php';
                if (state.editingId) {
                    url += '?_method=PUT';
                    body.set('id', String(state.editingId));
                }

                btnSave.disabled = true;
                fetch(url, {
                        method: 'POST',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        },
                        body: body.toString(),
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (!data.success) {
                            throw new Error(data.message || 'Không thể lưu người dùng.');
                        }
                        closeModal();
                        showAlert(data.message || 'Lưu thành công.', 'success');
                        loadUsers();
                    })
                    .catch(err => showAlert(err.message || 'Không thể lưu dữ liệu.', 'error'))
                    .finally(() => {
                        btnSave.disabled = false;
                    });
            }

            function deleteUser(id) {
                if (!confirm('Bạn có chắc muốn xóa người dùng này?')) {
                    return;
                }

                const body = new URLSearchParams();
                body.set('id', String(id));

                fetch('api/users.php?_method=DELETE', {
                        method: 'POST',
                        credentials: 'same-origin',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        },
                        body: body.toString(),
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (!data.success) {
                            throw new Error(data.message || 'Không thể xóa người dùng.');
                        }
                        showAlert(data.message || 'Đã xóa người dùng.', 'success');
                        loadUsers();
                    })
                    .catch(err => showAlert(err.message || 'Không thể xóa dữ liệu.', 'error'));
            }

            document.getElementById('btnCreate').addEventListener('click', openCreateModal);
            document.getElementById('btnCancel').addEventListener('click', closeModal);
            document.getElementById('btnSave').addEventListener('click', saveUser);
            document.getElementById('btnSearch').addEventListener('click', function() {
                state.page = 1;
                state.search = document.getElementById('searchInput').value.trim();
                loadUsers();
            });
            document.getElementById('btnReset').addEventListener('click', function() {
                document.getElementById('searchInput').value = '';
                state.search = '';
                state.page = 1;
                loadUsers();
            });
            document.getElementById('searchInput').addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    state.page = 1;
                    state.search = this.value.trim();
                    loadUsers();
                }
            });
            document.getElementById('prevPage').addEventListener('click', function() {
                if (state.page > 1) {
                    state.page -= 1;
                    loadUsers();
                }
            });
            document.getElementById('nextPage').addEventListener('click', function() {
                if (state.page < state.totalPages) {
                    state.page += 1;
                    loadUsers();
                }
            });

            tbody.addEventListener('click', function(e) {
                const btn = e.target.closest('button[data-action]');
                if (!btn) return;
                const action = btn.getAttribute('data-action');
                const id = Number(btn.getAttribute('data-id'));
                if (!id) return;

                if (action === 'edit') {
                    openEditModal(id);
                } else if (action === 'delete') {
                    deleteUser(id);
                }
            });

            userModal.addEventListener('click', function(e) {
                if (e.target === userModal) {
                    closeModal();
                }
            });

            const userToggle = document.getElementById('userToggle');
            const userDropdown = document.getElementById('userDropdown');
            userToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                userDropdown.classList.toggle('open');
            });
            document.addEventListener('click', function() {
                userDropdown.classList.remove('open');
            });

            function updateClock() {
                const now = new Date();
                document.getElementById('currentTime').textContent = now.toLocaleString('vi-VN');
            }
            updateClock();
            setInterval(updateClock, 1000);

            loadRoles()
                .then(loadUsers)
                .catch(err => {
                    showAlert(err.message || 'Không thể tải vai trò.', 'error');
                    loadUsers();
                });
        })();
    </script>
</body>

</html>