<?php
session_start();
if (empty($_SESSION['admin_id'])) {
    header('Location: log-in.php');
    exit;
}
$admin_name = htmlspecialchars($_SESSION['admin_name'] ?? 'Admin');
$admin_username = htmlspecialchars($_SESSION['admin_username'] ?? '');

require_once __DIR__ . '/config/db.php';

// ── Thống kê tổng quan ──────────────────────────────────────
$total_dktt   = 0;
$total_moi    = 0;
$total_xu_ly  = 0;
$chart_labels = [];
$chart_data   = [];
$grade_data   = ['tieu-hoc' => 0, 'thcs' => 0, 'thpt' => 0];
$status_data  = [
    'moi' => 0,
    'da_lien_he' => 0,
    'da_xep_lich' => 0,
    'da_tham_quan' => 0,
    'huy' => 0,
];

try {
    // Kiểm tra bảng tồn tại
    $tables = $pdo->query("SHOW TABLES LIKE 'register_for_tour'")->fetchAll();
    if (!empty($tables)) {
        $total_dktt  = $pdo->query("SELECT COUNT(*) FROM register_for_tour")->fetchColumn();

        $statusRows = $pdo->query(
            "SELECT status, COUNT(*) AS cnt
             FROM register_for_tour
             GROUP BY status"
        )->fetchAll();
        foreach ($statusRows as $row) {
            if (isset($status_data[$row['status']])) {
                $status_data[$row['status']] = (int) $row['cnt'];
            }
        }

        $total_moi = $status_data['moi'];
        $total_xu_ly = $total_dktt - $total_moi - $status_data['huy'];

        // Đăng ký 7 ngày gần nhất
        $rows = $pdo->query(
            "SELECT DATE(created_at) as ngay, COUNT(*) as so_luong
             FROM register_for_tour
             WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
             GROUP BY DATE(created_at)
             ORDER BY ngay ASC"
        )->fetchAll();
        foreach ($rows as $r) {
            $chart_labels[] = date('d/m', strtotime($r['ngay']));
            $chart_data[]   = (int)$r['so_luong'];
        }

        // Phân bổ cấp học
        $gcols = $pdo->query(
            "SELECT grade_level, COUNT(*) as cnt FROM register_for_tour GROUP BY grade_level"
        )->fetchAll();
        foreach ($gcols as $g) {
            if (isset($grade_data[$g['grade_level']])) {
                $grade_data[$g['grade_level']] = (int)$g['cnt'];
            }
        }
    }
} catch (PDOException $e) {
    // Bảng chưa có — dữ liệu mẫu
}

// Nếu chưa có dữ liệu — hiển thị mẫu minh hoạ
if (empty($chart_labels)) {
    $chart_labels = ['27/03', '28/03', '29/03', '30/03', '31/03', '01/04', '02/04'];
    $chart_data   = [0, 0, 0, 0, 0, 0, 0];
}

$total_users = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard | Meyschool Đoàn Thị Điểm</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
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

        /* ── Main ── */
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
            color: var(--text);
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

        /* ── Content ── */
        .content {
            flex: 1;
            padding: 28px;
        }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .page-header h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-d);
        }

        .page-header .last-update {
            font-size: 12px;
            color: var(--muted);
        }

        /* ── Stat cards ── */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: var(--card);
            border-radius: 12px;
            padding: 20px 22px;
            border: 1px solid var(--border);
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 12px;
            transition: box-shadow 0.2s;
        }

        .stat-card:hover {
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        }

        .stat-info .label {
            font-size: 12px;
            color: var(--muted);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .stat-info .value {
            font-size: 28px;
            font-weight: 800;
            color: var(--primary-d);
            line-height: 1;
        }

        .stat-info .sub {
            font-size: 12px;
            color: var(--green);
            margin-top: 6px;
            font-weight: 500;
        }

        .stat-info .sub.warn {
            color: var(--yellow);
        }

        .stat-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .icon-blue {
            background: #eaf4fd;
        }

        .icon-green {
            background: #eafaf1;
        }

        .icon-yellow {
            background: #fef9e7;
        }

        .icon-purple {
            background: #f5eef8;
        }

        /* ── Charts row ── */
        .charts-row {
            display: grid;
            grid-template-columns: 1fr 380px;
            gap: 18px;
            margin-bottom: 24px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 22px 24px;
        }

        .card-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--primary-d);
            margin-bottom: 18px;
        }

        .chart-wrap {
            position: relative;
            height: 240px;
        }

        /* Donut legend */
        .donut-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .donut-chart {
            width: 200px;
            height: 200px;
        }

        .donut-legend {
            width: 100%;
            margin-top: 16px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6px 0;
            font-size: 13px;
            border-bottom: 1px solid var(--border);
        }

        .legend-item:last-child {
            border: none;
        }

        .legend-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 8px;
            flex-shrink: 0;
        }

        .legend-left {
            display: flex;
            align-items: center;
            color: var(--text);
        }

        .legend-val {
            font-weight: 700;
            color: var(--primary-d);
        }

        /* ── Table ── */
        .table-card {
            margin-bottom: 24px;
        }

        .table-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 3px 10px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 600;
        }

        .badge-new {
            background: #eaf4fd;
            color: #2980b9;
        }

        .badge-done {
            background: #eafaf1;
            color: #27ae60;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13.5px;
        }

        th {
            text-align: left;
            padding: 10px 14px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--border);
        }

        td {
            padding: 11px 14px;
            border-bottom: 1px solid var(--border);
            color: var(--text);
            vertical-align: middle;
        }

        tr:last-child td {
            border: none;
        }

        tr:hover td {
            background: var(--bg);
        }

        .empty-state {
            text-align: center;
            padding: 40px;
            color: var(--muted);
            font-size: 14px;
        }

        /* ── Responsive ── */
        @media (max-width: 1100px) {
            .stat-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .charts-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
            .main {
                margin-left: 0;
            }

            .stat-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- ══════════════ SIDEBAR ══════════════ -->
    <?php include __DIR__ . '/dashboard/sidebar.php'; ?>

    <!-- ══════════════ MAIN ══════════════ -->
    <div class="main">

        <!-- Topbar -->
        <header class="topbar">
            <div class="topbar-title">Dashboard</div>
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

        <!-- Content -->
        <div class="content">
            <div class="page-header">
                <h2>Tổng quan hệ thống</h2>
                <span class="last-update" id="last-update"></span>
            </div>

            <!-- Stat cards -->
            <div class="stat-grid">
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="label">Tổng đăng ký tham quan</div>
                        <div class="value"><?= number_format($total_dktt) ?></div>
                        <div class="sub">Tất cả thời gian</div>
                    </div>
                    <div class="stat-icon icon-blue">&#128101;</div>
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="label">Chờ xử lý</div>
                        <div class="value"><?= number_format($total_moi) ?></div>
                        <div class="sub warn">Cần liên hệ lại</div>
                    </div>
                    <div class="stat-icon icon-yellow">&#9993;</div>
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="label">Đã xử lý</div>
                        <div class="value"><?= number_format($total_xu_ly) ?></div>
                        <div class="sub">Đã liên hệ</div>
                    </div>
                    <div class="stat-icon icon-green">&#10003;</div>
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <div class="label">Người dùng hệ thống</div>
                        <div class="value"><?= number_format($total_users) ?></div>
                        <div class="sub">Tài khoản quản trị</div>
                    </div>
                    <div class="stat-icon icon-purple">&#128100;</div>
                </div>
            </div>

            <!-- Charts -->
            <div class="charts-row">
                <div class="card">
                    <div class="card-title">Đăng ký tham quan theo ngày (7 ngày gần nhất)</div>
                    <div class="chart-wrap">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">Phân bổ cấp học</div>
                    <div class="donut-wrap">
                        <canvas id="donutChart" class="donut-chart"></canvas>
                        <div class="donut-legend">
                            <div class="legend-item">
                                <div class="legend-left">
                                    <div class="legend-dot" style="background:#439bd4"></div>Tiểu học
                                </div>
                                <div class="legend-val"><?= $grade_data['tieu-hoc'] ?></div>
                            </div>
                            <div class="legend-item">
                                <div class="legend-left">
                                    <div class="legend-dot" style="background:#27ae60"></div>THCS
                                </div>
                                <div class="legend-val"><?= $grade_data['thcs'] ?></div>
                            </div>
                            <div class="legend-item">
                                <div class="legend-left">
                                    <div class="legend-dot" style="background:#f39c12"></div>THPT
                                </div>
                                <div class="legend-val"><?= $grade_data['thpt'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="card table-card">
                <div class="table-header">
                    <div class="card-title" style="margin:0">Đăng ký tham quan gần đây</div>
                </div>
                <?php
                $recent = [];
                try {
                    $t = $pdo->query("SHOW TABLES LIKE 'register_for_tour'")->fetchAll();
                    if (!empty($t)) {
                        $recent = $pdo->query(
                            "SELECT parent_name, phone, student_name, grade_level, preferred_time, status, created_at
                         FROM register_for_tour ORDER BY created_at DESC LIMIT 10"
                        )->fetchAll();
                    }
                } catch (PDOException $e) {
                }

                $grade_label = ['tieu-hoc' => 'Tiểu học', 'thcs' => 'THCS', 'thpt' => 'THPT'];
                $status_label = [
                    'moi' => 'Mới',
                    'da_lien_he' => 'Đã liên hệ',
                    'da_xep_lich' => 'Đã xếp lịch',
                    'da_tham_quan' => 'Đã tham quan',
                    'huy' => 'Đã hủy',
                ];
                ?>
                <?php if (empty($recent)): ?>
                    <div class="empty-state">&#128203; Chưa có đăng ký nào. Khi có dữ liệu sẽ hiển thị ở đây.</div>
                <?php else: ?>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Phụ huynh</th>
                                <th>Điện thoại</th>
                                <th>Học sinh</th>
                                <th>Cấp học</th>
                                <th>Thời gian mong muốn</th>
                                <th>Trạng thái</th>
                                <th>Ngày đăng ký</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($recent as $i => $row): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= htmlspecialchars($row['parent_name']) ?></td>
                                    <td><?= htmlspecialchars($row['phone']) ?></td>
                                    <td><?= htmlspecialchars($row['student_name']) ?></td>
                                    <td><?= $grade_label[$row['grade_level']] ?? $row['grade_level'] ?></td>
                                    <td><?= htmlspecialchars($row['preferred_time'] ?: '—') ?></td>
                                    <td>
                                        <?php
                                        $current_status = $row['status'] ?? 'moi';
                                        $badge_class = $current_status === 'moi' ? 'badge-new' : 'badge-done';
                                        ?>
                                        <span class="badge <?= $badge_class ?>"><?= htmlspecialchars($status_label[$current_status] ?? $current_status) ?></span>
                                    </td>
                                    <td><?= date('d/m/Y H:i', strtotime($row['created_at'])) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>

        </div><!-- /content -->
    </div><!-- /main -->

    <script>
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
                document.getElementById('last-update').textContent =
                    'Cập nhật lúc: ' + pad(d.getHours()) + ':' + pad(d.getMinutes()) + ':' + pad(d.getSeconds()) +
                    ' ' + d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
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

        // ── Line chart ──
        new Chart(document.getElementById('lineChart'), {
            type: 'line',
            data: {
                labels: <?= json_encode($chart_labels) ?>,
                datasets: [{
                    label: 'Lượt đăng ký',
                    data: <?= json_encode($chart_data) ?>,
                    borderColor: '#439bd4',
                    backgroundColor: 'rgba(67,155,212,0.12)',
                    borderWidth: 2.5,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#439bd4',
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        },
                        grid: {
                            color: '#f0f0f0'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // ── Donut chart ──
        new Chart(document.getElementById('donutChart'), {
            type: 'doughnut',
            data: {
                labels: ['Tiểu học', 'THCS', 'THPT'],
                datasets: [{
                    data: [
                        <?= $grade_data['tieu-hoc'] ?>,
                        <?= $grade_data['thcs'] ?>,
                        <?= $grade_data['thpt'] ?>
                    ],
                    backgroundColor: ['#439bd4', '#27ae60', '#f39c12'],
                    borderWidth: 0,
                    hoverOffset: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '65%',
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

</body>

</html>